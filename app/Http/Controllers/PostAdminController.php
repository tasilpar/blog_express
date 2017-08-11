<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostAdminController extends Controller
{
    //
    private $post;
    public function __construct(Post $post) {
        $this->post = $post;
    }
    public function index()
    {
        $posts = $this->post::paginate(5);
        
        return view('Admin.Posts.index',compact('posts'));
    }
    public function create()
    {
        return view('Admin.Posts.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
    
   
}
