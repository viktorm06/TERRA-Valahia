<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Mini_post;
use App\Http\Controllers\FilesController as File;
// use Intervention\Image\ImageManagerStatic as Image;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Mini_post::all();
        return view('news', compact('posts'));
    }
    public function index_category($category)
    {
        $posts = Mini_post::where('category', '=', $category)->get();
        return view('news', compact('posts'));
    }
    public function show($id)
    {
        
        $post = Post::find($id);
        return view('showNews', compact('post'));
    }
    public function create($id = null)
    {   
        if ($id == null){
            $mini_post = new Mini_post;
            $post = new Post; 
        }
        else {
            $mini_post = Mini_post::find($id);
            $post = Post::find($id);
        }
        $mini_post->title = request('title');
        $mini_post->short_body = request('short_body');
        $mini_post->category = request('category');
        $mini_post->save();
        
        $post->body = request('body');
        $post->save();
        File::create_photo_for_post($id);
        File::create_gallery_for_post($id);
        return redirect()->back();
    }
    public function post_delete($id)
    {
        File::delete_post_photos($id);
        $post = Post::find($id);
        $post->delete();
        $post = Mini_post::find($id);
        $post->delete();
        return back();
    }
}
