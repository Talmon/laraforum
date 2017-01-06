@extends('app')

@section('content')
    <h1>Ask a New Question</h1>

    <hr>
    <form method="post" enctype="multipart/form-data" action="/questions" class="col-md-6">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="">
    </div>

    <label for="category">Category</label>
    <select name="category" id="category" class="form-control">
        <option value="private">Private</option>
        <option value="public">Public</option>
    </select>
    <br/>
    <div class="form group">
        <button type="submit" class="btn btn-primary">Ask Question</button>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

@stop
