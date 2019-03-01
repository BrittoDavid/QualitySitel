@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
      <div class="header">
        <h1><center>LIST CAMPAIGN</center></h1>
        <center>
          <a class="btn btn-primary" href="{{ url('campaign/create')}}">Campaign create</a>
          <a class="btn btn-primary" href="{{ url('campaign/list?option='.$option)}}">Campaign {{$option}}</a>
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
              <th>Edit</th>
              @if($option == "active")
              <th>Activate</th>
              @else
              <th>Disable</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @foreach($campaign as $campa)
              <tr>
                <td>{{$campa->id_campaing}}</td>
                <td>{{$campa->name_campaing}}</td>
                <td>{{$campa->status_campaing}}</td>
                <td><a class="btn btn-info" href="{{ url('campaign/update?id='.$campa->id_campaing)}}"><span class="glyphicon glyphicon-wrench"></span></a></td>
                  @if($option == "active")
                    <td><a class="btn btn-success" href="{{url('campaign/changeStatus?id='.$campa->id_campaing.'&status=Active')}}"><span class="glyphicon glyphicon-ok-circle"></span></a></td>
                    @else
                    <td><a class="btn btn-warning" href="{{url('campaign/changeStatus?id='.$campa->id_campaing.'&status=Disabled')}}"><span class="glyphicon glyphicon-remove-circle"></span></a></td>
                  @endif
              </tr>
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
