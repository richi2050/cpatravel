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
        #dias{
            display: inline-block;
            padding: 16px;
            text-align: center;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #c9dde0;
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
    </style>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <h3 class="titulo" style="text-align: center; color: #009376;">
                    <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                    SOLICITUD DE GASTOS DE VIAJE.
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 ">
                <div class="col-md-2">
                    <div class="conten-img">
                        <img alt="User Pic" src="{{ Session::get('img') }}" class="img-circle img-responsive img-profile">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="conten-img-title">
                        Usuario: {{ Session::get('name').'  '.Session::get('lastName') }}
                    </div>
                </div>


            </div>
            <div class="col-xs-12 col-sm-6 col-md-6" >

                <div class="row" style="margin-top: 5px;">
                    <div class="col-md-3">
                        <label class="label-fechas">Fecha de Viaje</label>
                    </div>
                    <div class="col-md-2">
                        <label class="label-fechas">
                            <i class="icon-calendario"></i>
                            Inicio
                        </label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-fecha" id="datepicker_inicio">
                    </div>
                    <div class="col-md-3">
                        <label class="label-fechas">
                            <i class="icon-calendario"></i>
                            Fin
                        </label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-fecha" id="datepicker_fin">
                    </div>
                </div>

                <div class="row" style="margin-top: 5px;">
                    <div class="col-md-3">
                        <label class="label-fechas">Hora</label>
                    </div>
                    <div class="col-md-2">
                        <label class="label-fechas">
                            <i class="icon-reloj"></i>
                            Salida
                        </label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-fecha" >
                    </div>
                    <div class="col-md-3">
                        <label class="label-fechas">
                            <i class="icon-reloj"></i>
                            Regreso
                        </label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-fecha" >
                    </div>
                </div>

                <div class="row" style="margin-top: 5px;">
                    <div class="col-md-3">
                        <label class="label-fechas">Destino</label>
                    </div>
                    <div class="col-md-2">
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
                    <input type="text" id="project_id">
                    <span class="icon-mas">
                        <span class="path1"></span><span class="path2"></span>
                    </span>
                    <label class="label-fechas">
                        <i class="icon-subproyectos"></i>
                        Sub Proyecto
                    </label>
                    <input type="text" class="form-search search_subproject">
                    <input type="text" id="subproject_id">
                    <span class="icon-mas">
                        <span class="path1"></span><span class="path2"></span>
                    </span>
                    <label class="label-fechas">
                        <i class="icon-viaje"></i>
                        Viaje
                    </label>
                    <input type="text" class="form-search search_travel">
                    <input type="text" id="travel_id">
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
            <div class="col-sm-3 col-md-3">
                <div class="row">
                    Selecciona un tipo de viático: <label for="" class="prueba_label">!!!!!!!!!!!!!! Aqui esta laaa</label>
                </div>
                @foreach($dataLabel as $dat)
                        @if($dat->name == 'Hospedaje')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_hospedaje",['iden' => $dat->iden ]) }}")'>
                            <span  data-id="{{ $dat->iden }}" class="icon-hospedaje element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Alimentación')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_foot") }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-comida element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Transporte')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_taxi") }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-transporte_publico element-viatico">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Pago por kilometraje')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_mileage") }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-kilometraje element-viatico">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Renta de Transporte terrestre')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_transporte_terrestre") }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-transporte_terrestre element-viatico">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Renta de Autos')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_rent_car") }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-renta_autos element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Seminarios o Convenciones')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_conference") }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-seminarios element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                        </div>
                        @elseif($dat->name == 'Renta de Transporte aéreo')
                        <div class="col-md-5 col-sm-5 element-div" onclick='openIframe("{{ route("label_airplane") }}")'>
                            <span data-id="{{ $dat->iden }}" class="icon-transporte_aereo element-viatico">
                                <span class="path1"></span><span class="path2"></span>
                            </span>
                        </div>
                        @endif
                @endforeach
            </div>

            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="panel panel-default" style="background: transparent; border-color: #099C7F;">

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
                                    <tr>
                                        <td>
                                            <span class="icon-hospedaje element-list">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                            Hospedaje
                                        </td>
                                        <td> $ </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="icon-comida element-list">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                            Comida
                                        </td>
                                        <td> $ </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3" style="background-color: #999999; border-radius: 10px;">
                        <div class="col-1 in-line">
                            <span class="icon-cheques">
                            </span>
                            <span title-button>Cheques</span>
                        </div>
                        <div class="col-1 in-line">
                            <span class="icon-tarjeta">
                            </span>
                            <span title-button>Debito</span>
                        </div>
                        <div class="col-1 in-line">
                            <span class="icon-tarjeta">
                            </span>
                            <span title-button>Crédito</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
    <script>
        $(document).ready( function(){
            $('.element-viatico').unbind().bind('click',function(e){
                $dataId = $(this).attr('data-id');

                //alert('Este es el ID = '. $dataId);

            });

            $("#datepicker_inicio").datepicker();
            $("#datepicker_fin").datepicker();
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
            $textLabel = $('.prueba_label').text($form);
            console.log($textLabel);
        }
    </script>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

