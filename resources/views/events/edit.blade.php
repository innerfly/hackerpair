@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col">

            {!! Form::model($event, [
                'method' => 'put',
                'route' => ['events.update', $event->slug],
                'class' => 'form',
            ]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Event name', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control input-lg'] ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('city', 'City', ['class' => 'control-label']) !!}
                {!! Form::text('city', null, [ 'class' => 'form-control input-lg', ] ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('venue', 'Venue', ['class' => 'control-label']) !!}
                {!! Form::text('venue', null, [ 'class' => 'form-control input-lg' ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', "Description", ['class' => 'control-label']) !!}
                {!! Form::textarea('description', null, [ 'class' => 'form-control input-lg']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update Event', ['class' => 'btn btn-info btn-lg']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>

@endsection