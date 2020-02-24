<?php

namespace App\Controller;

use App\Service\Form;
use App\Weblitzer\Controller;

/**
 *
 */
class DefaultController extends Controller
{

    public function index()
    {
        $message = 'Bienvenue sur le framework MVC';
        $message2 = 'Je vais vous montrer comment gagner 10 000€ sans rien faire';

        $this->render('app.default.frontpage',array(
            'message' => $message,
            'message2' => $message2
        ));
    }

    public function contact()
    {
        $message = "Contact";
        $form = new Form();
        $f = $form->input('nom');
        $f .= $form->input('prenom');
        $f .= $form->textarea('message');
        $f .= $form->submit();

        $this->render('app.default.contact', array(
            'message' => $message,
            'form' => $f
        ));
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
