<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_c1598ccf1ec4224b1c293fdb9e37e81c5db3ff3982a151ffdea1575d6d6fee02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_f1ffb0e7abf045e8804e5bc8dbb6aced6b7ce0a9143c3a44cbd440a45c120d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ffb0e7abf045e8804e5bc8dbb6aced6b7ce0a9143c3a44cbd440a45c120d72->enter($__internal_f1ffb0e7abf045e8804e5bc8dbb6aced6b7ce0a9143c3a44cbd440a45c120d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ffb0e7abf045e8804e5bc8dbb6aced6b7ce0a9143c3a44cbd440a45c120d72->leave($__internal_f1ffb0e7abf045e8804e5bc8dbb6aced6b7ce0a9143c3a44cbd440a45c120d72_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e53cb34ae0b609065c1b6720f09a59aae7bed62b0170542aca4760d1cb824d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53cb34ae0b609065c1b6720f09a59aae7bed62b0170542aca4760d1cb824d35->enter($__internal_e53cb34ae0b609065c1b6720f09a59aae7bed62b0170542aca4760d1cb824d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_e53cb34ae0b609065c1b6720f09a59aae7bed62b0170542aca4760d1cb824d35->leave($__internal_e53cb34ae0b609065c1b6720f09a59aae7bed62b0170542aca4760d1cb824d35_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a6d2863f20dfc21d31a498f6ab1858efec2f3e1822ff7220e6a9e39878f170b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6d2863f20dfc21d31a498f6ab1858efec2f3e1822ff7220e6a9e39878f170b->enter($__internal_2a6d2863f20dfc21d31a498f6ab1858efec2f3e1822ff7220e6a9e39878f170b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
            // line 7
            echo "        ";
            $context["is_authenticated"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()));
            // line 8
            echo "        ";
            $context["color_code"] = (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("") : ("yellow"));
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["color_code"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) ? ("red") : (""));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
            // line 20
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 27
            echo (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("green") : ("red"));
            echo "\">";
            echo (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("Yes") : ("No"));
            echo "</span>
            </div>

            ";
            // line 30
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()) != null)) {
                // line 31
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                <span>";
                // line 33
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()));
                echo "</span>
            </div>
            ";
            }
            // line 36
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logoutUrl", array())) {
                // line 37
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Actions</b>
                <span><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a></span>
            </div>
            ";
            }
            // line 42
            echo "        ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
            // line 43
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>You are not authenticated.</span>
            </div>
        ";
        } else {
            // line 47
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>
        ";
        }
        // line 51
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code"))));
        echo "
";
        
        $__internal_2a6d2863f20dfc21d31a498f6ab1858efec2f3e1822ff7220e6a9e39878f170b->leave($__internal_2a6d2863f20dfc21d31a498f6ab1858efec2f3e1822ff7220e6a9e39878f170b_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a4f9e202d06dbb3386086f6ebdb5b07c2310b4019c1d2d2763310d02ff353f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4f9e202d06dbb3386086f6ebdb5b07c2310b4019c1d2d2763310d02ff353f9->enter($__internal_1a4f9e202d06dbb3386086f6ebdb5b07c2310b4019c1d2d2763310d02ff353f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 57
        echo "    <span class=\"label ";
        echo ((( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) ||  !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 58
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_1a4f9e202d06dbb3386086f6ebdb5b07c2310b4019c1d2d2763310d02ff353f9->leave($__internal_1a4f9e202d06dbb3386086f6ebdb5b07c2310b4019c1d2d2763310d02ff353f9_prof);

    }

    // line 63
    public function block_panel($context, array $blocks = array())
    {
        $__internal_200b3c798dfa1d87bbb21da60be01df6d97d7ec6edcdce9ef491397c1bd4fff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200b3c798dfa1d87bbb21da60be01df6d97d7ec6edcdce9ef491397c1bd4fff1->enter($__internal_200b3c798dfa1d87bbb21da60be01df6d97d7ec6edcdce9ef491397c1bd4fff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 64
        echo "    <h2>Security Token</h2>

    ";
        // line 66
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
            // line 67
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()) == "anon.")) ? ("Anonymous") : ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()))), "html", null, true);
            echo "</span>
                <span class=\"label\">Username</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 74
            echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
            echo "</span>
                <span class=\"label\">Authenticated</span>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">Property</th>
                    <th scope=\"col\">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Roles</th>
                    <td>
                        ";
            // line 90
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array()))) ? ("none") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\YamlExtension')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array())))), "html", null, true);
            echo "

                        ";
            // line 92
            if (( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()) && twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array())))) {
                // line 93
                echo "                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                        ";
            }
            // line 95
            echo "                    </td>
                </tr>

                ";
            // line 98
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "supportsRoleHierarchy", array())) {
                // line 99
                echo "                <tr>
                    <th>Inherited Roles</th>
                    <td>";
                // line 101
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inheritedRoles", array()))) ? ("none") : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\YamlExtension')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inheritedRoles", array())))), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            // line 104
            echo "
                ";
            // line 105
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
                // line 106
                echo "                <tr>
                    <th>Token class</th>
                    <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            // line 111
            echo "            </tbody>
        </table>
    ";
        } elseif ($this->getAttribute(        // line 113
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
            // line 114
            echo "        <div class=\"empty\">
            <p>There is no security token.</p>
        </div>
    ";
        } else {
            // line 118
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
        
        $__internal_200b3c798dfa1d87bbb21da60be01df6d97d7ec6edcdce9ef491397c1bd4fff1->leave($__internal_200b3c798dfa1d87bbb21da60be01df6d97d7ec6edcdce9ef491397c1bd4fff1_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 118,  285 => 114,  283 => 113,  279 => 111,  273 => 108,  269 => 106,  267 => 105,  264 => 104,  258 => 101,  254 => 99,  252 => 98,  247 => 95,  243 => 93,  241 => 92,  236 => 90,  217 => 74,  209 => 69,  205 => 67,  203 => 66,  199 => 64,  193 => 63,  182 => 58,  177 => 57,  171 => 56,  162 => 53,  159 => 52,  156 => 51,  150 => 47,  144 => 43,  141 => 42,  135 => 39,  131 => 37,  128 => 36,  122 => 33,  118 => 31,  116 => 30,  108 => 27,  100 => 22,  96 => 20,  93 => 19,  91 => 18,  88 => 17,  83 => 15,  78 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
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

{% block page_title 'Security' %}

{% block toolbar %}
    {% if collector.tokenClass %}
        {% set is_authenticated = collector.enabled and collector.authenticated  %}
        {% set color_code = is_authenticated ? '' : 'yellow' %}
    {% else %}
        {% set color_code = collector.enabled ? 'red' : '' %}
    {% endif %}

    {% set icon %}
        {{ include('@Security/Collector/icon.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
    {% endset %}

    {% set text %}
        {% if collector.tokenClass %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span>{{ collector.user }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ is_authenticated ? 'green' : 'red' }}\">{{ is_authenticated ? 'Yes' : 'No' }}</span>
            </div>

            {% if collector.tokenClass != null %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                <span>{{ collector.tokenClass|abbr_class }}</span>
            </div>
            {% endif %}
            {% if collector.logoutUrl %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Actions</b>
                <span><a href=\"{{ collector.logoutUrl }}\">Logout</a></span>
            </div>
            {% endif %}
        {% elseif collector.enabled %}
            <div class=\"sf-toolbar-info-piece\">
                <span>You are not authenticated.</span>
            </div>
        {% else %}
            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.enabled or not collector.tokenClass ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security Token</h2>

    {% if collector.tokenClass %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>
                <span class=\"label\">Username</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                <span class=\"label\">Authenticated</span>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">Property</th>
                    <th scope=\"col\">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Roles</th>
                    <td>
                        {{ collector.roles is empty ? 'none' : collector.roles|yaml_encode }}

                        {% if not collector.authenticated and collector.roles is empty %}
                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                        {% endif %}
                    </td>
                </tr>

                {% if collector.supportsRoleHierarchy %}
                <tr>
                    <th>Inherited Roles</th>
                    <td>{{ collector.inheritedRoles is empty ? 'none' : collector.inheritedRoles|yaml_encode }}</td>
                </tr>
                {% endif %}

                {% if collector.tokenClass %}
                <tr>
                    <th>Token class</th>
                    <td>{{ collector.tokenClass }}</td>
                </tr>
                {% endif %}
            </tbody>
        </table>
    {% elseif collector.enabled %}
        <div class=\"empty\">
            <p>There is no security token.</p>
        </div>
    {% else %}
        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views/Collector/security.html.twig");
    }
}
