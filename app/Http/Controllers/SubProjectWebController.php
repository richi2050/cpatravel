<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\SubProject;
use App\Travel;
use Session;
use Validator;
use App\Http\Controllers\ServiciosController;


class SubProjectWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*
         * "id" => null
  "project_id" => "20"
  "nombre" => "ddddd"
  "descripcion" => "dddddddddddd"
  "activo" => "1"
         * */
        $data = [];
        $data += $request->all();
        $data['business_id'] = Session::get('business_id');
        $data['user_id'] = Session::get('user_id');

        $val =Validator::make($data,
            [
                'nombre'          => 'required|min:2|max:150|alpha_num_spaces|string_exist:sub_projects,name',
                'descripcion'   => 'required|min:2|max:150|alpha_num_spaces',
                'project_id'    => 'required|integer',
                'business_id'   => 'required',
                'user_id'       => 'required'
            ]);
        if($val->fails()){
            return  response()->json($val->errors());
        }

        SubProject::create([
            'name'          =>  $data['nombre'],
            'description'   =>  $data['descripcion'],
            'project_id'    =>  $data['project_id'],
            'business_id'   =>  $data['business_id'],
            'active'        =>  $data['activo'],
            'user_id'       =>  $data['user_id']
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subproject = SubProject::find($id);
        $dataUser = ServiciosController::getProfile($subproject->user_id);
        $array= [
            'subproject'    =>  $subproject,
            'project'       =>  $subproject->project,
            'user'          =>  $dataUser
        ];
        return response()->json($array);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
