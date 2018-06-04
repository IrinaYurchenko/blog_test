<?php

namespace MyBundle\Controller;

use MyBundle\Tests\Controller\DefaultControllerTest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyBundle:Default:index.html.twig');
    }

    //Запомни что в контроллере может быть несколько методов, убрал скобку } чтобы был валидный код
    public function aboutAction()
    {
        return $this->render('MyBundle:Default:index.html.twig');

    }
}