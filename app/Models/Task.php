<?php

namespace App\Models;

use App\Model\Project;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function list()
    {
        return $this->belongsTo(TList::class, 'list_id', 'id');
    }
}
