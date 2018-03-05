<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }
    public function create()
    {
        // dd(request()->all());
        $event = new Event;
        $event->title = request('title');
        $event->body = request('body');
        $event->place = request('place');
        $event->date = request('date');
        $event->time = request('time');
        $event->save();

        return redirect()->back();
    }
}
