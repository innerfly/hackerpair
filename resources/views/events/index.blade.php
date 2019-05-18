@extends('layouts.app')

@section('content')
    <h1>Events</h1>

    @foreach($events as $event)
        <li>{{$event->name}}</li>
    @endforeach

    {{$events->links()}}
@endsection

