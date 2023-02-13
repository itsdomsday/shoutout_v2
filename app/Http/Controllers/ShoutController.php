<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shout;
use Auth;

class ShoutController extends Controller
{
    public function create(Request $request){
        $shout = new Shout;
        $shout->shout = $request->shout;
        $shout->user_id = $request->user_id;
        $shout->save();
        return redirect()->route('home')->with('success', "New shout posted!");
    }

    public function delete($id){
        $shout = Shout::find($id);

        if (Auth::user()->id == $shout->user->id){
            $shout->delete();
            return redirect()->route('home')->with('success', "Shout deleted.");
        } else {
            return redirect()->route('home')->with('success', "Unable to delete shout.");
        }
    }
}
