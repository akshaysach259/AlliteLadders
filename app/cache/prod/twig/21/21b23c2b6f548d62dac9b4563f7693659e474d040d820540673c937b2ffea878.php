<?php

/* ProjectCmsBundle:Default:productdetail.html.twig */
class __TwigTemplate_525f8e754603669d29d33c8c648a8395fe7a5c6b6844499a32fde81cf73b1b8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectCmsBundle::layout.html.twig", "ProjectCmsBundle:Default:productdetail.html.twig", 1);
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
                                <h2 class=\"widget-title\"> <span class=\"light-font\">Refine by</span> <strong>category</strong> </h2>
                                <div class=\"divider-full-1\"></div>
                          ";
        // line 10
        if ((array_key_exists("queryMenu", $context) && (twig_length_filter($this->env, (isset($context["queryMenu"]) ? $context["queryMenu"] : null)) > 0))) {
            // line 11
            echo "                                <ul class=\"cate-widget\">
\t\t\t         ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["queryMenu"]) ? $context["queryMenu"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mainProductMenu"]) {
                // line 13
                echo "                                 <li> <i class=\"fa fa-arrow-circle-o-right clr-txt\"></i> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["mainProductMenu"], "pageUrl", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["mainProductMenu"], "pageTitle", array()), "html", null, true);
                echo "</a> </li>
                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mainProductMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    \t      \t\t\t</ul>
                         ";
        }
        // line 17
        echo "                             </div>
                        </div>

                        <div class=\"col-md-9 pt-15\">
                            <div class=\"product-single sec-space-bottom \">
                                <div class=\"fsz-16\">
                                    <div class=\"product-content block-inline\">
                                        <div class=\"single-caption\"> 
                                            <h3 class=\"section-title\">
                                                <a href=\"#\"> <span class=\"light-font\"> ";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "productName", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "productName", array());
        }
        echo " </span></a>
                                            </h3>
                                            <div class=\"text-center\" style=\"float:right\">
  <a href=\"\" class=\"theme-btn btn\" data-toggle=\"modal\" data-target=\"#modalRegisterForm\">ENQUIRE NOW</a>
</div>
                                                                                                                                                                  
                                            <div class=\"add-cart pt-15\">
                                                
                                                 <!-- Single ENQUIRE NOW Start --> 
<form name=\"enqury\" action=\"https://alliedladder.com/thankyou.php\" id=\"enqury\" method=\"POST\">
<div class=\"modal fade\" id=\"modalRegisterForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">ENQUIRE NOW: ";
        // line 41
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "productName", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "productName", array());
        }
        echo "</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <input type=\"hidden\" id=\"orangeForm-name\" name=\"product_name\" class=\"form-control validate\" value=\"";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "productName", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "productName", array());
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


 <!-- Single ENQUIRE NOW End --> 
                                    
                                            </div><br>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div> 
                                
                                
                                
                                <!-- Single Products Slider Starts --> 
                                <div class=\"fsz-16 organic-product clearfix\">
                                       <div class=\"divider-full-1\"></div>

                                   
                                    <div >

";
        // line 110
        $context["imageType"] = "jpeg";
        // line 111
        $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "image", array()), "contentType", array()), "/");
        // line 112
        $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
        // line 113
        echo "
<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "image", array()), "id", array()), "html", null, true);
        echo "_default_td_600.";
        echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
        echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "image", array()), "id", array()), "html", null, true);
        echo "_default_td_300.";
        echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
        echo "\" alt=\"\"></a>
</div>
</div>


\t";
        // line 122
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "firstimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "firstimage", array()), "id", array())) > 0))) {
            // line 123
            echo "\t\t\t\t\t";
            $context["imageType"] = "jpeg";
            // line 124
            echo "\t\t\t\t\t";
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "firstimage", array()), "contentType", array()), "/");
            // line 125
            echo "\t\t\t\t\t";
            $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
            // line 126
            echo "<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "firstimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "firstimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>
\t\t\t\t\t";
        }
        // line 133
        echo "

\t\t\t\t";
        // line 135
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "secondimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "secondimage", array()), "id", array())) > 0))) {
            // line 136
            echo "\t\t\t\t\t";
            $context["imageType"] = "jpeg";
            // line 137
            echo "\t\t\t\t\t";
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "secondimage", array()), "contentType", array()), "/");
            // line 138
            echo "\t\t\t\t\t";
            $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
            // line 139
            echo "<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "secondimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "secondimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>
\t\t\t\t\t";
        }
        // line 146
        echo "
\t\t";
        // line 147
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "thirdimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "thirdimage", array()), "id", array())) > 0))) {
            // line 148
            echo "\t\t\t\t\t";
            $context["imageType"] = "jpeg";
            // line 149
            echo "\t\t\t\t\t";
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "thirdimage", array()), "contentType", array()), "/");
            // line 150
            echo "\t\t\t\t\t";
            $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
            // line 151
            echo "<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "thirdimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "thirdimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>
\t\t\t\t\t";
        }
        // line 158
        echo "
";
        // line 159
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "forthimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "forthimage", array()), "id", array())) > 0))) {
            // line 160
            echo "\t\t\t\t\t";
            $context["imageType"] = "jpeg";
            // line 161
            echo "\t\t\t\t\t";
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "forthimage", array()), "contentType", array()), "/");
            // line 162
            echo "\t\t\t\t\t";
            $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
            // line 163
            echo "<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "forthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "forthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>
\t\t\t\t\t";
        }
        // line 170
        echo "
\t";
        // line 171
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "fifthimage", array(), "any", false, true), "id", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "fifthimage", array()), "id", array())) > 0))) {
            // line 172
            echo "\t\t\t\t\t";
            $context["imageType"] = "jpeg";
            // line 173
            echo "\t\t\t\t\t";
            $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "fifthimage", array()), "contentType", array()), "/");
            // line 174
            echo "\t\t\t\t\t";
            $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
            // line 175
            echo "<div class=\"col-sm-4\" style=\"margin-bottom:20px\"> 
<div class=\"organic-prod\">
<a href=\"../../uploads/media/default/0001/01/thumb_";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "fifthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_600.";
            echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
            echo "\" class=\"big\">
<img src=\"../../uploads/media/default/0001/01/thumb_";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "fifthimage", array()), "id", array()), "html", null, true);
            echo "_default_td_300.";
            echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
            echo "\" alt=\"\"></a>
</div>
</div>
\t\t\t\t\t";
        }
        // line 182
        echo "


                                    </div>
                                </div>
                                <!-- Single Products Slider Ends --> 

                                
                                
\t\t\t\t<div class=\"fsz-16\">
\t\t\t\t";
        // line 192
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "pageDescription", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "pageDescription", array());
        }
        // line 193
        echo "\t\t\t\t</div>


    <h2>Similar Products</h2>

";
        // line 198
        if ((array_key_exists("queryCatPageList", $context) && (twig_length_filter($this->env, (isset($context["queryCatPageList"]) ? $context["queryCatPageList"] : null)) > 0))) {
            // line 199
            echo "<div class=\"fsz-16\"> 
<div class=\"row\">
";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["queryCatPageList"]) ? $context["queryCatPageList"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["queryCatPageResult"]) {
                // line 202
                echo "
";
                // line 203
                $context["imageType"] = "jpeg";
                // line 204
                $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["queryCatPageResult"], "image", array()), "contentType", array()), "/");
                // line 205
                $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
                // line 206
                echo "<div class=\"col-sm-4\"> 
    <div class=\"organic-prod\">
   ";
                // line 208
                if (((isset($context["imageType"]) ? $context["imageType"] : null) == "x-shockwave-flash")) {
                    // line 209
                    echo "    <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0\" width=\"250\" height=\"400\">
  <param name=\"movie\" value=\"/web/uploads/media/default/0001/01/";
                    // line 210
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryCatPageResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" />
  <param name=\"quality\" value=\"high\" />
  <embed src=\"/web/uploads/media/default/0001/01/";
                    // line 212
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryCatPageResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"250\" height=\"400\"></embed>
</object>
  \t\t\t\t       ";
                } else {
                    // line 215
                    echo "        
        <img src=\"/web/uploads/media/default/0001/01/thumb_";
                    // line 216
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryCatPageResult"], "image", array()), "id", array()), "html", null, true);
                    echo "_default_td_160.";
                    echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
                    echo "\" /> 
        ";
                }
                // line 218
                echo "        
        <span class=\"divider\"></span>
        <h3 class=\"title-1\"> <a href=\"";
                // line 220
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_product_detail", array("urlAlias" => $this->getAttribute($context["queryCatPageResult"], "pageUrl", array()))), "html", null, true);
                echo "\"> <span class=\"light-font\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["queryCatPageResult"], "productName", array()), "html", null, true);
                echo " </span></a> </h3>
        <i class=\"clr-txt font-2\"><a href=\"";
                // line 221
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_product_detail", array("urlAlias" => $this->getAttribute($context["queryCatPageResult"], "pageUrl", array()))), "html", null, true);
                echo "\" style=\"color:#7fba00\">View More</a></i>
    </div>
</div>

";
                // line 225
                if (((($this->getAttribute($context["loop"], "index", array()) % 3) == 0) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 226
                    echo "        </div><div class=\"row\"> 
   ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['queryCatPageResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "</div>
</div>
";
        }
        // line 232
        echo " </div>

<br>

<h2 class=\"widget-title clearfix\"> <span class=\"light-font\">Refine by</span> <strong>category</strong> </h2>


 ";
        // line 239
        if ((array_key_exists("queryMenu", $context) && (twig_length_filter($this->env, (isset($context["queryMenu"]) ? $context["queryMenu"] : null)) > 0))) {
            // line 240
            echo "<div class=\"fsz-16\"> 
<div class=\"row\">
";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["queryMenu"]) ? $context["queryMenu"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["queryMenuResult"]) {
                // line 243
                $context["imageType"] = "jpeg";
                // line 244
                $context["imageTypeArry"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($context["queryMenuResult"], "image", array()), "contentType", array()), "/");
                // line 245
                $context["imageType"] = $this->getAttribute((isset($context["imageTypeArry"]) ? $context["imageTypeArry"] : null), 1, array(), "array");
                // line 246
                echo "<div class=\"col-sm-4\"> 
    <div class=\"organic-prod\">
        
        
        ";
                // line 250
                if (((isset($context["imageType"]) ? $context["imageType"] : null) == "x-shockwave-flash")) {
                    // line 251
                    echo "    <object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0\" width=\"250\" height=\"400\">
  <param name=\"movie\" value=\"/web/uploads/media/default/0001/01/";
                    // line 252
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryMenuResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" />
  <param name=\"quality\" value=\"high\" />
  <embed src=\"/web/uploads/media/default/0001/01/";
                    // line 254
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryMenuResult"], "image", array()), "providerReference", array()), "html", null, true);
                    echo "\" quality=\"high\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"250\" height=\"400\"></embed>
</object>
  \t\t\t\t       ";
                } else {
                    // line 257
                    echo "        
        
        <img src=\"/web/uploads/media/default/0001/01/thumb_";
                    // line 259
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["queryMenuResult"], "image", array()), "id", array()), "html", null, true);
                    echo "_default_td_160.";
                    echo twig_escape_filter($this->env, (isset($context["imageType"]) ? $context["imageType"] : null), "html", null, true);
                    echo "\" /> 
        
        ";
                }
                // line 262
                echo "        <span class=\"divider\"></span>
        <h3 class=\"title-1\"> <a href=\"";
                // line 263
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["queryMenuResult"], "pageUrl", array()))), "html", null, true);
                echo "\"> <span class=\"light-font\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["queryMenuResult"], "pageTitle", array()), "html", null, true);
                echo " </span></a> </h3>
        <i class=\"clr-txt font-2\"><a href=\"";
                // line 264
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_page_article_detail", array("urlAlias" => $this->getAttribute($context["queryMenuResult"], "pageUrl", array()))), "html", null, true);
                echo "\" style=\"color:#7fba00\">View More</a></i>
    </div>
</div>

";
                // line 268
                if (((($this->getAttribute($context["loop"], "index", array()) % 4) == 0) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 269
                    echo "        </div><div class=\"row\"> 
   ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['queryMenuResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "</div>
</div>
";
        }
        // line 275
        echo "


                           </div>
                            </div>


                        </div>
                    </div>



 ";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:productdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 275,  594 => 272,  578 => 269,  576 => 268,  569 => 264,  563 => 263,  560 => 262,  552 => 259,  548 => 257,  542 => 254,  537 => 252,  534 => 251,  532 => 250,  526 => 246,  524 => 245,  522 => 244,  520 => 243,  503 => 242,  499 => 240,  497 => 239,  488 => 232,  483 => 229,  467 => 226,  465 => 225,  458 => 221,  452 => 220,  448 => 218,  441 => 216,  438 => 215,  432 => 212,  427 => 210,  424 => 209,  422 => 208,  418 => 206,  416 => 205,  414 => 204,  412 => 203,  409 => 202,  392 => 201,  388 => 199,  386 => 198,  379 => 193,  375 => 192,  363 => 182,  354 => 178,  348 => 177,  344 => 175,  341 => 174,  338 => 173,  335 => 172,  333 => 171,  330 => 170,  321 => 166,  315 => 165,  311 => 163,  308 => 162,  305 => 161,  302 => 160,  300 => 159,  297 => 158,  288 => 154,  282 => 153,  278 => 151,  275 => 150,  272 => 149,  269 => 148,  267 => 147,  264 => 146,  255 => 142,  249 => 141,  245 => 139,  242 => 138,  239 => 137,  236 => 136,  234 => 135,  230 => 133,  221 => 129,  215 => 128,  211 => 126,  208 => 125,  205 => 124,  202 => 123,  200 => 122,  190 => 117,  184 => 116,  179 => 113,  177 => 112,  175 => 111,  173 => 110,  101 => 43,  94 => 41,  74 => 26,  63 => 17,  59 => 15,  48 => 13,  44 => 12,  41 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:productdetail.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/productdetail.html.twig");
    }
}
