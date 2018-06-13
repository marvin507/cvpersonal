<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @if(!$dsc) @else {{$dsc->name}} @endif
    </title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

    <style>
        .derecha {
            margin-right: 5px;
        }

        .col-center {
            float: none;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container">
            @if(!$dsc)
            <a class="navbar-brand logo" href=""></a>
            @else
            <a class="navbar-brand logo" href="">{{$dsc->name}}</a> 
            @endif

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link inicio" href="#inicio">Acerca de</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link experiencia" href="#experiencia">Experiencias</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active educacion" href="#educacion">Educación</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link habilidad" href="#habilidad">Habilidades</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link proyecto" href="#proyecto">Proyectos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{Storage::url($cv->archivo)}}">Descargar CV</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page cv-page" id="main">
        <section class="portfolio-block block-intro border-bottom" id="inicio">
            <div class="container">
                @if(!$dsc)
                    
                @else
                <div class="avatar" style="background-image: url({{ Storage::url($dsc->archivo) }})"></div>
                <div class="about-me">
                    <p><strong>@{{descripcion.name}}</strong></p>
                    <p>@{{descripcion.descripcion}}</p>

                    <!-- <a class="btn btn-outline-primary" role="button" href="#">Hire me</a></div> -->
                </div>
            @endif

                
        </section>
        <div class="container-fluid">
            <section class="portfolio-block border-bottom cv" id="experiencia">

                <div class="work-experience group">
                    <div class="heading">
                        <h2 class="text-center">Experiencias Laborales</h2>
                    </div>
                    <div class="item" v-for="item in experiencias">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>@{{item.cargo}}</h3>
                                <h4 class="organization">@{{item.empresa}}</h4>
                            </div>
                            <div class="col-md-6"><span class="period">@{{item.fecha_inicio}} - @{{item.fecha_final}}</span></div>
                        </div>
                        <p class="text-muted">@{{item.descripcion}}</p>
                    </div>

                </div>
            </section>
            <section class="portfolio-block border-bottom cv" id="educacion">
                <div class="education group">
                    <div class="heading">
                        <h2 class="text-center">Educación</h2>
                    </div>
                    <div class="item" v-for="item in educacion">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>@{{item.titulo}}</h3>
                                <h4 class="organization">@{{item.institucion}}</h4>
                            </div>
                            <div class="col-6"><span class="period">09/2005 - 05/2010</span></div>
                        </div>
                        <p class="text-muted">@{{item.estado}}</p>
                    </div>
                </div>
            </section>
            <section class="portfolio-block border-bottom cv" id="habilidad">
                <div class="education group">
                    <div class="heading">
                        <h2 class="text-center">Habilidades</h2>
                    </div>
                    <div class="item" v-for="item in educacion">
                        <div class="mx-auto" style="width: 800px;">
                            <div class="row" v-for="item in habilidades">

                                <div class="col-md-12">
                                    <p> <strong>@{{item.habilidad}}</strong> </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" v-bind:style="'width:'+item.porcentaje">@{{item.porcentaje}}</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
            </section>
            <section class="portfolio-block cv" id="proyecto">
                <div class="hobbies group">
                    <div class="heading">
                        <h2 class="text-center">Proyectos</h2>

                        <div class="row">
@foreach($proyectos as $proyecto)
                            <div class="col-sm-* derecha col-center">

                                <div class="card" style="width: 16rem;">

                                    <img class="card-img-top" src="{{ Storage::url($proyecto->archivo) }}" alt="Card image cap">

                                    <div class="card-body">
                                        <h5 class="card-title">{{$proyecto->proyecto}}</h5>
                                        <p class="card-text">{{$proyecto->descripcion}}</p>
                                        <a href="{{url($proyecto->enlace)}}" target="_blank">{{$proyecto->titulo_enlace}}</a>

                                    </div>
                                </div>
                                <br>

                            </div>
@endforeach
                        </div>

                    </div>
            </section>

    </main>
    <footer class="page-footer" id="footers">
        <div class="container">
            <!-- <div class="links">
                <a href="#">About me</a>
                <a href="#">Contact me</a>
                <a href="#">Projects</a></div> -->

                <div class="social-icons">
                  @foreach($redes as $social)
                  <a href="{{url($social->direccion)}}" target="_blank"><i class="{{$social->red}}"></i></a>
                  @endforeach
                </div>




        </div>
    </footer>
    <script src="/js/jquery.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/landingPages.js"></script>
    <script src="/js/vue.js"></script>

</body>

</html>
