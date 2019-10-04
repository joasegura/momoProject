@extends('layouts.app')

@section('content')
<div class="containe">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div id="divName" class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">
                                  <p id="errorNombre"></p>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="divEmail" class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">
                                <p id="errorEmail"></p>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="divPass" class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
                                  <p id="errorPass"></p>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="divPassConfirm" class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                                <p id="errorPassConf"></p>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="file"></label>
                          <input type="file" name="imagen">
                        </div>

                        <div class="input-container">
                          <label class="special-label">Género*:</label> <br><br>
                          <label class="short-label"> <input type="radio" name="genero" value="M" class="short-input"> Masculino </label>
                          <label class="short-label"> <input type="radio" name="genero" value="F" class="short-input"> Femenino </label>
                          <label class="short-label"> <input type="radio" name="genero" value="N/A" class="short-input"> Otro </label>
                        </div>

                        <div class="form-group">
                          <h2>Paises:</h2>
                          <select name="" id="paises">

                          </select>
                            <script src="/js/main.js"></script>

                        </div>

                        <div class="form-group">
                           <div id="provincias">
                           <h2 id="hdosProv"></h2>
                               <select id="prov" class="form-control @error('prov') is-invalid @enderror" name="prov" value="{{ old('prov') }}" autocomplete="prov">
                               <option value="">Seleccione una provincia</option>
                                 </select>
                               @error('prov')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                       </div>

                        <div class="form-group row mb-0">
                                <button type="submit" class="btn-register btn-primary">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
