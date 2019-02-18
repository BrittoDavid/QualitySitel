@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
<div class="">
  <div class="row top_tiles">
    <div class="header">
      <h1><center>Create campaign</center></h1>
    </div>
    @include('alerts.notification')
    <!--Para saber los errores que puede cometer el usuario-->
    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
    @endif
    <form action="{{url('campaign/store')}}" method="POST">
      <div class="body"><br><br><br>
        @csrf
        <div class="row">
          <div class="col-lg-6 col-lg-offset-3">
            <div class="input-group">
              <span class="input-group-addon">Campaign code: </span>
              <div class="form-line">
                <input type="text" class="form-control date"  value="{{$id}}" disabled/>
              </div>
            </div>                           
          </div>
        </div>
            <div class="row">
              <div class="col-lg-6 col-lg-offset-3">
                <div class="input-group">
                  <span class="input-group-addon">Campaign name</span>
                  <div class="form-line">
                    <input type="text" class="form-control date" name="name_campaing" value="{{ old('name_campaing') }}">
                  </div>
                </div>
              </div>
            </div>
          <center><input type="submit" value="Registrar" class="btn btn-success"></center>
        </form>                
      </div>
    </div>
  </div>
</div>
@include('layouts.dash.footer')
