<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Persona as Persona;
use App\Genero as Genero;
use App\NivelEducativo as NivelEducativo;
use App\GrupoPoblacional as GrupoPoblacional;
use App\Comuna as Comuna;
use App\Grupo as Grupo;
use App\LineaTrabajo as LineaTrabajo;
use App\TiempoInicio as TiempoInicio;
use App\RangoEdad as RangoEdad;
use App\Apoyo as Apoyo;
use App\GrupoXRangoEdad as GrupoXRangoEdad;
use App\GrupoXLineaTrabajo as GrupoXLineaTrabajo;
use App\GrupoXApoyo as GrupoXApoyo;
use App\Barrio as Barrio;
use App\EstadoCivil as EstadoCivil;
use App\Estrato as Estrato;

class PersonaController extends Controller {

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
	public function create()
	{
//        dd("Bienvenido");
	    $generos = Genero::all();
        $nivelesEduc = NivelEducativo::all();
        $gruposPob = GrupoPoblacional::all();
        $comunas = Comuna::all();
        $barrios = Barrio::all();
        $estados_civiles = EstadoCivil::all();
        $estratos = Estrato::all();
        return view('registro_persona', compact('generos', 'nivelesEduc', 'gruposPob',
            'comunas', 'barrios', 'estados_civiles', 'estratos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
//        dd($request);
	    $persona = new Persona;
        $personaSaved = $persona->create($request->all());
        $id_encargado = $personaSaved->id;

        return redirect("/paso2/$id_encargado");
//        return redirect()->route('paso2', ['id_encargado' => $id_encargado]);
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
