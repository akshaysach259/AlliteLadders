<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_c34b8770fbe0c895928cee66fcfde9241c9765bc8ef9a6be1179080e66843ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null))));
        // line 4
        $context["url"] = (( !(null === $this->getAttribute(($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))) ? ("edit") : ("create"));
        // line 6
        if ( !$this->getAttribute(($context["admin"] ?? null), "hasRoute", array(0 => ($context["url"] ?? null)), "method")) {
            // line 7
            echo "        <div>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>";
        } else {
            // line 11
            echo "        <form";
            // line 12
            if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 13
            echo "              role=\"form\"
              action=\"";
            // line 14
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"";
            // line 15
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 16
            echo "              method=\"POST\"";
            // line 17
            if ( !$this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 19
            echo "              >";
            // line 21
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            // line 23
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 27
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 60
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            // line 66
            $this->displayBlock('formactions', $context, $blocks);
            // line 110
            echo "        </form>";
        }
        // line 113
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null))));
    }

    // line 14
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => ($context["url"] ?? null), 1 => array("id" => $this->getAttribute(($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "uniqid" => $this->getAttribute(($context["admin"] ?? null), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
    }

    // line 18
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
    }

    // line 23
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 24
        echo "                <div class=\"row\">";
    }

    // line 27
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 28
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? null), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "formtabs", array())) > 1));
        // line 29
        echo "
                <div class=\"col-md-12\">";
        // line 31
        if (($context["has_tab"] ?? null)) {
            // line 32
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 35
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), (($this->getAttribute($context["form_tab"], "translation_domain", array())) ? ($this->getAttribute($context["form_tab"], "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
                echo "</a></li>";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            </ul>
                            <div class=\"tab-content\">";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 40
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">";
                // line 43
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 44
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>";
                }
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute(($context["form_helper"] ?? null), "render_groups", array(0 => ($context["admin"] ?? null), 1 => ($context["form"] ?? null), 2 => $this->getAttribute($context["form_tab"], "groups", array(), "array"), 3 => ($context["has_tab"] ?? null)), "method"), "html", null, true);
                echo "
                                            </div>
                                        </div>
                                    </div>";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                            </div>
                        </div>";
        } else {
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form_helper"] ?? null), "render_groups", array(0 => ($context["admin"] ?? null), 1 => ($context["form"] ?? null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "formtabs", array()), "default", array(), "array"), "groups", array()), 3 => ($context["has_tab"] ?? null)), "method"), "html", null, true);
        }
        // line 57
        echo "                </div>";
    }

    // line 60
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 61
        echo "                </div>";
    }

    // line 66
    public function block_formactions($context, array $blocks = array())
    {
        // line 67
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">";
        // line 68
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 108
        echo "                </div>";
    }

    // line 68
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        // line 69
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "isxmlhttprequest", array())) {
            // line 70
            if ( !(null === $this->getAttribute(($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))) {
                // line 71
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>";
            } else {
                // line 73
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>";
            }
        } else {
            // line 76
            if ($this->getAttribute(($context["admin"] ?? null), "supportsPreviewMode", array())) {
                // line 77
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>";
            }
            // line 82
            if ( !(null === $this->getAttribute(($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))) {
                // line 83
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>";
                // line 85
                if (($this->getAttribute(($context["admin"] ?? null), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? null), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 86
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>";
                }
                // line 89
                if (($this->getAttribute(($context["admin"] ?? null), "hasroute", array(0 => "delete"), "method") && $this->getAttribute(($context["admin"] ?? null), "isGranted", array(0 => "DELETE", 1 => ($context["object"] ?? null)), "method"))) {
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>";
                }
                // line 94
                if ((($this->getAttribute(($context["admin"] ?? null), "isAclEnabled", array(), "method") && $this->getAttribute(($context["admin"] ?? null), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute(($context["admin"] ?? null), "isGranted", array(0 => "MASTER", 1 => ($context["object"] ?? null)), "method"))) {
                    // line 95
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>";
                }
            } else {
                // line 98
                if (($this->getAttribute(($context["admin"] ?? null), "hasroute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? null), "isGranted", array(0 => "EDIT"), "method"))) {
                    // line 99
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>";
                }
                // line 101
                if (($this->getAttribute(($context["admin"] ?? null), "hasroute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? null), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 102
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>";
                }
                // line 104
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  326 => 104,  321 => 102,  319 => 101,  314 => 99,  312 => 98,  304 => 95,  302 => 94,  296 => 91,  292 => 90,  290 => 89,  285 => 86,  283 => 85,  279 => 83,  277 => 82,  272 => 79,  269 => 77,  267 => 76,  261 => 73,  256 => 71,  254 => 70,  252 => 69,  249 => 68,  245 => 108,  243 => 68,  241 => 67,  238 => 66,  234 => 61,  231 => 60,  227 => 57,  224 => 55,  220 => 52,  202 => 47,  197 => 44,  195 => 43,  183 => 40,  166 => 39,  163 => 37,  139 => 35,  122 => 34,  119 => 32,  117 => 31,  114 => 29,  112 => 28,  109 => 27,  105 => 24,  102 => 23,  97 => 18,  91 => 14,  87 => 113,  84 => 110,  82 => 66,  80 => 64,  78 => 60,  76 => 27,  74 => 23,  72 => 21,  70 => 19,  68 => 18,  64 => 17,  62 => 16,  58 => 15,  55 => 14,  52 => 13,  48 => 12,  46 => 11,  41 => 8,  39 => 7,  37 => 6,  35 => 4,  33 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
