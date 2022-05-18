@extends('layouts.app3')

@section('content')
    <div class="col-md-8 float-left">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header-cards-all">
                            <label class="card-header">#{{$post->title}}</label>
                            <label class="text-rigth">{{$post->created_at}}</label>
                        </div>
                        <div class="card-body">
                            @csrf

                            <div class="post-card-content pb-5" >
                                <p class="card-text">{{$post->description}}</p>
                            </div>
                            <hr class="line-bottom">
                            <div class="container-img-post pb-2 ">
                                <img  src="{{ route('post.image',['filename'=>$post->image]) }}" class="" alt="avatar-img"/>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h6 class="card-text">{{$post->created_at}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('comment.create')

        @foreach($post->comments as $comment)
            @include('comment.card')
        @endforeach


    </div>

    @include('includes.sidebar-user-post')

@endsection
