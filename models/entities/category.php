<?php

namespace App\models\entities;

use App\models\drivers\ConexDB;

class Category extends Model
{
    protected $id = null;
    protected $name = '';
    protected $percentage = null;


    public function all(){
        $conexDb = new ConexDB();
        $sql = "select * from categories";
        $res = $conexDb->exeSQL($sql);
        $categories = [];
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $category = new Category();
                $category->set('id', $row['id']);
                $category->set('name', $row['name']);
                $category->set('percentage', $row['percentage']);
                array_push($categories, $category);
            }
        }
        $conexDb->close();
        return $categories;

    }
    public function save(){

    }
    public function update(){

    }
    public function delete(){

    }


}