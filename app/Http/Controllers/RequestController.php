<?php

namespace App\Http\Controllers;

use App\Request as Solicitude;
use App\Tool;
use Session;
use Log;


use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create(Request $request){
        $requestCompuesto = $request->fecha_inicio.' '.$request->hora_salida.' '.date('h:i:s');
        $dataRequest = Solicitude::create([
                        'iden'                  =>  sha1($requestCompuesto),
                        'start_date'            =>  Tool::dateFormat($request->fecha_inicio),
                        'end_date'              =>  Tool::dateFormat($request->fecha_fin),
                        'departure_hour'        =>  $request->hora_salida,
                        'hour_return'           =>  $request->hora_final,
                        'initial_destination'   =>  $request->destino_inicial,
                        'final_destination'     =>  $request->destino_final,
                        'days'                  =>  $request->dias,
                        'project_id'            =>  $request->project_id,
                        'subproject_id'         =>  $request->subproject_id,
                        'travel_id'             =>  $request->travel_id,
                        'user_id'               =>  Session::get('user_id')
                    ]);
        $dataId = Solicitude::where('id',$dataRequest->iden)->first();
        $request->session()->flash('request_id', $dataId->iden);
        return ['success' => true, 'data' => $dataId];
    }

    public function pending(){
        return view('authorizations.pending');
    }
}
