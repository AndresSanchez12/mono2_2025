<?php

namespace App\models\entities;

use App\models\drivers\ConexDB;

class Report extends Model
{
    protected $id = null;
    protected $month = '';
    protected $year = null;


    public function all(){
        $conexDb = new ConexDB();
        $sql = "select * from reports";
        $res = $conexDb->exeSQL($sql);
        $reports = [];
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $report = new Report();
                $report->set('id', $row['id']);
                $report->set('month', $row['month']);
                $report->set('year', $row['year']);
                array_push($reports, $report);
            }
        }
        $conexDb->close();
        return $reports;

    }
    public function save(){

    }
    public function update(){

    }
    public function delete(){

    }
    



}