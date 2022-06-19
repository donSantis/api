<div class="card">
    <div class="header-cards-all">

        <div class="col-8 card-header">Desarrolladores
        </div>


    </div>
    <div class="card-body">


        <div class="row">
            @foreach ($users as $u)
                @if( $u->id == 2 ||  $u->id == 3 || $u->id == 4 )

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


                            </div>
                            <hr>
                            <div class="row">




                            </div>

                            <a href="{{'user-card/'}}{{$u->id}}" class="btn   btn-primary m-2">Ir a perfil</a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>



