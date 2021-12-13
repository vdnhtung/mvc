<?php

namespace MVC\src\Core;

use MVC\src\Config\Database;
use PDO;

class ResourceModel implements ResourceModelInterface
{
    private $table;
    private $id;
    private $model;

    public function _init($table, $id, $model)
    {
        $this->table = $table;
        $this->id = $id;
        $this->model = $model;
    }

    public function save($model)
    {

        $arrayModel = $model->getProperties();
        
        // die;
        $arrValue = [];
        if ($model->getId() === null) {
            unset($arrayModel[$this->id]); // loại bỏ id ra khỏi mảng
        }

        foreach ($arrayModel as $key => $value) {
            array_push($arrValue, ':' . $key); // tạo placeholder
        }

        $arr2 = [];

        foreach (array_keys($arrayModel) as $key => $value) {
            if ($value !== $this->id) {
                array_push($arr2, $value . ' = :' . $value);
            }
        }

        $arr2 = implode(',', $arr2);
        $colName = implode(',', array_keys($arrayModel));
        $val = implode(',', $arrValue);

        if ($model->getId() === null) {
            $sql = "INSERT INTO {$this->table} ({$colName}) VALUES ({$val})";
            $req = Database::getBdd()->prepare($sql);
            $date = array("created_at" => date("Y-m-d H:i:s"), "updated_at" => date("Y-m-d H:i"));
            $data = array_merge($arrayModel, $date);
            return $req->execute($data);
        } else {
            $arr2 = str_replace(",created_at = :created_at", "", $arr2);
            unset($arrayModel['created_at']);
            $sql = "UPDATE {$this->table} SET {$arr2} WHERE {$this->id} = :{$this->id}";
            $req = Database::getBdd()->prepare($sql);
            $date = array($this->id => $model->getId(), "updated_at" => date("Y-m-d H:i"));

            $data = array_merge($arrayModel, $date);
            return $req->execute($data);
        }
    }

    public function delete($model)
    {
        $sql = "DELETE FROM {$this->table} WHERE {$this->id} = {$model->getId()}";
        $req = Database::getBdd()->prepare($sql);
        return $req->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE {$this->id} = $id";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();

        return $req->fetchObject(get_class($this->model));
        // return $req->fetch();
    }

    public function getAll($model)
    {
        // $properties = implode(',', array_keys($model->getProperties()));
        $sql = "SELECT * FROM {$this->table}";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_CLASS,get_class($this->model));
    }
}
