@extends('layout')

@section('contenido')
<hr>
<form class="form-horizontal" method="post" action="{{route('educacion.store')}}">
  {!!csrf_field()!!}
<fieldset>

<!-- Form Name -->
<legend>Agregar Logo</legend>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="institucion">Institucón</label>
<div class="col-md-12">
<input id="institucion" name="institucion" placeholder="Agregar Institución" class="form-control input-md" required="" type="text">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="titulo">Título</label>
<div class="col-md-12">
<input id="titulo" name="titulo" placeholder="agregar carrera" class="form-control input-md" required="" type="text">

</div>
</div>

<!-- Select Basic -->
<div class="form-group">
<label class="col-md-4 control-label" for="estado">Estado</label>
<div class="col-md-4">
<select id="estado" name="estado" class="form-control">
  <option value="En proceso">En proceso</option>
  <option value="culminado">Culminado</option>
</select>
</div>
</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label" for=""></label>
<div class="col-md-4">
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</div>

</fieldset>
</form>

@endsection
