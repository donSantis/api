@extends('layouts.app3')

@section('content')
    <div class="col-md-8 float-left">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header-cards-all">
                            <div class="card-header">Configuración de la cuenta</div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.update') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nickname"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Nickname') }}</label>

                                    <div class="col-md-6">
                                        <input id="nickname" type="text"
                                               class="form-control @error('nickname') is-invalid @enderror"
                                               name="nickname"
                                               value="{{ Auth::user()->nickname }}" required autocomplete="nickname"
                                               autofocus>

                                        @error('nickname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label for="lastname"
                                           class="col-md-4 col-form-label text-md-end">{{ __('lastname') }}</label>

                                    <div class="col-md-6">
                                        <input id="lastname" type="text"
                                               class="form-control @error('lastname') is-invalid @enderror"
                                               name="lastname"
                                               value="{{ Auth::user()->lastname }}" required autocomplete="lastname"
                                               autofocus>

                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ Auth::user()->email }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Telefono (+569)') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="phone"
                                               class="form-control @error('phone') is-invalid @enderror" name="phone"
                                               value="{{ Auth::user()->phone }}" required autocomplete="phone">

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="section"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Sección') }}</label>

                                    <div class="col-md-6">
                                        <input id="section" type="section"
                                               class="form-control @error('section') is-invalid @enderror"
                                               name="section"
                                               value="{{ Auth::user()->section }}" required autocomplete="section">

                                        @error('section')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="role"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Rol') }}</label>

                                    <div class="col-md-6">
                                        <input id="role" type="role"
                                               class="form-control @error('role') is-invalid @enderror" name="role"
                                               value="{{ Auth::user()->role }}" required autocomplete="role">

                                        @error('role')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            Guardar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('includes.sidebar-config')
@endsection
