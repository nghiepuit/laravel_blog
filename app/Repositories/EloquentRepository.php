<?php
namespace App\Repositories;

abstract class EloquentRepository implements IRepository
{

    protected $model;

    public function __construct()
    {
        $this->getModel();
    }


    abstract function setModel();

    private function getModel()
    {
        $model = $this->setModel();
        $this->model = app()->make($model);
    }

    public function getAll()
    {
        return $this->model->latest()->get();
    }

    public function find($id)
    {
        $result = $this->model->findOrFail($id);
        return $result;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $result = $this->model->findOrFail($id);
        if($result) {
            $result->update($data);
            return $result;
        }
        return false;
    }

    public function delete($id)
    {
        $result = $this->model->findOrFail($id);
        if($result) {
            $result->delete();
            return true;
        }

        return false;
    }
}