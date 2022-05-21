<?php

namespace App\Http\Controllers;

use App\Models\TypeCar;
use App\Models\User;
use Illuminate\Http\Request;

class TypeCarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TypeCar::all();
        return view('TypeCar.index', ['data_typecar'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TypeCar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typecar = new TypeCar();
        $typecar->fill($request->all());
        $typecar->save();

        return redirect()->route('typecar.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeCar $typecar)
    {
        return view('TypeCar.edit', ['data_typecar'=>$typecar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeCar $typecar)
    {
        $typecar->update($request->all());
        return redirect()->route('typecar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeCar $typecar)
    {
        $typecar->delete();
        return redirect()->route('typecar.index');
    }

//     public function income()
//     {

//     }

     public function user()
     {
         $user = User::all();
         return view('Etc.user', ['data_user'=>$user]);
     }
}
