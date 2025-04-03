<?php

/* SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig */
class __TwigTemplate_9988a9c5d4ec4b49b3a12a6663c668fb155d568154c3641d01bd329ffc142e68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig", "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig", 12);
        $this->blocks = array(
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        // line 15
        echo "    <span class=\"mosaic-box-label label label-primary pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>
";
    }

    // line 18
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        // line 19
        echo "    <span class=\"mosaic-box-label label label-primary pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>

    ";
        // line 21
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "width", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "width", array()), "html", null, true);
            if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "height", array())) {
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "height", array()), "html", null, true);
            }
            echo "px";
        }
        // line 22
        echo "    ";
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "length", array()) > 0)) {
            // line 23
            echo "        (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "length", array()), "html", null, true);
            echo ")
    ";
        }
        // line 25
        echo "
    <br />

    ";
        // line 28
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "authorname", array()))) {
            // line 29
            echo "       ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "authorname", array()), "html", null, true);
            echo "
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "copyright", array())) &&  !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "authorname", array())))) {
            // line 33
            echo "        ~
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "copyright", array()))) {
            // line 37
            echo "        &copy; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "copyright", array()), "html", null, true);
            echo "
    ";
        }
        // line 39
        echo "
";
    }

    // line 42
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "edit"), "method"))) {
            // line 44
            echo "        <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : null)))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", array()), 40), "html", null, true);
            echo "</a>
    ";
        } elseif (($this->getAttribute(        // line 45
(isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "SHOW", 1 => (isset($context["object"]) ? $context["object"] : null)), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => "show"), "method"))) {
            // line 46
            echo "        <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "show", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : null)))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", array()), 40), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", array()), 40), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 48,  121 => 46,  119 => 45,  112 => 44,  109 => 43,  106 => 42,  101 => 39,  95 => 37,  93 => 36,  90 => 35,  86 => 33,  84 => 32,  81 => 31,  75 => 29,  73 => 28,  68 => 25,  62 => 23,  59 => 22,  49 => 21,  43 => 19,  40 => 18,  33 => 15,  30 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/media-bundle/Resources/views/MediaAdmin/list_outer_rows_mosaic.html.twig");
    }
}
