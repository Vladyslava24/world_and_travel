<?php

namespace App\Http\Controllers;


use App\Models\Cruise;
use Illuminate\Http\Request;

class CruiseController extends Controller
{
    public function allData(){
        $cruise = new Cruise();
        return view('container_cruise', ['cruises' => $cruise->orderBy('id', 'asc')->take(9)->get()]);
    }

    public function showOneCruise($id){
        $cruise= new Cruise();
        return view('cruise-data-one', ['cruise' => $cruise->find($id)]);
    }
}
