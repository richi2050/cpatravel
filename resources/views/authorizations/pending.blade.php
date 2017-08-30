@extends('layouts.app')
@section('nav')
    @include('layouts.nav')
@endsection
@section('content')
    <style>
        .titulo-pantalla{
            text-align: center;
            color: #009577;
            font-size: 30px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        .head-proyecto{
            color:#ffffff;
            background: #303082;
            border-top-left-radius: 18px;
            border-bottom-left-radius: 18px;
            font-size: 12px;
            padding: 15px;
            text-align: center;
        }

        .head-subproyecto{
            color:#ffffff;
            background: #303082;
            font-size: 12px;
            padding: 10px;
            text-align: center;
        }
        .head-viaje{
            color:#ffffff;
            background: #303082;
            font-size: 12px;
            padding: 10px;
            text-align: center;
        }
        .head-monto{
            color:#ffffff;
            background: #303082;
            font-size: 12px;
            padding: 10px;
            text-align: center;
        }
        .head-fecha{
            color:#ffffff;
            background: #303082;
            font-size: 12px;
            padding: 10px;
            text-align: center;
        }



        .head-dias{
            color:#ffffff;
            background: #303082;
            border-top-right-radius: 18px;
            border-bottom-right-radius: 18px;
            font-size: 12px;
            padding: 10px 30px 10px 10px;
            text-align: left;
            height: auto;

        }

        .icon-tam2 {
            font-size: 40px;
            padding-left: 10px;
            text-align: center;

        }

        td{
            color:#303082;
            font-size: 15px;
            vertical-align: middle;
            text-align: center;
            padding: 20px;


        }
        .datos-auto {
            border-bottom:#008e7e 1px solid;
        }

        .tabla {
            margin-top: 20px;
        }
    </style>

    <div class="container">
        <div class="row titulo-pantalla">
            <div class="col-md-12 col-xs-12">
                <span class="icon-aut_pendientes icon-tam2"></span>
                AUTORIZACIONES PENDIENTES
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="col-md-2">
                    <div class="conten-img">
                        <img alt="User Pic" src="{{ Session::get('img') }}" class="img-circle img-responsive img-profile">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="conten-img-title">
                        Usuario: {{ Session::get('name').'  '.Session::get('lastName') }}
                    </div>
                </div>
            </div>

        </div>

        <div class="row tabla">
            <div class="col-md-12 col-xs-12">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td class="head-proyecto">PROYECTO</td>
                        <td class="head-subproyecto">SUBPROYECTO</td>
                        <td class="head-viaje">VIAJE</td>
                        <td class="head-monto">MONTO</td>
                        <td class="head-fecha">FECHA DE SOLICITUD</td>
                        <td class="head-fecha">DÍAS</td>
                        <td colspan="5" class="head-dias">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="datos-auto" width="15%">Santander</td>
                        <td class="datos-auto" width="20%">Evento Corporativo</td>
                        <td class="datos-auto" width="15%">Veracruz 2017</td>
                        <td class="datos-auto" width="10%">1,000</td>
                        <td class="datos-auto" width="20%">21-08-17</td>
                        <td class="datos-auto" width="4%">7</td>
                        <td class="datos-auto" width="3%"><span class="icon-detalle"></span></td>
                        <td class="datos-auto" width="3%"><span class="icon-icon_cancelar"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></td>
                        <td class="datos-auto" width="3%"><span class="icon-autorizar_inactivo"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></td>
                        <td class="datos-auto" width="3%"><span class="icon-autorizar_inactivo"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></td>
                        <td class="datos-auto" width="3%"><span class="icon-autorizar_activo"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection