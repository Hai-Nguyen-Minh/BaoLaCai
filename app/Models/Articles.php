<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'id_user', 'title', 'type', 'img_path', 'smallcontent', 'fullcontent'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\Users');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Categories');
    }
}
