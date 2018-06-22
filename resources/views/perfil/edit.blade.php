@extends('layout')

@section('contenido')
		

	<form method="POST" action="{{route('perfil.update', $user->id)}}"> 
		@csrf
		{!!method_field('PUT')!!}
			<div class="container" style="margin-top: 50px">
				<div class="card">
				  <div class="card-header">
				    Perfíl de Usuario
				  </div>
				  <div class="card-body">
				  	<div class="row">
				  		<div class="col-sm-4">
				  			 <h5 class="card-title">Nombre</h5>
				    		 <input type="text" name="name" class="form-control" value="{{$user->name}}"><br>
				    		 <h5 class="card-title">Contraseña</h5>
	<input type="password" name="password" class="form-control" placeholder="contraseña">
				    		 <span class="help-block">Si dejas la contraseña en blanco se conservará la actual</span><br>
				  		</div>

				  		<div class="col-sm-4">
				  			 <h5 class="card-title">Usuario</h5>
				    		 <input type="text" name="user_name" class="form-control" value="{{$user->user_name}}"><br>
				    		 <h5 class="card-title">Confirmar Contraseña</h5>
				    		 <input type="password" name="password_confirmation" class="form-control" placeholder="confirmar contraseña"">
				  		</div>

				  		<div class="col-sm-4">
				  			 <h5 class="card-title">Correo Electronico</h5>
				    		 <input type="email" name="email" class="form-control" value="{{$user->email}}">
				  		</div>
				  	</div>
				   <br>

				    <button type="submit" class="btn btn-success btncuadrado">Actualizar</button>
				  </div>
				</div>
			</div>
	</form>
		

@endsection