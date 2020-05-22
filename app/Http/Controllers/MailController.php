<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationCreated;
use App\Models\PopularTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
        public function ship(Request $request, $popularTourId)
        {
            $popularTour = PopularTour::findOrFail($popularTourId);

            // Доставка заказа...

            Mail::to($request->user())->send(new ($popularTour));
        }
}
