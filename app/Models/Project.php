<?php

namespace App\Model;

use App\Models\Task;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Project
 *
 * @property int $id
 * @property string $title
 * @property int $status
 * @property string|null $icon
 * @property string|null $readme
 * @property string|null $deadline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Task[] $tasks
 * @property-read int|null $tasks_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project whereReadme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Project whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'readme',
        'deadline'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id', 'id');
    }
}
