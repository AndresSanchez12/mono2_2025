<?php

namespace App\models\entities;

use App\models\drivers\ConexDB;

class Bill extends Model
{
    protected $id = null;
    protected $value = null;
    protected $idCategory = null;
    protected $idReport = null;


    public function all(){
        $conexDb = new ConexDB();
        $sql = "select * from bills";
        $res = $conexDb->exeSQL($sql);
        $bills = [];
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $bill = new Report();
                $bill->set('id', $row['id']);
                $bill->set('value', $row['value']);
                $bill->set('idCategory', $row['idCategory']);
                $bill->set('idReport', $row['idReport']);
                array_push($bills, $bill);
            }
        }   
        $conexDb->close();
        return $bills;

    }
    public function save(){

    }
    public function update(){

    }
    public function delete(){

    }


}