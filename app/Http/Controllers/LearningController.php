<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function topic($slug)
    {
        // Ensure the slug corresponds to an existing view
        if (view()->exists('learn.' . $slug)) {
            return view('learn.' . $slug);
        }
        abort(404);
    }
}