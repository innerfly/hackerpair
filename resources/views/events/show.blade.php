@extends('layouts.app')

@section('content')
    <h1>{{$event->name}}</h1>

    <p>{{$event->description}}</p>
@endsection

