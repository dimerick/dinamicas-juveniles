@extends('template')
@section('content')
    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form role="form" action="/comuna5/posible-relacion" method="post" class="registration-form">


            <fieldset>

                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Paso 4 / 4</h3>
                        <p>¿Con que personas, organizaciones, procesos, grupos o instituciones de tu comuna o de la ciudad les gustaría relacionarse? Y ¿Cuál sería el propósito de esta relación?</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-arrows"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id_grupo" value="{{$idGrupo}}">
                    <div class="form-group">
                        <label class="" for="nombre">Nombre de la persona, organización, proceso, grupo o institución*</label>
                        <input type="text" name="nombre" placeholder="" class="form-control" id="nombre" required>
                    </div>

                    <div class="form-group">
                        <label class="" for="proposito">Propósito de la relación*</label>
                        <textarea name="proposito" class="form-control" id="proposito" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="id_medio">Preferiblemente se relacionarían con este actor, grupo, institución u organización a través de*</label>
                        <select name="id_medio" id="id_medio" class="form-control" required>
                            <option value=""></option>
                            @foreach($mediosRelacion as $medioRelacion)
                                <option value="{{$medioRelacion->id}}">{{$medioRelacion->valor}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="registrar_otra">Registrar otra</label> <input type="checkbox" name="registrar_otra" id="registrar_otra">
                    </div>

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