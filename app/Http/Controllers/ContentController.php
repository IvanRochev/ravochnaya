<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index() {
        return view('frontend.content');
    }

    public static function getContentHomeScope(){
        $content = Content::where('deleted', 0)
            ->orderBy('created_at')
            ->take(8)
            ->get();
        return $content;
    }
}
