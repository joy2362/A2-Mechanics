<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebSettings;
use Illuminate\Http\Request;

class WebSettingController extends Controller
{

    private function fetchSetting($name){
        return  WebSettings::where('name',$name)->first();
    }

    private function fetchTags($tags){
        $keyword = [];
        foreach (  $tags as $tag) {
            array_push($keyword, $tag['name']);
        }
        return implode(",",$keyword);
    }

    public function index(){
        $home = $this->fetchSetting(WebSettings::HOME_PAGE);
        $about = $this->fetchSetting(WebSettings::ABOUT_PAGE);
        $blog = $this->fetchSetting(WebSettings::BLOG_PAGE);
        $work = $this->fetchSetting(WebSettings::WORK_PAGE);
        $team = $this->fetchSetting(WebSettings::TEAM_PAGE);
        $problem = $this->fetchSetting(WebSettings::PROBLEM_PAGE);
        $contact = $this->fetchSetting(WebSettings::CONTACT_PAGE);

       // dd($home);
        $home_tag = $this->fetchTags($home->tags);
        $about_tag = $this->fetchTags($about->tags);
        $blog_tag = $this->fetchTags($blog->tags);
        $work_tag = $this->fetchTags($work->tags);
        $team_tag = $this->fetchTags($team->tags);
        $problem_tag = $this->fetchTags($problem->tags);
        $contact_tag = $this->fetchTags($contact->tags);

        return view('backend.pages.web-setting.index',[
            'home' => $home,
            'about' => $about,
            'blog' => $blog,
            'work' => $work,
            'team' => $team,
            'problem' => $problem,
            'contact' => $contact,
            'home_tag' => $home_tag,
            'about_tag' => $about_tag,
            'blog_tag' => $blog_tag,
            'work_tag' => $work_tag,
            'team_tag' => $team_tag,
            'problem_tag' => $problem_tag,
            'contact_tag' => $contact_tag,
        ]);

    }

    public function update(Request $request , WebSettings $websetting){
        $request->validate([
            'title' => 'required|max:191',
            'subtitle' => 'required',
            'tags' => 'required',
            'meta_description' => 'required|min:3|max:1000',
        ]);
        $tages =  explode(',', $request->tags);

        $websetting->title = $request->title;
        $websetting->sub_title = $request->subtitle;
        $websetting->meta_description = $request->meta_description;
        $websetting->save();

        $websetting->syncTags($tages);

        $notification = array(
            'messege' => 'Work Updated Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
