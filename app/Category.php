<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function del($id)
    {
        $this::find($id)->delete();
    }
}
