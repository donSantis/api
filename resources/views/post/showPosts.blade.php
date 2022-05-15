
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Posts
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <table class="table table-bordered" style="align-content: center">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Descripcion</th>
                                    <th>Creado</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($posts as $p)
                                    <tr>
                                        <td>{{ $p->id }}</td>
                                        <td>{{ $p->title }}</td>
                                        <td>{{ $p->description }}</td>
                                        <td>{{ $p->created_at }}</td>
                                        <td>
                                            <a class="bi bi-eye"
                                               href="">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <button class="btn btn-success btn-sm col-2 p-2 m-2" >AGREGAR</button>
            <button class="btn btn-primary btn-sm col-2 p-2 m-2" >EDITAR</button>
            <button class="btn btn-danger btn-sm col-2 p-2 m-2" >ELIMINAR</button>
        </div>
    </div>


