<?php

namespace App\Http\Controllers;

use App\LandTag;
use Session;
use Illuminate\Http\Request;

class LandTagController extends Controller
{
    public function create(Request $request){
        if(is_null($request->request_id)){
            $RequestId = Session::get('request_id');
        }else{
            $RequestId = $request->request_id;
        }
        $idenCom = sha1($RequestId.' '.date('h:i:s'));
        if($request->form['type_nacional'] == 0){

            LandTag::create([
                'iden'              =>  $idenCom,
                'request_id'        =>  $RequestId,
                'type_nationality'  =>  $request->type_nacional,
                'place_origin'      =>  $request->ciudad_origen,
                'place_destination' =>  $request->ciudad_destino,
                'start_date'        =>  Tool::dateFormat($request->fecha_salida),
                'end_date'          =>  Tool::dateFormat($request->fecha_llegada),
                'naci_checks'       =>  $request->nacional_cheque,
                'naci_debit'        =>  $request->nacional_debito,
                'naci_credit'       =>  $request->nacional_credito,
                'naci_cash'         =>  $request->nacional_efectivo,
                'naci_amex'         =>  $request->nacional_amex
            ]);

        }elseif($request->form['type_nacional'] == 1){
            LandTag::create([
                'iden'              =>  $idenCom,
                'request_id'        =>  $RequestId,
                'type_nationality'  =>  $request->type_nacional,
                'place_origin'      =>  $request->ciudad_origen,
                'place_destination' =>  $request->ciudad_destino,
                'start_date'        =>  Tool::dateFormat($request->fecha_salida),
                'end_date'          =>  Tool::dateFormat($request->fecha_llegada),
                'extra_checks'      =>  $request->extranjero_cheque,
                'extra_debit'       =>  $request->extranjero_debito,
                'extra_credi'       =>  $request->extranjero_credito,
                'extra_cash'        =>  $request->extranjero_efectivo,
                'extra_amex'        =>  $request->extranjero_amex
            ]);

        }

    }
}
