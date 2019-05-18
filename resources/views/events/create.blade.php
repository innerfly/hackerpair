@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col">

            {!! Form::open(['route' => 'events.store'], ['class' => 'form']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Event Name', ['class' => 'control-label']) !!}
                {!! Form::text('name', null,
                    [
                        'class' => 'form-control input-lg',
                        'placeholder' => 'PHP Hacking and Pizza'
                    ])
                !!}
            </div>

            <div class="form-group">
                {!! Form::label('city', 'Venue', ['class' => 'control-label']) !!}
                {!! Form::text('city', null,
                    [
                        'class' => 'form-control input-lg',
                        'placeholder' => 'NY'
                    ])
                !!}
            </div>

            <div class="form-group">
                {!! Form::label('venue', 'Venue', ['class' => 'control-label']) !!}
                {!! Form::text('venue', null,
                    [
                        'class' => 'form-control input-lg',
                        'placeholder' => 'NY'
                    ])
                !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', "Description",
                    ['class' => 'control-label'])
                !!}
                {!! Form::textarea('description', null,
                    [
                    'class' => 'form-control input-lg',
                    'placeholder' => 'Describe the event'
                    ])
                !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add Event',
                    [
                    'class' => 'btn btn-info btn-lg',
                    'style' => 'width: 100%'
                    ])
                !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection