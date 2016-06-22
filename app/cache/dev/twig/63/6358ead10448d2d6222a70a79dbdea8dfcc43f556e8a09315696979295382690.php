<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9d05c5915c34ce182294f4a5c16e76e6821abd0ab5c54a3a1279a60de555bb8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab5452273bfedaa8aee505178da1f36cd3ab3016a8e48a92f3ecd457cd7b5080 = $this->env->getExtension("native_profiler");
        $__internal_ab5452273bfedaa8aee505178da1f36cd3ab3016a8e48a92f3ecd457cd7b5080->enter($__internal_ab5452273bfedaa8aee505178da1f36cd3ab3016a8e48a92f3ecd457cd7b5080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab5452273bfedaa8aee505178da1f36cd3ab3016a8e48a92f3ecd457cd7b5080->leave($__internal_ab5452273bfedaa8aee505178da1f36cd3ab3016a8e48a92f3ecd457cd7b5080_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5901bc25ca85aee23220f29a6bef9e30604f4a802dcfdd41411df38593680383 = $this->env->getExtension("native_profiler");
        $__internal_5901bc25ca85aee23220f29a6bef9e30604f4a802dcfdd41411df38593680383->enter($__internal_5901bc25ca85aee23220f29a6bef9e30604f4a802dcfdd41411df38593680383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5901bc25ca85aee23220f29a6bef9e30604f4a802dcfdd41411df38593680383->leave($__internal_5901bc25ca85aee23220f29a6bef9e30604f4a802dcfdd41411df38593680383_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_58a2839d2eaddfaf033a006e0e1c0422b31621a1abfe15bde3bb304546d0ad2e = $this->env->getExtension("native_profiler");
        $__internal_58a2839d2eaddfaf033a006e0e1c0422b31621a1abfe15bde3bb304546d0ad2e->enter($__internal_58a2839d2eaddfaf033a006e0e1c0422b31621a1abfe15bde3bb304546d0ad2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_58a2839d2eaddfaf033a006e0e1c0422b31621a1abfe15bde3bb304546d0ad2e->leave($__internal_58a2839d2eaddfaf033a006e0e1c0422b31621a1abfe15bde3bb304546d0ad2e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9cca271847631d34c334d67096f90d807ad47e6c51dda1259c7073bee08e321 = $this->env->getExtension("native_profiler");
        $__internal_d9cca271847631d34c334d67096f90d807ad47e6c51dda1259c7073bee08e321->enter($__internal_d9cca271847631d34c334d67096f90d807ad47e6c51dda1259c7073bee08e321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d9cca271847631d34c334d67096f90d807ad47e6c51dda1259c7073bee08e321->leave($__internal_d9cca271847631d34c334d67096f90d807ad47e6c51dda1259c7073bee08e321_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
