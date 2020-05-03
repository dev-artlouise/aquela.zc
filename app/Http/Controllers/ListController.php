<?php

//this controls the cart list for apartment units
namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function add(Unit $unit){

        //add unit to list
        \Cart::session(auth()->id())->add(array(
            'id' => $unit->id,
            'name' => $unit->name,
            'price' => $unit->price,
            'qty' => 1,
            'attributes' => array(),
            'associatedModel' => $unit 
        ));

        return redirect()->route('list.index');
    }

    public function index(){
        $listItems = \Cart::session(auth()->id())->getContent();

        return view('list.index', compact('listItems'));
    }

    public function destroy($itemId){  

        \Cart::session(auth()->id())->remove($itemId);

        return back();
    }

    public function reserve(){

        return view('list.reserve');
    }

}
