<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_d7847ee63386e6cfe6354f62badf66d7bc6a8bb19356e27cd57fa8e0553c0c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        // line 15
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 16
            if ( !$this->getAttribute(($context["form"] ?? null), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>";
            // line 22
            if ( !$this->getAttribute(($context["form"] ?? null), "parent", array())) {
                echo "</div>";
            }
        }
    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && ($context["sonata_help"] ?? null))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo ($context["sonata_help"] ?? null);
            echo "</span>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 40
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 41
        if ((($context["type"] ?? null) != "file")) {
            // line 42
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        }
        // line 44
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 48
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        // line 53
        if ((($context["money_pattern"] ?? null) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            $context["currencySymbol"] = trim(twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")));
            // line 57
            if (preg_match("/^{{ widget }}/", ($context["money_pattern"] ?? null))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>
            </div>";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
($context["money_pattern"] ?? null))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>";
                // line 65
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 66
                echo "</div>";
            }
        }
    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 72
        ob_start();
        // line 73
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 74
        echo "        <div class=\"input-group\">";
        // line 75
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        // line 105
        ob_start();
        // line 106
        if (( !(($context["label"] ?? null) === false) && ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 107
            $context["label_class"] = "col-sm-3";
        }
        // line 110
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? null), "")) : ("")) . " control-label");
        // line 112
        if ( !(($context["label"] ?? null) === false)) {
            // line 113
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["label_class"] ?? null))));
            // line 115
            if ( !($context["compound"] ?? null)) {
                // line 116
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
            }
            // line 118
            if (($context["required"] ?? null)) {
                // line 119
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 122
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                    // line 124
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 125
($context["name"] ?? null), "%id%" =>                     // line 126
($context["id"] ?? null)));
                } else {
                    // line 129
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 134
            if ( !$this->getAttribute(($context["sonata_admin"] ?? null), "admin", array())) {
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
            }
            // line 139
            echo "        </label>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 144
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 145
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 148
    public function block_radio_label($context, array $blocks = array())
    {
        // line 149
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 152
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 153
        if ($this->getAttribute(($context["sonata_admin"] ?? null), "admin", array())) {
            // line 154
            $context["translation_domain"] = $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array());
        }
        // line 157
        if (array_key_exists("widget", $context)) {
            // line 158
            if (($context["required"] ?? null)) {
                // line 159
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 161
            if (array_key_exists("parent_label_class", $context)) {
                // line 162
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => trim((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
            }
            // line 164
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 165
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? null));
            }
            // line 167
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 168
            echo ($context["widget"] ?? null);
            // line 169
            if ( !(($context["label"] ?? null) === false)) {
                // line 170
                echo "<span class=\"control-label__text\">";
                // line 171
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                // line 172
                echo "</span>";
            }
            // line 174
            echo "</label>";
        }
    }

    // line 178
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 179
        ob_start();
        // line 180
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 181
        echo "    <ul";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 183
            echo "        <li>";
            // line 184
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            // line 185
            echo "        </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "    </ul>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 191
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 192
        ob_start();
        // line 193
        if (((($context["required"] ?? null) && array_key_exists("placeholder", $context)) && (null === ($context["placeholder"] ?? null)))) {
            // line 194
            $context["required"] = false;
        } elseif ((((((        // line 195
($context["required"] ?? null) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === ($context["empty_value"] ?? null))) &&  !($context["empty_value_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 196
            $context["required"] = false;
        }
        // line 199
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 200
        if (((array_key_exists("sortable", $context) && ($context["sortable"] ?? null)) && ($context["multiple"] ?? null))) {
            // line 201
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
        } else {
            // line 203
            echo "        <select";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (($context["multiple"] ?? null)) {
                echo " multiple=\"multiple\"";
            }
            echo " >";
            // line 204
            if ((array_key_exists("empty_value", $context) &&  !(null === ($context["empty_value"] ?? null)))) {
                // line 205
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                // line 206
                if ( !$this->getAttribute(($context["sonata_admin"] ?? null), "admin", array())) {
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 209
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["empty_value"] ?? null), array(), $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 211
                echo "                </option>";
            } elseif ((            // line 212
array_key_exists("placeholder", $context) &&  !(null === ($context["placeholder"] ?? null)))) {
                // line 213
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                // line 214
                if ( !$this->getAttribute(($context["sonata_admin"] ?? null), "admin", array())) {
                    // line 215
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 219
                echo "                </option>";
            }
            // line 221
            if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
                // line 222
                $context["options"] = ($context["preferred_choices"] ?? null);
                // line 223
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 224
                if ((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0)) {
                    // line 225
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                    echo "</option>";
                }
            }
            // line 228
            $context["options"] = ($context["choices"] ?? null);
            // line 229
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 235
    public function block_date_widget($context, array $blocks = array())
    {
        // line 236
        ob_start();
        // line 237
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 238
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 240
            if (( !array_key_exists("row", $context) || (($context["row"] ?? null) == true))) {
                // line 241
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
            }
            // line 243
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-4")) : ("col-sm-4"));
            // line 244
            echo "        <div";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 245
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" => (((("<div class=\"" .             // line 246
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 247
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 248
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')) . "</div>")));
            // line 249
            echo "
        </div>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 255
    public function block_time_widget($context, array $blocks = array())
    {
        // line 256
        ob_start();
        // line 257
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 258
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 260
            if (( !array_key_exists("row", $context) || (($context["row"] ?? null) == true))) {
                // line 261
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
            }
            // line 263
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-6")) : ("col-sm-6"));
            // line 264
            echo "        <div";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 265
            echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
            echo "\">";
            // line 266
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
            echo "
            </div>";
            // line 268
            if (($context["with_minutes"] ?? null)) {
                // line 269
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">";
                // line 270
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
                echo "
                </div>";
            }
            // line 273
            if (($context["with_seconds"] ?? null)) {
                // line 274
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">";
                // line 275
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
                echo "
                </div>";
            }
            // line 278
            echo "        </div>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 283
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 284
        ob_start();
        // line 285
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 286
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 288
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
            // line 289
            echo "        <div";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 290
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            // line 291
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            // line 293
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 294
                echo "                <div class=\"col-sm-2\">";
                // line 295
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget');
                echo "
                </div>";
            } else {
                // line 298
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
            }
            // line 301
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 302
                echo "                <div class=\"col-sm-2\">";
                // line 303
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget');
                echo "
                </div>";
            } else {
                // line 306
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
            }
            // line 308
            echo "        </div>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 313
    public function block_form_row($context, array $blocks = array())
    {
        // line 314
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter(($context["show_label"] ?? null), true)) : (true));
        // line 315
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">";
        // line 316
        if ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 317
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), ($context["label"] ?? null))) : (($context["label"] ?? null)));
        }
        // line 320
        $context["div_class"] = "sonata-ba-field";
        // line 322
        if ((($context["label"] ?? null) === false)) {
            // line 323
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-collection-row-without-label");
        }
        // line 326
        if ((array_key_exists("sonata_admin", $context) && ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 328
            if (((($context["label"] ?? null) === false) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 329
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 330
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-12");
                } else {
                    // line 332
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9 col-sm-offset-3");
                }
            } else {
                // line 335
                $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9");
            }
        }
        // line 339
        if (($context["show_label"] ?? null)) {
            // line 340
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter(($context["label"] ?? null), null)) : (null))) ? array() : array("label" => $_label_)));
        }
        // line 343
        if ((array_key_exists("sonata_admin", $context) && ($context["sonata_admin_enabled"] ?? null))) {
            // line 344
            $context["div_class"] = ((((($context["div_class"] ?? null) . " sonata-ba-field-") . $this->getAttribute(($context["sonata_admin"] ?? null), "edit", array())) . "-") . $this->getAttribute(($context["sonata_admin"] ?? null), "inline", array()));
        }
        // line 347
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 348
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-ba-field-error");
        }
        // line 350
        echo "
        <div class=\"";
        // line 351
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo "\">";
        // line 352
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        // line 354
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 355
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">";
            // line 356
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>";
        }
        // line 360
        if (((array_key_exists("sonata_admin", $context) && ($context["sonata_admin_enabled"] ?? null)) && (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 361
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "help", array()), array(), (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) ? ($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? null), "translationDomain", array()))));
            echo "</span>";
        }
        // line 363
        echo "        </div>
    </div>";
    }

    // line 367
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 368
        $context["show_label"] = false;
        // line 369
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 372
    public function block_radio_row($context, array $blocks = array())
    {
        // line 373
        $context["show_label"] = false;
        // line 374
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 377
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        // line 378
        ob_start();
        // line 379
        echo "    <div class=\"sonata-collection-row\">";
        // line 380
        if (($context["allow_delete"] ?? null)) {
            // line 381
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">";
        }
        // line 389
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'row', array("label" => false));
        // line 390
        if (($context["allow_delete"] ?? null)) {
            // line 391
            echo "                </div>
            </div>";
        }
        // line 394
        echo "    </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 398
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        // line 399
        ob_start();
        // line 400
        if (array_key_exists("prototype", $context)) {
            // line 401
            $context["child"] = ($context["prototype"] ?? null);
            // line 402
            $context["allow_delete_backup"] = ($context["allow_delete"] ?? null);
            // line 403
            $context["allow_delete"] = true;
            // line 404
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? null), "vars", array()), "name", array()), "class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 405
            $context["allow_delete"] = ($context["allow_delete_backup"] ?? null);
        }
        // line 407
        echo "    <div";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 408
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 410
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 413
        if (($context["allow_add"] ?? null)) {
            // line 414
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>";
        }
        // line 416
        echo "    </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 420
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 421
        ob_start();
        // line 422
        echo "        <div";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 423
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 426
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 429
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 434
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 435
        ob_start();
        // line 436
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
        echo "\">";
        // line 438
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'label');
        // line 440
        $context["div_class"] = "";
        // line 441
        if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 442
            $context["div_class"] = "col-sm-9";
        }
        // line 444
        echo "
            <div class=\"";
        // line 445
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? null), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["sonata_admin"] ?? null), "inline", array()), "html", null, true);
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">";
        // line 446
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        // line 447
        echo "            </div>";
        // line 449
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 450
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">";
            // line 451
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["child"] ?? null), 'errors');
            echo "
                </div>";
        }
        // line 454
        echo "        </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 458
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        // line 459
        $this->loadTemplate(($context["template"] ?? null), "SonataAdminBundle:Form:form_admin_fields.html.twig", 459)->display($context);
    }

    // line 462
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        // line 463
        $this->displayBlock("choice_widget", $context, $blocks);
        // line 464
        $context["main_form_name"] = twig_slice($this->env, ($context["id"] ?? null), 0, (twig_length_filter($this->env, ($context["id"] ?? null)) - twig_length_filter($this->env, ($context["name"] ?? null))));
        // line 465
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields =";
        // line 467
        echo twig_jsonencode_filter(($context["all_fields"] ?? null));
        echo ";
            var map =";
        // line 468
        echo twig_jsonencode_filter(($context["map"] ?? null));
        echo ";

            var showMaskChoiceEl = jQuery('#";
        // line 470
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 479
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>";
    }

    // line 502
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        // line 503
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 507
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "'),";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "choices", array()));
        echo ");
        });
    </script>";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1009 => 507,  997 => 503,  994 => 502,  969 => 479,  956 => 470,  951 => 468,  947 => 467,  943 => 465,  941 => 464,  939 => 463,  936 => 462,  932 => 459,  929 => 458,  924 => 454,  919 => 451,  917 => 450,  915 => 449,  913 => 447,  911 => 446,  901 => 445,  898 => 444,  895 => 442,  893 => 441,  891 => 440,  889 => 438,  879 => 436,  877 => 435,  874 => 434,  867 => 429,  853 => 426,  836 => 425,  834 => 423,  830 => 422,  828 => 421,  825 => 420,  820 => 416,  817 => 414,  815 => 413,  813 => 412,  799 => 410,  782 => 409,  780 => 408,  776 => 407,  773 => 405,  771 => 404,  769 => 403,  767 => 402,  765 => 401,  763 => 400,  761 => 399,  758 => 398,  753 => 394,  749 => 391,  747 => 390,  745 => 389,  736 => 381,  734 => 380,  732 => 379,  730 => 378,  727 => 377,  723 => 374,  721 => 373,  718 => 372,  714 => 369,  712 => 368,  709 => 367,  704 => 363,  699 => 361,  697 => 360,  692 => 356,  690 => 355,  688 => 354,  686 => 352,  683 => 351,  680 => 350,  677 => 348,  675 => 347,  672 => 344,  670 => 343,  667 => 340,  665 => 339,  661 => 335,  657 => 332,  654 => 330,  652 => 329,  650 => 328,  648 => 326,  645 => 323,  643 => 322,  641 => 320,  638 => 317,  636 => 316,  628 => 315,  626 => 314,  623 => 313,  617 => 308,  614 => 306,  609 => 303,  607 => 302,  605 => 301,  602 => 298,  597 => 295,  595 => 294,  593 => 293,  591 => 291,  589 => 290,  585 => 289,  583 => 288,  580 => 286,  578 => 285,  576 => 284,  573 => 283,  567 => 278,  562 => 275,  558 => 274,  556 => 273,  551 => 270,  547 => 269,  545 => 268,  541 => 266,  538 => 265,  533 => 264,  531 => 263,  528 => 261,  526 => 260,  523 => 258,  521 => 257,  519 => 256,  516 => 255,  509 => 249,  507 => 248,  506 => 247,  505 => 246,  504 => 245,  500 => 244,  498 => 243,  495 => 241,  493 => 240,  490 => 238,  488 => 237,  486 => 236,  483 => 235,  475 => 229,  473 => 228,  467 => 225,  465 => 224,  463 => 223,  461 => 222,  459 => 221,  456 => 219,  453 => 217,  450 => 215,  448 => 214,  442 => 213,  440 => 212,  438 => 211,  435 => 209,  432 => 207,  430 => 206,  424 => 205,  422 => 204,  415 => 203,  412 => 201,  410 => 200,  408 => 199,  405 => 196,  403 => 195,  401 => 194,  399 => 193,  397 => 192,  394 => 191,  389 => 187,  383 => 185,  381 => 184,  379 => 183,  375 => 182,  371 => 181,  369 => 180,  367 => 179,  364 => 178,  359 => 174,  356 => 172,  354 => 171,  352 => 170,  350 => 169,  348 => 168,  334 => 167,  331 => 165,  329 => 164,  326 => 162,  324 => 161,  321 => 159,  319 => 158,  317 => 157,  314 => 154,  312 => 153,  309 => 152,  305 => 149,  302 => 148,  298 => 145,  295 => 144,  289 => 139,  286 => 137,  283 => 135,  281 => 134,  268 => 133,  265 => 132,  261 => 129,  258 => 126,  257 => 125,  256 => 124,  254 => 123,  252 => 122,  249 => 119,  247 => 118,  244 => 116,  242 => 115,  240 => 113,  238 => 112,  236 => 110,  233 => 107,  231 => 106,  229 => 105,  226 => 104,  221 => 99,  219 => 98,  217 => 97,  214 => 95,  212 => 94,  210 => 93,  207 => 92,  202 => 88,  200 => 87,  198 => 86,  195 => 84,  193 => 83,  191 => 82,  188 => 81,  180 => 75,  178 => 74,  176 => 73,  174 => 72,  171 => 71,  165 => 66,  163 => 65,  160 => 64,  157 => 63,  155 => 62,  150 => 60,  148 => 59,  146 => 58,  144 => 57,  142 => 56,  139 => 54,  137 => 53,  134 => 52,  130 => 49,  128 => 48,  125 => 47,  121 => 44,  118 => 42,  116 => 41,  114 => 40,  111 => 39,  107 => 36,  105 => 35,  102 => 34,  94 => 29,  92 => 28,  90 => 27,  87 => 26,  80 => 22,  78 => 21,  70 => 19,  66 => 18,  64 => 17,  60 => 16,  58 => 15,  55 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Form:form_admin_fields.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/admin-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
