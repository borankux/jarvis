<?php


namespace App\Http\Services;


use App\Model\Project;

class ProjectService extends BaseService
{
    /**
     * @param array $params
     * @return Project
     */
    public function create(array $params = []) :Project
    {
        return Project::create($params);
    }

    /**
     * @return array
     */
    public function getAll() :array
    {
        return Project::with(['tasks'])->get()->toArray();
    }

    /**
     * @param int $projectId
     * @return Project
     */
    public function get(int $projectId) :Project
    {
       $project =  Project::find($projectId);
       return $project;
    }

    /**
     * @param int $id
     * @param array $params
     * @return bool
     */
    public function update(int $id, array $params = []) :bool
    {
        $project = Project::find($id);
        return $project->update($params);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id):bool
    {
        try {
            return Project::find($id)->delete();
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return false;
        }
    }
}