@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @include('layouts.messages')
    <div class="jumbotron text-center">
        <a href="https://www.facebook.com/IEEE.SB.CET" target="_blank"><img src="../img/ieeelogo.png" class="img-responsive dotlogo"></a><br>
            <h6 style="color:black; letter-spacing: 5px; line-height: 30px;"><span style="font-size:20px">IEEE SB CET</span><br>PRESENTS</h6>
            <h1 align="center" id="obtitle">Eureka</h1>
            <br>
            @guest
            <p>
                <a href="/login/google" style="color:white;"><button id="google" class=btn><i class="fa fa-google">  Google</i></button></a>
                <a href="/login/facebook" style="color:white;"><button id="facebook" class=btn><i class="fa fa-facebook">  Facebook</i></button></a>
            </p>
            @else
            <p style="color:white;">
                <a href="/game"><h2>The game has begun</h2></a> 
            </p>
            @endguest
    </div>
</div>
@endsection