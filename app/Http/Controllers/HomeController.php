<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContentController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\MerchendisesController;
use App\Models\Content;
use App\Models\Event;
use App\Models\Merchandise;
use Illuminate\Http\Request;

/**
 * Контроллер лейаута домашней страницы 
 */

class HomeController extends Controller
{
    public function index() {
        $content = Content::getLastContent(8);
        $events = Event::getLastEvents(4);
        $merchendise = Merchandise::getLastMerchendise(4);
        
        return view('frontend.home', compact('content', 'events', 'merchendise'));
    }
}
