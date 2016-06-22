<?php

namespace App\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\ProductBundle\Entity\Type;

class AjoutController extends Controller
{
    public function ajouterTypeAction()
    {
        $em=$this->getDoctrine()->getManager();
       $type1=new Type();
       $type2=new Type();
       $type3=new Type();
       $type1->setNom('tablette1');
       $type2->setNom('portable2');
       $type3->setNom('pc3');
       $em->persist($type1);
       $em->persist($type2);
       $em->persist($type3);
       $em->flush();
        return $this->render('ProductBundle:Type:ajouterType.html.twig');
    }
    
}