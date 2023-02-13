<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plus;
use Auth;

class PlusController extends Controller
{
    public function create(Request $request){

        $plus = Plus::where(['user_id' => Auth::user()->id, 'shout_id' => $request->shout_id])->first();

        if ($plus != null) {
            return redirect()->route('home')->with('success', "Bawal");
        } else {
        $plus = new Plus();
        $plus->plus = $request->plus;
        $plus->user_id = $request->user_id;
        $plus->shout_id = $request->shout_id;
        $plus->save();

        return redirect()->route('home');
        }
    }
}
