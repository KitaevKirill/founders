<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostNew;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $answer = PostNew::search($request->q)->get();

        return view('services.search', ['answer' => $answer, 'search' => $request->q]);
    }
}


