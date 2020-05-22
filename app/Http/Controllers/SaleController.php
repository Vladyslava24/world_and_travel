<?php

namespace App\Http\Controllers;

use App\Models\SpecialOffer;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function allData(){
        $sale = new SpecialOffer();
        //return view('messages', ['data' => contact->all()]);
        return view('sales', ['sales' => $sale->orderBy('id', 'asc')->take(2)->get()]);
    }
    public function showOneSale($id){
        $sale = new SpecialOffer();
        return view('one-sale', ['sale' => $sale->find($id)]);
    }
}
