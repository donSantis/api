<div class="card mb-4">

    <div class="header-cards-all">
        <div class="row">
            <div class="col-8 card-header">Posts</div>


        </div>
    </div>

    <div class="card-body">
        @foreach($posts as $p)
            <div class=" p-0 ">
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

                                    <small class="align-text-bottom" style="bottom: 0px;position: absolute; font-size: 10px"> {{$p->created_at}}</small>

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
            </div>
        @endforeach
    </div>
    <div href="create-post" class="btn btn-success btn-sm col-2 p-2 m-2 text-bald">AGREGAR</div>
</div>


Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias blanditiis dolorem est eum expedita iste laudantium saepe veniam? Dignissimos enim fugit maiores tempora ullam. Cumque doloremque iusto molestiae nam veritatis.
