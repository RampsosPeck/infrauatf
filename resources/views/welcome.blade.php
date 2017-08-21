<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wellcome the George Peralta">
    <meta name="author" content="George Peralta">
    
    
    <link rel="shortcut icon" href="{!! URL::to('/img/favicon2.png') !!}" />
    <title>U.A.T.F. Infraestructura</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('css/wellcome/bootstrap.min.css') !!}
    {!! Html::style('css/wellcome/agency.min.css') !!}
    <!-- Custom Fonts -->
    {!! Html::style('css/wellcome/font-awesome.min.css') !!}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>-->
                <a class="navbar-brand page-scroll" href="#page-top"><strong>Universidad Autónoma "Tomás Frías"</strong></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling --> 
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#contact"><strong>U.A.T.F.</strong></a>
                    </li>-->
                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Website!</div>
                <div class="intro-heading">Depto. Infraestructura</div>
                @if (Route::has('login'))
                    
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}" class="page-scroll btn btn-xl" title="En esta sección podra reservar los viajes de práctica, realizar informes, solicitudes de trabajo para el Mecánico y mucho más...">Automotores</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{ url('/register') }}" class="page-scroll btn btn-xl" title="En esta sección podra realizar las solicitudes de trabajo para distintas areas del Depto. de Infraestructura">Serv. Generales</a>
                        @endif
                    
                @endif
                
            </div>
        </div>
    </header>

    <!-- jQuery -->
    {!! Html::script('js/wellcome/jquery.min.js') !!}

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('js/wellcome/bootstrap.min.js') !!}

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    {!! Html::script('js/wellcome/jqBootstrapValidation.js') !!}
    {!! Html::script('js/wellcome/contact_me.js') !!}

    <!-- Theme JavaScript -->
    {!! Html::script('js/wellcome/agency.min.js') !!}
</body>

</html>










<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            .m-b-md {
                margin-bottom: 30px;
            }
            .foo{
                 height: 60px;
                 background-color: rgba(0, 52, 102, 0.8);
                 color: white;

            }
        </style>
    </head>
    <body id="page-top" >
        <div  class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    U. A. T. F.
                    <img class="img-circle" width="150" src="{!! URL::to('/img/uatf.jpg') !!}">
                </div>

                <div class="links">
                    <a href="http://uatf.edu.bo" target="target_blank">www.uatf.edu.bo</a>
                    <a href="https://www.facebook.com/universidadtomasfrias/" target="target_blank">Facebook</a>
                    <a href="https://www.facebook.com/jorge.peralta.3576224" target="target_blank">
Website administrator</a>
                </div>
            </div>
        </div>
        <footer class="text-center foo">
            <p><strong>&copy; UATF - 2017 </strong></p>
        </footer>
    </body>
</html>
