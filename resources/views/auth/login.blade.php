<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>
    <div class="login-clean">
        <form method="post" method="post" action="/login">
          {!!csrf_field()!!}
            <h2 class="sr-only">Inicio al sistema</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="user_name" placeholder="Nombre de Usuario" autofocus></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Iniciar</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>

      <script src="/js/app.js"></script>
  </body>
</html>
