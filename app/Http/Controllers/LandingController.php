<?php

namespace App\Http\Controllers;

use App\Models\PopularTour;
use App\Models\SpecialOffer;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function allData(){
        $tour = new PopularTour();
        $offer = new SpecialOffer();
        //return view('messages', ['data' => contact->all()]);
        return view('landing', ['special_offers' => $offer->orderBy('id', 'asc')->take(4)->get(),
            'tours' => $tour->orderBy('id', 'asc')->take(6)->get()]);
    }

    public function showOneTour($id){
        $tour = new PopularTour();
        return view('tour-data-one', ['tour' => $tour->find($id)]);
    }

    public function showOneSale($id){
        $sale = new SpecialOffer();
        return view('desc_sale', ['sale' => $sale->find($id)]);
    }
}
