<?php


namespace App\Http\Controllers\Services;


use App\Http\Services\BaseService;
use App\Models\Task;

class TaskService extends BaseService
{
    /**
     * @param array $params
     * @return Task
     */
    public function create(array $params = []) :Task
    {
        return Task::create($params);
    }
}