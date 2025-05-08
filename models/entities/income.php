<?php

namespace App\models\entities;

use App\models\drivers\ConexDB;

class Income extends Model
{
    protected $id = null;
    protected $value = null;
    protected $idReport = null;


    public function all(){
        $conexDb = new ConexDB();
        $sql = "select * from income";
        $res = $conexDb->exeSQL($sql);
        $incomes = [];
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $income = new Income();
                $income->set('id', $row['id']);
                $income->set('value', $row['value']);
                $income->set('idReport', $row['idReport']);
                array_push($incomes, $income);
            }
        }
        $conexDb->close();
        return $incomes;

    }
    public function save(){
  
}

    public function update(){

    }
    public function delete(){

    }


}