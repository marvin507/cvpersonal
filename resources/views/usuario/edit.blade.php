@extends('layout')

@section('contenido')

<div class="card" style="margin-top: 50px;">
<div class="card-header">
  Editar Usuario
</div>
<div class="card-body">
  <form class="form-horizontal" method="post" action="{{route('usuario.update', $user->id)}}">
    @csrf
    {!!method_field('PUT')!!}
  <fieldset>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Nombre:</label>
    <div class="col-md-4">
    <input  name="name" type="text" placeholder="nombre completo" class="form-control input-md" value="{{$user->name}}">
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Nombre de usuario:</label>
    <div class="col-md-4">
    <input name="user_name" type="text" placeholder="nombre de usuario" class="form-control input-md" value="{{$user->user_name}}">
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Correo</label>
    <div class="col-md-4">
    <input name="email" type="email" placeholder="correo electronico" class="form-control input-md" value="{{$user->email}}">
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="passwordinput">Contraseña</label>
    <div class="col-md-4">
      <input name="password" type="password" placeholder="contraseña" class="form-control input-md">
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="passwordinput">Confirmar Contraseña</label>
    <div class="col-md-4">
      <input name="password_confirmation" type="password" placeholder="confirma tu contraseña" class="form-control input-md">
      {!!$errors->first('confirmation_password', '<p>:messege</p>')!!}
    </div>
  </div>

  <!-- Button -->
  <div class="form-group">
    <div class="col-md-4">
      <button type="submit" class="btn btn-success cuadrado btn-sm">Actualizar</button>
    </div>
  </div>

  </fieldset>
  </form>

</div>
<div class="card-footer text-muted">

</div>
</div>

@endsection
