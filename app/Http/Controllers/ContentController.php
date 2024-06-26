<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index() {
        $contents = Content::GetAllContentPaginate(4);
        return view('frontend.content', compact('contents'));
    }
}
