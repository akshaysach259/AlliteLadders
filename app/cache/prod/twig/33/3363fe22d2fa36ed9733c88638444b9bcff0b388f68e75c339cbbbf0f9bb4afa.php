<?php

/* ProjectCmsBundle:Default:videos.html.twig */
class __TwigTemplate_1db5867d10a63d6b9e03d18ebe5d335a008ff9e3be9963e87a7ba7637a1ca176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectCmsBundle::layout.html.twig", "ProjectCmsBundle:Default:videos.html.twig", 1);
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
<!--Commercial Projects Section-->
    <section class=\"commercial-projects-section\">
    \t<div class=\"auto-container\">
        \t<div class=\"sec-title centered\" style=\"text-align:center\">
            \t<h2>OUR VIDEOS</h2>
                <div class=\"separator\"></div>
            </div>
            
<div class=\"row\" style=\"text-align:center;margin-left:80px;\">            \t
";
        // line 13
        if ((array_key_exists("result", $context) && (twig_length_filter($this->env, (isset($context["result"]) ? $context["result"] : null)) > 0))) {
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["querytoolsResult"]) {
                // line 15
                echo "
                <!--Project Block Two-->
                <div class=\"project-block-four col-md-3\" style=\"margin-left:40px;\">
                    <div class=\"inner-box\">
                        <div class=\"image\">
                            <iframe id=\"ytvideoDetail\" width=\"320\" height=\"320\" src=\"https://www.youtube.com/embed/";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["querytoolsResult"], "youtubeCode", array()), "html", null, true);
                echo "?rel=0&autoplay=0&enablejsapi=1&playerapiid=ytvideoDetail&version=3\" frameborder=\"0\" allowfullscreen></iframe>
                            <div class=\"overlay-box\">
                                <div class=\"content\">
                                    <a href=\"\" class=\"search-btn lightbox-image\" data-fancybox=\"images\" data-caption=\"\"><span class=\"flaticon-plus-zoom\"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"lower-content\">
                            <b><a href=\"#\">";
                // line 28
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["querytoolsResult"], "pageTitle", array())), "html", null, true);
                echo "</a></b>
                            
                        </div>
                    </div>
                </div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['querytoolsResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 36
        echo "
             
\t\t\t</div>
            
        </div>
    </section>
    <!--End Commercial Projects Section-->




 ";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 36,  67 => 28,  56 => 20,  49 => 15,  45 => 14,  43 => 13,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:videos.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/videos.html.twig");
    }
}
