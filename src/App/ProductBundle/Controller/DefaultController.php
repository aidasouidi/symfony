<?php

namespace App\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($nom)
    {
        return $this->render('ProductBundle:Default:index.html.twig',array('name'=>$nom));
    }
    public function myfirstPageAction()
    {
        return $this->render('ProductBundle:Default:myfirstPage.html.twig');
    }
}
