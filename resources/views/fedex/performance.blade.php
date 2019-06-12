@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
      <div class="header">
        <h1><center>Quality Performance <br> {{date('F')}}</center></h1>
      </div>
      <div class="body table-responsive">
        <table id="performanceFedex" class="table table-bordered table-striped table-hover dataTable js-exportable col-lg-12">
          <thead>
            <tr>
              <th>Row Labels</th>
              <th>Count of Auditor</th>
              <th>Average of Score</th>
            </tr>
          </thead>
          <tbody>
            <tr style="background-color: rgba(58, 54, 52, 0.4); color: white">
              <th>COACH</th>
              <th>{{$data[0]}}</th>
              <th>{{$data[1]}}</th>
            </tr>
            <tr>
              <td>Jeferson Parada</td>
              <td>{{$data[2]}}</td>
              <td>{{$data[3]}}</td>
            </tr>
            <tr>
              <td>Jose Santiago Bayona</td>
              <td>{{$data[4]}}</td>
              <td>{{$data[5]}}</td>
            </tr>
            <tr>
              <td>Juan Sebastian Galvez Sierra</td>
              <td>{{$data[6]}}</td>
              <td>{{$data[7]}}</td>
            </tr>
            <tr>
              <td>Lizeth Ballesteros Vergara</td>
              <td>{{$data[8]}}</td>
              <td>{{$data[9]}}</td>
            </tr>
          </tbody>
          <thead>
            <tr style="background-color: rgba(58, 54, 52, 0.4); color: white">
              <th>QA</th>
              <th>{{$data[10]}}</th>
              <th>{{$data[11]}}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Andres David Castro</td>
              <td>{{$data[12]}}</td>
              <td>{{$data[13]}}</td>
            </tr>
            <tr>
              <td>Stephanie Escobar</td>
              <td>{{$data[14]}}</td>
              <td>{{$data[15]}}</td>
            </tr>
          </tbody>
          <tfoot>
            <tr style="background-color: rgba(58, 54, 52, 0.4); color: white">
              <th>Grand Total</th>
              <th>{{$data[16]}}</th>
              <th>{{$data[17]}}</th>
            </tr>
          </tfoot>
        </table>
      </div>

    </div>
  </div>
</div>
@include('layouts.dash.footer') 
<script >
$(document).ready(function() 
{ 
  
  function recargar()
  {
    location.reload();
  }

  setInterval('recargar()',20000);

});
</script>   