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
        return back();
    }
    function send(Request $request){
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'subject' => 'required',
      'message' =>  'required'
     ]);

        $details = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

     Mail::to('190103348@stu.sdu.edu.kz')->send(new TestMail($details));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
