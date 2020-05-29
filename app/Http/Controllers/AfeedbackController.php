<?php

namespace App\Http\Controllers;

use App\Http\Requests\AfeedbackRequest;
use App\Models\Feedback;
use App\Models\Visitor;
use Illuminate\Http\Request;

class AfeedbackController extends Controller
{
    public function sendFeedback(AfeedbackRequest $req){
        $visitor = Visitor::firstOrCreate([ 'name' => $req->input('name'),
            'email' => $req->input('email')]);
        $feedback = new Feedback();
        $feedback->status = true;
        $feedback->feedback =  $req->input('feedback');
        $feedback->visitor_email = $visitor->email;
        $feedback->save();
        return view("send-feedback");
    }
}
