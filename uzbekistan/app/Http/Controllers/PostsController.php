<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 
use DB;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
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
    
        $posts =Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    // public function index($type){
    //     if(is_null($type))
    //     {
    //         return view('smth')->with('posts',Post::orderBy('type', 'asc'));
    //     }
    //     return view('smth')->with('posts',Post::where($type)->orderBy('created_at', 'desc'));               
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
            'title'=> 'required',
            'body'=> 'required',
            'cover_image'=>'image|nullable|max:1999'
        ]);

        //handle file upload
            if($request->hasFile('cover_image'))
            {       //get file name and ext
                  $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
                    /// Get just file name
                        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                    ///Get just ext
                    $extension =$request->file('cover_image')->getClientOriginalExtension();
                        //file name to store
                    $fileNameToStore= $filename. '_'.time().'.'.$extension;
                    /// upload image
                    $path=$request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            }else
            {
                $fileNameToStore = 'noimage.png';
            }


        ///////
            $post =  new Post;
            $post->pre_title = $request->input('pre_title');
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->quote =$request->input('quote');
            $post->title = $request->input('author');
            $post->user_id = auth()->user()->id;
            $post->cover_image = $fileNameToStore;
            $post->save();
            return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);

        //chech for correct user
        if(auth()->user()->type !== 1)
        {
            return redirect('/posts')->with('error', 'Unauthorized Page');    
        }
        return view('posts.edit')->with('post', $post);
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
            'title'=> 'required',
            'body'=> 'required',
            'cover_image'=>'image|nullable|max:1999'
        ]);


        if($request->hasFile('cover_image'))
        {       //get file name and ext
              $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
                /// Get just file name
                    $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                ///Get just ext
                $extension =$request->file('cover_image')->getClientOriginalExtension();
                    //file name to store
                $fileNameToStore= $filename. '_'.time().'.'.$extension;
                /// upload image
                $path=$request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }else
        {
            $fileNameToStore = 'noimage.jpg';
        }
            $post =  Post::find($id);
            $post->pre_title = $request->input('pre_title');
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->quote =$request->input('quote');
            $post->title = $request->input('author');
            $post->user_id = auth()->user()->id;
            $post->cover_image = $fileNameToStore;
            $post->save();
            return redirect('/posts')->with('success','Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
          //chech for correct user
          if(auth()->user()->id !== $post->user_id)
          {
              return redirect('/posts')->with('error', 'Unauthorized Page');    
          }

          if($post->cover_image !='noimage.png')
          {
              Storage::delete('public/cover_images/'.$post->cover_image);
          }
        $post->delete();
        return redirect('/posts')->with('success','Post Removed');

         
    }
}
