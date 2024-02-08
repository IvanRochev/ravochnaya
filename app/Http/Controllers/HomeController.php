<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContentController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\MerchendisesController;
use Illuminate\Http\Request;

/**
 * Контроллер лейаута домашней страницы
 * 1) ивенты
 * 2) 
 */

class HomeController extends Controller
{
    public function index() {
        $content = ContentController::getHomeScope();
        $events = EventsController::getHomeScope();
        $merchendise = MerchendisesController::getHomeScope();
        
        return view('app.home');
    }
}
