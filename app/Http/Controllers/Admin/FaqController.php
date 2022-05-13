<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class FaqController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Exception
     */
    public function index(Request $request){
        if ($request->ajax()){
            $faq = Faq::whereStatus(Faq::ACTIVE)->get();
            $data = DataTables::of($faq)
                ->addIndexColumn()
                ->addColumn('actions',function($row){
                    $btn =  '<button class="m-2 btn btn-sm btn-primary edit_button" value="'.$row->id.'">Edit</button>';
                    $btn.=  '<button class="m-2 btn btn-sm btn-danger delete_button" value="'.$row->id.'">Delete</button>';
                    return $btn;
                })
                ->rawColumns(['actions'])
                ->make(true);
            return $data;
        }
        return view('backend.pages.faq.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'question' => 'required|max:191',
            'answer' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return response()->json([
            'status' => 200,
            'message' => "Faq Added Successfully"
        ]);
    }

    /**
     * @param Faq $faq
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Faq $faq){
        return response()->json([
            'status' => 200,
            'faq' => $faq
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Faq $faq)
    {
        $validator = Validator::make($request->all(),[
            'question' => 'required|max:191',
            'answer' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }

        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        return response()->json([
            'status' => 200,
            'message' => "Faq Updated Successfully"
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return response()->json([
            'status' => 200,
            'message' => "Faq Deleted successfully"
        ]);
    }

}
