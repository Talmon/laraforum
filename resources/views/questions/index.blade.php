@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                    <div class="panel-body">
                        <h1>Your Questions:</h1>

                        @foreach($questions as $question)
                            <p>
                                <h3>{{$question->title}}</h3>

                                <a href="{{url('/questions',$question->id)}}">Click here to view question</a>

                            </p>

                        @endforeach
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
