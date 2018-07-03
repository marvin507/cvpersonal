@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Editar Habilidad</h1>
</div>
@if(session()->has('update'))

<div class="alert alert-success" role="alert">
{{session('update')}}
</div>

@endif
<form class="form-horizontal" method="post" action="{{route('habilidades.update', $skill->id)}}">
  {!!csrf_field()!!}
  {!!method_field('PUT')!!}
<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Habilidad">habilidad</label>
  <div class="col-md-5">
  <input id="Habilidad"
  name="habilidad"
  placeholder="ingresa tu habilidad"
  class="form-control input-md"
  required=""
  type="text"
  value="{{$skill->habilidad}}"
  autofocus>

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="porcentaje">porcentaje</label>
  <div class="col-md-4">
  <input id="porcentaje"
  name="porcentaje"
  placeholder=""
  class="form-control input-md"
  required=""
  type="text"
  value="{{$skill->porcentaje}}">
  <span class="help-block">porcentaje en número entero</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success cuadrado">Actualizar</button>
  </div>
</div>

</fieldset>
</form>

@endsection
