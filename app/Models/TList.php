<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TList
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Task[] $tasks
 * @property-read int|null $tasks_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TList query()
 * @mixin \Eloquent
 */
class TList extends Model
{
    public function tasks()
    {
        return $this->hasMany(Task::class, 'list_id', 'id');
    }
}