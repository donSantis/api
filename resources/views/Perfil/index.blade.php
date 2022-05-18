@extends('layouts.app3')
@section('content')







    <section>
        <div class="card-header bg-primary text-white"  >Mi cuenta</div>

        <div class="container">
            <div class="main-body">



                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://st3.depositphotos.com/3332767/14401/i/450/depositphotos_144016121-stock-photo-young-teacher-sitting-on-panel.jpg" class="rounded-circle" alt="Cinque Terre" style="width:300px;height:300px;">
                                    <div class="mt-3">
                                        <h4>Harrys</h4>
                                        <p class="text-secondary mb-1">Programacion </p>
                                        <p class="text-muted font-size-sm">bla bñla bla</p>
                                        <button class="btn btn-primary">Contactar</button>
                                        <button class="btn btn-outline-primary">Comentar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Nombre completo</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Harrys
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Correo</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        fip@jukmuh.al
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Telefono</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        +56900000000
                                    </div>
                                </div>
                                <hr>


                                <hr>
                                <h3>Valoraciones</h3>
                                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                     style="background-color: #efefef;">


                                    <div>
                                        <p class="small text-muted mb-1">
                                            like
                                        </p>
                                        <p class="mb-0">41</p>
                                    </div>
                                    <div class="px-3">
                                        <p class="small text-muted mb-1">
                                            dislike
                                        </p>
                                        <p class="mb-0">976</p>
                                    </div>

                                </div>
                            </div>
                        </div>


                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <h2> Comentarios </h2>
                                    <div class="card-body">
                                        <form action="/action_page.php">
                                            <div class="mb-3 mt-3">
                                                <label for="comment">Comments:</label>
                                                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Comentarr</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>

    </section>


@endsection
