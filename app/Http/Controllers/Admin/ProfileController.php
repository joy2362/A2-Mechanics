<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function image_update(Request $request){
        $request->validate([
            'image' => 'required',
        ]);

        $user = User::find(Auth::id());

        if ($request->has('image')) {
            $user->addMedia($request->file('image'))->toMediaCollection('avatar');
        }

        $notification = array(
            'messege' => 'Profile Image Changed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function profile_edit(){
        return view('backend.pages.profile.profile');
    }

    public function profile_setting(){
        return view('backend.pages.profile.index');
    }

    public function recoveryCodeShow(){
        return view('backend.pages.profile.recovery');
    }
}
