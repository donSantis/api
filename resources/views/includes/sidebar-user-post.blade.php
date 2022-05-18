<div class="col-md-4 float-rigth">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="header-cards-all">
                        <div class="card-header">Usuario #{{$post->user->nickname}}</div>
                    </div>
                    <div class="card-body">
                        @csrf
                        <div class="container-avatar pb-4 ">
                            <img src="{{ route('user.avatar',['filename'=>$post->user->image]) }}"
                                 class="avatar rounded-circle align-middle" alt="{{$post->user->image}}"/>
                        </div>
                        <h5 class="card-title">{{$post->user->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$post->user->email}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Se unio: {{$post->user->created_at}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Role: {{$post->user->role}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Posts: Countposts</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Comentarios: Countcomments</h6>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
