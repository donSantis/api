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

                            <div class="row mb-3">

                                <div class="banner-perfil" style="height: 200px;  background-color: #4a5568">
                                </div>

                                <div class="container-avatar p-4 absolute "style="position: absolute;height: 300px;">
                                    <img src="{{ route('user.avatar',['filename'=>$user->image]) }}"
                                         class="avatar rounded-circle align-middle" style="height: 100%; border: solid 5px white"
                                         alt="avatar-img"/>
                                </div>

                            </div>


                            <div class="row">
                                <h2 for="name"
                                       class="col-md-12  text-md-center">{{$user->name}}</h2>
                            </div>

                            <div class="row mb-3">
                                <h4 for="email"
                                    class="col-md-12  text-md-center">{{$user->email}}</h4>
                            </div>


                            <div class="row mb-3">
                                <small for="nickname"
                                    class="col-md-12  text-md-center">{{$user->nickname}}</small>
                            </div>
                            @if($user->role == 2)
                                <div class="row mb-3">
                                    <small for="nickname"
                                           class="col-md-12  text-md-center">es {{$user->phrase}}</small>
                                </div>
                            @endif



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
