<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use App\Http\Controllers\FilesController as File;

class Event extends Model
{
    public function create($id)
    {
        if ($id != null) 
            $event = $this::find($id);
        else {
            $event = $this;
            $id = $this::max('id') + 1;
        }
 
        if (request()->hasFile('banner')){
            File::create_event_banner($id);
        }

        $event->title = request('title', '');
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
