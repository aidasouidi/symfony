<?php

/* base.html.twig */
class __TwigTemplate_84afa627c2b6abd3f85625a3d06c48bdfab673f2a58a26dbe129c4ab0f0f6a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a12b2c8eb360f5bddebc946faebf6fa16a1dc31980c56573ef31911337075c47 = $this->env->getExtension("native_profiler");
        $__internal_a12b2c8eb360f5bddebc946faebf6fa16a1dc31980c56573ef31911337075c47->enter($__internal_a12b2c8eb360f5bddebc946faebf6fa16a1dc31980c56573ef31911337075c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a12b2c8eb360f5bddebc946faebf6fa16a1dc31980c56573ef31911337075c47->leave($__internal_a12b2c8eb360f5bddebc946faebf6fa16a1dc31980c56573ef31911337075c47_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06bc549e41152b9faeab4ce16aaa9e1e723fa0c463ba7f0ce730e943bfe857ba = $this->env->getExtension("native_profiler");
        $__internal_06bc549e41152b9faeab4ce16aaa9e1e723fa0c463ba7f0ce730e943bfe857ba->enter($__internal_06bc549e41152b9faeab4ce16aaa9e1e723fa0c463ba7f0ce730e943bfe857ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_06bc549e41152b9faeab4ce16aaa9e1e723fa0c463ba7f0ce730e943bfe857ba->leave($__internal_06bc549e41152b9faeab4ce16aaa9e1e723fa0c463ba7f0ce730e943bfe857ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b242cc4cd976eed929ee520a3fdc58b8b1fc5a95d91bfc13988722e7b3ece21d = $this->env->getExtension("native_profiler");
        $__internal_b242cc4cd976eed929ee520a3fdc58b8b1fc5a95d91bfc13988722e7b3ece21d->enter($__internal_b242cc4cd976eed929ee520a3fdc58b8b1fc5a95d91bfc13988722e7b3ece21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b242cc4cd976eed929ee520a3fdc58b8b1fc5a95d91bfc13988722e7b3ece21d->leave($__internal_b242cc4cd976eed929ee520a3fdc58b8b1fc5a95d91bfc13988722e7b3ece21d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_19a5e52ebb9347ddfd49d1bd7bd6a960df5bb6e2bff1bcfe9561b8a693d9ee5c = $this->env->getExtension("native_profiler");
        $__internal_19a5e52ebb9347ddfd49d1bd7bd6a960df5bb6e2bff1bcfe9561b8a693d9ee5c->enter($__internal_19a5e52ebb9347ddfd49d1bd7bd6a960df5bb6e2bff1bcfe9561b8a693d9ee5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19a5e52ebb9347ddfd49d1bd7bd6a960df5bb6e2bff1bcfe9561b8a693d9ee5c->leave($__internal_19a5e52ebb9347ddfd49d1bd7bd6a960df5bb6e2bff1bcfe9561b8a693d9ee5c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5ad5bea94af5f4e9d48d80e29bb6430cf18a772f2a236d29c9c30334274815b = $this->env->getExtension("native_profiler");
        $__internal_f5ad5bea94af5f4e9d48d80e29bb6430cf18a772f2a236d29c9c30334274815b->enter($__internal_f5ad5bea94af5f4e9d48d80e29bb6430cf18a772f2a236d29c9c30334274815b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f5ad5bea94af5f4e9d48d80e29bb6430cf18a772f2a236d29c9c30334274815b->leave($__internal_f5ad5bea94af5f4e9d48d80e29bb6430cf18a772f2a236d29c9c30334274815b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
