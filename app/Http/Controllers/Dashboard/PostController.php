<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Post;
use App\PostType;

class PostController extends BaseController
{
    public function index()
    {
        $posts = Post::latest()->get();

        return $this->view('post.index', compact('posts'));
    }

    public function create()
    {
        return $this->view('post.create');
    }

    public function store()
    {
        return request()->user();
    }

    public function createType()
    {
        $types = PostType::latest()->get();

        return $this->view('post.create-type', compact('types'));
    }

    public function storeType(Request $request)
    {
        PostType::create($request->only(['name', 'description']));

        return redirect(route('dashboard:post.type.create'))->withSuccess('Successfully created new type');
    }
}
