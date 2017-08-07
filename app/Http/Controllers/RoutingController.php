<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Label;

class RoutingController extends Controller
{

    public function businessProcess(){
        if(checkPermission('click_me_pro_negocios')){
            dd('aborte');
        }
        return view('menus.business_processes');
    }

    public function travelAuthorization(){
        if(checkPermission('click_me_aut_viaje')){
            dd('aborte');
        }
        return view('menus.travel_authorization');
    }

    public function solicitudTravel(){
        if(checkPermission('click_me_sol_gas_viaje')){
            dd('aborte');
        }
        $dataLabel = Label::all();
        return view('solicitud.solicitud_travel',compact('dataLabel'));
    }

    public function policies(){
        if(checkPermission('click_me_politicas')){
            dd('aborte');
        }
        return view('menus.policies');
    }

    public function registrationConciliation(){
        if(checkPermission('click_me_reg_conciliacion')){
            dd('aborte');
        }
        return view('menus.registration_conciliation');
    }


}
