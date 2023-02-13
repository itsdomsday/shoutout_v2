<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

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

    public function del_com($id)
    {
        $comment = Comment::find($id);

        if (Auth::user()->id == $comment->user_id) {
            $comment->delete();
            return redirect()->route('home')->with('success', "Comment deleted.");
        } else {
            return redirect()->route('home')->with('success', "Unable to delete comment.");
        }
    }

    public function del_compf($id)
    {
        $comment = Comment::find($id);

        if (Auth::user()->id == $comment->user_id) {
            $comment->delete();
            return redirect()->route('profile', [$comment->user_id])->with('success', "Comment deleted.");
        } else {
            return redirect()->route('profile', [$comment->user_id])->with('success', "Unable to delete comment.");
        }
    }
}
