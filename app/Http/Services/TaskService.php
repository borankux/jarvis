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


    /**
     * @param int $taskId
     * @param array $params
     * @return bool
     */
    public function update(int $taskId, array $params) :bool
    {
        $task = Task::find($taskId);
        return $task->update($params);
    }

    /**
     * @param $taskId
     * @return bool
     */
    public function delete($taskId) : bool
    {
        try {
            return Task::find($taskId)->delete();
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return false;
        }
    }

    /**
     * @return array
     */
    public function getAll() :array
    {
        return Task::all()->toArray();
    }

    /**
     * @param int $taskId
     * @return Task
     */
    public function getOne(int $taskId):Task
    {
        return Task::find($taskId);
    }
}