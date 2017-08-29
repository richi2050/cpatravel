@extends('layouts.app')
@section('nav')
    @include('layouts.nav')
@endsection
@section('content')
    <style>
        .conten-img-title{
            font-size: 18px;
            color: #4a9477;
            padding-top: 20px;
        }
        .label-fechas{
            font-size: 16px;
            color: #6f6f6e;
        }
        .form-fecha{
            border-radius: 5px;
            border:#33337f solid 1px;
            width: 80px;
            margin-top: 5px;
        }
        .form-search{
            border-radius: 5px;
            border:#33337f solid 1px;
            width: 160px;
            margin-top: 5px;
        }
		
		.form-search2{
            border-radius: 5px;
            border:#33337f solid 1px;
            width: 90%;
            margin-top: 5px;
			padding: 5px;
        }
        #dias{
            display: inline-block;
            padding: 16px;
            text-align: center;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #c9dde0;
			vertical-align: middle;
			margin-top: 10px;
        }
        .label-dia{
            margin-top: 10%;
            display: inline-block;
        }
        .element-viatico{
            font-size: 60px;
            cursor: pointer;
        }
        .element-div{
            padding-left: 5px;
            padding-top: 10px;
        }
        .element-div-left{
            padding-left: 20px;
            padding-top: 10px;
        }
        .element-list{
            font-size: 33px;
        }
        .in-line{
            display: inline-block;
        }
        .element-div{
            padding: 10px;
            cursor: pointer;
        }
		
		#tabla-debito {
			
			background:#e8e9e8;
			padding: 10px;
			color:#4A9477;
			font-size:15px;
			text-align: center;
		}
		
		#tabla-cheques {
			border-top-left-radius: 10px;
			border-bottom-left-radius: 10px;
			background:#e8e9e8;
			padding: 10px;
			color:#4A9477;
			font-size:15px;
			text-align: center;
		}
		
		#tabla-credito {
			border-top-right-radius: 10px;
			border-bottom-right-radius: 10px;
			background:#e8e9e8;
			padding: 10px;
			color:#4A9477;
			font-size:15px;
			text-align: center;
		}
		
		#tabla-efectivo {
			
			padding: 10px;
			color:#4A9477;
			font-size:15px;
			text-align: center;
		}
		
		#tabla-amex {
			
			padding: 10px;
			color:#4A9477;
			font-size:15px;
			text-align: center;
		}
		
		#nacional {
			background: #bfdadd;
			border-radius: 10px;
			padding-top: 25px;
			padding-bottom: 25px;
			padding-right: 5px;
			padding-left: 5px;
			text-align: center;
			margin-right: 3px;
		}
		
		#extranjero {
			background: #bfdadd;
			border-radius: 10px;
			padding-top: 25px;
			padding-bottom: 25px;
			padding-right: 5px;
			padding-left: 5px;
			text-align: center;
			margin-right: 3px;
		}
		
		.icon-tam2 {
            font-size: 40px;
			padding-left: 10px;
			text-align: center;
			vertical-align: middle;
			
        }
		
		.titulo-pantalla{
   			 text-align: center;
    		color: #009577;
			font-size: 30px;
			margin-top: 10px;
			margin-bottom: 10px;
}

		.numero-dias{
			font-size: 30px;
			color:#303082;
		}
		
		.dias-txt{
			color:#303082;
			font-size: 17px;
		}
		
		th, td{
			color:#303082;
			font-size: 15px;
			vertical-align: middle;
		
		}
		
		hr {
			border:#008e7e 1px solid;
		}
    </style>
    <div class="container">
        <div class="row titulo-pantalla">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
              
					<span class="icon-tit_solicitud icon-tam2"></span>
                    SOLICITUD DE GASTOS DE VIAJE

            </div>
        </div>
        {{ Form::open(['id' => 'form_request']) }}
        <div class="row">
            <input type="text" name="dias" id="numero-dias" class="numero-dias-txt">
            <input type="text" name="request_id" id="request_id">
            <div class="col-xs-12 col-sm-4 col-md-4 ">
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
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="row" style="margin-top: 5px;">
                    <div class="col-md-3">
                        <label class="label-fechas">Fecha de Viaje</label>
                    </div>
                    <div class="col-md-2" style="text-align: right">
                        <label class="label-fechas">
                            <i class="icon-calendario"></i>
                            Inicio
                        </label>
                    </div>
                    <div class="col-md-2" style="text-align: left">
                        <input type="text" name="fecha_inicio" class="form-fecha" id="datepicker_inicio">
                    </div>
                    <div class="col-md-3" style="text-align: left">
                        <label class="label-fechas">
                            <i class="icon-calendario"></i>
                            Fin
                        </label>
                    </div>
                    <div class="col-md-2" style="text-align: left">
                        <input type="text" name="fecha_fin" class="form-fecha" id="datepicker_fin">
                    </div>
                </div>

                <div class="row" style="margin-top: 5px;">
                    <div class="col-md-2">
                        <label class="label-fechas">Hora</label>
                    </div>
                    <div class="col-md-3" style="text-align: right">
                        <label class="label-fechas">
                            <i class="icon-reloj"></i>
                            Salida
                        </label>
                    </div>
                    <div class="col-md-2" style="text-align: left">
                        <select name="hora_salida" id="hora_salida" class="form-fecha">
                        </select>
                    </div>
                    <div class="col-md-3" style="text-align:left">
                        <label class="label-fechas">
                            <i class="icon-reloj"></i>
                            Regreso
                        </label>
                    </div>
                    <div class="col-md-2">
                        <select name="hora_final" id="hora_final" class="form-fecha">
                        </select>
                    </div>
                </div>

                <div class="row" style="margin-top: 5px;">
                    <div class="col-md-3">
                        <label class="label-fechas">Destino</label>
                    </div>
                    <div class="col-md-2" style="text-align: right">
                        <label class="label-fechas">
                            <i class="icon-ubicacion"></i>
                            Inicial
                        </label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-fecha" name="destino_inicial">
                    </div>
                    <div class="col-md-3">
                        <label class="label-fechas">
                            <i class="icon-ubicacion"></i>
                            Final
                        </label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-fecha" name="destino_final">
                    </div>
                </div>

            </div>

            <div class="col-xs-2 col-sm-2 col-md-2" >
                
				 <span id="dias">

                    <span class="label-dia">
                      <div class="row numero-dias">
                	

             
                      </div>
                      <div class="row dias-txt">
                        días
                      </div>

                    </span>
                </span>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 " >
                <div class="pull-left">
                    <label class="label-fechas">
                        <i class="icon-proyectos"></i>
                        Proyecto
                    </label>
                    <input type="text" class="form-search search_project" >
                    <input type="hidden" id="project_id" name="project_id">
                    <span class="icon-mas">
                        <span class="path1"></span><span class="path2"></span>
                    </span>
                    <label class="label-fechas">
                        <i class="icon-subproyectos"></i>
                        Sub Proyecto
                    </label>
                    <input type="text" class="form-search search_subproject">
                    <input type="hidden" id="subproject_id" name="subproject_id">
                    <span class="icon-mas">
                        <span class="path1"></span><span class="path2"></span>
                    </span>
                    <label class="label-fechas">
                        <i class="icon-viaje"></i>
                        Viaje
                    </label>
                    <input type="text" class="form-search search_travel">
                    <input type="hidden" id="travel_id" name="travel_id">
                    <span class="icon-mas">
                        <span class="path1"></span><span class="path2"></span>
                    </span>
                    <label class="label-fechas">
                        <i class="icon-acompanantes"></i>
                        Acompañantes
                    </label>
                    <input type="text" class="form-search">
                    <span class="icon-mas">
                        <span class="path1"></span><span class="path2"></span>
                    </span>
                </div>
            </div>
        </div>
        {{ Form::close() }}
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-12 col-xs-12">
                <div class="row">
                <div class="col-sm-3 col-md-2">
	                <div class="row">
	                    Selecciona un tipo de viático:
	                </div>
                @foreach($dataLabel as $dat)
                        @if($dat->name == 'Hospedaje')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_hospedaje",['iden' => $dat->iden ]) }}")'>
                            <span  data-id="{{ $dat->iden }}" class="icon-hospedaje element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                            <input class="form-search2" type="hidden" name="hospedaje_monto_hidden" id="hospedaje_monto_hidden">
                        </div>
                        @elseif($dat->name == 'Alimentación')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_foot",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-comida element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                            <input class="form-search2" type="hidden" name="alimento_monto_hidden" id="alimento_monto_hidden">
                        </div>
                        @elseif($dat->name == 'Transporte')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_taxi",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-transporte_publico element-viatico">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                            </span>
                            <input class="form-search2" type="hidden" name="transporte_monto_hidden" id="transporte_monto_hidden">
                        </div>
                        @elseif($dat->name == 'Pago por kilometraje')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_mileage",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-kilometraje element-viatico">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                            </span>
                            <input class="form-search2" type="hidden" name="kilometraje_monto_hidden" id="kilometraje_monto_hidden">
                        </div>
                        @elseif($dat->name == 'Renta de Transporte terrestre')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_transporte_terrestre",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-transporte_terrestre element-viatico">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span>
                            </span>
                            <input class="form-search2" type="hidden" name="transporte_terrestre_monto_hidden" id="transporte_terrestre_monto_hidden">
                        </div>
                        @elseif($dat->name == 'Renta de Autos')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_rent_car",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-renta_autos element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                            <input class="form-search2" type="hidden" name="renta_autos_monto_hidden" id="renta_autos_monto_hidden">
                        </div>
                        @elseif($dat->name == 'Seminarios o Convenciones')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_conference",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-seminarios element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                            <input class="form-search2" type="hidden" name="seminarios_monto_hidden" id="seminarios_monto_hidden">
                        </div>
                        @elseif($dat->name == 'Renta de Transporte aéreo')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_airplane",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-transporte_aereo element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                            <input class="form-search2" type="hidden" name="transporte_aereo_monto_hidden" id="transporte_aereo_monto_hidden">
                        </div>
                        @endif
                @endforeach
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="panel panel-default" style="background: transparent; border-color: #099C7F; border-radius: 12px;">
                        
						<div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            Concepto
                                        </th>
                                        <th>
                                            Monto
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="tr_hospedaje" class="hidden">
                                        <td>
                                            <span class="icon-hospedaje element-list">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                            Hospedaje
                                        </td>
                                        <td> <span id="monto_hospedaje"></span> $ </td>
                                    </tr>
                                    <tr id="tr_alimentacion" class="hidden">
                                        <td>
                                            <span  class="icon-comida element-list">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                            Alimentación
                                        </td>
                                        <td> <span id="monto_alimentacion"></span> $ </td>
                                    </tr>
                                    <tr id="tr_taxi" class="hidden">
                                        <td>
                                            <span  class="icon-transporte_publico element-list">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                                            </span>
                                            Taxi
                                        </td>
                                        <td>
                                            <span id="monto_taxi"></span>
                                            $
                                        </td>
                                    </tr>
                                    <tr id="tr_renta_auto" class="hidden">
                                        <td>
                                            <span class="icon-renta_autos element-list">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                            Renta de autos
                                        </td>
                                        <td>
                                            <span id="monto_renta_auto"></span>
                                            $
                                        </td>
                                    </tr>
                                    <tr id="tr_seminario" class="hidden">
                                        <td>
                                            <span data-id="" class="icon-seminarios element-list">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                            Seminarios y convenciones
                                        </td>
                                        <td>
                                            <span id="monto_seminario"></span> $
                                        </td>
                                    </tr>
                                    <tr id="tr_aereo" class="hidden">
                                        <td>
                                            <span class="icon-transporte_aereo element-list">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                            Transporte Aéreo
                                        </td>
                                        <td>
                                            <span id="monto_aereo"></span> $
                                        </td>
                                    </tr>
                                    <tr id="tr_terrestre" class="hidden">
                                        <td>
                                            <span class="icon-transporte_terrestre element-list">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span>
                                            </span>
                                            Autobus
                                        </td>
                                        <td>
                                            <span id="monto_terrestre"></span> $
                                        </td>
                                    </tr>
                                    <tr id="tr_kilometros" class="hidden">
                                        <td>
                                            <span class="icon-kilometraje element-list">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                            </span>
                                            Kilometraje
                                        </td>
                                        <td>
                                            <span id="monto_kilometros"></span> $
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>

           
                <div class="row">
                    <div class="col-md-6 col-xs-6">

					<table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody>
                        <tr>
                          <td width="10%">&nbsp;</td>
                          <td width="15%">
                              <div id="tabla-cheques">
                              <span class="icon-cheques">
                                  </span>
                                  <span title-button><br>Cheques </span>
                              </div>
                          </td>
                          <td width="15%">
                              <div id="tabla-debito">
                                  <span class="icon-tarjeta">
                                  </span>
                                  <span title-button><br>
                                  Débito
                                  </span>
                              </div>
                          </td>
                          <td width="16%">
                              <div id="tabla-credito">
                                  <span class="icon-tarjeta">
                                  </span>
                                  <span title-button><br>
                                  Crédito
                                  </span>
                              </div>
                          </td>
                          <td width="15%">
                              <div id="tabla-efectivo">
                                  <span class="icon-efectivo" ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span></span>
                                  <span title-button><br>
                                  Efectivo
                                  </span>
                              </div>
                          </td>
                          <td width="16%">
                              <div id="tabla-amex">
                                  <span class="icon-tarjeta">
                                  </span>
                                  <br>
                                  AMEX
                              </div>
                          </td>
                          <td width="13%">&nbsp;</td>
                        </tr>
                        <tr class="tr_solicitados_monto_nacional">
                            <td rowspan="2"><div id="nacional">Nacional</div></td>
                            <td><input type="text" placeholder="$" id="nacional_cheques_soli" name="nacional_cheques_soli" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="nacional_debito_soli" name="nacional_debito_soli" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="nacional_credito_soli" name=="nacional_credito_soli" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="nacional_efectivo_soli" name="nacional_efectivo_soli" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="nacional_amex_soli" name="nacional_amex_soli" class="form-search2"></td>
                            <td>Monto solicitado</td>
                        </tr>
                        <tr class="tr_solicitados_monto_nacional">
                            <td><input type="text" placeholder="$" id="nacional_cheques_auto" name="nacional_cheques_auto" class="form-search2" ></td>
                            <td><input type="text" placeholder="$" id="nacional_debito_auto" name="nacional_debito_auto" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="nacional_credito_auto" name=="nacional_credito_auto" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="nacional_efectivo_auto" name="nacional_efectivo_auto" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="nacional_amex_auto" name="nacional_amex_auto" class="form-search2"></td>
                            <td>Monto Autorizado</td>
                        </tr>
                        <tr>
                            <td colspan="7">
                              <hr>
                            </td>
                        </tr>
                        <tr class="tr_solicitados_monto_extranjero hidden">
                            <td rowspan="2"><div id="extranjero"> Extranjero </div></td>
                            <td><input type="text" placeholder="$" id="extranjero_cheques_soli" name="extranjero_cheques_soli" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="extranjero_debito_soli" name="extranjero_debito_soli" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="extranjero_credito_soli" name="extranjero_credito_soli" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="extranjero_efectivo_soli" name="extranjero_efectivo_soli" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="extranjero_amex_soli" name="extranjero_amex_soli" class="form-search2"></td>
                            <td>Monto solicitado</td>
                        </tr>
                        <tr class="tr_solicitados_monto_extranjero hidden">
                            <td><input type="text" placeholder="$" id="extranjero_cheques_auto" name="extranjero_cheques_auto" class="form-search2" ></td>
                            <td><input type="text" placeholder="$" id="extranjero_debito_auto" name="extranjero_debito_auto" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="extranjero_credito_auto" name="extranjero_credito_auto" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="extranjero_efectivo_auto" name="extranjero_efectivo_auto" class="form-search2"></td>
                            <td><input type="text" placeholder="$" id="extranjero_amex_auto" name="extranjero_amex_auto" class="form-search2"></td>
                            <td>Monto Autorizado</td>
                        </tr>
                      </tbody>
                    </table>
					</div>
        			</div>
         </div>  
        </div>
        </div>
        
    </div>
    <script>
        $(document).ready( function(){

            $dataHorario = {
                '00:00':'00:00',
                '00:15':'00:15',
                '00:30':'00:30',
                '00:45':'00:45',
                '01:00':'01:00',
                '01:15':'01:15',
                '01:30':'01:30',
                '01:45':'01:45',
                '02:00':'02:00',
                '02:15':'02:15',
                '02:30':'02:30',
                '02:45':'02:45',
                '03:00':'03:00',
                '03:15':'03:15',
                '03:30':'03:30',
                '03:45':'03:45',
                '04:00':'04:00',
                '04:15':'04:15',
                '04:30':'04:30',
                '04:45':'04:45',
                '05:00':'05:00',
                '05:15':'05:15',
                '05:30':'05:30',
                '05:45':'05:45',
                '06:00':'06:00',
                '06:15':'06:15',
                '06:30':'06:30',
                '06:45':'06:45',
                '07:00':'07:00',
                '07:15':'07:15',
                '07:30':'07:30',
                '07:45':'07:45',
                '08:00':'08:00',
                '08:15':'08:15',
                '08:30':'08:30',
                '08:45':'08:45',
                '09:00':'09:00',
                '09:15':'09:15',
                '09:30':'09:30',
                '09:45':'09:45',
                '10:00':'10:00',
                '10:15':'10:15',
                '10:30':'10:30',
                '10:45':'10:45',
                '11:00':'11:00',
                '11:15':'11:15',
                '11:30':'11:30',
                '11:45':'11:45',
                '12:00':'12:00',
                '12:15':'12:15',
                '12:30':'12:30',
                '12:45':'12:45',
                '13:00':'13:00',
                '13:15':'13:15',
                '13:30':'13:30',
                '13:45':'13:45',
                '14:00':'14:00',
                '14:15':'14:15',
                '14:30':'14:30',
                '14:45':'14:45',
                '15:00':'15:00',
                '15:15':'15:15',
                '15:30':'15:30',
                '15:45':'15:45',
                '16:00':'16:00',
                '16:15':'16:15',
                '16:30':'16:30',
                '16:45':'16:45',
                '17:00':'17:00',
                '17:15':'17:15',
                '17:30':'17:30',
                '17:45':'17:45',
                '18:00':'18:00',
                '18:15':'18:15',
                '18:30':'18:30',
                '18:45':'18:45',
                '19:00':'19:00',
                '19:15':'19:15',
                '19:30':'19:30',
                '19:45':'19:45',
                '20:00':'20:00',
                '20:15':'20:15',
                '20:30':'20:30',
                '20:45':'20:45',
                '21:00':'21:00',
                '21:15':'21:15',
                '21:30':'21:30',

                '22:15':'22:15',        '21:45':'21:45',
                '22:00':'22:00',
                '22:30':'22:30',
                '22:45':'22:45',
                '23:00':'23:00',
                '23:15':'23:15',
                '23:30':'23:30',
                '23:45':'23:45'
            };
            $html ="";
            $.each($dataHorario,function(key,val){
                $html +="<option value="+ key +">"+ val +"</option>";
            });
            $('#hora_salida').html($html);
            $('#hora_final').html($html);
            $('.element-viatico').unbind().bind('click',function(e){
                $dataId = $(this).attr('data-id');
            });

            $("#datepicker_inicio").datepicker({
                onSelect: function(selected,evnt) {
                    $fecha_fin= $('#datepicker_fin').val().trim();
                    $fecha_inicio = $(this).val().trim();
                    if($fecha_inicio != '' && $fecha_fin != ''){
                        $finSplit = $fecha_fin.split('/');
                        $inicioSplit = $fecha_inicio.split('/');
                        $dias =parseInt($finSplit[1]) - parseInt($inicioSplit[1]);
                        $('.numero-dias').text($dias);
                        $('.numero-dias-txt').val($dias);
                    }
                }
            });
            $("#datepicker_fin").datepicker({
                onSelect: function(selected,evnt) {
                    $fecha_inicio = $('#datepicker_inicio').val().trim();
                    $fecha_fin = $(this).val().trim();
                    if($fecha_inicio != '' && $fecha_fin != '') {
                        $finSplit = $fecha_fin.split('/');
                        $inicioSplit = $fecha_inicio.split('/');
                        $dias = parseInt($finSplit[1]) - parseInt($inicioSplit[1]);
                        $('.numero-dias').text($dias);
                        $('.numero-dias-txt').val($dias);
                    }
                }
            });
            var pathProject = "{{ route('autocomplete_project') }}";
            $('.search_project').typeahead({
                source:  function (query, process) {
                    return $.get(pathProject, { query: query }, function (data) {
                        //console.log(data);
                        return process(data);
                    });
                },updater:function (selection) {
                    $('#project_id').val(selection.id);
                    return selection.name;
                }
            });

            var pathSubproject ="{{ route('autocomplete_subproject') }}";
            $('.search_subproject').typeahead({
                source:  function (query, process) {
                    return $.get(pathSubproject, { query: query,project_id :  $('#project_id').val() }, function (data) {
                        return process(data);
                    });
                },updater:function (selection) {
                    $('#subproject_id').val(selection.id);
                    return selection.name;
                }
            });
            var pathTravel ="{{ route('autocomplete_travel') }}";
            $('.search_travel').typeahead({
                source:  function (query, process) {
                    return $.get(pathTravel,
                        {
                            query: query,
                            project_id :  $('#project_id').val(),
                            subproject_id : $('#subproject_id').val()
                        }, function (data) {
                        return process(data);
                    });
                },updater:function (selection) {
                    $('#travel_id').val(selection.id);
                    return selection.name;
                }
            });
        });
        function  hospedaje($form) {
            alert('entra a hospedaje');
            $lable_id = $form.label_id;
            $type_nacional= parseInt($form.type_nacional);
            $numero_noches = parseInt($form.numero_noches);
            $costo_unitario = parseFloat($form.costo_unitario);
            $numero_cuartos = parseInt($form.numero_cuartos);
            $costo_total = parseFloat($form.costo_total);

            $flag_txt_nacional = parseFloat($form.flag_txt_nacional);
            $nacional_cheque = parseFloat($form.nacional_cheque);
            $nacional_debito = parseFloat($form.nacional_debito);
            $nacional_credito = parseFloat($form.nacional_credito);
            $nacional_efectivo = parseFloat($form.nacional_efectivo);
            $nacional_amex = parseFloat($form.nacional_amex);

            $flag_txt_extrajero = parseFloat($form.flag_txt_extrajero);
            $extranjero_cheque = parseFloat($form.extranjero_cheque);
            $extranjero_debito = parseFloat($form.extranjero_debito);
            $extranjero_credito = parseFloat($form.extranjero_credito);
            $extranjero_efectivo = parseFloat($form.extranjero_efectivo);
            $extranjero_amex = parseFloat($form.extranjero_amex);

            if($type_nacional == 0){
                $('.tr_solicitados_monto_nacional').removeClass('hidden');
                $mon_cheque_soli = $('#nacional_cheques_soli').val();
                $mon_debito_soli = $('#nacional_debito_soli').val();
                $mon_credito_soli = $('#nacional_credito_soli').val();
                $mon_efectivo_soli = $('#nacional_efectivo_soli').val();
                $mon_amex_soli  = $('#nacional_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$nacional_cheque ? 0 : $nacional_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$nacional_credito ? 0 : $nacional_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$nacional_amex ? 0 : $nacional_amex));

                $('#nacional_cheques_soli').val($mon_cheque_soli_to);
                $('#nacional_debito_soli').val($mon_debito_soli_to);
                $('#nacional_credito_soli').val($mon_credito_soli_to);
                $('#nacional_efectivo_soli').val($mon_efectivo_soli_to);
                $('#nacional_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$nacional_cheque ? 0 : $nacional_cheque)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito)) + parseFloat((!$nacional_credito ? 0 : $nacional_credito)) + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo)) + parseFloat((!$nacional_amex ? 0 : $nacional_amex));
                $total_hospedaje = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }else if($type_nacional == 1){
                $('.tr_solicitados_monto_extranjero').removeClass('hidden');
                $mon_cheque_soli = $('#extranjero_cheques_soli').val();
                $mon_debito_soli = $('#extranjero_debito_soli').val();
                $mon_credito_soli = $('#extranjero_credito_soli').val();
                $mon_efectivo_soli = $('#extranjero_efectivo_soli').val();
                $mon_amex_soli  = $('#extranjero_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));

                $('#extranjero_cheques_soli').val($mon_cheque_soli_to);
                $('#extranjero_debito_soli').val($mon_debito_soli_to);
                $('#extranjero_credito_soli').val($mon_credito_soli_to);
                $('#extranjero_efectivo_soli').val($mon_efectivo_soli_to);
                $('#extranjero_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito)) + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito)) + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo)) + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));
                $total_hospedaje = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }
            $val_hopedaje = $('#hospedaje_monto_hidden').val($monto_total_solicitado_nacional);
            $('#monto_hospedaje').html($monto_total_solicitado_nacional);
            $('#tr_hospedaje').removeClass('hidden');
            $.ajax({
                url:'{{ route('lodging_create') }}',
                data: {
                    form :$form,
                    request_id : $('#request_id').val()
                },
                type:'GET',
                success:function(data){
                    console.log(data);
                },error:function(data){
                    alert('Algo ocurrio intente mas tarde');
                }
            });
            return false;
        }

        function alimentacion($form){
            $lable_id = $form.label_id;
            $type_nacional= parseInt($form.type_nacional);
            $numero_comidas = parseInt($form.numero_comidas);
            $total_prespuesto = parseFloat($form.total_prespuesto);
            $presupuesto_diario = parseInt($form.presupuesto_diario);
            $presupuesto_por_comida = parseFloat($form.presupuesto_por_comida);

            $flag_txt_nacional = parseFloat($form.flag_txt_nacional);
            $nacional_cheque = parseFloat($form.nacional_cheque);
            $nacional_debito = parseFloat($form.nacional_debito);
            $nacional_credito = parseFloat($form.nacional_credito);
            $nacional_efectivo = parseFloat($form.nacional_efectivo);
            $nacional_amex = parseFloat($form.nacional_amex);

            $flag_txt_extrajero = parseFloat($form.flag_txt_extrajero);
            $extranjero_cheque = parseFloat($form.extranjero_cheque);
            $extranjero_debito = parseFloat($form.extranjero_debito);
            $extranjero_credito = parseFloat($form.extranjero_credito);
            $extranjero_efectivo = parseFloat($form.extranjero_efectivo);
            $extranjero_amex = parseFloat($form.extranjero_amex);

            if($type_nacional == 0){
                $('.tr_solicitados_monto_nacional').removeClass('hidden');
                $mon_cheque_soli = $('#nacional_cheques_soli').val();
                $mon_debito_soli = $('#nacional_debito_soli').val();
                $mon_credito_soli = $('#nacional_credito_soli').val();
                $mon_efectivo_soli = $('#nacional_efectivo_soli').val();
                $mon_amex_soli  = $('#nacional_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$nacional_cheque ? 0 : $nacional_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$nacional_credito ? 0 : $nacional_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$nacional_amex ? 0 : $nacional_amex));

                $('#nacional_cheques_soli').val($mon_cheque_soli_to);
                $('#nacional_debito_soli').val($mon_debito_soli_to);
                $('#nacional_credito_soli').val($mon_credito_soli_to);
                $('#nacional_efectivo_soli').val($mon_efectivo_soli_to);
                $('#nacional_amex_soli').val($mon_amex_soli_to);
                $total_alimenacion = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$nacional_cheque ? 0 : $nacional_cheque)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito)) + parseFloat((!$nacional_credito ? 0 : $nacional_credito)) + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo)) + parseFloat((!$nacional_amex ? 0 : $nacional_amex));
            }else
                if($type_nacional == 1){
                $('.tr_solicitados_monto_extranjero').removeClass('hidden');
                $mon_cheque_soli = $('#extranjero_cheques_soli').val();
                $mon_debito_soli = $('#extranjero_debito_soli').val();
                $mon_credito_soli = $('#extranjero_credito_soli').val();
                $mon_efectivo_soli = $('#extranjero_efectivo_soli').val();
                $mon_amex_soli  = $('#extranjero_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));

                $('#extranjero_cheques_soli').val($mon_cheque_soli_to);
                $('#extranjero_debito_soli').val($mon_debito_soli_to);
                $('#extranjero_credito_soli').val($mon_credito_soli_to);
                $('#extranjero_efectivo_soli').val($mon_efectivo_soli_to);
                $('#extranjero_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito)) + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito)) + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo)) + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));
                $total_alimenacion = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }
            $val_alimentacion = $('#alimento_monto_hidden').val($monto_total_solicitado_nacional);
            $('#monto_alimentacion').html($monto_total_solicitado_nacional);
            $('#tr_alimentacion').removeClass('hidden');
            $.ajax({
                url:'{{ route('food_create') }}',
                data: {
                    form :$form,
                    request_id : $('#request_id').val()
                },
                type:'GET',
                success:function(data){
                    console.log(data);
                },error:function(data){
                    alert('Algo ocurrio intente mas tarde');
                }
            });
            return false;


        }

        function rentaAuto($form){
            $lable_id = $form.label_id;
            $type_nacional= parseInt($form.type_nacional);

            $numero_dias = parseInt($form.numero_dias);
            $presupuesto_gasolina =parseFloat($form.presupuesto_gasolina);
            $presupuesto_renta = parseFloat($form.presupuesto_renta);
            $renta_por_dia = parseFloat($form.renta_por_dia);
            $tipo_auto = $form.tipo_auto;

            $flag_txt_nacional = parseFloat($form.flag_txt_nacional);
            $nacional_cheque = parseFloat($form.nacional_cheque);
            $nacional_debito = parseFloat($form.nacional_debito);
            $nacional_credito = parseFloat($form.nacional_credito);
            $nacional_efectivo = parseFloat($form.nacional_efectivo);
            $nacional_amex = parseFloat($form.nacional_amex);

            $flag_txt_extrajero = parseFloat($form.flag_txt_extrajero);
            $extranjero_cheque = parseFloat($form.extranjero_cheque);
            $extranjero_debito = parseFloat($form.extranjero_debito);
            $extranjero_credito = parseFloat($form.extranjero_credito);
            $extranjero_efectivo = parseFloat($form.extranjero_efectivo);
            $extranjero_amex = parseFloat($form.extranjero_amex);
            if($type_nacional == 0){
                $('.tr_solicitados_monto_nacional').removeClass('hidden');
                $mon_cheque_soli = $('#nacional_cheques_soli').val();
                $mon_debito_soli = $('#nacional_debito_soli').val();
                $mon_credito_soli = $('#nacional_credito_soli').val();
                $mon_efectivo_soli = $('#nacional_efectivo_soli').val();
                $mon_amex_soli  = $('#nacional_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$nacional_cheque ? 0 : $nacional_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$nacional_credito ? 0 : $nacional_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$nacional_amex ? 0 : $nacional_amex));

                $('#nacional_cheques_soli').val($mon_cheque_soli_to);
                $('#nacional_debito_soli').val($mon_debito_soli_to);
                $('#nacional_credito_soli').val($mon_credito_soli_to);
                $('#nacional_efectivo_soli').val($mon_efectivo_soli_to);
                $('#nacional_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$nacional_cheque ? 0 : $nacional_cheque)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito)) + parseFloat((!$nacional_credito ? 0 : $nacional_credito)) + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo)) + parseFloat((!$nacional_amex ? 0 : $nacional_amex));
                $total_renta_auto = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }else
            if($type_nacional == 1){
                $('.tr_solicitados_monto_extranjero').removeClass('hidden');
                $mon_cheque_soli = $('#extranjero_cheques_soli').val();
                $mon_debito_soli = $('#extranjero_debito_soli').val();
                $mon_credito_soli = $('#extranjero_credito_soli').val();
                $mon_efectivo_soli = $('#extranjero_efectivo_soli').val();
                $mon_amex_soli  = $('#extranjero_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));

                $('#extranjero_cheques_soli').val($mon_cheque_soli_to);
                $('#extranjero_debito_soli').val($mon_debito_soli_to);
                $('#extranjero_credito_soli').val($mon_credito_soli_to);
                $('#extranjero_efectivo_soli').val($mon_efectivo_soli_to);
                $('#extranjero_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito)) + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito)) + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo)) + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));
                $total_renta_auto = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }
            $('#tr_renta_auto').removeClass('hidden');
            $val_renta_auto = $('#renta_autos_monto_hidden').val($monto_total_solicitado_nacional);
            $('#monto_renta_auto').html($monto_total_solicitado_nacional);
            return false;
        }

        function taxi($form){
            $lable_id = $form.label_id;
            $type_nacional= parseInt($form.type_nacional);

            $lugar_destino = $form.lugar_destino;
            $lugar_origen = $form.lugar_origen;
            $fecha = $form.fecha;
            $presupuesto = parseFloat($form.presupuesto);
            $flag_txt_nacional = parseFloat($form.flag_txt_nacional);
            $nacional_cheque = parseFloat($form.nacional_cheque);
            $nacional_debito = parseFloat($form.nacional_debito);
            $nacional_credito = parseFloat($form.nacional_credito);
            $nacional_efectivo = parseFloat($form.nacional_efectivo);
            $nacional_amex = parseFloat($form.nacional_amex);

            $flag_txt_extrajero = parseFloat($form.flag_txt_extrajero);
            $extranjero_cheque = parseFloat($form.extranjero_cheque);
            $extranjero_debito = parseFloat($form.extranjero_debito);
            $extranjero_credito = parseFloat($form.extranjero_credito);
            $extranjero_efectivo = parseFloat($form.extranjero_efectivo);
            $extranjero_amex = parseFloat($form.extranjero_amex);
            if($type_nacional == 0){
                $('.tr_solicitados_monto_nacional').removeClass('hidden');
                $mon_cheque_soli = $('#nacional_cheques_soli').val();
                $mon_debito_soli = $('#nacional_debito_soli').val();
                $mon_credito_soli = $('#nacional_credito_soli').val();
                $mon_efectivo_soli = $('#nacional_efectivo_soli').val();
                $mon_amex_soli  = $('#nacional_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$nacional_cheque ? 0 : $nacional_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$nacional_credito ? 0 : $nacional_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$nacional_amex ? 0 : $nacional_amex));

                $('#nacional_cheques_soli').val($mon_cheque_soli_to);
                $('#nacional_debito_soli').val($mon_debito_soli_to);
                $('#nacional_credito_soli').val($mon_credito_soli_to);
                $('#nacional_efectivo_soli').val($mon_efectivo_soli_to);
                $('#nacional_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$nacional_cheque ? 0 : $nacional_cheque)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito)) + parseFloat((!$nacional_credito ? 0 : $nacional_credito)) + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo)) + parseFloat((!$nacional_amex ? 0 : $nacional_amex));
                $total_taxi = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }else if($type_nacional == 1){
                $('.tr_solicitados_monto_extranjero').removeClass('hidden');
                $mon_cheque_soli = $('#extranjero_cheques_soli').val();
                $mon_debito_soli = $('#extranjero_debito_soli').val();
                $mon_credito_soli = $('#extranjero_credito_soli').val();
                $mon_efectivo_soli = $('#extranjero_efectivo_soli').val();
                $mon_amex_soli  = $('#extranjero_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));

                $('#extranjero_cheques_soli').val($mon_cheque_soli_to);
                $('#extranjero_debito_soli').val($mon_debito_soli_to);
                $('#extranjero_credito_soli').val($mon_credito_soli_to);
                $('#extranjero_efectivo_soli').val($mon_efectivo_soli_to);
                $('#extranjero_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito)) + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito)) + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo)) + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));
                $total_taxi = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }
            $('#tr_taxi').removeClass('hidden');
            $val_taxi = $('#transporte_monto_hidden').val($monto_total_solicitado_nacional);
            $('#monto_taxi').html($monto_total_solicitado_nacional);
            return false;
        }

        function seminarios($form){
            $lable_id = $form.label_id;
            $type_nacional= parseInt($form.type_nacional);
            $nombre_evento = $form.nombre_evento;
            $numero_de_eventos = parseInt($form.numero_de_eventos);
            $total_costo= parseFloat($form.total_costo);
            $costo_por_evento = parseFloat($form.costo_por_evento);

            $flag_txt_nacional = parseFloat($form.flag_txt_nacional);
            $nacional_cheque = parseFloat($form.nacional_cheque);
            $nacional_debito = parseFloat($form.nacional_debito);
            $nacional_credito = parseFloat($form.nacional_credito);
            $nacional_efectivo = parseFloat($form.nacional_efectivo);
            $nacional_amex = parseFloat($form.nacional_amex);

            $flag_txt_extrajero = parseFloat($form.flag_txt_extrajero);
            $extranjero_cheque = parseFloat($form.extranjero_cheque);
            $extranjero_debito = parseFloat($form.extranjero_debito);
            $extranjero_credito = parseFloat($form.extranjero_credito);
            $extranjero_efectivo = parseFloat($form.extranjero_efectivo);
            $extranjero_amex = parseFloat($form.extranjero_amex);
            if($type_nacional == 0){
                $mon_cheque_soli = $('#nacional_cheques_soli').val();
                $mon_debito_soli = $('#nacional_debito_soli').val();
                $mon_credito_soli = $('#nacional_credito_soli').val();
                $mon_efectivo_soli = $('#nacional_efectivo_soli').val();
                $mon_amex_soli  = $('#nacional_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$nacional_cheque ? 0 : $nacional_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$nacional_credito ? 0 : $nacional_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$nacional_amex ? 0 : $nacional_amex));

                $('#nacional_cheques_soli').val($mon_cheque_soli_to);
                $('#nacional_debito_soli').val($mon_debito_soli_to);
                $('#nacional_credito_soli').val($mon_credito_soli_to);
                $('#nacional_efectivo_soli').val($mon_efectivo_soli_to);
                $('#nacional_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$nacional_cheque ? 0 : $nacional_cheque)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito)) + parseFloat((!$nacional_credito ? 0 : $nacional_credito)) + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo)) + parseFloat((!$nacional_amex ? 0 : $nacional_amex));
                $total_seminario = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }else
            if($type_nacional == 1){
                $('.tr_solicitados_monto_extranjero').removeClass('hidden');
                $mon_cheque_soli = $('#extranjero_cheques_soli').val();
                $mon_debito_soli = $('#extranjero_debito_soli').val();
                $mon_credito_soli = $('#extranjero_credito_soli').val();
                $mon_efectivo_soli = $('#extranjero_efectivo_soli').val();
                $mon_amex_soli  = $('#extranjero_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));

                $('#extranjero_cheques_soli').val($mon_cheque_soli_to);
                $('#extranjero_debito_soli').val($mon_debito_soli_to);
                $('#extranjero_credito_soli').val($mon_credito_soli_to);
                $('#extranjero_efectivo_soli').val($mon_efectivo_soli_to);
                $('#extranjero_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito)) + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito)) + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo)) + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));
                $total_seminario = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }
            $('#tr_seminario').removeClass('hidden');
            $val_seminarios =$('#seminarios_monto_hidden').val($monto_total_solicitado_nacional);
            $('#monto_seminario').html($monto_total_solicitado_nacional);
            return false;
        }

        function transporteAereo($form){
            $lable_id = $form.label_id;
            $type_nacional= parseInt($form.type_nacional);
            $ciudad_origen = $form.ciudad_origen;
            $ciudad_destino = $form.ciudad_destino;
            $fecha_salida = $form.ciudad_destino;
            $fecha_llegada =$form.fecha_salida;
            $presupuesto = parseFloat($form.presupuesto);

            $flag_txt_nacional = parseFloat($form.flag_txt_nacional);
            $nacional_cheque = parseFloat($form.nacional_cheque);
            $nacional_debito = parseFloat($form.nacional_debito);
            $nacional_credito = parseFloat($form.nacional_credito);
            $nacional_efectivo = parseFloat($form.nacional_efectivo);
            $nacional_amex = parseFloat($form.nacional_amex);

            $flag_txt_extrajero = parseFloat($form.flag_txt_extrajero);
            $extranjero_cheque = parseFloat($form.extranjero_cheque);
            $extranjero_debito = parseFloat($form.extranjero_debito);
            $extranjero_credito = parseFloat($form.extranjero_credito);
            $extranjero_efectivo = parseFloat($form.extranjero_efectivo);
            $extranjero_amex = parseFloat($form.extranjero_amex);
            if($type_nacional == 0){
                $mon_cheque_soli = $('#nacional_cheques_soli').val();
                $mon_debito_soli = $('#nacional_debito_soli').val();
                $mon_credito_soli = $('#nacional_credito_soli').val();
                $mon_efectivo_soli = $('#nacional_efectivo_soli').val();
                $mon_amex_soli  = $('#nacional_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$nacional_cheque ? 0 : $nacional_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$nacional_credito ? 0 : $nacional_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$nacional_amex ? 0 : $nacional_amex));

                $('#nacional_cheques_soli').val($mon_cheque_soli_to);
                $('#nacional_debito_soli').val($mon_debito_soli_to);
                $('#nacional_credito_soli').val($mon_credito_soli_to);
                $('#nacional_efectivo_soli').val($mon_efectivo_soli_to);
                $('#nacional_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$nacional_cheque ? 0 : $nacional_cheque)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito)) + parseFloat((!$nacional_credito ? 0 : $nacional_credito)) + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo)) + parseFloat((!$nacional_amex ? 0 : $nacional_amex));
                $total_aereo = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }else
            if($type_nacional == 1){
                $('.tr_solicitados_monto_extranjero').removeClass('hidden');
                $mon_cheque_soli = $('#extranjero_cheques_soli').val();
                $mon_debito_soli = $('#extranjero_debito_soli').val();
                $mon_credito_soli = $('#extranjero_credito_soli').val();
                $mon_efectivo_soli = $('#extranjero_efectivo_soli').val();
                $mon_amex_soli  = $('#extranjero_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));

                $('#extranjero_cheques_soli').val($mon_cheque_soli_to);
                $('#extranjero_debito_soli').val($mon_debito_soli_to);
                $('#extranjero_credito_soli').val($mon_credito_soli_to);
                $('#extranjero_efectivo_soli').val($mon_efectivo_soli_to);
                $('#extranjero_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito)) + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito)) + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo)) + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));
                $total_aereo = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }
            $('#tr_aereo').removeClass('hidden');
            $val_transporte_aereo = $('#transporte_aereo_monto_hidden').val($monto_total_solicitado_nacional);
            $('#monto_aereo').html($monto_total_solicitado_nacional);
            return false;
        }

        function transporteTerrestre($form){
            $lable_id = $form.label_id;
            $type_nacional= parseInt($form.type_nacional);
            $ciudad_origen = $form.ciudad_origen;
            $ciudad_destino = $form.ciudad_destino;
            $fecha_salida = $form.ciudad_destino;
            $fecha_llegada =$form.fecha_salida;
            $presupuesto = parseFloat($form.presupuesto);

            $flag_txt_nacional = parseFloat($form.flag_txt_nacional);
            $nacional_cheque = parseFloat($form.nacional_cheque);
            $nacional_debito = parseFloat($form.nacional_debito);
            $nacional_credito = parseFloat($form.nacional_credito);
            $nacional_efectivo = parseFloat($form.nacional_efectivo);
            $nacional_amex = parseFloat($form.nacional_amex);

            $flag_txt_extrajero = parseFloat($form.flag_txt_extrajero);
            $extranjero_cheque = parseFloat($form.extranjero_cheque);
            $extranjero_debito = parseFloat($form.extranjero_debito);
            $extranjero_credito = parseFloat($form.extranjero_credito);
            $extranjero_efectivo = parseFloat($form.extranjero_efectivo);
            $extranjero_amex = parseFloat($form.extranjero_amex);

            if($type_nacional == 0){
                $mon_cheque_soli = $('#nacional_cheques_soli').val();
                $mon_debito_soli = $('#nacional_debito_soli').val();
                $mon_credito_soli = $('#nacional_credito_soli').val();
                $mon_efectivo_soli = $('#nacional_efectivo_soli').val();
                $mon_amex_soli  = $('#nacional_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$nacional_cheque ? 0 : $nacional_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$nacional_credito ? 0 : $nacional_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$nacional_amex ? 0 : $nacional_amex));

                $('#nacional_cheques_soli').val($mon_cheque_soli_to);
                $('#nacional_debito_soli').val($mon_debito_soli_to);
                $('#nacional_credito_soli').val($mon_credito_soli_to);
                $('#nacional_efectivo_soli').val($mon_efectivo_soli_to);
                $('#nacional_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$nacional_cheque ? 0 : $nacional_cheque)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito)) + parseFloat((!$nacional_credito ? 0 : $nacional_credito)) + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo)) + parseFloat((!$nacional_amex ? 0 : $nacional_amex));
                $total_terrestre = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }else
            if($type_nacional == 1){
                $('.tr_solicitados_monto_extranjero').removeClass('hidden');
                $mon_cheque_soli = $('#extranjero_cheques_soli').val();
                $mon_debito_soli = $('#extranjero_debito_soli').val();
                $mon_credito_soli = $('#extranjero_credito_soli').val();
                $mon_efectivo_soli = $('#extranjero_efectivo_soli').val();
                $mon_amex_soli  = $('#extranjero_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));

                $('#extranjero_cheques_soli').val($mon_cheque_soli_to);
                $('#extranjero_debito_soli').val($mon_debito_soli_to);
                $('#extranjero_credito_soli').val($mon_credito_soli_to);
                $('#extranjero_efectivo_soli').val($mon_efectivo_soli_to);
                $('#extranjero_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito)) + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito)) + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo)) + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));
                $total_terrestre = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }
            $('#tr_terrestre').removeClass('hidden');
            $val_transporte_terrestre = $('#transporte_terrestre_monto_hidden').val($monto_total_solicitado_nacional);
            $('#monto_terrestre').html($monto_total_solicitado_nacional);
            return false;

        }

        function kilometraje($form){
            $lable_id = $form.label_id;
            $type_nacional= parseInt($form.type_nacional);

            $numero_dias = parseInt($form.numero_dias);
            $renta_por_dia = parseFloat($form.renta_por_dia);
            $presupuesto_gasolina = parseFloat($form.presupuesto_gasolina);
            $tipo_auto = $form.tipo_auto;
            $presupuesto_renta =parseFloat($form.presupuesto_renta);

            $flag_txt_nacional = parseFloat($form.flag_txt_nacional);
            $nacional_cheque = parseFloat($form.nacional_cheque);
            $nacional_debito = parseFloat($form.nacional_debito);
            $nacional_credito = parseFloat($form.nacional_credito);
            $nacional_efectivo = parseFloat($form.nacional_efectivo);
            $nacional_amex = parseFloat($form.nacional_amex);

            $flag_txt_extrajero = parseFloat($form.flag_txt_extrajero);
            $extranjero_cheque = parseFloat($form.extranjero_cheque);
            $extranjero_debito = parseFloat($form.extranjero_debito);
            $extranjero_credito = parseFloat($form.extranjero_credito);
            $extranjero_efectivo = parseFloat($form.extranjero_efectivo);
            $extranjero_amex = parseFloat($form.extranjero_amex);
            if($type_nacional == 0){
                $mon_cheque_soli = $('#nacional_cheques_soli').val();
                $mon_debito_soli = $('#nacional_debito_soli').val();
                $mon_credito_soli = $('#nacional_credito_soli').val();
                $mon_efectivo_soli = $('#nacional_efectivo_soli').val();
                $mon_amex_soli  = $('#nacional_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$nacional_cheque ? 0 : $nacional_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$nacional_credito ? 0 : $nacional_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$nacional_amex ? 0 : $nacional_amex));

                $('#nacional_cheques_soli').val($mon_cheque_soli_to);
                $('#nacional_debito_soli').val($mon_debito_soli_to);
                $('#nacional_credito_soli').val($mon_credito_soli_to);
                $('#nacional_efectivo_soli').val($mon_efectivo_soli_to);
                $('#nacional_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$nacional_cheque ? 0 : $nacional_cheque)) + parseFloat((!$nacional_debito ? 0 : $nacional_debito)) + parseFloat((!$nacional_credito ? 0 : $nacional_credito)) + parseFloat((!$nacional_efectivo ? 0 : $nacional_efectivo)) + parseFloat((!$nacional_amex ? 0 : $nacional_amex));
                $total_kilometros= parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }else
            if($type_nacional == 1){
                $('.tr_solicitados_monto_extranjero').removeClass('hidden');
                $mon_cheque_soli = $('#extranjero_cheques_soli').val();
                $mon_debito_soli = $('#extranjero_debito_soli').val();
                $mon_credito_soli = $('#extranjero_credito_soli').val();
                $mon_efectivo_soli = $('#extranjero_efectivo_soli').val();
                $mon_amex_soli  = $('#extranjero_amex_soli').val();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque));
                $mon_debito_soli_to = parseFloat((!$mon_debito_soli ? 0 : $mon_debito_soli)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito));
                $mon_credito_soli_to = parseFloat((!$mon_credito_soli ? 0 : $mon_credito_soli))  + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito));
                $mon_efectivo_soli_to = parseFloat((!$mon_efectivo_soli ? 0 : $mon_efectivo_soli))  + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo));
                $mon_amex_soli_to = parseFloat((!$mon_amex_soli ? 0 : $mon_amex_soli))  + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));

                $('#extranjero_cheques_soli').val($mon_cheque_soli_to);
                $('#extranjero_debito_soli').val($mon_debito_soli_to);
                $('#extranjero_credito_soli').val($mon_credito_soli_to);
                $('#extranjero_efectivo_soli').val($mon_efectivo_soli_to);
                $('#extranjero_amex_soli').val($mon_amex_soli_to);
                $monto_total_solicitado_nacional  = parseFloat((!$extranjero_cheque ? 0 : $extranjero_cheque)) + parseFloat((!$extranjero_debito ? 0 : $extranjero_debito)) + parseFloat((!$extranjero_credito ? 0 : $extranjero_credito)) + parseFloat((!$extranjero_efectivo ? 0 : $extranjero_efectivo)) + parseFloat((!$extranjero_amex ? 0 : $extranjero_amex));
                $total_kilometros = parseFloat($mon_cheque_soli_to) + parseFloat($mon_debito_soli_to) + parseFloat($mon_credito_soli_to) + parseFloat($mon_efectivo_soli_to) + parseFloat($mon_amex_soli_to);
            }
            $('#tr_kilometros').removeClass('hidden');
            $val_kilometraje = $('#kilometraje_monto_hidden').val($monto_total_solicitado_nacional);
            $('#monto_kilometros').html($monto_total_solicitado_nacional);
            return false;
        }

        function saveRequest() {
            alert('entra rimero a solicitud');
            $reques_id = $('#request_id').val();
            if($reques_id == ''){
                $.ajax({
                    url : '{{ route('request_create') }}',
                    data : $('#form_request').serialize(),
                    type: 'GET',
                    dataType:'json',
                    success:function(data){
                        console.log(data);
                        $('#request_id').val(data.data.iden);
                    },
                    error:function(data){
                        alert('Lo sentimos ocurrio un error intenta mas tarde');
                    }
                });
            }
        }



    </script>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

