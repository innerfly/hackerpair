<?php

namespace App\Http\Controllers\API;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{

    public function index()
    {
        return Event::select('name', 'city')
            ->orderBy('id', 'desc')
            ->paginate();
    }
}
