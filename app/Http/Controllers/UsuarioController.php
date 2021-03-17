<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $values = User::all();
        return view('admin.usuarios.index', compact('values'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'appaterno'=>$request->appaterno,
            'apmaterno'=>$request->apmaterno,
            'email'=>$request->email,
            'type'=>$request->type,
            'password'=>bcrypt($request->password)
        ]);

        Alert::success('Usuario Agregado Exitosamente', 'Agregado');
        return redirect()->route('usuarios.index');
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
    public function edit($id)
    {
        $value = User::find($id);
        return view('admin.usuarios.update', compact('value'));
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
        $idusuario = User::find($id);
        $idusuario->update($request->all());
        Alert::success('Usuario Actualizado Correctamente', 'Actualizado');
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->destroy($id);
        Alert::success('Usuario Eliminado Exitosamente', 'Eliminado');
        return redirect()->route('usuarios.index');
    }
}
