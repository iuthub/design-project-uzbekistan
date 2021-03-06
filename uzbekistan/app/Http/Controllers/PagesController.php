<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
public function index() 
{       $title = 'Welcome to Uzbekistan';
        // return view('pages.index' , compact('title'));
        return view('pages.index' )->with('title',$title);
    
}

public function about() 
{       
        $title = 'About us';
        return view('pages.about')->with('title',$title);
    
}

public function services() 
{
        $data=array(
                'title'=>'Services',
                'services'=>['Web design','programing','SEO'],
        );
        return view('pages.services')->with($data);
    
}

public function taxi() 
{
        
        return view('services.taxi_order');
    
}

public function hotel() 
{
       
  return view('services.hotel_order');
    
}

public function rest() 
{
       
        
        return view('services.restaurant_reserving');
    
}
}