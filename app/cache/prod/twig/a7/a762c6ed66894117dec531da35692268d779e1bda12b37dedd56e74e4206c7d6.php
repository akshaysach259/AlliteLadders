<?php

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_3beb7b67395d80a8f7e1de68bd2c23a7b9a574377e9bcac7a12186ad1ec59bb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataMediaBundle:MediaAdmin:list.html.twig", 12);
        $this->blocks = array(
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["tree"] = $this;
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_list_table($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"col-xs-6 col-md-3\">
        ";
        // line 39
        echo $context["tree"]->getnavigate_child(array(0 => (isset($context["root_category"]) ? $context["root_category"] : null)), (isset($context["admin"]) ? $context["admin"] : null), true, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["datagrid"]) ? $context["datagrid"] : null), "values", array()), "category", array(), "array"), "value", array(), "array"), 1);
        echo "
    </div>
    <div class=\"col-xs-12 col-md-9\">
        ";
        // line 42
        $this->displayParentBlock("list_table", $context, $blocks);
        echo "
    </div>
";
    }

    // line 15
    public function getnavigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__current_category__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "current_category" => $__current_category__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            if (((isset($context["root"]) ? $context["root"] : null) && (twig_length_filter($this->env, (isset($context["collection"]) ? $context["collection"] : null)) == 0))) {
                // line 17
                echo "        <div>
            <p class=\"bg-warning\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => "warning_no_category", 1 => array(), 2 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array())), "method"), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            // line 21
            echo "    <ul";
            if ((isset($context["root"]) ? $context["root"] : null)) {
                echo " class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"";
            }
            echo ">
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 23
                echo "            <li>
                <div class=\"sonata-tree__item";
                // line 24
                if (($this->getAttribute($context["element"], "id", array()) == $this->getAttribute((isset($context["current_category"]) ? $context["current_category"] : null), "id", array()))) {
                    echo " is-active";
                }
                echo "\"";
                if (((isset($context["depth"]) ? $context["depth"] : null) < 2)) {
                    echo " data-treeview-toggled";
                }
                echo ">
                    ";
                // line 25
                if (($this->getAttribute($context["element"], "parent", array()) || (isset($context["root"]) ? $context["root"] : null))) {
                    echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                }
                // line 26
                echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), array("category" => $this->getAttribute($context["element"], "id", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                echo "</a>
                </div>

                ";
                // line 29
                if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                    // line 30
                    echo "                    ";
                    echo $this->getAttribute($this, "navigate_child", array(0 => $this->getAttribute($context["element"], "children", array()), 1 => (isset($context["admin"]) ? $context["admin"] : null), 2 => false, 3 => (isset($context["current_category"]) ? $context["current_category"] : null), 4 => ((isset($context["depth"]) ? $context["depth"] : null) + 1)), "method");
                    echo "
                ";
                }
                // line 32
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  123 => 32,  117 => 30,  115 => 29,  106 => 26,  102 => 25,  92 => 24,  89 => 23,  85 => 22,  78 => 21,  72 => 18,  69 => 17,  66 => 16,  50 => 15,  43 => 42,  37 => 39,  34 => 38,  31 => 37,  27 => 12,  25 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:MediaAdmin:list.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/media-bundle/Resources/views/MediaAdmin/list.html.twig");
    }
}
