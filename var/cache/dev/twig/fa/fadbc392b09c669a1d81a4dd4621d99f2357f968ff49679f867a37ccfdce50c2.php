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
        $__internal_ba8e48deed2a623c4d467cc6af4790983bd0807bb1d2be40bb659a8c540793fe = $this->env->getExtension("native_profiler");
        $__internal_ba8e48deed2a623c4d467cc6af4790983bd0807bb1d2be40bb659a8c540793fe->enter($__internal_ba8e48deed2a623c4d467cc6af4790983bd0807bb1d2be40bb659a8c540793fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba8e48deed2a623c4d467cc6af4790983bd0807bb1d2be40bb659a8c540793fe->leave($__internal_ba8e48deed2a623c4d467cc6af4790983bd0807bb1d2be40bb659a8c540793fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6b815b0628f649899b2327107e60f0dbaad514caa5a9f05d6107c66b44a31fb = $this->env->getExtension("native_profiler");
        $__internal_a6b815b0628f649899b2327107e60f0dbaad514caa5a9f05d6107c66b44a31fb->enter($__internal_a6b815b0628f649899b2327107e60f0dbaad514caa5a9f05d6107c66b44a31fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a6b815b0628f649899b2327107e60f0dbaad514caa5a9f05d6107c66b44a31fb->leave($__internal_a6b815b0628f649899b2327107e60f0dbaad514caa5a9f05d6107c66b44a31fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e29dad3e8bcd0beca5b366bc893e7a28f08712130261e6bdcfa9008119c607b3 = $this->env->getExtension("native_profiler");
        $__internal_e29dad3e8bcd0beca5b366bc893e7a28f08712130261e6bdcfa9008119c607b3->enter($__internal_e29dad3e8bcd0beca5b366bc893e7a28f08712130261e6bdcfa9008119c607b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e29dad3e8bcd0beca5b366bc893e7a28f08712130261e6bdcfa9008119c607b3->leave($__internal_e29dad3e8bcd0beca5b366bc893e7a28f08712130261e6bdcfa9008119c607b3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c708e33f374f87fadf881ef65260a1c99ae7c45b72c992787a99128d041e1e4d = $this->env->getExtension("native_profiler");
        $__internal_c708e33f374f87fadf881ef65260a1c99ae7c45b72c992787a99128d041e1e4d->enter($__internal_c708e33f374f87fadf881ef65260a1c99ae7c45b72c992787a99128d041e1e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c708e33f374f87fadf881ef65260a1c99ae7c45b72c992787a99128d041e1e4d->leave($__internal_c708e33f374f87fadf881ef65260a1c99ae7c45b72c992787a99128d041e1e4d_prof);

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
