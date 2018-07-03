@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Footer</h1>
</div>
@if(session()->has('delete'))
<div class="alert alert-danger" role="alert">
{{session('delete')}}
</div>
@endif
<a href="{{route('footer.create')}}" class="btn btn-primary cuadrado">Crear Footer</a>
<hr>

<table  class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Red Social</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($footers as $footer)
    <tr>
      <td>{{$footer->id}}</td>
      <td>{{$footer->direccion}}</td>
      <td>

            <a href="{{route('footer.edit', $footer->id)}}" class="btn btn-warning btn-sm cuadrado">Editar</a>

            <form style="Display:inline;"  action="{{route('footer.destroy', $footer->id)}}" method="post" >
              {!!csrf_field()!!}
              {!!method_field('DELETE')!!}
              <button type="submit" class="btn btn-danger btn-sm cuadrado" onclick="return confirm('¿Estas seguro de borrar este enlace?')">Eliminar</button>
            </form>

      </td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection
