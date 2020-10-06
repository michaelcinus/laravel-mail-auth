@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MAILS</div>

                <div class="card-body">
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
