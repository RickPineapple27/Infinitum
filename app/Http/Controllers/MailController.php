<?php

namespace App\Http\Controllers;

use App\Mail\contactanosMailable;
use App\Mail\Mailimprimir;
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




      ///  Mail::to($message['email'])->send(new Mailimprimir($message) );

        //aqui ya se esta enviando el correo al lugar correcto
        Mail::to('contratayacontacto@gmail.com')->send(new contactanosMailable($message));

       //aqui retornamos cada uno de los datos que enviamos en el formulario en la app
        //return $message;

        //hacer contructor para armar la tabla de estos datos
       // $this->mailImprimir = new Mailimprimir($message);



        //con estas mandamos a traer las vistas
       //return view ('pages.mensajEnviado');
        return view( 'emails.TestEmail');


        //Con esta mandamos a traer cada uno de los valores por separado
      // return ($message['name']);

        // Con esta solo restornamos un mensaje con la leyenda "Mensaje enviado"
       // return "Mensaje enviado";
    }



}
