<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function article()
    {
        return $this->belongsTo('App\Models\Articles');
    }
}
