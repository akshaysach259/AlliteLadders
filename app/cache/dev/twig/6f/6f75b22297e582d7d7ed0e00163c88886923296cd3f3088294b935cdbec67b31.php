<?php

/* ProjectCmsBundle:Default:header.html.twig */
class __TwigTemplate_97fd0357bf25531a898bc15601365e0f1e376fff35b673e354ac0303db328bb3 extends Twig_Template
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
        $__internal_58653b467422cf203f7d803fff01b5b7f923200be56be02c48632056962319ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58653b467422cf203f7d803fff01b5b7f923200be56be02c48632056962319ca->enter($__internal_58653b467422cf203f7d803fff01b5b7f923200be56be02c48632056962319ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjectCmsBundle:Default:header.html.twig"));

        // line 1
        echo "      ";
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
                                </li> 
                             ";
        // line 33
        if ((array_key_exists("mainMenu", $context) && (twig_length_filter($this->env, (isset($context["mainMenu"]) ? $context["mainMenu"] : $this->getContext($context, "mainMenu"))) > 0))) {
            // line 34
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mainMenu"]) ? $context["mainMenu"] : $this->getContext($context, "mainMenu")));
            foreach ($context['_seq'] as $context["_key"] => $context["mainMenuResult"]) {
                // line 35
                echo "
                                <li class=\"dropdown\">
                                    <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["mainMenuResult"], "pageUrl", array()))), "html", null, true);
                echo "\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["mainMenuResult"], "pageTitle", array())), "html", null, true);
                echo "</a>

\t\t\t\t";
                // line 39
                if (($this->getAttribute($context["mainMenuResult"], "pageUrl", array()) == "products")) {
                    // line 40
                    echo "\t\t\t\t\t";
                    if ((array_key_exists("mainProductMenu", $context) && (twig_length_filter($this->env, (isset($context["mainProductMenu"]) ? $context["mainProductMenu"] : $this->getContext($context, "mainProductMenu"))) > 0))) {
                        // line 41
                        echo "\t\t\t\t       <ul class=\"dropdown-menu\">
\t\t\t\t\t ";
                        // line 42
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["mainProductMenu"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["mainProductMenu"]) {
                            // line 43
                            echo "\t\t\t\t\t     <li class=\"dropdown\"><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["mainProductMenu"], "pageUrl", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["mainProductMenu"], "pageTitle", array())), "html", null, true);
                            echo "</a></li>
\t\t\t\t\t ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainProductMenu'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 45
                        echo "\t\t\t\t       </ul>
\t\t\t\t       ";
                    }
                    // line 47
                    echo "\t\t\t\t";
                } else {
                    // line 48
                    echo "
\t\t\t          ";
                    // line 49
                    if (($this->getAttribute((isset($context["submenu"]) ? $context["submenu"] : null), $this->getAttribute($context["mainMenuResult"], "id", array()), array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")), $this->getAttribute($context["mainMenuResult"], "id", array()), array(), "array")) > 0))) {
                        // line 50
                        echo "
                                    <ul class=\"dropdown-menu\"> 
\t\t\t              ";
                        // line 52
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")), $this->getAttribute($context["mainMenuResult"], "id", array()), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["submenuResult"]) {
                            // line 53
                            echo "                                        <li class=\"dropdown\">
                                            <a href=\"";
                            // line 54
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["submenuResult"], "pageUrl", array()))), "html", null, true);
                            echo "\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >";
                            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["submenuResult"], "pageTitle", array())), "html", null, true);
                            echo "</a>
\t\t\t               ";
                            // line 55
                            if (($this->getAttribute((isset($context["subthirdmenu"]) ? $context["subthirdmenu"] : null), $this->getAttribute($context["submenuResult"], "id", array()), array(), "array", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["subthirdmenu"]) ? $context["subthirdmenu"] : $this->getContext($context, "subthirdmenu")), $this->getAttribute($context["submenuResult"], "id", array()), array(), "array")) > 0))) {
                                // line 56
                                echo "<ul class=\"dropdown-menu\"> 
";
                                // line 57
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subthirdmenu"]) ? $context["subthirdmenu"] : $this->getContext($context, "subthirdmenu")), $this->getAttribute($context["submenuResult"], "id", array()), array(), "array"));
                                foreach ($context['_seq'] as $context["_key"] => $context["subthirdmenus"]) {
                                    echo " 
<li class=\"dropdown\">
<a href=\"";
                                    // line 59
                                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["subthirdmenus"], "pageUrl", array()))), "html", null, true);
                                    echo "\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >";
                                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["subthirdmenus"], "pageTitle", array())), "html", null, true);
                                    echo "</a>
</li> 
";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subthirdmenus'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 62
                                echo "</ul>
\t\t\t\t       ";
                            }
                            // line 64
                            echo "
                                        </li> 
                                     ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenuResult'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 67
                        echo "                                    </ul>
\t\t\t  ";
                    }
                    // line 69
                    echo "
\t\t\t";
                }
                // line 71
                echo "

                                </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainMenuResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t";
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
        
        $__internal_58653b467422cf203f7d803fff01b5b7f923200be56be02c48632056962319ca->leave($__internal_58653b467422cf203f7d803fff01b5b7f923200be56be02c48632056962319ca_prof);

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
        return array (  177 => 76,  174 => 75,  165 => 71,  161 => 69,  157 => 67,  149 => 64,  145 => 62,  134 => 59,  127 => 57,  124 => 56,  122 => 55,  116 => 54,  113 => 53,  109 => 52,  105 => 50,  103 => 49,  100 => 48,  97 => 47,  93 => 45,  82 => 43,  78 => 42,  75 => 41,  72 => 40,  70 => 39,  63 => 37,  59 => 35,  54 => 34,  52 => 33,  37 => 21,  24 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("      {#  <div id=\"loading\">
            <div class=\"loader\">
                <div class=\"dot\"></div>
                <div class=\"dot\"></div>
                <div class=\"dot\"></div>
                <div class=\"dot\"></div>
                <div class=\"dot\"></div>
            </div>
        </div>#}


        <!-- WRAPPER -->
        <main class=\"wrapper home-wrap\"> 
            <!-- CONTENT AREA -->

            <!-- Main Header Start -->
            <header class=\"main-header\">                  
                <div class=\"container-fluid rel-div\">
                    <div class=\"col-lg-4 col-sm-8\">
                        <div class=\"main-logo\">
                            <a href=\"index.html\"> <img alt=\"\" src=\"{{ asset('bundles/projectcms/img/logo/main-logo.png') }}\" />  </a>
                            <span class=\"medium-font\">THE RIGHT PLACE FOR ALUMINIUM LADDERS</span>
                    </div>
                        </div>

                    <div class=\"col-lg-8 responsive-menu\">  
                        <div class=\"responsive-toggle fa fa-bars\"> </div>
                        <nav class=\"fix-navbar\" id=\"primary-navigation\">            
                            <ul class=\"primary-navbar\">                                                
                                <li class=\"dropdown active\">
                                <a href=\"/\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >Home</a>                                          
                                </li> 
                             {% if mainMenu is defined and mainMenu|length>0 %}
\t\t\t{% for mainMenuResult in mainMenu %}

                                <li class=\"dropdown\">
                                    <a href=\"{{ path('_page_article_detail', { 'urlAlias':mainMenuResult.pageUrl }) }}\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >{{mainMenuResult.pageTitle|upper}}</a>

\t\t\t\t{% if mainMenuResult.pageUrl=='products' %}
\t\t\t\t\t{% if mainProductMenu is defined and mainProductMenu|length>0 %}
\t\t\t\t       <ul class=\"dropdown-menu\">
\t\t\t\t\t {% for mainProductMenu in mainProductMenu %}
\t\t\t\t\t     <li class=\"dropdown\"><a href=\"{{ path('_page_article_detail', { 'urlAlias':mainProductMenu.pageUrl }) }}\">{{mainProductMenu.pageTitle|upper}}</a></li>
\t\t\t\t\t {% endfor %}
\t\t\t\t       </ul>
\t\t\t\t       {% endif %}
\t\t\t\t{% else %}

\t\t\t          {% if submenu[mainMenuResult.id] is defined and submenu[mainMenuResult.id]|length>0 %}

                                    <ul class=\"dropdown-menu\"> 
\t\t\t              {% for submenuResult in submenu[mainMenuResult.id] %}
                                        <li class=\"dropdown\">
                                            <a href=\"{{ path('_page_article_detail', { 'urlAlias':submenuResult.pageUrl }) }}\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >{{submenuResult.pageTitle|upper}}</a>
\t\t\t               {% if subthirdmenu[submenuResult.id] is defined and subthirdmenu[submenuResult.id]|length>0 %}
<ul class=\"dropdown-menu\"> 
{% for subthirdmenus in subthirdmenu[submenuResult.id] %} 
<li class=\"dropdown\">
<a href=\"{{ path('_page_article_detail', { 'urlAlias':subthirdmenus.pageUrl }) }}\" class=\"dropdown-toggle\" role=\"button\" aria-haspopup=\"true\" >{{subthirdmenus.pageTitle|upper}}</a>
</li> 
{% endfor %}
</ul>
\t\t\t\t       {% endif %}

                                        </li> 
                                     {% endfor %}
                                    </ul>
\t\t\t  {% endif %}

\t\t\t{% endif %}


                                </li>
                        {% endfor %}
\t\t\t{% endif %}

                            </ul> 
                         
                        </nav>
                        
                    </div>
                    
        <div class=\"col-lg-2 col-sm-4 cart-megamenu\">
\t\t<div class=\"responsive-toggle fa fa-bars\"> </div>
\t\t</div>
                    
                    
                </div>  
            </header>


", "ProjectCmsBundle:Default:header.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/header.html.twig");
    }
}
