<?php

namespace App\Http\Controllers;

use App\Mail\Mailimprimir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use mysql_xdevapi\Table;
use PhpParser\Node\Expr\Array_;
use function PHPUnit\Framework\stringEndsWith;

class imprimirController extends Controller
{
    public $subject='mensaje recibido';
    public $msg;
    public function more(Request $request)
    {
        $message = [
            'name' => $request->name,
            'email' => $request->email,
            'referencia' => $request->referencia,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'paquete' => $request->paquete,
            'colonia' => $request->colonia
        ];

        //tenemos que buscar la forma de enviar estos datos a una tabla aparte de la de email en la ruta emails.imprimir
        return "Mensaje enviado".$request;
       //echo "los datos son".$message;


    }


}

