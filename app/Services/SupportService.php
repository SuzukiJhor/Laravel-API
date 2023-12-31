<?php

namespace App\Services;

use App\Repositories\SupportRepositoryInterface;

class SupportService
{
    private $repository;

    public function __construct(SupportRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getSupports(string $status = 'P')
    {
        $data = $this->repository->getByStatus($status);
        return convertArrayToObject($data);
    }

    public function getSupportById(string $id)
    {
        return $this->repository->findById(($id));
    }

}