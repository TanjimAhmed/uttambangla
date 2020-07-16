<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Project;
use DB;

class ProjectsController extends Controller
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
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = New Project();
        return view('projects.create',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'article' => 'required',
            'project_image' => 'image|nullable|max:1999',
        ]);

        // Handle File Upload
        if($request->hasFile('project_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('project_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('project_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('project_image')->storeAs('public/project_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $project = New Project();
        $project->user_id = auth()->user()->id;
        $project->title = $request->input('title');
        $project->body = $request->input('body');
        $project->article = $request->input('article');
        $project->project_image = $fileNameToStore;
        $project->save();
        return redirect('/')->with('message', 'Project created successfully.');
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
        $project = Project::find($id);
        if(auth()->user()->id !==$project->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
        return view('projects.edit')->with('project', $project);
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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'article' => 'required'
        ]);

        // Handle File Upload
        if($request->hasFile('project_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('project_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('project_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('project_image')->storeAs('public/project_images', $fileNameToStore);
        }

        $project = Project::find($id);
        $project->title = $request->input('title');
        $project->body = $request->input('body');
        $project->article = $request->input('article');
        if($request->hasFile('project_image')){
            $project->project_image = $fileNameToStore;
        }
        $project->save();
        return redirect('/')->with('message', 'Project edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if(auth()->user()->id !==$project->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
        if($project->profile_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/project_images/'.$project->project_image);
        }
        $project->delete();
        return redirect('/')->with('message', 'Project Removed');
    }
}
