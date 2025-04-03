<?php

/* ProjectCmsBundle:Default:header.html.twig */
class __TwigTemplate_4ea4364c467e4fbfe8549733ab85bd6130190b895ca1e9d754a56310ef1d7995 extends Twig_Template
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
        // line 10
        echo "

        <!-- WRAPPER -->
        <main class=\"wrapper home-wrap\"> 
            <!-- CONTENT AREA -->

            <!-- Main Header Start -->
            <header class=\"main-header\">                  
                <div class=\"container-fluid rel-div\">
                    <div class=\"col-lg-4 col-sm-8\">
                        <div class=\"main-logo\">
                            <a href=\"index.html\"> <img alt=\"\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/logo/main-logo.png"), "html", null, true);
        echo "\" />  </a>
                            <span class=\"medium-font\">THE RIGHT PLACE FOR ALUMINIUM LADDERS</span>
                    </div>
                        </div>

                    <div class=\"col-lg-8 responsive-menu\">  
                        <div class=\"responsive-toggle fa fa-bars\"> </div>
                        <nav class=\"fix-navbar\" id=\"primary-navigation\">            
                            <ul class=\"primary-navbar\">                                                
                                <li class=\"dropdown active\">
                                <a href=\"/\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >Home</a>                                          
                                </li>";
        // line 33
        if ((array_key_exists("mainMenu", $context) && (twig_length_filter($this->env, ($context["mainMenu"] ?? null)) > 0))) {
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mainMenu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mainMenuResult"]) {
                // line 35
                echo "
                                <li class=\"dropdown\">
                                    <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["mainMenuResult"], "pageUrl", array()))), "html", null, true);
                echo "\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["mainMenuResult"], "pageTitle", array())), "html", null, true);
                echo "</a>";
                // line 39
                if (($this->getAttribute($context["mainMenuResult"], "pageUrl", array()) == "products")) {
                    // line 40
                    if ((array_key_exists("mainProductMenu", $context) && (twig_length_filter($this->env, ($context["mainProductMenu"] ?? null)) > 0))) {
                        // line 41
                        echo "\t\t\t\t       <ul class=\"dropdown-menu\">";
                        // line 42
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["mainProductMenu"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["mainProductMenu"]) {
                            // line 43
                            echo "\t\t\t\t\t     <li class=\"dropdown\"><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["mainProductMenu"], "pageUrl", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["mainProductMenu"], "pageTitle", array())), "html", null, true);
                            echo "</a></li>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainProductMenu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 45
                        echo "\t\t\t\t       </ul>";
                    }
                } else {
                    // line 49
                    if (($this->getAttribute(($context["submenu"] ?? null), $this->getAttribute($context["mainMenuResult"], "id", array()), array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["submenu"] ?? null), $this->getAttribute($context["mainMenuResult"], "id", array()), array(), "array")) > 0))) {
                        // line 50
                        echo "
                                    <ul class=\"dropdown-menu\">";
                        // line 52
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["submenu"] ?? null), $this->getAttribute($context["mainMenuResult"], "id", array()), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["submenuResult"]) {
                            // line 53
                            echo "                                        <li class=\"dropdown\">
                                            <a href=\"";
                            // line 54
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["submenuResult"], "pageUrl", array()))), "html", null, true);
                            echo "\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >";
                            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["submenuResult"], "pageTitle", array())), "html", null, true);
                            echo "</a>";
                            // line 55
                            if (($this->getAttribute(($context["subthirdmenu"] ?? null), $this->getAttribute($context["submenuResult"], "id", array()), array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["subthirdmenu"] ?? null), $this->getAttribute($context["submenuResult"], "id", array()), array(), "array")) > 0))) {
                                // line 56
                                echo "<ul class=\"dropdown-menu\">";
                                // line 57
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["subthirdmenu"] ?? null), $this->getAttribute($context["submenuResult"], "id", array()), array(), "array"));
                                foreach ($context['_seq'] as $context["_key"] => $context["subthirdmenus"]) {
                                    echo " 
<li class=\"dropdown\">
<a href=\"";
                                    // line 59
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["subthirdmenus"], "pageUrl", array()))), "html", null, true);
                                    echo "\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >";
                                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["subthirdmenus"], "pageTitle", array())), "html", null, true);
                                    echo "</a>
</li>";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subthirdmenus'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 62
                                echo "</ul>";
                            }
                            // line 64
                            echo "
                                        </li>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenuResult'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 67
                        echo "                                    </ul>";
                    }
                }
                // line 71
                echo "

                                </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainMenuResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 76
        echo "
                            </ul> 
                         
                        </nav>
                        
                    </div>
                    
        <div class=\"col-lg-2 col-sm-4 cart-megamenu\">
\t\t<div class=\"responsive-toggle fa fa-bars\"> </div>
\t\t</div>
                    
                    
                </div>  
            </header>


";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  137 => 71,  133 => 67,  126 => 64,  123 => 62,  113 => 59,  106 => 57,  104 => 56,  102 => 55,  97 => 54,  94 => 53,  90 => 52,  87 => 50,  85 => 49,  81 => 45,  71 => 43,  67 => 42,  65 => 41,  63 => 40,  61 => 39,  56 => 37,  52 => 35,  48 => 34,  46 => 33,  32 => 21,  19 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:header.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/header.html.twig");
    }
}
