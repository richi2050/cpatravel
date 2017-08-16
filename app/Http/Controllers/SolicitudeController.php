<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Label;

class SolicitudeController extends Controller
{
    public function lodging($iden){
        //dd($iden);
        $label = Label::find($iden);
        return view('solicitud.label_hospedaje',compact('label'));
    }

    public function foot(){
        return view('solicitud.label_comidas');
    }

    public function taxi(){
        return view('solicitud.label_taxi');
    }

    public function mileage(){
        return view('solicitud.label_kilometraje');
    }

    public function rentCar(){
        return view('solicitud.label_renta_carro');
    }

    public function groundTransportation(){
        return view('solicitud.label_transporte_terrestre');
    }

    public function conference(){
        return view('solicitud.label_seminarios');
    }

    public function airplane(){
        return view('solicitud.label_transporte_aereo');
    }







}
