@extends('layouts.app3')

@section('content')
    <div class="col-md-10 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header-cards-all">
                            <div class="card-header">Perfil {{$user->name}}</div>
                        </div>
                        @csrf
                        <div>

                            <div class="row mb-3 relative">

                                <div class="banner-perfil" style="height: 200px;  background-color: #4a5568">
                                    <div class="row">
                                        <div class="banner-text-perfil col-4 align-self-end">

                                        </div>
                                        <div class="banner-text-perfil col-8 mt-4 align-self-end">
                                            @if($user->phrase == '')
                                            @else
                                                <blockquote class="blockquote" style="color: #FFFFFF">
                                                    <p class="mb-0">{{$user->phrase}}</p>
                                                    <footer class="blockquote-footer mt-4" style="color: #FFFFFF"><cite
                                                            title="Source Title">{{$user->nickname}}</cite></footer>
                                                </blockquote>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="container-avatar m-4  " style="position: absolute;">
                                    <img src="{{ route('user.avatar',['filename'=>$user->image]) }}"
                                         class="rounded-circle align-middle banner-a-img"

                                         alt="avatar-img"/>
                                </div>


                            </div>


                            <div class="row">
                                <h2 for="name"
                                    class="col-md-12  text-md-center">{{$user->name}} {{$user->lastname}}</h2>
                            </div>

                            <div class="row mb-3">
                                <small for="nickname"
                                       class="col-md-12  text-md-center">{{$user->nickname}}</small>
                            </div>

                            <div class="row mb-3">
                                <small for="phrase"
                                       class="col-md-12  text-md-center">{{$user->phrase}}</small>
                            </div>

                            <div class="row mb-3">
                                <small for="description"
                                       class="col-md-12  text-md-center">{{$user->description}}</small>
                            </div>

                            <div class="row mb-3">
                                <small for="info1"
                                       class="col-md-12  text-md-center">{{$user->info1}}</small>
                            </div>

                            <div class="row mb-3">
                                <small for="info2"
                                       class="col-md-12  text-md-center">{{$user->info2}}</small>
                            </div>

                            <div class="row mb-3">
                                <small for="info3"
                                       class="col-md-12  text-md-center">{{$user->info3}}</small>
                            </div>

                            <div class="row">
                                <a class="icon-panel-count-comment  col-6" href=""> <i class="bi bi-chat-left-dots"
                                                                                       style="color: blue"></i></a>



                                <a class=" icon-panel-count-comment col-6" href=""> <i class="bi bi-stickies"
                                                                                       style="color: #626262"></i></a>

                                <h4 class="counter-panel mt-5  mb-3 col-6">{{count($user->comment)}}</h4>

                                <h4 class="counter-panel mt-5 mb-3 col-6">{{count($user->post)}}</h4>


                            </div>

                            <div class="row m-3">

                                <h4 for="phone"
                                    class="col-md-6  text-md-center" style="color: #626262;"><i class="bi bi-whatsapp" style="color: #25D366"></i>
                                    +569 {{$user->phone}}</h4>

                                <h4 for="email"
                                    class="col-md-6 text-md-center"><i class="bi bi-envelope"></i> {{$user->email}}
                                </h4>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('comment.create-perfil')

        @foreach($user->perfilComment as $comment)
            @include('comment.card-perfil')
        @endforeach


    </div>

@endsection
