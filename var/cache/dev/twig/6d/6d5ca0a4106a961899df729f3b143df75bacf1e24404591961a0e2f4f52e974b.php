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
        $__internal_e8ae4e405af7a1250e76b9ee157561df081ef9178712103943c435bb6dd42908 = $this->env->getExtension("native_profiler");
        $__internal_e8ae4e405af7a1250e76b9ee157561df081ef9178712103943c435bb6dd42908->enter($__internal_e8ae4e405af7a1250e76b9ee157561df081ef9178712103943c435bb6dd42908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8ae4e405af7a1250e76b9ee157561df081ef9178712103943c435bb6dd42908->leave($__internal_e8ae4e405af7a1250e76b9ee157561df081ef9178712103943c435bb6dd42908_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb1b0d8e1332b2754b6f927e91ba6fabedae3da9e47946bb1ee479f50fa822a0 = $this->env->getExtension("native_profiler");
        $__internal_cb1b0d8e1332b2754b6f927e91ba6fabedae3da9e47946bb1ee479f50fa822a0->enter($__internal_cb1b0d8e1332b2754b6f927e91ba6fabedae3da9e47946bb1ee479f50fa822a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cb1b0d8e1332b2754b6f927e91ba6fabedae3da9e47946bb1ee479f50fa822a0->leave($__internal_cb1b0d8e1332b2754b6f927e91ba6fabedae3da9e47946bb1ee479f50fa822a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50e8f55a7f635ecbf8fe380c0e59df83d05c5f91f903aaec17bc7f31e6db5ac7 = $this->env->getExtension("native_profiler");
        $__internal_50e8f55a7f635ecbf8fe380c0e59df83d05c5f91f903aaec17bc7f31e6db5ac7->enter($__internal_50e8f55a7f635ecbf8fe380c0e59df83d05c5f91f903aaec17bc7f31e6db5ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50e8f55a7f635ecbf8fe380c0e59df83d05c5f91f903aaec17bc7f31e6db5ac7->leave($__internal_50e8f55a7f635ecbf8fe380c0e59df83d05c5f91f903aaec17bc7f31e6db5ac7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_633e813b628a84f727317d810b80dd362730c920fa0c5712e427574cddd33091 = $this->env->getExtension("native_profiler");
        $__internal_633e813b628a84f727317d810b80dd362730c920fa0c5712e427574cddd33091->enter($__internal_633e813b628a84f727317d810b80dd362730c920fa0c5712e427574cddd33091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_633e813b628a84f727317d810b80dd362730c920fa0c5712e427574cddd33091->leave($__internal_633e813b628a84f727317d810b80dd362730c920fa0c5712e427574cddd33091_prof);

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
