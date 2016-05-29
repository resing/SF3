<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8db0ef5706813fe4a7c6d734b8eeac33c74595b254b7856202da8aa36fdbc8d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2be081d1fc864a231fd66b0c5ad1ae5813da333f0308a6abd0b52db1ef226b7b = $this->env->getExtension("native_profiler");
        $__internal_2be081d1fc864a231fd66b0c5ad1ae5813da333f0308a6abd0b52db1ef226b7b->enter($__internal_2be081d1fc864a231fd66b0c5ad1ae5813da333f0308a6abd0b52db1ef226b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2be081d1fc864a231fd66b0c5ad1ae5813da333f0308a6abd0b52db1ef226b7b->leave($__internal_2be081d1fc864a231fd66b0c5ad1ae5813da333f0308a6abd0b52db1ef226b7b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
