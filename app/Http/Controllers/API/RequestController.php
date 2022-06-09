<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\RequestComplain;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RequestController extends BaseController
{

    public function CreateRequest(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $requestcomplain= new RequestComplain();
            if ($request->type == "reply") {
                $requestcomplain->parent_id = $request->parentid;
                $pmsg = RequestComplain::where('id', $request->parentid)->orWhere('parent_id', $request->parentid)->get();
                $requestcomplain->category = $pmsg[0]->category;
                $requestcomplain->subject = $pmsg[0]->subject;
            } else {
                $requestcomplain->category = $request->category;
                $requestcomplain->subject = $request->subject;
            }
            $requestcomplain->request = $request->message;
            $requestcomplain->user_id = $user->id;
            $requestcomplain->sender_id = $user->id;
            $requestcomplain->manager_user_id = 1;
         
            try {
                if ($request->image != "null") {
                    $name = uniqid() . '.' . "png";
                    $filepath = storage_path('app/public/') . 'attachments/' . $name;
                    file_put_contents($filepath, base64_decode($request->image));
                    $requestcomplain->attachfile =   $filepath;
                
                }
            } catch (\Throwable $th) {
                \Log::info($th);
                return $this->sendError('Error.', ['error' => 'Error occur']);
            }
            $requestcomplain->save();
            $success['request'] = "Request submitted";
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }

    public function GetRequests(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $pending = RequestComplain::where('user_id', $user->id)->where('parent_id', null)->where('status', 0)->count();
            $allRequest = RequestComplain::where('user_id', $user->id)->where('parent_id', null)->where('status', 2)->count();
            $RequestComplain = RequestComplain::where('user_id', $user->id)->where('parent_id', null)->orderBy('id', 'desc')->paginate(10);
            foreach ($RequestComplain as $key => $value) {
                $value->transaction_date = \Carbon\Carbon::parse($value->created_at)->format('Y-m-d');
            }
            $success['request_data'] = $RequestComplain;
            $success['pendingcnt'] = $pending;
            $success['requestcnt'] = $allRequest;
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }

    public function RequestDetails(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $RequestComplain = RequestComplain::where('id', $id)->orWhere('parent_id', $id)->orderBy('id', 'desc')->get();
            foreach ($RequestComplain as $key => $value) { # code...
            $value->isread = 1;
                $value->update();
                $sender = User::where('id', $value->sender_id)->first();
                $value->sender = $sender->role;
            }
            $success['request_data'] = $RequestComplain;
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }

    public function LoadCategory(Request $request){
        $category=ReqCategory::get();
        $success['category'] = $category;
        return $this->sendResponse($success, 'success');
        
    }
}