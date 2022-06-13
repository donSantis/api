

<div class="col-md-3  float-rigth ">

    <div class=" card ">
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
                                    <div class="d-flex  justify-content-between">
                                        <strong class="mb-1">{{substr($r->title,0,10)}}</strong>
                                        <small>{{\FormatTime::LongTimeFilter($r->created_at)}} </small>
                                    </div>
                                    <div class="mb-1 small">{{substr($r->description,0,20)}}...</div>
                                </a>
                            @endforeach
                        </div>

                </div>

            </div>
        </div>
    </div>
</div>
