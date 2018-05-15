@extends('layout')

@section('contenido')
<hr>
<form class="form-horizontal" method="post" action="{{route('proyectos.store')}}" enctype="multipart/form-data">
  {!!csrf_field()!!}
<fieldset>

<!-- Form Name -->
<legend>Nuevo Proyecto</legend>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="archivo">tamaño recomendado 286x180</label>
  <div class="col-md-4">
    <input id="archivo" name="archivo" class="input-file" type="file">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="proyecto">Proyecto</label>
<div class="col-md-12">
<input id="proyecto" name="proyecto" placeholder="nombre del proyecto" class="form-control input-md" required="" type="text">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="descripcion">Descripción</label>
<div class="col-md-12">
<input id="descripcion" name="descripcion" placeholder="breve descripción del proyecto" class="form-control input-md" required="" type="text">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="titulo_enlace">Título de enlace</label>
<div class="col-md-12">
<input id="titulo_enlace" name="titulo_enlace" placeholder="enlace donde está almacenado tu proyecto " class="form-control input-md" type="text">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="enlace">Enlace</label>
<div class="col-md-12">
<input id="enlace" name="enlace" placeholder="dirección web donde se encuentra tu proyecto (host o repositorio)" class="form-control input-md" required="" type="text">
<span class="help-block">Utiliza la ruta completa http:// o https://</span>
</div>
</div>

<!-- Button -->
<div class="form-group">
<div class="col-md-4">
  <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</div>

</fieldset>
</form>

@endsection
