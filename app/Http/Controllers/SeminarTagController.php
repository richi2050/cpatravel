<?php

namespace App\Http\Controllers;

use App\SeminarTag;
use Session;
use Illuminate\Http\Request;

class SeminarTagController extends Controller
{
    public function create(Request $request){
        if(is_null($request->request_id)){
            $RequestId = Session::get('request_id');
        }else{
            $RequestId = $request->request_id;
        }
        $idenCom = sha1($RequestId.' '.date('h:i:s'));
        if($request->form['type_nacional'] == 0){
            SeminarTag::create([
                'iden'              =>  $idenCom,
                'request_id'        =>  $RequestId,
                'type_nationality'  =>  $request->type_nacional,
                'name_event'        =>  $request->nombre_evento,
                'number_events'     =>  $request->numero_de_eventos,
                'authorized_amount' =>  $request->costo_por_evento,
                'total_amount'      =>  $request->total_costo,
                'naci_checks'       =>  $request->nacional_cheque,
                'naci_debit'        =>  $request->nacional_debito,
                'naci_credit'       =>  $request->nacional_credito,
                'naci_cash'         =>  $request->nacional_efectivo,
                'naci_amex'         =>  $request->nacional_amex
            ]);
        }elseif($request->form['type_nacional'] == 1){
            SeminarTag::create([
                'iden'              =>  $idenCom,
                'request_id'        =>  $RequestId,
                'type_nationality'  =>  $request->type_nacional,
                'name_event'        =>  $request->nombre_evento,
                'number_events'     =>  $request->numero_de_eventos,
                'authorized_amount' =>  $request->costo_por_evento,
                'total_amount'      =>  $request->total_costo,
                'extra_checks'      =>  $request->extranjero_cheque,
                'extra_debit'       =>  $request->extranjero_debito,
                'extra_credi'       =>  $request->extranjero_credito,
                'extra_cash'        =>  $request->extranjero_efectivo,
                'extra_amex'        =>  $request->extranjero_amex
            ]);
        }
    }
}
