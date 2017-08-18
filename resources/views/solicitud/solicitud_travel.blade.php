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
            margin-top: 80%;
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
        <div class="row">
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
                        <input type="text" class="form-fecha" id="datepicker_inicio">
                    </div>
                    <div class="col-md-3" style="text-align: left">
                        <label class="label-fechas">
                            <i class="icon-calendario"></i>
                            Fin
                        </label>
                    </div>
                    <div class="col-md-2" style="text-align: left">
                        <input type="text" class="form-fecha" id="datepicker_fin">
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
                        <input type="text" class="form-fecha" >
                    </div>
                    <div class="col-md-3" style="text-align:left">
                        <label class="label-fechas">
                            <i class="icon-reloj"></i>
                            Regreso
                        </label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-fecha" style="text-align: left">
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
                        <input type="text" class="form-fecha" >
                    </div>
                    <div class="col-md-3">
                        <label class="label-fechas">
                            <i class="icon-ubicacion"></i>
                            Final
                        </label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-fecha" >
                    </div>
                </div>

            </div>

            <div class="col-xs-2 col-sm-2 col-md-2" >
                <span id="dias">
                    <span id="dias_num">

                    </span>

                    <span class="label-dia">
                        dias
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
                        </div>
                        @elseif($dat->name == 'Alimentación')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_foot",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-comida element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Transporte')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_taxi",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-transporte_publico element-viatico">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Pago por kilometraje')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_mileage",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-kilometraje element-viatico">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Renta de Transporte terrestre')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_transporte_terrestre",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-transporte_terrestre element-viatico">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Renta de Autos')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_rent_car",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-renta_autos element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Seminarios o Convenciones')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_conference",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-seminarios element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Renta de Transporte aéreo')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_airplane",['iden' => $dat->iden ]) }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-transporte_aereo element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
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
                                    /*Aqui van  los datos de  */
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
      <span title-button><br>Cheques
      </div>
      </td>
      <td width="15%">
      <div id="tabla-debito">
      <span class="icon-tarjeta">
      </span>
      <span title-button><br>
      Débito
      </div>
      </td>
      <td width="16%">
      <div id="tabla-credito">
      <span class="icon-tarjeta">
      </span>
	  <span title-button><br>
      Crédito
      </div></td>
      <td width="15%">
      <div id="tabla-efectivo">
      <span class="icon-efectivo" ><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span></span>
      <span title-button><br>
      Efectivo
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
    <tr>
      <td rowspan="2">
      <div id="nacional">
      Nacional
      </div>
      </td>
      <td>
          <input type="text" placeholder="$" id="nacional_cheques_soli" name="nacional_cheques_soli" class="form-search2">
      </td>
      <td>
          <input type="text" placeholder="$" id="nacional_debito_soli" name="nacional_debito_soli" class="form-search2">
      </td>
      <td>
          <input type="text" placeholder="$" id="nacional_credito_soli" name=="nacional_credito_soli" class="form-search2">
      </td>
      <td>
          <input type="text" placeholder="$" id="nacional_efectivo_soli" name="nacional_efectivo_soli" class="form-search2">
      </td>
      <td>
          <input type="text" placeholder="$" id="nacional_amex_soli" name="nacional_amex_soli" class="form-search2">
      </td>
      <td>Monto solicitado</td>
    </tr>
    <tr>
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
    <tr>
      <td rowspan="2"><div id="extranjero"> Extranjero </div></td>
      <td><input type="text" placeholder="$" class="form-search2"></td>
      <td><input type="text" placeholder="$" class="form-search2"></td>
      <td><input type="text" placeholder="$" class="form-search2"></td>
      <td><input type="text" placeholder="$" class="form-search2"></td>
      <td><input type="text" placeholder="$" class="form-search2"></td>
      <td>Monto solicitado</td>
    </tr>
    <tr>
      <td><input type="text" placeholder="$" class="form-search2" ></td>
      <td><input type="text" placeholder="$" class="form-search2"></td>
      <td><input type="text" placeholder="$" class="form-search2"></td>
      <td><input type="text" placeholder="$" class="form-search2"></td>
      <td><input type="text" placeholder="$" class="form-search2"></td>
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
            $('.element-viatico').unbind().bind('click',function(e){
                $dataId = $(this).attr('data-id');

                //alert('Este es el ID = '. $dataId);

            });

            $("#datepicker_inicio").datepicker({
                onSelect: function(selected,evnt) {
                    $fecha_fin= $('#datepicker_fin').val().trim();
                    $fecha_inicio = $(this).val().trim();
                    if($fecha_inicio != '' && $fecha_fin != ''){
                        $finSplit = $fecha_fin.split('/');
                        $inicioSplit = $fecha_inicio.split('/');
                        $dias =parseInt($finSplit[1]) - parseInt($inicioSplit[1]);
                        $('#dias_num').text($dias);
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
                        $('#dias_num').text($dias);
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
            /*
            $('#datepicker_fin').unbind().bind('blur',function(){
                $fecha_inicio = $('#datepicker_inicio').val();
                $fecha_fin = $(this).val();
                if($fecha_inicio != '' && $fecha_fin != ''){
                    alert('pierde el foco fin');
                }else{
                    alert('no pierde el foco fin');
                }
            });

            $('#datepicker_inicio').unbind().bind('blur',function(){
                $fecha_fin= $('#datepicker_fin').val();
                $fecha_inicio = $(this).val();
                if($fecha_inicio != '' && $fecha_inicio != ''){
                    alert('pierde el foco inicio');
                }else{
                    alert('no pierde el foco inicio');
                }
            });
            */

        });
        function  hospedaje($form) {
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
                $mon_cheque_soli = $('#nacional_cheques_soli').val();
                $mon_debito_soli = $('#nacional_debito_soli').val().trim();
                $mon_credito_soli = $('#nacional_credito_soli').val().trim();
                $mon_efectivo_soli = $('#nacional_efectivo_soli').val().trim();
                $mon_amex_soli  = $('#nacional_amex_soli').val().trim();

                $mon_cheque_soli_to = parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)) + $nacional_cheque;
                $mon_debito_soli = (!$mon_debito_soli ? 0 : $mon_debito_soli) + $nacional_debito;
                $mon_credito_soli = (!$mon_credito_soli ? 0 : $mon_credito_soli)  + $nacional_credito;
                $mon_efectivo_soli = (!$mon_efectivo_soli ? 0 : $mon_efectivo_soli)  + $nacional_efectivo;
                $mon_amex_soli = (!$mon_amex_soli ? 0 : $mon_amex_soli)  + $nacional_amex;
                console.log(parseFloat((!$mon_cheque_soli ? 0 : $mon_cheque_soli)));
                console.log($nacional_cheque);

                $('#nacional_cheques_soli').val($mon_cheque_soli_to);
                $('#nacional_debito_soli').val($mon_debito_soli);
                $('#nacional_credito_soli').val($mon_credito_soli);
                $('#nacional_efectivo_soli').val($mon_efectivo_soli);
                $('#nacional_amex_soli').val($mon_amex_soli);
            }else if($type_nacional == 1){
                alert('entra a internacional');
            }
            return false;
        }

        function alimentacion($form){
            alert('alimentacion');
            console.log($form);
        }


        function rentaAuto($form){
            alert('rentaAuto');
            console.log($form);
        }
        function seminarios($form){
            alert('seminarios');
            console.log($form);
        }
        function taxi($form){
            alert('taxi');
            console.log($form);
        }
        function transporteAereo($form){
            alert('transporteAereo');
            console.log($form);
        }
        function transporteTerrestre($form){
            alert('transporteTerrestre');
            console.log($form);
        }
        function kilometraje($form){
            alert('kilometraje');
            console.log($form);
        }


    </script>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

