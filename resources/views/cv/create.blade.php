@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Subir tu CV</h1>
</div>
<form class="form-horizontal" method="post" action="{{route('cv.store')}}" enctype="multipart/form-data">
  {!!csrf_field()!!}
<fieldset>



<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="archivo"></label>
  <div class="col-md-4">
    <input name="archivo" class="input-file" type="file">
    {!!$errors->first('archivo', '<p>:message</p>')!!}
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary cuadrado">Guardar</button>
  </div>
</div>

</fieldset>
</form>

@endsection
