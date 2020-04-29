<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class UnitController extends Controller
{
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
