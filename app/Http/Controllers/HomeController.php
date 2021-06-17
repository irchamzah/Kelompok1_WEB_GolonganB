<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hashids\Hashids;
use App\Models\Category;
use App\Models\Layanan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hash = new Hashids();

        $layanans=Layanan::orderBy('id', 'DESC')->paginate(5);
        return view('welcome', compact('layanans', 'hash'));
    }
}
