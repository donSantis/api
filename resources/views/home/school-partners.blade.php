<div class="card">
    <div class="header-cards-all">

        <div class="col-8 card-header">Profesores
        </div>


    </div>
    <div class="card-body">


        <div class="row">
            @foreach ($users as $u)
                @if($u->role == 3 || $u->school == Auth::user()->school)

                    <div class="card col-10 col-sm-4 col-md-4 col-lg-5 col-xl-5 d-flex m-4 shadow" style="width: 18rem; border-radius: 20px">
                        <img class="card-img-top mt-3 rounded-circle "
                             src="{{ route('user.avatar',['filename'=>$u->image]) }}"
                             alt="Card image cap"
                             style="height: 200px">

                        <div class="card-body" >
                            <h5 class="card-title">{{$u->name}}</h5>
                            <div class="row">

                                <small> {{$u->nickname}}</small>
                                <small> {{$u->email}}</small>
                                <small> {{$u->school->description}}</small>

                            </div>
                            <hr>
                            <div class="row">
                                <a class="icon-panel-count-comment  col-6" href=""> <i class="bi bi-chat-left-dots"
                                                                                       style="color: blue"></i></a>



                                <a class=" icon-panel-count-comment col-6" href=""> <i class="bi bi-stickies"
                                                                                       style="color: black"></i></a>

                                <h4 class="counter-panel mt-5  mb-3 col-6">{{count($u->comment)}}</h4>

                                <h4 class="counter-panel mt-5 mb-3 col-6">{{count($u->post)}}</h4>


                            </div>

                            <a href="#" class="btn   btn-primary m-2">Ir a perfil</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>



