<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->wantsJson()){
            $user = Team::all();
            $data = DataTables::of($user)
                ->addIndexColumn()
                ->addColumn('logo',function($row){
                    return  '<a href="'.$row->avatar.'"><img src="'.$row->avatar.'" width="60px" height="60px" alt="image"></a>';

                })
                ->addColumn('actions',function($row){
                        $btn =  '<button class="m-2 btn btn-sm btn-primary edit_button" value="'.$row->id.'">Edit</button>';
                        $btn.=  '<button class="m-2 btn btn-sm btn-danger delete_button" value="'.$row->id.'">Delete</button>';
                    return $btn;
                })
                ->rawColumns(['logo','actions'])
                ->make(true);
            return $data;
        }


        return view("backend.pages.team.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:191',
            'designation' => 'required|min:3',
            'avatar' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }

        $team = Team::create([
            'name' => $request->name,
            'designation'=> $request->designation,
        ]);

        if ($request->has('avatar')) {
            $team->addMedia($request->file('avatar'))->toMediaCollection('avatar');
        }

        return response()->json([
            'status' => 200,
            'message' => "Team Member Added Successfully"
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  Team  $team
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Team $team)
    {
        // return  $user->roles;
        return response()->json([
            'status' => 200,
            'team' => $team,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Team $team)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:191',
            'designation' => 'required|min:3',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()){
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->save();

        if ($request->has('avatar')) {
            $team->addMedia($request->file('avatar'))->toMediaCollection('avatar');
        }

        return response()->json([
            'status' => 200,
            'message' => "Team Member Update Successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return response()->json([
            'status' => 200,
            'message' => "Team Member Removed Successfully"
        ]);
    }

}
