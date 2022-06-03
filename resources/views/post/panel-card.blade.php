<div class="card mb-5">

    <div class="header-cards-all">

            <div class="col-8 card-header">Preguntas
            </div>


    </div>


    <div class="card-body">
        @foreach($posts as $p)
                <div class=" row rounded-2 shadow-sm mb-3">

                        <div class="avatar-space col-2 ">
                            <div class="row">
                                <img href="{{'user-card/'}}{{$p->postUserId}}" src="{{ route('user.avatar',['filename'=>$p->imgUser]) }}"
                                     class="avatar-list-panel rounded-circle pt-2 align-middle"
                                     alt="{{ $p->imgUser }}"/>

                                <a class="nickname-panel mt-2" href="{{'user-card/'}}{{$p->postUserId}}"> {{$p->nickname}}</a>
                            </div>
                        </div>
                        <div class="content-space col-6 ">
                            <div class="row my-2">
                                <a href="{{'post-card/'}}{{$p->id}}"><h1 class="tile-card-panel "> {{substr($p->title,0,25)}}</h1></a>
                                <p class="subtile-card-panel"> {{substr($p->description,0,100)}} ...</p>

                                    <small class="align-text-bottom" style="bottom: 0px;position: absolute; font-size: 10px"> {{$p->created_at}}-{{ date('Y-m-d H:i:s') }}</small>

                            </div>

                        </div>
                        <div class="end-space col-2">
                            <div class="row">
                                <a class="icon-panel-count-comment align" href=""> <i class="bi bi-heart-fill" style="color: red"></i></a>
                                <h4 class="counter-panel mt-5"> 134</h4>
                            </div>
                        </div>
                        <div class=" col-2">
                            <div class="row">
                                <a class=" icon-panel-count-comment align" href=""> <i class="bi bi-chat-left-dots" style="color: black"></i></a>
                                <h4 class="counter-panel mt-5"> 134</h4>
                            </div>
                        </div>

                    </div>

        @endforeach
            <a href="{{'/create-post'}}" class="btn rounded-circle align-middle btn-primary btn-sm col-1  text-bald" style="position: absolute; right: 70px" role="button" aria-pressed="true"><i class="bi bi-list-ol" style="font-size: 35px"></i>
            </a>

            <a href="{{'/create-post'}}" class="btn rounded-circle align-middle btn-success btn-sm col-1  text-bald" style="position: absolute; right: 0px" role="button" aria-pressed="true"><i class="bi bi-plus" style="font-size: 35px"></i></a>
    </div>
</div>


