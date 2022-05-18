<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
    <div class="card w-100 rounded">
        <div class="header-cards-all p-2" >
                <p class="card-text">{{$comment->created_at}}</p>

        </div>
        <div class="card-body">
            <div class="row">
            <div class="comment-card-avatar col-4  " >
                <img  style="max-height: 35px" src="{{ route('user.avatar',['filename'=>$comment->user->image]) }}" class="avatar rounded-circle align-middle" alt="{{$comment->user->image}}"/>
                <h5 class="card-title">{{$comment->user->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$comment->user->email}}</h6>
            </div>

            <div class="comment-card-content col-8" >
                <p class="card-text">{{$comment->description}}</p>
            </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>


