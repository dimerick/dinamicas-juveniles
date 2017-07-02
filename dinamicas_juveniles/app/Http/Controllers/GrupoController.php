<?php namespace App\Http\Controllers;

use App\GrupoXGrupoPoblacional;
use App\GrupoXNivelEducativo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Grupo as Grupo;
use App\Comuna as Comuna;
use App\LineaTrabajo as LineaTrabajo;
use App\TiempoInicio as TiempoInicio;
use App\RangoEdad as RangoEdad;
use App\NivelEducativo as NivelEducativo;
use App\GrupoPoblacional as GrupoPoblacional;
use App\Apoyo as Apoyo;
use App\GrupoXRangoEdad as GrupoXRangoEdad;
use App\GrupoXLineaTrabajo as GrupoXLineaTrabajo;
use App\GrupoXApoyo as GrupoXApoyo;
use App\Relacion as Relacion;
use App\LugarRelacion as LugarRelacion;
use App\FrecuenciaRelacion as FrecuenciaRelacion;
use App\EstadoRelacion as EstadoRelacion;
use App\MedioRelacion as MedioRelacion;
use App\AspectoFomentoRelacion as AspectoFomentoRelacion;
use App\CondicionAfinidad as CondicionAfinidad;
use App\CondicionDificultad as CondicionDificultad;
use App\RelacionXAspectoFomentoRelacion as RelacionXAspectoFomentoRelacion;
use App\GrupoXCondicionAfinidad as GrupoXCondicionAfinidad;
use App\GrupoXCondicionDificultad as GrupoXCondicionDificultad;



class GrupoController extends Controller {

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
	public function create($id_encargado){
        $nivelesEduc = NivelEducativo::all();
        $gruposPob = GrupoPoblacional::all();
        $comunas = Comuna::all();
        $tiemposInicio = TiempoInicio::all();
        $lineasTrabajo = LineaTrabajo::all();
        $rangosEdad = RangoEdad::all();
        $apoyos = Apoyo::all();
        $condicionesAfinidad = CondicionAfinidad::all();
        $condicionesDificultad = CondicionDificultad::all();
        return view('registro_grupo', compact('id_encargado', 'nivelesEduc','gruposPob', 'comunas', 'tiemposInicio',
            'lineasTrabajo', 'rangosEdad', 'gruposPob', 'apoyos', 'condicionesAfinidad', 'condicionesDificultad'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
//        dd($request);
        $grupo = new Grupo;
        $grupo->id_encargado = $request->id_encargado;
        $grupo->nombre = $request->nombre;
        $grupo->num_integrantes = $request->num_integrantes;
        $grupo->id_comuna = $request->id_comuna;
        $grupo->barrio = $request->barrio;
        $grupo->otra_linea_trabajo = $request->otra_linea_trabajo;
        $grupo->id_tiempo_inicio = $request->id_tiempo_inicio;
        $grupo->telefono = $request->telefono;
        $grupo->email = $request->email;
        $grupo->direccion = $request->direccion;
        $grupo->latitud = $request->latitud;
        $grupo->longitud = $request->longitud;
        $grupo->facebook = $request->facebook;
        $grupo->twitter = $request->twitter;
        $grupo->instagram = $request->instagram;
        $grupo->frec_reuniones = $request->frec_reuniones;
        $grupo->actividades = $request->actividades;
        $grupo->proyeccion = $request->proyeccion;
        $grupo->otra_condicion_afinidad = $request->otra_condicion_afinidad;
        $grupo->otra_condicion_dificultad = $request->otra_condicion_dificultad;
        if($request->apoyo_financiero != null){
            $grupo->apoyo_financiero = 1;
        }
        if($request->apoyo_tec_logi != null){
            $grupo->apoyo_tec_logi = 1;
        }
        if($request->apoyo_humano != null){
            $grupo->apoyo_humano = 1;
        }
        $grupo->otro_apoyo = $request->otro_apoyo;
        $grupoSaved = $grupo->save();

        //si se agrego el registro con exito
        if($grupoSaved){
            $insertedId = $grupo->id;

            //registro lineas de trabajo
            foreach ($request->lineas_trabajo as $value){
                $grupoXLineaTrabajo = new GrupoXLineaTrabajo;
                $grupoXLineaTrabajo->id_grupo = $insertedId;
                $grupoXLineaTrabajo->id_linea_trabajo = $value;
                $grupoXLineaTrabajo->save();
            }

            //registro condiciones afinidad
            foreach ($request->condiciones_afinidad as $value){
                $grupoXCondicionAfinidad = new GrupoXCondicionAfinidad;
                $grupoXCondicionAfinidad->id_grupo = $insertedId;
                $grupoXCondicionAfinidad->id_condicion_afinidad = $value;
                $grupoXCondicionAfinidad->save();
            }

            //registro condiciones dificultad
            foreach ($request->condiciones_dificultad as $value){
                $grupoXCondicionDificultad = new GrupoXCondicionDificultad;
                $grupoXCondicionDificultad->id_grupo = $insertedId;
                $grupoXCondicionDificultad->id_condicion_dificultad = $value;
                $grupoXCondicionDificultad->save();
            }

            //registro apoyos deseados
            foreach ($request->apoyos as $value){
                $grupoXApoyo = new GrupoXApoyo;
                $grupoXApoyo->id_grupo = $insertedId;
                $grupoXApoyo->id_apoyo = $value;
                $grupoXApoyo->save();
            }

            //guardo los rangos de edad por grupo
            $rangosEdad = RangoEdad::all();
            foreach($rangosEdad as $rangoEdad){
                $value = "re".$rangoEdad->id;
                $grupoXRangoEdad = new GrupoXRangoEdad;
                $grupoXRangoEdad->id_grupo = $insertedId;
                $grupoXRangoEdad->id_rango_edad = $rangoEdad->id;
                $grupoXRangoEdad->cantidad = $request->$value;
                $grupoXRangoEdad->save();
            }

            //guardo los niveles educativos por grupo
            $nivelesEduc = NivelEducativo::all();
            foreach($nivelesEduc as $nivelEduc){
                $value = "ne".$nivelEduc->id;
                $grupoXNivelEducativo = new GrupoXNivelEducativo();
                $grupoXNivelEducativo->id_grupo = $insertedId;
                $grupoXNivelEducativo->id_nivel_educ = $nivelEduc->id;
                $grupoXNivelEducativo->cantidad = $request->$value;
                $grupoXNivelEducativo->save();
            }

            //guardo los grupos poblacionales por grupo
            $gruposPob = GrupoPoblacional::all();
            foreach($gruposPob as $grupoPob){
                $value = "gp".$grupoPob->id;
                $grupoXGrupoPoblacional = new GrupoXGrupoPoblacional();
                $grupoXGrupoPoblacional->id_grupo = $insertedId;
                $grupoXGrupoPoblacional->id_grupo_pob = $grupoPob->id;
                $grupoXGrupoPoblacional->cantidad = $request->$value;
                $grupoXGrupoPoblacional->save();
            }

            $idGrupo = $insertedId;
            return redirect("/paso3/$idGrupo");

        }else{
            return redirect()->back()->with('error', 'Se produjo un error al registrar el grupo, intentelo nuevamente');
        }
//        dd($grupoSaved);
//        $insertedId = $grupoSaved->id;
//        dd("Se ha insertado el id", $insertedId);

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
