<?php

/* front/detail.html.twig */
class __TwigTemplate_6888f0552bfe4bfcc78498783b105f566fe568ff3804be6925e624ec9a391740 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html.twig", "front/detail.html.twig", 2);
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
        $__internal_877874a55e833c17e3d29c3db9a1ae2e75dcb5eec6765c25f738b3cced099740 = $this->env->getExtension("native_profiler");
        $__internal_877874a55e833c17e3d29c3db9a1ae2e75dcb5eec6765c25f738b3cced099740->enter($__internal_877874a55e833c17e3d29c3db9a1ae2e75dcb5eec6765c25f738b3cced099740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "front/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_877874a55e833c17e3d29c3db9a1ae2e75dcb5eec6765c25f738b3cced099740->leave($__internal_877874a55e833c17e3d29c3db9a1ae2e75dcb5eec6765c25f738b3cced099740_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab07fb9408a90b27711989e0ec030d1ae8936ee09b0e87839ba300674fc0e50a = $this->env->getExtension("native_profiler");
        $__internal_ab07fb9408a90b27711989e0ec030d1ae8936ee09b0e87839ba300674fc0e50a->enter($__internal_ab07fb9408a90b27711989e0ec030d1ae8936ee09b0e87839ba300674fc0e50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"banner-section\">
    <h3 class=\"tittle\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "category", array()), "name", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-file\"></i></h3>
\t\t\t<div class=\"single\">
                            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "medias", array()));
        foreach ($context['_seq'] as $context["j"] => $context["media"]) {
            // line 9
            echo "\t\t\t   <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($context["media"], "assetPath", array()), "my_thumb"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\">
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['j'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo " 
                           <div class=\"b-bottom\"> 
                                <h5 class=\"top\"><a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</a></h5>
\t\t\t\t   <p class=\"sub\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t      <p>On Aug 25 <a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-comment\"></span>0 </a><a class=\"span_link\" href=\"#\"><span class=\"glyphicon glyphicon-eye-open\"></span>56 </a></p>
\t\t\t\t 
\t\t\t\t</div>
\t\t\t </div>
\t\t\t  <div class=\"single-bottom\">
\t\t\t\t\t\t\t\t<div class=\"single-middle\">
\t\t\t\t\t\t\t\t<ul class=\"social-share\">
\t\t\t\t\t\t\t\t\t<li><span>SHARE</span></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"tin\"> </i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"message\"> </i></a></li>\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"arrow\"> </i></a>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t   </div>

\t\t\t\t\t    </div>
\t\t\t<div class=\"response\">
\t\t\t\t\t<h4>Responses</h4>
\t\t\t\t\t<div class=\"media response-info\">
\t\t\t\t\t\t<div class=\"media-left response-text-left\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/images/sin1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h5><a href=\"#\">Username</a></h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body response-text-right\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
\t\t\t\t\t\t\t\tsed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Sep 21, 2015</li>
\t\t\t\t\t\t\t\t<li><a href=\"single.html\">Reply</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"media response-info\">
\t\t\t\t\t\t\t\t<div class=\"media-left response-text-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/images/sin1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<h5><a href=\"#\">Username</a></h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body response-text-right\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
\t\t\t\t\t\t\t\t\t\tsed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>July 17, 2015</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single.html\">Reply</a></li>
\t\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
                                                        <div class=\"media response-info\">
\t\t\t\t\t\t\t\t<div class=\"media-left response-text-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/images/sin1.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<h5><a href=\"#\">Username</a></h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body response-text-right\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
\t\t\t\t\t\t\t\t\t\tsed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>July 17, 2015</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single.html\">Reply</a></li>
\t\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div>
                                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()));
        foreach ($context['_seq'] as $context["i"] => $context["comment"]) {
            // line 85
            echo "\t\t\t\t\t<div class=\"media response-info\">
\t\t\t\t\t\t<div class=\"media-left response-text-left\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/images/sin1.jpg"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h5><a href=\"#\">Username</a></h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body response-text-right\">
\t\t\t\t\t\t\t<p>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "created", array()), "Y-m-d"), "html", null, true);
            echo "</li>
                                                                <li><div class=\"expander\">Reply</div></li>
                                                                <div class=\"text\">
                                                                ";
            // line 98
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("replays", array("comment" => $this->getAttribute($context["comment"], "id", array()), "article" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "method" => "POST"));
            echo "
                                                                ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "_token", array()), 'row');
            echo "
                                                                ";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "description", array()), 'errors');
            echo "
                                                                ";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "description", array()), 'widget', array("attr" => array("onfocus" => "if (this.value=='Your Comment...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Your Comment...'")));
            echo "
                                                               <input type=\"hidden\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
            echo "\" id=\"mytool_idGroup\" name=\"article\"/>
                                                               <input type=\"hidden\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\" id=\"mytool_idGroup\" name=\"comment\"/>
                                                               <input type=\"submit\" value=\"Submit Comment\">
                                                                ";
            // line 105
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
            echo "
                                                               
                                                                </div>

                                                                
\t\t\t\t\t\t\t</ul>
                                                         ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comment"], "replays", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["replay"]) {
                // line 112
                echo "                                                                <div class=\"media response-info\">
\t\t\t\t\t\t\t\t<div class=\"media-left response-text-left\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class=\"media-object\" src=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/images/sin1.jpg"), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<h5><a href=\"#\">Username</a></h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"media-body response-text-right\">
\t\t\t\t\t\t\t\t\t<p>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["replay"], "description", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>";
                // line 122
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["replay"], "created", array()), "Y-m-d"), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single.html\">Reply</a></li>
\t\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
                                                          
\t\t\t\t\t\t\t</div>
                                                                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['replay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\t\t\t\t</div>\t
\t\t\t\t<div class=\"coment-form\">
\t\t\t\t\t<h4>Leave your comment</h4>
                                            ";
        // line 137
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("comments"), "method" => "POST"));
        echo "
                                            ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo " 
                                            <div>";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "</div>
                                            ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("onfocus" => "if (this.value=='Your Comment...') this.value = ''", "onblur" => "if (this.value=='') this.value = 'Your Comment...'")));
        echo "
                                            <input type=\"hidden\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "\" id=\"mytool_idGroup\" name=\"id\"/>
                                                <input type=\"submit\" value=\"Submit Comment\">
                                            ";
        // line 143
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t</form>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
";
        
        $__internal_ab07fb9408a90b27711989e0ec030d1ae8936ee09b0e87839ba300674fc0e50a->leave($__internal_ab07fb9408a90b27711989e0ec030d1ae8936ee09b0e87839ba300674fc0e50a_prof);

    }

    public function getTemplateName()
    {
        return "front/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 143,  280 => 141,  276 => 140,  272 => 139,  268 => 138,  264 => 137,  259 => 134,  250 => 130,  236 => 122,  231 => 120,  223 => 115,  218 => 112,  214 => 111,  205 => 105,  200 => 103,  196 => 102,  192 => 101,  188 => 100,  184 => 99,  180 => 98,  174 => 95,  169 => 93,  161 => 88,  156 => 85,  152 => 84,  132 => 67,  112 => 50,  95 => 36,  69 => 13,  65 => 12,  61 => 10,  52 => 9,  48 => 8,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="banner-section">*/
/*     <h3 class="tittle">{{article.category.name }} <i class="glyphicon glyphicon-file"></i></h3>*/
/* 			<div class="single">*/
/*                             {% for j, media in article.medias %}*/
/* 			   <img src="{{media.assetPath| imagine_filter('my_thumb') }}" class="img-responsive" alt="">*/
/*                            {% endfor %} */
/*                            <div class="b-bottom"> */
/*                                 <h5 class="top"><a href="#">{{article.title }}</a></h5>*/
/* 				   <p class="sub">{{article.description}}</p>*/
/* 			      <p>On Aug 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>*/
/* 				 */
/* 				</div>*/
/* 			 </div>*/
/* 			  <div class="single-bottom">*/
/* 								<div class="single-middle">*/
/* 								<ul class="social-share">*/
/* 									<li><span>SHARE</span></li>*/
/* 									<li><a href="#"><i> </i></a></li>						*/
/* 									<li><a href="#"><i class="tin"> </i></a></li>*/
/* 									<li><a href="#"><i class="message"> </i></a></li>				*/
/* 								</ul>*/
/* 								<a href="#"><i class="arrow"> </i></a>*/
/* 								<div class="clearfix"> </div>*/
/* 						   </div>*/
/* */
/* 					    </div>*/
/* 			<div class="response">*/
/* 					<h4>Responses</h4>*/
/* 					<div class="media response-info">*/
/* 						<div class="media-left response-text-left">*/
/* 							<a href="#">*/
/* 								<img class="media-object" src="{{asset('bundles/images/sin1.jpg')}}" alt="">*/
/* 							</a>*/
/* 							<h5><a href="#">Username</a></h5>*/
/* 						</div>*/
/* 						<div class="media-body response-text-right">*/
/* 							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, */
/* 								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>*/
/* 							<ul>*/
/* 								<li>Sep 21, 2015</li>*/
/* 								<li><a href="single.html">Reply</a></li>*/
/* 							</ul>*/
/* 							<div class="media response-info">*/
/* 								<div class="media-left response-text-left">*/
/* 									<a href="#">*/
/* 										<img class="media-object" src="{{asset('bundles/images/sin1.jpg')}}" alt="">*/
/* 									</a>*/
/* 									<h5><a href="#">Username</a></h5>*/
/* 								</div>*/
/* 								<div class="media-body response-text-right">*/
/* 									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, */
/* 										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>*/
/* 									<ul>*/
/* 										<li>July 17, 2015</li>*/
/* 										<li><a href="single.html">Reply</a></li>*/
/* 									</ul>		*/
/* 								</div>*/
/* 								<div class="clearfix"> </div>*/
/* 							</div>*/
/*                                                         <div class="media response-info">*/
/* 								<div class="media-left response-text-left">*/
/* 									<a href="#">*/
/* 										<img class="media-object" src="{{asset('bundles/images/sin1.jpg')}}" alt="">*/
/* 									</a>*/
/* 									<h5><a href="#">Username</a></h5>*/
/* 								</div>*/
/* 								<div class="media-body response-text-right">*/
/* 									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, */
/* 										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>*/
/* 									<ul>*/
/* 										<li>July 17, 2015</li>*/
/* 										<li><a href="single.html">Reply</a></li>*/
/* 									</ul>		*/
/* 								</div>*/
/* 								<div class="clearfix"> </div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="clearfix"> </div>*/
/* 					</div>*/
/*                                 {% for i ,comment in article.comments %}*/
/* 					<div class="media response-info">*/
/* 						<div class="media-left response-text-left">*/
/* 							<a href="#">*/
/* 								<img class="media-object" src="{{asset('bundles/images/sin1.jpg')}}" alt="">*/
/* 							</a>*/
/* 							<h5><a href="#">Username</a></h5>*/
/* 						</div>*/
/* 						<div class="media-body response-text-right">*/
/* 							<p>{{ comment.description}}</p>*/
/* 							<ul>*/
/* 								<li>{{comment.created |date('Y-m-d') }}</li>*/
/*                                                                 <li><div class="expander">Reply</div></li>*/
/*                                                                 <div class="text">*/
/*                                                                 {{ form_start(form2, {'action': path('replays',{ 'comment': comment.id,'article':article.id }), 'method': 'POST'}) }}*/
/*                                                                 {{ form_row(form2._token) }}*/
/*                                                                 {{ form_errors(form2.description) }}*/
/*                                                                 {{ form_widget(form2.description,{'attr': {'onfocus': 'if (this.value==\'Your Comment...\') this.value = \'\'', 'onblur': 'if (this.value==\'\') this.value = \'Your Comment...\''} }) }}*/
/*                                                                <input type="hidden" value="{{article.id}}" id="mytool_idGroup" name="article"/>*/
/*                                                                <input type="hidden" value="{{comment.id}}" id="mytool_idGroup" name="comment"/>*/
/*                                                                <input type="submit" value="Submit Comment">*/
/*                                                                 {{ form_end(form2) }}*/
/*                                                                */
/*                                                                 </div>*/
/* */
/*                                                                 */
/* 							</ul>*/
/*                                                          {% for replay in comment.replays %}*/
/*                                                                 <div class="media response-info">*/
/* 								<div class="media-left response-text-left">*/
/* 									<a href="#">*/
/* 										<img class="media-object" src="{{asset('bundles/images/sin1.jpg')}}" alt="">*/
/* 									</a>*/
/* 									<h5><a href="#">Username</a></h5>*/
/* 								</div>*/
/* 								<div class="media-body response-text-right">*/
/* 									<p>{{replay.description}}</p>*/
/* 									<ul>*/
/* 										<li>{{replay.created |date('Y-m-d') }}</li>*/
/* 										<li><a href="single.html">Reply</a></li>*/
/* 									</ul>		*/
/* 								</div>*/
/* 								<div class="clearfix"> </div>*/
/*                                                           */
/* 							</div>*/
/*                                                                                  {% endfor %}*/
/* 						</div>*/
/* 						<div class="clearfix"> </div>*/
/* 					</div>*/
/*                                 {% endfor %}*/
/* 				</div>	*/
/* 				<div class="coment-form">*/
/* 					<h4>Leave your comment</h4>*/
/*                                             {{ form_start(form, {'action': path('comments'), 'method': 'POST'}) }}*/
/*                                             {{ form_row(form._token) }} */
/*                                             <div>{{ form_errors(form.description) }}</div>*/
/*                                             {{ form_widget(form.description, {'attr': {'onfocus': 'if (this.value==\'Your Comment...\') this.value = \'\'', 'onblur': 'if (this.value==\'\') this.value = \'Your Comment...\''} }) }}*/
/*                                             <input type="hidden" value="{{article.id}}" id="mytool_idGroup" name="id"/>*/
/*                                                 <input type="submit" value="Submit Comment">*/
/*                                             {{ form_end(form) }}*/
/* 					</form>*/
/* 				</div>	*/
/* 				<div class="clearfix"></div>*/
/* 			</div>*/
/* {% endblock %}*/
