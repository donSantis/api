@extends('layouts.app')
@section('Usuarios')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Usuarios
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <table class="table table-bordered" style="align-content: center">
                                <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Lastname</th>
                                    <th>Mail</th>
                                    <th>Phone</th>
                                    <th>Rol</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($users as $u)
                                    <tr>
                                        <td>{{ $u->username }}</td>
                                        <td>{{ $u->lastname }}</td>
                                        <td>{{ $u->mail }}</td>
                                        <td>{{ $u->phone }}</td>
                                        <td>{{ $u->role }}</td>
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
    </div>
@endsection
