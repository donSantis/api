
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="header-cards-all">
                            <div class="card-header">Crear Comentario</div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="save-comment" enctype="multipart/form-data">
                                @csrf



                                <div class="row mb-3">
                                    <div class="form-floating">
                                        <textarea  name="description"
                                                   required autocomplete="description"
                                                   autofocus id="description" cols="30" rows="10"style="100px" class="form-control @error('description') is-invalid @enderror"></textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                </div>



                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success">
                                            Enviar
                                        </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


