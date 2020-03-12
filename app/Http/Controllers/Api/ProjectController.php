<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create(Request $request)
    {
        $project = $this->projectService->create($request->all());
        if(!$project) {
            return $this->failed("Failed to create project");
        }
        return $this->success($project);
    }

    public function get(Request $request, $projectId = null)
    {
        if($projectId) {
            return $this->success($this->projectService->get($projectId));
        }

        return $this->success($this->projectService->getAll());
    }
}
