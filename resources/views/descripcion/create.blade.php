@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Nueva Cabezera</h1>
</div>
<a href="{{route('descripcion.index')}}" class="btn btn-warning">Atrás</a>
@if(session()->has('save'))
<div class="alert alert-success" role="alert">
{{session('save')}}
</div>
@endif
<form class="form-horizontal" method="post" action="{{route('descripcion.store')}}" enctype="multipart/form-data">
  {!!csrf_field()!!}
<fieldset>

  <div class="form-group">
    <label class="col-md-4 control-label" for="archivo">Perfíl</label>
    <div class="col-md-4">
      <input id="archivo" name="archivo" class="input-file" type="file">
    </div>
  </div>
<div class="form-group">
    <label class="col-md-12 control-label" for="">Nombre</label>
    <div class="col-md-12">
      <input type="text" class="form-control" name="name" value="" placeholder="ingrese su nombre" autofocus>
    </div>
</div>
<div class="form-group">
    <label class="col-md-12 control-label" for="">Dirección</label>
    <div class="col-md-12">
      <input type="text" class="form-control" name="address" value="" placeholder="ingrese su dirección">
    </div>
</div>
<div class="form-group">
    <label class="col-md-12 control-label" for="">Email</label>
    <div class="col-md-12">
      <input type="email" class="form-control" name="email" value="" placeholder="ingrese su correo electrónico">
    </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-12 control-label" for="textarea">Descripción</label>
  <div class="col-md-12">
    <textarea class="form-control" id="textarea" name="descripcion" placeholder="breve descripción"></textarea><br><br>
    <button type="submit" class="btn btn-success">Guardar</button>
  </div>

</div>

</fieldset>


</form>

@endsection
