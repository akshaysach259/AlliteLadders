<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_9d4c769548906b38c599061a96e46c0edb0f7be282aa68013bcb6a085fb50dba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "SonataAdminBundle:Core:dashboard.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_dashboard", array(), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 18
        $context["has_left"] = false;
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? null), "left", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 20
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 21
                $context["has_left"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        $context["has_center"] = false;
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? null), "center", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 27
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 28
                $context["has_center"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        $context["has_right"] = false;
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? null), "right", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 34
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 35
                $context["has_right"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $context["has_top"] = false;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? null), "top", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 41
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 42
                $context["has_top"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        $context["has_bottom"] = false;
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? null), "bottom", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 48
            if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                // line 49
                $context["has_bottom"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.top", array("admin_pool" => $this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()))));
        // line 55
        if (($context["has_top"] ?? null)) {
            // line 56
            echo "        <div class=\"row\">";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? null), "top", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 58
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 59
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                    echo "\">";
                    // line 60
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    </div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>";
        }
        // line 66
        echo "
    <div class=\"row\">";
        // line 68
        $context["width_left"] = 4;
        // line 69
        $context["width_right"] = 4;
        // line 70
        $context["width_center"] = 4;
        // line 73
        if ( !($context["has_center"] ?? null)) {
            // line 74
            $context["width_left"] = 6;
            // line 75
            $context["width_right"] = 6;
        }
        // line 79
        if (( !($context["has_left"] ?? null) &&  !($context["has_right"] ?? null))) {
            // line 80
            $context["width_center"] = 12;
        }
        // line 84
        if ((($context["has_left"] ?? null) || ($context["has_right"] ?? null))) {
            // line 85
            echo "        <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_left"] ?? null), "html", null, true);
            echo "\">";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? null), "left", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 87
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 88
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "        </div>";
        }
        // line 94
        if (($context["has_center"] ?? null)) {
            // line 95
            echo "            <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_center"] ?? null), "html", null, true);
            echo "\">";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? null), "center", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 97
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 98
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "            </div>";
        }
        // line 105
        if ((($context["has_left"] ?? null) || ($context["has_right"] ?? null))) {
            // line 106
            echo "         <div class=\"col-md-";
            echo twig_escape_filter($this->env, ($context["width_right"] ?? null), "html", null, true);
            echo "\">";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? null), "right", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 108
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 109
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "        </div>";
        }
        // line 114
        echo "    </div>";
        // line 116
        if (($context["has_bottom"] ?? null)) {
            // line 117
            echo "        <div class=\"row\">";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blocks"] ?? null), "bottom", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 119
                if (((twig_length_filter($this->env, $this->getAttribute($context["block"], "roles", array())) == 0) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($this->getAttribute($context["block"], "roles", array())))) {
                    // line 120
                    echo "                    <div class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "class", array()), "html", null, true);
                    echo "\">";
                    // line 121
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    </div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "        </div>";
        }
        // line 128
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.dashboard.bottom", array("admin_pool" => $this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()))));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 128,  258 => 125,  249 => 121,  245 => 120,  243 => 119,  239 => 118,  237 => 117,  235 => 116,  233 => 114,  230 => 112,  223 => 109,  221 => 108,  217 => 107,  213 => 106,  211 => 105,  208 => 101,  201 => 98,  199 => 97,  195 => 96,  191 => 95,  189 => 94,  186 => 91,  179 => 88,  177 => 87,  173 => 86,  169 => 85,  167 => 84,  164 => 80,  162 => 79,  159 => 75,  157 => 74,  155 => 73,  153 => 70,  151 => 69,  149 => 68,  146 => 66,  143 => 64,  134 => 60,  130 => 59,  128 => 58,  124 => 57,  122 => 56,  120 => 55,  118 => 53,  111 => 49,  109 => 48,  105 => 47,  103 => 46,  96 => 42,  94 => 41,  90 => 40,  88 => 39,  81 => 35,  79 => 34,  75 => 33,  73 => 32,  66 => 28,  64 => 27,  60 => 26,  58 => 25,  51 => 21,  49 => 20,  45 => 19,  43 => 18,  40 => 16,  35 => 15,  29 => 14,  20 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Core:dashboard.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/admin-bundle/Resources/views/Core/dashboard.html.twig");
    }
}
