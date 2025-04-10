<?php

/* ProjectCmsBundle:Default:fabricationdetail.html.twig */
class __TwigTemplate_3676da076bf617a4f18fd7e2c1fff435c1648617d016d6e25957c8e78b6f90dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectCmsBundle::layout.html.twig", "ProjectCmsBundle:Default:fabricationdetail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjectCmsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

<div class=\"row\" style=\"margin-right: 6px;margin-left: 27px;\">
                        <div class=\"col-md-3 pt-15\">
                            <div class=\"widget-wrap\">
                                <h2 class=\"widget-title\"> <span class=\"light-font\">Fabrication</span> <strong> category</strong> </h2>
                                <div class=\"divider-full-1\"></div>";
        // line 11
        if ((array_key_exists("queryMenu", $context) && (twig_length_filter($this->env, ($context["queryMenu"] ?? null)) > 0))) {
            // line 12
            echo "                                <ul class=\"cate-widget\">";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["queryMenu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mainProductMenu"]) {
                // line 14
                echo "                                 <li> <i class=\"fa fa-arrow-circle-o-right clr-txt\"></i> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_msfabrication_list", array("urlAlias" => $this->getAttribute($context["mainProductMenu"], "pageUrl", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mainProductMenu"], "pageTitle", array()), "html", null, true);
                echo "</a> </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainProductMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t</ul>";
        }
        // line 18
        echo "                             </div>
                     
                        </div>

                        <div class=\"col-md-9 pt-15\">
                            <div class=\"product-single clearfix\">

                               <div class=\"col-lg-6\">
                                    <div class=\"product-content block-inline\">

                                       
                                        <div class=\"single-caption\"> 
                                            <h3 class=\"section-title\">
                                                <a href=\"#\"> <span class=\"light-font\">";
        // line 31
        if ($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "fabricationName", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "fabricationName", array());
        }
        echo " </span></a>
                                            </h3>
                                                                                                                                                                  
            
                                                
                                                
                                            </div><br>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div> 
\t\t\t\t<div class=\"fsz-16\">";
        // line 45
        if ($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "pageDescription", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "pageDescription", array());
        }
        // line 46
        echo "\t\t\t\t</div>

            <!-- Our Products Starts-->
            <section class=\"organic-product sec-space-bottom\">
                <div class=\"container\"> 
                    <div class=\"row\"> 
                        <div class=\"col-lg-8 col-sm-12\"> 
                            <div class=\"row\"> 
                            
                                                                        <div class=\"divider-full-1\"></div>
                                            
                                            <div class=\"add-cart pt-15\">
                                                
                                                 <!-- Single ENQUIRE NOW Start --> 
<form name=\"enqury\" action=\"https://alliedladders.com/thankyou.php\" id=\"enqury\" method=\"POST\">
<div class=\"modal fade\" id=\"modalRegisterForm1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">ENQUIRE NOW:";
        // line 66
        if ($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "productName", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "productName", array());
        }
        echo "</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <input type=\"hidden\" id=\"orangeForm-name\" name=\"product_name\" class=\"form-control validate\" value=\"";
        // line 68
        if ($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "productName", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "productName", array());
        }
        echo "\">

          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body mx-3\">
        <div class=\"md-form mb-5\">
          <i class=\"fa fa-user prefix grey-text\"></i><label data-error=\"wrong\" data-success=\"right\" for=\"orangeForm-name\">Your name :</label>

          <input type=\"text\" id=\"orangeForm-name\" name=\"name\" class=\"form-control validate\" required maxlength=\"50\">
        </div>
        <div class=\"md-form mb-5\">
          <i class=\"fa fa-envelope prefix grey-text\"></i><label data-error=\"wrong\" data-success=\"right\" for=\"orangeForm-email\">Your email :</label>

          <input type=\"email\" id=\"orangeForm-email\" name=\"email\" class=\"form-control validate\" required maxlength=\"100\">
        </div>

        <div class=\"md-form mb-4\">
          <i class=\"fa fa-lock prefix grey-text\"></i><label data-error=\"wrong\" data-success=\"right\" for=\"orangeForm-pass\">Your Mobile No :</label>

          <input type=\"text\" id=\"orangeForm-mobile\" name=\"mobile\" class=\"form-control validate\" required maxlength=\"11\" pattern=\"[7-9]{1}[0-9]{9}\">
        </div>
       <div class=\"md-form mb-5\">
          <i class=\"fa fa-user prefix grey-text\"></i><label data-error=\"wrong\" data-success=\"right\" for=\"orangeForm-name\">City :</label>

          <input type=\"text\" id=\"orangeForm-city\" name=\"city\" class=\"form-control validate\" required maxlength=\"50\">
        </div>
           <div class=\"md-form mb-5\">
          <i class=\"fa fa-user prefix grey-text\"></i><label data-error=\"wrong\" data-success=\"right\" for=\"orangeForm-name\">Quantity  :</label>

          <input type=\"text\" id=\"orangeForm-quantity\" name=\"quantity\" class=\"form-control validate\" required maxlength=\"50\">
        </div>
        <div class=\"md-form mb-4\">
          <i class=\"fa fa-lock prefix grey-text\"></i><label data-error=\"wrong\" data-success=\"right\" for=\"orangeForm-pass\">Description: </label>
          <textarea type=\"text\" id=\"form8\" name=\"discription\" class=\"md-textarea form-control\" rows=\"2\" required maxlength=\"500\"></textarea>
        </div>

      </div>
      <div class=\"modal-footer d-flex justify-content-center\">
        <button class=\"btn btn-deep-orange\">ENQUIRE NOW</button>
      </div>
    </div>
  </div>
</div>

</form>

<div class=\"text-center\">
  <a href=\"\" class=\"theme-btn btn\" data-toggle=\"modal\" data-target=\"#modalRegisterForm1\">ENQUIRE NOW</a>
</div>
 <!-- Single ENQUIRE NOW End --> 
 <br>";
        // line 122
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "firstimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "firstimage", array()), "id", array())) > 0))) {
            // line 123
            $context["imageType"] = "jpeg";
            // line 124
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "firstimage", array()), "contentType", array()), "/");
            // line 125
            $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
            // line 126
            echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "firstimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "firstimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>";
        }
        // line 136
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "secondimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "secondimage", array()), "id", array())) > 0))) {
            // line 137
            $context["imageType"] = "jpeg";
            // line 138
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "secondimage", array()), "contentType", array()), "/");
            // line 139
            $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
            // line 140
            echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "secondimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "secondimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>";
        }
        // line 150
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "thirdimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "thirdimage", array()), "id", array())) > 0))) {
            // line 151
            $context["imageType"] = "jpeg";
            // line 152
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "thirdimage", array()), "contentType", array()), "/");
            // line 153
            $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
            // line 154
            echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "thirdimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "thirdimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>";
        }
        // line 163
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "forthimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "forthimage", array()), "id", array())) > 0))) {
            // line 164
            $context["imageType"] = "jpeg";
            // line 165
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "forthimage", array()), "contentType", array()), "/");
            // line 166
            $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
            // line 167
            echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "forthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "forthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>";
        }
        // line 178
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "fifthimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "fifthimage", array()), "id", array())) > 0))) {
            // line 179
            $context["imageType"] = "jpeg";
            // line 180
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "fifthimage", array()), "contentType", array()), "/");
            // line 181
            $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
            // line 182
            echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "fifthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "fifthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>";
        }
        // line 193
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "sixthimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "sixthimage", array()), "id", array())) > 0))) {
            // line 194
            $context["imageType"] = "jpeg";
            // line 195
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "sixthimage", array()), "contentType", array()), "/");
            // line 196
            $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
            // line 197
            echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "sixthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "sixthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>";
        }
        // line 205
        echo "
</div>
        <div class=\"row\">";
        // line 208
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "seventhimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "seventhimage", array()), "id", array())) > 0))) {
            // line 209
            $context["imageType"] = "jpeg";
            // line 210
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "seventhimage", array()), "contentType", array()), "/");
            // line 211
            $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
            // line 212
            echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "seventhimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "seventhimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>";
        }
        // line 223
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "eightthimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "eightthimage", array()), "id", array())) > 0))) {
            // line 224
            $context["imageType"] = "jpeg";
            // line 225
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "eightthimage", array()), "contentType", array()), "/");
            // line 226
            $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
            // line 227
            echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "eightthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "eightthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>";
        }
        // line 237
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "ninthimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "ninthimage", array()), "id", array())) > 0))) {
            // line 238
            $context["imageType"] = "jpeg";
            // line 239
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "ninthimage", array()), "contentType", array()), "/");
            // line 240
            $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
            // line 241
            echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "ninthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "ninthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>";
        }
        // line 251
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array", false, true), "tenthimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "tenthimage", array()), "id", array())) > 0))) {
            // line 252
            $context["imageType"] = "jpeg";
            // line 253
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "tenthimage", array()), "contentType", array()), "/");
            // line 254
            $context["imageType"] = $this->getAttribute(($context["imageTypeArry"] ?? null), 1, array(), "array");
            // line 255
            echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 258
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "tenthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["result"] ?? null), 0, array(), "array"), "tenthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, ($context["imageType"] ?? null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>";
        }
        // line 263
        echo "                              
                            </div>
                        </div>
            </section>



                            </div>  


                           </div>
                            </div>


                        </div>
                    </div>";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:fabricationdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 263,  448 => 259,  442 => 258,  437 => 255,  435 => 254,  433 => 253,  431 => 252,  429 => 251,  421 => 245,  415 => 244,  410 => 241,  408 => 240,  406 => 239,  404 => 238,  402 => 237,  394 => 231,  388 => 230,  383 => 227,  381 => 226,  379 => 225,  377 => 224,  375 => 223,  367 => 216,  361 => 215,  356 => 212,  354 => 211,  352 => 210,  350 => 209,  348 => 208,  344 => 205,  336 => 201,  330 => 200,  325 => 197,  323 => 196,  321 => 195,  319 => 194,  317 => 193,  309 => 186,  303 => 185,  298 => 182,  296 => 181,  294 => 180,  292 => 179,  290 => 178,  282 => 171,  276 => 170,  271 => 167,  269 => 166,  267 => 165,  265 => 164,  263 => 163,  255 => 158,  249 => 157,  244 => 154,  242 => 153,  240 => 152,  238 => 151,  236 => 150,  228 => 144,  222 => 143,  217 => 140,  215 => 139,  213 => 138,  211 => 137,  209 => 136,  201 => 130,  195 => 129,  190 => 126,  188 => 125,  186 => 124,  184 => 123,  182 => 122,  126 => 68,  119 => 66,  97 => 46,  93 => 45,  75 => 31,  60 => 18,  57 => 16,  47 => 14,  43 => 13,  41 => 12,  39 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:fabricationdetail.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/fabricationdetail.html.twig");
    }
}
