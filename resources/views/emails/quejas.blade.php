
<br>
<br>
<main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1>Buzon de problemas!</h1>
            <p class="display-2 fw-normal">El usuario {{$msg['name']}} con correo {{$msg['email']}}
                a dejado su problema o queja para atenderlo. </p>
            <br>
            <h3>Sus datos son:</h3>
            <p>NOMBRE: {{$msg['name']}}</p>
            <p>CORREO: {{$msg['email']}}</p>
            <p>TELEFONO: {{$msg['tel']}}</p>
            <p>MENSAJE: {{$msg['subject']}}</p>
            <br>
            <h1> Atender las necesidades de este usuario en 24 hrs.</h1>
            <br>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>




</main>
