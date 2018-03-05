<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function news_add()
    {
        return view('admin.add-new');
    }
    public function news_panel()
    {
        $posts = \App\Mini_post::all();
        return view('admin.news-panel', compact('posts'));
    }
    public function post_edit($id)
    {
        $post = \App\Post::find($id);
        $mini_post = \App\Mini_post::find($id);
        return view('admin.edit-new', compact('post', 'mini_post'));
    }
    public function events_add()
    {
        return view('admin.add-event');
    }
    public function categories()
    {
        return view('admin.categories');
    }
    public function parteners_add()
    {
        return view('admin.partners');
    }
}
