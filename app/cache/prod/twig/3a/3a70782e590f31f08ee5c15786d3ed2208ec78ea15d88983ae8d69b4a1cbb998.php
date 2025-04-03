<?php

/* ProjectCmsBundle:Default:index.html.twig */
class __TwigTemplate_54ebbf51b9e2f61a663abaf2869350923b25ee98e3477ae438a6178200fa4977 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageTitle1", array()), "html", null, true);
        }
        echo "</span>
                        <i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i><i class=\"fa fa-star-o\"></i>  

                        <p>";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitleDesc1", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageTitleDesc1", array()), "html", null, true);
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
        if ((array_key_exists("productCat", $context) && (twig_length_filter($this->env, (isset($context["productCat"]) ? $context["productCat"] : null)) > 0))) {
            // line 63
            echo "        <div class=\"item\"> 
";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productCat"]) ? $context["productCat"] : null));
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
                $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
                // line 69
                echo "
            <div class=\"product-box\"> 
                <div class=\"product-media\"> 
                ";
                // line 72
                if (((isset($context["imageType"]) ? $context["imageType"] : null) == "x-shockwave-flash")) {
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
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "image", array()), "contentType", array()), "/");
            // line 122
            $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageTitle2", array()), "html", null, true);
        }
        echo "</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>";
        // line 154
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitleDesc2", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageTitleDesc2", array()), "html", null, true);
        }
        echo "</p>
                                     <p><a href=\"";
        // line 155
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageUrl2", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageUrl2", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageTitle3", array()), "html", null, true);
        }
        echo "</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>";
        // line 166
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitleDesc3", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageTitleDesc3", array()), "html", null, true);
        }
        echo "</p>
<p><a href=\"";
        // line 167
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageUrl3", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageUrl3", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageTitle4", array()), "html", null, true);
        }
        echo "</h2>
                                    <span class=\"divider-2\"></span>
                                    <p>";
        // line 177
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageTitleDesc4", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageTitleDesc4", array()), "html", null, true);
        }
        echo "</p>
<p><a href=\"";
        // line 178
        if ($this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array", false, true), "pageUrl4", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["homePage"]) ? $context["homePage"] : null), 0, array(), "array"), "pageUrl4", array()), "html", null, true);
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
        if ((array_key_exists("clientList", $context) && (twig_length_filter($this->env, (isset($context["clientList"]) ? $context["clientList"] : null)) > 0))) {
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientList"]) ? $context["clientList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["queryClientListResult"]) {
                // line 200
                echo "
";
                // line 201
                $context["imageType"] = "jpeg";
                // line 202
                $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["queryClientListResult"], "image", array()), "contentType", array()), "/");
                // line 203
                $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
                // line 204
                echo "<img style=\"margin-left:20px;\" alt=\"\" src=\"/web/uploads/media/default/0001/01/thumb_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryClientListResult"], "image", array()), "id", array()), "html", null, true);
                echo "_default_td_160.";
                echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
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
        if ((array_key_exists("testimonialList", $context) && (twig_length_filter($this->env, (isset($context["testimonialList"]) ? $context["testimonialList"] : null)) > 0))) {
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testimonialList"]) ? $context["testimonialList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["querytestimonialListResult"]) {
                // line 249
                echo " 
";
                // line 250
                $context["imageType"] = "jpeg";
                // line 251
                $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["querytestimonialListResult"], "image", array()), "contentType", array()), "/");
                // line 252
                $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
                // line 253
                echo "
                            <div class=\"item\"> 
                                <div class=\"testi-wrap\"> 
                                    <div class=\"testi-img\"> 
                                        <a href=\"index.html\"> <img src=\"/web/uploads/media/default/0001/01/thumb_";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["querytestimonialListResult"], "image", array()), "id", array()), "html", null, true);
                echo "_default_td_160.";
                echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
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
        if ((array_key_exists("queryNews", $context) && (twig_length_filter($this->env, (isset($context["queryNews"]) ? $context["queryNews"] : null)) > 0))) {
            // line 303
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["queryNews"]) ? $context["queryNews"] : null));
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
        return array (  574 => 315,  562 => 309,  556 => 308,  549 => 306,  545 => 304,  541 => 303,  539 => 302,  534 => 299,  522 => 289,  520 => 288,  497 => 267,  485 => 261,  481 => 260,  473 => 257,  467 => 253,  465 => 252,  463 => 251,  461 => 250,  458 => 249,  454 => 248,  452 => 247,  410 => 207,  398 => 204,  396 => 203,  394 => 202,  392 => 201,  389 => 200,  385 => 199,  383 => 198,  358 => 178,  352 => 177,  345 => 175,  339 => 172,  329 => 167,  323 => 166,  316 => 164,  310 => 161,  299 => 155,  293 => 154,  286 => 152,  280 => 149,  274 => 145,  267 => 140,  253 => 127,  251 => 126,  248 => 125,  244 => 123,  242 => 122,  240 => 121,  238 => 120,  235 => 119,  233 => 118,  212 => 99,  208 => 97,  193 => 95,  189 => 93,  187 => 92,  180 => 88,  171 => 85,  166 => 82,  164 => 81,  158 => 79,  152 => 76,  147 => 74,  144 => 73,  142 => 72,  137 => 69,  135 => 68,  133 => 67,  131 => 66,  128 => 65,  111 => 64,  108 => 63,  106 => 62,  96 => 54,  90 => 41,  73 => 27,  64 => 23,  56 => 20,  48 => 15,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:index.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/index.html.twig");
    }
}
