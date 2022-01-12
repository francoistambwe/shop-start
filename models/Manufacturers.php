<?php
require_once 'models/Model.php';

class Manufacturers extends Model{

    public function all() {
        $sql = "SELECT * FROM manufacturers ORDER BY name";
        return $this->getAll($sql);
    }

    public function one(int $id) {
        $sql = "SELECT * FROM manufacturers WHERE id=?";
        return $this->getOne($sql, [$id]);
    }

}