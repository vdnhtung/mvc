<?php

namespace MVC\src\Models;

class StudentRepository
{
    private $studentResource;

    public function __construct()
    {
        $this->studentResource = new StudentResource();
    }

    public function get($id)
    {
        return $this->studentResource->get($id);
    }

    public function getAll($model)
    {
        return $this->studentResource->getAll($model);
    }

    public function add($model)
    {
        return $this->studentResource->save($model);
    }

    public function update($model)
    {
        return $this->studentResource->save($model);
    }

    public function delete($model)
    {
        return $this->studentResource->delete($model);
    }
}
