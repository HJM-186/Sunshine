<?php

namespace App\Http\Controllers\Admin;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewAllPostController extends Controller
{
    public function viewAllPost($id)
    {
        $posts  = User::find($id)->posts;
        return view('admin/post',compact('posts'));
    }
}
