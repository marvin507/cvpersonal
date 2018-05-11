@extends('layout')

@section('contenido')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Editar Experiencia</h1>
</div>
@if(session()->has('update'))
<div class="alert alert-success" role="alert">
  {{session('update')}}
</div>
@endif
<form class="form-horizontal" method="post" action="{{route('experiencias.update', $exp->id)}}">
  {!!csrf_field()!!}
  {!!method_field('PUT')!!}
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="empresa">Empreza</label>
  <div class="col-md-12">
  <input value="{{$exp->empresa}}" name="empresa" placeholder="nombre de la empresa" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Descripción</label>
  <div class="col-md-12">
  <input name="descripcion" value="{{$exp->descripcion}}" placeholder="breve descripción" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de inicio</label>
  <div class="col-md-2">
  <input name="fecha_inicio" value="{{$exp->fecha_inicio}}" class="form-control input-md" type="date">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Fecha de Retiro</label>
  <div class="col-md-2">
  <input name="fecha_final" value="{{$exp->fecha_final}}" class="form-control input-md" required="" type="date">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success">Actualizar</button>
  </div>
</div>

</fieldset>
</form>

@endsection
