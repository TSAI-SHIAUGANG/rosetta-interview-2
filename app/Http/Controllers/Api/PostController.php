<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Model
use App\Post;

// Request
use App\Http\Requests\Api\Post\CreateRequest;
use App\Http\Requests\Api\Post\UpdateRequest;

class PostController extends Controller
{

    public function index(Request $request)
    {
        $posts = Post::paginate(10);
        return response()->json(compact('posts'), 200);
    }

    public function create(CreateRequest $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
        ]);

        return response()->json(['sucess' => true, 'post' => $post], 200);
    }

    public function show(Request $request, Post $post)
    {
        return response()->json(['sucess' => true, 'post' => $post], 200);
    }

    public function update(UpdateRequest $request, Post $post)
    {
        $columns = ['title', 'subtitle', 'content'];
        foreach($columns as $column){
            if($request->{$column}) $post->{$column} = $request->{$column};
        }
        $post->save();

        return response()->json(['sucess' => true, 'post' => $post], 200);
    }

    public function delete(Request $request, Post $post)
    {
        return response()->json(['sucess' => $post->delete()], 200);
    }

}
