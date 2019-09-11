<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'body' => 'required|max:2000',
        ]);

        $post = Post::findOrFail($params['post_id']);
        $post->comments()->create($params);

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function destroy($comment_id)
    {
        $comment = Comment::findOrFail($comment_id);
        $post = Post::findOrFail($comment->post_id);

        $comment->delete();

        return redirect()->route('posts.show', ['post' => $post]);
    }
}
