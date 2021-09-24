<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joke;

class JokeController extends Controller
{
    public function store(Request $request)
    {
        $joke = new Joke;

        $joke->joke_genre = $request->joke_genre;

        $joke->joke_coolness = $request->joke_coolness;

        $joke->joke = $request->joke;

        $joke->save();
    }

    public function show() {
        return Joke::all()->get();
    }

}
