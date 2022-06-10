<?php

namespace App\Http\Controllers;
use App\Http\Controllers\API\BaseController as BaseController;

use App\Models\EmergencyContacts;

use App\Models\User;
use Illuminate\Http\Request;

class EmergencyController extends BaseController
{
    public function emergencyAlert(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $contacts = EmergencyContacts::where('user_id', $user->id)->get();
            $helper = new HelperClass();
            $manager_user_id = $user->estateuser->manager_user_id;
            $manager_number = Managers::where('user_id', $manager_user_id)->value('phonenumber');
            $message = $user->name . " has an emergency, Your urgent help is needed";
        
        
            foreach ($contacts as $contact) {
                  //Send push notication, whatsapp  notication, sms 
            }
            $alert = "emergency required ";
            $success['alert'] = $alert;
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }

    public function getEmergencyContact(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $contacts = EmergencyContacts::where('user_id', $user->id)->get();
            $success['contacts'] = $contacts;
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }

    public function postEmergencyContact(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $currentcontacts = EmergencyContacts::where('user_id', $user->id)->get();
            if (count($currentcontacts) == 5) {
                $alert = "Maximum number of contacts reached";
                $success['alert'] = $alert;
                return $this->sendResponse($success, 'success');
            }
            $emergencycontact = EmergencyContacts::where('contact_phone', $request->contact_phone)->orWhere('contact_name', $request->contact_name)->first();
            if ($emergencycontact) {
                $alert = "Contact already added";
                $success['alert'] = $alert;
                return $this->sendResponse($success, 'success');
            }
            $emergencycontact = new EmergencyContacts();
            $emergencycontact->user_id = $user->id;
            $emergencycontact->contact_phone = $request->contact_phone;
            $emergencycontact->contact_name = $request->contact_name;
            $emergencycontact->save();
            $success['contact'] = $emergencycontact;
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }
    public function deleteEmergencyContact(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $emergencycontact = EmergencyContacts::where('id', $request->id)->first();
            if ($emergencycontact) {
                $emergencycontact->delete();
            }
            $alert = "Contact deleted";
            $success['alert'] = $alert;
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }
}