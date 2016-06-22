<?php

namespace App\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\ProductBundle\Entity\Produit;
use App\ProductBundle\Form\ProduitType;

class ProduitController extends Controller {

    public function ajouterProduitAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $msg = "";
        $produit = new Produit();
        $form = $this->createForm(new ProduitType(), $produit);
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request); //recuperation
            if ($form->isValid()) {

                $em->persist($produit);
                $em->flush();
                $msg = "valide";
            }
        }

        return $this->render('ProductBundle:Produit:ajouterProduit.html.twig', array('f' => $form->createView(), 'message' => $msg));
    }

    public function afficherProduitAction() {

        $em = $this->getDoctrine()->getManager();
        $produit = $em
                ->getRepository('ProductBundle:Produit')
                ->findAll();

        return $this->render('ProductBundle:Produit:afficherProduit.html.twig', array('produit' => $produit));
    }

    public function modifierProduitAction($id) {
        $msg = "";
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProductBundle:Produit')->find($id);
        $form = $this->createForm(new ProduitType(), $produit); //syncronisation
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request); //recuperation
            if ($form->isValid()) {

                $em->persist($produit);
                $em->flush();
                $msg = "valide";
                return $this->redirectToRoute('product_afficheProduit');
            }
        }
        return $this->render('ProductBundle:Produit:modifierProduit.html.twig', array('f' => $form->createView(), 'message' => $msg));
    }

    public function supprimerProduitAction($id) {

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('ProductBundle:Produit')->find($id);
        if(!$produit){
            return $this->createNotFoundException('Produit nexiste pas');
        }

        $em->remove($produit);
        $em->flush();

        return $this->redirectToRoute('product_afficheProduit');
    }

}
