<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use App\Models\UserVerify;
use App\Helpers\HelperClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{

    public function registration(Request $request)
    {
     
        $rules=array(
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        );
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return $this->sendError('Unauthorised.', ['error' =>  $validator->errors()]);
        }

        $data = $request->all();
        $createUser = $this->create($data);
        $otp = random_int(1000, 9999);

        UserVerify::create([
            'user_id' => $createUser->id,
            'otp' => $otp,
        ]);

        $help = new HelperClass();
        $datas = ['otp'=>$otp];
        $help->sendwithPHPMailer($request->email,'Email Verification',0,$datas);
        // send otp to whatapp or number
        $success['otp'] = $otp;
        $messages = "Registration successful, OTP sent to email for verification";
        return $this->sendResponse($success, $messages);
    }

    public function getOTP(Request $request)
    {
        $rules=array(
            'email' => 'required|email'
        );
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails())
        {
            return $this->sendError('Unauthorised.', ['error' =>  $validator->errors()]);
        }

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $otp = random_int(1000, 9999);
            $userotp= UserVerify::where('user_id',$user->id)->fist();
            if($userotp){
                $userotp->otp= $otp;
                $userotp->update();
            }else{                
                UserVerify::create([
                    'user_id' => $createUser->id,
                    'otp' => $otp,
                ]);
            }
            $help = new HelperClass();
            $data = ['otp'=>$otp];
            $help->sendwithPHPMailer($request->email,'OTP RequestP',1,$data);
            // send otp to whatapp or number
            $success['otp'] = $otp;
            $messages = "New OTP sent to email";
            return $this->sendResponse($success, $messages);
        }
        
        return $this->sendError('Unauthorised.', ['error' => 'Email does not exist']);
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            if ($user->is_email_verified == false) {
                return $this->sendError('Unauthorised.', ['error' => 'Account not yet verified']);
            }
            if ($user->role == 2) {
                $user->access_token = Str::uuid();
                $user->update();
                $success['access_token'] = $user->access_token;
                return $this->sendResponse($success, 'User login successfully.');
            }
            return $this->sendError('Unauthorised.', ['error' => 'Only user can access this platform']);

        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Invalid email address or password']);
        }
    }
    public function logout(Request $request)
    {
        $user = User::where('access_token', $request->token)->first();
        $user->remember_token = null;
        $user->access_token = null;
        $user->update();
        $success['access_token'] = null;
        return $this->sendResponse($success, 'User logout successfully.');
    }
    public function userData(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $success['user'] = $user;
            return $this->sendResponse($success, 'User data retrived.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    public function verifyAccount($otp)
    {
        $verifyUser = UserVerify::where('otp', $otp)->first();
        $message = 'Invalid otp';

        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;
            if (!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->update();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
            $success['user'] = $user;
            return $this->sendResponse($success, $message);
        }
        return $this->sendError('Unauthorised.', ['error' => $message]);
    }

    public function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'role'=>2,
            'password' => Hash::make($data['password']),
        ]);
    }

    public function updateEmail(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $user->email = $request->email;
            $user->update();
            $alert = "Email Address Updated";
            $success['alert'] = $alert;
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }
    public function updatePhone(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();

        if ($user) {
            $userdata = $user->estateuser;
            $userdata->phonenumber = $request->phone_number;
            $userdata->update();
            $alert = "Phone Number Updated";
            $success['alert'] = $alert;
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }
    public function updatePassword(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $oldpass = $request->old_password;
            $newpass = $request->new_password;
            $oldpassword = Hash::make($oldpass);
            if ($oldpassword == $user->password) {
                $user->password = Hash::make($newpass);
                $user->update();
                $alert = "Password changed successfully";
                $success['alert'] = $alert;
                return $this->sendResponse($success, 'success');

            }
            return $this->sendError('Error.', ['error' => 'Old Password not correct']);

        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }

}