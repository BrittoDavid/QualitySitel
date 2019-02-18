@include('layouts.dash.header')
@include('layouts.dash.menu')
<div class="right_col" role="main">
  <div class="">
    <div class="row top_tiles">
        <div class="header">
            <h1><center>Profile <br> {{ Auth::user()->name }}</center></h1>
        </div>
        @include('alerts.notification')
        <br><br><br>
        <form action="{{ url('user/updateProfile') }}" method="POST" enctype="multipart/form-data">
        <div class="col-lg-6">
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#"><br>
                            <img class="img img-rounded" id="foto_perfil" src="{{ asset(Auth::user()->photo) }}" width="400" height="290" class="img-reponsive"/>
                        </a>
                    </div>
                </div><br><h6 id="foto"></h6>
                <label class="btn btn-primary btn-file"><img  id="esperar2" width="20em" src="{{ asset('img/cargando/4.gif') }}" style="display: none"> Update photo<input type="file" style="display: none;" onchange="subirImagenAjax()" name="photo" id="photo">
                </label>
            </div>
        </div>
        <div class="card-content">
            <br>
            @csrf
            <div class="row">
                <div class="col-md-4">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon">Name</span>
                        <div class="form-line">
                            <input type="text" value="{{ Auth::user()->name}}" class="form-control" name="name" value="{{ old('name') }}">
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
                            <input type="text" value="{{ Auth::user()-> adp }}" class="form-control" id="adp" name="adp" value="{{ old('adp')}}">
                        </div>
                    </div>
                </div>
                @if(Auth::user()->rol == "developer" or Auth::user()->rol == "")
                <div class="col-md-4">
                    @if ($errors->has('nt_login'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nt_login') }}</strong>
                        </span>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon">Nt-login</span>
                        <div class="form-line">
                            <input type="text" value="{{ Auth::user()->nt_login }}" class="form-control" id="nt_login" name="nt_login" value="{{ old('nt_login')}}">
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
                        <span class="input-group-addon">Email</span>
                        <div class="form-line">
                            <input name="email" type="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">Id User</span>
                        <div class="form-line">
                            <input type="email" class="form-control" value="{{ 'Usu_'.Auth::user()->id }}" disabled>
                            <input type="hidden" value="{{Auth::user()->id }}" name="id">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                </div>            
            </div>
        </div>
    </form>             
    </div>
</div>
</div>      
@include('layouts.dash.footer')
