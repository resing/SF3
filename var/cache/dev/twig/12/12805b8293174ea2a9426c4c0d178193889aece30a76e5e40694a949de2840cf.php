<?php

/* layout.html.twig */
class __TwigTemplate_b784eb0d8ab20b9c08c3c90ced902e58f92319f69efe919669d2aada0d56db38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85ad34687070247a2ff20d1d5dc9aebb24ecd5af4d12977af83c4ef9fd188dce = $this->env->getExtension("native_profiler");
        $__internal_85ad34687070247a2ff20d1d5dc9aebb24ecd5af4d12977af83c4ef9fd188dce->enter($__internal_85ad34687070247a2ff20d1d5dc9aebb24ecd5af4d12977af83c4ef9fd188dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
<head>
<title>Blogger a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "<script type=\"text/javascript\">
  jQuery(document).ready(function(\$) {
    
    \$(\".scroll\").click(function(event){\t\t
      event.preventDefault();
      \$('html,body').animate({scrollTop:\$(this.hash).offset().top},900);
     });
     \$(\"#test\").hide();
  \$(\"#replay\").click(function () {
    \$(\"#test\").show(\"slow\");
    });
   });
    
</script>
<script>
\t\t\t    // You can also use \"\$(window).load(function() {\"
\t\t\t    \$(function () {
\t\t\t      // Slideshow 4
\t\t\t      \$(\"#slider4\").responsiveSlides({
\t\t\t        auto: true,
\t\t\t        pager:true,
\t\t\t        nav:true,
\t\t\t        speed: 500,
\t\t\t        namespace: \"callbacks\",
\t\t\t        before: function () {
\t\t\t          \$('.events').append(\"<li>before event fired.</li>\");
\t\t\t        },
\t\t\t        after: function () {
\t\t\t          \$('.events').append(\"<li>after event fired.</li>\");
\t\t\t        }
\t\t\t      });
\t\t\t
\t\t\t    });
</script>
</head>
<body>
<!-- header-section-starts -->
  <div class=\"full\">
    <div class=\"col-md-3 top-nav\">
      <div class=\"logo\">
      <a href=\"index.html\"><h1>Blogger</h1></a>
      </div>
      <div class=\"top-menu\">
        <span class=\"menu\"> </span>
        ";
        // line 74
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BackBundle:Default:Menu"));
        echo "
         <!-- script-for-nav -->
       <script>
         \$( \"span.menu\" ).click(function() {
           \$( \".top-menu ul\" ).slideToggle(300, function() {
           // Animation complete.
           });
         });
       </script>
<!--   script-for-nav --> \t
         <ul class=\"side-icons\">
           <li><a class=\"fb\" href=\"#\"></a></li>
           <li><a class=\"twitt\" href=\"#\"></a></li>
           <li><a class=\"goog\" href=\"#\"></a></li>
           <li><a class=\"drib\" href=\"#\"></a></li>
         </ul>
      </div>
    </div>
    
    {
    <div class=\"col-md-9 main\">
\t\t<!--banner-section-->
\t\t";
        // line 96
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "\t\t\t<!--//banner-section-->

\t\t\t<div class=\"clearfix\"> </div>
   <!--/footer-->
     <div class=\"footer\">
      <div class=\"footer-top\">
      <div class=\"col-md-4 footer-grid\">
        <h4>Lorem sadipscing </h4>
          <ul class=\"bottom\">
            <li>Consetetur sadipscing elitr</li>
            <li>Magna aliquyam eratsed diam</li>
          </ul>
      </div>
      <div class=\"col-md-4 footer-grid\">
        <h4>Message Us Now</h4>
          <ul class=\"bottom\">
            <li><i class=\"glyphicon glyphicon-home\"></i>Available 24/7 </li>
            <li><i class=\"glyphicon glyphicon-envelope\"></i><a href=\"mailto:info@example.com\">mail@example.com</a></li>
          </ul>
      </div>
      <div class=\"col-md-4 footer-grid\">
        <h4>Address Location</h4>
          <ul class=\"bottom\">
          <li><i class=\"glyphicon glyphicon-map-marker\"></i>2901 Glassgow Road, WA 98122-1090 </li>
          <li><i class=\"glyphicon glyphicon-earphone\"></i>phone: (888) 123-456-7899 </li>
          </ul>
      </div>
      <div class=\"clearfix\"> </div>
      </div>
     </div>
     <div class=\"copy\">
      <p>&copy; 2016 Blogger. All Rights Reserved | Design by <a href=\"http://w3layouts.com/\">W3layouts</a> </p>
    </div>
    <div class=\"clearfix\"> </div>
    </div>
<div class=\"clearfix\"> </div>
    </div>
<script type=\"text/javascript\">
\$(document).ready(function() {
          /*
          var defaults = {
                  containerID: 'toTop', // fading element id
                  containerHoverID: 'toTopHover', // fading element hover id
                  scrollSpeed: 1200,
                  easingType: 'linear' 
          };
          */
          \$().UItoTop({ easingType: 'easeOutQuart' });

});
</script>
<a href=\"#home\" id=\"toTop\" class=\"scroll\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\"> </span></a>
</body>
</html>";
        
        $__internal_85ad34687070247a2ff20d1d5dc9aebb24ecd5af4d12977af83c4ef9fd188dce->leave($__internal_85ad34687070247a2ff20d1d5dc9aebb24ecd5af4d12977af83c4ef9fd188dce_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4f1a17a7f8d5a7077ab2ad9bfa106f0c396ea22a8f40fd84fa78c57e21c7e72 = $this->env->getExtension("native_profiler");
        $__internal_f4f1a17a7f8d5a7077ab2ad9bfa106f0c396ea22a8f40fd84fa78c57e21c7e72->enter($__internal_f4f1a17a7f8d5a7077ab2ad9bfa106f0c396ea22a8f40fd84fa78c57e21c7e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7b79fdc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b79fdc_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/bundles/css/app_bootstrap_1.css");
            // line 15
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // asset "7b79fdc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b79fdc_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/bundles/css/app_style_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        } else {
            // asset "7b79fdc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b79fdc") : $this->env->getExtension('asset')->getAssetUrl("_controller/bundles/css/app.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 17
        echo "<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
";
        
        $__internal_f4f1a17a7f8d5a7077ab2ad9bfa106f0c396ea22a8f40fd84fa78c57e21c7e72->leave($__internal_f4f1a17a7f8d5a7077ab2ad9bfa106f0c396ea22a8f40fd84fa78c57e21c7e72_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a00906cfe0429f226914eee4cc90f56b6db4cca22997da7eb0b5097747923843 = $this->env->getExtension("native_profiler");
        $__internal_a00906cfe0429f226914eee4cc90f56b6db4cca22997da7eb0b5097747923843->enter($__internal_a00906cfe0429f226914eee4cc90f56b6db4cca22997da7eb0b5097747923843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "  ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e6a407c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e6a407c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/bundles/js/app_jquery.min_1.js");
            // line 27
            echo "                  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
            // asset "e6a407c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e6a407c_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/bundles/js/app_move-top_2.js");
            echo "                  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
            // asset "e6a407c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e6a407c_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/bundles/js/app_easing_3.js");
            echo "                  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
            // asset "e6a407c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e6a407c_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/bundles/js/app_responsiveslides.min_4.js");
            echo "                  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
        } else {
            // asset "e6a407c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e6a407c") : $this->env->getExtension('asset')->getAssetUrl("_controller/bundles/js/app.js");
            echo "                  <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
        }
        unset($context["asset_url"]);
        
        $__internal_a00906cfe0429f226914eee4cc90f56b6db4cca22997da7eb0b5097747923843->leave($__internal_a00906cfe0429f226914eee4cc90f56b6db4cca22997da7eb0b5097747923843_prof);

    }

    // line 96
    public function block_body($context, array $blocks = array())
    {
        $__internal_31876d3273723e2af388b1a9f56548c1cb543342623cff9d9da468cf27a6da5e = $this->env->getExtension("native_profiler");
        $__internal_31876d3273723e2af388b1a9f56548c1cb543342623cff9d9da468cf27a6da5e->enter($__internal_31876d3273723e2af388b1a9f56548c1cb543342623cff9d9da468cf27a6da5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
    ";
        
        $__internal_31876d3273723e2af388b1a9f56548c1cb543342623cff9d9da468cf27a6da5e->leave($__internal_31876d3273723e2af388b1a9f56548c1cb543342623cff9d9da468cf27a6da5e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 96,  225 => 27,  220 => 21,  214 => 20,  206 => 17,  186 => 15,  182 => 11,  176 => 10,  116 => 98,  114 => 96,  89 => 74,  43 => 30,  41 => 20,  38 => 19,  36 => 10,  25 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* <head>*/
/* <title>Blogger a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, */
/* Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />*/
/* <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/* {% block stylesheets %}*/
/* {% stylesheets*/
/*     '%kernel.root_dir%/Resources/assets/css/bootstrap.css'*/
/*     '%kernel.root_dir%/Resources/assets/css/style.css'*/
/*     filter='cssrewrite' output='bundles/css/app.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" />*/
/* {% endstylesheets %}*/
/* <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {% javascripts filter="?jsqueeze" output="bundles/js/app.js"*/
/*                         "%kernel.root_dir%/Resources/assets/js/jquery.min.js"*/
/*                         "%kernel.root_dir%/Resources/assets/js/move-top.js"*/
/*                         "%kernel.root_dir%/Resources/assets/js/easing.js"*/
/*                         "%kernel.root_dir%/Resources/assets/js/responsiveslides.min.js"*/
/*                    %}*/
/*                   <script src="{{ asset_url }}"></script>*/
/*   {% endjavascripts %}*/
/* {% endblock %}*/
/* <script type="text/javascript">*/
/*   jQuery(document).ready(function($) {*/
/*     */
/*     $(".scroll").click(function(event){		*/
/*       event.preventDefault();*/
/*       $('html,body').animate({scrollTop:$(this.hash).offset().top},900);*/
/*      });*/
/*      $("#test").hide();*/
/*   $("#replay").click(function () {*/
/*     $("#test").show("slow");*/
/*     });*/
/*    });*/
/*     */
/* </script>*/
/* <script>*/
/* 			    // You can also use "$(window).load(function() {"*/
/* 			    $(function () {*/
/* 			      // Slideshow 4*/
/* 			      $("#slider4").responsiveSlides({*/
/* 			        auto: true,*/
/* 			        pager:true,*/
/* 			        nav:true,*/
/* 			        speed: 500,*/
/* 			        namespace: "callbacks",*/
/* 			        before: function () {*/
/* 			          $('.events').append("<li>before event fired.</li>");*/
/* 			        },*/
/* 			        after: function () {*/
/* 			          $('.events').append("<li>after event fired.</li>");*/
/* 			        }*/
/* 			      });*/
/* 			*/
/* 			    });*/
/* </script>*/
/* </head>*/
/* <body>*/
/* <!-- header-section-starts -->*/
/*   <div class="full">*/
/*     <div class="col-md-3 top-nav">*/
/*       <div class="logo">*/
/*       <a href="index.html"><h1>Blogger</h1></a>*/
/*       </div>*/
/*       <div class="top-menu">*/
/*         <span class="menu"> </span>*/
/*         {{ render(controller('BackBundle:Default:Menu')) }}*/
/*          <!-- script-for-nav -->*/
/*        <script>*/
/*          $( "span.menu" ).click(function() {*/
/*            $( ".top-menu ul" ).slideToggle(300, function() {*/
/*            // Animation complete.*/
/*            });*/
/*          });*/
/*        </script>*/
/* <!--   script-for-nav --> 	*/
/*          <ul class="side-icons">*/
/*            <li><a class="fb" href="#"></a></li>*/
/*            <li><a class="twitt" href="#"></a></li>*/
/*            <li><a class="goog" href="#"></a></li>*/
/*            <li><a class="drib" href="#"></a></li>*/
/*          </ul>*/
/*       </div>*/
/*     </div>*/
/*     */
/*     {*/
/*     <div class="col-md-9 main">*/
/* 		<!--banner-section-->*/
/* 		{% block body %} */
/*     {% endblock %}*/
/* 			<!--//banner-section-->*/
/* */
/* 			<div class="clearfix"> </div>*/
/*    <!--/footer-->*/
/*      <div class="footer">*/
/*       <div class="footer-top">*/
/*       <div class="col-md-4 footer-grid">*/
/*         <h4>Lorem sadipscing </h4>*/
/*           <ul class="bottom">*/
/*             <li>Consetetur sadipscing elitr</li>*/
/*             <li>Magna aliquyam eratsed diam</li>*/
/*           </ul>*/
/*       </div>*/
/*       <div class="col-md-4 footer-grid">*/
/*         <h4>Message Us Now</h4>*/
/*           <ul class="bottom">*/
/*             <li><i class="glyphicon glyphicon-home"></i>Available 24/7 </li>*/
/*             <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">mail@example.com</a></li>*/
/*           </ul>*/
/*       </div>*/
/*       <div class="col-md-4 footer-grid">*/
/*         <h4>Address Location</h4>*/
/*           <ul class="bottom">*/
/*           <li><i class="glyphicon glyphicon-map-marker"></i>2901 Glassgow Road, WA 98122-1090 </li>*/
/*           <li><i class="glyphicon glyphicon-earphone"></i>phone: (888) 123-456-7899 </li>*/
/*           </ul>*/
/*       </div>*/
/*       <div class="clearfix"> </div>*/
/*       </div>*/
/*      </div>*/
/*      <div class="copy">*/
/*       <p>&copy; 2016 Blogger. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>*/
/*     </div>*/
/*     <div class="clearfix"> </div>*/
/*     </div>*/
/* <div class="clearfix"> </div>*/
/*     </div>*/
/* <script type="text/javascript">*/
/* $(document).ready(function() {*/
/*           /**/
/*           var defaults = {*/
/*                   containerID: 'toTop', // fading element id*/
/*                   containerHoverID: 'toTopHover', // fading element hover id*/
/*                   scrollSpeed: 1200,*/
/*                   easingType: 'linear' */
/*           };*/
/*           *//* */
/*           $().UItoTop({ easingType: 'easeOutQuart' });*/
/* */
/* });*/
/* </script>*/
/* <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>*/
/* </body>*/
/* </html>*/
