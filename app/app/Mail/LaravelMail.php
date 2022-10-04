<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LaravelMail extends Mailable
{
    use Queueable, SerializesModels;
    public  $accessData;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    // Recived data from mailController
    public function __construct($data)
    {
        // dd($data);
        $this->accessData = $data;
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.profilecard',['data'=>$this->accessData])
        ->subject("laravel Mailing System");
    }
}
