@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MAIL : {{ $mail -> id }} </div>

                <div class="card-body">
                <ul>
                        <li>
                            USERNAME : {{ $mail -> username }} <br>
                            EMAIL : {{ $mail -> email }} <br>
                            DESCRIPTION : {{ $mail -> description }} <br>
                            TEXT : <br>{{ $mail -> text }}

                            <br><br>

                            @auth 
                                <a class="btn btn-primary" href="{{route('edit', $mail -> id)}}">EDIT</a>
                                <a class="btn btn-danger" href="{{route('delete', $mail -> id)}}">DELETE</a>
                            @else
                            IF YOU WANT DELETE MAIL <a class="btn btn-link " href="{{ route('login') }}">LOGIN </a>
                            @endauth
            
                        </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection