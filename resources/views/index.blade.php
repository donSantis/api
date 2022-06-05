@extends('layouts.app2')
@section('title',$titulo)
@section('content')
    @switch($contenido)
        @case('index')
            @include('rules.panel-card')
            @include('notices.panel-card')
            @include('post.panel-card')
            @break
        @case('posts')
            @include('post.panel-card')
            @break
        @case('notices')
            @include('post.panel-card')
            @break
        @case('rules')
            @include('post.panel-card')
            @break
        @case('users')
            @include('user.showUsers')
            @break
    @endswitch
@endsection()

