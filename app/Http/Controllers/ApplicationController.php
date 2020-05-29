<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Models\Application;
use App\Models\Cruise;
use App\Models\PopularTour;
use App\Models\SpecialOffer;
use App\Models\Tour;
use App\Models\Visitor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;

class ApplicationController extends Controller
{
    public function submitPopularTourApplication($id, ApplicationRequest $req){
        $visitor= Visitor::firstOrCreate([ 'name' => $req->input('name'),
            'email' => $req->input('email')]);
        $popularTour = PopularTour::find($id);
        $application = new Application();
        $application->status = true;
        $application->date = Carbon::today();
        $application->popular_tour_id = $popularTour->id;
        $application->visitor_email = $visitor->email;
        $application->save();
        return view("send-application");
    }

    public function submitSpecialOfferApplication($id, ApplicationRequest $req){
        $visitor= Visitor::firstOrCreate([ 'name' => $req->input('name'),
            'email' => $req->input('email')]);
        $specialOffer = SpecialOffer::find($id);
        $application = new Application();
        $application->status = true;
        $application->date = Carbon::today();
        $application->special_offer_id = $specialOffer->id;
        $application->visitor_email = $visitor->email;
        $application->save();
        return view("send-application");
    }

    public function submitTourApplication($id, ApplicationRequest $req){
        $visitor= Visitor::firstOrCreate([ 'name' => $req->input('name'),
            'email' => $req->input('email')]);
        $tour = Tour::find($id);
        $application = new Application();
        $application->status = true;
        $application->date = Carbon::today();
        $application->tour_id = $tour->id;
        $application->visitor_email = $visitor->email;
        $application->save();
        return view("send-application");
    }

    public function submitCruiseApplication($id, ApplicationRequest $req){
        $visitor= Visitor::firstOrCreate([ 'name' => $req->input('name'),
            'email' => $req->input('email')]);
        $cruise =Cruise::find($id);
        $application = new Application();
        $application->status = true;
        $application->date = Carbon::today();
        $application->cruise_id = $cruise->id;
        $application->visitor_email = $visitor->email;
        $application->save();
        return view("send-application");
    }

    public function showAllApplications($email){
        $application = new Application();
        return view('home', ['applications' => $application->orderBy('id', 'desc')->take(20)->get()]);
    }

    /*public function deleteApplication($id){
        Application::find($id)->delete();
        return redirect()->route('tour')->with('success',
            'Книга была удалена');
    }*/

    public function showOnePopularTour($id){
        $popularTour = new PopularTour();
        return view('tour-data-one', ['popular_tour' => $popularTour->find($id)]);
    }
}
