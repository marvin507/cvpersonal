@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Nueva Cabezera</h1>
</div>
<a href="{{route('descripcion.index')}}" class="btn btn-warning btncuadrado">Atrás</a>
@if(session()->has('save'))
<div class="alert alert-success" role="alert">
{{session('save')}}
</div>
@endif
<div class="container m-4">
  <form class="form-horizontal" method="post" action="{{route('descripcion.store')}}" enctype="multipart/form-data">
  {!!csrf_field()!!}
<fieldset>

  <div class="form-group">
    <label class="col-md-4 control-label" for="archivo">Foto de Perfíl</label>
    <div class="col-md-4">
      <input name="archivo" class="input-file" type="file">
    </div>
  </div>
<div class="form-group">
    <label class="col-md-4 control-label" for="">Nombre</label>
    <div class="col-md-8">
      <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="ingrese su nombre" autofocus>
      {!!$errors->first('name', '<p class="text-danger">:message</p>')!!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="">Email</label>
    <div class="col-md-8">
      <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="ingrese su correo electrónico">
      {!!$errors->first('email', '<p class="text-danger">:message</p>')!!}
    </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Descripción</label>
  <div class="col-md-8">
    <textarea class="form-control" name="descripcion" placeholder="breve descripción">{{old('descripcion')}}
    </textarea>
    {!!$errors->first('descripcion', '<p class="text-danger">:message</p>')!!}
    <br><br>
    <button type="submit" class="btn btn-success btncuadrado">Guardar</button>
  </div>

</div>

</fieldset>


</form>

</div>
@endsection
