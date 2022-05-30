

<div class="card mb-4">
    <div class="header-cards-all">
        <div class=" card-header">Posts</div>
    </div>
    <div class="card-body">
        <div class="panel panel-forum">


            <div class="panel-inner">
                <table class="footable table table-striped table-primary table-hover">
                    <thead>
                    <tr>
                        <th data-class="expand">Titulo</th>
                        <th class="large110" data-hide="phone">Estadisticas</th>
                        <th class="large20" data-hide="phone">Ultimo Post</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($posts as $p)
                        <tr>
                            <td>
                                                <span class="icon-wrapper">
                                                    <i class="row-icon-font icon-moon-default2 icon-moon-voice2 forum-read"
                                                       title="No unread posts"></i>
                                                </span>
                                <i class="row-icon-font-mini " title="No unread posts"></i>
                                <span class="desc-wrapper">
                                                  <a href="{{'post-card/'}}{{$p->id}}" class="topictitle">{{$p->title}}</a>
                                                                                 <br/>
                                    <strong class="pagination">
                                            <span>
                                                <a href="">1</a>
                                                <span class="page-sep">,
                                                </span>
                                                <a href="">2</a>
                                            </span>
                                        </strong>

                                            <i class="fa fa-paperclip fa-flip-horizontal" rel="tooltip"
                                               data-placement="top"
                                               data-original-title="Attachment(s)">

                        </i>
                        by

                        <a href="{{'user-card/'}}{{$p->postUserId}}" style="color: #AA0000;" class="username-coloured">{{$p->name}}</a>
                        <small> - {{$p->created_at}}</small>
                    </span>
                            </td>
                            <td class="stats-col">
                     <span class="stats-wrapper">
                     17 Replies <br/> 58056 Views
                     </span>
                            </td>
                            <td>
                    <span class="last-wrapper">
                     by <a href="">chinh12hy</a>
                     <a rel="tooltip" data-placement="right" data-original-title="View the latest post" href=""><i
                             class="mobile-post fa fa-sign-out"></i></a>
                     <br/><small>07 Jul 2019, 04:33</small>
                    </span>
                            </td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>

        <div>
            <div class="row">
                <div href="create-post" class="btn btn-success btn-sm col-2 p-2 m-2 text-bald" >AGREGAR</div>

            </div>
        </div>
    </div>
</div>








<div class="card mb-4">

    <div class="header-cards-all">
        <div class="row">
            <div class="col-8 card-header">Posts</div>


        </div>
    </div>


    <div class="card-body">
        @foreach($posts as $p)
            <div class="list-panel p-0 relativa">
                <div class=" row ">
                    <div class="avatar-space col-2 absolute ">

                        <img src="{{ route('user.avatar',['filename'=>$p->imgUser]) }}"
                             class="avatar-list-panel rounded-circle align-middle"
                             alt="{{ $p->imgUser }}"/>

                        <h4 class="nickname-panel mt-2"> {{$p->nickname}}</h4>

                    </div>
                    <div class="content-space col-6">
                        <a href="{{'post-card/'}}{{$p->id}}"><h1 class="tile-card-panel"> {{$p->title}}</h1></a>
                        <p class="subtile-card-panel"> {{substr($p->title,0,25)}} ...</p>

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
    <div href="create-post" class="btn btn-success btn-sm col-2 p-2 m-2 text-bald" >AGREGAR</div>
</div>
