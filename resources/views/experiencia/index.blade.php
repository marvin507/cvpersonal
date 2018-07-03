@extends('layout')

@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Experiencias</h1>
</div>
@if(session()->has('save'))

<div class="alert alert-success" role="alert">
    {{session('save')}}
</div>

@endif
<a href="{{route('experiencias.create')}}" class="btn btn-primary cuadrado">Nueva Experiencia</a><hr>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Empresa</th>
      <th>Descripcion</th>
      <th>Tiempo de Labor</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($experiencias as $experiencia)
        <tr>
          <td>{{$experiencia->id}}</td>
          <td>{{$experiencia->empresa}}</td>
          <td>{{$experiencia->descripcion}}</td>
          <td>
              <p>del {{$experiencia->fecha_inicio}} al {{$experiencia->fecha_final}}</p>
          </td>
          <td width="190px">
              <a href="{{route('experiencias.edit', $experiencia->id)}}" class="btn btn-warning btn-sm cuadrado">Editar</a>
              <form style="Display: inline;" action="{{route('experiencias.destroy', $experiencia->id)}}" method="post">
                {!!csrf_field()!!}
                {!!method_field('DELETE')!!}
                <button type="submit" class="btn btn-danger btn-sm cuadrado" onclick="return confirm('¿Estas seguro de eliminar esta experiencia?')">Eliminar</button>
              </form>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection
