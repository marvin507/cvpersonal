@extends('layout')

@section('contenido')

<form class="form-horizontal" method="post" action="{{route('footer.store')}}">
  {!!csrf_field()!!}
<fieldset>

<!-- Form Name -->
<legend>Footer</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Red Social</label>
  <div class="col-md-4">
    <select id="selectbasic" name="red" class="form-control">
      <option value="fab fa-facebook-f">Facebook</option>
      <option value="fab fa-twitter">Twitter</option>
      <option value="fab fa-instagram">Instagram</option>
      <option value="fab fa-linkedin-in">Linkedin</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="direccion">Dirección</label>
  <div class="col-md-4">
  <input id="direccion" name="direccion" placeholder="dirección web" class="form-control input-md" required="" type="text">
  <span class="help-block">colocar dirección completa http:// o https://</span>
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
