<?php

/* ProjectCmsBundle:Default:detail.html.twig */
class __TwigTemplate_abba8bbfbccd9ed375a2dc12d99e0e92746584fb721dea026496e9c087e0b444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectCmsBundle::layout.html.twig", "ProjectCmsBundle:Default:detail.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<section class=\"sec-space-bottom\">
                <div class=\"container pt-50\">
                    <div class=\"row\">
                 \t";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:menulist"));
        echo "
                        <div class=\"col-md-9 pt-15\">
                            <div class=\"blog-single\">       
                                <div class=\"content\">        
                                    <div class=\"blog-media\">
                                        <h2 class=\"fsz-30\"> <span class=\"light-font\">";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "pageTitle", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "pageTitle", array())), "html", null, true);
        }
        echo "</span></h2>
                                    </div>
                                    <div class=\"caption\">                                       
                                   ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "pageDescription", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "pageDescription", array());
        }
        // line 17
        echo "                                    </div>   
                                </div>
                               
                
                            </div>
                        </div>                        
                    </div>
                </div>                
            </section>


 ";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  53 => 16,  45 => 13,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:detail.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/detail.html.twig");
    }
}
