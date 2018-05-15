@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Proyectos</h1>
</div>
<a href="{{route('proyectos.create')}}" class="btn btn-primary">Añadir Proyecto</a>
@if(session()->has('delete'))

<div class="alert alert-danger" role="alert">
  {{session('delete')}}
</div>

@endif
<hr>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Proyecto</th>
      <th>Descripcion</th>
      <th>Título de enlace</th>
      <th>Enlace</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($proyectos as $proyecto)

        <tr>
          <td>{{$proyecto->id}}</td>
          <td>{{$proyecto->proyecto}}</td>
          <td>{{$proyecto->descripcion}}</td>
          <td>{{$proyecto->titulo_enlace}}</td>
          <td>{{$proyecto->enlace}}</td>
          <td width="190px">
            <a href="{{route('proyectos.edit', $proyecto->id)}}" class="btn btn-warning btn-sm">Editar</a>
            <form style="Display:inline;"  action="{{route('proyectos.destroy', $proyecto->id)}}" method="post">
              {!!csrf_field()!!}
              {!!method_field('DELETE')!!}
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estas seguro de eliminar este proyecto?')">Eliminar</button>
            </form>
          </td>
        </tr>

    @endforeach
  </tbody>
</table>
@endsection
