<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7d70bce54750e96d35b359fcb9eb30203f305caf67929a036f5d3be81014c0f6 extends Twig_Template
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
        $__internal_512fd73d2997dac80312b7e63e403a81c45924c57cdecf7beaff92d1d9275b74 = $this->env->getExtension("native_profiler");
        $__internal_512fd73d2997dac80312b7e63e403a81c45924c57cdecf7beaff92d1d9275b74->enter($__internal_512fd73d2997dac80312b7e63e403a81c45924c57cdecf7beaff92d1d9275b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_512fd73d2997dac80312b7e63e403a81c45924c57cdecf7beaff92d1d9275b74->leave($__internal_512fd73d2997dac80312b7e63e403a81c45924c57cdecf7beaff92d1d9275b74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6939d0d2310ef0b5cdcd915c69e98faabd60d3bb2ce208cf37a6bd66f214fc8d = $this->env->getExtension("native_profiler");
        $__internal_6939d0d2310ef0b5cdcd915c69e98faabd60d3bb2ce208cf37a6bd66f214fc8d->enter($__internal_6939d0d2310ef0b5cdcd915c69e98faabd60d3bb2ce208cf37a6bd66f214fc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6939d0d2310ef0b5cdcd915c69e98faabd60d3bb2ce208cf37a6bd66f214fc8d->leave($__internal_6939d0d2310ef0b5cdcd915c69e98faabd60d3bb2ce208cf37a6bd66f214fc8d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7888e35586fa01da6607b912d8cb42c795e5764c46b6ab93533e8df0706e5898 = $this->env->getExtension("native_profiler");
        $__internal_7888e35586fa01da6607b912d8cb42c795e5764c46b6ab93533e8df0706e5898->enter($__internal_7888e35586fa01da6607b912d8cb42c795e5764c46b6ab93533e8df0706e5898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7888e35586fa01da6607b912d8cb42c795e5764c46b6ab93533e8df0706e5898->leave($__internal_7888e35586fa01da6607b912d8cb42c795e5764c46b6ab93533e8df0706e5898_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a85f8bf63de00eddb661fa426e2e00a1862a90b85b1801171f83dab622cddb33 = $this->env->getExtension("native_profiler");
        $__internal_a85f8bf63de00eddb661fa426e2e00a1862a90b85b1801171f83dab622cddb33->enter($__internal_a85f8bf63de00eddb661fa426e2e00a1862a90b85b1801171f83dab622cddb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a85f8bf63de00eddb661fa426e2e00a1862a90b85b1801171f83dab622cddb33->leave($__internal_a85f8bf63de00eddb661fa426e2e00a1862a90b85b1801171f83dab622cddb33_prof);

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
