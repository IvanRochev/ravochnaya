<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContentController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\MerchendisesController;
use Illuminate\Http\Request;

/**
 * Контроллер лейаута домашней страницы 
 */

class HomeController extends Controller
{
    public function index() {
        $content = ContentController::getContentHomeScope();
        $events = EventsController::getEventsHomeScope();
        $merchendise = MerchendisesController::getMerchendiseHomeScope();
        
        return view('frontend.home', compact('content', 'events', 'merchendise'));
    }
}
