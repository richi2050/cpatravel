@extends('layouts.app_clear')

@section('content')
    <style>
        .icon-tam {
            font-size: 25px;
        }
    </style>
    <div class="row" style="margin-top: 5%">
        <div class="col-md-12 col-sm-12 col-xs-6">
            <div class="about-item scrollpoint sp-effect2">

                <p style="text-align:center;">
                    Etiquetas
                </p>
            </div><! --/about-item -->
        </div><! --/col-md-3 -->
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-6">
            <div class="col-md-2">
                <div class="conten-img-2">
                    <img alt="User Pic" src="{{ Session::get('img') }}" class="img-circle img-responsive img-profile">
                </div>
            </div>
            <div class="col-md-8">
                <div class="conten-img-title-2">
                    Usuario: {{ Session::get('name').'  '.Session::get('lastName') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 2%">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-6">
                <div class="row ">
                    <div class="title-row">
                        <span class="icon-icon_prederminadoagregar icon-tam"></span>
                        Predeterminadas
                        <span class="icon-mas icon-tam">
                            <span class="path1"></span><span class="path2"></span>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <table class="table">
                        <thead class="table-head">
                            <th>
                                <td colspan="3"> Nombre</td>
                            </th>
                        </thead>
                        <tbody>
                            @foreach($dataLabel as $dat)
                                <tr>
                                    @if($dat->name == 'Alimentación')
                                        <td class="icon-30">
                                            <span class="icon-comida" data-id="{{ $dat->iden }}">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                        </td>
                                    @elseif($dat->name == 'Transporte')
                                        <td class="icon-30">
                                            <span class="icon-comida" data-id="{{ $dat->iden }}">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                        </td>
                                    @elseif($dat->name == 'Hospedaje')
                                        <td class="icon-30">
                                            <span class="icon-hospedaje">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                        </td>
                                    @elseif($dat->name == 'Renta de Autos')
                                        <td class="icon-30">
                                            <span class="icon-renta_autos">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                        </td>
                                    @elseif($dat->name == 'Seminarios o Convenciones')
                                        <td class="icon-30">
                                            <span class="icon-seminarios">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                        </td>
                                    @elseif($dat->name == 'Pago por kilometraje')
                                        <td class="icon-30">
                                            <span class="icon-kilometraje">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                            </span>
                                        </td>
                                    @elseif($dat->name == 'Renta de Transporte aéreo')
                                        <td class="icon-30">
                                            <span class="icon-transporte_aereo">
                                                <span class="path1"></span><span class="path2"></span>
                                            </span>
                                        </td>
                                    @elseif($dat->name == 'Renta de Transporte terrestre')
                                        <td class="icon-30">
                                            <span class="icon-transporte_terrestre ">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span>
                                            </span>
                                        </td>
                                    @endif
                                    <td class="text-tr">
                                            {{ $dat->name }}
                                    </td>
                                    <td>
                                        <span class="icon-icon_nota click_label" data-type="1" data-id="{{ $dat->iden }}" style="cursor: pointer; font-size: 20px;" data></span>
                                    </td>
                                    <td>
                                        <span class="icon-icon_cancelar click_label" data-type="1" data-id="{{ $dat->iden }}" style="cursor: pointer; font-size: 20px;">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.click_label').unbind().bind('click',function (e) {
                $id = $(this).attr('data-id');
                console.log($id);
            });
        });
    </script>



@endsection