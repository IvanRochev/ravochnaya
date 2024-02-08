<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index() {
        return view('frontend.events');
    }

    public static function getEventsHomeScope(){
        $events = Event::where('active', 1)
            ->where('deleted', 0)
            ->orderBy('date')
            ->take(4)
            ->get();
        return $events;
    }
}
