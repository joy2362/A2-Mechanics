<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    public function index(){
        $founder_name = Settings::where('name',Settings::FOUNDER_NAME)->first();
        $founder_designation = Settings::select('value')->where('name',Settings::FOUNDER_DESIGNATION)->first();
        $founder_message = Settings::select('value')->where('name',Settings::FOUNDER_MESSAGE)->first();

        return view('backend.pages.owner.index',[
            "Founder_name" => $founder_name->value,
            "Founder_image" => $founder_name->OwnerImage,
            "Founder_designation" => $founder_designation->value,
            "Founder_message" => $founder_message->value,
        ]);
    }

    public function change_logo(Request $request){
        $request->validate([
            'image' => 'required',
        ]);

        $setting = Settings::where('name',Settings::FOUNDER_NAME)->first();

        if ($request->has('image')) {
            $setting->addMedia($request->file('image'))->toMediaCollection('owner_image');
        }

        $notification = array(
            'messege' => 'Image Changed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'message' => 'required',
        ]);

        Settings::where('name',Settings::FOUNDER_NAME)->update([
            'value' => $request->input('name')
        ]);

        Settings::where('name',Settings::FOUNDER_DESIGNATION)->update([
            'value' => $request->input('designation')
        ]);

        Settings::where('name',Settings::FOUNDER_MESSAGE)->update([
            'value' => $request->input('message')
        ]);

        $notification = array(
            'messege' => 'Owner Information Updated!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
