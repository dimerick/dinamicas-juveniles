@extends('template')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/leaflet.css')}}">
@stop

@section('content')
    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form role="form" action="/comuna5/grupo" method="post" class="registration-form">


            <fieldset>

                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Paso 2 / 4</h3>
                        <p>Datos del actor, grupo, institución u organización</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-group"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id_encargado" value="{{$id_encargado}}">
                    <div class="form-group">
                        <label class="" for="nombre">Nombre completo del actor, grupo, institución u organización al que representa (Por favor ingresar nombre completo):*</label>
                        <input type="text" name="nombre" placeholder="" class="form-first-name form-control" id="nombre" required>
                    </div>

                    <div class="form-group">
                        <label class="" for="nombre">Total de integrantes*</label>
                        <input type="number" min="0" value="0" name="num_integrantes" class="form-control" id="num_integrantes" required>
                    </div>

                    <div class="form-group">
                        <label for="id_comuna">Comuna o corregimiento donde desarrolla su acción*</label>
                        <select name="id_comuna" id="id_comuna" class="form-control" required>
                            <option value=""></option>
                            @foreach($comunas as $comuna)
                                <option value="{{$comuna->id}}">{{$comuna->id}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="" for="barrio">Barrio donde desarrolla su acción*</label>
                        <input type="text" name="barrio" placeholder="" class="form-first-name form-control" id="barrio" required>
                    </div>

                    <div class="form-group">
                        <label for="id_comuna">En cuáles de las siguientes líneas de trabajo actúa su grupo u organización:*</label>
                        <select name="lineas_trabajo[]" id="lineas_trabajo" class="form-control" multiple required>
                            @foreach($lineasTrabajo as $lineaTrabajo)
                                <option value="{{$lineaTrabajo->id}}">{{$lineaTrabajo->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" id="group-otra_linea_trabajo" style="display: none">
                        <label class="" for="otra_linea_trabajo">¿Cuál?</label>
                        <input type="text" name="otra_linea_trabajo" placeholder="" class="form-control" id="otra_linea_trabajo">
                    </div>


                    <div class="form-group">
                        <label for="id_tiempo_inicio">Tiempo de inicio o conformación como actor, grupo, institución u organización*</label>
                        <select name="id_tiempo_inicio" id="id_tiempo_inicio" class="form-control" required>
                            <option value=""></option>
                            @foreach($tiemposInicio as $tiempoInicio)
                                <option value="{{$tiempoInicio->id}}">{{$tiempoInicio->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="" for="telefono">Teléfono de contacto*</label>
                        <input type="tel" name="telefono" placeholder="" class="form-first-name form-control" id="telefono" required>
                    </div>

                    <div class="form-group">
                        <label class="" for="email">Correo electrónico*</label>
                        <input type="email" name="email" placeholder="" class="form-first-name form-control" id="email" required>
                    </div>

                    <div class="form-group">
                        <label class="" for="direccion">Dirección de lugar donde se encuentra*</label>
                        <input type="text" name="direccion" placeholder="" class="form-control" id="direccion" required>
                    </div>

                    <div class="form-group">
                        <label>Doble clic sobre el mapa para establecer tu ubicación geográfica* </label></br>
                        <i>Si su ubicación está disponible será detectada automáticamente</i>
                    <div id="register-map">

                    </div>
                    <input type="hidden" id="latitud" name="latitud" value="" required="required">
                    <input type="hidden" id="longitud" name="longitud" value="" required="required">
                    </div>

                    <div class="form-group">
                        <label class="" for="facebook">Facebook</label>
                        <input type="text" name="facebook" placeholder="" class="form-control" id="facebook">
                    </div>

                    <div class="form-group">
                        <label class="" for="twitter">Twitter</label>
                        <input type="text" name="twitter" placeholder="" class="form-control" id="twitter">
                    </div>

                    <div class="form-group">
                        <label class="" for="instagram">Instagram</label>
                        <input type="text" name="instagram" placeholder="" class="form-control" id="instagram">
                    </div>

                    <div class="form-group">
                        <label>Cantidad de personas del grupo, institución u organización que están en los siguientes rangos de edades*</label>
                            @foreach($rangosEdad as $rangoEdad)
                            <div class="form-group">
                                <label class="col-sm-8" for="re{{$rangoEdad->id}}">{{$rangoEdad->valor}}</label>
                                <div class="col-sm-4">
                                    <input type="number" min="0" value="0" name="re{{$rangoEdad->id}}" placeholder="" class="form-control" id="re{{$rangoEdad->id}}">
                                </div>
                            </div>
                            @endforeach
                    </div>

                    <br>

                    <div class="form-group">
                        <label>Cantidad de personas del grupo, organización o institución que se encuentra en los siguientes niveles educativos*</label>
                        @foreach($nivelesEduc as $nivelEduc)
                            <div class="form-group">
                                <label class="col-sm-8" for="ne{{$nivelEduc->id}}">{{$nivelEduc->valor}}</label>
                                <div class="col-sm-4">
                                    <input type="number" min="0" value="0" name="ne{{$nivelEduc->id}}" placeholder="" class="form-control" id="ne{{$nivelEduc->id}}">
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <label>Cantidad de personas del grupo, organización o institución que se encuentran en las siguientes categorías*</label>
                        @foreach($gruposPob as $grupoPob)
                            <div class="form-group">
                                <label class="col-sm-8" for="gp{{$grupoPob->id}}">{{$grupoPob->valor}}</label>
                                <div class="col-sm-4">
                                    <input type="number" min="0" value="0" name="gp{{$grupoPob->id}}" placeholder="" class="form-control" id="gp{{$grupoPob->id}}">
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <div class="form-group">
                        <label class="" for="frec_reuniones">¿Cada cuánto se reúnen?*</label>
                        <textarea name="frec_reuniones" class="form-control" id="frec_reuniones" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="" for="actividades">¿Qué actividades realizan?*</label>
                        <textarea name="actividades" class="form-control" id="actividades" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="" for="proyeccion">Proyección que tiene el grupo:</label>
                        <textarea name="proyeccion" class="form-control" id="proyeccion" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="condiciones_afinidad">¿Qué condiciones hace que haya mayor afinidad con personas, organizaciones o grupos*</label>
                        <select name="condiciones_afinidad[]" id="condiciones_afinidad" class="form-control" multiple required>
                            @foreach($condicionesAfinidad as $condicionAfinidad)
                                <option value="{{$condicionAfinidad->id}}">{{$condicionAfinidad->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" id="group-otra_condicion_afinidad" style="display: none">
                        <label class="" for="otra_condicion_afinidad">¿Cuál?</label>
                        <input type="text" name="otra_condicion_afinidad" placeholder="" class="form-control" id="otra_condicion_afinidad">
                    </div>

                    <div class="form-group">
                        <label for="condiciones_dificultad">¿Qué condiciones les dificultan las relaciones con otras personas, actores, organizaciones o grupos?*</label>
                        <select name="condiciones_dificultad[]" id="condiciones_dificultad" class="form-control" multiple required>
                            @foreach($condicionesDificultad as $condicionDificultad)
                                <option value="{{$condicionDificultad->id}}">{{$condicionDificultad->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" id="group-otra_condicion_dificultad" style="display: none">
                        <label class="" for="otra_condicion_dificultad">¿Cuál?</label>
                        <input type="text" name="otra_condicion_dificultad" placeholder="" class="form-control" id="otra_condicion_dificultad">
                    </div>

                    <div class="form-group">
                        <label class="" for="">¿Cuáles de los siguientes apoyos han recibido por parte de la secretaria de juventud?</label>
                       <div class="col-sm-3">
                           <label for="apoyo_financiero">Financiero </label> <input type="checkbox" name="apoyo_financiero" id="apoyo_financiero">
                       </div>
                        <div class="col-sm-5">
                            <label for="apoyo_tec_logi">Técnico/logístico</label> <input type="checkbox" name="apoyo_tec_logi" id="apoyo_tec_logi">
                        </div>
                        <div class="col-sm-4">
                            <label for="apoyo_humano">Humano </label> <input type="checkbox" name="apoyo_humano" id="apoyo_humano">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="id_comuna">¿Qué tipo de apoyos les gustaría recibir por parte de la Secretaría de la Juventud?*</label>
                        <select name="apoyos[]" id="apoyos" class="form-control" multiple required>
                            @foreach($apoyos as $apoyo)
                                <option value="{{$apoyo->id}}">{{$apoyo->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group" id="group-otro_apoyo" style="display: none">
                        <label class="" for="otro_apoyo">¿Cuál?</label>
                        <input type="text" name="otro_apoyo" placeholder="" class="form-control" id="otro_apoyo">
                    </div>


                    <button type="submit" class="btn btn-next">Siguiente</button>
                </div>
            </fieldset>



        </form>

    </div>
@stop
@section('scripts')
    <script src="{{asset('assets/js/leaflet.js')}}"></script>
    <script src="{{asset('assets/js/registerUser.js')}}"></script>
    <script>
        $("#lineas_trabajo").click(function () {
            var oculto = true;
            var values = $(this).val();
            console.log(values);
            for(i=0;i<values.length;i++){
                if(values[i] == 11){
                    oculto = false;
                }
            }
            if(oculto){
                $("#otra_linea_trabajo").removeAttr("required");
                $("#group-otra_linea_trabajo").css("display", "none");
            }else{
                $("#otra_linea_trabajo").attr("required", "required");
                $("#group-otra_linea_trabajo").css("display", "block");
            }
        });

        $("#apoyos").click(function () {
            var oculto = true;
            var values = $(this).val();
            console.log(values);
            for(i=0;i<values.length;i++){
                if(values[i] == 7){
                    oculto = false;
                }
            }
            if(oculto){
                $("#otro_apoyo").removeAttr("required");
                $("#group-otro_apoyo").css("display", "none");
            }else{
                $("#otro_apoyo").attr("required", "required");
                $("#group-otro_apoyo").css("display", "block");
            }
        });


        $("#condiciones_afinidad").click(function () {
            var oculto = true;
            var values = $(this).val();
            console.log(values);
            for(i=0;i<values.length;i++){
                if(values[i] == 6){
                    oculto = false;
                }
            }
            if(oculto){
                $("#otra_condicion_afinidad").removeAttr("required");
                $("#group-otra_condicion_afinidad").css("display", "none");
            }else{
                $("#otra_condicion_afinidad").attr("required", "required");
                $("#group-otra_condicion_afinidad").css("display", "block");
            }
        });

        $("#condiciones_dificultad").click(function () {
            var oculto = true;
            var values = $(this).val();
            console.log(values);
            for(i=0;i<values.length;i++){
                if(values[i] == 6){
                    oculto = false;
                }
            }
            if(oculto){
                $("#otra_condicion_dificultad").removeAttr("required");
                $("#group-otra_condicion_dificultad").css("display", "none");
            }else{
                $("#otra_condicion_dificultad").attr("required", "required");
                $("#group-otra_condicion_dificultad").css("display", "block");
            }
        });

    </script>
@stop