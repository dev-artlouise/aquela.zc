<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Apartment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $units = Unit::take(8)->get();
        //$apartments = Apartment::inRandomOrder()->take(8)->get();

       /*return view('home',[
            'units' => $units,
        ]);
        */
        return view('home')->with('units', $units);
        
    }
}
