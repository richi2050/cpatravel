<?php

namespace App\Http\Controllers;

use App\SubProject;
use Session;
use Illuminate\Http\Request;

class SubProjectExtendController extends Controller
{
    public function searchSubProject(Request $request){
        //dd($request->all());
        $data = SubProject::where("name","LIKE","%{$request->input('query')}%")
            ->where('business_id',Session::get('business_id'))
            ->where('project_id',$request->project_id)
            ->take(ENV('NUM_LIMIT'))->get();
        return response()->json($data);
    }
}
