<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HelloController extends Controller
{

    public function showgreeting() {
        return view('privet', ['data' => 'test']);
    }

    public function showthanks() {
        return view('thanks', ['data' => 'test']);
    }   

}
