<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\MedioRelacion as MedioRelacion;
use App\PosibleRelacion as PosibleRelacion;

class PosibleRelacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($idGrupo)
	{
        $mediosRelacion = MedioRelacion::all();
        return view('registro_posible_relacion', compact('mediosRelacion', 'idGrupo'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
//		dd($request);
        $posibleRelacion = new PosibleRelacion;
        $posibleRelacion->id_grupo = $request->id_grupo;
        $posibleRelacion->nombre = $request->nombre;
        $posibleRelacion->proposito = $request->proposito;
        $posibleRelacion->id_medio = $request->id_medio;

        $posibleRelacionSaved = $posibleRelacion->save();
        if($posibleRelacionSaved){
            if($request->registrar_otra != null){
                return redirect()->back()->with('success', 'Se registro la relacion exitosamente');
            }
            return view('agradecimiento');
        }else{
            return redirect()->back()->with('error', 'Se produjo un error al registrar la relacion, intentelo nuevamente');
        }

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
