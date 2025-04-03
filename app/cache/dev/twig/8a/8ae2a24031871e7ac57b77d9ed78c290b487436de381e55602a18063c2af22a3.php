<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4b6620d6b1bc69da87d6e4630a3e94cfb685cd0431107f663c99a07a08558448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecdd00e3f8fe771de284d705f6477cb9b199d46ad3863e170fdad05d0c9cc190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdd00e3f8fe771de284d705f6477cb9b199d46ad3863e170fdad05d0c9cc190->enter($__internal_ecdd00e3f8fe771de284d705f6477cb9b199d46ad3863e170fdad05d0c9cc190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecdd00e3f8fe771de284d705f6477cb9b199d46ad3863e170fdad05d0c9cc190->leave($__internal_ecdd00e3f8fe771de284d705f6477cb9b199d46ad3863e170fdad05d0c9cc190_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d67aef4e826e24881a8e8220c1b3067fb07712efaa2635cf4113463c3bba62e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67aef4e826e24881a8e8220c1b3067fb07712efaa2635cf4113463c3bba62e5->enter($__internal_d67aef4e826e24881a8e8220c1b3067fb07712efaa2635cf4113463c3bba62e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d67aef4e826e24881a8e8220c1b3067fb07712efaa2635cf4113463c3bba62e5->leave($__internal_d67aef4e826e24881a8e8220c1b3067fb07712efaa2635cf4113463c3bba62e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4706a6a32eeda2fcf63dedafe647c8cfa0b9f768919137b812094d8b2838a1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4706a6a32eeda2fcf63dedafe647c8cfa0b9f768919137b812094d8b2838a1b0->enter($__internal_4706a6a32eeda2fcf63dedafe647c8cfa0b9f768919137b812094d8b2838a1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4706a6a32eeda2fcf63dedafe647c8cfa0b9f768919137b812094d8b2838a1b0->leave($__internal_4706a6a32eeda2fcf63dedafe647c8cfa0b9f768919137b812094d8b2838a1b0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0eebd48c1aca93e5eea11fde78759cc87414f877d61fa3977289e97fa007f148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eebd48c1aca93e5eea11fde78759cc87414f877d61fa3977289e97fa007f148->enter($__internal_0eebd48c1aca93e5eea11fde78759cc87414f877d61fa3977289e97fa007f148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0eebd48c1aca93e5eea11fde78759cc87414f877d61fa3977289e97fa007f148->leave($__internal_0eebd48c1aca93e5eea11fde78759cc87414f877d61fa3977289e97fa007f148_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
