<?php

/* ProjectCmsBundle:Default:fabricationslider.html.twig */
class __TwigTemplate_8cc55fd4de7ab852168eb645da11196b10ed890f8eb6b66af20b7f263ab8bdb9 extends Twig_Template
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
        echo "<!-- Main Slider Start -->
            <section class=\"main-slide\">
                <div id=\"naturix-slider\" class=\"owl-carousel nav-1\">
                    <div class=\"item\"> 
                        <img alt=\"..\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/slider/fabricationsliderslide-1.jpg"), "html", null, true);
        echo "\" />
                        <div class=\"tbl-wrp slide-2\">
                            <div class=\"text-middle\">
                                <div class=\"tbl-cell\">
                                    <div class=\"slide-caption container text-center\">                                
                                        <div class=\"slide-title2 pb-50\">";
        // line 13
        echo "                                        </div>
                                        <div class=\"slide\">";
        // line 15
        echo " 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\"> 
                        <img alt=\"..\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/slider/fabricationsliderslide-2.jpg"), "html", null, true);
        echo "\" />
                        <div class=\"tbl-wrp slide-2\">
                            <div class=\"text-middle\">
                                <div class=\"tbl-cell\">
                                    <div class=\"slide-caption container text-center\">                                
                                        <div class=\"slide-title2 pb-50\">";
        // line 31
        echo "                                        </div>
                                        <div class=\"slide\">";
        // line 33
        echo "  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Main Slider Ends -->";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:fabricationslider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 33,  54 => 31,  46 => 23,  36 => 15,  33 => 13,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:fabricationslider.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/fabricationslider.html.twig");
    }
}
