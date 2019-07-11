<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pensamientos;

class PensamientosController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return Pensamientos::where('user_id',auth()->id())->get();
    }

    public function store(Request $request)
    {
        $pensamiento=new Pensamientos();
        $pensamiento->descripcion = $request->descripcion;
        $pensamiento->user_id = auth()->id();
        $pensamiento->save();

        return $pensamiento;

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pensamiento= Pensamientos::find($id);
        $pensamiento->descripcion=$request->descripcion;
        $pensamiento->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pensamiento = Pensamientos::find($id);
        $pensamiento->delete();
    }
}
