@extends('layouts.app')

@section('content')
<div class="container">


    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thesar</div>

                <div class="panel-body">
                    Fjalori i parë shqiptar me kod të hapur i mirëmbajtur nga komuniteti.
                </div>
            </div>
        </div>
    </div> -->

    @if (!Auth::guest())
        <a href="{{ url('/newentry') }}" class="btn">Shto hyrje</a> 
        |
        <a href="#" class="btn">Verifiko</a> 
    @endif
</div>
@endsection
