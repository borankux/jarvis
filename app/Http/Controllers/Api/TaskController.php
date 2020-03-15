<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(Request $request)
    {
        $task = $this->taskService->create($request->all());
        return $this->success($task);
    }

    public function get(Request $request, $taskId = null)
    {
        if(!$taskId) {
            $tasks =  $this->taskService->getAll();
            return $this-$this->success($tasks);
        }

        $task = $this->taskService->getOne($taskId);
        return $this->success($task);
    }
}
