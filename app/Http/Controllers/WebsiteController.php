<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {
        return view('index');
    }

    public function deco() {
        session(['admin' => null]);
        return redirect()->route('category.index');
    }
}
