@extends('layouts.app')

@section('content')
<div class="container homebox" style="background-color:white;margin-top: 80px;">
    <div class="page-header text-center">
        <h3 >Welcome {{ $user->name }}</h3>
    </div>
    <!--<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">DASHBOARD</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left" style="padding-top: 7.5px;color:black;">YOUR PROFILE</h4>
                   
                </div>
                <div class="panel-body">
                    <p>
                       DEPARTMENT&nbsp&nbsp&nbsp{{ $user->college }}</br>
                       LEVEL&nbsp&nbsp&nbsp{{ $user->level }} </br>
                        EMAIL&nbsp&nbsp&nbsp{{ $user->email }}</br>
                       MOBILE&nbsp&nbsp&nbsp{{ $user->phnumber }}</br>

                    </p>
                </div>
                

            </div>
        </div>
    </div>
    </div>
@endsection
