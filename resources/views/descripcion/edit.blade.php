@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Editar Cabezera</h1>
</div>
<a href="{{route('descripcion.index')}}" class="btn btn-warning cuadrado">Atrás</a>
@if(session()->has('save'))
<div class="alert alert-success" role="alert">
{{session('save')}}
</div>
@endif
<form class="form-horizontal" method="post" action="{{route('descripcion.update', $desc->id)}}" enctype="multipart/form-data">
  {!!csrf_field()!!}
  {!!method_field('PUT')!!}
<fieldset>
  <br>
  <div class="form-group">
    <img width="150px" height="150px" src="{{Storage::url($desc->archivo)}}" alt="">
    <div class="col-md-4">
      <input name="archivo" class="input-file" type="file">
    </div>
  </div>
  <div class="form-group">
      <label class="col-md-12 control-label" for="">Nombre</label>
      <div class="col-md-12">
        <input type="text" class="form-control" name="name" value="{{$desc->name}}" placeholder="ingrese su nombre" autofocus>
        {!!$errors->first('name', '<span class=errors>:message</span>')!!}
      </div>
  </div>
  <div class="form-group">
      <label class="col-md-12 control-label" for="">Email</label>
      <div class="col-md-12">
        <input type="email" class="form-control" name="email" value="{{$desc->email}}" placeholder="ingrese su correo electrónico">

      </div>
  </div>
  <!-- Textarea -->
  <div class="form-group">
    <label class="col-md-12 control-label" for="textarea">Descripción</label>
    <div class="col-md-12">
      <textarea class="form-control" id="textarea" name="descripcion" placeholder="breve descripción">{{$desc->descripcion}}</textarea><br><br>
      <button type="submit" class="btn btn-success cuadrado">Actualizar</button>
    </div>

  </div>


</fieldset>


</form>

@endsection
