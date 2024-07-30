<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::all());
    }

    public function show($id)
    {
        $post = Post::find($id);
        if ($post) {
            return response()->json($post);
        }
        return response()->json(['message' => 'Post not found'], 404);
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->update($request->all());
            return response()->json($post);
        }
        return response()->json(['message' => 'Post not found'], 404);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return response()->json(['message' => 'Post deleted successfully']);
        }
        return response()->json(['message' => 'Post not found'], 404);
    }
}
