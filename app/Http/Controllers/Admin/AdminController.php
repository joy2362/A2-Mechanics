<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $admin = User::whereNotIn('id',[auth()->user()->id])->get();
        return view('backend.pages.admin.index',['admin'=>$admin]);
    }

    public function create()
    {
        return view('backend.pages.admin.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|email||unique:users,email',
            'image' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('image')){
            $user->addMedia($request->image)->toMediaCollection('avatar');
        }

        $notification = array(
            'messege' => 'Admin Added Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function edit(User $user){
        return view('backend.pages.admin.edit',['admin'=>$user]);
    }

    public function update(Request $request,User $user){
        $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|email||unique:users,email,'.$user->id,
        ]);

        if ($request->hasFile('image')){
            $user->addMedia($request->image)->toMediaCollection('avatar');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $notification = array(
            'messege' => 'Admin Update Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();

        $notification = array(
            'messege' => 'Admin Removed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
