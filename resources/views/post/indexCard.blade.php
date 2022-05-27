<div class="card mb-4">
    <div class="header-cards-all">
        <div class=" card-header">Posts</div>
    </div>
    <div class="card-body">
        @foreach($posts as $p)
            <div class="list-panel p-0 relativa">
                <div class=" row ">
                    <div class="avatar-space col-2 absolute ">

                        <img src="{{ route('user.avatar',['filename'=>$p->imgUser]) }}" class="avatar-list-panel rounded-circle align-middle"
                             alt="{{ $p->imgUser }}"/>

                        <h4 class="nickname-panel mt-2"> {{$p->nickname}}</h4>

                    </div>
                    <div class="content-space col-6">
                        <a href=""><h1 class="tile-card-panel"> {{$p->title}}</h1></a>
                        <a href=""><p class="subtile-card-panel"> {{substr($p->title,0,25)}} ...</p></a>

                    </div>
                    <div class="likes-space d-flex justify-content-center col-2">
                        <div class="row">
                            <img src="{{asset('img/heart-red.png')}}" class="imagen-panel p-1"/>
                            <h4 class=" counter-panel"> 134</h4>
                        </div>
                    </div>
                    <div class="answers-space d-flex justify-content-center col-2">
                        <div class="row">
                            <a class="icon-panel-count-comment  ml-4" href=""> <i class="bi bi-chat-left-dots"></i></a>
                            <h4 class="counter-panel mt-5"> 134</h4>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
