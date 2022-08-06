<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\greenapple;

class sendEmail extends Controller
{
          public function index(){
            if (!request('e_f_bot_detection')) {
            if (filter_var(request('e_email'), FILTER_VALIDATE_EMAIL)) {
            $details = [
            'title' => request('e_name'),
            'body'=> request('e_message'),
            'subject'=> request('e_subject'),
            'name'=> request('e_name'),
            'phone'=> request('e_phone'),
            'email'=> request('e_email')
            ];
            Mail::to(["marcc@greenappletravel.ae"])->send(new greenapple($details));
            return redirect('/')->with('mailstatus', 'Thank you for your email. Please expect a response from us as soon as possible!');

            }

            else {
            return redirect('/')->with('MailInvalid', 'Submitted Email is not a valid email address, Please try again.');
            }
            }
            else {
            return redirect('/')->with('BotDetect', 'Warning Bot DETECTED! Message not Sent.');
            }
        }
}
