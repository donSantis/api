<div class="col-4 float-rigth card-user-posts">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="header-cards-all">
                        <div class="card-header">Usuario #{{$post->user->nickname}}</div>
                    </div>
                    <div class="card-body ">
                        @csrf
                        <div class="container-avatar  pb-4 ">
                            <img src="{{ route('user.avatar',['filename'=>$post->user->image]) }}"
                                 class="avatar avatar-user-post rounded-circle ml-4" alt="{{$post->user->image}}"/>
                        </div>
                        <h5 class="card-title">{{$post->user->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$post->user->email}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Se unio: {{\FormatTime::LongTimeFilter($post->user->created_at)}}</h6>
                        @if($post->user->role == 3)
                        <h6 class="card-subtitle mb-2 text-muted">Sección: {{$post->user->section}}</h6>
                        @endif
                        <h6 class="card-subtitle mb-2 text-muted">Posts: {{count($post->user->post)}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Comentarios: {{count($post->user->comment)}}</h6>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
