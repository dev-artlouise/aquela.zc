<?php

namespace App\Http\Controllers;

use App\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApartmentActivationRequest;
use App\User;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apartments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required',
        ]);
        
        //save to database
        $apartment = auth()->user()->apartment()->create([
            'name' => $request->input('name'),
            'information' => $request->input('information'),
        ]);

        //send mail to admin
        $admins = User::whereHas('role', function ($q) {
            $q->where('name', 'admin');
        })->get(); 

        Mail::to($admins)->send(new ApartmentActivationRequest($apartment));
         

        return redirect()->route('home')->withMessage('Request for Opening an Apartment has been Sent');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {   
        return view('apartments.show');
        //dd($apartment->owner->name. 'Welcome to your Apartment', $apartment->name);
    }

    
    public function search(Request $request)
    {
        $query = $request->input('query');

        //apartment name and location
        $apartments = Apartment::WHERE('address', 'LIKE', "%$query%")->get();

        return view('apartments.catalog', compact('apartments'));
    }
        
   
}
