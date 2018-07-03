@extends('layout')

@section('contenido')
<hr>
<form class="form-horizontal" method="post" action="{{route('educacion.update', $edu->id)}}">
  {!!csrf_field()!!}
  {!!method_field('PUT')!!}
<fieldset>

<!-- Form Name -->
<legend>Editar Logo</legend>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="institucion">Institucón</label>
<div class="col-md-12">
<input value="{{$edu->institucion}}" name="institucion" placeholder="Agregar Institución" class="form-control input-md" required="" type="text">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="titulo">Título</label>
<div class="col-md-12">
<input value="{{$edu->titulo}}" name="titulo" placeholder="agregar carrera" class="form-control input-md" required="" type="text">

</div>
</div>

<!-- Select Basic -->
<div class="form-group">
<label class="col-md-4 control-label" for="estado">Estado</label>
<div class="col-md-4">
<select id="estado" name="estado" class="form-control">
  @if($edu->estado === 'culminado')
  <option value="En proceso">En proceso</option>
  <option value="culminado" selected>Culminado</option>
  @else
  <option value="En proceso" selected>En proceso</option>
  <option value="culminado">Culminado</option>
  @endif

</select>
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
