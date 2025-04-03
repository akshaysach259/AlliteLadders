<?php

/* ProjectCmsBundle:Default:index.html.twig */
class __TwigTemplate_56b60598029071301049b7cacbafd390d33023b9412386e7edbf4736114ac84a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectCmsBundle::layout.html.twig", "ProjectCmsBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjectCmsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4193cf32379359a716e408d82535a8d66c9b3034dbc570096f5f1e1d11a64fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4193cf32379359a716e408d82535a8d66c9b3034dbc570096f5f1e1d11a64fef->enter($__internal_4193cf32379359a716e408d82535a8d66c9b3034dbc570096f5f1e1d11a64fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjectCmsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4193cf32379359a716e408d82535a8d66c9b3034dbc570096f5f1e1d11a64fef->leave($__internal_4193cf32379359a716e408d82535a8d66c9b3034dbc570096f5f1e1d11a64fef_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_150250a4b48c9248726c55ab71b55374e3da0cbd000c679a9a90dd4b2562a562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150250a4b48c9248726c55ab71b55374e3da0cbd000c679a9a90dd4b2562a562->enter($__internal_150250a4b48c9248726c55ab71b55374e3da0cbd000c679a9a90dd4b2562a562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<style>
img {max-width:100%;}
</style>

    <!-- Organic All Starts-->
            <section class=\"short-about sec-space-bottom\">

                <div class=\"pattern\"> 
                    <img alt=\"\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/icons/white-pattern.png"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"section-icon\"> 
                    <img alt=\"\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/logo/logo-2.png"), "html", null, true);
        echo "\" />
                </div>
                <div class=\"container rel-div\">
                    <div class=\"title-wrap pt-15\"> 
                        <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>  
                        <span class=\"light-font\">";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitle1", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageTitle1", array()), "html", null, true);
        }
        echo "</span>
                        <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>  

                        <p>";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitleDesc1", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageTitleDesc1", array()), "html", null, true);
        }
        echo "</p>
                    </div>

                    <div class=\"about-wrap\"> 
                        <img class=\"logo-img\" alt=\"\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/extra/sign-1.png"), "html", null, true);
        echo "\" />
                        <h4 class=\"\"> <strong>I.P.</strong> <span class=\"light-font\"> MATTA </span> </h4>
                        <h5 class=\"clr-txt sub-title-sm\">M.D.</h5>
                      
                    </div>
                </div>

            </section>
            <!-- / Organic All Ends -->       

            <!-- Naturix Goods Starts-->
            <section class=\"naturix-goods light-bg\">
                <div class=\"container\"> 
                    <div class=\"title-wrap\">
                        <h2 class=\"section-title\"> <span class=\"light-font\">Our </span> <strong>Products<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/icons/logo-icon.png"), "html", null, true);
        echo "\" alt=\"\" /></strong> </h2>
                    </div>

                  ";
        // line 54
        echo "


                    <div class=\"tab-content organic-content row\"> 
                        <div id=\"naturix-tab-1\" class=\"tab-pane fade active in\"> 
                            <div class=\"naturix-slider-1 dots-1\"> 


";
        // line 62
        if ((array_key_exists("productCat", $context) && (twig_length_filter($this->env, (isset($context["productCat"]) ? $context["productCat"] : $this->getContext($context, "productCat"))) > 0))) {
            // line 63
            echo "        <div class=\"item\"> 
";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productCat"]) ? $context["productCat"] : $this->getContext($context, "productCat")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["queryProductsResult"]) {
                // line 65
                echo "
";
                // line 66
                $context["imageType"] = "jpeg";
                // line 67
                $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["queryProductsResult"], "image", array()), "contentType", array()), "/");
                // line 68
                $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : $this->getContext($context, "imageTypeArry")), 1, array(), "array");
                // line 69
                echo "
            <div class=\"product-box\"> 
                <div class=\"product-media\"> 
                ";
                // line 72
                if (((isset($context["imageType"]) ? $context["imageType"] : $this->getContext($context, "imageType")) == "x-shockwave-flash")) {
                    // line 73
                    echo "    <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0\" width=\"300\" height=\"330\">
  <param name=\"movie\" value=\"/web/uploads/media/default/0001/01/";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryProductsResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" />
  <param name=\"quality\" value=\"high\" />
  <embed src=\"/web/uploads/media/default/0001/01/";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryProductsResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"300\" height=\"330\"></embed>
</object>
  \t\t\t\t       ";
                } else {
                    // line 79
                    echo "                    <img class=\"prod-img\" alt=\"\" src=\"/web/uploads/media/default/0001/01/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryProductsResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" />
                    ";
                }
                // line 81
                echo "                   ";
                // line 82
                echo "                 </div>                                           
                <div class=\"product-caption\"> 
                    <h3 class=\"product-title\">
              <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["queryProductsResult"], "pageUrl", array()))), "html", null, true);
                echo "\"> ";
                echo "  <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["queryProductsResult"], "pageTitle", array()), "html", null, true);
                echo "</strong></a>
                    </h3>
\t\t<div class=\"price\"> 
\t\t<strong class=\"clr-txt\"><a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["queryProductsResult"], "pageUrl", array()))), "html", null, true);
                echo "\" style=\"color:#7fba00\">View More</a></strong>
\t\t</div>
                </div>
            </div>
\t";
                // line 92
                if (((($this->getAttribute($context["loop"], "index", array()) % 2) == 0) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 93
                    echo "        </div><div class=\"item\"> 
       ";
                }
                // line 95
                echo "
\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['queryProductsResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "         </div>
\t";
        }
        // line 99
        echo "

 
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- / Naturix Goods Ends -->

            <!-- Naturix Quality Starts-->
            <section class=\"naturix-quality sec-space-bottom\">

                <div class=\"container\"> 
                    <div class=\"title-wrap pt-15\">
                        <h2 class=\"section-title pt-15\"> <span class=\"light-font\">Helping you reach</span> <strong> Difficult height Safely </strong> </h2>                        
                    </div>
                    <div class=\"food-quality block-inline\">
";
        // line 118
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "image", array(), "any", true, true)) {
            // line 119
            echo "
";
            // line 120
            $context["imageType"] = "jpeg";
            // line 121
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "image", array()), "contentType", array()), "/");
            // line 122
            $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : $this->getContext($context, "imageTypeArry")), 1, array(), "array");
            // line 123
            echo "
";
        }
        // line 125
        echo "
                   ";
        // line 126
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "image", array(), "any", true, true)) {
            // line 127
            echo "                        <div class=\"col-md-6 pt-50\"> 
                             <div class=\"center\"> 
                               
                                
   <div  style=\"float:right;margin-right:20px;\"> 
    <img alt=\"\" src=\"/web/uploads/media/default/0001/01/7.gif\" >
    </div>
    
    
           <!-- <div style=\"float:right;margin-right:10px;\"> 
      <img alt=\"\" src=\"/web/uploads/media/default/0001/01/ALUMINIUM-STRAIGHT-TOWER- LADDER.gif\" width=\"300\" height=\"300\">

                            ";
            // line 140
            echo "                                </div>  -->                   
                                
                            </div>
                        </div>
";
        }
        // line 145
        echo "
                        <div class=\"col-md-6 pt-50\"> 
                            <div class=\"right\"> 
                                <div class=\"quality-img\"> 
                                    <img alt=\"\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/icons/quality-4.png"), "html", null, true);
        echo "\" />
                                </div>
                                <div class=\"quality-caption\"> 
                                    <h2 class=\"title-1\">";
        // line 152
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitle2", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageTitle2", array()), "html", null, true);
        }
        echo "</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>";
        // line 154
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitleDesc2", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageTitleDesc2", array()), "html", null, true);
        }
        echo "</p>
                                     <p><a href=\"";
        // line 155
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageUrl2", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageUrl2", array()), "html", null, true);
        }
        echo "\" style=\"color:#7fba00;text-align:right\">Read More</a></p>
                                </div> 
\t\t\t\t
                            </div>
                            <div class=\"right\"> 
                                <div class=\"quality-img\"> 
                                    <img alt=\"\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/icons/quality-5.png"), "html", null, true);
        echo "\" />
                                </div>
                                <div class=\"quality-caption\"> 
                                    <h2 class=\"title-1\">";
        // line 164
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitle3", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageTitle3", array()), "html", null, true);
        }
        echo "</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>";
        // line 166
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitleDesc3", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageTitleDesc3", array()), "html", null, true);
        }
        echo "</p>
<p><a href=\"";
        // line 167
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageUrl3", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageUrl3", array()), "html", null, true);
        }
        echo "\" style=\"color:#7fba00;text-align:right\">Read More</a></p>
                                </div> 
                            </div>
                            <div class=\"right\"> 
                                <div class=\"quality-img\"> 
                                    <img alt=\"\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/icons/quality-6.png"), "html", null, true);
        echo "\" />
                                </div>
                                <div class=\"quality-caption\"> 
                                    <h2 class=\"title-1\">";
        // line 175
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitle4", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageTitle4", array()), "html", null, true);
        }
        echo "</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>";
        // line 177
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitleDesc4", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageTitleDesc4", array()), "html", null, true);
        }
        echo "</p>
<p><a href=\"";
        // line 178
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageUrl4", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : $this->getContext($context, "homePage")), 0, array(), "array"), "pageUrl4", array()), "html", null, true);
        }
        echo "\" style=\"color:#7fba00;text-align:right\">Read More</a></p>
                                </div> 
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>
            <!-- Naturix Quality Starts-->

            <div class=\"container\"> <div class=\"divider-full-1\"></div> </div>

            <!-- Random Products Starts-->
            <section >                
                <div class=\"container\"> 
                     
<div class=\"title-wrap\">
    <h2 class=\"section-title\"> <span class=\"light-font\">OUR</span> <strong>CLIENTS</strong> </h2>
</div>

<marquee behavior=\"scroll\" direction=\"left\" WIDTH=\"100%\" HEIGHT=\"50%\">
";
        // line 198
        if ((array_key_exists("clientList", $context) && (twig_length_filter($this->env, (isset($context["clientList"]) ? $context["clientList"] : $this->getContext($context, "clientList"))) > 0))) {
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientList"]) ? $context["clientList"] : $this->getContext($context, "clientList")));
            foreach ($context['_seq'] as $context["_key"] => $context["queryClientListResult"]) {
                // line 200
                echo "
";
                // line 201
                $context["imageType"] = "jpeg";
                // line 202
                $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["queryClientListResult"], "image", array()), "contentType", array()), "/");
                // line 203
                $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : $this->getContext($context, "imageTypeArry")), 1, array(), "array");
                // line 204
                echo "<img style=\"margin-left:20px;\" alt=\"\" src=\"/web/uploads/media/default/0001/01/thumb_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryClientListResult"], "image", array()), "id", array()), "html", null, true);
                echo "_default_td_160.";
                echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : $this->getContext($context, "imageType")), "html", null, true);
                echo "\" />
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['queryClientListResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 207
        echo "

</marquee>

                </div>
            </section>
            <div class=\"container\"> <div class=\"divider-full-1\"></div> </div>


            <!-- Random Products Ends -->

            <!-- Subscribe Newsletter Starts-->
         <!--   <section class=\"subscribe-wrap sec-space light-bg\">
               
                <div class=\"container\"> 
                    <div class=\"row\"> 
                        <div class=\"col-md-4\"> 
                            <h4 class=\"sub-title\"> JOIN OUR NEWSLETTER </h4>
                            <h2 class=\"fsz-35\"> <span class=\"light-font\">subscribe </span> <strong> newsletter</strong> </h2>
                        </div>
                        <div class=\"col-md-8\"> 
                            <form class=\"newsletter-form row\">
                                <div class=\"form-group col-sm-8\">
                                   <input class=\"form-control\" placeholder=\"enter your email address\" required=\"\"  type=\"text\">                                                                                
                                </div>
                                <div class=\"form-group col-sm-4\">                                               
                                   <button class=\"theme-btn btn-block\" type=\"submit\"> subscribe <i class=\"fa fa-long-arrow-right\"></i> </button>                                       
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Subscribe Newsletter Ends -->

            <!-- Testimonials Starts-->
            <section class=\"\">
                <div class=\"container\"> 
                    <div class=\"testimonials\">     
                        <div id=\"testimonial-slider\" class=\"testimonial-slider nav-1\">
";
        // line 247
        if ((array_key_exists("testimonialList", $context) && (twig_length_filter($this->env, (isset($context["testimonialList"]) ? $context["testimonialList"] : $this->getContext($context, "testimonialList"))) > 0))) {
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testimonialList"]) ? $context["testimonialList"] : $this->getContext($context, "testimonialList")));
            foreach ($context['_seq'] as $context["_key"] => $context["querytestimonialListResult"]) {
                // line 249
                echo " 
";
                // line 250
                $context["imageType"] = "jpeg";
                // line 251
                $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["querytestimonialListResult"], "image", array()), "contentType", array()), "/");
                // line 252
                $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : $this->getContext($context, "imageTypeArry")), 1, array(), "array");
                // line 253
                echo "
                            <div class=\"item\"> 
                                <div class=\"testi-wrap\"> 
                                    <div class=\"testi-img\"> 
                                        <a href=\"index.html\"> <img src=\"/web/uploads/media/default/0001/01/thumb_";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["querytestimonialListResult"], "image", array()), "id", array()), "html", null, true);
                echo "_default_td_160.";
                echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : $this->getContext($context, "imageType")), "html", null, true);
                echo "\" alt=\"\" /> </a>
                                    </div>
                                    <div class=\"testi-caption\"> 
                                        <p> <i>“";
                // line 260
                echo $this->getAttribute($context["querytestimonialListResult"], "pageDescription", array());
                echo "”</i> </p>
                                        <a href=\"#\"> <i class=\"fa fa-user clr-txt\"></i> <strong> ";
                // line 261
                echo $this->getAttribute($context["querytestimonialListResult"], "testimonialBy", array());
                echo " </strong> </a>
                                    </div>
                                </div>
                            </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['querytestimonialListResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 267
        echo "

                      </div>
                    </div>
                </div>
            </section>
            <!-- Testimonials Ends -->





            <!-- Naturix Quality Starts-->
            <section class=\"naturix-quality sec-space-bottom\">

                <div class=\"container\"> 
                    <div class=\"title-wrap pt-15\">
                        <h2 class=\"section-title pt-15\"> <span class=\"light-font\">Video/</span> <strong>Latest Blogs</strong> </h2>                        
                    </div>
                    <div class=\"food-quality block-inline\">

                   ";
        // line 288
        if ($this->getAttribute((isset($context["queryVideo"]) ? $context["queryVideo"] : null), 0, array(), "array", true, true)) {
            // line 289
            echo "                        <div class=\"col-md-6 pt-50\"> 
                             <div class=\"center\"> 
                                <div> 
                            <div class=\"video-box\">
    <iframe width=\"580\" height=\"500\" src=\"https://www.youtube.com/embed/9eDrULT0gEs\"></iframe>
</div>
                                </div>
                            </div>
                        </div>
";
        }
        // line 299
        echo "
                        <div class=\"col-md-6 pt-50\"> 

";
        // line 302
        if ((array_key_exists("queryNews", $context) && (twig_length_filter($this->env, (isset($context["queryNews"]) ? $context["queryNews"] : $this->getContext($context, "queryNews"))) > 0))) {
            // line 303
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["queryNews"]) ? $context["queryNews"] : $this->getContext($context, "queryNews")));
            foreach ($context['_seq'] as $context["_key"] => $context["queryqueryNewsResult"]) {
                // line 304
                echo "                            <div class=\"right\"> 
                                    <div class=\"quality-caption\"> 
                                    <h2 class=\"title-1\">";
                // line 306
                if ($this->getAttribute($context["queryqueryNewsResult"], "blogTitle", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["queryqueryNewsResult"], "blogTitle", array()), "html", null, true);
                }
                echo "</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>";
                // line 308
                if ($this->getAttribute($context["queryqueryNewsResult"], "pageDescription", array(), "any", true, true)) {
                    echo twig_truncate_filter($this->env, $this->getAttribute($context["queryqueryNewsResult"], "pageDescription", array()), 100);
                }
                echo "</p>
                                     <p><a href=\"";
                // line 309
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_blog_detail", array("urlAlias" => $this->getAttribute($context["queryqueryNewsResult"], "pageUrl", array()))), "html", null, true);
                echo "\" style=\"color:#7fba00;text-align:right\">Read More</a></p>
                                </div> 
\t\t\t\t </div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['queryqueryNewsResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 315
        echo "

                            
                        </div>
                    </div>                    
                </div>
            </section>
            <!-- Naturix Quality Starts-->

            <div class=\"container\"> <div class=\"divider-full-1\"></div> </div>

    



 ";
        
        $__internal_150250a4b48c9248726c55ab71b55374e3da0cbd000c679a9a90dd4b2562a562->leave($__internal_150250a4b48c9248726c55ab71b55374e3da0cbd000c679a9a90dd4b2562a562_prof);

    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  583 => 315,  571 => 309,  565 => 308,  558 => 306,  554 => 304,  550 => 303,  548 => 302,  543 => 299,  531 => 289,  529 => 288,  506 => 267,  494 => 261,  490 => 260,  482 => 257,  476 => 253,  474 => 252,  472 => 251,  470 => 250,  467 => 249,  463 => 248,  461 => 247,  419 => 207,  407 => 204,  405 => 203,  403 => 202,  401 => 201,  398 => 200,  394 => 199,  392 => 198,  367 => 178,  361 => 177,  354 => 175,  348 => 172,  338 => 167,  332 => 166,  325 => 164,  319 => 161,  308 => 155,  302 => 154,  295 => 152,  289 => 149,  283 => 145,  276 => 140,  262 => 127,  260 => 126,  257 => 125,  253 => 123,  251 => 122,  249 => 121,  247 => 120,  244 => 119,  242 => 118,  221 => 99,  217 => 97,  202 => 95,  198 => 93,  196 => 92,  189 => 88,  180 => 85,  175 => 82,  173 => 81,  167 => 79,  161 => 76,  156 => 74,  153 => 73,  151 => 72,  146 => 69,  144 => 68,  142 => 67,  140 => 66,  137 => 65,  120 => 64,  117 => 63,  115 => 62,  105 => 54,  99 => 41,  82 => 27,  73 => 23,  65 => 20,  57 => 15,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'ProjectCmsBundle::layout.html.twig' %}
 {% block body %}

<style>
img {max-width:100%;}
</style>

    <!-- Organic All Starts-->
            <section class=\"short-about sec-space-bottom\">

                <div class=\"pattern\"> 
                    <img alt=\"\" src=\"{{ asset('bundles/projectcms/img/icons/white-pattern.png') }}\" />
                </div>
                <div class=\"section-icon\"> 
                    <img alt=\"\" src=\"{{ asset('bundles/projectcms/img/logo/logo-2.png') }}\" />
                </div>
                <div class=\"container rel-div\">
                    <div class=\"title-wrap pt-15\"> 
                        <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>  
                        <span class=\"light-font\">{% if homePage[0].pageTitle1 is defined %}{{homePage[0].pageTitle1}}{% endif %}</span>
                        <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>  

                        <p>{% if homePage[0].pageTitleDesc1 is defined %}{{homePage[0].pageTitleDesc1}}{% endif %}</p>
                    </div>

                    <div class=\"about-wrap\"> 
                        <img class=\"logo-img\" alt=\"\" src=\"{{ asset('bundles/projectcms/img/extra/sign-1.png') }}\" />
                        <h4 class=\"\"> <strong>I.P.</strong> <span class=\"light-font\"> MATTA </span> </h4>
                        <h5 class=\"clr-txt sub-title-sm\">M.D.</h5>
                      
                    </div>
                </div>

            </section>
            <!-- / Organic All Ends -->       

            <!-- Naturix Goods Starts-->
            <section class=\"naturix-goods light-bg\">
                <div class=\"container\"> 
                    <div class=\"title-wrap\">
                        <h2 class=\"section-title\"> <span class=\"light-font\">Our </span> <strong>Products<img src=\"{{ asset('bundles/projectcms/img/icons/logo-icon.png') }}\" alt=\"\" /></strong> </h2>
                    </div>

                  {#  <div class=\"tabs-box text-center\">
                        <ul class=\"theme-tabs small\">
                            <li class=\"\"><a href=\"index.htmlnaturix-tab-1\" data-toggle=\"tab\"> <span class=\"light-font\">all </span> <strong>goods </strong> </a></li>                                
                            <li class=\"active\"><a href=\"index.htmlnaturix-tab-2\" data-toggle=\"tab\"> <span class=\"light-font\">organic </span> <strong>vegetables </strong> </a></li>                               
                            <li class=\"\"><a href=\"index.htmlnaturix-tab-3\" data-toggle=\"tab\"> <span class=\"light-font\">organic </span> <strong>fruits </strong> </a></li>
                            <li class=\"\"><a href=\"index.htmlnaturix-tab-4\" data-toggle=\"tab\"> <span class=\"light-font\">organic </span> <strong>tea </strong> </a></li>
                            <li class=\"\"><a href=\"index.htmlnaturix-tab-5\" data-toggle=\"tab\"> <span class=\"light-font\">all </span> <strong>bread </strong> </a></li>
                            <li class=\"\"><a href=\"index.htmlnaturix-tab-6\" data-toggle=\"tab\"> <span class=\"light-font\">organic </span> <strong>juices </strong> </a></li>
                        </ul>
                    </div>#}



                    <div class=\"tab-content organic-content row\"> 
                        <div id=\"naturix-tab-1\" class=\"tab-pane fade active in\"> 
                            <div class=\"naturix-slider-1 dots-1\"> 


{% if productCat is defined and productCat|length>0 %}
        <div class=\"item\"> 
{% for queryProductsResult in productCat %}

{% set imageType = 'jpeg' %}
{% set imageTypeArry = queryProductsResult.image.contentType|split('/') %}
{% set imageType = imageTypeArry[1] %}

            <div class=\"product-box\"> 
                <div class=\"product-media\"> 
                {% if imageType=='x-shockwave-flash' %}
    <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0\" width=\"300\" height=\"330\">
  <param name=\"movie\" value=\"/web/uploads/media/default/0001/01/{{queryProductsResult.image.providerReference}}\" />
  <param name=\"quality\" value=\"high\" />
  <embed src=\"/web/uploads/media/default/0001/01/{{queryProductsResult.image.providerReference}}\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"300\" height=\"330\"></embed>
</object>
  \t\t\t\t       {% else %}
                    <img class=\"prod-img\" alt=\"\" src=\"/web/uploads/media/default/0001/01/{{queryProductsResult.image.providerReference}}\" />
                    {% endif %}
                   {# <img class=\"shape\" alt=\"\" src=\"{{ asset('bundles/projectcms/img/icons/shap-small.png') }}\" />  #}
                 </div>                                           
                <div class=\"product-caption\"> 
                    <h3 class=\"product-title\">
              <a href=\"{{ path('_page_article_detail', { 'urlAlias':queryProductsResult.pageUrl }) }}\"> {#<span class=\"light-font\"> organic </span>#}  <strong>{{queryProductsResult.pageTitle}}</strong></a>
                    </h3>
\t\t<div class=\"price\"> 
\t\t<strong class=\"clr-txt\"><a href=\"{{ path('_page_article_detail', { 'urlAlias':queryProductsResult.pageUrl }) }}\" style=\"color:#7fba00\">View More</a></strong>
\t\t</div>
                </div>
            </div>
\t{% if loop.index%2==0 and not loop.last %}
        </div><div class=\"item\"> 
       {% endif %}

\t{% endfor %}
         </div>
\t{% endif %}


 
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- / Naturix Goods Ends -->

            <!-- Naturix Quality Starts-->
            <section class=\"naturix-quality sec-space-bottom\">

                <div class=\"container\"> 
                    <div class=\"title-wrap pt-15\">
                        <h2 class=\"section-title pt-15\"> <span class=\"light-font\">Helping you reach</span> <strong> Difficult height Safely </strong> </h2>                        
                    </div>
                    <div class=\"food-quality block-inline\">
{% if homePage[0].image is defined %}

{% set imageType = 'jpeg' %}
{% set imageTypeArry = homePage[0].image.contentType|split('/') %}
{% set imageType = imageTypeArry[1] %}

{% endif %}

                   {% if homePage[0].image is defined %}
                        <div class=\"col-md-6 pt-50\"> 
                             <div class=\"center\"> 
                               
                                
   <div  style=\"float:right;margin-right:20px;\"> 
    <img alt=\"\" src=\"/web/uploads/media/default/0001/01/7.gif\" >
    </div>
    
    
           <!-- <div style=\"float:right;margin-right:10px;\"> 
      <img alt=\"\" src=\"/web/uploads/media/default/0001/01/ALUMINIUM-STRAIGHT-TOWER- LADDER.gif\" width=\"300\" height=\"300\">

                            {#<img alt=\"\" src=\"/web/uploads/media/default/0001/01/thumb_{{homePage[0].image.id}}_default_td_600.{{imageType}}\" width=\"540\" height=\"100\">#}
                                </div>  -->                   
                                
                            </div>
                        </div>
{% endif %}

                        <div class=\"col-md-6 pt-50\"> 
                            <div class=\"right\"> 
                                <div class=\"quality-img\"> 
                                    <img alt=\"\" src=\"{{ asset('bundles/projectcms/img/icons/quality-4.png') }}\" />
                                </div>
                                <div class=\"quality-caption\"> 
                                    <h2 class=\"title-1\">{% if homePage[0].pageTitle2 is defined %}{{homePage[0].pageTitle2}}{% endif %}</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>{% if homePage[0].pageTitleDesc2 is defined %}{{homePage[0].pageTitleDesc2}}{% endif %}</p>
                                     <p><a href=\"{% if homePage[0].pageUrl2 is defined %}{{homePage[0].pageUrl2}}{% endif %}\" style=\"color:#7fba00;text-align:right\">Read More</a></p>
                                </div> 
\t\t\t\t
                            </div>
                            <div class=\"right\"> 
                                <div class=\"quality-img\"> 
                                    <img alt=\"\" src=\"{{ asset('bundles/projectcms/img/icons/quality-5.png') }}\" />
                                </div>
                                <div class=\"quality-caption\"> 
                                    <h2 class=\"title-1\">{% if homePage[0].pageTitle3 is defined %}{{homePage[0].pageTitle3}}{% endif %}</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>{% if homePage[0].pageTitleDesc3 is defined %}{{homePage[0].pageTitleDesc3}}{% endif %}</p>
<p><a href=\"{% if homePage[0].pageUrl3 is defined %}{{homePage[0].pageUrl3}}{% endif %}\" style=\"color:#7fba00;text-align:right\">Read More</a></p>
                                </div> 
                            </div>
                            <div class=\"right\"> 
                                <div class=\"quality-img\"> 
                                    <img alt=\"\" src=\"{{ asset('bundles/projectcms/img/icons/quality-6.png') }}\" />
                                </div>
                                <div class=\"quality-caption\"> 
                                    <h2 class=\"title-1\">{% if homePage[0].pageTitle4 is defined %}{{homePage[0].pageTitle4}}{% endif %}</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>{% if homePage[0].pageTitleDesc4 is defined %}{{homePage[0].pageTitleDesc4}}{% endif %}</p>
<p><a href=\"{% if homePage[0].pageUrl4 is defined %}{{homePage[0].pageUrl4}}{% endif %}\" style=\"color:#7fba00;text-align:right\">Read More</a></p>
                                </div> 
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>
            <!-- Naturix Quality Starts-->

            <div class=\"container\"> <div class=\"divider-full-1\"></div> </div>

            <!-- Random Products Starts-->
            <section >                
                <div class=\"container\"> 
                     
<div class=\"title-wrap\">
    <h2 class=\"section-title\"> <span class=\"light-font\">OUR</span> <strong>CLIENTS</strong> </h2>
</div>

<marquee behavior=\"scroll\" direction=\"left\" WIDTH=\"100%\" HEIGHT=\"50%\">
{% if clientList is defined and clientList|length>0 %}
{% for queryClientListResult in clientList %}

{% set imageType = 'jpeg' %}
{% set imageTypeArry = queryClientListResult.image.contentType|split('/') %}
{% set imageType = imageTypeArry[1] %}
<img style=\"margin-left:20px;\" alt=\"\" src=\"/web/uploads/media/default/0001/01/thumb_{{queryClientListResult.image.id}}_default_td_160.{{imageType}}\" />
{% endfor %}
{% endif %}


</marquee>

                </div>
            </section>
            <div class=\"container\"> <div class=\"divider-full-1\"></div> </div>


            <!-- Random Products Ends -->

            <!-- Subscribe Newsletter Starts-->
         <!--   <section class=\"subscribe-wrap sec-space light-bg\">
               
                <div class=\"container\"> 
                    <div class=\"row\"> 
                        <div class=\"col-md-4\"> 
                            <h4 class=\"sub-title\"> JOIN OUR NEWSLETTER </h4>
                            <h2 class=\"fsz-35\"> <span class=\"light-font\">subscribe </span> <strong> newsletter</strong> </h2>
                        </div>
                        <div class=\"col-md-8\"> 
                            <form class=\"newsletter-form row\">
                                <div class=\"form-group col-sm-8\">
                                   <input class=\"form-control\" placeholder=\"enter your email address\" required=\"\"  type=\"text\">                                                                                
                                </div>
                                <div class=\"form-group col-sm-4\">                                               
                                   <button class=\"theme-btn btn-block\" type=\"submit\"> subscribe <i class=\"fa fa-long-arrow-right\"></i> </button>                                       
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Subscribe Newsletter Ends -->

            <!-- Testimonials Starts-->
            <section class=\"\">
                <div class=\"container\"> 
                    <div class=\"testimonials\">     
                        <div id=\"testimonial-slider\" class=\"testimonial-slider nav-1\">
{% if testimonialList is defined and testimonialList|length>0 %}
{% for querytestimonialListResult in testimonialList %}
 
{% set imageType = 'jpeg' %}
{% set imageTypeArry = querytestimonialListResult.image.contentType|split('/') %}
{% set imageType = imageTypeArry[1] %}

                            <div class=\"item\"> 
                                <div class=\"testi-wrap\"> 
                                    <div class=\"testi-img\"> 
                                        <a href=\"index.html\"> <img src=\"/web/uploads/media/default/0001/01/thumb_{{querytestimonialListResult.image.id}}_default_td_160.{{imageType}}\" alt=\"\" /> </a>
                                    </div>
                                    <div class=\"testi-caption\"> 
                                        <p> <i>“{{querytestimonialListResult.pageDescription|raw}}”</i> </p>
                                        <a href=\"#\"> <i class=\"fa fa-user clr-txt\"></i> <strong> {{querytestimonialListResult.testimonialBy|raw}} </strong> </a>
                                    </div>
                                </div>
                            </div>
{% endfor %}
{% endif %}


                      </div>
                    </div>
                </div>
            </section>
            <!-- Testimonials Ends -->





            <!-- Naturix Quality Starts-->
            <section class=\"naturix-quality sec-space-bottom\">

                <div class=\"container\"> 
                    <div class=\"title-wrap pt-15\">
                        <h2 class=\"section-title pt-15\"> <span class=\"light-font\">Video/</span> <strong>Latest Blogs</strong> </h2>                        
                    </div>
                    <div class=\"food-quality block-inline\">

                   {% if queryVideo[0] is defined %}
                        <div class=\"col-md-6 pt-50\"> 
                             <div class=\"center\"> 
                                <div> 
                            <div class=\"video-box\">
    <iframe width=\"580\" height=\"500\" src=\"https://www.youtube.com/embed/9eDrULT0gEs\"></iframe>
</div>
                                </div>
                            </div>
                        </div>
{% endif %}

                        <div class=\"col-md-6 pt-50\"> 

{% if queryNews is defined and queryNews|length>0 %}
{% for queryqueryNewsResult in queryNews %}
                            <div class=\"right\"> 
                                    <div class=\"quality-caption\"> 
                                    <h2 class=\"title-1\">{% if queryqueryNewsResult.blogTitle is defined %}{{queryqueryNewsResult.blogTitle}}{% endif %}</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>{% if queryqueryNewsResult.pageDescription is defined %}{{queryqueryNewsResult.pageDescription|truncate(100)|raw}}{% endif %}</p>
                                     <p><a href=\"{{ path('_page_blog_detail', { 'urlAlias':queryqueryNewsResult.pageUrl }) }}\" style=\"color:#7fba00;text-align:right\">Read More</a></p>
                                </div> 
\t\t\t\t </div>

{% endfor %}
{% endif %}


                            
                        </div>
                    </div>                    
                </div>
            </section>
            <!-- Naturix Quality Starts-->

            <div class=\"container\"> <div class=\"divider-full-1\"></div> </div>

    



 {% endblock %}", "ProjectCmsBundle:Default:index.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/index.html.twig");
    }
}
