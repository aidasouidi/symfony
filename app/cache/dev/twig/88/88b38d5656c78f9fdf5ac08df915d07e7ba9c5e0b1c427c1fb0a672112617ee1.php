<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_dd432805b6df73dc3b8abe5938422ffe3b5826548dd046475a4ff6c5f959e564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db094b3fbbef51d76ec612e6a1201a783734230b3679a881b92c9e76d78c206e = $this->env->getExtension("native_profiler");
        $__internal_db094b3fbbef51d76ec612e6a1201a783734230b3679a881b92c9e76d78c206e->enter($__internal_db094b3fbbef51d76ec612e6a1201a783734230b3679a881b92c9e76d78c206e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db094b3fbbef51d76ec612e6a1201a783734230b3679a881b92c9e76d78c206e->leave($__internal_db094b3fbbef51d76ec612e6a1201a783734230b3679a881b92c9e76d78c206e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ade20c12c3be46ba6024b11728a5e968e59ed3762edf9613dd73ce53d77f6f9f = $this->env->getExtension("native_profiler");
        $__internal_ade20c12c3be46ba6024b11728a5e968e59ed3762edf9613dd73ce53d77f6f9f->enter($__internal_ade20c12c3be46ba6024b11728a5e968e59ed3762edf9613dd73ce53d77f6f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ade20c12c3be46ba6024b11728a5e968e59ed3762edf9613dd73ce53d77f6f9f->leave($__internal_ade20c12c3be46ba6024b11728a5e968e59ed3762edf9613dd73ce53d77f6f9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
