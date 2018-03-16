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
    public function create($id = null)
    {
        $event = new Event;
        $event -> create($id);
        return redirect()->back();
    }
    public function event_delete($id)
    {
        $event = new Event;
        $event -> del($id);
        return redirect()->back();
    }
    public function event_edit($id)
    {
        $event = Event::find($id);
        return view('admin.edit-event', compact('event'));
    }
}
