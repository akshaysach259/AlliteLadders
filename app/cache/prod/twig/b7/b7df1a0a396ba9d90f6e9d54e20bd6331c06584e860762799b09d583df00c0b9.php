<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_e1da375a1726a9c9104c2f76f006f9f9be38b9f30039071f9f28c16a27f58a11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute(($context["item"] ?? null), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute(($context["item"] ?? null), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute(($context["attributes"] ?? null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_append", array()), false)) : (false));
            // line 12
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if (($context["divider_prepend"] ?? null)) {
                // line 15
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                // line 22
                if ($this->getAttribute(($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 24
($context["matcher"] ?? null), "isAncestor", array(0 => ($context["item"] ?? null), 1 => $this->getAttribute(($context["options"] ?? null), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "ancestorClass", array())));
                }
            } else {
                // line 28
                if ($this->getAttribute(($context["item"] ?? null), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 30
($context["item"] ?? null), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "ancestorClass", array())));
                }
            }
            // line 35
            if ($this->getAttribute(($context["item"] ?? null), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "firstClass", array())));
            }
            // line 38
            if ($this->getAttribute(($context["item"] ?? null), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => $this->getAttribute(($context["options"] ?? null), "lastClass", array())));
            }
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? null), "level", array()))));
            // line 47
            if (($context["is_dropdown"] ?? null)) {
                // line 48
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => "dropdown-menu"));
            }
            // line 53
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 54
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? null), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")));
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes(($context["attributes"] ?? null));
            echo ">";
            // line 60
            if (($context["is_dropdown"] ?? null)) {
                // line 61
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
($context["item"] ?? null), "uri", array())) && ( !$this->getAttribute(($context["item"] ?? null), "current", array()) || $this->getAttribute(($context["options"] ?? null), "currentAsLink", array())))) {
                // line 63
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if (($context["divider_append"] ?? null)) {
                // line 72
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 78
        if (($this->getAttribute(($context["item"] ?? null), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>";
        }
    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        // line 86
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute(($context["macros"] ?? null), "attributes", array(0 => $this->getAttribute(($context["item"] ?? null), "linkAttributes", array())), "method");
        echo ">";
        // line 87
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"))) {
            // line 88
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
        }
        // line 90
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>";
    }

    // line 94
    public function block_spanElement($context, array $blocks = array())
    {
        // line 95
        echo "    <span";
        echo $this->getAttribute(($context["macros"] ?? null), "attributes", array(0 => $this->getAttribute(($context["item"] ?? null), "labelAttributes", array())), "method");
        echo ">";
        // line 96
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"))) {
            // line 97
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
        }
        // line 99
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>";
    }

    // line 103
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 104
        $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? null), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 105
        $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown-toggle"));
        // line 106
        $context["attributes"] = $this->getAttribute(($context["item"] ?? null), "linkAttributes", array());
        // line 107
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
        // line 108
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("data-toggle" => "dropdown"));
        // line 109
        echo "    <a href=\"#\"";
        echo $this->getAttribute(($context["macros"] ?? null), "attributes", array(0 => ($context["attributes"] ?? null)), "method");
        echo ">";
        // line 110
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"))) {
            // line 111
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
        }
        // line 113
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>";
    }

    // line 118
    public function block_label($context, array $blocks = array())
    {
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 120
($context["item"] ?? null), "label", array()), $this->getAttribute(        // line 121
($context["item"] ?? null), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute(        // line 122
($context["item"] ?? null), "getExtra", array(0 => "translation_domain", 1 => (($this->getAttribute(        // line 124
($context["item"] ?? null), "getParent", array(), "method")) ? ($this->getAttribute($this->getAttribute(($context["item"] ?? null), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 124,  227 => 122,  226 => 121,  225 => 120,  224 => 119,  221 => 118,  214 => 113,  209 => 111,  207 => 110,  203 => 109,  201 => 108,  199 => 107,  197 => 106,  195 => 105,  193 => 104,  190 => 103,  184 => 99,  179 => 97,  177 => 96,  173 => 95,  170 => 94,  164 => 90,  159 => 88,  157 => 87,  151 => 86,  148 => 85,  143 => 81,  140 => 79,  138 => 78,  135 => 77,  129 => 72,  127 => 71,  123 => 68,  120 => 65,  117 => 63,  115 => 62,  113 => 61,  111 => 60,  107 => 59,  105 => 56,  102 => 54,  100 => 53,  97 => 49,  95 => 48,  93 => 47,  91 => 44,  89 => 43,  86 => 39,  84 => 38,  81 => 36,  79 => 35,  75 => 31,  73 => 30,  71 => 29,  69 => 28,  65 => 25,  63 => 24,  61 => 23,  59 => 22,  57 => 21,  55 => 19,  52 => 15,  50 => 14,  48 => 12,  46 => 9,  44 => 8,  42 => 7,  40 => 6,  38 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Core:tab_menu_template.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/admin-bundle/Resources/views/Core/tab_menu_template.html.twig");
    }
}
