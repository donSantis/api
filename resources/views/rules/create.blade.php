@extends('layouts.app3')

@section('content')
    <div class="col-md-8 float-left">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header-cards-all">
                            <div class="card-header">Crear Regla</div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="save-rule" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">

                                    <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>

                                    <div class="col-md-7">
                                        <input id="image_path" type="file" class="form-control{{ $errors->has('image_path') ? ' is-invalid' : '' }}" name="image_path">

                                        @if ($errors->has('image_path'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image_path') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="title"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Título') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text"
                                               class="form-control @error('title') is-invalid @enderror" name="title"
                                                required autocomplete="title" autofocus>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="description"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                                    <div class="col-md-6">
                                        <textarea  name="description"
                                                  required autocomplete="description"
                                                  autofocus id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>

                                        @error('description')
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
@endsection
