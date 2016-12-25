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
                    
                    <br/>
                    <div class="row">
                      <div class="col-sm-4 col-md-offset-4"><input type="text" class="form-control input-lg" placeholder="Hyrje e re"></div>
                      <div class="col-sm-2 col-md-offset-1">
                      <button type="button" class="btn btn-lg btn-default">Shto homonim <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> 
                      </button>  
                      </div>

                    </div>
                    
                    <br/><br/>

                    
                    <div class="row">
                      <div class="col-sm-2">{!! $def['cat'] !!}</div>
                      <div class="col-sm-2 collapse noun"><select class="form-control"><option value="0">femërore</option><option value="1">mashkullore</option></select></div>
                      <div class="col-sm-2 collapse noun"><button type="button" class="btn btn-default">Shto lakimet
                      </button></div>
                      <div class="col-sm-2 collapse verb"><select class="form-control"><option value="1">kalimatare</option><option value="0">jo kalimtare</option></select></div>
                      <div class="col-sm-2 collapse verb"><button type="button" class="btn btn-default conjugs">Shto zgjedhimet
                      </button></div>
                      <div class="col-sm-2"><button type="button" class=" form-control btn btn-default">Shto përdorim <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> 
                      </button>  </div>
                      <div class="col-sm-4"></div>
                    </div>

                    
                    <br>

                    
                    
                    <div class="input-group">
                      <span class="input-group-addon" style="width: 45px">1</span> 
                      <div>
                        <input class="form-control" type="text" placeholder="Përkufizim" >
                        <input class="form-control" type="text" placeholder="Shëmbuj">
                        <input type="text" class="form-control tags" placeholder="Cilësi të tjera">
                      </div>
                      <!-- <textarea class="form-control custom-control" rows="2" style="resize:none"></textarea>      -->
                      <span class="input-group-addon btn btn-default"><span class="glyphicon glyphicon-minus-sign"></span></span>
                    </div>

                    

                    <button type="button" class="form-control btn btn-default ">Shto kuptim si <span id="catspan_1"></span> <span class="glyphicon glyphicon-plus-sign"></span></button>
                    
                  </div>
                  <div id="syn" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                  </div>
                  <div id="ety" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                  </div>


                  <div id="conjugs" class="collapse"> 
                  <div class="row">
                  <div class="col-sm-4 col-md-offset-4">
                  <button type="button" class="form-control btn btn-primary conjugs">U bë</button>
                  </div>
                  </div>
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

