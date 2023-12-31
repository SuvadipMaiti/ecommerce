<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ForgotPasswordMail;

class AuthController extends Controller
{
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('suvadipmaiti5@gmail.com')->send(new ForgotPasswordMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
