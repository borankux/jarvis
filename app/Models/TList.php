<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TList extends Model
{
    public function tasks()
    {
        return $this->hasMany(Task::class, 'list_id', 'id');
    }
}