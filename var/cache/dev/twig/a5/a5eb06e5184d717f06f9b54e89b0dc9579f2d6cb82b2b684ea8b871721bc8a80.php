<?php

/* front/menu.html.twig */
class __TwigTemplate_0568210b8157894c0d9ec5020ed67d79f4a3559af141856be127f31b5701b399 extends Twig_Template
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
        $__internal_549f6ab75cc9f4be9e85bbd74853d4d650bc478b209e1be53377850f4b2618f2 = $this->env->getExtension("native_profiler");
        $__internal_549f6ab75cc9f4be9e85bbd74853d4d650bc478b209e1be53377850f4b2618f2->enter($__internal_549f6ab75cc9f4be9e85bbd74853d4d650bc478b209e1be53377850f4b2618f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/menu.html.twig"));

        // line 2
        echo "<ul class=\"cl-effect-16\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 4
            echo "    <li><a class=\"\" href=\"\" data-hover=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            echo "</a></li> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
        
        $__internal_549f6ab75cc9f4be9e85bbd74853d4d650bc478b209e1be53377850f4b2618f2->leave($__internal_549f6ab75cc9f4be9e85bbd74853d4d650bc478b209e1be53377850f4b2618f2_prof);

    }

    public function getTemplateName()
    {
        return "front/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <ul class="cl-effect-16">*/
/*     {% for categorie in categories %}*/
/*     <li><a class="" href="" data-hover="{{categorie.name}}">{{categorie.name}}</a></li> */
/*     {% endfor %}*/
/* </ul>*/
