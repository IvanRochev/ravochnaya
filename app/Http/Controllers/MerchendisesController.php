<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchendisesController extends Controller
{
    public function index() {
        return view('frontend.merchendises');
    }

    public static function getMerchendiseHomeScope(){
        $merchendise = Merchandise::where('active', 1)
            ->where('deleted', 0)
            ->orderBy('created_at')
            ->take(4)
            ->get();
        return $merchendise;
    }
}
