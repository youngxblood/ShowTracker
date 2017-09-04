<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;

class ShowsController extends Controller
{
    public function index()
    {
        $shows = Show::orderBy('created_at', 'desc')->paginate(5);
        return view('pages.home')->with('shows', $shows);
    }

    public function create()
    {
        return view('shows.create');
    }
}
