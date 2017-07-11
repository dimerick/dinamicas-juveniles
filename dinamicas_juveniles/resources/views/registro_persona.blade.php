@extends('template')
@section('content')
    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form role="form" action="/comuna5/persona" method="post" class="registration-form">


            <fieldset>

                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Paso 1 / 4</h3>
                        <p>Datos personales de quien diligencia el formulario:</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label class="" for="nombre">Nombre completo*</label>
                        <input type="text" name="nombre" placeholder="" class="form-first-name form-control" id="nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="fecha_nac">Fecha de nacimiento*</label>
                        <input type="date" name="fecha_nac" placeholder="AAAA-MM-DD" class="form-first-name form-control" id="fecha_nac" required>
                    </div>

                    <div class="form-group">
                        <label for="lugar_nacimiento">Lugar de nacimiento*</label>
                        <input type="text" name="lugar_nacimiento" placeholder="" class="form-first-name form-control" id="lugar_nacimiento" required>
                    </div>

                    <div class="form-group">
                        <label for="id_estado_civil">Estado Civil*</label>
                        <select name="id_estado_civil" id="id_estado_civil" class="form-control" required>
                            <option value=""></option>
                            @foreach($estados_civiles as $estado_civil)
                                <option value="{{$estado_civil->id}}">{{$estado_civil->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_genero">Género*</label>
                        <select name="id_genero" id="id_genero" class="form-control" required>
                            <option value=""></option>
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_nivel_educ">Máximo nivel educativo alcanzado*</label>
                        <select name="id_nivel_educ" id="id_nivel_educ" class="form-control" required>
                            <option value=""></option>
                            @foreach($nivelesEduc as $nivelEduc)
                                <option value="{{$nivelEduc->id}}">{{$nivelEduc->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="id_grupo_pob">¿A cuáles de las siguientes categorías pertenece?*</label>
                        <select name="id_grupo_pob" id="id_grupo_pob" class="form-control" required>
                            <option value=""></option>
                            @foreach($gruposPob as $grupoPob)
                                <option value="{{$grupoPob->id}}">{{$grupoPob->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="" for="email">Correo electrónico*</label>
                        <input type="email" name="email" placeholder="" class="form-first-name form-control" id="email" required>
                    </div>

                    <div class="form-group">
                        <label class="" for="telefono">Teléfono*</label>
                        <input type="tel" name="telefono" placeholder="" class="form-first-name form-control" id="telefono" required>
                    </div>

                    <div class="form-group">
                        <label for="id_comuna">Comuna o corregimiento donde vive*</label>
                        <select name="id_comuna" id="id_comuna" class="form-control" required>
                            <option value=""></option>
                            @foreach($comunas as $comuna)
                                <option value="{{$comuna->id}}">{{$comuna->id}}</option>
                            @endforeach
                        </select>
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<label class="" for="barrio"></label>--}}
                        {{--<input type="text" name="barrio" placeholder="" class="form-first-name form-control" id="barrio" required>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <label for="id_barrio">Barrio donde vive*</label>
                        <select name="id_barrio" id="id_barrio" class="form-control" required>
                            <option value=""></option>
                            @foreach($barrios as $barrio)
                                <option value="{{$barrio->id}}">{{$barrio->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="" for="direccion">Dirección*</label>
                        <input type="text" name="direccion" placeholder="" class="form-control" id="direccion" required>
                    </div>

                    <div class="form-group">
                        <label for="id_estrato">Estrato*</label>
                        <select name="id_estrato" id="id_estrato" class="form-control" required>
                            <option value=""></option>
                            @foreach($estratos as $estrato)
                                <option value="{{$estrato->id}}">{{$estrato->id}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="" for="rol">Rol en la institución, actor o grupo al que representa*</label>
                        <input type="text" name="rol" placeholder="" class="form-first-name form-control" id="rol" required>
                    </div>

                    {{--<div class="form-group">--}}
                    {{--<label class="sr-only" for="form-last-name">Last name</label>--}}
                    {{--<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                    {{--<label class="sr-only" for="form-about-yourself">About yourself</label>--}}
                    {{--<textarea name="form-about-yourself" placeholder="About yourself..."--}}
                    {{--class="form-about-yourself form-control" id="form-about-yourself"></textarea>--}}
                    {{--</div>--}}
                    <button type="submit" class="btn btn-next">Siguiente</button>
                </div>
            </fieldset>

            {{--<fieldset>--}}
            {{--<div class="form-top">--}}
            {{--<div class="form-top-left">--}}
            {{--<h3>Step 2 / 3</h3>--}}
            {{--<p>Set up your account:</p>--}}
            {{--</div>--}}
            {{--<div class="form-top-right">--}}
            {{--<i class="fa fa-key"></i>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-bottom">--}}
            {{--<div class="form-group">--}}
            {{--<label class="sr-only" for="form-email">Email</label>--}}
            {{--<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<label class="sr-only" for="form-password">Password</label>--}}
            {{--<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<label class="sr-only" for="form-repeat-password">Repeat password</label>--}}
            {{--<input type="password" name="form-repeat-password" placeholder="Repeat password..."--}}
            {{--class="form-repeat-password form-control" id="form-repeat-password">--}}
            {{--</div>--}}
            {{--<button type="button" class="btn btn-previous">Previous</button>--}}
            {{--<button type="button" class="btn btn-next">Next</button>--}}
            {{--</div>--}}
            {{--</fieldset>--}}

            {{--<fieldset>--}}
            {{--<div class="form-top">--}}
            {{--<div class="form-top-left">--}}
            {{--<h3>Step 3 / 3</h3>--}}
            {{--<p>Social media profiles:</p>--}}
            {{--</div>--}}
            {{--<div class="form-top-right">--}}
            {{--<i class="fa fa-twitter"></i>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-bottom">--}}
            {{--<div class="form-group">--}}
            {{--<label class="sr-only" for="form-facebook">Facebook</label>--}}
            {{--<input type="text" name="form-facebook" placeholder="Facebook..." class="form-facebook form-control" id="form-facebook">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<label class="sr-only" for="form-twitter">Twitter</label>--}}
            {{--<input type="text" name="form-twitter" placeholder="Twitter..." class="form-twitter form-control" id="form-twitter">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<label class="sr-only" for="form-google-plus">Google plus</label>--}}
            {{--<input type="text" name="form-google-plus" placeholder="Google plus..." class="form-google-plus form-control" id="form-google-plus">--}}
            {{--</div>--}}
            {{--<button type="button" class="btn btn-previous">Previous</button>--}}
            {{--<button type="submit" class="btn">Sign me up!</button>--}}
            {{--</div>--}}
            {{--</fieldset>--}}

        </form>

    </div>
@stop