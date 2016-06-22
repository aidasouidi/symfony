<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1fe8309a30c1333a4e16f666f4111557a9e1c9598fe4380813f7e50a5d993cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8dfa4d0e7e9d1ef545e03ec495b1ade09c3eb69d3683ebf4609b892369c68c3 = $this->env->getExtension("native_profiler");
        $__internal_e8dfa4d0e7e9d1ef545e03ec495b1ade09c3eb69d3683ebf4609b892369c68c3->enter($__internal_e8dfa4d0e7e9d1ef545e03ec495b1ade09c3eb69d3683ebf4609b892369c68c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8dfa4d0e7e9d1ef545e03ec495b1ade09c3eb69d3683ebf4609b892369c68c3->leave($__internal_e8dfa4d0e7e9d1ef545e03ec495b1ade09c3eb69d3683ebf4609b892369c68c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b62c47c7ccc7f30082ab4514faea7de0ef83647a33fb08b51e08ea64f535b45 = $this->env->getExtension("native_profiler");
        $__internal_8b62c47c7ccc7f30082ab4514faea7de0ef83647a33fb08b51e08ea64f535b45->enter($__internal_8b62c47c7ccc7f30082ab4514faea7de0ef83647a33fb08b51e08ea64f535b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8b62c47c7ccc7f30082ab4514faea7de0ef83647a33fb08b51e08ea64f535b45->leave($__internal_8b62c47c7ccc7f30082ab4514faea7de0ef83647a33fb08b51e08ea64f535b45_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7b337ab09199070bae7553a869b5d7c11871ac32c5651cef493d0a9cbc8449f = $this->env->getExtension("native_profiler");
        $__internal_d7b337ab09199070bae7553a869b5d7c11871ac32c5651cef493d0a9cbc8449f->enter($__internal_d7b337ab09199070bae7553a869b5d7c11871ac32c5651cef493d0a9cbc8449f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7b337ab09199070bae7553a869b5d7c11871ac32c5651cef493d0a9cbc8449f->leave($__internal_d7b337ab09199070bae7553a869b5d7c11871ac32c5651cef493d0a9cbc8449f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_471495fe1541414003a8cfaa9fcc7347aba85c11cdca97eb1b4745693a4733b3 = $this->env->getExtension("native_profiler");
        $__internal_471495fe1541414003a8cfaa9fcc7347aba85c11cdca97eb1b4745693a4733b3->enter($__internal_471495fe1541414003a8cfaa9fcc7347aba85c11cdca97eb1b4745693a4733b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_471495fe1541414003a8cfaa9fcc7347aba85c11cdca97eb1b4745693a4733b3->leave($__internal_471495fe1541414003a8cfaa9fcc7347aba85c11cdca97eb1b4745693a4733b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
