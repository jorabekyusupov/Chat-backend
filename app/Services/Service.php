<?php

namespace App\Services;

class Service
{
    protected object $repository;


    public function get($relation = null)
    {
        return $this->repository->query($relation);
    }

    public function create($params): object
    {
        return $this->repository->store($params);
    }

    public function edit($id, $params): object
    {
        return $this->repository->update($id, $params);
    }

    public function show($id, $relation = null): object
    {
        return $this->repository->show($id, $relation);
    }

    public function delete($id): bool
    {
        return $this->repository->destroy($id);
    }


}
