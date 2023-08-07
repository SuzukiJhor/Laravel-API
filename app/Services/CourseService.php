<?php

namespace App\Services;

use App\Repositories\CourseRepositoryInterface;

class CourseService
{
    private $repository;

    public function __construct(CourseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAll(string $filter = ''): array
    {   
        $courses = $this->repository->getAll($filter);

        return convertArrayToObject(($courses));
    }

    public function create(array $data)
    {
        $this->repository->create($data);
    }

    public function findById(string $id): ?object
    {
        return $this->repository->findById($id);
    }

    public function update(string $id, array $data)
    {
        return $this->repository->update($id, $data);
    }
}
