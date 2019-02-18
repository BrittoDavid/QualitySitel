@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
        <div class="header">
            <h1><center>Update user<br> {{  $users[0]->nombre }}</center></h1>
        </div>
        @include('alerts.notification')
        <br><br><br>
        <form action="{{ url('user/updatePost') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-content">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">ID Usuario</span>
                        <div class="form-line">
                            <input type="text" class="form-control" value="{{ 'Usu_'. $users[0]->id }}" disabled>
                            <input type="hidden" name="id" value="{{ $users[0]->id }}" >
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon">Username</span>
                        <div class="form-line">
                            <input type="text" value="{{ $users[0]->name }}" class="form-control" name="name">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @if ($errors->has('adp'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('adp') }}</strong>
                        </span>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon">Adp</span>
                        <div class="form-line">
                            <input type="number" value="{{  $users[0]->adp }}" class="form-control" name="adp">
                        </div>
                    </div>
                </div> 
                <div class="col-md-4">
                    @if ($errors->has('nt_login'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nt_login') }}</strong>
                        </span>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon">nt-login</span>
                        <div class="form-line">
                            <input name="nt_login" type="text" class="form-control" value="{{  $users[0]->nt_login }}" >
                        </div>
                    </div>
                </div> 
                <div class="col-md-4">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon">email</span>
                        <div class="form-line">
                            <input name="email" type="email" class="form-control" value="{{  $users[0]->email }}" >
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                    <span class="input-group-addon">Rol:</span>
                    <div class="form-line">
                      <select class="form-control"  name="rol" id="select_rol" required/>
                        <option value="">Select</option>
                        <option value="developer">developer</option>
                        <option value="reporting">reporting</option>
                        <option value="administator">administator</option>
                        <option value="general">general</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                    <span class="input-group-addon">Campaing:</span>
                    <div class="form-line">
                      <select class="form-control" name="campaing_id" id="select_campaing" required/>
                        <option value="">Select</option>
                        @foreach($campaing as $cam)
                        <option value="{{$cam->id_campaing}}">{{$cam->name_campaing}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Position</span>
                        <div class="form-line">
                          <select class="form-control"  name="position" id="select_position" required/>
                            <option value="">Select</option>
                            <option value="DV">DV</option>
                            <option value="OM">OM</option>
                            <option value="OMTT">OMTT</option>
                            <option value="RA">RA</option>
                            <option value="LS">LS</option>
                            <option value="LSTT">LSTT</option>
                            <option value="QA">QA</option>
                            <option value="QATT">QATT</option>
                            <option value="COACH">COACH</option>
                            <option value="COACHTT">COACHTT</option>
                            <option value="WF">WF</option>
                          </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Actualizar Usuario</button>       
                    <input type="hidden" id="ca" value="{{ $users[0]->campaing_id }}" >
                </div>       
            </div>
        </div>
    </form>             
    </div>
</div>
</div>      
@include('layouts.dash.footer')
<script type="text/javascript" >

/*Funciones para auto cargar los select*/
    
/*Select de la campaña*/
$(document).ready(function() 
{
    var ca = $("#ca").val();
    autoselect('select_campaing',ca);   
});

</script>