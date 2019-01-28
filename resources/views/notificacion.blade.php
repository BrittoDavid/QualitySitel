@if(session('correcto'))
	<div class="alert alert-success alert-dismissable">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Notificacion!</strong> {{ session('correcto') }}
	</div>
@endif
@if(session('incorrecto'))
	<div class="alert alert-danger alert-dismissable">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Notificacion!</strong> {{ session('incorrecto') }}
	</div>
@endif