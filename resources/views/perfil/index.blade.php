@extends('layout')

@section('contenido')
		
		<div class="container" style="margin-top: 50px">
			<div class="card">
				  <div class="card-header">
				    Perfíl de Usuario
				  </div>
				  <div class="card-body">
				  	<div class="row">
				  		<div class="col-sm-4">
				  			 <h5 class="card-title">Nombre</h5>
				    		 <p class="card-text">{{$user->name}}</p>
				  		</div>

				  		<div class="col-sm-4">
				  			 <h5 class="card-title">Usuario</h5>
				    		 <p class="card-text">{{$user->user_name}}</p>
				  		</div>

				  		<div class="col-sm-4">
				  			 <h5 class="card-title">Correo Electronico</h5>
				    		 <p class="card-text">{{$user->email}}</p>
				  		</div>
				  	</div>
				   <br>
				    <a href="{{route('perfil.edit', $user->id)}}" class="btn btn-warning btncuadrado">Editar</a>
				  </div>
				</div>
		</div>

@endsection