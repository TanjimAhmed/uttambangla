<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
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
        return view('posts.create');
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
            'name' => 'required',
            'work' => 'required',
            'education' => 'required',
            'profile_image' => 'image|nullable|max:1999',
            'company_name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'department' => 'required',
            'company_location' => 'required',
            'position' => 'required',
            'duty' => 'required',
            'language' => 'required',
            'location' => 'required',
            'email' => 'required|email',
        ]);
        // Handle File Upload
        if($request->hasFile('profile_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        $post = new Post();
        $post->name = $request->input('name');
        $post->user_id = auth()->user()->id;
        $post->work = $request->input('work');
        $post->education = $request->input('education');
        $post->profile_image = $fileNameToStore;
        $post->company_name = $request->input('company_name');
        $post->from = $request->input('from');
        $post->to = $request->input('to');
        $post->department = $request->input('department');
        $post->company_location = $request->input('company_location');
        $post->position = $request->input('position');
        $post->duty = $request->input('duty');
        $post->language = $request->input('language');
        $post->location = $request->input('location');
        $post->email = $request->input('email');
        $post->save();
        return redirect ('/')->with('message', 'Post Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
        return view('posts.edit')->with('post',$post);
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
            'name' => 'required',
            'work' => 'required',
            'education' => 'required',
            'company_name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'department' => 'required',
            'company_location' => 'required',
            'position' => 'required',
            'duty' => 'required',
            'language' => 'required',
            'location' => 'required',
            'email' => 'required|email',
        ]);
        // Handle File Upload
        if($request->hasFile('profile_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameToStore);
        }
        $post = Post::find($id);
        $post->name = $request->input('name');
        $post->work = $request->input('work');
        $post->education = $request->input('education');
        if($request->hasFile('profile_image')){
            $post->profile_image = $fileNameToStore;
        }
        $post->company_name = $request->input('company_name');
        $post->from = $request->input('from');
        $post->to = $request->input('to');
        $post->department = $request->input('department');
        $post->company_location = $request->input('company_location');
        $post->position = $request->input('position');
        $post->duty = $request->input('duty');
        $post->language = $request->input('language');
        $post->location = $request->input('location');
        $post->email = $request->input('email');
        $post->save();
        return redirect ('/')->with('message', 'Post Edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        // Check for correct user
        if(auth()->user()->id !==$post->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
        if($post->profile_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/profile_images/'.$post->profile_image);
        }
        $post->delete();
        return redirect('/')->with('message', 'Post Deleted successfully.');
    }
}
