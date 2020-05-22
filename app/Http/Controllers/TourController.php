<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function allData(){
        $tour = new Tour();
        return view('container_tour', ['tour_containers' => $tour->orderBy('id', 'asc')->take(6)->get()]);
    }

    public function showOneTour($id){
        $tour = new Tour();
        return view('tour-data', ['tour' => $tour->find($id)]);
    }
}
