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
                      <div class="col-sm-4 col-md-offset-4"><input type="text" onchange="updateWord(event);" 
                      onkeypress="this.onchange(event);" onpaste="this.onchange(event);" oninput="this.onchange(event);" class="form-control input-lg" placeholder="Hyrje e re"></div>
                      
                    </div>
                    
                    <br/>

                    <div class="model"  style="display: none">
                    <div class="homonym">
                      <div class="title"><span class="word"></span> <sup class="hindex">1</sup></div>
                      <div class="role">
                        <div class="row">
                          <div class="col-sm-2">{!! $def['cat'] !!}</div>
                          <div class="col-sm-2 collapse noun"><select class="form-control"><option value="0">femërore</option><option value="1">mashkullore</option></select></div>
                          <div class="col-sm-2 collapse noun"><button type="button" class="btn btn-default">Shto lakimet
                          </button></div>
                          <div class="col-sm-2 collapse verb"><select class="form-control"><option value="1">kalimatare</option><option value="0">jo kalimtare</option></select></div>
                          <div class="col-sm-2 collapse verb"><button type="button" class="btn btn-default conjugs" onclick="onToggleConjugs(event)">Shto zgjedhimet
                          </button></div>
                        </div>

                        <br>

                      <div class="meaning input-group top-round">
                        <span class="input-group-addon index" style="width: 45px">1</span> 
                        <div>
                          <input class="form-control" type="text" placeholder="Përkufizim" >
                          <input class="form-control" type="text" placeholder="Shëmbuj">
                          <input type="text" class="form-control tags" placeholder="Cilësi të tjera">
                        </div>
                        <span onclick="delMeaning(event)" class="input-group-addon btn btn-default del_meaning"><span class="glyphicon glyphicon-minus-sign del_meaning"></span></span>
                      </div>

                      <button type="button" onclick="addMeaning(event)" class="form-control btn btn-default bottom-round add_meaning">Shto kuptim si <span class="catspan"></span> <span class="glyphicon glyphicon-plus-sign"></span></button>

                      <br><br>
                    </div>  
                      <span onclick="addRole(event)" class="add add_role" style="font-size: 20px">
                      <span class="glyphicon glyphicon-plus-sign " aria-hidden="true"></span> 
                      <span class="text">Shto kuptime në një tjetër rol.</span>
                      </span>
                    
                    <hr>
                    </div>
                    </div>

                    <span class="placeholder" style="display: none;" ></span>
                    <span onclick="addHomonym(event)" class="add add_homonym" style="font-size: 25px">
                    <span class="glyphicon glyphicon-plus-sign " aria-hidden="true"></span> 
                    <span class="text">Shto homonim.</span>
                    </span>

                    
                    <br><br>
                    <div class="row">
                      <div class="col-sm-4 col-md-offset-4">
                      <button type="button" class="form-control btn btn-primary">U bë</button>
                      </div>
                    </div>                    

                    
                  </div>
                  <div id="syn" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                  </div>
                  <div id="ety" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 2.</p>
                  </div>


                  <div id="conjugs" class="tab-pane collapse"> 
                    
                     
                      {!! $conjugs !!}

                      <div class="row">
                      <div class="col-sm-4 col-md-offset-4">
                      <button type="button" class="form-control btn btn-primary conjugs" onclick="onToggleConjugs(event)">U bë</button>
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

@section('javascript')
<script src="/js/bootstrap-tagsinput.min.js"></script>
<script src="/js/typeahead.bundle.js"></script>
<script src="/js/entry.js"></script>
@stop
