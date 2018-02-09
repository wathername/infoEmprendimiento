<head>
    <meta content="text/html; charset=utf8" http-equiv="Content-Type"/>
    <title>Galindez Travel Venezuela</title>
    <style type="text/css">.ExternalClass {
            width: 100%;
        }
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font,=
        .ExternalClass td, .ExternalClass div {
            line-height: 100%;
        }
        body {
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            margin: 0;
            padding: 0;
        }
        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        table td {
            border-collapse: collapse;
        }
        img {
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }
        a img {
            border: none;
        }
        p {
            margin: 0;
            padding: 0;
            margin-bottom: 0;
        }
        .forApple a {
            color: #666666 !important;
            text-decoration: none !important;
        }
    </style>
</head>
<body dir="ltr">
<img src="{{ asset('/style/images/IMG-20171001-WA0002.png') }}" alt="" width="600" height="150">
<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0"
       style="background-color:#ffffff" width="100%">
    <tr>
        <td align="center">
            <div style="max-width:558px;margin:0 auto;padding:0 10px">
                <table align="center" border="0" cellpadding="0" cellspacing="0" st
                       yle="max-width:558px;padding:0;margin:0;font-family:Arial,Helvetica,sans-=
            serif;font-weight:normal;font-size:13px;line-height:18px;color:#444444;text=
            -align:left" width="100%">
                    <tr>
                        <td style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font=-size:12px;line-height:20px;color:#444444;padding:5px 0" width="100%">
                            <hr>
                            <p style="font=-size:24px;"> Hi!</p>
                            <h4>Estimado(a) {{$quotationSend->name}} {{$quotationSend->last_name}}</h4>
                            Hemos recibido tu solicitud de cotizacion. A continuación, incluimos adicionalmente la información de tu cuenta.
                            <a href="{{url('/login')}}" style="text-decoration:no=ne;color:#1155cc" target="_blank">Iniciar sesión</a>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                    </tr>
                    <tr>
                        <td style="padding:44px 0 0" width="100%">
                            <table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0"
                                   style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font-si=
         ze:13px;line-height:18px;color:#444444;background-color:#ffffff;padding:0;m=
         argin:0" width="100%">
                                <tr>
                                    <td align="center" style="font-family:Arial,Helvetica,sans-serif;font-w=
         eight:normal;font-size:20px;line-height:32px;color:#1a1a1a;font-weight:norm=
         al" valign="top" width="100%">
                                        Estimado(a) {{$quotationSend->name}} {{$quotationSend->last_name}}, su solicitud ha sido recibida.</td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding:15px 20px 0;font-family:Arial,Helveti=
         ca,sans-serif;font-weight:normal;font-size:15px;line-height:22px;color:#444=
         444" valign="top" width="100%">
                                        Puede que nos tome entre 1 hora y 12 horas verificar la solicitud. Te notificaremos por email y sms (solo venezuela) cuando haya sido procesada.</td>
                                </tr>
                                <tr>
                                    <td style="padding:20px 0 0" width="100%">
                                        <table align="left" border="0" cellpadding="0" cellspacing="0" widt
                                               h="380">
                                            <tr>
                                                <td align="left" style="padding:20px 0 0;font-family:Arial,Helvetica,sa=
               ns-serif;font-weight:normal;font-size:15px;line-height:22px;color:#333333;f=
               ont-weight:bold" valign="top" width="100%">
                                                    Información de la Cotizacion:
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding:10px 30px 0 0;font-family:Arial,Helveti=
               ca,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#333=
               333" valign="top" width="100%">
                                                    Gracias por añadir los datos a tu cuenta en Galindez Travel. Recuerda que este servio es gratuito.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="100%">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td align="center" style="padding:10px 10px 0 0;font-family:Arial,Helvet=
                        ica,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#33=
                        3333" valign="top" width="50%">
                                                                Numero Contacto: <strong>{{$quotationSend->cell_phone}}</strong>  </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="padding:10px 10px 0 0;font-family:Arial,Helvet=
                        ica,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#33=
                        3333" valign="top" width="50%">
                                                                Servicio Seleccionado:
                                                                <p><strong>{{$quotationSend->servicio}}</strong></p></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="padding:10px 10px 0 0;font-family:Arial,Helvet=
                        ica,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#33=
                        3333" valign="top" width="50%">
                                                                Fechas Chek-In: <strong>{{$quotationSend->chech_in}}</strong> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="padding:10px 10px 0 0;font-family:Arial,Helvet=
                        ica,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#33=
                        3333" valign="top" width="50%">
                                                                Fecha Chek-Out: <strong>{{$quotationSend->chech_out}}</strong> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="padding:10px 10px 0 0;font-family:Arial,Helvet=
                        ica,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#33=
                        3333" valign="top" width="50%">
                                                                Cantidad Adultos: <strong> {{$quotationSend->adult}} </strong>              </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="padding:10px 10px 0 0;font-family:Arial,Helvet=
                        ica,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#33=
                        3333" valign="top" width="50%">
                                                                Cantidad Niños: <strong>{{$quotationSend->children}} </strong>               </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="padding:10px 10px 0 0;font-family:Arial,Helvet=
                        ica,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#33=
                        3333" valign="top" width="50%">
                                                                Cantidad Habitacion:  <strong>{{$quotationSend->room}}</strong>           </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding:20px 0 0;font-family:Arial,Helvetica,sa=
               ns-serif;font-weight:normal;font-size:15px;line-height:22px;color:#333333;f=
               ont-weight:bold" valign="top" width="100%">
                                                                Información de tu cuenta:
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding:10px 30px 0 0;font-family:Arial,Helveti=
               ca,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#333=
               333" valign="top" width="100%">
                                                                Gracias por la confianza que ha tenido en nosotros. Este email tiene toda la información necesaria para comenzar a usar su cuenta en Galindez Travel.
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="padding:10px 10px 0 0;font-family:Arial,Helvet=
                        ica,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#33=
                        3333" valign="top" width="50%">
                                                                Nombre de Usuario: Correo Electronico                 </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="center" style="padding:10px 10px 0 0;font-family:Arial,Helvet=
                        ica,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#33=
                        3333" valign="top" width="50%">
                                                                Password: Nombre y Apellido (Ej; juanperez)                </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding:10px 30px 0 0;font-family:Arial,Helveti=
               ca,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#333=
               333" valign="top" width="100%">
                                                    Verifica tu dirección de correo electrónico de facturación, si aún no lo has hecho.
                                                    <a href="3" style="text-decoration:=
               none;color:#1155cc" target="_blank">Mas Información</a>.
                                                    <br>
                                                </td>
                                            </tr>
                                        </table>
                                        <table align="left" border="0" cellpadding="0" cellspacing="0" widt
                                               h="155">
                                            <tr>
                                                <td style="padding:20px 0 0" width="100%">
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0" styl
                                                           e="font-family:Arial,sans-serif;margin:0;padding:0;border-collapse:collap=
                  se">
                                                        <tr height="36">
                                                            <td bgcolor="#3369E8" class="btn-left" height="36" width="3">
                                                                <img border="0" height="36" src="http://www.gstatic.com/gmktg/mtv-img=
                           /left_of_button.png" style="display:block" width="3">
                                                            </td>
                                                            <td bgcolor="#3369E8">
                                                                <table align="center" border="0" cellpadding="0" cellspacing="0">
                                                                    <tr>
                                                                        <td align="center" background="http://www.gstatic.com/gmktg/mtv-img/mid=
                              dle_of_button.png" class="btn-mid" height="36" style="background-repe=
                              at:repeat-x;background-image:url('http://www.gstatic.com/gmktg/mtv-img/midd=
                              le_of_button.png')" valign="middle" width="100">
                                                                            <table align="center" border="0" cellpadding="0" cellspacing="0" st
                                                                                   yle="margin-top:0;margin-right:0;margin-left:0;padding-top:0;padding-righ=
                              t:0;padding-bottom:0;padding-left:0;border-collapse:collapse">
                                                                                <tr>
                                                                                    <td align="center" height="20" style="text-align:center;line-height:2=
                                 0px" valign="middle" width="100">
                                                                                        <a class="thebtn" href="{{url('home')}}" style="margin:0;p=
                                 adding:0;text-align:center;color:#ffffff;font-weight:normal;font-size:13px;=
                                 display:block;text-decoration:none;font-family:Arial,Helvetica,sans-serif"
                                                                                           target="_blank">Consultar Solicitud</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td bgcolor="#3369E8" class="btn-right" height="36" width="3">
                                                                <img border="0" height="36" src="http://www.gstatic.com/gmktg/mtv-img=
                     /right_of_button.png" style="display:block" width="3">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="left" style="padding:10px 0 0;font-family:Arial,Helvetica,sa=
         ns-serif;font-weight:normal;font-size:13px;line-height:18px;color:#333333"
                                                    valign="top" width="100%">
                                                    <a href="www.galindeztravel.com.ve" style="color:#333333;text-decoration:none" target="_blank">
                                                        <font color="#333333">www.galindeztravel.com.ve</font></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100%">
                                        <table align="left" border="0" cellpadding="0" cellspacing="0" widt
                                               h="380">
                                            <tr>
                                                <td align="left" style="padding:20px 30px 0 0;font-family:Arial,Helveti=
               ca,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#333=
               333" valign="top" width="100%">
                                                    ¿Necesitas más ayuda? Nuestro equipo de asistencia puede resolver tus dudas para ponerte en marcha rápidamente.  <a href="www.galindeztravel.com.ve"
                                                                                                                                                                        style="text-decoration:none;color:#1155cc" target="_blank">Ponte en contacto con nosotros</a> por teléfono +58-414-456-4432 o por correo electrónico clientes@galindeztrevel.com.ve.</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding:20px 0 40px;font-family:Arial,Helvetica=
      ,sans-serif;font-weight:normal;font-size:13px;line-height:18px;color:#33333=
      3;border-collapse:collapse;border-bottom:1px solid #dcdcdc" valign="top"
                                        width="100%">
                                        Atentamente         <br>
                                        <strong>El equipo de Galindez Travel Venezuela</strong>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:Arial,Helvetica,sans-serif;font-weight:normal;font=
      -size:10px;line-height:14px;color:#666666;padding:20px 0 0" width="100%">
                            <span class="forApple">© 2017 Galindez Travel. Venezuela. </span>
                            <br><br>
                            Has recibido este anuncio de servicio por correo electrónico para informarte sobre importantes promociones activas.</td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
</body>


