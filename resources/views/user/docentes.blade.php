@extends('layouts.app3')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">






    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <section style="background-color: #9de2ff;">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-8">
                                    <div class="card" style="border-radius: 15px;">
                                        <div class="card-body p-4">
                                            <div class="d-flex text-black">
                                                <h1> LISTADO DOCENTE</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @foreach ($users as $user)
                    <div class="carousel-item ">
                    <section style="background-color: #9de2ff;">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-8">
                                    <div class="card" style="border-radius: 15px;">
                                        <div class="card-body p-4">
                                            <div class="d-flex text-black">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ route('user.avatar',['filename'=>$user->image]) }}"
                                                         alt="Generic placeholder image" class="img-fluid"
                                                         style="width: 180px; border-radius: 10px;" />
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h5 class="mb-1">{{ $user->name }}</h5>
                                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                                        {{ $user->career_id }}
                                                    </p>
                                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                                        Correo : {{ $user->email }}
                                                    </p>
                                                    <p class="mb-2 pb-1" style="color: #2b2a2a;">
                                                        Tel    : {{ $user->phone }}
                                                    </p>
                                                    <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                                         style="background-color: #efefef;">


                                                        <div>
                                                            <p class="small text-muted mb-1">
                                                                Valoracion
                                                            </p>
                                                            <p class="mb-0">4.5/5</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex pt-1">
                                                        <button type="button" class="btn btn-outline-primary me-1 flex-grow-1">
                                                           <a href ="{{ url ('/docentes/'.$user->id.'/docente')}} " > Ver Detalle</a>
                                                        </button>
                                                        <button type="button" class="btn btn-primary flex-grow-1">
                                                            Comentar
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                @endforeach
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </section>


@endsection
