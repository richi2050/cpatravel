<?php

namespace App\Http\Controllers;

use App\MileageTag;
use Session;
use Illuminate\Http\Request;

class MileageTagController extends Controller
{
    public function create(Request $request){
        if(is_null($request->request_id)){
            $RequestId = Session::get('request_id');
        }else{
            $RequestId = $request->request_id;
        }
        $idenCom = sha1($RequestId.' '.date('h:i:s'));
        dd($request->all());
        if($request->form['type_nacional'] == 0){
            MileageTag::create([
                'iden'              =>  $idenCom,
                'type_nationality'  =>  $RequestId,
                'number_days'       =>  $request->numero_dias,
                'authorized_amount' =>  $request->renta_por_dia,
                'total_amount'      =>  $request->presupuesto_renta,
                'naci_checks'       =>  $request->nacional_cheque,
                'naci_debit'        =>  $request->nacional_debito,
                'naci_credit'       =>  $request->nacional_credito,
                'naci_cash'         =>  $request->nacional_efectivo,
                'naci_amex'         =>  $request->nacional_amex
            ]);
        }elseif($request->form['type_nacional'] == 1){
            MileageTag::create([
                'iden'              =>  $idenCom,
                'type_nationality'  =>  $RequestId,
                'number_days'       =>  $request->numero_dias,
                'authorized_amount' =>  $request->renta_por_dia,
                'total_amount'      =>  $request->presupuesto_renta,
                'extra_checks'      =>  $request->extranjero_cheque,
                'extra_debit'       =>  $request->extranjero_debito,
                'extra_credi'       =>  $request->extranjero_credito,
                'extra_cash'        =>  $request->extranjero_efectivo,
                'extra_amex'        =>  $request->extranjero_amex
            ]);
        }
    }
}
