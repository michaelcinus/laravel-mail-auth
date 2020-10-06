@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> EDIT MAIL : {{ $mail -> id }}</div>

                <div class="card-body">

                <form action="{{route('update', $mail -> id)}}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input type="text" name="username" value="{{ $mail -> username }}">
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="text" name="email" value="{{ $mail -> email }}">
                    </div>
                    <div class="form-group">
                        <label for="description">DESCRIPTION</label>
                        <input type="text" name="description" value="{{ $mail -> description }}">
                    </div>
                    <div class="form-group">
                        <label for="text" >TEXT MAIL</label>
                        <input type="text" name="text" value="{{ $mail -> text }}">
                    </div>
                    <button type="btn btn-primary">SAVE</button>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection