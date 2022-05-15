

<div class="card mb-4">
    <div class="header-cards-all">
        <div class=" card-header">Reglas</div>
    </div>
    <div class="card-body">
        <div class="panel panel-forum">


            <div class="panel-inner">
                <table class="footable table table-striped table-primary table-hover">
                    <thead>
                    <tr>
                        <th data-class="expand">Titulo</th>
                        <th class="large110" data-hide="phone">Estadisticas</th>
                        <th class="large20" data-hide="phone">Ultimo Post</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($rules as $r)
                        <tr>
                            <td>
                                                <span class="icon-wrapper">
                                                    <i class="row-icon-font icon-moon-default2 icon-moon-voice2 forum-read"
                                                       title="No unread posts"></i>
                                                </span>
                                <i class="row-icon-font-mini " title="No unread posts"></i>
                                <span class="desc-wrapper">
                                                  <a href="" class="topictitle">{{$r->title}}</a>
                                                                                 <br/>
                                    <!--  <strong class="pagination">
                                            <span>
                                                <a href="">1</a>
                                                <span class="page-sep">,
                                                </span>
                                                <a href="">2</a>
                                            </span>
                                        </strong> -->
                                            <i class="fa fa-paperclip fa-flip-horizontal" rel="tooltip"
                                               data-placement="top"
                                               data-original-title="Attachment(s)">

                        </i>
                        by

                        <a href="" style="color: #AA0000;" class="username-coloured">{{$r->name}}</a>
                        <small> - {{$r->created_at}}</small>
                    </span>
                            </td>
                            <td class="stats-col">
                     <span class="stats-wrapper">
                     17 Replies <br/> 58056 Views
                     </span>
                            </td>
                            <td>
                    <span class="last-wrapper">
                     by <a href="">chinh12hy</a>
                     <a rel="tooltip" data-placement="right" data-original-title="View the latest post" href=""><i
                             class="mobile-post fa fa-sign-out"></i></a>
                     <br/><small>07 Jul 2019, 04:33</small>
                    </span>
                            </td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>

        <div>

        </div>
    </div>
</div>

