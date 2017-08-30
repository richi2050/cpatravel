<?php

namespace App\Http\Controllers;

use App\LodgingTag;
use Illuminate\Http\Request;
use Session;
use Log;

class LodgingTagController extends Controller
{
    public function create(Request $request){
        
        if(is_null($request->request_id)){
            $RequestId = Session::get('request_id');
        }else{
            $RequestId = $request->request_id;
        }
        $idenCom= sha1($RequestId.' '.date('h:i:s'));
        if($request->form['type_nacional'] == 0){
            LodgingTag::create([
                'request_id'        => $RequestId,
                'iden'              => $idenCom,
                'type_nationality'  => $request->form['type_nacional'],
                'number_nights'     => $request->form['numero_noches'],
                'unit_cost'         => $request->form['costo_unitario'],
                'number_rooms'      => $request->form['numero_cuartos'],
                'total_cost'        => $request->form['costo_total'],
                'naci_checks'       => $request->form['nacional_cheque'],
                'naci_debit'        => $request->form['nacional_debito'],
                'naci_credit'       => $request->form['nacional_credito'],
                'naci_cash'         => $request->form['nacional_efectivo'],
                'naci_amex'         => $request->form['nacional_amex']
                ]);

        }else if($request->form['type_nacional'] == 1){
            LodgingTag::create([
                'request_id'        => $RequestId,
                'iden'              => $idenCom,
                'type_nationality'  => $request->form['type_nacional'],
                'number_nights'     => $request->form['numero_noches'],
                'unit_cost'         => $request->form['costo_unitario'],
                'number_rooms'      => $request->form['numero_cuartos'],
                'total_cost'        => $request->form['costo_total'],
                'extra_checks'      => $request->form['extranjero_cheque'],
                'extra_debit'       => $request->form['extranjero_debito'],
                'extra_credit'      => $request->form['extranjero_credito'],
                'extra_cash'        => $request->form['extranjero_efectivo'],
                'extra_amex'        => $request->form['extranjero_amex']
                ]);
        }
    }

}
