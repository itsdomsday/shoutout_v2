<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shout;
use Illuminate\Support\Facades\Storage;
use Auth;

class ShoutController extends Controller
{
    public function post_shout(Request $request)
    {
        $shout = new Shout;
        $shout->shout = $request->shout;
        $shout->user_id = $request->user_id;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,gif,png,jfif|max:2048'
            ]);

            $image = $request->file('image');
            $name = time() . "." . $image->getClientOriginalExtension();

            Storage::putFileAs('public/images', $image, $name);

            $shout->image = $name;
        } else {
            $shout->image = null;
        }

        $shout->save();
        return redirect()->route('home')->with('success', "Image uploaded!");
    }

    public function post_shoutpf(Request $request)
    {
        $shout = new Shout;
        $shout->shout = $request->shout;
        $shout->user_id = $request->user_id;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,gif,png,jfif|max:2048'
            ]);

            $image = $request->file('image');
            $name = time() . "." . $image->getClientOriginalExtension();

            Storage::putFileAs('public/images', $image, $name);

            $shout->image = $name;
        } else {
            $shout->image = null;
        }

        $shout->save();
        return redirect()->route('profile', [$shout->user_id])->with('success', "Image uploaded!");
    }

    public function del_shout($id)
    {
        $shout = Shout::find($id);

        if (Auth::user()->id == $shout->user->id) {
            $shout->delete();
            return redirect()->route('home')->with('success', "Shout deleted.");
        } else {
            return redirect()->route('home')->with('success', "Unable to delete shout.");
        }
    }

    public function del_shoutpf($id)
    {
        $shout = Shout::find($id);

        if (Auth::user()->id == $shout->user->id) {
            $shout->delete();
            return redirect()->route('profile', [$shout->user_id])->with('success', "Shout deleted.");
        } else {
            return redirect()->route('profile', [$shout->user_id])->with('success', "Unable to delete shout.");
        }
    }
}
