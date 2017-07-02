<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Relacion as Relacion;
use App\LugarRelacion as LugarRelacion;
use App\TiempoInicio as TiempoInicio;
use App\FrecuenciaRelacion as FrecuenciaRelacion;
use App\EstadoRelacion as EstadoRelacion;
use App\MedioRelacion as MedioRelacion;
use App\AspectoFomentoRelacion as AspectoFomentoRelacion;
use App\RelacionXAspectoFomentoRelacion as RelacionXAspectoFomentoRelacion;
use App\RelacionXLugarRelacion as RelacionXLugarRelacion;

use App\Grupo as Grupo;

class RelacionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($idGrupo){
        $lugaresRelacion = LugarRelacion::all();
        $tiemposInicio = TiempoInicio::all();
        $frecuenciasRelacion = FrecuenciaRelacion::all();
        $estadosRelacion = EstadoRelacion::all();
        $mediosRelacion = MedioRelacion::all();
        $aspectosFomentoRelacion = AspectoFomentoRelacion::all();

        return view('registro_relacion', compact('idGrupo', 'lugaresRelacion','tiemposInicio', 'frecuenciasRelacion', 'estadosRelacion',
            'mediosRelacion', 'aspectosFomentoRelacion', 'condicionesAfinidad', 'condicionesDificultad'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
//		dd($request);
        $relacion = new Relacion;
        $relacion->id_grupo = $request->id_grupo;
        $relacion->actor = $request->actor;
        $relacion->acciones = $request->acciones;
        $relacion->id_tiempo_relacion = $request->id_tiempo_relacion;
        $relacion->id_frecuencia_relacion = $request->id_frecuencia_relacion;
        $relacion->id_estado_relacion = $request->id_estado_relacion;
        $relacion->id_medio_relacion = $request->id_medio_relacion;



        $relacionSaved = $relacion->save();
        if($relacionSaved){
            $insertedId = $relacion->id;

            //lugares
            foreach ($request->lugares as $value){
                $relacionXLugarRelacion = new RelacionXLugarRelacion;
                $relacionXLugarRelacion->id_relacion = $insertedId;
                $relacionXLugarRelacion->id_lugar_relacion = $value;
                $relacionXLugarRelacion->save();
            }

            $grupo = Grupo::find($request->id_grupo);
            $grupo->otra_condicion_afinidad = $request->otra_condicion_afinidad;
            $grupo->otra_condicion_dificultad = $request->otra_condicion_dificultad;
            $grupo->save();

            //registro aspecto fomento relacion
            foreach ($request->aspectos_fomento_relacion as $value){
                $relacionXAspectoFomentoRelacion = new RelacionXAspectoFomentoRelacion;
                $relacionXAspectoFomentoRelacion->id_relacion = $insertedId;
                $relacionXAspectoFomentoRelacion->id_asp_fom_rel = $value;
                $relacionXAspectoFomentoRelacion->save();
            }


            if($request->registrar_otra != null){
                return redirect()->back()->with('success', 'Se registro la relacion exitosamente');
            }

            $idGrupo = $request->id_grupo;
            return redirect("/paso4/$idGrupo");

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
