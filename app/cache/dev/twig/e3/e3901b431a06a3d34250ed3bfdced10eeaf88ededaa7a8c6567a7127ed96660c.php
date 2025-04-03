<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ae40f928db61a1625f9c1df8b61290be3d1b78716206d58fe320e6b6a9b6c052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a046457dfc0613ee75acd39f280a5ffe32a401c25cf4b65a599c38f790c9163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a046457dfc0613ee75acd39f280a5ffe32a401c25cf4b65a599c38f790c9163->enter($__internal_3a046457dfc0613ee75acd39f280a5ffe32a401c25cf4b65a599c38f790c9163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a046457dfc0613ee75acd39f280a5ffe32a401c25cf4b65a599c38f790c9163->leave($__internal_3a046457dfc0613ee75acd39f280a5ffe32a401c25cf4b65a599c38f790c9163_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8914c14f755c0d03206ce510e31d1f6876df938d1cafa5980c582840d5c5424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8914c14f755c0d03206ce510e31d1f6876df938d1cafa5980c582840d5c5424->enter($__internal_d8914c14f755c0d03206ce510e31d1f6876df938d1cafa5980c582840d5c5424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d8914c14f755c0d03206ce510e31d1f6876df938d1cafa5980c582840d5c5424->leave($__internal_d8914c14f755c0d03206ce510e31d1f6876df938d1cafa5980c582840d5c5424_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7143e3fb8e1a6b83d2f469cb7651469f59b563cdc4977aa80bf3e187b855aae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7143e3fb8e1a6b83d2f469cb7651469f59b563cdc4977aa80bf3e187b855aae8->enter($__internal_7143e3fb8e1a6b83d2f469cb7651469f59b563cdc4977aa80bf3e187b855aae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7143e3fb8e1a6b83d2f469cb7651469f59b563cdc4977aa80bf3e187b855aae8->leave($__internal_7143e3fb8e1a6b83d2f469cb7651469f59b563cdc4977aa80bf3e187b855aae8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8ae16d3dae143900a90eb4811d3905b5a1157a21afb7083dab85c9e96d83616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ae16d3dae143900a90eb4811d3905b5a1157a21afb7083dab85c9e96d83616->enter($__internal_b8ae16d3dae143900a90eb4811d3905b5a1157a21afb7083dab85c9e96d83616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b8ae16d3dae143900a90eb4811d3905b5a1157a21afb7083dab85c9e96d83616->leave($__internal_b8ae16d3dae143900a90eb4811d3905b5a1157a21afb7083dab85c9e96d83616_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
