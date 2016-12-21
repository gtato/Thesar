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
                    
                    {!! $def !!}
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


