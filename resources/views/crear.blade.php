<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="{{asset('js/porcentaje.js')}}"></script>
</head>
<body>

	<div class="container">
		<br>
		<center><h1>Crear Auditoria</h1><center>
		<center><a class="btn btn-success" href="{{url('data/menu')}}">MENU</a></center>
	</div>
	
	<div class="container">
		
		<form action="{{url('data/registrar')}}" method="post">

		  <input type="hidden" name="_token" value="{{ csrf_token() }}">

		  <div class="form-group">
		    <label for="exampleInputEmail1">numero de auditoria</label>
		    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$id}}" disabled/>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">ADP</label>
		    <input type="number" name="adp" class="form-control" id="exampleInputEmail1"  placeholder="ADP" required/>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Nombre del analista</label>
		    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Nombre" required/>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Campaña</label>
			    <select class="form-control" name="campaing" id="exampleFormControlSelect1" required/>
			      <option>Select</option>	
			      <option>Just Eat</option>
			      <option>ADP</option>
			      <option>Oportun</option>
			    </select>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Cuota Monitoreos</label>
		    <input type="number" id="cuota" name="cuota_monitoreos" class="form-control" id="exampleInputPassword1" placeholder="Cuota Monitoreos">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Monitoreos Completados</label>
		    <input type="number" id= "moni" name="monitoreos_completados" class="form-control" id="exampleInputPassword1" placeholder="Monitoreos Completados" onKeyPress="return onKeyPressBlockChars(event,this.value);" onKeyUp="calculaDiferencia(this.value,cuota.value)">
		  </div>
			
		 <div class="form-group">
		    <label for="exampleInputPassword1">Diferencia de monitoreos</label>
		    <input type="number" id="diferencia" class="form-control" id="exampleInputPassword1" placeholder="Diferencia" disabled/>
		    <small id="emailHelp"  class="form-text text-muted">Si la diferencia es mucha, colocar un plan de accion</small>
		  </div>
		  	
		  <div class="form-group">
		    <label for="exampleInputPassword1">Plan de Acción</label>
		    <input type="text"  name="Plan_monitoreos" class="form-control" id="exampleInputPassword1" placeholder="Plan de Acción">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Cantidad de Feedback</label>
		    <input type="number" name="cantidad_feedback" class="form-control" id="exampleInputPassword1" placeholder="Feedback" onKeyPress="return onKeyPressBlockChars(event,this.value);" onKeyUp="calculaPorcentajes(this.value,moni.value)">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Porcentaje Feedback</label>
		    <input type="number" id="porcentaje" class="form-control" id="exampleInputPassword1" placeholder="Feedback" disabled/>
		    <small id="emailHelp"  class="form-text text-muted">Es necesario tener un 90% si no por favor colocar un plan de accion</small>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Plan de acción</label>
		    <input type="text"  name="plan_feedback" class="form-control" id="exampleInputPassword1" placeholder="Plan de acción">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">¿Cuantas calibraciones se han hecho?</label>
		    <input type="number" name="cantidad_calibraciones" class="form-control" id="exampleInputPassword1" placeholder="¿Cuantas calibraciones se han hecho?">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Resultado X Coach</label>
		    <input type="text" name="resultadosxcoach" class="form-control" id="exampleInputPassword1" placeholder="Resultado X Coach">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">¿Se envio el Qa form a tiempo?</label>
		    <input type="text" name="enviado_qa_form" class="form-control" id="exampleInputPassword1" placeholder="¿Se envio el Qa form a tiempo?">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Desviación</label>
		    <input type="text" name="desviacion" class="form-control" id="exampleInputPassword1" placeholder="Desviación">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Numero de asistentes a la calibración</label>
		    <input type="text" name="asistencia_calibracion" class="form-control" id="exampleInputPassword1" >
		    <small id="emailHelp"  class="form-text text-muted">Calibración interna</small>
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Minuta de la calibración</label>
		    <input type="text" name="minuta_calibracion" class="form-control" id="exampleInputPassword1" placeholder="Minuta">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Si no se ha hecho la calibración ¿Cual es el plan de accion?</label>
		    <input type="text" name="plan_accion" class="form-control" id="exampleInputPassword1">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Phone time?</label>
		    <input type="text" name="phone_time" class="form-control" id="exampleInputPassword1" placeholder="Phone time">
		    <small id="emailHelp" class="form-text text-muted">El QA debe llevar a la fecha minimo 3 horas/ tal caso no lleve ninguna se pega 4 horas.</small>
		  </div>

		  <button type="submit" class="btn btn-primary">Registrar</button>
		</form>
	</div>

</body>
</html>