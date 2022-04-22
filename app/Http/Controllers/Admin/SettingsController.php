<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $app_name = Settings::where('name',Settings::APP_NAME)->first();
        $app_email = Settings::select('value')->where('name',Settings::APP_EMAIL)->first();
        $app_mobile = Settings::select('value')->where('name',Settings::APP_MOBILE)->first();
        $about_us = Settings::where('name',Settings::ABOUT_US)->first();
        $address = Settings::select('value')->where('name',Settings::ADDRESS)->first();
        $facebook = Settings::select('value')->where('name',Settings::FACEBOOK)->first();
        $twitter = Settings::select('value')->where('name',Settings::TWITTER)->first();
        $linkedin = Settings::select('value')->where('name',Settings::LINKEDIN)->first();
        $instagram = Settings::select('value')->where('name',Settings::INSTAGRAM)->first();
        $footer_description = Settings::select('value')->where('name',Settings::FOOTER_DESCRIPTION)->first();
        $social_network_description = Settings::select('value')->where('name',Settings::SOCIAL_NETWORK_DESCRIPTION)->first();


        return view('backend.pages.settings.index',[
            "App_Name" => $app_name->value,
            "App_logo" => $app_name->AppLogo,
            "App_Mobile" => $app_mobile->value,
            "App_Email" => $app_email->value,
            "About_Us" => $about_us->value,
            "About_Us_Image" => $about_us->AboutUsImage,
            "Address" => $address->value,
            "Facebook" => $facebook->value,
            "Twitter" => $twitter->value,
            "Linkedin" => $linkedin->value,
            "Instagram" => $instagram->value,
            "Footer_Description" => $footer_description->value,
            "Social_Network_Description" => $social_network_description->value,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function change_logo(Request $request){
        $request->validate([
            'image' => 'required',
        ]);

        $setting = Settings::where('name',Settings::APP_NAME)->first();

        if ($request->has('image')) {
            $setting->addMedia($request->file('image'))->toMediaCollection('app_logo');
        }

        $notification = array(
            'messege' => 'Logo Changed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function change_about_us_image(Request $request){
        $request->validate([
            'aboutUs' => 'required',
        ]);

        $setting = Settings::where('name',Settings::ABOUT_US)->first();

        if ($request->has('aboutUs')) {
            $setting->addMedia($request->file('aboutUs'))->toMediaCollection('feather_image');
        }

        $notification = array(
            'messege' => 'About us Image Changed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'about_us' => 'required',
            'address' => 'required',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
            'instagram' => 'nullable',
            'social_network_description' => 'required',
            'footer_description' => 'required',
        ]);

        Settings::where('name',Settings::APP_NAME)->update([
            'value' => $request->input('name')
        ]);

        Settings::where('name',Settings::APP_EMAIL)->update([
            'value' => $request->input('email')
        ]);

        Settings::where('name',Settings::APP_MOBILE)->update([
            'value' => $request->input('phone')
        ]);

        Settings::where('name',Settings::ABOUT_US)->update([
            'value' => $request->input('about_us')
        ]);

        Settings::where('name',Settings::ADDRESS)->update([
            'value' => $request->input('address')
        ]);

        Settings::where('name',Settings::FACEBOOK)->update([
            'value' => $request->input('facebook')
        ]);

        Settings::where('name',Settings::TWITTER)->update([
            'value' => $request->input('twitter')
        ]);

        Settings::where('name',Settings::LINKEDIN)->update([
            'value' => $request->input('linkedin')
        ]);

        Settings::where('name',Settings::INSTAGRAM)->update([
            'value' => $request->input('instagram')
        ]);

        Settings::where('name',Settings::SOCIAL_NETWORK_DESCRIPTION)->update([
            'value' => $request->input('social_network_description')
        ]);

        Settings::where('name',Settings::FOOTER_DESCRIPTION)->update([
            'value' => $request->input('footer_description')
        ]);


        $notification = array(
            'messege' => 'Setting Updated Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
