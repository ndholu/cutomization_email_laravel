<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DynamicEmail;

class EmailSendController extends Controller
{
    public function testingmail()
    {

        $mailData['data']='';
        $mailData['email']='namrata.vibrantcoders@gmail.com';
        $mailData['subject'] = 'Salon - Test';
        $mailData['attachment'] = array();
        $mailData['template'] ="email_send";
        $mailData['mailto'] = 'namrata.vibrantcoders@gmail.com';


        // Mail::send($mailData['template'], $mailData, function($message) use($mailData) {
        //     $message->to($mailData['mailto']);
        //     $message->subject('New email!!!');
        // });

        Mail::send([], $mailData, function ($message) use ($mailData)
        {
            $message->from('parthkhunt12@gmail.com');
            $message->to('namrata.vibrantcoders@gmail.com');
            $message->subject('Salon - Test');
            $message->setBody('email_send');

        });

        // return $mailsend;
        // exit;
    }


    public function sendEmail(Request $request) {


        $toEmail    =   'namrata.vibrantcoders@gmail.com';
        $data       =   array(
            "message"    =>   'hello there',
            "email"       =>    'parthkhunt37@gmail.com',
            "name"          => "namrata",
        );

        // pass dynamic message to mail class
        Mail::to($toEmail)->send(new DynamicEmail($data));
        exit('test');


    }


}
