<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchendisesController extends Controller
{
    public function index() {
        return view('frontend.merchendises');
    }
}
