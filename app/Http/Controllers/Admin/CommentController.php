<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Blog $blog){
        return view('backend.pages.blog.comment.index',['comment'=>$blog->comment]);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        $notification = array(
            'messege' => 'Comment Removed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
