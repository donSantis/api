<div class="card mb-5">

    <div class="header-cards-all">

        <div class="col-8 card-header">Reglas
        </div>


    </div>


    <div class="card-body">
        @foreach($rules as $r)
            <div class=" row rounded-2 shadow-sm mb-3">

                <div class="avatar-space col-2 ">
                    <div class="row">
                        <img href="{{'user-card/'}}{{$r->user->id}}"
                             src="{{ route('user.avatar',['filename'=>$r->user->image]) }}"
                             class="avatar-list-panel rounded-circle pt-2 align-middle"
                             alt="{{ $r->user->image }}"/>

                        <a class="nickname-panel mt-2" href="{{'user-card/'}}{{$r->user->id}}"> {{$r->user->nickname}}</a>
                    </div>
                </div>
                <div class="content-space col-8 ">
                    <div class="row my-2">
                        <a href="{{'rule-card/'}}{{$r->id}}"><h1
                                class="tile-card-panel "> {{substr($r->title,0,25)}}</h1></a>
                        <p class="subtile-card-panel"> {{substr($r->description,0,100)}} ...</p>

                        <small class="align-text-bottom"
                               style="bottom: 0px;position: absolute; font-size: 10px"> {{$r->created_at}}
                        </small>

                    </div>
                </div>
                @if($contenido == 'index')
                <div class=" col-2">
                    <div class="row">
                        <a  href="{{'/all-rules'}}" class=" icon-panel-count-comment align" href=""> <i class="bi bi-list-ol"
                                                                               style="font-size: 35px"></i></a>
                        <h4 class="counter-panel mt-5"> Ver mas</h4>
                    </div>
                </div>
                @else
                    <div class=" col-2">
                        <div class="row">
                            <a  href="{{'rule-card/'}}{{$r->id}}" class=" icon-panel-count-comment align" href=""> <i class="bi bi-book"
                                                                                                            style="font-size: 35px"></i></a>
                            <h4 class="counter-panel mt-5">Leer</h4>
                        </div>
                    </div>
                @endif


            </div>

        @endforeach
        @if($contenido == 'index')

        @else
            <div class="d-flex justify-content-center"> {{$rules->links('vendor.pagination.bootstrap-4')}} </div>
            <!-- SE LE AGREGA AL PAGINATOR LA RUTA DEL HTML CUSTOMIZADO -->
        @endif



        @if( Auth::user()->role == 1)
            <a href="{{'/create-rule'}}" class="btn rounded-circle align-middle btn-success btn-sm col-1  text-bald"
               style="position: absolute; right: 70px" role="button" aria-pressed="true"><i class="bi bi-plus"
                                                                                            style="font-size: 35px"></i></a>
        @endif
    </div>
</div>


