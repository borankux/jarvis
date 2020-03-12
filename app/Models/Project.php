<?php

namespace App\Model;

use App\Models\Task;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id', 'id');
    }
}
