<?php

namespace App\Repositories\Eloquent;

use App\Models\Lesson as Model;
use App\Repositories\LessonRepositoryInterface;

class LessonRepository implements LessonRepositoryInterface
{
    private $model;

    public function __construct(Model $lesson)
    {
        $this->model = $lesson;
    }

    public function getAllByModuleId(string $moduleId, string $filter = ''): array
    {
        $data = $this->model
            ->where(function ($query) use ($filter) {
                if ($filter) {
                    $query->orWhere('name', 'LIKE', "%{$filter}%");
                }
            })
            ->where('module_id', $moduleId)
            ->get();

        return $data->toArray();
    }

    public function findById(string $id): ?object
    {
        $lesson = $this->model->find($id);

        return $lesson;
    }

    public function createByModule(string $moduleId, array $data): object
    {
        $data['module_id'] = $moduleId;
      
        return $this->model->create($data);
    }

    public function update(string $id, array $data): ?object
    {   
        if (!$lesson = $this->findById($id)) {
            return null;
        }
        
        $lesson->update($data);

        return $lesson;
    }

    public function delete(string $id): bool
    {
        if (!$lesson = $this->findById($id)) {
            return false;
        }

        return $lesson->delete();
    }
}
