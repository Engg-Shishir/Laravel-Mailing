<?php

namespace App\Http\Controllers;

use App\Mail\LaravelMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
       $details = [
         'title' => 'mail From Localhost Laravel',
         'body' => 'This is for testting mail using gmail'
       ];
    
       Mail::to('shishir16@cse.pstu.ac.bd')->send(new LaravelMail());
    
       return " Email Sent";
    }
}
