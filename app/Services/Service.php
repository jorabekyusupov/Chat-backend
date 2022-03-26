<?php

namespace App\Services;

class Service
{
    protected object $repository;


    public function get($relation = null)
    {
        return $this->repository->query($relation);
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function edit($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function show($id, $relation = null)
    {
        return $this->repository->show($id, $relation);
    }

    public function delete($id)
    {
        return $this->repository->destroy($id);
    }


}
