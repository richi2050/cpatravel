<!doctype html>
<html lang="en">
<head>
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Font Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- File CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!--Plugin Foggy-->

    <script type="text/javascript" src="{{ asset('js/jquery.foggy.min.js') }}"></script>

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
</head>
<body>

<div class="container">
    <br><br>

    <div class="row" style="margin-top: 10%">

        <div class="col-md-12">
            <table class="table">
                <tr>
                    <td rowspan="2">
                        <select name="" id="select-type" class="form-control select-na">
                            <option value="0">Nacional</option>
                            <option value="1">Extranjero</option>
                        </select>
                    </td>
                    <td>
                        Ciudad origen
                    </td>
                    <td>
                        <input type="text" class="txt-re-col form-control">
                    </td>
                    <td>
                        Fecha de salida
                    </td>
                    <td>
                        <input type="text" class="txt-re-col form-control" placeholder="$">
                    </td>
                    <td>
                        Presupuesto
                    </td>
                    <td>
                        <input type="text" class="txt-re-col form-control" placeholder="$">
                    </td>

                </tr>
                <tr>
                    <td>
                        Ciudad destino
                    </td>
                    <td>
                        <input type="text" class="txt-re-col form-control">
                    </td>
                    <td>
                        Fecha llegada
                    </td>
                    <td>
                        <input type="text" class="txt-re-col form-control" >
                    </td>
                    <td>
                        Icono de google
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
       <div class="col-md-2">
           <span class="icon-transporte_terrestre elemento-eti">
               <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span>
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
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="nacional_cheque" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="nacional_debito" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="nacional_credito" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="nacional_efectivo" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="nacional_amex" class="form-control txt-re">
                    </td>
                    <td>
                        <a href="#" class="cancelar" data-type="0">Cancelar</a>
                    </td>
                </tr>
                <tr class="hidden" id="tr_extranjero">
                    <td>
                        Extranjero
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="extranjero_cheque" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="extranjero_debito" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="extranjero_credito" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="extranjero_efectivo" class="form-control txt-re">
                    </td>
                    <td>
                        <input type="text" placeholder="$" name="extranjero_amex" class="form-control txt-re">
                    </td>
                    <td>
                        <a href="#" class="cancelar" data-type="1">Cancelar</a>
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
</div>
<script>

    $(document).ready(function(){
        $('#select-type').unbind().bind('click',function (e) {
            $val = $(this).val();
            if($val == 1){
                $('#tr_extranjero').removeClass('hidden');

            }else if($val == 0){
                $('#tr_nacional').removeClass('hidden');
            }
        });
        $('.btn-cancelar').unbind().bind('click',function(){
            alert('entra a este cancel ');
            $("#blur").foggy(false);
            $("#launcher").hide();
        });


    });
</script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>