<?php

/* ProjectCmsBundle:Default:products.html.twig */
class __TwigTemplate_8e64c278422a8b58131e931233eac23568b400efb2877f5386eb553a5c9fd162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectCmsBundle::layout.html.twig", "ProjectCmsBundle:Default:products.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

<div class=\"row\" style=\"margin-right: 6px;margin-left: 27px;\">
                        <div class=\"col-md-3 pt-15\">
                            <div class=\"widget-wrap\">
                                <h2 class=\"widget-title\"> <span class=\"light-font\">Refine by</span> <strong>category</strong> </h2>
                                <div class=\"divider-full-1\"></div>";
        // line 12
        if ((array_key_exists("productquery", $context) && (twig_length_filter($this->env, ($context["productquery"] ?? null)) > 0))) {
            // line 13
            echo "                                <ul class=\"cate-widget\">";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["productquery"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mainProductMenu"]) {
                // line 15
                echo "                                 <li> <i class=\"fa fa-arrow-circle-o-right clr-txt\"></i> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["mainProductMenu"], "pageUrl", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mainProductMenu"], "pageTitle", array()), "html", null, true);
                echo "</a> </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainProductMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t\t</ul>";
        }
        // line 19
        echo "                             </div>

                      
                        </div>

                        <div class=\"col-md-9\">";
        // line 39
        echo "             

                                <div id=\"list-view\" class=\"tab-pane fade active in\" role=\"tabpanel\">
                                    <div class=\"row\">";
        // line 43
        $context["imageType"] = "";
        // line 44
        if ((array_key_exists("result", $context) && (twig_length_filter($this->env, ($context["result"] ?? null)) > 0))) {
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["querytoolsResult"]) {
                // line 47
                $context["imageType"] = "jpeg";
                // line 48
                if (($this->getAttribute($context["querytoolsResult"], "image", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array(), "any", false, true), "contentType", array(), "any", true, true))) {
                    // line 49
                    $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array()), "contentType", array()), "/");
                    // line 50
                    $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
                }
                // line 52
                echo "
                                        <div class=\"col-sm-12\"> 
                                            <div class=\"deal-item list-view\">";
                // line 60
                echo "                                                <div class=\"deal-content\">
                                                 
                                                    <div class=\"deal-text\">
                                                        <h4 class=\"sub-title\">";
                // line 63
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["querytoolsResult"], "productName", array())), "html", null, true);
                echo " </h4>
                                                        <h2 class=\"fsz-30 pb-15\"> <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_product_detail", array("urlAlias" => $this->getAttribute($context["querytoolsResult"], "pageUrl", array()))), "html", null, true);
                echo "\"> <span class=\"light-font\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["querytoolsResult"], "productName", array())), "html", null, true);
                echo " </span> <strong></strong> </a> </h2>";
                // line 65
                if ((twig_length_filter($this->env, $this->getAttribute($context["querytoolsResult"], "shortDescription", array())) > 10)) {
                    // line 66
                    echo "                                                        <p>";
                    echo $this->getAttribute($context["querytoolsResult"], "shortDescription", array());
                    echo "</p>";
                } else {
                    // line 68
                    echo "                                                        <p>";
                    echo twig_truncate_filter($this->env, $this->getAttribute($context["querytoolsResult"], "pageDescription", array()), 150);
                    echo "</p>";
                }
                // line 70
                echo "                                                        <div class=\"price pt-15\"> 
\t\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t<span class=\"prod-tag tag-1\"> <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_product_detail", array("urlAlias" => $this->getAttribute($context["querytoolsResult"], "pageUrl", array()))), "html", null, true);
                echo "\"> View</a></span> 
\t\t\t\t\t\t\t</div>
                                                           </div>
                                                    </div>
                                                    <div class=\"img\">";
                // line 77
                if ((($context["imageType"] ?? null) == "x-shockwave-flash")) {
                    // line 78
                    echo "    <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0\" width=\"150\" height=\"200\">
  <param name=\"movie\" value=\"/web/uploads/media/default/0001/01/";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" />
  <param name=\"quality\" value=\"high\" />
  <embed src=\"/web/uploads/media/default/0001/01/";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"150\" height=\"200\"></embed>
</object>";
                } else {
                    // line 83
                    if (($this->getAttribute($context["querytoolsResult"], "image", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array(), "any", false, true), "id", array(), "any", true, true))) {
                        // line 84
                        echo "                                                    <img alt=\"\" src=\"../uploads/media/default/0001/01/thumb_";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array()), "id", array()), "html", null, true);
                        echo "_default_td_600.";
                        echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
                        echo "\">";
                    }
                }
                // line 87
                echo "                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['querytoolsResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 94
        echo "



                                    </div>

                                    <div class=\"rel-div pt-50\">
                                        <div class=\"divider-full-1\"></div>";
        // line 106
        echo "                                    </div>";
        // line 119
        echo "



                                </div>
                            </div>
                        </div>
                    </div>";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 119,  175 => 106,  166 => 94,  155 => 87,  147 => 84,  145 => 83,  140 => 81,  135 => 79,  132 => 78,  130 => 77,  123 => 72,  119 => 70,  114 => 68,  109 => 66,  107 => 65,  102 => 64,  98 => 63,  93 => 60,  89 => 52,  86 => 50,  84 => 49,  82 => 48,  80 => 47,  76 => 45,  74 => 44,  72 => 43,  67 => 39,  60 => 19,  57 => 17,  47 => 15,  43 => 14,  41 => 13,  39 => 12,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:products.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/products.html.twig");
    }
}
