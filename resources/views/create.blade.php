@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> CREATE MAIL</div>

                <div class="card-body">

                <form action="{{route('store')}}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input type="text" name="username">
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="text" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="description">DESCRIPTION</label>
                        <input type="text" name="description">
                    </div>
                    <div class="form-group">
                        <label for="text" >TEXT MAIL</label>
                        <input type="text" name="text">
                    </div>
                    <button type="btn btn-primary">SAVE</button>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection