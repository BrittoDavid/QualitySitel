@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('alerts.notification')
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nt_login" class="col-md-4 col-form-label text-md-right">{{ __('Nt login') }}</label>

                            <div class="col-md-6">
                                <input id="nt_login" type="text" class="form-control{{ $errors->has('nt_login') ? ' is-invalid' : '' }}" name="nt_login" value="{{ old('nt_login') }}">

                                @if ($errors->has('nt_login'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nt_login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adp" class="col-md-4 col-form-label text-md-right">{{ __('adp user') }}</label>

                            <div class="col-md-6">
                                <input id="adp" type="number" class="form-control{{ $errors->has('adp') ? ' is-invalid' : '' }}" name="adp" value="{{ old('adp') }}" >

                                @if ($errors->has('adp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send data') }}
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
