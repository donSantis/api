@extends('layouts.app3')

@section('content')
    <div class="col-md-8 float-left">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header-cards-all">
                            <label class="card-header">#{{$post->id}}</label>
                            <label class="text-rigth">{{\FormatTime::LongTimeFilter($post->created_at)}}</label>
                        </div>
                        <div class="card-body">
                            @csrf

                            <div class="post-card-content pb-5">
                                <p class="card-text">{{$post->description}}</p>
                            </div>
                            <hr class="line-bottom">

                            @if($post->image)
                                @if($post->image == 'sin-imagen')

                                @else
                                    <div class="container-img-post pb-2 ">
                                        <img src="{{ route('post.image',['filename'=>$post->image]) }}"
                                             class="img-fluid "/>
                                    </div>
                                @endif
                            @endif


                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="likes col-6">

                                    <!-- Comprobar si el usuario le dio like a la imagen -->
                                    <?php $user_like = false; ?>
                                    @foreach($post->votes as $like)
                                        @if($like->user->id == Auth::user()->id)
                                            <?php $user_like = true; ?>
                                        @endif
                                    @endforeach

                                    @if($user_like)
                                        <img src="{{asset('img/heart-red.png')}}" data-id="{{$post->id}}"
                                             class="btn-dislike"/>
                                    @else
                                        <img src="{{asset('img/heart-black.png')}}" data-id="{{$post->id}}"
                                             class="btn-like"/>
                                    @endif

                                    <span class="number_likes">{{count($post->votes)}}</span>


                                </div>

                                @if(Auth::user()->id == $post->user->id )
                                    <a class=" col-2" href="{{'/post-delete/'}}{{$post->id}}"><i class="bi bi-trash"
                                                                                                 style="color: red; font-size: 40px"></i></a>
                                    <a class=" col-2" href="{{'/post-edit/'}}{{$post->id}}"><i
                                            class="bi bi-pencil-square" style="color: green; font-size: 40px"></i></a>
                                @endif
                            </div>
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
