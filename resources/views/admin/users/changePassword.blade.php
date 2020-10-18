@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" >{{ __('Reset Password') }}</div>

                    <div class="card-body" style="background-color: #d2d6de">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('passwordChange') }}">
                            @csrf


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right required-field">{{ __('E-Mail Address') }}&nbsp</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email}}" readonly autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right required-field">{{ __('Present Password') }}&nbsp</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('ppassword') is-invalid @enderror" name="ppassword" required autocomplete="new-password">

                                    @error('ppassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right required-field">{{ __('New Password') }}&nbsp</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('npassword') is-invalid @enderror" name="npassword" required autocomplete="new-password">

                                    @error('npassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right required-field">{{ __('Confirm Password') }}&nbsp</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="repass" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="background-color: #605ca8!important">
                                        {{ __('Reset Password') }}
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
