<?php

namespace App\Http\Controllers;

use App\RentCarTag;
use Session;
use Illuminate\Http\Request;

class RentCarTagController extends Controller
{
    public function create(Request $request){
        if(is_null($request->request_id)){
            $RequestId = Session::get('request_id');
        }else{
            $RequestId = $request->request_id;
        }
        $idenCom = sha1($RequestId.' '.date('h:i:s'));
        if($request->form['type_nacional'] == 0){
            RentCarTag::create([
                'iden'              =>  $idenCom,
                'request_id'        =>  $RequestId,
                'type_nationality'  =>  $request->type_nacional,
                'number_days'       =>  $request->numero_dias,
                'authorized_amount' =>  $request->renta_por_dia,
                'total_rent'        =>  $request->presupuesto_renta,
                'naci_checks'       =>  $request->nacional_cheque,
                'naci_debit'        =>  $request->nacional_debito,
                'naci_credit'       =>  $request->nacional_credito,
                'naci_cash'         =>  $request->nacional_efectivo,
                'naci_amex'         =>  $request->nacional_amex
            ]);
        }elseif($request->form['type_nacional'] == 1){
            RentCarTag::create([
                'iden'              =>  $idenCom,
                'request_id'        =>  $RequestId,
                'type_nationality'  =>  $request->type_nacional,
                'number_days'       =>  $request->numero_dias,
                'authorized_amount' =>  $request->renta_por_dia,
                'total_rent'        =>  $request->presupuesto_renta,
                'extra_checks'      =>  $request->extranjero_cheque,
                'extra_debit'       =>  $request->extranjero_debito,
                'extra_credi'       =>  $request->extranjero_credito,
                'extra_cash'        =>  $request->extranjero_efectivo,
                'extra_amex'        =>  $request->extranjero_amex
            ]);
        }
    }
}
