<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
    <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
    <title>Correo de bienvenida</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        table {
            border-spacing: 0;
        }
        table td {
            border-collapse: collapse;
        }
        .ExternalClass {
            width: 100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }
        .ReadMsgBody {
            width: 100%;
            background-color: #ebebeb;
        }
        table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        img {
            -ms-interpolation-mode: bicubic;
        }
        .yshortcuts a {
            border-bottom: none !important;
        }
        @media screen and (max-width: 599px) {
            .force-row,
            .container {
                width: 100% !important;
                max-width: 100% !important;
            }
        }
        @media screen and (max-width: 400px) {
            .container-padding {
                padding-left: 12px !important;
                padding-right: 12px !important;
            }
        }
        .ios-footer a {
            color: #aaaaaa !important;
            text-decoration: underline;
        }
        @media screen and (max-width: 599px) {
            .col {
                width: 100% !important;
                border-top: 1px solid #eee;
                padding-bottom: 0 !important;
            }
            .cols-wrapper {
                padding-top: 18px;
            }
            .img-wrapper {
                float: right;
                max-width: 40% !important;
                height: auto !important;
                margin-left: 12px;
            }
            .img-wrapper2 {
                padding-top:18px;
            }
            .img-wrapper2 img {
                width: 100% !important;
                height: auto !important;
            }
            .subtitle {
                margin-top: 0 !important;
            }
        }
        @media screen and (max-width: 400px) {
            .cols-wrapper {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
            .content-wrapper {
                padding-left: 12px !important;
                padding-right: 12px !important;
            }
        }
    </style>
</head>
<body style="margin:0; padding:0; left-margin:0; margin-top:0; margin-width:0; margin-height:0;" bgcolor="#F0F0F0">
<!-- 100% background wrapper (grey background) -->
<table style="width:100%; height:100%;" border="0" cellpadding="0" cellspacing="0" bgcolor="#f7f7f7">
    <tr>
        <td align="center" valign="top" bgcolor="#f7f7f7" style="background-color: #f7f7f7;">
            <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
                <!-- START HEADER -->
                <tr>
                    <td>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="color:#fff; background:transparent;padding-top:25px; padding-bottom:15px; padding-left:24px; padding-right:24px;border-bottom: 4px solid #183962">
                            <tr>
                                <td style="text-align:center;">
                                    <img src="https://morecutecr.com/img/interbox_logo.png" width="150" alt="Lose It!">
                                </td>
                                <td style="text-align:right;">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- END HEADER -->       <!-- ********************************
        1 COLUMN START
        ******************************** -->
                <tr>
                    <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:24px;padding-bottom:12px;background-color:#ffffff">

                        <!-- START text2 -->
                        <div class="col-copy" style="font-family:Avenir, Helvetica-light, Helvetica, Arial, sans-serif;font-size:16px;line-height:24px;text-align:center;color:#455">
                            Bienvenido a {{env('APP_NAME')}}
                        </div>
                        <!-- END text2 -->

                    </td>
                </tr>
                <!-- ********************************
                1 COLUMN END
                ******************************** -->       <!-- ********************************
        1 COLUMN START
        ******************************** -->
                <tr>
                    <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:24px;padding-bottom:12px;background-color:#ffffff">

                        <!-- START text1 -->
                        <div class="col-copy" style="font-family:Avenir, Helvetica-light, Helvetica, Arial, sans-serif;font-size:16px;line-height:24px;text-align:left;color:#455">
                            En Voler Learning nos complace poder darte acceso a nuestro sistema para que puedas tener un mejor control y seguimiento de las citas de tu hij@.
                            Te dejamos tu información para que puedas ingrear a nuestro sistema:
                        </div>
                        <br>
                        <!-- END text1 -->
                        <!-- START text2 -->
                        <div class="col-copy" style="font-family:Avenir, Helvetica-light, Helvetica, Arial, sans-serif;font-size:16px;line-height:24px;text-align:center;color:#455">
                            Email: {{$user->email}}
                        </div>
                        <!-- END text2 --><br>
                        <!-- START text2 -->
                        <div class="col-copy" style="font-family:Avenir, Helvetica-light, Helvetica, Arial, sans-serif;font-size:16px;line-height:24px;text-align:center;color:#455">
                            Contraseña: {{$password}}
                        </div>
                        <!-- END text2 -->
                        <!-- START text2 -->
                        <div class="col-copy" style="font-family:Avenir, Helvetica-light, Helvetica, Arial, sans-serif;font-size:16px;line-height:24px;text-align:center;color:#455">
                            Puedes ingresar haciendo <a href="{{env('APP_URL')}}"> clik en este enlace</a>
                        </div>
                        <!-- END text2 -->
                    </td>
                </tr>
                <!-- ********************************
                1 COLUMN END
                ******************************** -->

            </table>
            <!--/600px container -->
        </td>
    </tr>
</table>
</body>
</html>

