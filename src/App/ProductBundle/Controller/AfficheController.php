<?php

namespace App\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\ProductBundle\Entity\Type;

class AfficheController extends Controller
{
    public function afficherTypeAction()
    {
       $em=$this->getDoctrine()->getManager();
        $type = $em
        ->getRepository('ProductBundle:Type')
        ->findAll();
       
        return $this->render('ProductBundle:Type:afficherType.html.twig',array('type'=>$type));
    }
    
}