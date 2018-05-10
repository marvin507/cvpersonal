@extends('layout')

@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Experiencias</h1>
</div>
<a href="{{route('experiencias.create')}}" class="btn btn-primary">Nueva Experiencia</a><hr>
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
    <tr>
      <td>1</td>
      <td>Lorem</td>
      <td>Lorem lorem lorem lorem lorem</td>
      <td>12/2/2018 - 12/2/2019</td>
    </tr>
  </tbody>
</table>

@endsection
