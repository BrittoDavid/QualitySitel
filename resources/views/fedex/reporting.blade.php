<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporting Fedex</title>
	<link rel="shortcut icon" href="{{ asset('reporte.jpg') }}">
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
	</div>
	<br>
		<table id="report" class="display nowrap" style="width: 800px;">
          	<thead>
	            <th>ADP</th>
              <th>Rep Name</th>
              <th>Customer 2</th>
              <th>Coach</th>
              <th>Wave</th>
              <th>Auditor</th>
              <th>Stage</th>
              <th>Behavior AHT</th>
              <th>Outcome Behavior</th>
              <th>Call ID</th>
              <th>Date and time of call</th>
              <th>Audit Date</th>
              <th>Call Duration</th>
              <th>Reason of the call</th>
              <th>Subtopic</th>
              <th>Driver AHT</th>
              <th>Score</th>
              <th>Rating Points</th>
              <th>Created</th>
              <th>Updated</th>
              <th>1.1</th>
              <th>1.2</th>
              <th>1.3</th>
              <th>1.4</th>
              <th>1.5</th>
              <th>Process Compliance</th>
              <th>Eclipse</th>
              <th>2.1</th>
              <th>2.2</th>
              <th>2.3</th>
              <th>2.4</th>
              <th>Call Handling</th>
              <th>Efficiency</th>
              <th>3.1</th>
              <th>3.2</th>
              <th>3.3</th>
              <th>3.4</th>
              <th>4.1</th>
              <th>Comments1</th>
              <th>Comments2</th>
              <th>Comments3</th>
              <th>Comments4</th>
              <th>Comments5</th>
              <th>Comments6</th>
              <th>Comments7</th>
              <th>Comments8</th>
              <th>Comments9</th>
              <th>Comments10</th>
              <th>Comments11</th>
              <th>Comments12</th>
              <th>Comments13</th>
              <th>Comments14</th>
              <th>Comments15</th>
              <th>Comments16</th>
            </tr>
          </thead>
          <tbody>
            @foreach($rawdata as $raw)
              <tr>
                <td>{{$raw->adp}}</td>
                <td>{{$raw->name_agent}}</td>
                <td>{{$raw->customer}}</td>
                <td>{{$raw->coach_name}}</td>
                <td>{{$raw->wave}}</td>
                <td>{{$raw->name}}</td>
                <td>{{$raw->stage}}</td>
                <td>{{$raw->behavior_aht}}</td>
                <td>{{$raw->outcome_behavior}}</td>
                <td>{{$raw->call_id}}</td>
                <td>{{$raw->date_and_time}}</td>
                <td>{{$raw->audit_date}}</td>
                <td>{{$raw->call_duration}}</td>
                <td>{{$raw->reason_of_the_call}}</td>
                <td>{{$raw->subtopic}}</td>
                <td>{{$raw->driver_aht}}</td>
                <td>{{$raw->score}}</td>
                <td>{{$raw->rating}}</td>
                <td>{{$raw->created_at}}</td>
                <td>{{$raw->updated_at}}</td>
                <td>{{$raw->p1_1}}</td>
                <td>{{$raw->p1_2}}</td>
                <td>{{$raw->p1_3}}</td>
                <td>{{$raw->p1_4}}</td>
                <td>{{$raw->p1_5}}</td>
                <td>{{$raw->process_compliance}}</td>
                <td>{{$raw->eclipse}}</td>
                <td>{{$raw->p2_1}}</td>
                <td>{{$raw->p2_2}}</td>
                <td>{{$raw->p2_3}}</td>
                <td>{{$raw->p2_4}}</td>
                <td>{{$raw->call_handling}}</td>
                <td>{{$raw->efficiency}}</td>
                <td>{{$raw->p3_1}}</td>
                <td>{{$raw->p3_2}}</td>
                <td>{{$raw->p3_3}}</td>
                <td>{{$raw->p3_4}}</td>
                <td>{{$raw->p4_1}}</td>
                <td>{{$raw->com1_1}}</td>
                <td>{{$raw->com1_2}}</td>
                <td>{{$raw->com1_3}}</td>
                <td>{{$raw->com1_4}}</td>
                <td>{{$raw->com1_5}}</td>
                <td>{{$raw->comments6}}</td>
                <td>{{$raw->comments7}}</td>
                <td>{{$raw->com2_2}}</td>
                <td>{{$raw->com2_3}}</td>
                <td>{{$raw->com2_4}}</td>
                <td>{{$raw->comments12}}</td>
                <td>{{$raw->comments13}}</td>
                <td>{{$raw->com3_1}}</td>
                <td>{{$raw->com3_2}}</td>
                <td>{{$raw->com3_3}}</td>
                <td>{{$raw->com3_4}}</td>
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
                <th>Pts Obtenidos</th>