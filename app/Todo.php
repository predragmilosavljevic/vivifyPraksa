<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = array('title', 'done', 'priority', 'user_id');


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
