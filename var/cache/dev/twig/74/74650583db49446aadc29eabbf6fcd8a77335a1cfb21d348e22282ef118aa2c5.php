<?php

/* front/index.html.twig */
class __TwigTemplate_67d9dfb1be8b5b47c7b82e134c5e5a951fd681f046c6ce0b1ca3a1ba2d3078e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "front/index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b85dc63ca2e63961f61b2e370434a7302992598080ff619a7cfff8e58172e2a = $this->env->getExtension("native_profiler");
        $__internal_6b85dc63ca2e63961f61b2e370434a7302992598080ff619a7cfff8e58172e2a->enter($__internal_6b85dc63ca2e63961f61b2e370434a7302992598080ff619a7cfff8e58172e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b85dc63ca2e63961f61b2e370434a7302992598080ff619a7cfff8e58172e2a->leave($__internal_6b85dc63ca2e63961f61b2e370434a7302992598080ff619a7cfff8e58172e2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0345d4ce26282c881cec81cfa2895b1aa3c8ecdd9b626bb8d13b5dfecbe954c = $this->env->getExtension("native_profiler");
        $__internal_d0345d4ce26282c881cec81cfa2895b1aa3c8ecdd9b626bb8d13b5dfecbe954c->enter($__internal_d0345d4ce26282c881cec81cfa2895b1aa3c8ecdd9b626bb8d13b5dfecbe954c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"banner-section\">
    <h3 class=\"tittle\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), "name", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-picture\"></i></h3>
<div class=\"banner\">
                 <div  class=\"callbacks_container\">
\t\t\t\t\t<ul class=\"rslides\" id=\"slider4\">
                                            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), "articles", array()));
        foreach ($context['_seq'] as $context["i"] => $context["article"]) {
            // line 10
            echo "                                                ";
            if (($context["i"] < 4)) {
                // line 11
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "medias", array()));
                foreach ($context['_seq'] as $context["j"] => $context["media"]) {
                    // line 12
                    echo "                                                        ";
                    if (($context["j"] < 1)) {
                        // line 13
                        echo "\t\t\t\t\t        <li>
                                                  
\t\t\t\t\t\t  <img src=\"";
                        // line 15
                        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($context["media"], "assetPath", array()), "my_thumb"), "html", null, true);
                        echo "\" class=\"img-responsive\" alt=\"\" />
                                                  <div class=\"b-bottom\"> 
                                                      <h5 class=\"top\"><a href=\"";
                        // line 17
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hello", array("slug" => $this->getAttribute($context["article"], "slug", array()), "_format" => "html")), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                        echo "</a></h5>
                                                    <p>On Aug 25 <a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-On Aug 25 comment\"></span>0 </a><a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-eye-open\"></span>56 </a><a class=\"span_link\" href=\"single.html\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></a></p>
                                                  </div>
\t\t\t\t\t        </li>  
                                                ";
                    }
                    // line 22
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['j'], $context['media'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "                                                ";
            }
            // line 24
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t</ul>
\t\t  </div>
\t\t\t\t\t<!--banner-->
\t\t\t 
\t\t <div class=\"clearfix\"> </div>
\t\t\t    
          <div class=\"top-news\">
            ";
        // line 32
        $context["M"] = 0;
        // line 33
        echo "            ";
        $context["L"] = 0;
        // line 34
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), "articles", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["k"] => $context["article"]) {
            // line 35
            echo "                ";
            $context["L"] = ((isset($context["L"]) ? $context["L"] : $this->getContext($context, "L")) + 1);
            // line 36
            echo "                ";
            if (($context["k"] > 3)) {
                echo "   
                                ";
                // line 37
                if (((isset($context["M"]) ? $context["M"] : $this->getContext($context, "M")) < 1)) {
                    // line 38
                    echo "                                <div class=\"top-inner\">
                                    <div class=\"col-md-6 top-text ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "col-md-6 top-text", 1 => "col-md-6 top-text two"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
                    echo "\">
                                                ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "medias", array()));
                    foreach ($context['_seq'] as $context["j"] => $context["media"]) {
                        // line 41
                        echo "                                                        ";
                        if (($context["j"] < 1)) {
                            // line 42
                            echo "                                                 <a href=\"single.html\"><img src=\"images/pic1.jpg\" class=\"img-responsive\" alt=\"\"></a>
                                                 ";
                        }
                        // line 44
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['j'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "                                                 <h5 class=\"top\"><a href=\"single.html\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo "</a></h5>
                                                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                                                    <p>On Jun 25 <a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-comment\"></span>0 </a><a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-eye-open\"></span>56 </a><a class=\"span_link\" href=\"single.html\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></a></p>
                                    </div>
                                ";
                    // line 49
                    $context["M"] = ((isset($context["M"]) ? $context["M"] : $this->getContext($context, "M")) + 1);
                    // line 50
                    echo "                                ";
                } else {
                    // line 51
                    echo "                                  <div class=\"col-md-6 top-text ";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "col-md-6 top-text", 1 => "col-md-6 top-text two"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
                    echo " \">
                                      ";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "medias", array()));
                    foreach ($context['_seq'] as $context["j"] => $context["media"]) {
                        // line 53
                        echo "                                                        ";
                        if (($context["j"] < 1)) {
                            // line 54
                            echo "                                    <a href=\"single.html\"><img src=\"images/pic1.jpg\" class=\"img-responsive\" alt=\"\"></a>
                                    ";
                        }
                        // line 56
                        echo "                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['j'], $context['media'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "                                    <h5 class=\"top\"><a href=\"single.html\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                    echo " </a></h5>
                                    <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                                    <p>On Jun 25 <a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-comment\"></span>0 </a><a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-eye-open\"></span>56 </a><a class=\"span_link\" href=\"single.html\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></a></p>
                                  </div>            
                                <div class=\"clearfix\"> </div>
                                </div>
                                ";
                    // line 63
                    $context["M"] = 0;
                    // line 64
                    echo "                                ";
                }
                echo "      
                ";
            }
            // line 66
            echo "              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
            ";
        // line 67
        if ( !(0 == (isset($context["L"]) ? $context["L"] : $this->getContext($context, "L")) % 2)) {
            echo "</div> ";
        }
        // line 68
        echo "\t            </div>
\t</div>
\t\t\t   <!--//banner-->      \t\t  
\t\t\t\t\t<!--//top-news-->
 </div>
<div class=\"banner-right-text\"></div>
";
        
        $__internal_d0345d4ce26282c881cec81cfa2895b1aa3c8ecdd9b626bb8d13b5dfecbe954c->leave($__internal_d0345d4ce26282c881cec81cfa2895b1aa3c8ecdd9b626bb8d13b5dfecbe954c_prof);

    }

    public function getTemplateName()
    {
        return "front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 68,  234 => 67,  218 => 66,  212 => 64,  210 => 63,  200 => 57,  194 => 56,  190 => 54,  187 => 53,  183 => 52,  178 => 51,  175 => 50,  173 => 49,  165 => 45,  159 => 44,  155 => 42,  152 => 41,  148 => 40,  144 => 39,  141 => 38,  139 => 37,  134 => 36,  131 => 35,  113 => 34,  110 => 33,  108 => 32,  99 => 25,  93 => 24,  90 => 23,  84 => 22,  74 => 17,  69 => 15,  65 => 13,  62 => 12,  57 => 11,  54 => 10,  50 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'layout.html.twig' %}*/
/* {% block body %}*/
/* <div class="banner-section">*/
/*     <h3 class="tittle">{{categories.name}} <i class="glyphicon glyphicon-picture"></i></h3>*/
/* <div class="banner">*/
/*                  <div  class="callbacks_container">*/
/* 					<ul class="rslides" id="slider4">*/
/*                                             {% for i, article in categories.articles %}*/
/*                                                 {% if (i<4)%}*/
/*       {% for j, media in article.medias %}*/
/*                                                         {% if j<1 %}*/
/* 					        <li>*/
/*                                                   */
/* 						  <img src="{{media.assetPath| imagine_filter('my_thumb') }}" class="img-responsive" alt="" />*/
/*                                                   <div class="b-bottom"> */
/*                                                       <h5 class="top"><a href="{{path ('hello',{'slug':article.slug,'_format': 'html'}) }}">{{article.title}}</a></h5>*/
/*                                                     <p>On Aug 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-On Aug 25 comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>*/
/*                                                   </div>*/
/* 					        </li>  */
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/* 					</ul>*/
/* 		  </div>*/
/* 					<!--banner-->*/
/* 			 */
/* 		 <div class="clearfix"> </div>*/
/* 			    */
/*           <div class="top-news">*/
/*             {% set M = 0 %}*/
/*             {% set L = 0 %}*/
/*               {% for k, article in categories.articles %}*/
/*                 {% set L = L + 1 %}*/
/*                 {% if (k>3)%}   */
/*                                 {% if M < 1 %}*/
/*                                 <div class="top-inner">*/
/*                                     <div class="col-md-6 top-text {{ cycle(['col-md-6 top-text','col-md-6 top-text two'],loop.index0) }}">*/
/*                                                 {% for j, media in article.medias %}*/
/*                                                         {% if j<1 %}*/
/*                                                  <a href="single.html"><img src="images/pic1.jpg" class="img-responsive" alt=""></a>*/
/*                                                  {% endif %}*/
/*                                                 {% endfor %}*/
/*                                                  <h5 class="top"><a href="single.html">{{ article.title }}</a></h5>*/
/*                                                         <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>*/
/*                                                     <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>*/
/*                                     </div>*/
/*                                 {% set M = M + 1 %}*/
/*                                 {% else %}*/
/*                                   <div class="col-md-6 top-text {{ cycle(['col-md-6 top-text','col-md-6 top-text two'],loop.index0) }} ">*/
/*                                       {% for j, media in article.medias %}*/
/*                                                         {% if j<1 %}*/
/*                                     <a href="single.html"><img src="images/pic1.jpg" class="img-responsive" alt=""></a>*/
/*                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                     <h5 class="top"><a href="single.html">{{ article.title }} </a></h5>*/
/*                                     <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>*/
/*                                     <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>*/
/*                                   </div>            */
/*                                 <div class="clearfix"> </div>*/
/*                                 </div>*/
/*                                 {% set M = 0%}*/
/*                                 {% endif %}      */
/*                 {% endif %}*/
/*               {% endfor %} */
/*             {% if not L is divisible by(2) %}</div> {% endif %}*/
/* 	            </div>*/
/* 	</div>*/
/* 			   <!--//banner-->      		  */
/* 					<!--//top-news-->*/
/*  </div>*/
/* <div class="banner-right-text"></div>*/
/* {% endblock %}*/
