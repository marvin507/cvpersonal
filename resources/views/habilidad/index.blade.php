@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Habilidades</h1>
</div>
<a href="{{route('habilidades.create')}}" class="btn btn-primary cuadrado">Añadir Habilidad</a>
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
      <th>Habilidad</th>
      <th>Porcentaje</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($skills as $skill)
        <tr>
          <td>{{$skill->id}}</td>
          <td>{{$skill->habilidad}}</td>
          <td>{{$skill->porcentaje}}</td>
          <td>
              <a href="{{route('habilidades.edit', $skill->id)}}" class="btn btn-warning cuadrado">Editar</a>

              <form style="Display: inline;" action="{{route('habilidades.destroy', $skill->id)}}" method="post">
                {!!csrf_field()!!}
                {!!method_field('DELETE')!!}
                <button type="submit" class="btn btn-danger cuadrado" onclick="return confirm('¿Estas seguro de eliminar esta habilidad?')">Eliminar</button>
              </form>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
