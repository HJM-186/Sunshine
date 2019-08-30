<?php

namespace App\Http\Controllers\Post;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
///////////////////////////////////////*CREATE PAGE*//////////////////////////////////////////////
    public function create()
    {
        return view('post/create');
    }
//////////////////////////////////////*STORE POST*/////////////////////////////////////////////////
    public function store(StoreBlogPost $request)
    {
        Post::create(['title'=>$request->title,'body'=>$request->body,'user_id'=>Auth::user()->id]);
        $validated = $request->validated();
        return redirect()->route('home');
    }
///////////////////////////////////////*EDIT PAGE*////////////////////////////////////////////////
    public function edit($id)
    {
        $post = Post::find($id);
        return  view('post/edit',compact('post','id'));//Not understandabel
    }
////////////////////////////////////////*SAVINGS UPDATE*/////////////////////////////////////////
    public function update(Request $request,$id)
    {
        $post=Post::findOrFail($id);
        $post->title = $request->titleUpdate;
        $post->body = $request->bodyUpdate;
        $post->save();
        return redirect(route('home'));
    }
    //////////////////////////////////////////*DELETE POST*///////////////////////////////////
   public function delete($id)
   {
      $post = Post::find($id);
      $post->delete();
       return redirect(route('home'));
   }


}
