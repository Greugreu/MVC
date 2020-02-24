<?php

namespace App\Controller;

use App\Controller\DefaultController;
use App\Model\FruitModel;
use App\Weblitzer\Controller;


class FruitController extends DefaultController
{

    public function index()
    {
        $message = 'Fruit';

        $this->render('app.fruit.fruit', array(
            'message' => $message
        ));
    }

    public function listing()
    {
        $fruits = FruitModel::all();
        $this->debug($fruits);
    }


}
