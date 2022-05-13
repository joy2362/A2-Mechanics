<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::with('category')->get();
        return view('backend.pages.blog.index',['blog'=>$blog,]);
    }

    public function create()
    {
        $category = Category::all();
        return view('backend.pages.blog.create',['category'=>$category]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:191',
            'description' => 'required',
            'image' => 'required',
            'tags' => 'required',
            'category' => 'required',
            'meta_description' => 'required|min:3|max:1000',
        ]);
        $tages =  explode(',', $request->tags);

        $blog = Blog::create([
            'name' => $request->name,
            'description' => $request->description,
            'meta_description' => $request->meta_description,
            'category_id' => $request->category,
        ]);
        if ($request->has('image')) {
            $blog->addMedia($request->file('image'))->toMediaCollection('attachment');
        }
        $blog->syncTags($tages);

        $notification = array(
            'messege' => 'Blog Added Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
    public function show(Blog $blog){
        return view('backend.pages.blog.show',['blog'=>$blog]);
    }

    public function edit(Blog $blog){
        $tags = [];
        foreach (  $blog->tags as $tag) {
            array_push($tags, $tag['name']);
        }
        $tag = implode(",",$tags);
        $category = Category::all();
        return view('backend.pages.blog.edit',['blog'=>$blog,'tags'=>$tag,'category'=>$category]);
    }

    public function update(Request $request , Blog $blog){
        $request->validate([
            'name' => 'required|max:191',
            'description' => 'required',
            'category' => 'required',
            'meta_description' => 'required|min:3|max:1000',
        ]);
        $tages =  explode(',', $request->tags);

        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->meta_description = $request->meta_description;
        $blog->category_id = $request->category;
        $blog->save();


        if ($request->has('image')) {
            $blog->addMedia($request->file('image'))->toMediaCollection('attachment');
        }
        $blog->syncTags($tages);

        $notification = array(
            'messege' => 'Blog Updated Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        $notification = array(
            'messege' => 'Blog Removed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
