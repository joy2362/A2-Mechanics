<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisitorFeedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $feedback = VisitorFeedback::whereType(VisitorFeedback::MESSAGE)->get();
        return view('backend.pages.visitor.message.index',[
            "feedback" => $feedback,
        ]);
    }

    /**
     * @param VisitorFeedback $feedback
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(VisitorFeedback $feedback){
        return response()->json([
            'status' => 200,
            'feedback' => $feedback
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(VisitorFeedback $feedback)
    {
        $feedback->delete();

        $notification = array(
            'messege' => 'Feedback Delete Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
