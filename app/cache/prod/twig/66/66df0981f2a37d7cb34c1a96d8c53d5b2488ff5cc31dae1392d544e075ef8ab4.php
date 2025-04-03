<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_5d1efc04c390811fddab035ec4f9a7b30fa5aaf3132419048ed0d4bca1d06e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] =         $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] =         $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] =         $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] =         $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] =         $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] =         $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] =         $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] =         $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] =         $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] =         $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] =         $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] =         $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
        <title>";
        // line 85
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 111
        echo "        </title>
    </head>
    <body";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">";
        // line 117
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 217
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 351
        echo "    </div>";
        // line 353
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 354
            $this->displayBlock('bootlint', $context, $blocks);
        }
        // line 361
        echo "
    </body>
</html>
";
    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>";
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        $context["locale"] = $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "locale", array());
        // line 69
        if ((twig_slice($this->env, ($context["locale"] ?? null), 0, 2) != "en")) {
            // line 70
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(($context["locale"] ?? null), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>";
        }
        // line 74
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            if ((($context["locale"] ?? null) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 78
            if ((twig_slice($this->env, ($context["locale"] ?? null), 0, 2) != "en")) {
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter(($context["locale"] ?? null), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>";
            }
        }
    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        // line 41
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT:";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2:";
        // line 44
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK:";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS:";
        // line 46
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 47
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>";
    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 63
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        // line 88
        if ( !twig_test_empty(($context["_title"] ?? null))) {
            // line 89
            echo ($context["_title"] ?? null);
        } else {
            // line 91
            if (array_key_exists("action", $context)) {
                // line 92
                echo "                    -";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? null), "breadcrumbs", array(0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 94
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 95
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 96
                            echo "                                &gt;";
                        }
                        // line 99
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 100
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 101
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 102
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? null));
                        }
                        // line 105
                        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 118
        echo "            <header class=\"main-header\">";
        // line 119
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 126
        $this->displayBlock('logo', $context, $blocks);
        // line 138
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 214
        echo "            </header>";
    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        // line 120
        echo "                    <noscript>
                        <div class=\"noscript-warning\">";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>";
    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        // line 127
        ob_start();
        // line 128
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">";
        // line 129
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 130
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">";
        }
        // line 132
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 133
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>";
        }
        // line 135
        echo "                        </a>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 139
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">";
        // line 145
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 184
        echo "                        </div>";
        // line 186
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 212
        echo "                    </nav>";
    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 146
        echo "                                <div class=\"hidden-xs\">";
        // line 147
        if (( !twig_test_empty(($context["_breadcrumb"] ?? null)) || array_key_exists("action", $context))) {
            // line 148
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">";
            // line 149
            if (twig_test_empty(($context["_breadcrumb"] ?? null))) {
                // line 150
                if (array_key_exists("action", $context)) {
                    // line 151
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["breadcrumbs_builder"] ?? null), "breadcrumbs", array(0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 152
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 153
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 154
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 155
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? null));
                        }
                        // line 158
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 159
                            echo "                                                            <li>";
                            // line 160
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 161
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                // line 162
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 163
                                    echo ($context["label"] ?? null);
                                } else {
                                    // line 165
                                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                                }
                                // line 167
                                echo "                                                                    </a>";
                            } else {
                                // line 169
                                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                            }
                            // line 171
                            echo "                                                            </li>";
                        } else {
                            // line 173
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                            echo "</span></li>";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
            } else {
                // line 178
                echo ($context["_breadcrumb"] ?? null);
            }
            // line 180
            echo "                                        </ol>";
        }
        // line 182
        echo "                                </div>";
    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 187
        if (($this->getAttribute(($context["app"] ?? null), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 188
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">";
            // line 190
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 198
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 208
            echo "                                    </ul>
                                </div>";
        }
    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        // line 191
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>";
        // line 195
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 195)->display($context);
        // line 196
        echo "                                            </li>";
    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        // line 199
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">";
        // line 204
        $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 204)->display($context);
        // line 205
        echo "                                                </ul>
                                            </li>";
    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 218
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 250
        echo "
            <div class=\"content-wrapper\">";
        // line 252
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 349
        echo "            </div>";
    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 219
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">";
        // line 221
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 247
        echo "                    </section>
                </aside>";
    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 222
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 235
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 236
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 239
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 223
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                    </div>
                                </form>";
    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 237
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>";
    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>";
    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 253
        echo "                    <section class=\"content-header\">";
        // line 255
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 309
        echo "                    </section>

                    <section class=\"content\">";
        // line 312
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 347
        echo "                    </section>";
    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 256
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
    }

    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 257
        if ((( !twig_test_empty(($context["_tab_menu"] ?? null)) ||  !twig_test_empty(($context["_actions"] ?? null))) ||  !twig_test_empty(($context["_list_filters_actions"] ?? null)))) {
            // line 258
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">";
            // line 260
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 267
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">";
            // line 270
            if ( !twig_test_empty(($context["_tab_menu"] ?? null))) {
                // line 271
                echo ($context["_tab_menu"] ?? null);
            }
            // line 273
            echo "                                                </div>";
            // line 275
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? null) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "listModes", array())) > 1))) {
                // line 276
                echo "                                                    <div class=\"nav navbar-right btn-group\">";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 278
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? null), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 280
                echo "                                                    </div>";
            }
            // line 283
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 300
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? null))) {
                // line 301
                echo ($context["_list_filters_actions"] ?? null);
            }
            // line 303
            echo "                                            </div>
                                        </div>
                                    </nav>";
        }
    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        // line 261
        if ( !twig_test_empty(($context["_navbar_title"] ?? null))) {
            // line 262
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 263
            echo ($context["_navbar_title"] ?? null);
            echo "</a>
                                                    </div>";
        }
    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        // line 284
        if ( !twig_test_empty(trim(twig_replace_filter(($context["_actions"] ?? null), array("<li>" => "", "</li>" => ""))))) {
            // line 285
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">";
            // line 286
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? null), "</a>")) > 2)) {
                // line 287
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 288
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">";
                // line 290
                echo ($context["_actions"] ?? null);
                echo "
                                                                </ul>
                                                            </li>";
            } else {
                // line 294
                echo ($context["_actions"] ?? null);
            }
            // line 296
            echo "                                                        </ul>";
        }
    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 314
        $this->displayBlock('notice', $context, $blocks);
        // line 318
        if ( !twig_test_empty(($context["_preview"] ?? null))) {
            // line 319
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? null);
            echo "</div>";
        }
        // line 322
        if ( !twig_test_empty(($context["_content"] ?? null))) {
            // line 323
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? null);
            echo "</div>";
        }
        // line 326
        if ( !twig_test_empty(($context["_show"] ?? null))) {
            // line 327
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? null);
            echo "</div>";
        }
        // line 330
        if ( !twig_test_empty(($context["_form"] ?? null))) {
            // line 331
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? null);
            echo "</div>";
        }
        // line 334
        if (( !twig_test_empty(($context["_list_table"] ?? null)) ||  !twig_test_empty(($context["_list_filters"] ?? null)))) {
            // line 335
            if (trim(($context["_list_filters"] ?? null))) {
                // line 336
                echo "                                    <div class=\"row\">";
                // line 337
                echo ($context["_list_filters"] ?? null);
                echo "
                                    </div>";
            }
            // line 340
            echo "
                                <div class=\"row\">";
            // line 342
            echo ($context["_list_table"] ?? null);
            echo "
                                </div>";
        }
    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        // line 315
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 315)->display($context);
    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  835 => 356,  832 => 354,  828 => 315,  825 => 314,  818 => 342,  815 => 340,  810 => 337,  808 => 336,  806 => 335,  804 => 334,  799 => 331,  797 => 330,  792 => 327,  790 => 326,  785 => 323,  783 => 322,  778 => 319,  776 => 318,  774 => 314,  771 => 312,  766 => 296,  763 => 294,  757 => 290,  753 => 288,  750 => 287,  748 => 286,  746 => 285,  744 => 284,  741 => 283,  734 => 263,  731 => 262,  729 => 261,  726 => 260,  719 => 303,  716 => 301,  714 => 300,  712 => 283,  709 => 280,  695 => 278,  691 => 277,  689 => 276,  687 => 275,  685 => 273,  682 => 271,  680 => 270,  676 => 267,  674 => 260,  671 => 258,  669 => 257,  663 => 256,  660 => 255,  656 => 347,  654 => 312,  650 => 309,  648 => 255,  646 => 253,  643 => 252,  639 => 242,  636 => 241,  632 => 244,  630 => 241,  628 => 240,  625 => 239,  621 => 237,  618 => 236,  613 => 235,  599 => 225,  593 => 223,  590 => 222,  586 => 239,  584 => 236,  582 => 235,  580 => 222,  577 => 221,  572 => 247,  570 => 221,  567 => 219,  564 => 218,  560 => 349,  558 => 252,  555 => 250,  553 => 218,  550 => 217,  545 => 205,  543 => 204,  537 => 199,  534 => 198,  530 => 196,  528 => 195,  523 => 191,  520 => 190,  514 => 208,  512 => 198,  510 => 190,  507 => 188,  505 => 187,  502 => 186,  498 => 182,  495 => 180,  492 => 178,  473 => 173,  470 => 171,  467 => 169,  464 => 167,  461 => 165,  458 => 163,  456 => 162,  452 => 161,  450 => 160,  448 => 159,  446 => 158,  443 => 155,  441 => 154,  439 => 153,  437 => 152,  420 => 151,  418 => 150,  416 => 149,  414 => 148,  412 => 147,  410 => 146,  407 => 145,  403 => 212,  401 => 186,  399 => 184,  397 => 145,  390 => 139,  387 => 138,  382 => 135,  377 => 133,  375 => 132,  368 => 130,  366 => 129,  362 => 128,  360 => 127,  357 => 126,  350 => 122,  347 => 120,  344 => 119,  340 => 214,  338 => 138,  336 => 126,  334 => 119,  332 => 118,  329 => 117,  323 => 113,  304 => 105,  301 => 102,  299 => 101,  297 => 100,  295 => 99,  292 => 96,  290 => 95,  288 => 94,  271 => 93,  269 => 92,  267 => 91,  264 => 89,  262 => 88,  260 => 86,  257 => 85,  247 => 63,  243 => 62,  240 => 61,  226 => 49,  222 => 47,  216 => 46,  208 => 45,  200 => 44,  192 => 43,  188 => 41,  185 => 40,  177 => 79,  175 => 78,  171 => 75,  169 => 74,  164 => 70,  162 => 69,  160 => 67,  158 => 61,  156 => 40,  153 => 39,  143 => 35,  139 => 34,  136 => 33,  130 => 28,  127 => 27,  121 => 25,  114 => 361,  111 => 354,  109 => 353,  107 => 351,  105 => 217,  103 => 117,  98 => 113,  94 => 111,  92 => 85,  89 => 83,  87 => 39,  85 => 33,  83 => 27,  79 => 25,  75 => 23,  73 => 22,  71 => 21,  69 => 20,  67 => 19,  65 => 18,  63 => 17,  61 => 16,  59 => 15,  57 => 14,  55 => 13,  53 => 12,  51 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle::standard_layout.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
