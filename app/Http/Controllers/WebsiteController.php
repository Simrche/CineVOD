<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {
        return view('index');
    }

    public function films() {
        return view('films');
    }
}
