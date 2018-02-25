@extends('layouts.app')

@section('content')

<div class ="row rym animated fadeIn">
    
    
    <img  src="../img/cmo.jpg" style="height:170px;"><br><br>
    Mannequins say "We breakin' the mold"<br>
Breakin' out and we breakin' the codes<br>
Similar to the Jacques Cousteau<br>
To the depths and you're wet<br>
So your tank explodes, so get it out
    <br><br>
    <div class="col-md-6 col-md-offset-3" style="padding-bottom: 20px;">        
            {!! Form::open(['action' => 'GameController@answer', 'method' => 'POST']) !!}
                <div class="form-group" align="center">
                    {{Form::label('answer','Answer')}}
                    {{Form::text('answer','',['class' => 'form-control','placeholder' => 'Your Answer'])}}
                </div>
            {{Form::submit('Submit',['class' => 'btn btn-success editb'])}}
        {!! Form::close() !!}
    </div>
</div>
@endsection