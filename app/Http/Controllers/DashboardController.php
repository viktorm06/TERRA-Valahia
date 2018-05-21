<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // NEWS
    public function new_add()
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
    public function categories()
    {
        $categories = \App\Category::all();
        return view('admin.categories', compact('categories'));
    }
    // EVENTS
    public function event_add()
    {
        return view('admin.add-event');
    }
    public function events_panel()
    {
        $events = \App\Event::latest()->get();
        return view('admin.events-panel', compact('events'));
    }
    // PARTNERS
    public function partener_add()
    {
        $partners = \App\Partner::latest()->get();
        return view('admin.partners', compact('partners'));
    }
    // MEMBERS
    public function member_add()
    {
        $members = \App\Member::all();
        return view('admin.members', compact('members'));
    }
}
