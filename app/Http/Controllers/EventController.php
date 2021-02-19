<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MOdels\Event;

class EventController extends Controller
{
    public function index() {
        
        $events = Event::all();

        return view('welcome',['events' => $events]);
    }

    public function create() {
        return view('events.create');
    }

}
