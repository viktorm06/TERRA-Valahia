<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public function del($id)
    {
        $this::find($id)->delete();
    }
}
