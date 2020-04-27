<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($unit)
    {
        $unit = Unit::findOrFail($unit);

        return view('units.show',[
            'unit' => $unit,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unit 
     * @return \Illuminate\Http\Response
     */
    public function show($unit)
    {
        $unit = Unit::findOrFail($unit);

        return view('units.show',[
            'unit' => $unit,
        ]); 
    }
}
