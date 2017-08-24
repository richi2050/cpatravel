@extends('layouts.app')
@section('content')
    <style>
        .elemento-eti{
            font-size: 130px;
        }
        .txt-re{
            border-radius: 8px;
            width: 110px;
        }
        .txt-re-col{
            border-radius: 8px;
            width: 110px;
        }
        .txt-icon{
            font-size: 14px;
            display: block;
        }
        .head-icon{
            font-size: 30px;
            text-align: center;
        }
        .td-center{
            text-align: center;
        }
        .select-na{
            margin-top: 25px;
        }
        .btn-save{
            background-color: #E97A70;
            color: white;
            margin-left: 20px;
        }
        .btn-cancelar{
            background-color: gray;
            color: white;
            margin-left: 20px;
        }
    </style>
<div class="container">
    <br><br>
    {{ Form::open(['id' => 'form']) }}
    <div class="row" style="margin-top: 10%">
        <input type="hidden" name="label_id" id="label_id" value="{{ $label->iden }}">
        <input type="text" name="monto_company_policies_id" id="monto_company_policies_id" value="{{ $label->foreign_company_policies }}">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <td rowspan="2">
                        <select name="type_nacional" id="select-type" class="form-control select-na" >
                            <option value="0">Nacional</option>
                            <option value="1">Extranjero</option>
                        </select>
                    </td>
                    <td>
                        Numero de Noches
                    </td>
                    <td>
                        <input type="text" name="numero_noches" id='numero_noches' class="txt-re-col form-control">
                    </td>
                    <td>
                        Costo unitario
                    </td>
                    <td>
                        <input type="text" name="costo_unitario" id="costo_unitario" class="txt-re-col form-control" placeholder="$">
                    </td>

                </tr>
                <tr>
                    <td>
                        Numero de Cuartos
                    </td>
                    <td>
                        <input type="text" name="numero_cuartos" id="numero_cuartos" class="txt-re-col form-control">
                    </td>
                    <td>
                        Costo total
                    </td>
                    <td>
                        <input type="text" name="costo_total" id="costo_total" class="txt-re-col form-control" placeholder="$">
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
       <div class="col-md-2">
           <span  class="icon-hospedaje elemento-eti">
               <span class="path1"></span><span class="path2"></span>
           </span>
       </div>

        <div class="col-md-8">
            <table class="table">
                <tr>
                    <td></td>
                    <td class="td-center">
                        <span class="icon-cheques head-icon">
                        </span>
                        <span class="txt-icon">Cheques</span>
                    </td>
                    <td class="td-center">
                        <span class="icon-tarjeta head-icon">
                        </span>
                        <span class="txt-icon">Débito</span>
                    </td>
                    <td class="td-center">
                        <span class="icon-tarjeta head-icon">
                        </span>
                        <span class="txt-icon">Crédito</span>
                    </td>
                    <td class="td-center">
                        <span class="icon-efectivo head-icon">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                        </span>
                        <span class="txt-icon">Efectivo</span>
                    </td>
                    <td class="td-center">
                        <span class="icon-tarjeta head-icon">
                        </span>
                        <span class="txt-icon">AMEX Corporativa</span>
                    </td>
                </tr>
                <tr id="tr_nacional">
                    <td>
                        Nacional
                        <input type="hidden" value="1" name="flag_txt_nacional" id="flag_txt_nacional">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="nacional_cheque" id="nacional_cheque" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="nacional_debito" id="nacional_debito" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="nacional_credito" id="nacional_credito" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="nacional_efectivo" id="nacional_efectivo" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="nacional_amex" id="nacional_amex" class="form-control txt-re">
                    </td>
                </tr>
                <tr class="hidden" id="tr_extranjero">
                    <td>
                        <input type="hidden" value="0" name="flag_txt_extrajero" id="flag_txt_extrajero">
                        Extranjero
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="extranjero_cheque" id="extranjero_cheque" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="extranjero_debito" id="extranjero_debito" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="extranjero_credito" id="extranjero_credito" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="extranjero_efectivo" id="extranjero_efectivo" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="extranjero_amex" id="extranjero_amex" class="form-control txt-re">
                    </td>
                </tr>
            </table>

        </div>

    </div><! --/row -->
    <div class="row">


            <div class="col-md-12">
                <input type='button'  onclick="blurStuff(0)"  value='Cancelar' class='save btn btn-sm btn-cancelar pull-right'>
                <input type='button'  value='Guardar' class='save btn btn-sm btn-save pull-right'>
            </div>


    </div>
    {{ Form::close() }}
</div>
<script>

    $(document).ready(function(){
        $('#select-type').unbind().bind('click',function (e) {
            $val = $(this).val();
            if($val == 1){
                $('#tr_nacional').addClass('hidden');
                $('#flag_txt_nacional').val(0);
                $('#tr_extranjero').removeClass('hidden');
                $('#flag_txt_extrajero').val(1);

            }else if($val == 0){
                $('#tr_extranjero').addClass('hidden');
                $('#flag_txt_extrajero').val(1);
                $('#tr_nacional').removeClass('hidden');
                $('#flag_txt_nacional').val(1);
            }
        });
        $('.btn-cancelar').unbind().bind('click',function(){
                window.parent.blurStuff(0);
        });


        $('#numero_cuartos').unbind().bind('blur',function(){
            $costoUnitario = $('#costo_unitario').val();
            $numeroCuartos = $(this).val();
            $numeroNoches = $('#numero_noches').val();
            if($numeroCuartos != '' && $costoUnitario != '' && $numeroNoches != ''){
                $precio = parseFloat($costoUnitario) * parseInt($numeroCuartos);
                $precioTotal = parseFloat($precio) * parseInt($numeroNoches);
                $('#costo_total').val(parseFloat($precioTotal));
            }
        });


        $('#costo_unitario').unbind().bind('blur',function(){
            $costoUnitario = $(this).val();
            $numeroCuartos = $('#numero_cuartos').val();
            $numeroNoches = $('#numero_noches').val();
            if($numeroCuartos != '' && $costoUnitario != '' && $numeroNoches != ''){
                $precio = parseFloat($costoUnitario) * parseInt($numeroCuartos);
                $precioTotal = parseFloat($precio) * parseInt($numeroNoches);
                $('#costo_total').val(parseFloat($precioTotal));
            }
        });

        $('#numero_noches').unbind().bind('blur',function(){
            $costoUnitario = $('#costo_unitario').val();
            $numeroCuartos = $('#numero_cuartos').val();
            $numeroNoches = $('#numero_noches').val();
            if($numeroCuartos != '' && $costoUnitario != '' && $numeroNoches != ''){
                $precio = parseFloat($costoUnitario) * parseInt($numeroCuartos);
                $precioTotal = parseFloat($precio) * parseInt($numeroNoches);
                $('#costo_total').val(parseFloat($precioTotal));
            }
        });

        $('.save').unbind().bind('click',function(){
            $form = $('#form');
            $flag_txt_nacional = $('#flag_txt_nacional').val();
            $nacional_cheque = $('#nacional_cheque').val();
            $nacional_debito = $('#nacional_debito').val();
            $nacional_credito = $('#nacional_credito').val();
            $nacional_efectivo = $('#nacional_efectivo').val();
            $nacional_amex = $('#nacional_amex').val();

            $flag_txt_extrajero = $('#flag_txt_extrajero').val();
            $extranjero_cheque = $('#extranjero_cheque').val();
            $extranjero_debito = $('#extranjero_debito').val();
            $extranjero_credito = $('#extranjero_credito').val();
            $extranjero_efectivo = $('#extranjero_efectivo').val();
            $extranjero_amex = $('#extranjero_amex').val();
            $submit=0;
            $flag=0;
            $valor = 0;
            if(parseInt($flag_txt_nacional) == 1 ){
                if($nacional_cheque != ''){
                    $flag = $flag + 1;
                    $valor = $nacional_cheque;
                }
                if($nacional_debito != ''){
                    $flag = $flag + 1;
                    $valor = $nacional_debito;
                }
                if($nacional_credito != ''){
                    $flag = $flag + 1;
                    $valor = $nacional_credito;
                }
                if($nacional_efectivo != ''){
                    $flag = $flag + 1;
                    $valor = $nacional_efectivo;
                }
                if($nacional_amex != ''){
                    $flag = $flag + 1;
                    $valor = $nacional_amex;
                }
                if($flag > 1){
                    $submit = 1;
                }
            }
            else if(parseInt($flag_txt_extrajero) == 1){
                if($extranjero_cheque != ''){
                    $flag = $flag + 1;
                    $valor = $extranjero_cheque;
                }
                if($extranjero_debito != ''){
                    $flag = $flag + 1;
                    $valor = $extranjero_debito;
                }
                if($extranjero_credito != ''){
                    $flag = $flag + 1;
                    $valor = $extranjero_credito;
                }
                if($extranjero_efectivo != ''){
                    $flag = $flag + 1;
                    $valor = $extranjero_efectivo;
                }
                if($extranjero_amex != ''){
                    $flag = $flag + 1;
                    $valor = $extranjero_amex;
                }

                if($flag > 1){
                    $submit = 1;
                }
            }



            if($submit == 0){
                if(parseFloat($valor) > parseFloat($('#monto_company_policies_id').val())){
                    alert('El monto solicitada supera al autorizado por la empresa');
                }else{
                    var data = getFormData($form);
                    window.parent.alimentacion(data);
                    window.parent.blurStuff(0);
                }
            }else{
                alert('De los coampos a solicitar solo debes de elejir uno !!!!!!');
            }
            return false;

        });




    });
</script>
@endsection