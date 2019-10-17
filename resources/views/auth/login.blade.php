@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-flat">


                <span class="card-body">

                   <div class="w-100  title-card  pb-3">
                        <div class="h1T w-100 flex-row justify-con">
                            <span>DATATracks V. 1.0 </span>
                                <i class="iT fas fa-user badge-light"></i>
                        </div>
                   </div>

                   </span>
                    <div class="w-100 d-flex flex-row  justify-content-center pt-5 pb-5">
                        <div class="d-flex flex-column justify-content-center">
                            <p class="p-title">DATA</p>

                                <p class="p-tracks">tracks</p>
                                <p class="p-version">version 1.0</p>


                        </div>

                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row pt-3">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row m-3">
                            <div class="col-md-12 d-flex justify-content-center mb-5 mt-5">
                                <button type="submit" class="btn btn-secondary w-50">
                                    <span>Valider</span>
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
