<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Tradition;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tradition=Tradition::all();
        $posts=Post::all();
        $user_id = auth()->user()->id;
        $user= User::find($user_id);
        $user_type = $user->user_type;
        if($user_type ==1){
        return view('dashboard')->with('posts',$posts)->with('traditions',$tradition);
        }else{
            return view('posts.index')->with('posts', $posts);
        }
        
    }

}
