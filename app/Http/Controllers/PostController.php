<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post ;/// this jsut an models nothing else 
class PostController extends Controller
{
    public function addpost(){
        
        return view('add-post'); 
    }
    /// This created post function in that function are to be used for 
    public function createPost(Request $request){
        $post = new Post(); /// Model type object or object type variable here 
        $post->title = $request->title ;
        $post->body = $request->body ;
        $post->save() ;
        return back()->with('post_created', 'Post has been created successfully!') ;
    }
    /// This function create for getData from database using Post model class 
    public function getPost(){
        $posts = Post::orderBy('id', 'ASC')->get(); 
        return view('posts', compact('posts'));   
    }
    ///Single Post
    public function singlePost($id){
        $post = Post::where('id', $id)->first();
        return view('single-view',compact('post'));
        //return back()->with('post_created', 'Post has been created successfully!') ;
    }
    /// Delete Post
    public function deletePost($id){
        Post::where('id' , $id)->delete() ;
        return back()->with('post_deleted', 'Post has been deleted successfully!');
    }
    /// Update Post
    public function updatePost($id){
        $post = Post::find($id) ;
        //return back()->with('post_updated', 'Post has been updated successfully!') ;
        return view('update', compact('post'));

    }
    public function finalUpdate(Request $request){
        $post = Post::find($request->id) ;
        $post->title = $request->title ;
        $post->body = $request->body ;
        $post->save() ;
        return back()->with('post_updated', 'Post has been updated successfully!') ;
    }
     
}
