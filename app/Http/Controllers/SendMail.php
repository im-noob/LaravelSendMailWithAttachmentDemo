<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail as SM;
use Illuminate\Support\Facades\Mail;

class SendMail extends Controller
{
    public function send(){

        $to_email = 'amritesh.zealousys@gmail.com';
        

        Mail::to($to_email)
            ->send(new SM());

        echo "send";
    }
}
