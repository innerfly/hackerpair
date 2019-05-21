<?php

namespace App\Http\Controllers\API;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{

    public function index()
    {
        return Event::orderBy('id', 'desc')
            ->take(5)
            ->get();


        /* Vue pagination:
         * return Event::select('name', 'city')
            ->orderBy('id', 'desc')
            ->paginate();*/
    }

    public function show(Event $event)
    {
        return $event;
    }

    public function store(Request $request)
    {
        $user = User::where('api_token', $request->get('api_token'))->first();

        $event = Event::create(
            $request->input()
        );

        if ($request->has('enabled')) {
            $event->enabled = 1;
            $event->save();
        }

        $user->events()->save($event);

        return response()->json([
            'message' => 'The event has been created',
        ], 200);
    }

    public function update(Request $request, Event $event)
    {
        
    }

    public function destroy(Request $request, Event $event)
    {
        $user = User::where('api_token', $request->get('api_token'))->first();

//        $user->events()->delete($event);
        $event->delete();

        return response(null, 204);
    }

}
