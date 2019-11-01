<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Lists all events
     */
    public function index() {
        $events = Event::all();

    	return view('events', ['events' => $events]);
    }
}
