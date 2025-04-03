<?php

/* ::base.html.twig */
class __TwigTemplate_c0362c4369bcf7bc6af8afd7481e2c1dc7fe42d34af216d534597a9d14175104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'seo' => array($this, 'block_seo'),
            'Header' => array($this, 'block_Header'),
            'Slider' => array($this, 'block_Slider'),
            'body' => array($this, 'block_body'),
            'Footer' => array($this, 'block_Footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be208f39fb15ef39e58eed6bb91f0cf147a5d747f857e40178765f3b87a7caa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be208f39fb15ef39e58eed6bb91f0cf147a5d747f857e40178765f3b87a7caa2->enter($__internal_be208f39fb15ef39e58eed6bb91f0cf147a5d747f857e40178765f3b87a7caa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 7]><html class=\"no-js ie7 oldie\" lang=\"en-US\"> <![endif]-->
<!--[if IE 8]><html class=\"no-js ie8 oldie\" lang=\"en-US\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"en\">
    <head>

";
        // line 8
        $this->displayBlock('seo', $context, $blocks);
        // line 12
        echo "        <meta charset=\"utf-8\">
        <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><![endif]-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/ico/favicon.ico"), "html", null, true);
        echo "\">


        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/css/plugin/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">  


        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/css/plugin/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">  
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/css/plugin/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">   
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/css/plugin/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/css/plugin/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"> 
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/css/plugin/subscribe-better.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"> 

        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

";
        // line 31
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 32
        echo "\t";
        // line 33
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/dist/simplelightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        // line 35
        echo "        <!--[if lt IE 9]>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/js/plugin/html5shiv.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/js/plugin/respond.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->   
        
<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c287bd37a79fc1bddf2adc6/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        
    </head>


    <body id=\"home\" class=\"wide\">

 ";
        // line 59
        $this->displayBlock('Header', $context, $blocks);
        // line 62
        echo "    <!--End Main Header -->
 <!-- / Main Header Ends -->   

    <!--Main Slider-->
";
        // line 66
        $this->displayBlock('Slider', $context, $blocks);
        // line 81
        echo " 
    <!--End Main Slider-->

\t";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "
            <!-- / CONTENT AREA -->

\t<!--Footer Style Two-->
\t";
        // line 95
        $this->displayBlock('Footer', $context, $blocks);
        // line 98
        echo "
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/js/plugin/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>   
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/js/plugin/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/js/plugin/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/js/plugin/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/js/plugin/jquery.plugin.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/js/plugin/jquery.countdown.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/js/plugin/jquery.subscribe-better.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/js/theme.js"), "html", null, true);
        echo "\"></script>

";
        // line 108
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 109
        echo "\t";
        // line 110
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/dist/simple-lightbox.js"), "html", null, true);
        echo "\"></script>
<script>
\t\$(function(){
\t\tvar \$gallery = \$('.organic-product a').simpleLightbox();

\t\t\$gallery.on('show.simplelightbox', function(){
\t\t\tconsole.log('Requested for showing');
\t\t})
\t\t
\t});
</script>
";
        // line 122
        echo "
    </body>
</html>";
        
        $__internal_be208f39fb15ef39e58eed6bb91f0cf147a5d747f857e40178765f3b87a7caa2->leave($__internal_be208f39fb15ef39e58eed6bb91f0cf147a5d747f857e40178765f3b87a7caa2_prof);

    }

    // line 8
    public function block_seo($context, array $blocks = array())
    {
        $__internal_ab19f09454979a8e66ab8fc92f3ed9367ad07560ff39cf471f250a0b2140970f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab19f09454979a8e66ab8fc92f3ed9367ad07560ff39cf471f250a0b2140970f->enter($__internal_ab19f09454979a8e66ab8fc92f3ed9367ad07560ff39cf471f250a0b2140970f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seo"));

        // line 9
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getTitle();
        echo "
";
        // line 10
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getMetadatas();
        echo "
";
        
        $__internal_ab19f09454979a8e66ab8fc92f3ed9367ad07560ff39cf471f250a0b2140970f->leave($__internal_ab19f09454979a8e66ab8fc92f3ed9367ad07560ff39cf471f250a0b2140970f_prof);

    }

    // line 59
    public function block_Header($context, array $blocks = array())
    {
        $__internal_18849fa73bdd7bd7d708446fb6c466a019a3887b81f5d74a34e4a75c5005efb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18849fa73bdd7bd7d708446fb6c466a019a3887b81f5d74a34e4a75c5005efb1->enter($__internal_18849fa73bdd7bd7d708446fb6c466a019a3887b81f5d74a34e4a75c5005efb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Header"));

        // line 60
        echo "   ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:header"));
        echo "
 ";
        
        $__internal_18849fa73bdd7bd7d708446fb6c466a019a3887b81f5d74a34e4a75c5005efb1->leave($__internal_18849fa73bdd7bd7d708446fb6c466a019a3887b81f5d74a34e4a75c5005efb1_prof);

    }

    // line 66
    public function block_Slider($context, array $blocks = array())
    {
        $__internal_d10f716a62ff19fe02d2b95f423ab2ef2a0c5b283f39e75bdee00d98a2f5fa6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10f716a62ff19fe02d2b95f423ab2ef2a0c5b283f39e75bdee00d98a2f5fa6d->enter($__internal_d10f716a62ff19fe02d2b95f423ab2ef2a0c5b283f39e75bdee00d98a2f5fa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Slider"));

        // line 67
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 68
        echo "\t";
        if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "_page_home")) {
            // line 69
            echo "           ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:slider"));
            echo "
        ";
        } elseif ((        // line 70
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "_page_article_detail")) {
            // line 71
            echo "             ";
            $context["uriParam"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
            // line 72
            echo "              ";
            $context["articleUrlAlias"] = $this->getAttribute((isset($context["uriParam"]) ? $context["uriParam"] : $this->getContext($context, "uriParam")), "urlAlias", array(), "array");
            // line 73
            echo "                  \t";
            if (((isset($context["articleUrlAlias"]) ? $context["articleUrlAlias"] : $this->getContext($context, "articleUrlAlias")) == "fabrication")) {
                // line 74
                echo "                             ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:fabricationslider"));
                echo "
                        ";
            } else {
                // line 76
                echo "                             ";
                echo twig_include($this->env, $context, "ProjectCmsBundle:Default:staticSlider.html.twig");
                echo "
                        ";
            }
            // line 78
            echo "        ";
        } else {
            // line 79
            echo "           ";
            echo twig_include($this->env, $context, "ProjectCmsBundle:Default:staticSlider.html.twig");
            echo "
        ";
        }
        // line 81
        echo " ";
        
        $__internal_d10f716a62ff19fe02d2b95f423ab2ef2a0c5b283f39e75bdee00d98a2f5fa6d->leave($__internal_d10f716a62ff19fe02d2b95f423ab2ef2a0c5b283f39e75bdee00d98a2f5fa6d_prof);

    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        $__internal_92dcc85e07af3b43d680d445c5cd0c7bcc6274481595b18c1e07504c4b2b3ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92dcc85e07af3b43d680d445c5cd0c7bcc6274481595b18c1e07504c4b2b3ba8->enter($__internal_92dcc85e07af3b43d680d445c5cd0c7bcc6274481595b18c1e07504c4b2b3ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 85
        echo "


\t<!-- Main Body part-->

\t";
        
        $__internal_92dcc85e07af3b43d680d445c5cd0c7bcc6274481595b18c1e07504c4b2b3ba8->leave($__internal_92dcc85e07af3b43d680d445c5cd0c7bcc6274481595b18c1e07504c4b2b3ba8_prof);

    }

    // line 95
    public function block_Footer($context, array $blocks = array())
    {
        $__internal_2ab0345092e99ee41dae9e9e88593669f3ba9b9e8904080a7ef0b45d92e62592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab0345092e99ee41dae9e9e88593669f3ba9b9e8904080a7ef0b45d92e62592->enter($__internal_2ab0345092e99ee41dae9e9e88593669f3ba9b9e8904080a7ef0b45d92e62592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Footer"));

        // line 96
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:footer"));
        echo "
\t";
        
        $__internal_2ab0345092e99ee41dae9e9e88593669f3ba9b9e8904080a7ef0b45d92e62592->leave($__internal_2ab0345092e99ee41dae9e9e88593669f3ba9b9e8904080a7ef0b45d92e62592_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 96,  323 => 95,  311 => 85,  305 => 84,  298 => 81,  292 => 79,  289 => 78,  283 => 76,  277 => 74,  274 => 73,  271 => 72,  268 => 71,  266 => 70,  261 => 69,  258 => 68,  256 => 67,  250 => 66,  240 => 60,  234 => 59,  225 => 10,  221 => 9,  215 => 8,  206 => 122,  191 => 110,  189 => 109,  187 => 108,  182 => 106,  178 => 105,  174 => 104,  170 => 103,  166 => 102,  162 => 101,  158 => 100,  154 => 99,  151 => 98,  149 => 95,  143 => 91,  141 => 84,  136 => 81,  134 => 66,  128 => 62,  126 => 59,  101 => 37,  97 => 36,  94 => 35,  89 => 33,  87 => 32,  85 => 31,  80 => 28,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  53 => 19,  47 => 16,  43 => 15,  38 => 12,  36 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 7]><html class=\"no-js ie7 oldie\" lang=\"en-US\"> <![endif]-->
<!--[if IE 8]><html class=\"no-js ie8 oldie\" lang=\"en-US\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"en\">
    <head>

{% block seo %}
{{ sonata_seo_title() }}
{{ sonata_seo_metadatas() }}
{% endblock %}
        <meta charset=\"utf-8\">
        <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><![endif]-->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ asset('bundles/projectcms/ico/apple-touch-icon-144-precomposed.png') }}\">
        <link rel=\"shortcut icon\" href=\"{{ asset('bundles/projectcms/ico/favicon.ico') }}\">


        <link href=\"{{ asset('bundles/projectcms/css/plugin/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">  


        <link href=\"{{ asset('bundles/projectcms/css/plugin/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">  
        <link href=\"{{ asset('bundles/projectcms/css/plugin/bootstrap-select.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">   
        <link href=\"{{ asset('bundles/projectcms/css/plugin/owl.carousel.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{ asset('bundles/projectcms/css/plugin/animate.css') }}\" rel=\"stylesheet\" type=\"text/css\"> 
        <link href=\"{{ asset('bundles/projectcms/css/plugin/subscribe-better.css') }}\" rel=\"stylesheet\" type=\"text/css\"> 

        <link href=\"{{ asset('bundles/projectcms/css/theme.css') }}\" rel=\"stylesheet\" type=\"text/css\">

{#<link href=\"{{ asset('bundles/projectcms/dist/demo.css') }}\" rel=\"stylesheet\" type=\"text/css\">#}
{% set route = app.request.attributes.get('_route') %}
\t{# % if route != '_page_product_detail' % #}
        <link href=\"{{ asset('bundles/projectcms/dist/simplelightbox.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
{# % endif % #}
        <!--[if lt IE 9]>
        <script src=\"{{ asset('bundles/projectcms/js/plugin/html5shiv.js') }}\"></script>
        <script src=\"{{ asset('bundles/projectcms/js/plugin/respond.js') }}\"></script>
        <![endif]-->   
        
        <!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c287bd37a79fc1bddf2adc6/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        
    </head>


    <body id=\"home\" class=\"wide\">

 {% block Header %}
   {{ render(controller('ProjectCmsBundle:Default:header')) }}
 {% endblock %}
    <!--End Main Header -->
 <!-- / Main Header Ends -->   

    <!--Main Slider-->
{% block Slider %}
{% set route = app.request.attributes.get('_route') %}
\t{% if route == '_page_home' %}
           {{ render(controller('ProjectCmsBundle:Default:slider')) }}
        {% elseif route == '_page_article_detail' %}
             {% set uriParam = app.request.attributes.get('_route_params') %}
              {% set articleUrlAlias = uriParam['urlAlias'] %}
                  \t{% if articleUrlAlias == 'fabrication' %}
                             {{ render(controller('ProjectCmsBundle:Default:fabricationslider')) }}
                        {% else %}
                             {{ include('ProjectCmsBundle:Default:staticSlider.html.twig') }}
                        {% endif %}
        {% else %}
           {{ include('ProjectCmsBundle:Default:staticSlider.html.twig') }}
        {% endif %}
 {% endblock %} 
    <!--End Main Slider-->

\t{% block body %}



\t<!-- Main Body part-->

\t{% endblock %}

            <!-- / CONTENT AREA -->

\t<!--Footer Style Two-->
\t{% block Footer %}
\t{{ render(controller('ProjectCmsBundle:Default:footer')) }}
\t{% endblock %}

        <script src=\"{{ asset('bundles/projectcms/js/plugin/jquery-2.2.4.min.js') }}\"></script>   
        <script src=\"{{ asset('bundles/projectcms/js/plugin/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/projectcms/js/plugin/bootstrap-select.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/projectcms/js/plugin/owl.carousel.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/projectcms/js/plugin/jquery.plugin.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/projectcms/js/plugin/jquery.countdown.js') }}\"></script>
        <script src=\"{{ asset('bundles/projectcms/js/plugin/jquery.subscribe-better.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/projectcms/js/theme.js') }}\"></script>

{% set route = app.request.attributes.get('_route') %}
\t{# % if route != '_page_product_detail' % #}
<script type=\"text/javascript\" src=\"{{ asset('bundles/projectcms/dist/simple-lightbox.js') }}\"></script>
<script>
\t\$(function(){
\t\tvar \$gallery = \$('.organic-product a').simpleLightbox();

\t\t\$gallery.on('show.simplelightbox', function(){
\t\t\tconsole.log('Requested for showing');
\t\t})
\t\t
\t});
</script>
{# % endif % #}

    </body>
</html>", "::base.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/app/Resources/views/base.html.twig");
    }
}
