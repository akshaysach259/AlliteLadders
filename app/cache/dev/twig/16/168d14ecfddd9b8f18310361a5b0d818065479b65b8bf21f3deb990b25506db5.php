<?php

/* ProjectCmsBundle::layout.html.twig */
class __TwigTemplate_9b7da375f91c9cd3d45d4329eabe19af87d115c36cf85af9223173220fdc895e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ProjectCmsBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c7b86bb430d6dbe5a84caaec533a4f61c072d8dd39e15aef546127cc4c415e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7b86bb430d6dbe5a84caaec533a4f61c072d8dd39e15aef546127cc4c415e3->enter($__internal_6c7b86bb430d6dbe5a84caaec533a4f61c072d8dd39e15aef546127cc4c415e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjectCmsBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c7b86bb430d6dbe5a84caaec533a4f61c072d8dd39e15aef546127cc4c415e3->leave($__internal_6c7b86bb430d6dbe5a84caaec533a4f61c072d8dd39e15aef546127cc4c415e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4542c4a2792c8ce159480c6819e3e0a51a56dda4d4e9341aaf2f6db6e6fb24c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4542c4a2792c8ce159480c6819e3e0a51a56dda4d4e9341aaf2f6db6e6fb24c->enter($__internal_a4542c4a2792c8ce159480c6819e3e0a51a56dda4d4e9341aaf2f6db6e6fb24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

";
        
        $__internal_a4542c4a2792c8ce159480c6819e3e0a51a56dda4d4e9341aaf2f6db6e6fb24c->leave($__internal_a4542c4a2792c8ce159480c6819e3e0a51a56dda4d4e9341aaf2f6db6e6fb24c_prof);

    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body %}


{% endblock %}


", "ProjectCmsBundle::layout.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/layout.html.twig");
    }
}
