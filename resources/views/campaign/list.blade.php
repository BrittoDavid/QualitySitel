@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
      <div class="header">
        <h1><center>LIST CAMPAIGN</center></h1>
        <center>
          <a class="btn btn-primary" href="">Create Campaign</a>
        </center>
      </div>
      @include('alerts.notification')
      <div class="body table-responsive">
        <table id="campaña" class="table table-bordered table-striped table-hover dataTable js-exportable">
          <thead>
            <tr>
              <th>Campaign code</th>
              <th>Name</th>
              <th>Status Campaign</th>
              <th>Update</th>
              <th>Activate</th>
              <th>Disable</th>
            </tr>
          </thead>
          <tbody>
            @foreach($campaign as $campa)
            <tr>
              <td>{{$campa->id_campaing}}</td>
              <td>{{$campa->name_campaing}}</td>
              <td>{{$campa->status_campaing}}</td>
              <td><a class="btn btn-info" href="{{ url('campaña/editarCampa?campa='.$campa->id_campaing) }}">Update</a></td>
              <td><a class="btn btn-success" href="{{ url('campaña/cambiarestado?campa='.$campa->id_campaing.'&accion=Activa') }}">Active</a></td>
              <td><a class="btn btn-warning" href="{{ url('campaña/cambiarestado?campa='.$campa->id_campaing.'&accion=Desactiva') }}">Disabled</a></td>
            @endforeach
        </tbody>
      </table>
      
      </div>
    </div>
  </div>
</div>
@include('layouts.dash.footer')
<script type="text/javascript">
  $(document).ready(function() {
    tabladinamica("campaña");
  });
</script>  
