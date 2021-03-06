<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control'])!!}
</div>

<!--Body Form Input-->
<div class="form-group">
    {!! Form::label('body','Body:') !!}
    {!! Form::textarea('body',null,['class'=>'form-control'])!!}
</div>

<!--Published at form input-->
<div class="form-group">
    {!! Form::label('published_at','Published on:') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control'])!!}
</div>
<!--Add Article Form Input-->
<div class="form-group">
    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
</div>
{!!Form::close()!!}
{{--//use bootstrap classes--}}