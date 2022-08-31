@extends('sitio.layaout.acercade')
@section('content')


    <div >
        <div align="justify" class="col-md-8  mx-auto ">
            <img src="assets/img/portfolio/baner2.png" class="d-block w-100" alt="...">
            <br><br><br><br><br><br><br><br><br>

                    <br>
            <h2>Paquetes con telefonia</h2>
            <p>Telmex maneja su servicio de Infinitum por medio de paquetes.
                <br>
                Los paquetes para el público en general, según la velocidad ofrecida y costo varían.En algunos casos, clientes de fibra óptica pueden recibir más velocidad de la contratada, siempre y cuando existan facilidades técnicas.
                <br>
                Los Paquetes Infinitum ofrecen Claro Video y Claro Drive sin costo adicional:
                <br>
                <br>
                1.-Paquete 389. Llamadas Ilimitadas con una velocidad de Internet de 50 Mbit/s.
                <br>
                <br>
                2.-Paquete 435 Llamadas Ilimitadas con una velocidad de Internet de 60 Mbit/s.
                <br>
                <br>
                3.-Paquete 499. Llamadas Ilimitadas con una velocidad de Internet de 100 Mbit/s.
                <br>
                <br>
                4.-Paquete 599. Llamadas Ilimitadas con una velocidad de Internet de 150 Mbit/s (solo disponible con fibra óptica)
                <br>
                <br>
                5.-Paquete 999. Llamadas Ilimitadas con una velocidad de Internet de 500 Mbit/s (solo disponible con fibra óptica)
                <br>
                <br>
                6.-Paquete 1499. Llamadas Ilimitadas con una velocidad de Internet de 1Gbit/s (Netflix incluido) (Solo disponible con Fibra Óptica)</p>
            <br>
            <h2>Paquete sin telefonia</h2>
            <p>Paquete 349. Internet ilimitado con una velocidad de 50 Mbit/s.
                <br>
                <br>
                Paquete 399. Internet ilimitado con una velocidad de 60 Mbit/s.
                <br>
                <br>
                Paquete 549. Internet ilimitado con una velocidad de 200 Mbit/s (solo disponible con fibra óptica)
                <br>
                <br>
                Paquete 899. Internet ilimitado con una velocidad de 500 Mbit/s (solo disponible con fibra óptica)</p>
            <br><br>

            <br>
            <p align="justify" class="d-grid gap-2 col-6 mx-auto"><a href="{{ route('sitio.contactanos')}}" class="btn btn-info">Contratar</a></p>
            <br>
            <p align="justify"  class="d-grid gap-2 col-6 mx-auto"><a  href="{{ route('sitio.chat')}}" class="btn btn-info" >Atencion  al cliente</a></p>

        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>



@endsection
