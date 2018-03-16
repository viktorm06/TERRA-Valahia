<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Mini_post;
use App\Video;
use App\Http\Controllers\FilesController as File;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Mini_post::orderBy('id', 'desc')->simplePaginate(5);
        return view('news', compact('posts'));
    }
    public function index_category($category)
    {
        $posts = Mini_post::where('category', '=', $category)->orderBy('id', 'desc')->simplePaginate(2);
        return view('news', compact('posts'));
    }
    public function show($id)
    {
        
        $post = Post::find($id);
        $mini_post = Mini_post::find($id);
        return view('showNews', compact('post', 'mini_post'));
    }
    public function create($id = null)
    {   
        if ($id == null){
            $mini_post = new Mini_post;
            $post = new Post;
            $video = new Video; 
        }
        else {
            $mini_post = Mini_post::find($id);
            $post = Post::find($id);
            $video = $post->videos[0];
        }
        $mini_post->title = request('title');
        $mini_post->short_body = request('short_body');
        $mini_post->category = request('category');
        $mini_post->save();
        
        $post->body = request('body');
        $post->save();

        if (request('video')){
            $video->video_src = request('video');
            $video->post_id = $post->id;
            $video->save();
        }
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
