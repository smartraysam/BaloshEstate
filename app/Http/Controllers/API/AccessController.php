<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Access;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AccessController extends BaseController
{

    public function GetAccess(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        $from = $request->from;
        $to = $request->to;
        $start = Carbon::parse($from);
        $end = Carbon::parse($to)->addDay();
        $this_month = [$start, $end];
        if ($user) {
            $todaysVisit = Access::where('user_id', $user->id)->whereDate('created_at', Carbon::today())->count();
            $allVisitor = Access::where('user_id', $user->id)->whereBetween('created_at', $this_month)->count();
            $visits = Access::where('user_id', $user->id)->whereBetween('created_at', $this_month)
                ->orderBy('id', 'desc')->paginate(10);
            foreach ($visits as $key => $value) {
                $value->transaction_date = \Carbon\Carbon::parse($value->created_at)->format('Y-m-d H:m');
                $now = date('Y-m-d H:i');
                $entry = $value->expire_time;
                $date1 = Carbon::parse($entry)->format('Y-m-d H:i');
                $date2 = Carbon::createFromFormat('Y-m-d H:i', $now);
                if ($date2->gt($date1)) {
                    $value->status = 3;
                }
            }
            $success['access'] = $visits;
            $success['today_access_cnt'] = $todaysVisit;
            $success['query_access_cnt'] = $allVisitor;
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }
    public function CreateAccess(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            $visitornumber = str_replace(' ', '', $request->visitornumber);
            $access = new Access();
            $access->user_id = $user->id;
            $token = rand(10, 50) . rand(40, 80) . rand(20, 99);
            $access->name = $request->visitorname;
            $access->phonenumber = $visitornumber;
            $access->access_code = $token;
            $access->valid_period = $request->period;
            $access->entry_time = $request->entrytime;
            $access->entry_status = false;
            $access->exit_status = false;
            $eTime = Carbon::createFromFormat('d/m/Y H:s', $request->entrydate . " " . $request->entrytime);
            $eDate = Carbon::createFromFormat('d/m/Y', $request->entrydate);
            $access->entry_date = $eDate->format('Y-m-d');
            $exptime = $eTime->addHours((int) $request->period);
            $access->expire_time = $exptime->format('Y-m-d H:i');
            $access->save();
            $success['access'] = $access;

            // send code through whatapp and sms
            return $this->sendResponse($success, 'success');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }

    public function AuthAccess(Request $request)
    {
        $access = Access::where('access_code', $request->code)->where('status', 1)->first();
        if ($access) {
            $now = date('Y-m-d H:i');
            $entry = $access->expire_time;
            $date1 = Carbon::parse($entry)->format('Y-m-d H:i');
            $date2 = Carbon::createFromFormat('Y-m-d H:i', $now);
            if ($date2->gt($date1)) { //expire
                $access->status = 3;
                $success['access_cmd'] = false;
            } else {
                $success['access_cmd'] = true;
            }
        } else {
            $success['access_cmd'] = false;
        }
        $access->use_time = $now;
        $acces->update();
        
        return $this->sendResponse($success, 'success');

    }

    public function UpdateAccess(Request $request)
    {
        $action = $request->action;
        $status = 1;
        if ($action == 1) { //cancel
            //send cancel whatapp/sms to visitor
            $staus = 4;
        } elseif ($action == 2) { //used
            //send messaege to resident of access use event
            $status = 2;
        }
        $access = Access::where('access_code', $request->code)->where('status', 1)->first();
        if ($access) {
            $access->status=$status;
            $access->use_time = Carbon::now();
            $acces->update();
        }
       }

}