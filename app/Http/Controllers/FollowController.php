<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;
use Auth;

class FollowController extends Controller
{
    public function follow(Request $request)
    {

        $follow = Follow::where(['user_id' => Auth::user()->id, 'following' => $request->name])->first();

        if ($follow != null) {
            if (Auth::user()->id == $request->user_id) {
                $follow->delete();
                return redirect()->route('home');
            }
        } else {
            $follow = new Follow();
            $follow->following = $request->following;
            $follow->user_id = $request->user_id;
            $follow->save();

            return redirect()->route('home');
        }
    }
}
