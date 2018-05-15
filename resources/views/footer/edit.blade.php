@extends('layout')

@section('contenido')

<form class="form-horizontal" method="post" action="{{route('footer.update', $footer->id)}}">
  {!!csrf_field()!!}
  {!!method_field('PUT')!!}
<fieldset>

<!-- Form Name -->
<legend>Editar Footer</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Red Social</label>
  <div class="col-md-4">
    <select id="selectbasic" name="red" class="form-control">
      @if($footer->red === "fab fa-facebook-f")
      <option selected value="fab fa-facebook-f">Facebook</option>
      @elseif($footer->red === "fab fa-twitter")
      <option selected value="fab fa-twitter">Twitter</option>
      @elseif($footer->red === "fab fa-instagram")
      <option selected value="fab fa-instagram">Instagram</option>
        @elseif($footer->red === "fab fa-linkedin-in")
      <option selected value="fab fa-linkedin-in">Linkedin</option>
      @endif
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="direccion">Dirección</label>
  <div class="col-md-4">
  <input value="{{$footer->direccion}}" name="direccion" placeholder="dirección web" class="form-control input-md" required="" type="text">
  <span class="help-block">colocar dirección completa http:// o https://</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-success">Actualiza</button>
  </div>
</div>

</fieldset>
</form>

@endsection
