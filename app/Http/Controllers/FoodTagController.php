<?php

namespace App\Http\Controllers;

use App\FoodTag;
use Illuminate\Http\Request;

class FoodTagController extends Controller
{
    public function create(Request $request){
        if(is_null($request->request_id)){
            $RequestId = Session::get('request_id');
        }else{
            $RequestId = $request->request_id;
        }
        $idenCom = sha1($RequestId.' '.$request->presupuesto_diario.' '.$request->total_prespuesto.' '.date('h:i:s'));
        if($request->form['type_nacional'] == 0){
            FoodTag::create([
                'request_id'        => Session::get('request_id'),
                'iden'              => $idenCom,
                'type_nationality'  => $request->form['type_nacional'],
                'number_foods'      => $request->form['numero_comidas'],
                'daily_budget'      => $request->form['presupuesto_diario'],
                'total_budget'      => $request->form['total_prespuesto'],
                'naci_checks'       => $request->form['nacional_cheque'],
                'naci_debit'        => $request->form['nacional_debito'],
                'naci_credit'       => $request->form['nacional_credito'],
                'naci_cash'         => $request->form['nacional_efectivo'],
                'naci_amex'         => $request->form['nacional_amex']
            ]);

        }else if($request->form['type_nacional'] == 1){
            FoodTag::create([
                'request_id'        => Session::get('request_id'),
                'iden'              => $idenCom,
                'type_nationality'  => $request->form['type_nacional'],
                'number_foods'      => $request->form['numero_comidas'],
                'daily_budget'      => $request->form['presupuesto_diario'],
                'total_budget'      => $request->form['total_prespuesto'],
                'extra_checks'      => $request->form['extranjero_cheque'],
                'extra_debit'       => $request->form['extranjero_debito'],
                'extra_credit'      => $request->form['extranjero_credito'],
                'extra_cash'        => $request->form['extranjero_efectivo'],
                'extra_amex'        => $request->form['extranjero_amex']
            ]);
        }
    }
}
