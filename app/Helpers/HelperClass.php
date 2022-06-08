<?php
namespace App\Helpers;

use AfricasTalking\SDK\AfricasTalking;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class HelperClass
{
    public function sendwithPHPMailer($to, $subject, $type, $data)
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

    public function sendwithPostmark($to, $subject, $type, $data)
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
    public function sendEmailUser($emailAddress, $subject, $message)
    {
        try {
            $companyEmail = "donotreply@servilink.ng";
            $to = $emailAddress;
            $from = "From:Servilink <" . $companyEmail . ">";
            $header = $from . "\r\n" . "Content-Type: text/html; charset=utf-8";
            $allMsgBody = '<!DOCTYPE html>
            <html lang="en">
            <body style="background: white">
                <section style="margin-top:20px;margin-left: 10px"">
                    <div class="container">
                    <div class="mobile" style="margin-left: ">
                           <a href="{{ route(' . 'welcome' . ') }}"><img src="https://www.servilink.ng/img/logo.png" alt="logo" width="80"
                                height="80" /> </a>

                        <h3 style="margin-bottom: 5px">Transaction Successful</h3>
                        <h2 style="font-weight: bolder">Unit Token:' . $message->token . '</h2>
                        <div style="margin-top: 30px">
                            <h4 >Transaction Ref:  ' . $message->txref . '</h4>
                            <h4>Meter Number: ' . $message->meterPan . '</h4>
                            <h4>Electricity cost: ₦ ' . $message->vend_value . '</h4>
                            <h4>Charges(Payment & vend gateway): ₦ ' . $message->charges . '</h4>
                            <h4>Units in kWh:  ' . $message->unitsActual . '</h4>
                            <h4>Total: ₦ ' . $message->amount . '</h4>
                        </div>

                    </div>
                    <div style="margin-top: 40px">
                        <small class="copyright">Powered by <a href="http://Servilink.ng" target="_blank"> Servilink</a></small>
                    </div>
                    </div>
                </section>
            </body>
            </html>';
            // $allMsgBody = $message;
            $path = "-f " . $companyEmail;
            \Log::info("email notification sent");
            mail($to, $subject, $allMsgBody, $header, $path);
        } catch (Exception $e) {
            /* PHPMailer exception. */
            \Log::info("email notification sent fail");
        }
    }

    public function sendRegistrationEmail($emailAddress, $subject, $message)
    {
        try {
            $companyEmail = "donotreply@servilink.ng";
            $to = $emailAddress;
            $from = "From:Servilink <" . $companyEmail . ">";
            $header = $from . "\r\n" . "Content-Type: text/html; charset=utf-8";
            $allMsgBody = '<!DOCTYPE html>
            <html lang="en">
            <body style="background: white">
                <section style="margin-top:20px;margin-left:8px"">
                    <div class="container">
                    <div class="mobile" style="margin-left: ">
                          <a href="{{ route(' . 'welcome' . ') }}"><img src="https://www.servilink.ng/img/logo.png" alt="logo" width="80"
                                height="80" /> </a>

                        <h3 style="margin-bottom: 5px">Account Creation</h3>
                        <h2 style="font-weight: bolder">Your account has been created</h2
                        <p>Visit <a href="https://servilink.ng/login" target="_blank"> Servilink</a> to log into your account</p>
                        <div style="margin-top: 30px">
                            <h4 >Login Email:  ' . $message->email . '</h4>
                            <h4>Login Password:' . $message->estateuser->phonenumber . '</h4>
                        </div>

                    </div>
                    <div style="margin-top: 40px">
                        <small class="copyright">Powered by <a href="http://Servilink.ng" target="_blank"> Servilink</a></small>
                    </div>
                    </div>
                </section>
            </body>
            </html>';
            // $allMsgBody = $message;
            $path = "-f " . $companyEmail;
            \Log::info("email notification sent");
            mail($to, $subject, $allMsgBody, $header, $path);
        } catch (Exception $e) {
            /* PHPMailer exception. */
            \Log::info("email notification sent fail");
        }
    }

    public function sendEmailManager($emailAddress, $subject, $message)
    {
        try {
            $companyEmail = "donotreply@servilink.ng";
            $to = $emailAddress;
            $from = "From:Servilink <" . $companyEmail . ">";
            $header = $from . "\r\n" . "Content-Type: text/html; charset=utf-8";
            $allMsgBody = '<!DOCTYPE html>
            <html lang="en">
            <body style="background: white">
                <section style="margin-top:20px;margin-left: 210px"">
                    <div class="container">
                    <div class="mobile" style="margin-left: ">
                        <a href="{{ route(' . 'welcome' . ') }}"><img src="https://www.servilink.ng/img/logo.png" alt="logo" width="80"
                                height="80" /> </a>

                        <h3 style="margin-bottom: 5px">Successful Customer Transaction Notification</h3>
                        <h2 style="font-weight: bolder"></h2>
                        <div style="margin-top: 30px">
                            <h4 >Transaction Ref:  ' . $message->txref . '</h4>
                            <h4>Meter Number: ₦ ' . $message->meterPan . '</h4>
                            <h4>Purchase Amount: ₦ ' . $message->vend_value . '</h4>
                            <h4>Purchase Units in kWh:  ' . $message->unitsActual . '</h4>
                        </div>
                        <h3 style="font-weight: bolder">The Fund will be settle into your bank account within 24 to 48hrs</h3>

                    </div>
                    <div style="margin-top: 40px">
                    <small class="copyright">Powered by <a href="http://Servilink.ng" target="_blank"> Servlink</a></small>
                    </div>
                    </div>
                </section>
            </body>
            </html>';
            // $allMsgBody = $message;
            $path = "-f " . $companyEmail;
            \Log::info("email notification sent");
            mail($to, $subject, $allMsgBody, $header, $path);
        } catch (Exception $e) {
            /* PHPMailer exception. */
            \Log::info("email notification sent fail");
        }
    }

    public function sendVendRequest($emailAddress, $subject, $message)
    {
        try {
            $companyEmail = "donotreply@servilink.ng";
            $to = $emailAddress;
            $from = "From:Servilink <" . $companyEmail . ">";
            $header = $from . "\r\n" . "Content-Type: text/html; charset=utf-8";
            $allMsgBody = '<!DOCTYPE html>
            <html lang="en">
            <body style="background: white">
                <section style="margin-top:20px;margin-left:8px"">
                    <div class="container">
                    <div class="mobile" style="margin-left: ">
                        <a href="{{ route(' . 'welcome' . ') }}"><img src="https://www.servilink.ng/img/logo.png" alt="logo" width="80"
                                height="80" /> </a>
                        <h3 style="margin-bottom: 5px">Admin Vending Request</h3>
                        <h2 style="font-weight: bolder"> A vending request of N' . $message->amount . ' for ' . $message->meter . ' meter number was sent by the admin</h2>
                        <a href="#"> Approve the request by click the link below</a>
                        <p>https://servilink.ng/confirm/vending?requestcode=' . $message->requestcode . ' in the browser</p>
                        <p>Note: Link expires in 15 minutes</p>
                    </div>
                    <div style="margin-top: 40px">
                        <small class="copyright">Powered by <a href="http://Servilink.ng" target="_blank"> Servilink</a></small>
                    </div>
                    </div>
                </section>
            </body>
            </html>';
            // $allMsgBody = $message;
            $path = "-f " . $companyEmail;
            mail($to, $subject, $allMsgBody, $header, $path);
        } catch (Exception $e) {
            /* PHPMailer exception. */
            \Log::info("email notification sent fail");
        }
    }

    public function sendSMS($phonenumber, $message)
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