@extends('layouts.app')


@section('content')
    
    <div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a  data-toggle="pill" href="#def">Përkufizim</a></li>
                    <li><a data-toggle="pill" href="#syn">Sinonime</a></li>
                    <li><a data-toggle="pill" href="#ety">Etimologji</a></li>
                  </ul>

                </div>

                <div class="panel-body">
                
                @if($edit)
              
                <div class="tab-content">
                  <div id="def" class="tab-pane fade in active">
                    
                     <input type="text" class="form-control input-lg" placeholder="Hyrje e re">                     

                    <input id="tags" type="text" class="form-control" placeholder="Cilësi të tjera">
                    <div class="input-group">
                      <span class="input-group-addon" style="width: 45px">1</span> 
                      <div>
                        <div>
                          {!! $def['cat'] !!}
                          <select class="form-control hidden"><option value="0">femërore</option><option value="1">mashkullore</option></select>
                        </div>
                        <input class="form-control" type="text" placeholder="Përkufizim" >
                        <input class="form-control" type="text" placeholder="Shëmbull">
                      </div>
                      <!-- <textarea class="form-control custom-control" rows="2" style="resize:none"></textarea>      -->
                      <span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-minus-sign"></span></span>
                    </div>

                    <div class="input-group">
                      <span class="input-group-addon" style="width: 45px">2</span> 
                      <textarea class="form-control custom-control" rows="2" style="resize:none"></textarea>     
                      <span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-minus-sign"></span></span>
                    </div>

                    <div class="input-group">
                      <span class="input-group-addon" style="width: 45px">20</span> 
                      <textarea class="form-control custom-control" rows="2" style="resize:none"></textarea>     
                      <span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-minus-sign"></span></span>
                    </div>


                    <span class="form-control btn btn-primary "><span class="glyphicon glyphicon-plus-sign"></span></span>  
                    
                  </div>
                  <div id="syn" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                  </div>
                  <div id="ety" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                  </div>
                </div>



                @else



                <div class="tab-content">
                  <div id="def" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <p>Some content.</p>
                  </div>
                  <div id="syn" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                  </div>
                  <div id="ety" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                  </div>
                </div>
                @endif


                </div>
            </div>
        </div>
    </div>

  </div>
  
@stop

