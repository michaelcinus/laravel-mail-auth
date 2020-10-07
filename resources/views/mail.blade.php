@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User : {{ $user -> name }} : {{ $action }} </div>

                <div class="card-body">
                <ul>
                        <li>
                            USERNAME : {{ $mail -> username }} <br>
                            EMAIL : {{ $mail -> email }} <br>
                            DESCRIPTION : {{ $mail -> description }} <br>
                            TEXT : <br>{{ $mail -> text }}
                        </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection