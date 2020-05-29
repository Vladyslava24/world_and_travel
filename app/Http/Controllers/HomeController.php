<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Tour;
use App\Models\TourImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user()->email;
        $application = new Application();
        $application->visitor_email = $user;
        $application = Application::where('visitor_email', $user)->get();
        $specialOffer = DB::table('special_offers')
            ->join('applications', 'special_offers.id', '=', 'applications.special_offer_id')
            ->select('special_offers.*', 'applications.special_offer_id')
            ->where('visitor_email', $user)
            ->get();

        $popularTour = DB::table('popular_tours')
            ->join('applications', 'popular_tours.id', '=', 'applications.popular_tour_id')
            ->select('popular_tours.*', 'applications.popular_tour_id')
            ->where('visitor_email', $user)
            ->get();

        $tour = DB::table('tours')
            ->join('applications', 'tours.id', '=', 'applications.tour_id')
            ->select('tours.*', 'applications.tour_id')
            ->where('visitor_email', $user)
            ->get();

        $cruise = DB::table('cruises')
            ->join('applications', 'cruises.id', '=', 'applications.cruise_id')
            ->select('cruises.*', 'applications.cruise_id')
            ->where('visitor_email', $user)
            ->get();

        return view('home', ['applications' => $application, 'special_offers'=> $specialOffer,
            'popular_tours' => $popularTour, 'tours' => $tour, 'cruises'=> $cruise]);
    }
}
