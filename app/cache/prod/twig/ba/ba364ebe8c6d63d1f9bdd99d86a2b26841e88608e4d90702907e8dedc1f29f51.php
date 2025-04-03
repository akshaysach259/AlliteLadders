<?php

/* ProjectCmsBundle:Default:staticSlider.html.twig */
class __TwigTemplate_21818323466be8c8eca1b64ac85656004c2fe65c135e5ee10f2e4587a3610f8b extends Twig_Template
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
        echo "<!--Static Slider-->
<section>
<div style=\"padding: 0px 0 0px;\"> <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/img/extra/breadcrumb-1.jpg"), "html", null, true);
        echo "\"></div>
</section>
<!--Static Slider-->
";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:staticSlider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:staticSlider.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/staticSlider.html.twig");
    }
}
