<?php

namespace App\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalculController extends Controller
{
    public function perimetreAction($long,$larg)
    {
        $p=2*($long+$larg);
        $s=$long*$larg;
     
        return $this->render('ProductBundle:Calcul:calcul.html.twig',array('perimetre'=>$p,'surface'=>$s));
    }
    
}