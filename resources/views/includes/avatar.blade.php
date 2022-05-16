@if(Auth::user()->image)
    <div class="container-avatar">
        <img src="{{ route('user.avatar',['filename'=>Auth::user()->image]) }}" class="avatar" alt="avatar-img"/>
    </div>
@endif
