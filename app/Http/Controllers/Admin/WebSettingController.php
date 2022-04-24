<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebSettings;
use Illuminate\Http\Request;

class WebSettingController extends Controller
{

    public function index(){
        return view('backend.pages.web-setting.index');
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
