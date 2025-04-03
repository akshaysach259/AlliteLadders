<?php

/* ProjectCmsBundle:Default:blogdetail.html.twig */
class __TwigTemplate_87513c528350a0529e9ff7be8bcee75435525af7abbbd449576fa49d2d3e8244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectCmsBundle::layout.html.twig", "ProjectCmsBundle:Default:blogdetail.html.twig", 1);
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

<!--Company Section-->
    <section class=\"company-section\">
    \t<div class=\"auto-container\">
        \t<!--Sec Title-->
            <div class=\"sec-title\" style=\"text-align:center;\">
            \t<h2>";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "blogTitle", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "blogTitle", array())), "html", null, true);
        }
        echo "</h2>
                <div class=\"separator\"></div>
            </div>
            <div class=\"row clearfix\">
            \t
                <!--Content Column-->
                 <div class=\"founder-column col-md-10 col-sm-12 col-xs-12\" style=\"margin-left:40px;\">
                    
                <div class=\"row clearfix\">
                   
                    <h3>Blog Description</h3>
                    <div class=\"text\">
                        \t";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "pageDescription", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "pageDescription", array());
        }
        // line 24
        echo "                        </div>
                    
                    
                </div>

                </div>
                    
                    

                <!--Founder Column-->
             ";
        // line 57
        echo "
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Company Section-->
     



 ";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:blogdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 57,  61 => 24,  57 => 23,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:blogdetail.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/blogdetail.html.twig");
    }
}
