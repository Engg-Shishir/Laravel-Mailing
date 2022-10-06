<?php

namespace App\Http\Controllers;

use App\Mail\LaravelMail;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use PDF;

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



    
    public function sendfile()
    {


      $name = "Shishir Bhuiyan";
      $email = "Shishir@gmail.com";

      // unique pdf name
      $pdfName = 'pdfFolder/pdf_'.Str::random('10').'.pdf';

      // process for send local image in pdf
      $path = public_path().'/logo.png';
      $type = pathinfo($path,PATHINFO_EXTENSION);
      $data = file_get_contents($path);
      $image = 'data:image/'.$type.';base64,'.base64_encode($data);




      // Just save in specific folder
      FacadePdf::loadView('pdf',['name'=>$name,'email'=>$email,'image'=>$image])->save(public_path($pdfName));





      

        // $data["email"] = "shishirbhuiyan83@gmail.com";
        // $data["title"] = "Laravel Mail With File";
        // $data["body"] = "Mailing file demo";

        // $pdf = app('dompdf.wrapper');
        // $pdf->loadView('email.cv',$data)->setPaper('a4', 'portrait');


        // Mail::send('email.cv', $data, function($message)use($data, $pdf) {
        //     $message->to($data["email"])
        //             ->subject($data["title"])
        //             ->attachData($pdf->output(), "files.pdf");
        // });

        // dd('Mail sent successfully');
    }
}
