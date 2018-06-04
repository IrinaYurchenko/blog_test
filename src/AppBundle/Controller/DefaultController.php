<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", methods={"GET"}, name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
    //Я тут убрал скобку, из за нее был фатал

//    Пока что закоментил чтобы работало, у тебя один и тот же URL идет с разными методами,
//    тот код что ниже переписывает метод на POST и уже становится тебе не доступен из браузера, браузер запрашивает все страницы по GET методу
//    /**
//     * @Route("/", methods={"POST"}, requirements={"_format" = "html"}, name="homepage")
//     *
//     * после _format был semantical error, забыла = и _format должен быть записан как "_format"
//     */
//    public function testAction(Request $request)
//    {
//        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', array(
//            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
//        ));
//    }
}
