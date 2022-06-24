@extends('sitio.layaout.contrataciones')
@section('content')

    <h3 class="col-lg-2 col-md-4 mx-auto"><img src="assets/img/portfolio/infinitum.png" width="200" height="40"></h3>
    <br>
    <h6 class="col-lg-6 col-md-8 mx-auto "> Contratar ahora es mas facil, infinitum cosamaloapan te ofrece un formulario en el que puedes dejarnos tus datos para posteriormente comunicarnos contigo y asi poder adquirir cualquier paquete que infinitum tiene para ti!</h6>
    <br>
    <br>
    <br>
    <form method="post" action="{{route('details.sendEmail')}}" class="col-lg-6 col-md-8 mx-auto">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" type="name"
                   name="name" placeholder="Nombre..." autocomplete="off" value="{{old('name')}}">
            @error('name')
            <small class="invalid-feedback" role="alert">
           <strong>{{$message}}</strong>
           </small>
            @enderror
        </div>
        <br>
        <br>
        <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" type="email"
               name="email" placeholder="Miejemplo@algo.com" autocomplete="on" value="{{old('email')}}">
        @error('email')
        <span class="invalid-feedback" role="alert">
           <strong>{{$message}}</strong>
           </span>
        @enderror
        </div>
        <br>
        <br>

        <div class="form-group">
            <label for="tel">Tel (celular)</label>
            <input onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" class="form-control bg-light shadow-sm @error('telefono') is-invalid @else border-0 @enderror" type="phone"
                   name="telefono" placeholder="288..." autocomplete="off" value="{{old('telefono')}}">
            @error('telefono')
            <span class="invalid-feedback" role="alert">
           <strong>{{$message}}</strong>
           </span>
            @enderror
        </div>

        <br>
        <br>




        <div class="form-group">
            <label for="subject">Direccion (Con entre calles)</label>
            <input class="form-control bg-light shadow-sm @error('direccion') is-invalid @else border-0 @enderror" type="address"
                   name="direccion" placeholder="Direccion" autocomplete="off" value="{{old('direccion')}}">
            @error('direccion')
            <span class="invalid-feedback" role="alert">
           <strong>{{$message}}</strong>
           </span>
            @enderror
        </div>
        <br>
        <br>




        <div class="form-group">
            <label for="colonia">Colonia</label>
            <input class="form-control bg-light shadow-sm @error('colonia') is-invalid @else border-0 @enderror" type="address"
                   name="colonia" placeholder="Direccion" autocomplete="off" value="{{old('colonia')}}">
            @error('colonia')
            <span class="invalid-feedback" role="alert">
           <strong>{{$message}}</strong>
           </span>
            @enderror
        </div>


        <br>
        <br>
        <div class="form-group mb-3 ">
            <label for="referencia" class="form-label">Referencias</label>
            <textarea class="form-control bg-light shadow-sm @error('referencia') is-invalid @else border-0 @enderror" type="referencia"
                   name="referencia" placeholder="Tienda, local de ropa, etc." autocomplete="off" value="{{old('referencia')}}"></textarea>
            @error('referencia')
            <span class="invalid-feedback" role="alert">
           <strong>{{$message}}</strong>
           </span>
            @enderror
        </div>

        <br>
        <br>





        <div class="form-group">
            <label for="paquete">Paquetes</label>
            <select class="form-control bg-light shadow-sm @error('paquete') is-invalid @else border-0 @enderror" type="paquete"
                   name="paquete" placeholder="Paquetes de infinitum" autocomplete="off" value="{{old('paquete')}}">

                <option selected>Selecciona un paquete de infinitum</option>

                <option value="Promocion-100mbps-telefonia+internet-$435">Promocion-100mbps-telefonia+internet-$435</option>
                <option value="Promocion-150mbps-telefonia+internet-$599">Promocion-150mbps-telefonia+internet-$599</option>
                <option value="Regular-50mbps-telefonia+internet-$389">Regular-50mbps-telefonia+internet-$389</option>
                <option value="Regular-50mbps-solo internet-$349">Regular-50mbps-solo internet-$349</option>
                <option value="Regular-100mbps-solo internet-$449">Regular-100mbps-solo internet-$449</option>

                <option value="Promocion-100mbps-telefonia+internet-$435">Promocion-100mbps-telefonia+internet-$435</option>
                <option value="Promocion-150mbps-telefonia+internet-$599">Promocion-150mbps-telefonia+internet-$599</option>
                <option value="Regular-50mbps-telefonia+internet-$389">Regular-50mbps-telefonia+internet-$389</option>
                <option value="Regular-50mbps-solo internet-$349">Regular-50mbps-solo internet-$349</option>
                <option value="Regular-100mbps-solo internet-$449">Regular-100mbps-solo internet-$449</option>

                @error('paquete')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
                @enderror
            </select>
        </div>



        <br>
        <br>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>




    </form>

    <br><br>
    <br><br>


@endsection
