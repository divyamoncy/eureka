@extends('layouts.app')

@section('content')
<style>
  
</style>
<div class="row rym">
<h1 id="heading" align="center">Register New</h1>

    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body" style="color:black;">
        

        {!! Form::open(['route' => ['register',$id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('phno','Phone Number')}}
                {{Form::text('phno','',['class' => 'form-control','placeholder' => 'Phone Number','required'])}}
            </div>
           
            <div class="form-group">
                {{Form::label('department','Department')}}
                {{Form::text('department','',['class' => 'form-control','placeholder' => 'Department'])}}
            </div>
            
            {{Form::submit('Submit',['class' => 'btn btn-success editb'])}}
        {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
@endsection()