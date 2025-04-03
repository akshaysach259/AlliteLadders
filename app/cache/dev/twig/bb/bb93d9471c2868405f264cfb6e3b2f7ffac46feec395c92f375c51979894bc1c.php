<?php

/* ProjectCmsBundle:Default:slider.html.twig */
class __TwigTemplate_6bf44b22a4857bcf134bdc854d3c931e76746a5577a1291a2815f17c48068445 extends Twig_Template
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
        $__internal_970ce44cf0d5a3f405a1e6e3818398cc0094110e97f6274f9ebc222f63d0a6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970ce44cf0d5a3f405a1e6e3818398cc0094110e97f6274f9ebc222f63d0a6e6->enter($__internal_970ce44cf0d5a3f405a1e6e3818398cc0094110e97f6274f9ebc222f63d0a6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjectCmsBundle:Default:slider.html.twig"));

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
        
        $__internal_970ce44cf0d5a3f405a1e6e3818398cc0094110e97f6274f9ebc222f63d0a6e6->leave($__internal_970ce44cf0d5a3f405a1e6e3818398cc0094110e97f6274f9ebc222f63d0a6e6_prof);

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
        return array (  46 => 20,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("


            <!-- Main Slider Start -->
            <section class=\"main-slide\">
                <div id=\"naturix-slider\" class=\"owl-carousel nav-1\">
                    <div class=\"item\"> 
                        <img alt=\"..\" src=\"{{ asset('bundles/projectcms/img/slider/slide-1.jpg') }}\" />
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
                        <img alt=\"..\" src=\"{{ asset('bundles/projectcms/img/slider/slide-2.jpg') }}\" />
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
", "ProjectCmsBundle:Default:slider.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/slider.html.twig");
    }
}
