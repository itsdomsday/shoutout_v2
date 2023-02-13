<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plus;
use Auth;

class PlusController extends Controller
{
    public function plus_one(Request $request)
    {

        $plus = Plus::where(['user_id' => Auth::user()->id, 'shout_id' => $request->shout_id])->first();

        if ($plus != null) {
            if (Auth::user()->id == $request->user_id) {
                $plus->delete();
                return redirect()->route('home');
            }
        } else {
            $plus = new Plus();
            $plus->plus = $request->plus;
            $plus->user_id = $request->user_id;
            $plus->shout_id = $request->shout_id;
            $plus->save();

            return redirect()->route('home');
        }
    }

    public function plus_onepf(Request $request)
    {

        $plus = Plus::where(['user_id' => Auth::user()->id, 'shout_id' => $request->shout_id])->first();

        if ($plus != null) {
            if (Auth::user()->id == $request->user_id) {
                $plus->delete();
                return redirect()->route('profile', [$plus->shout->user_id]);
            }
        } else {
            $plus = new Plus();
            $plus->plus = $request->plus;
            $plus->user_id = $request->user_id;
            $plus->shout_id = $request->shout_id;
            $plus->save();

            return redirect()->route('profile', [$plus->shout->user_id]);
        }
    }
}
