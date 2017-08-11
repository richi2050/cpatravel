<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use Session;

class TravelExtendController extends Controller
{
    public function searchTravel(Request $request){

        $data = Travel::where("name","LIKE","%{$request->input('query')}%")
            ->where('project_id',$request->project_id)
            ->where('sub_project_id',$request->subproject_id)
            ->where('business_id',Session::get('business_id'))
            ->orWhere("label","LIKE","%{$request->input('query')}%")
            ->take(ENV('NUM_LIMIT'))->get();
        return response()->json($data);
    }
}
