<?php

namespace App\controllers;

use App\models\entities\Bill;

class BillController
{

    public function getAllBills()
    {
        $model = new Bill();
        $bills = $model->all();
        return $bills;
    }

    public function saveNewPerson($resquest)
    {
        $model = new Bill();
        $model->set('nombre', $resquest['namePerson']);
        $model->set('email', $resquest['emailPerson']);
        $model->set('edad', $resquest['agePerson']);
        $res = $model->save();
        return $res ? 'yes' : 'not';
    }

    public function updatePerson($resquest){
        $model = new Bill();
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
