

<div class="col-md-3  float-rigth ">

    <div class=" card">
        <div class="header-cards-all">
            <div class="card-header">{{ __('Últimos Post') }}
        </div>
        </div>
        <div class="sticky-top">
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" >
                <div class="card-body">

                        <div class="list-group list-group-flush border-bottom scrollarea">
                            @foreach($posts as $r)
                                <a href="{{'post-card/'}}{{$r->id}}" class="sidebar-card list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">{{substr($r->title,0,25)}}</strong>
                                        <small>Wed</small>
                                    </div>
                                    <div class="col-10 mb-1 small">{{substr($r->description,0,10)}}...</div>
                                </a>
                            @endforeach
                        </div>

                </div>

            </div>
        </div>
    </div>
</div>
