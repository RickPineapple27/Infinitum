@extends('sitio.layaout.acercade')
@section('content')




    <div >
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-6 fw-normal">ABOUT</h1>
            <p class="lead fw-normal">Pagina enfocada al servicio y atencion de los clientes de telmex en cosamaloapan veracruz, si tienes algun problema no dudes en comunicarlo!</p>
            <a class="btn btn-outline-secondary" href="{{ route('sitio.contactanos')}}">Contratar</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>



@endsection
