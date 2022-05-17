@foreach($post->comments as $comment)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="header-cards-all">
                    <div class="card-header">Comentario :</div>
                </div>
                <div class="card-body">
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

                    <div class="row mb-3">
                        <label for="title"
                               class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>

                        <div class="col-md-6">
                            <input id="description" type="text"
                                   class="form-control @error('description') is-invalid @enderror" name="description"
                                   required autocomplete="description" autofocus>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


