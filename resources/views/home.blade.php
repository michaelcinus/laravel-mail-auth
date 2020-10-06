@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MAILS</div>

                <div class="card-body">
                @auth 
                <a class="btn btn-secondary " href="{{route('create')}}">CREATE NEW MAIL </a> <br><br>

                @else
                    IF YOU WANT CREATE MAIL<a class="btn btn-link " href="{{ route('login') }}">LOGIN </a><br><br>
                @endauth
            
                <ul>
                    @foreach ($mails as $mail)
            
                        <li>
                            <a href="{{route('show', $mail -> id)}}"> 
                            DESCRIPTION : {{ $mail -> description }} <br>
                            SENDER : {{ $mail -> username }}
            
                            </a> 
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
