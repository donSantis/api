
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header-cards-all">
                            <div class="card-header">Crear Comentario</div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{url('save-comment')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="title"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Título') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text"
                                               class="form-control @error('title') is-invalid @enderror" name="title"
                                               required autocomplete="title" autofocus>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <input type="hidden" name="post_id" value="{{$post->id}}" />
                                <div class="row mb-3">
                                    <label for="description"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                                    <div class="col-md-6">
                                        <textarea  name="description"
                                                   required autocomplete="description"
                                                   autofocus id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                </div>


                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            Guardar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


