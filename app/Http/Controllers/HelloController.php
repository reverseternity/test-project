<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HelloController extends Controller
{
    public function show() {
        return view('privet', ['data' => 'test']);
    }
}