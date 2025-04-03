<?php

/* ::base.html.twig */
class __TwigTemplate_f6b1af6dc12c3ebdfe7736d0a80169bb745f0fd7b8fcdb4c0c227e73c895e287 extends Twig_Template
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
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
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

   <!-- Google tag (gtag.js) -->
<script async src='https://www.googletagmanager.com/gtag/js?id=G-G59F9E3GEX'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G59F9E3GEX');
</script> 

<meta name='google-site-verification' content='qG7eAXXruGvI_Rx4QSiTp-1QCjlLbMBR1ylSQsAiPrI' />
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
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
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
    }

    // line 8
    public function block_seo($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getTitle();
        echo "
";
        // line 10
        echo $this->env->getExtension('Sonata\SeoBundle\Twig\Extension\SeoExtension')->getMetadatas();
        echo "
";
    }

    // line 59
    public function block_Header($context, array $blocks = array())
    {
        // line 60
        echo "   ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:header"));
        echo "
 ";
    }

    // line 66
    public function block_Slider($context, array $blocks = array())
    {
        // line 67
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 68
        echo "\t";
        if (((isset($context["route"]) ? $context["route"] : null) == "_page_home")) {
            // line 69
            echo "           ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:slider"));
            echo "
        ";
        } elseif ((        // line 70
(isset($context["route"]) ? $context["route"] : null) == "_page_article_detail")) {
            // line 71
            echo "             ";
            $context["uriParam"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
            // line 72
            echo "              ";
            $context["articleUrlAlias"] = $this->getAttribute((isset($context["uriParam"]) ? $context["uriParam"] : null), "urlAlias", array(), "array");
            // line 73
            echo "                  \t";
            if (((isset($context["articleUrlAlias"]) ? $context["articleUrlAlias"] : null) == "fabrication")) {
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
    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        // line 85
        echo "


\t<!-- Main Body part-->

\t";
    }

    // line 95
    public function block_Footer($context, array $blocks = array())
    {
        // line 96
        echo "\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:footer"));
        echo "
\t";
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
        return array (  296 => 96,  293 => 95,  284 => 85,  281 => 84,  277 => 81,  271 => 79,  268 => 78,  262 => 76,  256 => 74,  253 => 73,  250 => 72,  247 => 71,  245 => 70,  240 => 69,  237 => 68,  235 => 67,  232 => 66,  225 => 60,  222 => 59,  216 => 10,  212 => 9,  209 => 8,  203 => 122,  188 => 110,  186 => 109,  184 => 108,  179 => 106,  175 => 105,  171 => 104,  167 => 103,  163 => 102,  159 => 101,  155 => 100,  151 => 99,  148 => 98,  146 => 95,  140 => 91,  138 => 84,  133 => 81,  131 => 66,  125 => 62,  123 => 59,  98 => 37,  94 => 36,  91 => 35,  86 => 33,  84 => 32,  82 => 31,  77 => 28,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  50 => 19,  44 => 16,  40 => 15,  35 => 12,  33 => 8,  24 => 1,);
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
