<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
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
        $blog = Blog::inRandomOrder()->limit(3)->get();
        return view('frontend.pages.index',['team'=>$team,'work'=>$work,'blog'=>$blog]);
    }
    public function about(){
        return view('frontend.pages.about');
    }

    public function terms(){
        return view('frontend.pages.service');
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

    public function blogs(Request $request){

        if (!empty($request->category)){
            $blog = Blog::where('category_id',$request->category)->simplePaginate(6);
            $selected_category = $request->category;

        }
       elseif  (!empty($request->search)){
            $blog = Blog::where('name', 'like', '%' . $request->search . '%')->simplePaginate(6);
        }
        else{
            $blog = Blog::inRandomOrder()->limit(6)->get();
        }
        if (empty($selected_category)){
            $selected_category = 0;
        }
        $recent_blog = Blog::limit(4)->get();
        $category = Category::all();
        return view('frontend.pages.blogs',['selected_category'=> $selected_category,'blog' => $blog,'category'=>$category,'recent_blog'=>$recent_blog]);
    }

    public function single_blog(Blog $blog){
        $recent_blog = Blog::limit(4)->get();
        $category = Category::all();
        $tags = [];
        foreach (  $blog->tags as $tag) {
            array_push($tags, $tag['name']);
        }
        $tag = implode(",",$tags);
        return view('frontend.pages.blog',['blog' => $blog,'blog_keyword'=>$tag,'category'=>$category,'recent_blog'=>$recent_blog]);
    }

    public function comment(Request $request, Blog $blog){
        $validated = $request->validate([
            'name' => 'required',
            'comment' => 'required',
        ]);

        $blog->comment()->create([
            'name' => $request->name,
            'message' => $request->comment,
        ]);

        $notification = array(
            'messege' => 'Thank you for your Comment!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }

    public function single_work(Work $work){
        $tags = [];
        foreach (  $work->tags as $tag) {
            array_push($tags, $tag['name']);
        }
        $tag = implode(",",$tags);
        return view('frontend.pages.single-work',['work'=>$work,'work_keyword' => $tag]);
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
