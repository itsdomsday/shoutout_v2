<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function post_com(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = $request->user_id;
        $comment->shout_id = $request->shout_id;
        $comment->save();

        return redirect()->route('home');
    }

    public function post_compf(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = $request->user_id;
        $comment->shout_id = $request->shout_id;
        $comment->save();

        return redirect()->route('profile', [$comment->shout->user_id]);
    }
}
