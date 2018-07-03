@extends('layout')

@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Cabezera</h1>
</div>
@if(session()->has('delete'))
<div class="alert alert-danger" role="alert">
{{session('delete')}}
</div>
@elseif(session()->has('save'))
<div class="alert alert-success" role="alert">
{{session('save')}}
</div>
@endif

@if(empty($descripcion))
<a href="{{route('descripcion.create')}}" class="btn btn-primary cuadrado">Añadir Cabezera</a>
@else

@endif

<hr>

<table  class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>

    </tr>
  </thead>
  <tbody>

@if(isset($descripcion))
      <tr>
          <td>{{$descripcion->id}}</td>
          <td>{{$descripcion->name}}</td>

          <td>
            <a href="{{route('descripcion.edit', $descripcion->id)}}" class="btn btn-warning cuadrado">Editar</a>
            <form style="display: inline" action="{{route('descripcion.destroy', $descripcion->id)}}" method="post">
              {!!csrf_field()!!}
              {!!method_field('DELETE')!!}
              <button type="submit" class="btn btn-danger cuadrado" onclick="return confirm('¿Estas seguro de eliminar esta descripcion?')">Eliminar</button>
            </form>
          </td>
      </tr>
@endif
  </tbody>
</table>
@endsection
