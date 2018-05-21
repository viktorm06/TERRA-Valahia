<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Post extends Model
{
    public function images()
    {
        return $this->hasMany('App\Gallery');
    }
    public function videos()
    {
        return $this->hasMany('App\Video');
    }
    public function search($s){
        // $query = "select * from mini_posts where lower(title) or lower(short_body) like lower('%" . $s . "%')";
        // $posts = DB::select(DB::raw($query));
        // dd($posts);

        $posts = Mini_post::where('title', 'like', '%' . $s . '%')
            ->orWhere('short_body', 'like', '%' . $s . '%')->simplePaginate(5);
            // foreach($searcher as $word) {
            //     $list->where(;'LOWER(title)', 'LIKE', '%' . strtolower($word) . '%');
            //     $list->orWhere('LOWER(name)', 'LIKE', '%' . strtolower($word) . '%');
            //   }
    //     BookingDates::where('email', Input::get('email'))
    // ->orWhere('name', 'like', '%' . Input::get('name') . '%')->get();
        return $posts;
    }
}
