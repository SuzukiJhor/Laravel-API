<?php

namespace App\Repositories\Eloquent;

use App\Models\Course as Model;
use App\Repositories\CourseRepositoryInterface;

class CourseRepository implements CourseRepositoryInterface
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll(string $filter = ''): array
    {
        $admins = $this->model
            ->where(function ($query) use ($filter) {
                if ($filter) {
                    $query->orWhere('name', 'LIKE', "%{$filter}%");
                }
            })
            ->get();

        return $admins->toArray();
    }

    public function findById(string $id): object|null
    {
        $course = $this->model->find($id);

        return $course;
    }

    public function create(array $data): object
    {
        return $this->model->create($data);
    }

    public function update(string $id, array $data): object|null
    {   
        if (!$course = $this->findById($id)) {
            return null;
        }
        
        $course->update($data);

        return $course;
    }

    public function delete(string $id): bool
    {
        if (!$course = $this->findById($id)) {
            return false;
        }

        return $course->delete();
    }
}
