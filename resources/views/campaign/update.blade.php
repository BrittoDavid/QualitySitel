@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
<div class="">
  <div class="row top_tiles">
    <div class="header">
      <h1><center>Editar Campaña</center></h1>
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
    <form action="{{url('campaign/updatePost')}}" method="POST">
      <div class="body"><br><br><br>
        @csrf
        <div class="row">
          <div class="col-lg-6 col-lg-offset-3">
            <div class="input-group">
              <span class="input-group-addon">Codigo: </span>
              <div class="form-line">
                <input type="text" class="form-control date" value="{{$campaign[0]->id_campaing}}" 
                disabled/>
                <input type="hidden" name="id_campaing" value="{{$campaign[0]->id_campaing}}">
              </div>
            </div>                           
          </div>
        </div>
            <div class="row">
              <div class="col-lg-6 col-lg-offset-3">
                <div class="input-group">
                  <span class="input-group-addon">Nombre Campaña: </span>
                  <div class="form-line">
                    <input type="text" class="form-control date" name="name_campaing" value="{{$campaign[0]->name_campaing}}">
                  </div>
                </div>
              </div>
            </div>
          <center><input type="submit" value="Editar" class="btn btn-success"></center>
        </form>                
      </div>
    </div>
  </div>
</div>
@include('layouts.dash.footer')