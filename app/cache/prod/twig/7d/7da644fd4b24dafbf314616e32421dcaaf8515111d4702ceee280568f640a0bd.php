<?php

/* ProjectCmsBundle:Default:productlist.html.twig */
class __TwigTemplate_cfcb1b57e34ee99adf228dbb2d14dbe418567741a264464ab428da160bed78cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectCmsBundle::layout.html.twig", "ProjectCmsBundle:Default:productlist.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

<div class=\"row\" style=\"margin-right: 6px;margin-left: 27px;\">
                         ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:menulist"));
        echo "
                    <div class=\"col-md-9\">
                                 

                                <div id=\"list-view\" class=\"tab-pane fade active in\" role=\"tabpanel\">
                                    <div class=\"row\"> 
                 ";
        // line 14
        $context["imageType"] = "";
        // line 15
        echo "\t\t\t\t";
        if ((array_key_exists("result", $context) && (twig_length_filter($this->env, (isset($context["result"]) ? $context["result"] : null)) > 0))) {
            // line 16
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["querytoolsResult"]) {
                // line 17
                echo "
\t\t\t\t";
                // line 18
                $context["imageType"] = "jpeg";
                // line 19
                echo "\t\t\t\t";
                if (($this->getAttribute($context["querytoolsResult"], "image", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array(), "any", false, true), "contentType", array(), "any", true, true))) {
                    // line 20
                    echo "\t\t\t\t";
                    $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array()), "contentType", array()), "/");
                    // line 21
                    echo "\t\t\t\t";
                    $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
                    // line 22
                    echo "                ";
                }
                // line 23
                echo "
                                        <div class=\"col-sm-12\"> 
                                            <div class=\"deal-item list-view\">
                                               ";
                // line 31
                echo "                                                <div class=\"deal-content\">
                                                 
                                                    <div class=\"deal-text\">
                                                        <h4 class=\"sub-title\"> ";
                // line 34
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["querytoolsResult"], "pageTitle", array())), "html", null, true);
                echo " </h4>
                                                        <h2 class=\"fsz-30 pb-15\"> <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["querytoolsResult"], "pageUrl", array()))), "html", null, true);
                echo "\"> <span class=\"light-font\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["querytoolsResult"], "pageTitle", array())), "html", null, true);
                echo " </span> <strong></strong> </a> </h2>
                                                       <div class=\"price pt-15\"> 
\t\t\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t\t<span class=\"prod-tag tag-1\"> <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["querytoolsResult"], "pageUrl", array()))), "html", null, true);
                echo "\"> View</a></span> 
\t\t\t\t\t\t\t</div>
                                                           </div>
                                                    </div>
                                                    <div class=\"img\"> 
                                                     ";
                // line 43
                if (((isset($context["imageType"]) ? $context["imageType"] : null) == "x-shockwave-flash")) {
                    // line 44
                    echo "    <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0\" width=\"150\" height=\"200\">
  <param name=\"movie\" value=\"/web/uploads/media/default/0001/01/";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" />
  <param name=\"quality\" value=\"high\" />
  <embed src=\"/web/uploads/media/default/0001/01/";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"150\" height=\"200\"></embed>
</object>
  \t\t\t\t       ";
                } else {
                    // line 49
                    echo "                  ";
                    if (($this->getAttribute($context["querytoolsResult"], "image", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array(), "any", false, true), "id", array(), "any", true, true))) {
                        // line 50
                        echo "                                                    <img alt=\"\" src=\"../uploads/media/default/0001/01/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["querytoolsResult"], "image", array()), "providerReference", array()), "html", null, true);
                        echo "\" style=\"width:70%\">
                                                   ";
                    }
                    // line 52
                    echo "                                                     ";
                }
                // line 53
                echo "                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['querytoolsResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 60
        echo "



                                    </div>

                                    <div class=\"rel-div pt-50\">
                                        <div class=\"divider-full-1\"></div>
                                        ";
        // line 72
        echo "                                    </div>                            

                                  ";
        // line 85
        echo "



                                </div>
                            </div>
                        </div>
                    </div>



 ";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:productlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 85,  152 => 72,  142 => 60,  130 => 53,  127 => 52,  121 => 50,  118 => 49,  112 => 47,  107 => 45,  104 => 44,  102 => 43,  94 => 38,  86 => 35,  82 => 34,  77 => 31,  72 => 23,  69 => 22,  66 => 21,  63 => 20,  60 => 19,  58 => 18,  55 => 17,  50 => 16,  47 => 15,  45 => 14,  36 => 8,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:productlist.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/productlist.html.twig");
    }
}
