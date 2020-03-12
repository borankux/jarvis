<?php


namespace App\Http\Controllers\Traits;



use App\Http\Controllers\Services\TaskService;
use App\Http\Services\ProjectService;

trait InjectServices
{
    protected $projectService;
    protected $taskService;

    public function __construct(ProjectService $projectService, TaskService $taskService)
    {
        $this->projectService = $projectService;
        $this->taskService = $taskService;
    }
}