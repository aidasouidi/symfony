<?php

/* ProductBundle:Produit:ajouterProduit.html.twig */
class __TwigTemplate_90a2114320c7b994c45b31f8f2a4479dc58f4ca0e5faa0e6793bf4649e837daf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProductBundle::layout.html.twig", "ProductBundle:Produit:ajouterProduit.html.twig", 1);
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
        $__internal_6d2b8aa667ad22178cecbe07bb5fedaa5c54046ef22381a43852313f88617bb3 = $this->env->getExtension("native_profiler");
        $__internal_6d2b8aa667ad22178cecbe07bb5fedaa5c54046ef22381a43852313f88617bb3->enter($__internal_6d2b8aa667ad22178cecbe07bb5fedaa5c54046ef22381a43852313f88617bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle:Produit:ajouterProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d2b8aa667ad22178cecbe07bb5fedaa5c54046ef22381a43852313f88617bb3->leave($__internal_6d2b8aa667ad22178cecbe07bb5fedaa5c54046ef22381a43852313f88617bb3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b28e1a97d939931f0145ac67f78b1e65274db3bcf14220dc632faf583351816d = $this->env->getExtension("native_profiler");
        $__internal_b28e1a97d939931f0145ac67f78b1e65274db3bcf14220dc632faf583351816d->enter($__internal_b28e1a97d939931f0145ac67f78b1e65274db3bcf14220dc632faf583351816d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ajout des produits";
        
        $__internal_b28e1a97d939931f0145ac67f78b1e65274db3bcf14220dc632faf583351816d->leave($__internal_b28e1a97d939931f0145ac67f78b1e65274db3bcf14220dc632faf583351816d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d989f3e05668b6b9fc1fcbbda05498b5e24db9840716d91773a072a6a915710 = $this->env->getExtension("native_profiler");
        $__internal_1d989f3e05668b6b9fc1fcbbda05498b5e24db9840716d91773a072a6a915710->enter($__internal_1d989f3e05668b6b9fc1fcbbda05498b5e24db9840716d91773a072a6a915710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "
    <form method=\"post\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("product_ajoutProduit");
        echo "\" >
    <table>
        <tr>
            <td>
                ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label');
        echo "

            </td>

            <td>
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget');
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'errors');
        echo "
            </td>
        </tr>
        <tr>

            <td>
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prix", array()), 'label');
        echo "

            </td>

            <td>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prix", array()), 'widget');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prix", array()), 'errors');
        echo "
            </td>
        </tr>
        <tr>
            <td>
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateLivraison", array()), 'label');
        echo "

            </td>

            <td>
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateLivraison", array()), 'widget');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "dateLivraison", array()), 'errors');
        echo "
            </td>
        </tr>    
        <tr>
            <td>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'label');
        echo "

            </td>
            <td>
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'widget');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'errors');
        echo "
            </td>
        </tr>
        <tr>
            <td>
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "type", array()), 'label');
        echo "

            </td>
            <td>
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "type", array()), 'widget');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "type", array()), 'errors');
        echo "
            </td>
        </tr>
    </table>
    <input type=\"submit\"/>
    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "
            
</form>           
";
        
        $__internal_1d989f3e05668b6b9fc1fcbbda05498b5e24db9840716d91773a072a6a915710->leave($__internal_1d989f3e05668b6b9fc1fcbbda05498b5e24db9840716d91773a072a6a915710_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle:Produit:ajouterProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 63,  157 => 58,  153 => 57,  146 => 53,  138 => 48,  134 => 47,  127 => 43,  119 => 38,  115 => 37,  107 => 32,  99 => 27,  95 => 26,  87 => 21,  78 => 15,  74 => 14,  66 => 9,  59 => 5,  55 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "ProductBundle::layout.html.twig" %}*/
/* {% block title %} ajout des produits{% endblock %}*/
/* {% block body %} */
/*     {{message}}*/
/*     <form method="post" action="{{ path('product_ajoutProduit') }}" >*/
/*     <table>*/
/*         <tr>*/
/*             <td>*/
/*                 {{form_label(f.nom)}}*/
/* */
/*             </td>*/
/* */
/*             <td>*/
/*                 {{form_widget(f.nom)}}*/
/*                 {{form_errors(f.nom)}}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/* */
/*             <td>*/
/*                 {{form_label(f.prix)}}*/
/* */
/*             </td>*/
/* */
/*             <td>*/
/*                 {{form_widget(f.prix)}}*/
/*                 {{form_errors(f.prix)}}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 {{form_label(f.dateLivraison)}}*/
/* */
/*             </td>*/
/* */
/*             <td>*/
/*                 {{form_widget(f.dateLivraison)}}*/
/*                 {{form_errors(f.dateLivraison)}}*/
/*             </td>*/
/*         </tr>    */
/*         <tr>*/
/*             <td>*/
/*                 {{form_label(f.description)}}*/
/* */
/*             </td>*/
/*             <td>*/
/*                 {{form_widget(f.description)}}*/
/*                 {{form_errors(f.description)}}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 {{form_label(f.type)}}*/
/* */
/*             </td>*/
/*             <td>*/
/*                 {{form_widget(f.type)}}*/
/*                 {{form_errors(f.type)}}*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/*     <input type="submit"/>*/
/*     {{form_rest(f)}}*/
/*             */
/* </form>           */
/* {% endblock %}*/
/*     */
