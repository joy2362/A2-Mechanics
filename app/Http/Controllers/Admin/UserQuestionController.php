<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisitorFeedback;
use Illuminate\Http\Request;

class UserQuestionController extends Controller
{
    public function index(){
        $question = VisitorFeedback::whereType(VisitorFeedback::QUESTION)->get();
        return view('backend.pages.visitor.question.index',[
            "question" => $question,
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(VisitorFeedback $question)
    {
        $question->delete();

        $notification = array(
            'messege' => 'Question Delete Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
