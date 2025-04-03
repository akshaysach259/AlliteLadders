<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_4a3eac277181571254b159b0ae6ad2561d18d334a226f9abfcacab8a6b75835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        $context["items_per_column"] = $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        $context["groups"] = array();
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "dashboardgroups", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            $context["display_group"] = false;
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                if ((($context["display_group"] ?? null) == false)) {
                    // line 9
                    if (($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 10
                        $context["display_group"] = true;
                        // line 11
                        $context["groups"] = twig_array_merge(array(0 => $context["group"]), ($context["groups"] ?? null));
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        $context["column_count"] = twig_round((twig_length_filter($this->env, ($context["groups"] ?? null)) / ($context["items_per_column"] ?? null)), 0, "ceil");
        // line 17
        echo "
    <div class=\"dropdown-menu multi-column dropdown-add\"";
        // line 19
        if ((($context["column_count"] ?? null) > 1)) {
            echo "style=\"width:";
            echo twig_escape_filter($this->env, (($context["column_count"] ?? null) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 20
        echo "            >";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groups"] ?? null)));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 22
            $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"));
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? null)) {
                    // line 24
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            if (($context["display"] ?? null)) {
                // line 29
                if (($this->getAttribute($context["loop"], "first", array()) || (($this->getAttribute($context["loop"], "index0", array()) % ($context["items_per_column"] ?? null)) == 0))) {
                    // line 30
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 31
                        echo "                        <div class=\"container-fluid\">
                            <div class=\"row\">";
                    } else {
                        // line 34
                        echo "                        </ul>";
                    }
                    // line 36
                    echo "
                    <ul class=\"dropdown-menu";
                    // line 37
                    if ((($context["column_count"] ?? null) > 1)) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / ($context["column_count"] ?? null))), "html", null, true);
                    }
                    echo "\">";
                }
                // line 40
                if ((($this->getAttribute($context["loop"], "index0", array()) % ($context["items_per_column"] ?? null)) != 0)) {
                    // line 41
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>";
                }
                // line 43
                echo "                <li role=\"presentation\" class=\"dropdown-header\">";
                // line 44
                echo $this->getAttribute($context["group"], "icon", array());
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                echo "
                </li>";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 49
                    if (($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 50
                        if (twig_test_empty($this->getAttribute($context["admin"], "subClasses", array()))) {
                            // line 51
                            echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                            // line 52
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "create"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                            echo "</a>
                            </li>";
                        } else {
                            // line 55
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($context["admin"], "subclasses", array())));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 56
                                echo "                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                                // line 57
                                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                                echo "</a>
                                </li>";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                        }
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 65
                    echo "                            </ul>
                        </div>
                    </div>";
                }
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </div>";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  198 => 72,  180 => 65,  178 => 64,  162 => 57,  159 => 56,  155 => 55,  148 => 52,  145 => 51,  143 => 50,  141 => 49,  137 => 48,  133 => 45,  131 => 44,  129 => 43,  126 => 41,  124 => 40,  117 => 37,  114 => 36,  111 => 34,  107 => 31,  105 => 30,  103 => 29,  101 => 27,  94 => 24,  89 => 23,  87 => 22,  70 => 21,  68 => 20,  62 => 19,  59 => 17,  57 => 16,  45 => 11,  43 => 10,  41 => 9,  36 => 8,  34 => 6,  30 => 5,  28 => 3,  26 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Core:add_block.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/admin-bundle/Resources/views/Core/add_block.html.twig");
    }
}
