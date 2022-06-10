<?php

namespace App\Http\Controllers;

use App\Models\Messaging;
use Illuminate\Http\Request;

class MessageController extends BaseController
{

    public function SendMessage(Request $request)
    {
        $user = User::where('access_token', $request->access_token)->first();
        if ($user) {
            if ($user->role == 1) {

            } else {
                $message = new Messaging();
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
                        $requestcomplain->attachfile = $filepath;

                    }
                } catch (\Throwable $th) {
                    \Log::info($th);
                    return $this->sendError('Error.', ['error' => 'Error occur']);
                }
                $requestcomplain->save();
                $success['request'] = "Request submitted";
                return $this->sendResponse($success, 'success');
            }
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }

    }

    public function LoadMessages(Request $request)
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}