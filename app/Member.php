<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function del($id)
    {
        $this->find($id)->delete();
    }
}
