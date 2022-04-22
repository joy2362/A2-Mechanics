<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Team;
use App\Models\VisitorFeedback;
use App\Models\Work;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){
        $work = Work::all();
        $team = Team::inRandomOrder()->limit(3)->get();
        return view('frontend.pages.index',['team'=>$team,'work'=>$work]);
    }
    public function about(){
        return view('frontend.pages.about');
    }

    public function problem(){
        $faq = Faq::whereStatus(Faq::ACTIVE)->simplePaginate(5);
        return view('frontend.pages.problem',['faq'=>$faq]);
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function team(){
        $team = Team::all();
        return view('frontend.pages.team',['team'=>$team]);
    }

    public function work(){
        $work = Work::all();
        return view('frontend.pages.work',['work'=>$work]);
    }

    public function single_work(Work $work){
        return view('frontend.pages.single-work',['work'=>$work]);
    }

    public function problem_create(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'question' => 'required',
            'attachment' => 'nullable',
        ]);

        $question = VisitorFeedback::create([
           'name'  => $request->name,
           'email'  => $request->email,
           'question'  => $request->question,
           'type'  => VisitorFeedback::QUESTION,
        ]);

        if ($request->hasFile('attachment')){
            $question->addMedia($request->file('attachment'))->toMediaCollection('attachment');
        }

        $notification = array(
            'messege' => 'Thank you for your question!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function feedback_create(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        VisitorFeedback::create([
            'name'  => $request->name,
            'email'  => $request->email,
            'subject'  => $request->subject,
            'message'  => $request->message,
            'type'  => VisitorFeedback::MESSAGE,
        ]);

        $notification = array(
            'messege' => 'Thank you for your feedback!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }


}
