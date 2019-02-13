@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adp" class="col-md-4 col-form-label text-md-right">{{ __('Adp') }}</label>

                            <div class="col-md-6">
                                <input id="adp" type="text" class="form-control{{ $errors->has('adp') ? ' is-invalid' : '' }}" name="adp" value="{{ old('adp') }}">
                                @if ($errors->has('adp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nt_login" class="col-md-4 col-form-label text-md-right">{{ __('NT Login') }}</label>

                            <div class="col-md-6">
                                <input id="nt_login" type="text" class="form-control{{ $errors->has('nt_login') ? ' is-invalid' : '' }}" name="nt_login" value="{{ old('nt_login') }}" placeholder="lat\examp001" >
                                @if ($errors->has('nt_login'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nt_login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <select  name="position" id="position" class="form-control" required/>
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
                        </div>
                        <div class="form-group row">
                            <label for="campaing_id" class="col-md-4 col-form-label text-md-right">{{ __('Campaing') }}</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <select  name="campaing_id" id="campaing_id" class="form-control" required/>
                                    <option value="">Select</option>
                                    @foreach($campaing as $cam)
                                        <option value="{{$cam->id_campaing}}">{{$cam->name_campaing}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="example@sitel.com" >
                                <input  type="hidden"  name="rol" value="{{ __('general')}}" >
                                <input  type="hidden"  name="photo" value="{{ __('images/user_foto/user.png')}}">
                                <input  type="hidden"  name="users_status" value="{{ __('Active')}}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection