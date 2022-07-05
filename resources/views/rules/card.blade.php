@extends('layouts.app3')

@section('content')
    <div class="col-md-8 float-left">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header-cards-all">
                            <label class="card-header">#{{$rule->title}}</label>
                            <label class="text-rigth">{{\FormatTime::LongTimeFilter($rule->created_at)}}</label>
                        </div>
                        <div class="card-body">
                            @csrf

                            <div class="post-card-content pb-5">
                                <p class="card-text">{{$rule->description}}</p>
                            </div>
                            <hr class="line-bottom">

                            @if($rule->image)
                                @if($rule->image == 'sin-imagen')

                                @else
                                    <div class="container-img-post pb-2 ">
                                        <img src="{{ route('post.image',['filename'=>$rule->image]) }}"
                                             class="img-fluid "/>
                                    </div>
                                @endif
                            @endif


                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
