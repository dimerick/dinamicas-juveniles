<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CUESTIONARIO GRUPAL DE ACTORES, ESCENARIOS Y RELACIONES</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/form-elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/myStyle.css')}}">
    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

{{--<!-- Top menu -->--}}
{{--<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">--}}
    {{--<div class="container">--}}
        {{--<div class="navbar-header">--}}
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">--}}
                {{--<span class="sr-only">Toggle navigation</span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
                {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}
            {{--<a class="navbar-brand" href="index.html">Bootstrap Multi Step Registration Form Template</a>--}}
        {{--</div>--}}
        {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
        {{--<div class="collapse navbar-collapse" id="top-navbar-1">--}}
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li>--}}
							{{--<span class="li-text">--}}
								{{--Put some text or--}}
							{{--</span>--}}
                    {{--<a href="#"><strong>links</strong></a>--}}
                    {{--<span class="li-text">--}}
								{{--here, or some icons:--}}
							{{--</span>--}}
                    {{--<span class="li-social">--}}
								{{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
								{{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
								{{--<a href="#"><i class="fa fa-envelope"></i></a>--}}
								{{--<a href="#"><i class="fa fa-skype"></i></a>--}}
							{{--</span>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</nav>--}}

<!-- Top content -->

<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text">

                    <div class="info-top">


                        <h3 style="color: white"><strong>CUESTIONARIO GRUPAL DE ACTORES, ESCENARIOS Y RELACIONES</strong></h3>


                    <div class="description">
                        <p>
                            La información que usted ingrese en esta encuesta es totalmente confidencial y será utilizada exclusivamente para realizar un
                            reconocimiento de los actores, escenarios y relaciones de los actores, grupos, organizaciones e instituciones que trabajan o tienen
                            algún vínculo con los jóvenes de la ciudad. La Secretaría de la Juventud de la Alcaldía de Medellín agradece enormemente su
                            colaboración.
                        </p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="message">
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @elseif(Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                </div>
                @yield('content')
            </div>
        </div>
    </div>

</div>


<!-- Javascript -->
<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('assets/js/retina-1.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
@yield('scripts')
<!--[if lt IE 10]>
<!--<script src="{{asset('assets/js/placeholder.js')}}"></script>-->
{{--<![endif]-->--}}

</body>

</html>