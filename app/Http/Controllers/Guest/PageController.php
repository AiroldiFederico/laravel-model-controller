<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{

    public function getMovies(){


        $movies = Movie::All(); //select * from books

        return view( 'pages.home', compact( 'movies' ) );
    }

}
