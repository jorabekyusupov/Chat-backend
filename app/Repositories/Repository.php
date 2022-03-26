<?php

namespace App\Repositories;

class Repository {
    protected object $model;

    public function query($relation = null)
    {
        if($relation){
            return $this->model->with(...$relation);
        }
        return $this->model->query();
    }

    public function store($data)
    {
        $data['auth_id'] = auth()->id();
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $data['auth_id'] = auth()->id();
        $model = $this->query();
        $model = $model->find($id);
        $model->update($data);
        return $model;
    }

    public function show($id,  $relation = null)
    {
        $model = $this->query($relation);
        return $model->find($id);
    }

    public function destroy($id)
    {
        $model = $this->query();
        $model = $model->find($id);
        return $model->delete($model);
    }
}
