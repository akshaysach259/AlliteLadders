<?php

/* ::base.html.twig */
class __TwigTemplate_1822cb0e860bfd36d83ed1b29b5bb0696e31f1cac47d9e34e3bc60ce58bce773 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 7]><html class=\"no-js ie7 oldie\" lang=\"en-US\"> <![endif]-->
<!--[if IE 8]><html class=\"no-js ie8 oldie\" lang=\"en-US\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"en\">
    <head>";
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
        echo "\" rel=\"stylesheet\" type=\"text/css\">";
        // line 31
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 33
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/projectcms/dist/simplelightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">";
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


    <body id=\"home\" class=\"wide\">";
        // line 59
        $this->displayBlock('Header', $context, $blocks);
        // line 62
        echo "    <!--End Main Header -->
 <!-- / Main Header Ends -->   

    <!--Main Slider-->";
        // line 66
        $this->displayBlock('Slider', $context, $blocks);
        // line 81
        echo " 
    <!--End Main Slider-->";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "
            <!-- / CONTENT AREA -->

\t<!--Footer Style Two-->";
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
        echo "\"></script>";
        // line 108
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
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
</script>";
        // line 122
        echo "
    </body>
</html>";
    }

    // line 8
    public function block_seo($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getTitle();
        // line 10
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getMetadatas();
    }

    // line 59
    public function block_Header($context, array $blocks = array())
    {
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:header"));
    }

    // line 66
    public function block_Slider($context, array $blocks = array())
    {
        // line 67
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 68
        if ((($context["route"] ?? null) == "_page_home")) {
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:slider"));
        } elseif ((        // line 70
($context["route"] ?? null) == "_page_article_detail")) {
            // line 71
            $context["uriParam"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
            // line 72
            $context["articleUrlAlias"] = $this->getAttribute(($context["uriParam"] ?? null), "urlAlias", array(), "array");
            // line 73
            if ((($context["articleUrlAlias"] ?? null) == "fabrication")) {
                // line 74
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:fabricationslider"));
            } else {
                // line 76
                echo twig_include($this->env, $context, "ProjectCmsBundle:Default:staticSlider.html.twig");
            }
        } else {
            // line 79
            echo twig_include($this->env, $context, "ProjectCmsBundle:Default:staticSlider.html.twig");
        }
    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        // line 85
        echo "


\t<!-- Main Body part-->";
    }

    // line 95
    public function block_Footer($context, array $blocks = array())
    {
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:footer"));
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
        return array (  249 => 96,  246 => 95,  239 => 85,  236 => 84,  231 => 79,  227 => 76,  224 => 74,  222 => 73,  220 => 72,  218 => 71,  216 => 70,  214 => 69,  212 => 68,  210 => 67,  207 => 66,  203 => 60,  200 => 59,  196 => 10,  194 => 9,  191 => 8,  185 => 122,  171 => 110,  169 => 108,  166 => 106,  162 => 105,  158 => 104,  154 => 103,  150 => 102,  146 => 101,  142 => 100,  138 => 99,  135 => 98,  133 => 95,  128 => 91,  126 => 84,  123 => 81,  121 => 66,  116 => 62,  114 => 59,  91 => 37,  87 => 36,  84 => 35,  80 => 33,  78 => 31,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  54 => 22,  48 => 19,  42 => 16,  38 => 15,  33 => 12,  31 => 8,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/app/Resources/views/base.html.twig");
    }
}
