<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()){
            $faq = Category::all();
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
        return view('backend.pages.category.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:191|unique:categories,name',
        ]);

        if ($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return response()->json([
            'status' => 200,
            'message' => "Category Added Successfully"
        ]);
    }

    public function edit(Category $category){
        return response()->json([
            'status' => 200,
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:191|unique:categories,name,' . $category->id,
        ]);

        if ($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }

        $category->name = $request->name;
        $category->save();

        return response()->json([
            'status' => 200,
            'message' => "Category Updated Successfully"
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'status' => 200,
            'message' => "Category Deleted successfully"
        ]);
    }
}
