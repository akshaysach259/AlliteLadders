<?php

/* ProjectCmsBundle:Default:slider.html.twig */
class __TwigTemplate_986d6d73a9f50e0c37380fd21cfe4210a3a98821f3aff940020043ff8678f50a extends Twig_Template
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
        echo "


            <!-- Main Slider Start -->
            <section class=\"main-slide\">
                <div id=\"naturix-slider\" class=\"owl-carousel nav-1\">
                    <div class=\"item\"> 
                        <img alt=\"..\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/slider/slide-1.jpg"), "html", null, true);
        echo "\" />
                        <div class=\"tbl-wrp slide-2\">
                            <div class=\"text-middle\">
                                <div class=\"tbl-cell\">
                                    <div class=\"slide-caption container text-center\">                                
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\"> 
                        <img alt=\"..\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/slider/slide-2.jpg"), "html", null, true);
        echo "\" />
                        <div class=\"tbl-wrp slide-2\">
                            <div class=\"text-middle\">
                                <div class=\"tbl-cell\">
                                    <div class=\"slide-caption container text-center\">                                
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Main Slider Ends -->   
";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 20,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:slider.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/slider.html.twig");
    }
}
