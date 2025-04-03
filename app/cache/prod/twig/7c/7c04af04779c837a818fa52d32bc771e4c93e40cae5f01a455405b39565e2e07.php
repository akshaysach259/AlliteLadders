<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_462ea2c7544dcb43c7e24103304744ec6cc6f4cf08f44c77dbc5206febc6fe72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        // line 17
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 17)->display($context);
    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        // line 21
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 21)->display($context);
    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        // line 25
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 25)->display($context);
    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        // line 29
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 29)->display($context);
    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 40
        if (twig_test_empty($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()))) {
            // line 41
            $this->displayBlock("choice_widget", $context, $blocks);
        } elseif (($this->getAttribute($this->getAttribute(        // line 42
($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
        } elseif (($this->getAttribute($this->getAttribute(        // line 44
($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
        } elseif (($this->getAttribute($this->getAttribute(        // line 46
($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
        } elseif (($this->getAttribute($this->getAttribute(        // line 48
($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
        } else {
            // line 52
            $this->displayBlock("choice_widget", $context, $blocks);
        }
    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"field-short-description\">";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute(($context["sonata_admin"] ?? null), "value", array())), "method")) {
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 61
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 62
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute(($context["sonata_admin"] ?? null), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 63
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 64
($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "link_parameters", array()))));
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 66
($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "placeholder", array()))) {
            // line 67
            echo "                <span class=\"inner-field-short-description\">";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </span>";
        }
        // line 71
        echo "        </span>
        <span id=\"field_actions_";
        // line 72
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"field-actions\">
            <span class=\"btn-group\">";
        // line 74
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && ($context["btn_list"] ?? null))) {
            // line 75
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 76
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_list"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_list"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "
                    </a>";
        }
        // line 85
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && ($context["btn_add"] ?? null))) {
            // line 86
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 87
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "
                    </a>";
        }
        // line 95
        echo "            </span>

            <span class=\"btn-group\">";
        // line 98
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && ($context["btn_delete"] ?? null))) {
            // line 99
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 100
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_delete"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_delete"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
            echo "
                    </a>";
        }
        // line 108
        echo "            </span>
        </span>

        <span style=\"display: none\" >";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("required" => false));
        echo "
        </span>";
        // line 116
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 118
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>";
        // line 132
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 132)->display($context);
    }

    // line 135
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 137
        if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 138
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
        } elseif (($this->getAttribute($this->getAttribute(        // line 139
($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 140
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
        } elseif (($this->getAttribute($this->getAttribute(        // line 141
($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 142
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
        } elseif (($this->getAttribute($this->getAttribute(        // line 143
($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 144
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
        } else {
            // line 146
            echo "        INVALID MODE :";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        }
    }

    // line 150
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 151
        if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 152
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
        } elseif (($this->getAttribute($this->getAttribute(        // line 153
($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 154
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
        } else {
            // line 156
            echo "        INVALID MODE :";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " - type : sonata_type_collection - mapping :";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? null), "field_description", array()), "mappingtype", array()), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 156,  263 => 154,  261 => 153,  259 => 152,  257 => 151,  254 => 150,  248 => 146,  245 => 144,  243 => 143,  241 => 142,  239 => 141,  237 => 140,  235 => 139,  233 => 138,  231 => 137,  228 => 135,  224 => 132,  209 => 118,  204 => 116,  200 => 113,  195 => 108,  190 => 105,  185 => 102,  180 => 100,  177 => 99,  175 => 98,  171 => 95,  166 => 92,  161 => 89,  156 => 87,  151 => 86,  149 => 85,  144 => 81,  139 => 78,  134 => 76,  129 => 75,  127 => 74,  123 => 72,  120 => 71,  115 => 68,  113 => 67,  111 => 66,  109 => 64,  108 => 63,  107 => 62,  106 => 61,  105 => 60,  103 => 59,  100 => 58,  95 => 57,  92 => 56,  87 => 52,  84 => 49,  82 => 48,  80 => 47,  78 => 46,  76 => 45,  74 => 44,  72 => 43,  70 => 42,  68 => 41,  66 => 40,  63 => 32,  59 => 29,  56 => 28,  52 => 25,  49 => 24,  45 => 21,  42 => 20,  38 => 17,  35 => 16,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
