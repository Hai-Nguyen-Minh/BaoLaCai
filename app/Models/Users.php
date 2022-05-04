<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'username', 'pass'
    ];
    public function article()
    {
        return $this->hasMany('App\Models\Articles');
    }
}
