<?php

namespace App\controllers;

use App\models\entities\Income;
use App\models\entities\Report;

class IncomeController
{

    public function getAllIncomes()
    {
        $model = new Income();
        $incomes = $model->all();
        return $incomes;
    }

    public function saveNewIncome($request)
    {
       
    }
    

    public function updateIncome($resquest){
        $model = new Income();
        $model->set('id', $resquest['idPerson']);
        $model->set('nombre', $resquest['namePerson']);
        $model->set('email', $resquest['emailPerson']);
        $model->set('edad', $resquest['agePerson']);
        $res = $model->update();
        return $res ? 'yes' : 'not';
    }
/*
    public function removePerson($id){
        $model = new Bill();
        $model->set('id', $id);
        if(empty($model->find())){
            return "empty";
        }
        $res =  $model->delete();
        return $res ? 'yes' : 'not';
    }

    public function getPersona($id){
        $model = new Bill();
        $model->set('id', $id);
        return $model->find();
    }
    */
}
