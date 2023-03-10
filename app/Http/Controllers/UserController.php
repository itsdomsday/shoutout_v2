<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Auth;

class UserController extends Controller
{
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password != $request->confirmpassword) {
            return redirect()->route('settings', Auth::user()->id)->with('success', "Passwords do not match.");
        } else {
            $user->password = $request->password;
        }

        $user->save();
        return redirect()->route('profile', Auth::user()->id)->with('success', "Account updated!");
    }

    public function editprof(Request $request, $id)
    {

        $user = User::find($id);
        if ($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => 'required|image|mimes:jpeg,jpg,gif,png,jfif|max:2048'
            ]);

            $image1 = $request->file('avatar');
            $name1 = time() . "." . $image1->getClientOriginalExtension();

            Storage::putFileAs('public/images', $image1, $name1);

            $user->avatar = $name1;
        } else {
            $user->avatar = null;
        }

        if ($request->hasFile('banner')) {
            $request->validate([
                'banner' => 'required|image|mimes:jpeg,jpg,gif,png,jfif|max:2048'
            ]);

            $image2 = $request->file('banner');
            $name2 = time() . "." . $image2->getClientOriginalExtension();

            Storage::putFileAs('public/images', $image2, $name2);

            $user->banner = $name2;
        } else {
            $user->banner = null;
        }

        $user->bios = $request->bios;
        $user->save();
        return redirect()->route('profile', Auth::user()->id)->with('success', "Profile updated!");
    }
}
