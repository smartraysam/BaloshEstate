<?php
namespace App\Helpers;

use AfricasTalking\SDK\AfricasTalking;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

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
    public function SMSNotif(y$phonenumber, $message)
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