@extends('layouts.app')

@section('content')
    <h1>Events</h1>

    <table>
        @foreach($events as $event)
            <tr>
                <td>
                    {{ link_to_route('events.show', $event->name, compact('event'))}}
                </td>
                <td>
                    {{ link_to_route('events.edit', 'edit', compact('event'))}}
                </td>
                <td>
                    {!! Form::open([
                        'route' => ['events.destroy', $event],
                        'method' => 'delete'
                    ]) !!}
                    {!! Form::submit('delete', ['class' => 'btn btn-link']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{$events->links()}}
@endsection

