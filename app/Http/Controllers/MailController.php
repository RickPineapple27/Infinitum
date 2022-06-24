<?php

namespace App\Http\Controllers;

use App\Mail\contactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'referencia' =>['required'],
            'direccion' => ['required'],
            'telefono' => ['required'],
            'paquete' => ['required'],
            'colonia' => ['required'],
        ]);
        $message=[
            'name' => $request->name,
            'email' => $request->email,
            'referencia' => $request->referencia,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'paquete' => $request->paquete,
            'colonia' => $request->colonia
        ];
       // Mail::to($message['email'])->send(new contactanosMailable($message) );
        Mail::to('contactoventas.infinitum@gmail.com')->send(new contactanosMailable($message));

       //return view ('pages.mensajEnviado');
        return view( 'emails.TestEmail');
        //return redirect('ayuda');
       //return view($message);

       //return redirect()->route("pages.mensajEnviado");
      //  return $this->view( 'emails.TestEmail');

       // return new contactanosMailable($message['name']);
        // return new contactanosMailable(buid);
       // return "Mensaje enviado";
    }



}
