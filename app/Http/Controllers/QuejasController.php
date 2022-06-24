<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\quejasMailable;
class QuejasController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'subject' => ['required']

        ]);

        $message=[
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject

        ];
        // Mail::to($message['email'])->send(new contactanosMailable($message) );
        Mail::to('contactoventas.infinitum@gmail.com')->send(new quejasMailable($message) );
        // return view ('pages.mensajEnviado');
        return view( 'emails.TestEmail');


        //return redirect()->route("pages.mensajEnviado");
        //  return $this->view( 'emails.TestEmail');

        // return new contactanosMailable($message);
        // return new contactanosMailable(buid);
        //return "Mensaje enviado";
    }
}
