<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function del($id)
    {
        $videos = $this::where('post_id', '=', $id)->get();
        foreach ($videos as $video){
            $video -> delete();
        }
    }
}
