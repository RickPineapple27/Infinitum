@extends('sitio.layaout.Atencion')
@section('content')

    <h3 class="col-lg-2 col-md-4 mx-auto"><img src="assets/img/portfolio/logo.png" width="100" height="100"></h3>
    <br>
    <h6 class="col-lg-6 col-md-8 mx-auto ">Infinitum Cosamaloapan ahora cuenta con buzón de problemas o quejas para poder atender puntualmente cada una de las necesidades de nuestros clientes</h6>
    <br>
    <br>
    <br>
    <form method="post" action="{{route('enviar.peticion')}}" class="col-lg-6 col-md-8 mx-auto">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" type="name"
                   name="name" placeholder="Nombre..." autocomplete="off" value="{{old('name')}}">
            @error('name')
            <span class="invalid-feedback" role="alert">
           <strong>{{$message}}</strong>
           </span>
            @enderror
        </div>
        <br>
        <br>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" type="email"
                   name="email" placeholder="Miejemplo@algo.com" autocomplete="off" value="{{old('email')}}">
            @error('email')
            <span class="invalid-feedback" role="alert">
           <strong>{{$message}}</strong>
           </span>
            @enderror
        </div>
        <br>
        <br>

        <div class="form-group mb-3 ">
            <label for="subject" class="form-label">Dudas, quejas y aclaraciones</label>
            <textarea class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" type="subject"
                      name="subject" placeholder="Queja.." autocomplete="off" value="{{old('subject')}}"></textarea>
            @error('subject')
            <span class="invalid-feedback" role="alert">
           <strong>{{$message}}</strong>
           </span>
            @enderror
        </div>
        <br>
        <br>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>




    </form>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
