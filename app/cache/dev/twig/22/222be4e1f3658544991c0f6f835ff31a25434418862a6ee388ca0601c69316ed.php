<?php

/* ProductBundle::layout.html.twig */
class __TwigTemplate_195a338dd5fda76c0d97968747aa0b0e62585fc0591f802889ade242efa7815e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b5b9d2e85ca955aaacd266ae82d818bf399ff18029ab4b8d8f4ab82d4969f31 = $this->env->getExtension("native_profiler");
        $__internal_4b5b9d2e85ca955aaacd266ae82d818bf399ff18029ab4b8d8f4ab82d4969f31->enter($__internal_4b5b9d2e85ca955aaacd266ae82d818bf399ff18029ab4b8d8f4ab82d4969f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductBundle::layout.html.twig"));

        // line 1
        echo "<html>
    <head>
        <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        ";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 8
        echo "    </body>
</html>    
";
        
        $__internal_4b5b9d2e85ca955aaacd266ae82d818bf399ff18029ab4b8d8f4ab82d4969f31->leave($__internal_4b5b9d2e85ca955aaacd266ae82d818bf399ff18029ab4b8d8f4ab82d4969f31_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_694c35e97ad97c5e06cd83114a4f17891f6dfedcfcbe9e796637bf7d83712bff = $this->env->getExtension("native_profiler");
        $__internal_694c35e97ad97c5e06cd83114a4f17891f6dfedcfcbe9e796637bf7d83712bff->enter($__internal_694c35e97ad97c5e06cd83114a4f17891f6dfedcfcbe9e796637bf7d83712bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " template principale ";
        
        $__internal_694c35e97ad97c5e06cd83114a4f17891f6dfedcfcbe9e796637bf7d83712bff->leave($__internal_694c35e97ad97c5e06cd83114a4f17891f6dfedcfcbe9e796637bf7d83712bff_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a037772f83ed5f74f6439401c94d3121771f7099fe152c03c9ab179e61d8c22 = $this->env->getExtension("native_profiler");
        $__internal_4a037772f83ed5f74f6439401c94d3121771f7099fe152c03c9ab179e61d8c22->enter($__internal_4a037772f83ed5f74f6439401c94d3121771f7099fe152c03c9ab179e61d8c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        ";
        
        $__internal_4a037772f83ed5f74f6439401c94d3121771f7099fe152c03c9ab179e61d8c22->leave($__internal_4a037772f83ed5f74f6439401c94d3121771f7099fe152c03c9ab179e61d8c22_prof);

    }

    public function getTemplateName()
    {
        return "ProductBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  57 => 6,  45 => 3,  36 => 8,  34 => 6,  28 => 3,  24 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <title>{% block title %} template principale {% endblock %}</title>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>    */
/* */
