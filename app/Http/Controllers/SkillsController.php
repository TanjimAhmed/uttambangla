<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use DB;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'company_name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'department' => 'required',
            'position' => 'required',
            'location' => 'required',
            'duty' => 'required',
            ]);

        $skill = new Skill();
        $skill->user_id = Auth()->user()->id;
        $skill->company_name = $request->input('company_name');
        $skill->from = $request->input('from');
        $skill->to = $request->input('to');
        $skill->department = $request->input('department');
        $skill->position = $request->input('position');
        $skill->location = $request->input('location');
        $skill->duty = $request->input('duty');
        $skill->save();

        return redirect('/')->with('message', 'New Experience created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('skills.edit')->with('skill', $skill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'company_name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'department' => 'required',
            'position' => 'required',
            'location' => 'required',
            'duty' => 'required',
            ]);

        $skill = Skill::find($id);
        $skill->company_name = $request->input('company_name');
        $skill->from = $request->input('from');
        $skill->to = $request->input('to');
        $skill->department = $request->input('department');
        $skill->position = $request->input('position');
        $skill->location = $request->input('location');
        $skill->duty = $request->input('duty');
        $skill->save();

        return redirect('/')->with('message', 'Experience  edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);
        if(auth()->user()->id !==$skill->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
        $skill->delete();
        return redirect('/')->with('message', 'Experience removed successfully.');
    }
}
