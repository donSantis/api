@if(Auth::user()->image)
    <div class="container-avatar pb-4 ">
        <img  src="{{ route('user.avatar',['filename'=>Auth::user()->image]) }}" class="avatar rounded-circle align-middle" alt="avatar-img"/>
    </div>
@endif
