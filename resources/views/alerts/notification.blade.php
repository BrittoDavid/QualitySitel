@if(session('right'))
	<div class="alert alert-success alert-dismissable">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Notificacion!</strong> {{ session('right') }}
	</div>
@endif
@if(session('incorrect'))
	<div class="alert alert-danger alert-dismissable">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<strong>Notificacion!</strong> {{ session('incorrect') }}
	</div>
@endif