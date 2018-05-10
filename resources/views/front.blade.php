<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Mi Perfíl</title>
      <link rel="stylesheet" href="/css/app.css">
      <link rel="stylesheet" href="/css/front.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
   </head>
   <body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
         @if(!$dsc)
         @else
         <a class="navbar-brand" href="#">{{$dsc->name}}</a>
         @endif
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link inicio" href="#inicio">Acerca de mi</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link habilidad" href="#habilidad">Habilidades</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link experiencia" href="#experiencia">Experiencia</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="#">Educación</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="#">Proyectos</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="#">CV</a>
               </li>
            </ul>
         </div>
      </nav>
      <!-- navegacion -->
      <br><br>
      <section id="inicio">
         <!-- presentacion -->
         <div class="jumbotron">
            <div class="container">
               <img src="https://s3mn.mnimgs.com/img/shared/userimages/userimage_10951263.jpg" class="rounded mx-auto d-block img-profile rounded-circle" alt="">
               @if(!$dsc)
               @else
               <center>
                  <h1><strong>{{$dsc->name}}</strong></h1>
               </center>
               <center>
                  <h4>{{$dsc->address}}</h4>
               </center>
               <center>
                  <h4>{{$dsc->email}}</h4>
               </center>
               <center>
                  <p>{{$dsc->descripcion}}</p>
               </center>
               @endif
            </div>
         </div>
      </section>
      <section id="habilidad">
         <center>
            <strong>
               <h1><u>Habilidades</u></h1>
            </strong>
         </center>
         <div style="font-size:3em; color:black">
            <center><i class="fas fa-code"></i></center>
         </div>
         <br>
         <div class="row" v-for="item in habilidades">
            <div class="col-sm-3">
               <p class="text-right">@{{item.habilidad}}</p>
            </div>
            <div class="col-sm-6">
               <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" v-bind:style="'width: ' + item.porcentaje + ' !important'">@{{item.porcentaje}}</div>
               </div>
            </div>
         </div>
      </section>
      <section id="experiencia">
         <div class="jumbotron">
            <div class="heading">
               <h1 class="text-center">Work Experience</h1>
            </div>
            <div style="font-size:3em; color:black">
               <center><i class="far fa-id-badge"></i></center>
            </div>
            <br>
            
         </div>
      </section>
      <script src="/js/jquery.js"></script>
      <script src="/js/app.js"></script>
      <script src="/js/landingPages.js"></script>
      <script src="/js/vue.js"></script>
   </body>
</html>
