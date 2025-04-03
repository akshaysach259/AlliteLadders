<?php

/* ProjectCmsBundle:Default:contact.html.twig */
class __TwigTemplate_8795da111a1ca94f9e7552cf912c7f4f21c35eef1ad0ef9d06b3a9a878616433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectCmsBundle::layout.html.twig", "ProjectCmsBundle:Default:contact.html.twig", 1);
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
<section class=\"sec-space-bottom\">
                <div class=\"container pt-50\">
                    <div class=\"row\">
                 \t";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("ProjectCmsBundle:Default:menulist"));
        echo "
                        <div class=\"col-md-9 pt-15\">
                            <div class=\"blog-single\">       
                                <div class=\"content\">        
                                    <div class=\"blog-media\">
                                        <h2 class=\"fsz-30\"> <span class=\"light-font\">";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "pageTitle", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "pageTitle", array())), "html", null, true);
        }
        echo "</span></h2>
                                    </div>
                                    <div class=\"caption\">                                       
                                   ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array", false, true), "pageDescription", array(), "any", true, true)) {
            echo $this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), 0, array(), "array"), "pageDescription", array());
        }
        // line 17
        echo "                                    </div>   
                                </div>
                               
                               
                               <form name=\"enqury\" action=\"http://demo2.infobuzz.in/web/app_dev.php/thankyou.php\" id=\"enqury\" method=\"POST\">
                                             <input type=\"hidden\" id=\"orangeForm-name\" name=\"contactus\" class=\"form-control validate\" value=\"contactus\">

<div class=\"modal fade\" id=\"modalRegisterForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">ENQUIRE NOW:</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
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
  <a href=\"\" class=\"theme-btn btn\" data-toggle=\"modal\" data-target=\"#modalRegisterForm\">ENQUIRE NOW</a>
</div>
                               
                               
                               
                
                            </div>
                        </div>                        
                    </div>
                </div>                
            </section>


 ";
    }

    public function getTemplateName()
    {
        return "ProjectCmsBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  53 => 16,  45 => 13,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjectCmsBundle:Default:contact.html.twig", "/home/alliedtr/domains/alliedladders.com/public_html/src/ProjectCmsBundle/Resources/views/Default/contact.html.twig");
    }
}
