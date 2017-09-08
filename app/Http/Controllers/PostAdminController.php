<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostAdminController extends Controller
{
    //
    private $post;
    public function __construct(Post $post) {
        $this->post = $post;
    }
    /*
    public function auth()
    {
        $user = \App\User::find(1);
        Auth:login($user);
        
    }
      */
    
    
    public function index()
    {
        $posts = $this->post::paginate(5);
        
        return view('Admin.Posts.index',compact('posts'));
    }
    public function create()
    {
        return view('Admin.Posts.create');
    }
    public function store(PostRequest $request)
    {   
        //dd($tagsIDs);
        
        
        $post = $this->post->create($request->all());
        $post->tags()->sync($this->getTagsID($request->tags));
        return redirect()->route('admin.posts.index');
        
    }
    public function edit($id)
    {
        $post = $this->post->find($id);
        return view('Admin.Posts.edit', compact('post'));
    }
    public function update($id, PostRequest $request)
    {
        $this->post->find($id)->update($request->all());
        $post = $this->post->find($id);
        $post->tags()->sync($this->getTagsID($request->tags));
        return redirect()->route('admin.posts.index');
    }
    public function destroy($id)
    {
        $this->post->find($id)->delete();
        return redirect()->route('admin.posts.index');
    }
    private function getTagsID($tags)
    {
        $aTags = array_filter(array_map('trim',explode(',',$tags)));
        $tagsIDs = [];
        foreach($aTags as $tagName){
            $tagsIDs[] = Tag::firstOrCreate(['name' => $tagName])->id; 
        }
        return $tagsIDs;
    }
}
