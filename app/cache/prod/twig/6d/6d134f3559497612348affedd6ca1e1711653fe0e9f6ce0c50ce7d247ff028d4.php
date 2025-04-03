<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_303616462ef1a58b6887ba0dc5e6c9151de264a364bdfb18b1d2443b1e23a5fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
            'ckeditor_javascript' => array($this, 'block_ckeditor_javascript'),
            '_ckeditor_javascript' => array($this, 'block__ckeditor_javascript'),
            'ckeditor_widget_extra' => array($this, 'block_ckeditor_widget_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        // line 9
        $this->displayBlock('ckeditor_javascript', $context, $blocks);
        // line 15
        $this->displayBlock('_ckeditor_javascript', $context, $blocks);
    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <textarea";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
        // line 4
        if ((($context["enable"] ?? null) &&  !($context["async"] ?? null))) {
            // line 5
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
        }
    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = array())
    {
        // line 10
        if ((($context["enable"] ?? null) && ($context["async"] ?? null))) {
            // line 11
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
        }
    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = array())
    {
        // line 16
        if (($context["autoload"] ?? null)) {
            // line 17
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 18
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderBasePath(($context["base_path"] ?? null));
            echo "\";
        </script>
        <script type=\"text/javascript\" src=\"";
            // line 20
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath(($context["js_path"] ?? null));
            echo "\"></script>";
            // line 21
            if (($context["jquery"] ?? null)) {
                // line 22
                echo "            <script type=\"text/javascript\" src=\"";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath(($context["jquery_path"] ?? null));
                echo "\"></script>";
            }
        }
        // line 25
        echo "    <script type=\"text/javascript\">";
        // line 26
        if (($context["jquery"] ?? null)) {
            // line 27
            echo "            \$(function () {";
        }
        // line 30
        if (($context["require_js"] ?? null)) {
            // line 31
            echo "            require(['ckeditor'], function() {";
        }
        // line 34
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy(($context["id"] ?? null));
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? null));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 37
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
            // line 41
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderStylesSet($context["style_name"], $context["style"]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 45
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderTemplate($context["template_name"], $context["template"]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $this->displayBlock('ckeditor_widget_extra', $context, $blocks);
        // line 50
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget(($context["id"] ?? null), ($context["config"] ?? null), array("auto_inline" =>         // line 51
($context["auto_inline"] ?? null), "inline" =>         // line 52
($context["inline"] ?? null), "input_sync" =>         // line 53
($context["input_sync"] ?? null), "filebrowsers" =>         // line 54
($context["filebrowsers"] ?? null)));
        // line 57
        if (($context["require_js"] ?? null)) {
            // line 58
            echo "            });";
        }
        // line 61
        if (($context["jquery"] ?? null)) {
            // line 62
            echo "            });";
        }
        // line 64
        echo "    </script>";
    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 48,  143 => 64,  140 => 62,  138 => 61,  135 => 58,  133 => 57,  131 => 54,  130 => 53,  129 => 52,  128 => 51,  127 => 50,  125 => 48,  119 => 45,  115 => 44,  109 => 41,  105 => 40,  99 => 37,  95 => 36,  93 => 34,  90 => 31,  88 => 30,  85 => 27,  83 => 26,  81 => 25,  75 => 22,  73 => 21,  70 => 20,  65 => 18,  62 => 17,  60 => 16,  57 => 15,  52 => 11,  50 => 10,  47 => 9,  42 => 5,  40 => 4,  34 => 2,  31 => 1,  27 => 15,  25 => 9,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
