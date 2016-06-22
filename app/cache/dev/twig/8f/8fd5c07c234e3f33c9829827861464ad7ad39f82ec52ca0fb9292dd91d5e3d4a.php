<?php

/* ProductBundle:Produit:afficherProduit.html.twig */
class __TwigTemplate_7f79f2d0521e20ae0aaf951ec94e15aba19c74899a92fc0e9663a82fbf4cbece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProductBundle::layout.html.twig", "ProductBundle:Produit:afficherProduit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProductBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8bce11cb6202e4b3976d25d26eee5621667fca27b800d268d0aa4553b20744a = $this->env->getExtension("native_profiler");
        $__internal_f8bce11cb6202e4b3976d25d26eee5621667fca27b800d268d0aa4553b20744a->enter($__internal_f8bce11cb6202e4b3976d25d26eee5621667fca27b800d268d0aa4553b20744a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Produit:afficherProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8bce11cb6202e4b3976d25d26eee5621667fca27b800d268d0aa4553b20744a->leave($__internal_f8bce11cb6202e4b3976d25d26eee5621667fca27b800d268d0aa4553b20744a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_45c25f914cf6bf0f33975a81cca3922a45db4351e7378341a236f351cbec2dd5 = $this->env->getExtension("native_profiler");
        $__internal_45c25f914cf6bf0f33975a81cca3922a45db4351e7378341a236f351cbec2dd5->enter($__internal_45c25f914cf6bf0f33975a81cca3922a45db4351e7378341a236f351cbec2dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " affichage des produits";
        
        $__internal_45c25f914cf6bf0f33975a81cca3922a45db4351e7378341a236f351cbec2dd5->leave($__internal_45c25f914cf6bf0f33975a81cca3922a45db4351e7378341a236f351cbec2dd5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebcaffa4c655c8b669ab0361f51660a3f07ed735fdac862c2011d30e27c854e4 = $this->env->getExtension("native_profiler");
        $__internal_ebcaffa4c655c8b669ab0361f51660a3f07ed735fdac862c2011d30e27c854e4->enter($__internal_ebcaffa4c655c8b669ab0361f51660a3f07ed735fdac862c2011d30e27c854e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("product_ajoutProduit");
        echo "\">Ajout Produit</a>
<table>
    <tr>
        <td>Identifiant</td>
        <td>Nom</td>
        <td>Prix</td>
        <td>Date Livraison</td>
        <td>description</td>
        <td>type</td>
        <td></td>
        <td></td>
    </tr>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo "    
        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "dateLivraison", array()), "d/M/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "type", array()), "nom", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_modifProduit", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
            <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_suppProduit", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</table>
    
    
";
        
        $__internal_ebcaffa4c655c8b669ab0361f51660a3f07ed735fdac862c2011d30e27c854e4->leave($__internal_ebcaffa4c655c8b669ab0361f51660a3f07ed735fdac862c2011d30e27c854e4_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Produit:afficherProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  69 => 16,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ProductBundle::layout.html.twig" %}*/
/* {% block title %} affichage des produits{% endblock %}*/
/* {% block body %}*/
/*     <a href="{{ path('product_ajoutProduit') }}">Ajout Produit</a>*/
/* <table>*/
/*     <tr>*/
/*         <td>Identifiant</td>*/
/*         <td>Nom</td>*/
/*         <td>Prix</td>*/
/*         <td>Date Livraison</td>*/
/*         <td>description</td>*/
/*         <td>type</td>*/
/*         <td></td>*/
/*         <td></td>*/
/*     </tr>*/
/*     {% for p in produit %}    */
/*         <tr>*/
/*             <td>{{p.id}}</td>*/
/*             <td>{{p.nom}}</td>*/
/*             <td>{{p.prix}}</td>*/
/*             <td>{{p.dateLivraison|date('d/M/Y')}}</td>*/
/*             <td>{{p.description}}</td>*/
/*             <td>{{p.type.nom}}</td>*/
/*             <td><a href="{{path('product_modifProduit',{'id':p.id})}}">Modifier</a></td>*/
/*             <td><a href="{{path('product_suppProduit',{'id':p.id})}}">Supprimer</a></td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </table>*/
/*     */
/*     */
/* {% endblock %}*/
/* */
