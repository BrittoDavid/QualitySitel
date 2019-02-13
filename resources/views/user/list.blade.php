@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
      <div class="header">
        <h1><center>LIST USERS</center></h1>
        <center><a class="btn btn-info" href="{{url('user/list?option='.$option)}}">Users {{$option}}</a></center>
      </div>
      @include('alerts.notification')
      <div class="body table-responsive">
        <table id="users" class="table table-bordered table-striped table-hover dataTable js-exportable col-lg-12">
          <thead>
            <tr>
              <th>Id Users</th>
              <th>Name</th>
              <th>Adp</th>
              <th>Nt/login</th>
              <th>Email</th>
              <th>Rol</th>
              <th>Position</th>
              <th>Status</th>
              <th>Campaing</th>
              @if(Auth::user()->rol == "developer" or Auth::user()->rol == "administator")
              <th>Edit</th>
              <th>Activate</th>
              <th>Deactivate</th>
              @endif
            </tr>
          </thead>
          <tbody>
          @foreach($users as $use)
            <tr>
              <td>{{ 'Usu_'.$use->id }}</td>
              <td>{{ $use->name }}</td>
              <td>{{ $use->adp }}</td>
              <td>{{ $use->nt_login }}</td>
              <td>{{ $use->email}}</td>
              <td>{{ $use->rol}}</td>
              <td>{{ $use->position}}</td>
              <td>{{ $use->users_status}}</td>
              <td>{{ $use->name_campaing}}</td>
              @if(Auth::user()->rol == "developer" or Auth::user()->rol == "administator")
              <td><a class="btn btn-info" href="{{ url('user/update?id='.$use->id)}}">Edit</a></td>
              <td><a class="btn btn-success" href="{{ url('user/changeStatus?id='.$use->id.'&status=Active') }}">Activate</a></td>
              <td><a class="btn btn-warning" href="{{ url('user/changeStatus?id='.$use->id.'&status=Disabled') }}">Deactivate</a>
              </td>
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
  $(document).ready(function() 
  {
    tabladinamica("users");
  });
</script>     