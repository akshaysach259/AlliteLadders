<?php

/* ProjectCmsBundle:Default:fabrication.html.twig */
class __TwigTemplate_6a42389c8e5abc98a3f67bdfb48c90711cf8f65d98c9508770c042647b462bb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectCmsBundle::layout.html.twig", "ProjectCmsBundle:Default:fabrication.html.twig", 1);
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


            <!-- Naturix Goods Starts-->
            <section class=\"naturix-goods light-bg\">
                <div class=\"container\"> 
                    <div class=\"title-wrap\">
                        <h2 class=\"section-title\"> <span class=\"light-font\">Our </span> <strong>Fabrication</strong> </h2>
                    </div>
            
<div class=\"tab-content organic-content row\"> 
                        <div id=\"naturix-tab-1\" class=\"tab-pane fade active in\"> 
                            <div class=\"naturix-slider-1 dots-1\">";
        // line 20
        if ((array_key_exists("result", $context) && (twig_length_filter($this->env, ($context["result"] ?? null)) > 0))) {
            // line 21
            echo "        <div class=\"item\">";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
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
                // line 24
                $context["imageType"] = "jpeg";
                // line 25
                $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["queryProductsResult"], "image", array()), "contentType", array()), "/");
                // line 26
                $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
                // line 27
                echo "
            <div class=\"product-box\"> 
                <div class=\"product-media\" style=\"height: 240px;\"> 
                    <img class=\"prod-img\" alt=\"\" src=\"/web/uploads/media/default/0001/01/thumb_";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryProductsResult"], "image", array()), "id", array()), "html", null, true);
                echo "_default_td_300.";
                echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
                echo "\" />     
                 </div>                                           
                <div class=\"product-caption\" style=\"height: 75px;\"> 
                    <h3 class=\"product-title\">
<a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_fabrication_detail", array("urlAlias" => $this->getAttribute($context["queryProductsResult"], "pageUrl", array()))), "html", null, true);
                echo "\">";
                echo "  <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["queryProductsResult"], "fabricationName", array()), "html", null, true);
                echo "</strong></a>
<!--<a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_msfabrication_list", array("urlAlias" => $this->getAttribute($context["queryProductsResult"], "pageUrl", array()))), "html", null, true);
                echo "\">";
                echo "  <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["queryProductsResult"], "pageTitle", array()), "html", null, true);
                echo "</strong></a> -->
                    </h3>
\t\t<div class=\"price\"> 
\t\t<strong class=\"clr-txt\"><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_fabrication_detail", array("urlAlias" => $this->getAttribute($context["queryProductsResult"], "pageUrl", array()))), "html", null, true);
                echo "\" style=\"color:#7fba00\">View More</a></strong>
\t\t</div>
                </div>
            </div>";
                // line 42
                if (((($this->getAttribute($context["loop"], "index", array()) % 4) == 0) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 43
                    echo "        </div><div class=\"item\">";
                }
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
            // line 47
            echo "         </div>";
        }
        // line 49
        echo "

 
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- / Naturix Goods Ends -->

            <!-- Naturix Quality Starts-->

            <div class=\"container\"> <div class=\"divider-full-1\"></div> </div>";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:fabrication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  128 => 47,  113 => 43,  111 => 42,  105 => 38,  96 => 35,  89 => 34,  80 => 30,  75 => 27,  73 => 26,  71 => 25,  69 => 24,  52 => 22,  50 => 21,  48 => 20,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:fabrication.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/fabrication.html.twig");
    }
}
