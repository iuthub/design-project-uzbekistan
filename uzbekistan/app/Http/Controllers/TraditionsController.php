<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tradition;
use App\Image;
use App\Paragraph;
use App\Type;

class TraditionsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	// $tr = Tradition::all();
    	// return view('traditions.index')->with('traditions', $tr);
        //      $tr = Tradition::where('type','=',$type)->get();
        // return view('traditions.index')->with('traditions', $tr)->with('types', Type::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('traditions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    		 $this->validate($request,[
            'name'=> 'required',
            'description'=> 'required',
            'img'=>'image|nullable|max:1999'
        ]);

        //handle file upload
            if($request->hasFile('img'))
            {       //get file name and ext
                  $filenameWithExt=$request->file('img')->getClientOriginalName();
                    /// Get just file name
                        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                    ///Get just ext
                    $extension =$request->file('img')->getClientOriginalExtension();
                        //file name to store
                    $fileNameToStore= $filename. '_'.time().'.'.$extension;
                    /// upload image
                    $path=$request->file('img')->storeAs('public/traditions', $fileNameToStore);
            }else
            {
                $fileNameToStore = 'noimage.png';
            }


        ///////
            $post =  new Tradition;
            $post->name = $request->input('name');
            $post->description = $request->input('description');
            $post->user_id = auth()->user()->id;
            $post->img = $fileNameToStore;
            $post->save();
            return redirect('/traditions')->with('success','Tradition Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($type)
    {
        $tr = Tradition::where('type','=',$type)->get();
    	return view('traditions.index')->with('traditions', $tr)->with('types', Type::get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $post= Tradition::find($id);

        //chech for correct user
        if(auth()->user()->type !== 1)
        {
            return redirect('/traditions')->with('error', 'Unauthorized Page');    
        }
        return view('traditions.edit')->with('tradition', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'name'=> 'required',
            'description'=> 'required',
            'img'=>'image|nullable|max:1999'
        ]);

        //handle file upload
            if($request->hasFile('img'))
            {       //get file name and ext
                  $filenameWithExt=$request->file('img')->getClientOriginalName();
                    /// Get just file name
                        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                    ///Get just ext
                    $extension =$request->file('img')->getClientOriginalExtension();
                        //file name to store
                    $fileNameToStore= $filename. '_'.time().'.'.$extension;
                    /// upload image
                    $path=$request->file('img')->storeAs('public/traditions', $fileNameToStore);
            }else
            {
                $fileNameToStore = 'noimage.png';
            }


        ///////
            $post = Tradition::find($id);;
            $post->name = $request->input('name');
            $post->description = $request->input('description');
            $post->user_id = auth()->user()->id;
            $post->img = $fileNameToStore;
            $post->save();
            return redirect('/traditions')->with('success','Tradition Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $post= Tradition::find($id);
        //chech for correct user
        if(auth()->user()->id !== $post->user_id)
        {
            return redirect('/posts')->with('error', 'Unauthorized Page');    
        }

        if($post->img !='noimage.png')
        {
            Storage::delete('public/traditions/'.$post->img);
        }
      $post->delete();
      return redirect('/traditions')->with('success','Tradition Removed');
    }
    }

