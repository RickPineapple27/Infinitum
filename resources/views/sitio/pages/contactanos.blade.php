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
            <span class="invalid-feedback" role="alert">
           <strong>{($message}}</strong>
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
           <strong>{($message}}</strong>
           </span>
        @enderror
        </div>
        <br>
        <br>

        <div class="form-group">
            <label for="name">Tel (celular)</label>
            <input class="form-control bg-light shadow-sm @error('tel') is-invalid @else border-0 @enderror" type="phone"
                   name="tel" placeholder="288..." autocomplete="off" value="{{old('tel')}}">
            @error('tel')
            <span class="invalid-feedback" role="alert">
           <strong>{($message}}</strong>
           </span>
            @enderror
        </div>
        <br>
        <br>



        <div>
            <label for="name">Paquetes</label>
            <select class="form-select bg-light shadow-sm @error('paquete') is-invalid @else border-0 @enderror" type="paquete"
                    name="paquete" placeholder="Paquetes de infinitum" autocomplete="off" value="{{old('paquete')}}">

                <option selected>Selecciona un paquete de infinitum</option>

                <option value="Promocion-100mbps-telefonia+internet-$435">Promocion-100mbps-telefonia+internet-$435</option>
                <option value="Promocion-150mbps-telefonia+internet-$599">Promocion-150mbps-telefonia+internet-$599</option>
                <option value="Regular-50mbps-telefonia+internet-$389">Regular-50mbps-telefonia+internet-$389</option>
                <option value="Regular-50mbps-solo internet-$349">Regular-50mbps-solo internet-$349</option>
                <option value="Regular-100mbps-solo internet-$449">Regular-100mbps-solo internet-$449</option>

                @error('paquete')
                <span class="invalid-feedback" role="alert">
                <strong>{($message}}</strong>
                </span>
                @enderror
            </select>
        </div>
        <br>
        <br>




        <div class="form-group">
            <label for="subject">Direccion (Con entre calles)</label>
            <input class="form-control bg-light shadow-sm @error('address') is-invalid @else border-0 @enderror" type="address"
                   name="address" placeholder="Direccion" autocomplete="off" value="{{old('address')}}">
            @error('address')
            <span class="invalid-feedback" role="alert">
           <strong>{($message}}</strong>
           </span>
            @enderror
        </div>
        <br>
        <br>
        <div class="form-group">
            <label for="subject">Referencias (tienda, local de ropa, etc.) </label>
            <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" type="subject"
                   name="subject" placeholder="Dudas..." autocomplete="off" value="{{old('subject')}}">
            @error('subject')
            <span class="invalid-feedback" role="alert">
           <strong>{($message}}</strong>
           </span>
            @enderror
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
