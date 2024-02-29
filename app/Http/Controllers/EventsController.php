<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Content;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index() {
        // $contents = Content::GetAllContentPaginate(4);
        // dd($contents);
        // return view('frontend.events', compact('contents'));
        return view('frontend.events');
    }
}
