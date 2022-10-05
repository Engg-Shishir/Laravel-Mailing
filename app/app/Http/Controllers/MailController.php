<?php

namespace App\Http\Controllers;

use App\Mail\LaravelMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function viewcard()
    {
      $user = User::where('name','Shishir Bhuiyan')->first();

      $data = [
        'name' => $user->name,
        'email' => $user->email,
        'address' => $user->address
      ];
    
       // Before send mail, view your card tamplate
       return new LaravelMail($data);
    }
    public function sendcard()
    {
      $user = User::where('name','Shishir Bhuiyan')->first();

      $data = [
        'name' => $user->name,
        'email' => $user->email,
        'address' => $user->address
      ];
    
       Mail::to('shishir16@cse.pstu.ac.bd')->send(new LaravelMail($data));
       return redirect()->route('cardview');
    }
}
