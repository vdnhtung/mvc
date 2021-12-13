<?php

namespace MVC\src\Models;

use MVC\src\Core\Model;

class StudentModel extends Model
{
    protected $name;
    protected $studentId;
    protected $gender;
    protected $dob;
    protected $created_at;
    protected $updated_at;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->studentId;
    }

    public function setId($id)
    {
        $this->studentId = $id;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getdob()
    {
        return $this->dob;
    }

    public function setdob($dob)
    {
        $this->dob = $dob;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
