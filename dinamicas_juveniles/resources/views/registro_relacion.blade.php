@extends('template')
@section('content')
    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form role="form" action="/comuna5/relacion" method="post" class="registration-form">


            <fieldset>

                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Paso 3 / 4</h3>
                        <p>A continuación, se indaga por su relación con los actores, instituciones u organizaciones con los que establecen mayor relación, para cada relación diligencie los siguientes campos:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-arrows"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id_grupo" value="{{$idGrupo}}">
                    <div class="form-group">
                        <label class="" for="actor">Actor social, grupo, institución u organización con el que establece mayor relación*</label>
                        <input type="text" name="actor" placeholder="" class="form-control" id="actor" required>
                    </div>

                    <div class="form-group">
                        <label class="" for="actividades">Mencione que acciones han realizado juntos (por ejemplo, construcción de conocimiento, incidencia política, garantía de derechos, entre otros)*</label>
                        <textarea name="acciones" class="form-control" id="acciones" required></textarea>
                    </div>

                    <div class="form-group">
                    <label for="lugares">¿En qué espacios han desarrollado estas acciones?*</label>
                    <select name="lugares[]" id="lugares" class="form-control" multiple required>
                    @foreach($lugaresRelacion as $lugarRelacion)
                    <option value="{{$lugarRelacion->id}}">{{$lugarRelacion->valor}}</option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                    <label for="id_tiempo_relacion">¿Desde cuándo se relacionan?*</label>
                    <select name="id_tiempo_relacion" id="id_tiempo_relacion" class="form-control" required>
                    <option value=""></option>
                    @foreach($tiemposInicio as $tiempoInicio)
                    <option value="{{$tiempoInicio->id}}">{{$tiempoInicio->valor}}</option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="id_frecuencia_relacion">¿Con que frecuencia se relacionan?*</label>
                        <select name="id_frecuencia_relacion" id="id_frecuencia_relacion" class="form-control" required>
                            <option value=""></option>
                            @foreach($frecuenciasRelacion as $frecuenciaRelacion)
                                <option value="{{$frecuenciaRelacion->id}}">{{$frecuenciaRelacion->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_estado_relacion">Mi relación con este actor es*</label>
                        <select name="id_estado_relacion" id="id_estado_relacion" class="form-control" required>
                            <option value=""></option>
                            @foreach($estadosRelacion as $estadoRelacion)
                                <option value="{{$estadoRelacion->id}}">{{$estadoRelacion->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_medio_relacion">¿A través de que medio me relaciono con esta organización?*</label>
                        <select name="id_medio_relacion" id="id_medio_relacion" class="form-control" required>
                            <option value=""></option>
                            @foreach($mediosRelacion as $medioRelacion)
                                <option value="{{$medioRelacion->id}}">{{$medioRelacion->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="aspectos_fomento_relacion">¿Cuáles de los siguientes aspectos consideran que han fomentado la relación con este actor?*</label>
                        <select name="aspectos_fomento_relacion[]" id="aspectos_fomento_relacion" class="form-control" multiple required>
                            @foreach($aspectosFomentoRelacion as $aspectoFomentoRelacion)
                                <option value="{{$aspectoFomentoRelacion->id}}">{{$aspectoFomentoRelacion->valor}}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="registrar_otra">Registrar otra</label> <input type="checkbox" name="registrar_otra" id="registrar_otra">
                    </div>

                    <button type="submit" class="btn btn-next">Siguiente</button>
                </div>
            </fieldset>


        </form>

    </div>
@stop
@section('scripts')
    
@stop