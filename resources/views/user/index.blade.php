
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Gente</h1>

            <hr>

            @foreach($users as $user)
            <div class="profile-user">



                <div class="user-info">
                    <h2>{{'@'.$user->id}}</h2>
                    <h2>{{'@'.$user->lastname}}</h2>
                    <h2>{{'@'.$user->nickname}}</h2>

                    <p>'Se unió: '</p>
                    <a href="" class="btn btn-success">Ver perfil</a>
                </div>

                <div class="clearfix"></div>
                <hr>
            </div>
            @endforeach

            <!-- PAGINACION -->
            <div class="clearfix"></div>
        </div>

    </div>
</div>
