<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listar Auditorias</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
</head>
<body>
	<br>
	<div class="container">
		<center><h1>Auditorias</h1></center>
		<center><h2>Sitel</h2></center>
		<center><a class="btn btn-success" href="{{url('data/menu')}}">MENU</a></center>
		@include('notificacion')
	</div>
		<table id="report" class="display nowrap" style="width: 800px;">
          	<thead>
	            <tr>
	              <th>Adp</th>
	              <th>Nombre</th>
	              <th>Campaña</th>
	              <th>Cuota de monitoreos</th>
	              <th>Monitoreos completados</th>
	              <th>Total faltante de monitoreos</th>
	              <th>Plan de acción (Monitoreos)</th>
	              <th>Cantidad de feedback</th>
	              <th>Porcentaje de feedback</th>
	              <th>Plan de acción (Feedback)</th>
	              <th>Cantidad de calibraciones</th>
	              <th>Resultados por coah</th>
	              <th>QA Form</th>
	              <th>Desviacion</th>
	              <th>Asistencia a la calibracion</th>
	              <th>minuta de calibracion</th>
	              <th>Plan de accion</th>
	              <th>Phon Time</th>
	            </tr>
          	</thead>
          	<tbody>
          		@foreach($auditorias as $audi)
          		<tr>
          			<td>{{$audi->adp}}</td>
          			<td>{{$audi->name}}</td>
          			<td>{{$audi->campaing}}</td>
          			<td>{{$audi->cuota_monitoreos}}</td>
          			<td>{{$audi->monitoreos_completados}}</td>
          			<td>{{$audi->resultado_monitoreos}}</td>
          			<td>{{$audi->Plan_monitoreos}}</td>
          			<td>{{$audi->cantidad_feedback}}</td>
          			<td>{{$audi->porcentaje_feedback}}%</td>
          			<td>{{$audi->plan_feedback}}</td>
          			<td>{{$audi->cantidad_calibraciones}}</td>
          			<td>{{$audi->resultadosxcoach}}</td>
          			<td>{{$audi->enviado_qa_form}}</td>
          			<td>{{$audi->desviacion}}</td>
          			<td>{{$audi->asistencia_calibracion}}</td>
          			<td>{{$audi->minuta_calibracion}}</td>
          			<td>{{$audi->plan_accion}}</td>
          			<td>{{$audi->phone_time}}</td>
          		</tr>
          		@endforeach
        	</tbody>
      	</table>
</body>
</html>
<script>
$(document).ready(function() {
    $('#report').DataTable( {	
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5'
        ],
        "scrollX" : true
    } );
} );
</script>
