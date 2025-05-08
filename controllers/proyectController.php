<?php

namespace App\controllers;

use App\models\entities\Bill;
use App\models\entities\Category;
use App\models\entities\Income;
use App\models\entities\Report;

class ProyectController
{
    public function saveNewIncome($resquest)
    {
        $model = new Income();//aqui vamos, toca mirar como metemos los dos registros a la base
        $model->set('nombre', $resquest['namePerson']);
        $model->set('email', $resquest['emailPerson']);
        $model->set('edad', $resquest['agePerson']);
        $res = $model->save();
        return $res ? 'yes' : 'not';
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

}
