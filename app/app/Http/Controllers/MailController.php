<?php

namespace App\Http\Controllers;

use App\Mail\LaravelMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
      $user = User::where('name','Shishir Bhuiyan')->first();

      $data = [
        'name' => $user->name,
        'email' => $user->email,
        'address' => $user->address
      ];
    
       Mail::to('shishir16@cse.pstu.ac.bd')->send(new LaravelMail($data));
    
       return " Email Sent";
    }
}
