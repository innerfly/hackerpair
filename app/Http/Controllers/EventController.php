<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\EventStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::published()->paginate(10); // used 'scopePublished' model scope
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)
    {
//        $rules = [
//            'name' => ['required', 'string', 'min:3', 'max:25'],
//            'description' => ['required', 'string'],
//        ];
//
//        $messages = [
//            'required' => 'Please provide an event :attribute',
//            'name.min' => 'Event :attribute must consist of at least 10 characters',
//            'name.max' => 'Event :attribute cannot be longer than 50 characters',
//        ];
//
//        Validator::make($request->input(), $rules, $messages)->validate();

        $event = Event::create($request->input());

        flash('Event created!')->success();

        return redirect()->route('events.show', compact('event'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->update($request->input());

        flash('Event updated!')->success();

        return redirect()->route('events.edit', $event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        flash('The event has been deleted!')->info();

        return redirect()->route('events.index', $event);
    }
}
