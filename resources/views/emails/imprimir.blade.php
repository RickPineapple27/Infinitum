
    <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tu Mensaje fue enviado con exito!</title>



</head>

<table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:#FFA73B;background-repeat:repeat;background-position:center top">
    <tr style="border-collapse:collapse">
        <td align="center" bgcolor="#ebfcfe" style="padding:0;Margin:0;background-color:#ebfcfe">
            <table class="es-header-body" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px">
                <tr style="border-collapse:collapse">
                    <td align="left" style="Margin:0;padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px">
                        <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                            <tr style="border-collapse:collapse">
                                <td valign="top" align="center" style="padding:0;Margin:0;width:580px">
                                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                        <tr style="border-collapse:collapse">
                                            <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:25px;padding-bottom:25px;font-size:0px"><a href="" target="_blank" class="rollover" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#111111;font-size:14px"><img src="https://vosijq.stripocdn.email/content/guids/videoImgGuid/images/infinitum.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="305" class="rollover-first" height="55">
                                                    <div style="font-size:0;mso-hide:all">
                                                        <img class="rollover-second" style="display:none;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;max-height:0px" src="https://vosijq.stripocdn.email/content/guids/854763f5-3e5e-4d8f-9e22-3b278edbd20b/images/infinitum.png" width="305" alt height="55">
                                                    </div></a></td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </table></td>
                </tr>
            </table></td>
    </tr>
</table>
<body>

<br><br>
<div class="container">
    <div class="card">
        <div align="center" class="card-header">
            Datos del usuario
        </div>
        <div class="card-body">
            <table id="tabla" style="width:100%" style=" border: 1px solid black;
            border-collapse: collapse;">
                <tr style=" border: 1px solid black;
            border-collapse: collapse;">
                    <th style="border: 1px solid black;
            border-collapse: collapse;" >Nombre</th>
                    <br>
                    <th style="border: 1px solid black;
            border-collapse: collapse;">Email</th>
                    <br>
                    <th style="border: 1px solid black;
            border-collapse: collapse;">Direccion</th>
                    <br>
                    <th style="border: 1px solid black;
            border-collapse: collapse;">colonia</th>
                    <br>
                    <th style="border: 1px solid black;
            border-collapse: collapse;">Referencia</th>
                    <br>
                    <th style="border: 1px solid black;
            border-collapse: collapse;">Telefono</th>
                    <br>
                    <th style="border: 1px solid black;
            border-collapse: collapse;">Paquete</th>
                </tr>

                <tr style="border: 1px solid black;
            border-collapse: collapse;">
                    <th style="border: 1px solid black;
            border-collapse: collapse;">{{$msg['name']}}</th>
                    <br>
                    <td style="border: 1px solid black;
            border-collapse: collapse;">{{$msg['email']}}</td>
                    <br>
                    <td style="border: 1px solid black;
            border-collapse: collapse;">{{$msg['direccion']}}</td>
                    <br>
                    <td style="border: 1px solid black;
            border-collapse: collapse;">{{$msg['colonia']}}</td>
                    <br>
                    <td style="border: 1px solid black;
            border-collapse: collapse;">{{$msg['referencia']}}</td>
                    <br>
                    <td style="border: 1px solid black;
            border-collapse: collapse;">{{$msg['telefono']}}</td>
                    <br>
                    <br>
                    <td style="border: 1px solid black;
            border-collapse: collapse;">{{$msg['paquete']}}</td>
                </tr>

            </table>

        </div>
        <br><br>

    </div>
</div>






<!-- script para exportar a excel -->


</body>
</html>
