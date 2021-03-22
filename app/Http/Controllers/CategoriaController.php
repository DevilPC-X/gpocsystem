<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Kreait\Firebase\Factory;
use Kreait\Firebase;
use App\Categoria;
use Alert;

class CategoriaController extends Controller
{    
    public function index()
    {
        $values = Categoria::all();
        return view('admin.categorias.index', compact('values'));
    }

    public function store(Request $request)
    {
        $nombre = Categoria::where('nombre', '=', $request->nombre);

        if($nombre = $request->nombre){
            Alert::warning('El dato ingresado ya existe', 'Advertencia');
        }else{
            Categoria::create([
                'nombre'=>$request->nombre
            ]);        
            Alert::success('Categoria '.$request->nombre.' Registrado', 'Exitoso');
        }
        return redirect()->route('categorias.index');
    }

    public function edit($id)
    {
        $value = Categoria::find($id);
        return view('admin.categorias.update', compact('value'));
    }

    public function update(Request $request, $id)
    {
        $idcategory = Categoria::find($id);
        $idcategory->update($request->all());
        Alert::success('Categoria Actualizado Correctamente', 'Actualizado');
        return redirect()->route('categorias.index');
    }

    public function destroy($id)
    {
        Categoria::find($id)->destroy($id);
        Alert::success('Categoria Eliminado Correctamente', 'Eliminado');
        return redirect()->route('categorias.index');
    }

    /*public function edit($id)
    {
        return $registro = $this.getConnection()->getReference('categorias')->getvalue($id);
    }

    public function getConnection()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/fir-486a0-firebase-adminsdk-fino8-dfd3765f85.json');
        $firebase = (new Factory)->withServiceAccount($serviceAccount)->withDatabaseUri('https://fir-486a0.firebaseio.com/')->create();
        $database = $firebase->getDatabase();
        return $database;
    }
    */
}
