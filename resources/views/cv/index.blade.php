
@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tu hoja de vida</h1>
</div>

@if(empty($cv))
<a href="{{route('cv.create')}}" class="btn btn-primary">Subir CV</a>
@else

@endif


<table class="table">
  <thead>
    <tr>

      <th>archivo</th>
      <th>Fecha de Subida</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
@if(isset($cv))
      <tr>

        <td>{{$cv->archivo}}</td>
        <td>{{$cv->created_at}}</td>

        <td>
            <form  action="{{route('cv.destroy', $cv->id)}}" method="post">
              {!!csrf_field()!!}
              {!!method_field('DELETE')!!}
              <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>

        </td>
      </tr>
@endif
  </tbody>
</table>
@endsection
