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
                                    <label for="lastname"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>

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
                                    <label for="nickname"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Apodo') }}</label>

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
                                    <label for="email"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                    <div class="col-md-6 mt-2">{{ Auth::user()->email }}

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Teléfono (+569)') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone" type="text"
                                               class="form-control @error('phone') is-invalid @enderror" name="phone"
                                               value="{{ Auth::user()->phone }}" required >

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

                                    <div class="col-md-6 mt-2">
                                        {{ Auth::user()->section }}
                                    </div>
                                </div>




                                <div class="row mb-3">
                                    <label for="description"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                                    <div class="col-md-6">
                                        <input id="description" type="text"
                                               class="form-control @error('description') is-invalid @enderror" name="description"
                                               value="{{ Auth::user()->description }}" required autocomplete="description">

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="phrase"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Frase') }}</label>

                                    <div class="col-md-6">
                                        <input id="phrase" type="text"
                                               class="form-control @error('phrase') is-invalid @enderror" name="phrase"
                                               value="{{ Auth::user()->phrase }}" autocomplete="phrase">

                                        @error('phrase')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="interest"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Interés') }}</label>

                                    <div class="col-md-6">
                                        <input id="interest" type="text"
                                               class="form-control @error('interest') is-invalid @enderror" name="interest"
                                               value="{{ Auth::user()->interest }}"  autocomplete="interest">

                                        @error('interest')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="info1"
                                           class="col-md-4 col-form-label text-md-end">{{ __('info1') }}</label>

                                    <div class="col-md-6">
                                        <input id="info1" type="text"
                                               class="form-control @error('info1') is-invalid @enderror" name="info1"
                                               value="{{ Auth::user()->info1 }}"  autocomplete="info1">

                                        @error('info1')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="info2"
                                           class="col-md-4 col-form-label text-md-end">{{ __('info2') }}</label>

                                    <div class="col-md-6">
                                        <input id="info2" type="text"
                                               class="form-control @error('info2') is-invalid @enderror" name="info2"
                                               value="{{ Auth::user()->info2 }}"  autocomplete="info2">

                                        @error('info1')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="info3"
                                           class="col-md-4 col-form-label text-md-end">{{ __('info3') }}</label>

                                    <div class="col-md-6">
                                        <input id="info3" type="text"
                                               class="form-control @error('info3') is-invalid @enderror" name="info3"
                                               value="{{ Auth::user()->info3 }}"  autocomplete="info3">

                                        @error('info3')
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
