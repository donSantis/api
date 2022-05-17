@extends('layouts.app3')

@section('content')
    <div class="col-md-8 float-left">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header-cards-all">
                            <div class="card-header">Post #{{$post->id}}</div>
                        </div>
                        <div class="card-body">
                            @csrf
                            <div class="container-avatar pb-4 ">
                                <img  src="{{ route('post.image',['filename'=>$post->image]) }}" class="avatar rounded-circle align-middle" alt="avatar-img"/>
                            </div>
                            <div class="row mb-3">
                                <label for="title"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Título') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text"
                                           class="form-control @error('title') is-invalid @enderror"
                                           value="{{$post->title}}" name="title"
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
                                    <input id="title" type="text"
                                           class="form-control @error('title') is-invalid @enderror"
                                           value="{{$post->description}}" name="title"
                                           required autocomplete="title" autofocus>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('comment.create')
    </div>

@endsection
