@extends('sitio.layaout.base')
@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Mensaje enviado!</title>

</head>
<body>
<br>
<br>
<br>



    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Mensaje enviado!</h1>
            <p class="lead fw-normal">Tus datos han sido enviados de forma correcta, gracias por comunicarte con nosotros, en las proximas 24 hrs un asistente se comunicara contigo para atender tu peticion.

            </p>
            <p></p>
            <a href="{{ route('sitio.index')}}" class="btn btn-info my-4">Volver al inicio</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

</body>
</html>

<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>

@endsection
