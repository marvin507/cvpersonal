@extends('layout')

@section('contenido')

<div class="card" style="margin-top: 50px;">
  @if (session('info'))
      <div class="alert alert-success">
          {{ session('info') }}
      </div>
  @endif
<div class="card-header">
  Perfíl de Usuario
</div>
<div class="card-body">
<div class="row">
  <div class="col">
    <p>Nombre: {{$user->name}}</p>
    <a href="{{route('usuario.edit', $user->id)}}" class="btn btn-warning cuadrado btn-sm">Editar</a>
  </div>
  <div class="col">
    <p>Nombre de Usuario: {{$user->user_name}}</p>
  </div>
  <div class="col">
    <p>Correo Electronico: {{$user->email}}</p>

  </div>
</div>
</div>
<div class="card-footer text-muted">

</div>
</div>

@endsection
