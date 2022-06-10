<?php
namespace App\Helpers;

use AfricasTalking\SDK\AfricasTalking;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Kutia\Larafirebase\Facades\Larafirebase;
use App\Models\Notiification;
class HelperClass
{
    public function PHPMailerNotif($to, $subject, $type, $data)
    {
        try {
            $message = view('email.verifyEmail', $data)->render();
            if ($type == 1) {
                $message = view('email.requestOTP', $data)->render();
            }
            $from_email = "info@hinge.systems";
            $from_name = "Balosh Estate";
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = config('mail.mailers.smtp.email_host');
            $mail->SMTPAuth = true;
            $mail->SMTPAutoTLS = true;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ),
            );
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Username = config('mail.mailers.smtp.email_username');
            $mail->Password =config('mail.mailers.smtp.email_password');
            $mail->Port = 587;
            $mail->setFrom($from_email, $from_name);
            $mail->addAddress($to);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $dt = $mail->send();
            if ($dt) {
                return "Sent";
            } else {
                return "Error";
            }
        } catch (Exception $th) {
            \Log::info($th->getMessage());
        }

    }

    public function PostmarkNotify($to, $subject, $type, $data)
    {

        try {
            $message = view('email.verifyEmail', $data)->render();
            if ($type == 1) {
                $message = view('email.requestOTP', $data)->render();
            }
            $from_email = "info@hinge.systems";
            $from_name = "Balosh Estate";
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = config('mail.mailers.smtp.email_host');
            $mail->SMTPAuth = true;
            $mail->SMTPAutoTLS = true;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true,
                ),
            );
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Username = config('mail.mailers.smtp.email_username');
            $mail->Password =config('mail.mailers.smtp.email_password');
            $mail->Port = 587;
            $mail->setFrom($from_email, $from_name);
            $mail->addAddress($to);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $dt = $mail->send();
            if ($dt) {
                return "Sent";
            } else {
                return "Error";
            }
        } catch (Exception $th) {
            \Log::info($th->getMessage());
        }

    }


    public function WhatappNotify(Request $request){


    }

   

    public function sendNotification(Request $request)
    {
        $notify = new Notification();
        $notify->title = $request->title;
        $notify->body = $request->body;
        $notify->save();
         $deviceTokens =['{TOKEN_1}', '{TOKEN_2}'];
        return Larafirebase::withTitle('Test Title')
            ->withBody('Test body')
            ->withImage('https://firebase.google.com/images/social.png')
            ->withIcon('https://seeklogo.com/images/F/firebase-logo-402F407EE0-seeklogo.com.png')
            ->withClickAction('admin/notifications')
            ->withPriority('high')
            ->sendNotification($deviceTokens);
    }

    public function sendNotifyMessage(Request $request)
    {
        $deviceTokens =['{TOKEN_1}', '{TOKEN_2}'];
        $notify = new Notification();
        $notify->title = $request->title;
        $notify->body = $request->body;
        $notify->save();
        return Larafirebase::withTitle('Test Title')
            ->withBody('Test body')
            ->sendMessage($deviceTokens);
    }
    public function bulkNotification(Request $req){

        $notify = new Notification();
        $notify->title = $req->title;
        $notify->body = $req->body;
        $notify->save();
        $img = "";
        $api_key ="";
        $url = 'https://fcm.googleapis.com/fcm/send';
        $dataArr = array('click_action' => 'FLUTTER_NOTIFICATION_CLICK', 'id' => $req->id,'status'=>"done");
        $notification = array('title' =>$req->title, 'text' => $req->body, 'image'=> $img, 'sound' => 'default', 'badge' => '1',);
        $arrayToSend = array('to' => "/topics/all", 'notification' => $notification, 'data' => $dataArr, 'priority'=>'high');
        $fields = json_encode ($arrayToSend);
        $headers = array (
            'Authorization: key=' . $api_key,
            'Content-Type: application/json'
        );

        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

        $result = curl_exec ( $ch );
        //var_dump($result);
        curl_close ( $ch );
        return true;

    }

    public function SMSNotify(y$phonenumber, $message)
    {
        $username = 'sandbox'; // use 'sandbox' for development in the test environment
        $apiKey = '2905d0bd2fe763552f4d28c0e2e3fd09f3eda36e860ad2f04ea3eb5d8976c650'; // use your sandbox app API key for development in the test environment
        $AT = new AfricasTalking($username, $apiKey);
        // Get one of the services
        $sms = $AT->sms();
        $mobilenumber = $phonenumber;
        // Use the service
        if (substr($phonenumber, 0, 1) == '0') {
            $mobilenumber = "+234" . substr($mobilenumber, 1);
        }
        $result = $sms->send([
            'to' => $mobilenumber,
            'message' => $message,
        ]);
        \Log::info("sms sent ");
        return $result;

    }
    public function transactionfee($price)
    {
        $feecap = 2000;
        $ApplicableFees = (0.015 * $price);
        if ($ApplicableFees >= $feecap) {
            $transfee = $feecap;
        } else {
            $transfee = $ApplicableFees + 100;
        }
        return intval(ceil($transfee));
    }
    public function finalamount($price)
    {
        $feecap = 2000;
        $ApplicableFees = (0.015 * $price);
        if ($ApplicableFees >= $feecap) {
            $finalprice = $price + $feecap;
        } else {
            $finalprice = (($price + 100) / (1 - 0.015)) + 0.01;
        }
        return intval(ceil($finalprice));
    }

}