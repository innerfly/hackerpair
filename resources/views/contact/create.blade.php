@extends('layouts.app')

@section('content')
    {!! Form::open(['route' => 'contact.store']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Your Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'E-mail Address') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('msg', 'Message') !!}
        {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

    {!! Form::close() !!}
@endsection