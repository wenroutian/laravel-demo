<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::with(['tag' => function ($query) {
            if (\request('tag_id')) {
                $query->where('id', '=', \request('tag_id'));
            }
        }])->paginate();

        return view('post.index', compact('post'));
    }

    public function detail(Post $post)
    {
        return view('post.detail', compact('post'));
    }
}
