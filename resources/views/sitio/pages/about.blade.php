@extends('sitio.layaout.acercade')
@section('content')




    <div >
        <div class="col-md-8  mx-auto ">
            <img src="assets/img/portfolio/infinitum.png" class="d-block w-100" alt="...">
            <br><br><br><br><br><br><br><br><br>

            <h2>Historia de la empresa</h2>
            <p>Telmex comenzó a ser proveedor de servicios de Internet (ISP) a través de la marca Uninet. Un año después, cambió el nombre a “Internet Directo Personal de Telmex”. En 1996 Telmex compró de IBM y Sears, el proveedor de internet Prodigy Communications con lo que trajo la marca a México, Prodigy Internet de Telmex.
                En el 2001 Telmex decidió vender los suscriptores de Prodigy Communications en los Estados Unidos a su socio SBC Communications con lo que se convirtió en SBC Prodigy y posteriormente SBC Yahoo!. Aunque SBC sigue siendo dueño y filial de Prodigy en México. Para el 2004 Prodigy contaba con más del 70% de acceso a internet vía telefónica y el 40% en DSL en México.</p>
            <br>
            <h2>Infinitum</h2>
            <p>Infinitum provee mediante la línea telefónica (par de cobre) un acceso a Internet con tecnología ADSL2+ (Línea Digital Asimétrica del Cliente) y VDSL (Linea Digital de Suscripción de Muy Alta Velocidad). Además mediante el despliegue de su red de fibra óptica para uso doméstico y comercial, también ofrece sus servicios mediante GPON (Red Óptica Pasiva de Capacidad Giga-bit) . Los clientes que tienen su servicio mediante ADSL2+ y VDSL pueden sufrir fluctuaciones debido a interferencias magnéticas del ambiente, estado físico del cableado o distancia con la central. Sin embargo Telmex también ofrece el servicio mediante su red de fibra óptica FTTH (Fiber to The Home) mejorando con esto su calidad de servicio y abriendo la posibilidad de ofrecer servicio de televisión de paga en un futuro.
                Es el servicio de Internet de banda ancha de Telmex, cuenta con diferentes velocidades, desde 10 Mbit/s hasta 200 Mbit/s (dependiendo de la zona en la que el usuario se encuentre), siendo el principal proveedor de Internet de banda ancha en México. Cabe notar que la calidad de la señal puede variar dependiendo de la distancia con la central y factores externos, de modo que las velocidades no están garantizadas
                Para corregir el problema de cableado ADSL, Infinitum ha estado manejando desde 2011 un cambio a fibra óptica y VDSL. Según su propia página, no hay costo adicional por el cambio. También cuenta con centros de atención a clientes en varios estados de la República Mexicana para dar soporte técnico por teléfono a los usuarios de este servicio</p>
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
            <h3 class=""> Ahora Infinitum cosamaloapan cuenta con servicio de atencion al cliente y contrataciones!</h3>

            <p class="">Pagina enfocada al servicio y atencion de los clientes de telmex en cosamaloapan veracruz, si tienes algun problema no dudes en comunicarlo!</p>
            <br>
            <p  class="d-grid gap-2 col-6 mx-auto"><a href="{{ route('sitio.contactanos')}}" class="btn btn-danger">Contratar</a></p>
            <br>
            <p class="d-grid gap-2 col-6 mx-auto"><a  href="{{ route('sitio.chat')}}" class="btn btn-danger" >Atencion  al cliente</a></p>

        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>



@endsection
