<div class="header-cards-all">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                <img  src="{{ asset('img/vivoduoc.png') }}" width="auto" height="30" alt="">
            </a>




            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" style="background-color: #FFFFFF;">
                <span class="navbar-toggler-icon" ></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto ">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                        <li class="nav-item dropdown">
                            <a id="notificaciones" class="nav-link dropdown-toggle text-white" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="bi bi-bell-fill"></i>
                            </a>


                            <div class="dropdown-menu dropdown-menu-end  " aria-labelledby="navbarDropdown">


                                <a href="#" class="sidebar-card    list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex  w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Ejemplo notifi</strong>

                                    </div>
                                    <div class="col-10 mb-1 small">14-05-2022</div>

                                </a>

                            </div>


                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{'/user-card/'}}{{Auth::user()->id}}" class="dropdown-item">Mi perfil</a>
                                <a href="{{'/config'}}" class="dropdown-item">Configuración</a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>


                        </li>

                        <div class="container-avatar pb-4 ">
                            <img  src="{{ route('user.avatar',['filename'=>Auth::user()->image]) }}" class="avatar  rounded-circle align-middle" alt="avatar-img"/>
                        </div>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class=" banner-index p-5 text-center bg-image">
        <div class="mask" >
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Bienvenidos</h1>
                    <h4 class="mb-3">Generación 2022</h4>

                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FFFFFF;">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav mr-auto col-12">
                    <li class="nav-item col-2 ">
                        <a class="nav-link " href="/" >Inicio </a>
                    </li>
                    <li class="nav-item col-2 ">
                        <a class="nav-link" href="/section-partners"> Seccion</a>
                    </li>
                    <li class="nav-item col-2 ">
                        <a class="nav-link" href="#">Escuela</a>
                    </li>
                    <li class="nav-item col-2 ">
                        <a class="nav-link" href="/teachers">Profesores</a>
                    </li>
                    <li class="nav-item col-2 ">
                        <a class="nav-link" href="/">Compañeros</a>
                    </li>
                    <li class="nav-item col-2 ">
                        <a class="nav-link" href="/devs">Nosotros</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
</div>
