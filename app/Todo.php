<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = array('title', 'done', 'priority', 'updated_at');
}
