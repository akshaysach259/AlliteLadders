<?php

/* SonataFormatterBundle:Form:formatter.html.twig */
class __TwigTemplate_fc4e2c679f235f02308e464b6271c3351b71515088050c6af6ea7b57e322ddc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_formatter_type_widget' => array($this, 'block_sonata_formatter_type_widget'),
            'sonata_simple_formatter_type_widget' => array($this, 'block_sonata_simple_formatter_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_formatter_type_widget', $context, $blocks);
        // line 62
        $this->displayBlock('sonata_simple_formatter_type_widget', $context, $blocks);
    }

    // line 1
    public function block_sonata_formatter_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "
    <!-- widget: sonata_formatter_type_widget -->
    <div style=\"margin-bottom: 5px;\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), ($context["format_field"] ?? null), array(), "array"), 'widget');
        // line 6
        if ((twig_length_filter($this->env, $this->getAttribute(($context["format_field_options"] ?? null), "choices", array())) > 1)) {
            // line 7
            echo "            <i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("please_select_format_method", array(), "SonataFormatterBundle"), "html", null, true);
            echo "</i>";
        }
        // line 9
        echo "    </div>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), ($context["source_field"] ?? null), array(), "array"), 'widget');
        echo "
    <script>
        jQuery(document).ready(function() {

            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            jQuery('#";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), ($context["format_field"] ?? null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').change(function(event) {
                var elms = jQuery('#";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), ($context["source_field"] ?? null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "');
                elms.markItUpRemove();";
        // line 24
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), ($context["source_field"] ?? null), array(), "array"), "vars", array()), "id", array()));
        echo "

                var val = jQuery(this).val();
                var appendClass = val;
                switch(val) {
                    case 'textile':
                        elms.markItUp(markitup_sonataTextileSettings);
                        break;
                    case 'markdown':
                        elms.markItUp(markitup_sonataMarkdownSettings);
                        break;
                    case 'bbcode':
                        elms.markItUp(markitup_sonataBBCodeSettings);
                        break;
                    case 'rawhtml':
                        elms.markItUp(markitup_sonataHtmlSettings);
                        appendClass = 'html';
                        break;
                    case 'richhtml':";
        // line 43
        $this->loadTemplate("SonataFormatterBundle:Form:ckeditor.html.twig", "SonataFormatterBundle:Form:formatter.html.twig", 43)->display(array_merge($context, array("ckeditor_field_id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), ($context["source_field"] ?? null), array(), "array"), "vars", array()), "id", array()))));
        // line 44
        echo "                }

                var parent = elms.parents('div.markItUp');

                if (parent) {
                    for (name in ['textile', 'markdown', 'bbcode', 'rawhtml', 'richhtml', 'rawhtml']) {
                        parent.removeClass(name)
                    }

                    parent.addClass(appendClass);
                }
            });

            jQuery('#";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array()), ($context["format_field"] ?? null), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').trigger('change');
        });
    </script>";
    }

    // line 62
    public function block_sonata_simple_formatter_type_widget($context, array $blocks = array())
    {
        // line 63
        echo "
    <!-- widget: sonata_simple_formatter_type_widget -->";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

    <script>
        jQuery(document).ready(function() {
            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            var elms = jQuery('#";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "');";
        // line 77
        if ((($context["format"] ?? null) == "textile")) {
            // line 78
            echo "                elms.markItUp(markitup_sonataTextileSettings);";
        } elseif ((        // line 79
($context["format"] ?? null) == "markdown")) {
            // line 80
            echo "                elms.markItUp(markitup_sonataMarkdownSettings);";
        } elseif ((        // line 81
($context["format"] ?? null) == "bbcode")) {
            // line 82
            echo "                elms.markItUp(markitup_sonataBBCodeSettings);";
        } elseif ((        // line 83
($context["format"] ?? null) == "rawhtml")) {
            // line 84
            echo "                elms.markItUp(markitup_sonataHtmlSettings);";
        } elseif ((        // line 85
($context["format"] ?? null) == "richhtml")) {
            // line 86
            $this->loadTemplate("SonataFormatterBundle:Form:ckeditor.html.twig", "SonataFormatterBundle:Form:formatter.html.twig", 86)->display(array_merge($context, array("ckeditor_field_id" => $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()))));
        }
        // line 88
        echo "
            var parent = elms.parents('div.markItUp');

            if (parent) {
                parent.addClass('";
        // line 92
        echo twig_escape_filter($this->env, ($context["format"] ?? null), "html", null, true);
        echo "');
            }

        });
    </script>";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Form:formatter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 92,  152 => 88,  149 => 86,  147 => 85,  145 => 84,  143 => 83,  141 => 82,  139 => 81,  137 => 80,  135 => 79,  133 => 78,  131 => 77,  128 => 75,  116 => 66,  113 => 63,  110 => 62,  103 => 57,  88 => 44,  86 => 43,  65 => 24,  61 => 21,  57 => 20,  45 => 11,  43 => 9,  38 => 7,  36 => 6,  34 => 5,  30 => 2,  27 => 1,  23 => 62,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Form:formatter.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/formatter-bundle/Resources/views/Form/formatter.html.twig");
    }
}
