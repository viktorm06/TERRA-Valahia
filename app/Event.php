<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function create($id)
    {
        if ($id != null) 
            $event = $this::find($id);
        else 
            $event = $this;
        $event->title = request('title');
        $event->body = request('body');
        $event->place = request('place');
        $event->date = request('date');
        $event->time = request('time');
        $event->save();
    }
    public function del($id)
    {
        $this::find($id)->delete();
    }
    // public function edit($id)
    // {
    //     $this::find($id);
    // }
}
