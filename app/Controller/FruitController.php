<?php

namespace App\Controller;

use App\Controller\DefaultController;
use App\Model\FruitModel;
use App\Service\Form;
use App\Weblitzer\Controller;
use App\Service\Validation;


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
        //$this->debug($fruits);

        $this->render('app.fruit.fruit',[
            'fruits' => $fruits
        ]);
    }

    public function single($id)
    {
        $fruit = FruitModel::findById($id);
        $title = $fruit->title;
        $content = $fruit->content;
        $createdAt = $fruit->createdAt;

        $this->render('app.fruit.detailfruit', array(
            'title' => $title,
            'content' => $content,
            'createdAt' => date('d M Y', strtotime($createdAt))
        ));
    }

    public function addFruit()
    {
        $errors = array();
        $message = 'Ajouter un fruit';

        $form = new Form($errors, 'post');

        if (!empty($_POST['submitted'])) {
            $post = $this->cleanXss($_POST);
            $v = new Validation();
            $errors['title'] = $v->textValid($post['title'], 'titre',3,1000);
            $errors['content'] = $v->textValid($post['content'], 'content', 3, 1000);
            if($v->IsValid($errors) == true) {
                FruitModel::insertFruit($post['title'], $post['content']);
            }
        }

        $this->render('app.fruit.addfruit', array(
            'message' => $message,
            'form' => $form
        ));
    }


}

