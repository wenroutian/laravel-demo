<?php

namespace App\Http\Controllers;

use App\Post;
use App\Repositories\Criteria\Post\TagFilter;
use App\Repositories\PostRepositoryEloquent;
use Illuminate\Database\Query\Builder;


class PostController extends Controller
{
    public function index(PostRepositoryEloquent $repositories)
    {
        $post = $repositories->pushCriteria(TagFilter::class)->paginate();

        return view('post.index', compact('post'));
    }

    public function detail(Post $post)
    {
        return view('post.detail', compact('post'));
    }
}
