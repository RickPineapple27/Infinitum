<?php

namespace App\Http\Controllers;

use App\Mail\contactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{

    public function store(Request $request)
    {
        $message=[
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'address' => $request->address,
            'tel' => $request->tel,
            'paquete' => $request->paquete
        ];
       // Mail::to($message['email'])->send(new contactanosMailable($message) );
        Mail::to('contactoventas.infinitum@gmail.com')->send(new contactanosMailable($message) );
       // return view ('pages.mensajEnviado');
        return view( 'emails.TestEmail');


       //return redirect()->route("pages.mensajEnviado");
      //  return $this->view( 'emails.TestEmail');

        // return new contactanosMailable($message);
        // return new contactanosMailable(buid);
        //return "Mensaje enviado";
    }


}
