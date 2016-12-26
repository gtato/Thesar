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


                  <div id="conjugs" class=""> 
                    <div class="row">
                      <!-- <div class="panel panel-info">
                      <div class="panel-heading">Mënyra dëftore</div>
                      <table class="table table-striped table-condensed">
                      <thead>
                      <tr><th class="col-md-1"></th><th>E tashme</th><th>E pakryer</th><th>E kryer</th><th>E kryer e plotë</th></tr></thead>
                      <tbody>
                      <tr><td >Unë</td><td></td><td>kam</td><td></td><td>kisha</td></tr>
                      <tr><td>Ti</td><td></td><td>ke</td><td></td><td>kishe</td></tr>
                      <tr><td>Ajo/Ai</td><td></td><td>ka</td><td></td><td>kishte</td></tr>
                      <tr><td>Ne</td><td></td><td>kemi</td><td></td><td>kishim</td></tr>
                      <tr><td>Ju</td><td></td><td>keni</td><td></td><td>kishit</td></tr>
                      <tr><td>Ato/Ata</td><td></td><td>kanë</td><td></td><td>kishin</td></tr>
                      </tbody>
                      </table>
                      <br>
                      <table class="table table-striped table-condensed">
                      <thead>
                      <tr><th class="col-md-1"></th><th>E kryer e thjeshtë</th><th>E kryer e tejshkuar</th><th>E ardhme</th><th>E ardhëshme e përparme</th></tr></thead>
                      <tbody>
                      <tr><td>Unë</td><td></td><td>pata</td><td>do të</td><td>do të kem</td></tr>
                      <tr><td>Ti</td><td></td><td>pate</td><td>do të</td><td>do të kesh</td></tr>
                      <tr><td>Ajo/Ai</td><td></td><td>pati</td><td>do të</td><td>do të ketë</td></tr>
                      <tr><td>Ne</td><td></td><td>patëm</td><td>do të</td><td>do të kemi</td></tr>
                      <tr><td>Ju</td><td></td><td>patët</td><td>do të</td><td>do të keni</td></tr>
                      <tr><td>Ato/Ata</td><td></td><td>patën</td><td>do të</td><td>do të kenë</td></tr>
                      </tbody>
                      </table>
                      </div>

                      <br>

                      <div class="panel panel-info">
                      <div class="panel-heading">Mënyra kushtore</div>
                      <table class="table table-striped table-condensed">
                      <thead>
                      <tr><th class="col-md-1"></th><th>E tashme</th><th>E kryer</th><th>E pakryer</th><th>E kryer e plotë</th></tr></thead>
                      <tbody>
                      <tr><td >Unë</td><td></td><td>kam</td><td></td><td>kisha</td></tr>
                      <tr><td>Ti</td><td></td><td>ke</td><td></td><td>kishe</td></tr>
                      <tr><td>Ajo/Ai</td><td></td><td>ka</td><td></td><td>kishte</td></tr>
                      <tr><td>Ne</td><td></td><td>kemi</td><td></td><td>kishim</td></tr>
                      <tr><td>Ju</td><td></td><td>keni</td><td></td><td>kishit</td></tr>
                      <tr><td>Ato/Ata</td><td></td><td>kanë</td><td></td><td>kishin</td></tr>
                      </tbody>
                      </table>
                      <br>
                      <table class="table table-striped table-condensed">
                      <thead>
                      <tr><th class="col-md-1"></th><th>E kryer e thjeshtë</th><th>E kryer e tejshkuar</th><th>E ardhme</th><th>E ardhëshme e përparme</th></tr></thead>
                      <tbody>
                      <tr><td>Unë</td><td></td><td>pata</td><td>do të</td><td>do të kem</td></tr>
                      <tr><td>Ti</td><td></td><td>pate</td><td>do të</td><td>do të kesh</td></tr>
                      <tr><td>Ajo/Ai</td><td></td><td>pati</td><td>do të</td><td>do të ketë</td></tr>
                      <tr><td>Ne</td><td></td><td>patëm</td><td>do të</td><td>do të kemi</td></tr>
                      <tr><td>Ju</td><td></td><td>patët</td><td>do të</td><td>do të keni</td></tr>
                      <tr><td>Ato/Ata</td><td></td><td>patën</td><td>do të</td><td>do të kenë</td></tr>
                      </tbody>
                      </table>
                      </div> -->
                      {!! $conjugs !!}


                    <div class="col-sm-4 col-md-offset-4"><button type="button" class="form-control btn btn-primary conjugs">U bë</button></div>
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

