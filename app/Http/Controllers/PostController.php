<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use resources\views\firstpage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
 
        return view('posts.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        $request->validate([
 
            'name' => 'required',
     
            'address' => 'required',
            'symb' => 'required',
     
            ]);
     
            Post::create($request->all());
           // $request=Post::all();
     
            return redirect()->route('posts.index')
     
                    ->with('success','Marksheet created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'symb' => 'required',
            ]);
     
            $post->update($request->all());
     
            return redirect()->route('posts.index')->with('success','Marksheet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
 
 
 
        return redirect()->route('posts.index')
 
                ->with('success','Marksheet deleted successfully');
    }


   public function disp()
   {
       include view("firstpage");
       $uname=$_POST['fname'];
       $upass=$_POST['password'];
       if(strcmp("$uname","deardh")==0 && strcmp("$upass","1234")==0)
       {
           echo "login successful";
       }
       else{
          echo "login failed";
       }
       //return view('firstpage');
   }
}