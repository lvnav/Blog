<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function displayFeed() 
    {
        $movies = DB::table('movie')->orderBy('release_date', 'desc')->limit(20)->get();
        return view('homeView', compact('movies'));
    }
}
