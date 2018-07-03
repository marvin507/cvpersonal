@extends('layout')

@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Educación</h1>
</div>
@if(session()->has('save'))

<div class="alert alert-success" role="alert">
    {{session('save')}}
</div>

@endif
<a href="{{route('educacion.create')}}" class="btn btn-primary cuadrado">Agregar Logros</a><hr>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Institución</th>
      <th>Título</th>
      <th>Estado</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($edu as $educacion)
    <tr>
      <td>{{$educacion->id}}</td>
      <td>{{$educacion->institucion}}</td>
      <td>{{$educacion->titulo}}</td>
      <td>{{$educacion->estado}}</td>
    <td>
        <a href="{{route('educacion.edit', $educacion->id)}}" class="btn btn-warning cuadrado">Editar</a>
        <form style="Display:inline;" action="{{route('educacion.destroy', $educacion->id)}}" method="post">
          {!!csrf_field()!!}
          {!!method_field('DELETE')!!}
          <button type="submit" class="btn btn-danger cuadrado">Eliminar</button>
        </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
