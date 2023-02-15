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

    public function trending()
    {
        return view('trending')->with('shouts', Shout::orderBy('updated_at', 'desc')->get());
    }

    public function profile($id){
        return view('profile')->with('user', User::find($id))->with('shouts', Shout::orderBy('updated_at', 'desc')->get());
    }

    public function settings($id){
        return view('settings')->with('user', User::find($id))->with('shouts', Shout::orderBy('updated_at', 'desc')->get());
    }

    public function editprofile($id){
        return view('editprofile')->with('user', User::find($id))->with('shouts', Shout::orderBy('updated_at', 'desc')->get());
    }

    public function viewshout($id){
        return view('viewshout')->with('shouts', Shout::find($id));
    }

    public function photos($id){
        return view('photos')->with('user', User::find($id))->with('shouts', Shout::orderBy('updated_at', 'desc')->get());
    }

    public function shoutoutabout($id){
        return view('shoutoutabout')->with('shoutoutabout', Shout::find($id));
    }

    public function aboutde($id){
        return view('aboutde')->with('aboutde', Shout::find($id));
    }
}
