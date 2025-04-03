<?php

/* ProjectCmsBundle:Default:menulist.html.twig */
class __TwigTemplate_bed7964d95596a57e306a54f598cf203492f8de8e8101a967b4c83e16f2470d2 extends Twig_Template
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
        // line 1
        echo "       <div class=\"col-md-3 pt-15\">
                            <div class=\"widget-wrap\">
                                <h2 class=\"widget-title\"> <span class=\"light-font\">Menu</span> <strong>List</strong> </h2>
                                <div class=\"divider-full-1\"></div>

                          ";
        // line 6
        if ((array_key_exists("mainMenu", $context) && (twig_length_filter($this->env, (isset($context["mainMenu"]) ? $context["mainMenu"] : null)) > 0))) {
            // line 7
            echo "                                <ul class=\"cate-widget\">
\t\t\t         ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mainMenu"]) ? $context["mainMenu"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mainMenuResult"]) {
                // line 9
                echo "                                    <li> <i class=\"fa fa-arrow-circle-o-right clr-txt\"></i> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["mainMenuResult"], "pageUrl", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["mainMenuResult"], "pageTitle", array())), "html", null, true);
                echo "</a> </li>
                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainMenuResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "  
                                </ul>
\t\t\t   ";
        }
        // line 13
        echo "                            </div>
                       </div>
";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:menulist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  46 => 10,  35 => 9,  31 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:menulist.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/menulist.html.twig");
    }
}
