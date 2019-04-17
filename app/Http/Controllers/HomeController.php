<?php

namespace App\Http\Controllers;

use App\Repositories\Criteria\Tag\CountTag;
use App\Repositories\TagRepository;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(TagRepository $tag)
    {
        $tag_info = $tag->pushCriteria(new CountTag())->all();
        return view('home', compact('tag_info'));
    }
}
