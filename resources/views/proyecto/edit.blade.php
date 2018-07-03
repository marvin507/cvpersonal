@extends('layout')

@section('contenido')
<hr>
<form class="form-horizontal" method="post" action="{{route('proyectos.update', $proyecto->id)}}">
  {!!csrf_field()!!}
  {!!method_field('PUT')!!}
<fieldset>

<!-- Form Name -->
<legend>Editar Proyecto</legend>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="proyecto">Proyecto</label>
<div class="col-md-12">
<input value="{{$proyecto->proyecto}}" name="proyecto" placeholder="nombre del proyecto" class="form-control input-md" required="" type="text">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="descripcion">Descripción</label>
<div class="col-md-12">
<input value="{{$proyecto->descripcion}}" name="descripcion" placeholder="breve descripción del proyecto" class="form-control input-md" required="" type="text">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="titulo_enlace">Título de enlace</label>
<div class="col-md-12">
<input value="{{$proyecto->titulo_enlace}}" name="titulo_enlace" placeholder="enlace donde está almacenado tu proyecto " class="form-control input-md" type="text">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="enlace">Enlace</label>
<div class="col-md-12">
<input value="{{$proyecto->enlace}}" name="enlace" placeholder="dirección web donde se encuentra tu proyecto (host o repositorio)" class="form-control input-md" required="" type="text">
<span class="help-block">Utiliza la ruta completa http:// o https://</span>
</div>
</div>

<!-- Button -->
<div class="form-group">
<div class="col-md-4">
  <button type="submit" class="btn btn-success cuadrado">Actulizar</button>
</div>
</div>

</fieldset>
</form>

@endsection
