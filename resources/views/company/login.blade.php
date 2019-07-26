@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="company-container">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="text" class="col-md-4 col-form-label label-font ">{{ __('Employee No.') }}</label>

                            <div class="col-md-7">
                                <i class="inside fa fa-user"></i>
                                <input id="text" type="text" class="form-control inp @error('employee_no') is-invalid @enderror" name="employee_no" value="{{ old('employee_no') }}"  autocomplete="employee_no" autofocus>

                                @error('employee_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label label-font ">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <i class="inside fa fa-lock"></i>
                                <input id="password" type="password" class="form-control inp @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-4">
                                <button type="submit" class="btn btn-block login-btn">
                                    {{ __('Login') }}
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