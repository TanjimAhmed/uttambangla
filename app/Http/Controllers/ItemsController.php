<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use DB;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('items.create');
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
            'location' => 'required',
            'work' => 'required',
            'duty' => 'required',
        ]);
        $item = new Item();
        $item->user_id = Auth()->user()->id;
        $item->name = $request->input('name');
        $item->location = $request->input('location');
        $item->work = $request->input('work');
        $item->duty = $request->input('duty');
        $item->save();
        return redirect('/')->with('message', 'New Company Created.');
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
        $item = Item::find($id);
        // Check for correct user
        if(auth()->user()->id !== $item->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
        return view('items.edit')->with('item', $item);
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
            'location' => 'required',
            'work' => 'required',
            'duty' => 'required',
        ]);
        $item = Item::find($id);
        $item->user_id = Auth()->user()->id;
        $item->name = $request->input('name');
        $item->location = $request->input('location');
        $item->work = $request->input('work');
        $item->duty = $request->input('duty');
        $item->save();
        return redirect('/')->with('message', 'Informations Edited Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        // Check for correct user
        if(auth()->user()->id !== $item->user_id){
            return redirect('/')->with('error', 'Unauthorized Page');
        }
        $item->delete();
        return redirect('/')->with('message', 'Post Deleted successfully.');
    }
}
