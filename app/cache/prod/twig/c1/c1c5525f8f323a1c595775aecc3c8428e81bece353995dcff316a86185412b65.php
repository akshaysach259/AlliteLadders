<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_42991d5059e7a3c944350507070f3da50e6f588f6a83d966493aa6bbc2cb0870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
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
    public function block_root($context, array $blocks = array())
    {
        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? null), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? null), "request", array())));
        // line 6
        $this->displayBlock("list", $context, $blocks);
    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        // line 10
        if ($this->getAttribute(($context["item"] ?? null), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? null)) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute(($context["item"] ?? null), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? null))) : ("")))) {
            // line 19
            $context["options"] = twig_array_merge(($context["options"] ?? null), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute(($context["item"] ?? null), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute(($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute(($context["item"] ?? null), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute(($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            $this->displayParentBlock("item", $context, $blocks);
        }
    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        // line 27
        ob_start();
        // line 28
        if (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            $context["translation_domain"] = $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), ((($this->getAttribute(($context["item"] ?? null), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute(($context["item"] ?? null), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
        } else {
            // line 32
            $context["icon"] = $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method");
        }
        // line 34
        $context["is_link"] = true;
        // line 35
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        // line 40
        ob_start();
        // line 41
        echo "        <a href=\"#\">";
        // line 42
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo ($context["icon"] ?? null);
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        echo "
            <i class=\"fa pull-right fa-angle-left\"></i>
        </a>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 51
    public function block_label($context, array $blocks = array())
    {
        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? null))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? null), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? null), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? null), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? null), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? null), "messages")) : ("messages"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 51,  111 => 45,  109 => 44,  107 => 43,  105 => 42,  103 => 41,  101 => 40,  98 => 39,  93 => 35,  91 => 34,  88 => 32,  85 => 30,  83 => 29,  81 => 28,  79 => 27,  76 => 26,  71 => 22,  69 => 21,  67 => 20,  65 => 19,  63 => 18,  55 => 14,  50 => 13,  48 => 12,  46 => 10,  43 => 9,  39 => 6,  37 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
