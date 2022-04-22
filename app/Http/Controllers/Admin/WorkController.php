<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $work = Work::all();
        return view('backend.pages.work.index',['work'=>$work,]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('backend.pages.work.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:191|unique:works,title',
            'description' => 'required',
            'image' => 'required',
            'tags' => 'required',
            'meta_description' => 'required|min:3|max:1000',
        ]);
        $tages =  explode(',', $request->tags);
        
        $work = Work::create([
            'title' => $request->title,
            'description' => $request->description,
            'meta_description' => $request->meta_description,
        ]);

        $work->addAllMediaFromRequest()->each(function ($fileAdder) {
            $fileAdder->toMediaCollection('attachments');
        });
        $work->syncTags($tages);
        
        $notification = array(
            'messege' => 'Work Added Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    /**
     * @param Work $work
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Work $work){
        $tags = [];
        foreach (  $work->tags as $tag) {
            array_push($tags, $tag['name']);
        }
        $tag = implode(",",$tags);
        return view('backend.pages.work.edit',['work'=>$work,'tags'=>$tag]);
    }

    public function show(Work $work){
        return view('backend.pages.work.show',['work'=>$work]);
    }

    /**
     * @param Request $request
     * @param Work $work
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request , Work $work){
        $request->validate([
            'title' => 'required|max:191|unique:works,title,' . $work->id,
            'description' => 'required',
            'tags' => 'required',
            'meta_description' => 'required|min:3|max:1000',
        ]);
        $tages =  explode(',', $request->tags);

        $work->title = $request->title;
        $work->description = $request->description;
        $work->meta_description = $request->meta_description;
        $work->save();

        $work->addAllMediaFromRequest()->each(function ($fileAdder) {
            $fileAdder->toMediaCollection('attachments');
        });

        $work->syncTags($tages);

        $notification = array(
            'messege' => 'Work Updated Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    /**
     * @param Work $work
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Work $work)
    {
        $work->delete();

        $notification = array(
            'messege' => 'Work Removed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
