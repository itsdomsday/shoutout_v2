<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shout;
use App\Models\User;
use App\Models\Follow;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with('shouts', Shout::orderBy('updated_at', 'desc')->get());
    }

    public function profile($id){
        return view('profile')->with('user', User::find($id));
    }

    public function viewshout($id){
        return view('viewshout')->with('shouts', Shout::find($id));
    }

    public function photos($id){
        return view('photos')->with('user', User::find($id));
    }
}
