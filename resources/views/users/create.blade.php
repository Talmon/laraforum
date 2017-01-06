@extends('app')

@section('content')
    <h1>Create User</h1>

    <hr>
    <form method="post" enctype="multipart/form-data" action="/users" class="col-md-6">
    <div class="form-group">

        <label for="name">Name</label><input type="text" name="name" id="name" class="form-control" value="">
    </div>

        <div class="form-group">

            <label for="email">Email</label><input type="email" name="email" id="email" class="form-control" value="">
        </div>
    <br/>
        <div class="form-group">

            <label for="password">Password</label><input type="password" name="password" id="password" class="form-control" value="">
        </div>
    <div class="form group">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

@stop
