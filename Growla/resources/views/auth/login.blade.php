@extends('template')

@section('pageTitle', 'Login')

@section('contenidoPrincipal')


<style media="screen">
  .padding-null{
    padding: 0px !important;
  }
  form{
    background-color: rgba(74, 74, 74, 0.98);
    margin-top: 50px;
    border: 2px solid #fff;
    border-radius: 15px;
  }
</style>

<div class="container padding-null">
  <div class="row padding-null">
    <figure class="col-md-6 col-md-offset-3 padding-null">
      <img src="images/logonegropaint.png" alt="" class="img-responsive">
    </figure>
  </div>
</div>

<div class="container-fluid padding-nul">
    <div class="col-md-4 col-md-offset-4 padding-null">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-row col-md-10 col-md-offset-1">
                          <div class="form-group col-md-12 padding-null text-center @error('email') has-error @enderror">
                              <label for="email" class="col-md-12 text-md-center">{{ __('Email') }}</label>
                                  <input id="email" placeholder="Introduzca su Email" type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
                        </div>

                        <div class="form-row col-md-10 col-md-offset-1">
                          <div class="form-group col-md-12 padding-null text-center @error('password') has-error @enderror">
                              <label for="password" class="col-md-12 text-md-center">{{ __('Contraseña') }}</label>
                                  <input id="password" placeholder="Introduzca su contraseña" type="password" class="form-control" name="password" autocomplete="current-password">
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                          </div>
                        </div>


                        <div class="form-row col-md-10 col-md-offset-1">
                            <div class="col-md-12 text-center">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste la contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

        </div>
    </div>
</div>
@endsection
