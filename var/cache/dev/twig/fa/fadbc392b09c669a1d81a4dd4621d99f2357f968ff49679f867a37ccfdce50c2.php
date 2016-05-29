<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f29c4a368aac69ede83c0714d971bda70017275ff42b90671b33bb536fddfcc5 extends Twig_Template
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
        $__internal_975410df206d1d10df0c86712b4b5f4c5748438755cb2d4f198e0d0f958c4d6c = $this->env->getExtension("native_profiler");
        $__internal_975410df206d1d10df0c86712b4b5f4c5748438755cb2d4f198e0d0f958c4d6c->enter($__internal_975410df206d1d10df0c86712b4b5f4c5748438755cb2d4f198e0d0f958c4d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_975410df206d1d10df0c86712b4b5f4c5748438755cb2d4f198e0d0f958c4d6c->leave($__internal_975410df206d1d10df0c86712b4b5f4c5748438755cb2d4f198e0d0f958c4d6c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f6eb2049b46317774e2eb5254045439cd1ba5b7051430e7b66fe696ad7d8aa7 = $this->env->getExtension("native_profiler");
        $__internal_6f6eb2049b46317774e2eb5254045439cd1ba5b7051430e7b66fe696ad7d8aa7->enter($__internal_6f6eb2049b46317774e2eb5254045439cd1ba5b7051430e7b66fe696ad7d8aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f6eb2049b46317774e2eb5254045439cd1ba5b7051430e7b66fe696ad7d8aa7->leave($__internal_6f6eb2049b46317774e2eb5254045439cd1ba5b7051430e7b66fe696ad7d8aa7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2206dac08ef791562e3a063fc01e4840b7d3ae81c100e02e68cfd8689fed4849 = $this->env->getExtension("native_profiler");
        $__internal_2206dac08ef791562e3a063fc01e4840b7d3ae81c100e02e68cfd8689fed4849->enter($__internal_2206dac08ef791562e3a063fc01e4840b7d3ae81c100e02e68cfd8689fed4849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2206dac08ef791562e3a063fc01e4840b7d3ae81c100e02e68cfd8689fed4849->leave($__internal_2206dac08ef791562e3a063fc01e4840b7d3ae81c100e02e68cfd8689fed4849_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_289cd308e169f4ed016ff29be3276c634c50ede8bcc5de00909c4d7e8cd571e2 = $this->env->getExtension("native_profiler");
        $__internal_289cd308e169f4ed016ff29be3276c634c50ede8bcc5de00909c4d7e8cd571e2->enter($__internal_289cd308e169f4ed016ff29be3276c634c50ede8bcc5de00909c4d7e8cd571e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_289cd308e169f4ed016ff29be3276c634c50ede8bcc5de00909c4d7e8cd571e2->leave($__internal_289cd308e169f4ed016ff29be3276c634c50ede8bcc5de00909c4d7e8cd571e2_prof);

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
