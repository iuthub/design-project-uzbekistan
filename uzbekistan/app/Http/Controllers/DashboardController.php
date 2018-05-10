<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        $title = 'Welcome to Uzbekistan';
        $user_id = auth()->user()->id;
        $user_type =auth()->user()->type;
        $user= User::find($user_id);
        if($user_type ==1){
        return view('dashboard')->with('posts',$user->posts);
        }else{
            return view('posts.index')
        }
    }
}
