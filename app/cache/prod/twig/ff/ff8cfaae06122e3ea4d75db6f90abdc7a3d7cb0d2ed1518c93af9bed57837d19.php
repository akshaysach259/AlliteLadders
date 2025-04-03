<?php

/* SonataAdminBundle:CRUD:base_list_inner_row.html.twig */
class __TwigTemplate_27d8c6b13ca99d582279d88a36a6d25476719c9f845dc002c20be2220bd98737 extends Twig_Template
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
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 13
            if ((($this->getAttribute($context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array()))) {
            } elseif ((($this->getAttribute(            // line 15
$context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array()))) {
            } else {
                // line 18
                echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, ($context["object"] ?? null), $context["field_description"]);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 18,  25 => 15,  23 => 13,  19 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_inner_row.html.twig");
    }
}
