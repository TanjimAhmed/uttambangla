<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Skill;
use App\Project;
use App\Item;
use DB;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $skills = Skill::all();
        $projects = Project::all();
        $items = Item::all();
        return view('pages.index', compact('posts','skills','projects','items'));
    }

}
