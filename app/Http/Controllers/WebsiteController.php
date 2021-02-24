<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {
        return redirect()->route('category.index');
    }

    public function deco() {
        session(['admin' => null]);
        return redirect()->route('category.index');
    }

    public function notAuth() {
        return view('notauth');
    }
}
