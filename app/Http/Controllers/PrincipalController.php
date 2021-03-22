<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Insumo;
use App\Categoria;
use App\Actividad;
use Alert;

class PrincipalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {        
        $values = Insumo::orderBy('idproveedor', 'DESC')->filtrateByProject($request->idproyecto);
        $id_proyecto = $request->idproyecto;        
        return view('user.index', compact('values', 'id_proyecto'));
    }

    public function filtrateIndex(Request $request)
    {
        $idinsumo = $request->get('idinsumo');
        $idproyecto = $request->get('idproyecto');
        $idcategoria = $request->get('idcategoria');
        $idproveedor = $request->get('idproveedor'); 
        
        if($idcategoria == '' && $idproveedor == ''){
            $values = Insumo::orderBy('idproveedor', 'DESC')
                ->insumo($idinsumo)
                ->where('idproyecto', '=', $idproyecto);
        }else if($idcategoria == ''){
            $values = Insumo::orderBy('idproveedor', 'DESC')
                ->insumo($idinsumo)
                ->where('idproveedor', '=', $idproveedor)
                ->where('idproyecto', '=', $idproyecto);
        }else if($idproveedor == ''){
            $values = Insumo::orderBy('idproveedor', 'DESC')
                ->insumo($idinsumo)
                ->where('idcategoria', '=', $idcategoria)
                ->where('idproyecto', '=', $idproyecto);
        }else{
            $values = Insumo::orderBy('idproveedor', 'DESC')
            ->insumo($idinsumo)
            ->where('idcategoria', '=', $idcategoria)
            ->where('idproveedor', '=', $idproveedor)
            ->where('idproyecto', '=', $idproyecto);
        }

        $id_proyecto =  $request->idproyecto;
        return view('user.index', compact('values', 'id_proyecto'));        
    }

    public function nameProject()
    {        
        return view('user.name-project');
    }

    public function saveProject(Request $request)
    {
        \Session::forget('insumo');
        \Session::forget('idactividad');
        \Session::forget('idproyecto');        

        $actividad = new Actividad();
        $actividad->idproyecto = $request->idproyecto;
        $actividad->largo = $request->largo;
        $actividad->alto = $request->alto;
        $actividad->ancho = $request->ancho;
        $actividad->descripcion = $request->descripcion;
        $actividad->idusuario = Auth::user()->id;
        $actividad->tiempo = $request->tiempo1.' '.$request->tiempo2;
        $actividad->save();
        
        if($actividad->save()){
            if(!\Session::has('idactividad')) \Session::put('idactividad', $actividad->id);
            if(!\Session::has('idproyecto')) \Session::put('idproyecto', $actividad->idproyecto);
        }
        
        $values = Insumo::orderBy('id', 'ASC')->filtrateByProject($request->idproyecto);
        $id_proyecto = $request->idproyecto;        

        return view('user.index', compact('values', 'id_proyecto'));
    }
    
}
