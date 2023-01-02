<?php

namespace App\Http\Controllers\Frontend;

use App\Model\WatchList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WatchlistController extends Controller
{
    public function index()
    {
        return view('frontend.watchlist.index');
    }

    public function store(Request $request)
    {
        $watchlist = new WatchList();
        $watchlist->movie_id = $request->movie_id;
        $watchlist->user_id = $request->user_id;
        $watchlist->save();
    }
}
