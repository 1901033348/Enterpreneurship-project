<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendToMail(){
        $details = new \stdClass();
        $details -> receiver = 'Kuanysh Sarsembek';
        $details -> sender = 'Syerikjan Yergalym';
        // $details = [
        //     'title' => 'Mail from Kuanysh',
        //     'body' => 'This is for testing mail'
        // ];

        Mail::to("190103348@stu.sdu.edu.kz")->send(new TestMail($details));
        alert("Sent");
        return back();
    }
}
