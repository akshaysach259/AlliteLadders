<?php

/* @WebProfiler/Profiler/toolbar.css.twig */
class __TwigTemplate_e085a0a27b29c6d782f22c69a3f25a3ec8b18e7a2cb73f6c6698f72c581457c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26ffe358d3572653c4b7e01dad74d62754b144ea0b5190a7a293eaae3774d1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ffe358d3572653c4b7e01dad74d62754b144ea0b5190a7a293eaae3774d1e7->enter($__internal_26ffe358d3572653c4b7e01dad74d62754b144ea0b5190a7a293eaae3774d1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.css.twig"));

        // line 2
        $context["colors"] = array("success" => "#4F805D", "warning" => "#A46A1F", "error" => "#B0413E");
        // line 3
        echo "
.sf-minitoolbar {
    background-color: #222;
    border-top-left-radius: 4px;
    bottom: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    display: none;
    height: 36px;
    padding: 6px;
    position: fixed;
    right: 0;
    z-index: 99999;
}

.sf-minitoolbar a {
    display: block;
}
.sf-minitoolbar svg,
.sf-minitoolbar img {
    max-height: 24px;
    max-width: 24px;
    display: inline;
}

.sf-toolbarreset * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    vertical-align: baseline;
}

.sf-toolbarreset {
    background-color: #222;
    bottom: 0;
    box-shadow: 0 -1px 0px rgba(0, 0, 0, 0.2);
    color: #EEE;
    font: 11px Arial, sans-serif;
    left: 0;
    margin: 0;
    padding: 0 36px 0 0;
    position: fixed;
    right: 0;
    text-align: left;
    text-transform: none;
    z-index: 99999;

    /* neutralize the aliasing defined by external CSS styles */
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}
.sf-toolbarreset abbr {
    border: dashed #777;
    border-width: 0 0 1px;
}
.sf-toolbarreset svg,
.sf-toolbarreset img {
    height: 20px;
    display: inline-block;
}

.sf-toolbarreset .hide-button {
    background: #444;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 36px;
    height: 36px;
    cursor: pointer;
    text-align: center;
}
.sf-toolbarreset .hide-button svg {
    max-height: 18px;
    margin-top: 10px;
}

.sf-toolbar-block {
    cursor: default;
    display: block;
    float: left;
    height: 36px;
    margin-right: 0;
    white-space: nowrap;
}
.sf-toolbar-block > a,
.sf-toolbar-block > a:hover {
    display: block;
    text-decoration: none;
}

.sf-toolbar-block span {
    display: inline-block;
}
.sf-toolbar-block .sf-toolbar-value {
    color: #F5F5F5;
    font-size: 13px;
    line-height: 36px;
    padding: 0;
}
.sf-toolbar-block .sf-toolbar-label,
.sf-toolbar-block .sf-toolbar-class-separator {
    color: #AAA;
    font-size: 12px;
}

.sf-toolbar-block .sf-toolbar-info {
    border-collapse: collapse;
    display: table;
    z-index: 100000;
}
.sf-toolbar-block hr {
    border-top: 1px solid #777;
    margin: 4px 0;
    padding-top: 4px;
}
.sf-toolbar-block .sf-toolbar-info-piece {
    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */
    border-bottom: solid transparent 3px;
    display: table-row;
}
.sf-toolbar-block .sf-toolbar-info-piece-additional,
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    display: none;
}
.sf-toolbar-block .sf-toolbar-info-group {
    margin-bottom: 4px;
    padding-bottom: 2px;
    border-bottom: 1px solid #333333;
}
.sf-toolbar-block .sf-toolbar-info-group:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 2px 5px;
    margin-bottom: 0px;
}
.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {
    margin-left: 4px;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a {
    color: #99CDD8;
    text-decoration: underline;
}
.sf-toolbar-block .sf-toolbar-info-piece a:hover {
    text-decoration: none;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    color: #AAA;
    display: table-cell;
    font-size: 11px;
    padding: 4px 8px 4px 0;
}
.sf-toolbar-block .sf-toolbar-info-piece span {

}
.sf-toolbar-block .sf-toolbar-info-piece span {
    color: #F5F5F5;
    font-size: 12px;
}

.sf-toolbar-block .sf-toolbar-info {
    background-color: #444;
    bottom: 36px;
    color: #F5F5F5;
    display: none;
    padding: 9px 0;
    position: absolute;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #FFF;
    background-color: #666;
    padding: 3px 6px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 15px;
    min-height: 13px;
    text-align: center;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: ";
        // line 200
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
}
.sf-toolbar-block .sf-toolbar-status-red {
    background-color: ";
        // line 203
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "error", array());
        echo ";
}
.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: ";
        // line 206
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "warning", array());
        echo ";
}

.sf-toolbar-block.sf-toolbar-status-green {
    background-color: ";
        // line 210
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "success", array());
        echo ";
    color: #FFF;
}
.sf-toolbar-block.sf-toolbar-status-red {
    background-color: ";
        // line 214
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "error", array());
        echo ";
    color: #FFF;
}
.sf-toolbar-block.sf-toolbar-status-yellow {
    background-color: ";
        // line 218
        echo $this->getAttribute((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")), "warning", array());
        echo ";
    color: #FFF;
}

.sf-toolbar-block-request .sf-toolbar-status {
    color: #FFF;
    display: inline-block;
    font-size: 14px;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a {
    text-decoration: none;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {
    text-decoration: underline;
}

.sf-toolbar-status-green .sf-toolbar-label,
.sf-toolbar-status-yellow .sf-toolbar-label,
.sf-toolbar-status-red .sf-toolbar-label {
    color: #FFF;
}
.sf-toolbar-status-green svg path,
.sf-toolbar-status-red svg path,
.sf-toolbar-status-yellow svg path {
    fill: #FFF;
}
.sf-toolbar-block-config svg path {
    fill: #FFF;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
    height: 36px;
    padding: 0 7px;
}
.sf-toolbar-block-request .sf-toolbar-icon {
    padding-left: 0;
    padding-right: 0;
}

.sf-toolbar-block .sf-toolbar-icon img,
.sf-toolbar-block .sf-toolbar-icon svg {
    border-width: 0;
    position: relative;
    top: 8px;
}

.sf-toolbar-block .sf-toolbar-icon img + span,
.sf-toolbar-block .sf-toolbar-icon svg + span {
    margin-left: 4px;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {
    margin-left: 4px;
}

.sf-toolbar-block:hover {
    position: relative;
}
.sf-toolbar-block:hover .sf-toolbar-icon {
    background-color: #444;
    position: relative;
    z-index: 10002;
}
.sf-toolbar-block:hover .sf-toolbar-info {
    display: block;
    padding: 10px;
    max-width: 480px;
    max-height: 480px;
    word-wrap: break-word;
    overflow: hidden;
    overflow-y: auto;
}
.sf-toolbar-info-piece b.sf-toolbar-ajax-info {
    color: #F5F5F5;
}
.sf-toolbar-ajax-requests {
    table-layout: auto;
    width: 100%;
}
.sf-toolbar-ajax-requests td {
    background-color: #444;
    border-bottom: 1px solid #777;
    color: #F5F5F5;
    font-size: 12px;
    padding: 4px;
}
.sf-toolbar-ajax-requests tr:last-child td {
    border-bottom: 0;
}
.sf-toolbar-ajax-requests th {
    background-color: #222;
    border-bottom: 0;
    color: #AAA;
    font-size: 11px;
    padding: 4px;
}
.sf-ajax-request-url {
    max-width: 300px;
    line-height: 9px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a {
    text-decoration: none;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {
    text-decoration: underline;
}
.sf-ajax-request-duration {
    text-align: right;
}
.sf-ajax-request-loading {
    -webkit-animation: sf-blink .5s ease-in-out infinite;
    -o-animation: sf-blink .5s ease-in-out infinite;
    -moz-animation: sf-blink .5s ease-in-out infinite;
    animation: sf-blink .5s ease-in-out infinite;
}
@-webkit-keyframes sf-blink {
    0% { background: #222; }
    50% { background: #444; }
    100% { background: #222; }
}
@-moz-keyframes sf-blink {
    0% { background: #222; }
    50% { background: #444; }
    100% { background: #222; }
}
@keyframes sf-blink {
    0% { background: #222; }
    50% { background: #444; }
    100% { background: #222; }
}

.sf-toolbar-block-dump pre.sf-dump {
    background-color: #222;
    border-color: #777;
    border-radius: 0;
    margin: 6px 0 12px 0;
}
.sf-toolbar-block-dump pre.sf-dump:last-child {
    margin-bottom: 0;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece {
    display: block;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {
    color: #AAA;
    margin-left: 4px;
}
.sf-toolbar-block-dump .sf-toolbar-info img {
    display: none;
}

/* Override the setting when the toolbar is on the top */
";
        // line 375
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == "top")) {
            // line 376
            echo "    .sf-minitoolbar {
        border-bottom-left-radius: 4px;
        border-top-left-radius: 0;
        bottom: auto;
        right: 0;
        top: 0;
    }

    .sf-toolbarreset {
        bottom: auto;
        box-shadow: 0 1px 0px rgba(0, 0, 0, 0.2);
        top: 0;
    }

    .sf-toolbar-block .sf-toolbar-info {
        bottom: auto;
        top: 36px;
    }
";
        }
        // line 395
        echo "
";
        // line 396
        if ( !(isset($context["floatable"]) ? $context["floatable"] : $this->getContext($context, "floatable"))) {
            // line 397
            echo "    .sf-toolbarreset {
        position: static;
    }
";
        }
        // line 401
        echo "
/* Responsive Design */
.sf-toolbar-icon .sf-toolbar-label,
.sf-toolbar-icon .sf-toolbar-value {
    display: none;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {
    display: inline-block;
}

/* Legacy Design - these styles are maintained to make old panels look
   a bit better on the new toolbar */
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    color: #AAA;
    font-size: 12px;
}
.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {
    color: #FFF;
}

@media (min-width: 768px) {

    .sf-toolbar-icon .sf-toolbar-label,
    .sf-toolbar-icon .sf-toolbar-value {
        display: inline;
    }

    .sf-toolbar-block .sf-toolbar-icon img,
    .sf-toolbar-block .sf-toolbar-icon svg {
        top: 6px;
    }
    .sf-toolbar-block-time .sf-toolbar-icon svg,
    .sf-toolbar-block-memory .sf-toolbar-icon svg {
        display: none;
    }
    .sf-toolbar-block-time .sf-toolbar-icon svg + span,
    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {
        margin-left: 0;
    }

    .sf-toolbar-block .sf-toolbar-icon {
        padding: 0 10px;
    }
    .sf-toolbar-block-time .sf-toolbar-icon {
        padding-right: 5px;
    }
    .sf-toolbar-block-memory .sf-toolbar-icon {
        padding-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-icon {
        padding-left: 0;
        padding-right: 0;
    }
    .sf-toolbar-block-request .sf-toolbar-status + .sf-toolbar-label {
        margin-left: 4px;
    }
    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {
        margin-right: 10px;
    }

    .sf-toolbar-block-request:hover .sf-toolbar-info {
        max-width: none;
    }

    .sf-toolbar-block .sf-toolbar-info-piece b {
        font-size: 12px;
    }
    .sf-toolbar-block .sf-toolbar-info-piece span {
        font-size: 13px;
    }

    .sf-toolbar-block-right {
        float: right;
        margin-left: 0;
        margin-right: 0;
    }
}

@media (min-width: 1024px) {
    .sf-toolbar-block .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
        display: inline-block;
    }

    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {
        display: none;
    }
}
";
        
        $__internal_26ffe358d3572653c4b7e01dad74d62754b144ea0b5190a7a293eaae3774d1e7->leave($__internal_26ffe358d3572653c4b7e01dad74d62754b144ea0b5190a7a293eaae3774d1e7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 401,  444 => 397,  442 => 396,  439 => 395,  418 => 376,  416 => 375,  256 => 218,  249 => 214,  242 => 210,  235 => 206,  229 => 203,  223 => 200,  24 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# when updating any of these colors, do the same in profiler.css.twig #}
{% set colors = { 'success': '#4F805D', 'warning': '#A46A1F', 'error': '#B0413E' } %}

.sf-minitoolbar {
    background-color: #222;
    border-top-left-radius: 4px;
    bottom: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    display: none;
    height: 36px;
    padding: 6px;
    position: fixed;
    right: 0;
    z-index: 99999;
}

.sf-minitoolbar a {
    display: block;
}
.sf-minitoolbar svg,
.sf-minitoolbar img {
    max-height: 24px;
    max-width: 24px;
    display: inline;
}

.sf-toolbarreset * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    vertical-align: baseline;
}

.sf-toolbarreset {
    background-color: #222;
    bottom: 0;
    box-shadow: 0 -1px 0px rgba(0, 0, 0, 0.2);
    color: #EEE;
    font: 11px Arial, sans-serif;
    left: 0;
    margin: 0;
    padding: 0 36px 0 0;
    position: fixed;
    right: 0;
    text-align: left;
    text-transform: none;
    z-index: 99999;

    /* neutralize the aliasing defined by external CSS styles */
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}
.sf-toolbarreset abbr {
    border: dashed #777;
    border-width: 0 0 1px;
}
.sf-toolbarreset svg,
.sf-toolbarreset img {
    height: 20px;
    display: inline-block;
}

.sf-toolbarreset .hide-button {
    background: #444;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 36px;
    height: 36px;
    cursor: pointer;
    text-align: center;
}
.sf-toolbarreset .hide-button svg {
    max-height: 18px;
    margin-top: 10px;
}

.sf-toolbar-block {
    cursor: default;
    display: block;
    float: left;
    height: 36px;
    margin-right: 0;
    white-space: nowrap;
}
.sf-toolbar-block > a,
.sf-toolbar-block > a:hover {
    display: block;
    text-decoration: none;
}

.sf-toolbar-block span {
    display: inline-block;
}
.sf-toolbar-block .sf-toolbar-value {
    color: #F5F5F5;
    font-size: 13px;
    line-height: 36px;
    padding: 0;
}
.sf-toolbar-block .sf-toolbar-label,
.sf-toolbar-block .sf-toolbar-class-separator {
    color: #AAA;
    font-size: 12px;
}

.sf-toolbar-block .sf-toolbar-info {
    border-collapse: collapse;
    display: table;
    z-index: 100000;
}
.sf-toolbar-block hr {
    border-top: 1px solid #777;
    margin: 4px 0;
    padding-top: 4px;
}
.sf-toolbar-block .sf-toolbar-info-piece {
    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */
    border-bottom: solid transparent 3px;
    display: table-row;
}
.sf-toolbar-block .sf-toolbar-info-piece-additional,
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    display: none;
}
.sf-toolbar-block .sf-toolbar-info-group {
    margin-bottom: 4px;
    padding-bottom: 2px;
    border-bottom: 1px solid #333333;
}
.sf-toolbar-block .sf-toolbar-info-group:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 2px 5px;
    margin-bottom: 0px;
}
.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {
    margin-left: 4px;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a {
    color: #99CDD8;
    text-decoration: underline;
}
.sf-toolbar-block .sf-toolbar-info-piece a:hover {
    text-decoration: none;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    color: #AAA;
    display: table-cell;
    font-size: 11px;
    padding: 4px 8px 4px 0;
}
.sf-toolbar-block .sf-toolbar-info-piece span {

}
.sf-toolbar-block .sf-toolbar-info-piece span {
    color: #F5F5F5;
    font-size: 12px;
}

.sf-toolbar-block .sf-toolbar-info {
    background-color: #444;
    bottom: 36px;
    color: #F5F5F5;
    display: none;
    padding: 9px 0;
    position: absolute;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #FFF;
    background-color: #666;
    padding: 3px 6px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 15px;
    min-height: 13px;
    text-align: center;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: {{ colors.success|raw }};
}
.sf-toolbar-block .sf-toolbar-status-red {
    background-color: {{ colors.error|raw }};
}
.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: {{ colors.warning|raw }};
}

.sf-toolbar-block.sf-toolbar-status-green {
    background-color: {{ colors.success|raw }};
    color: #FFF;
}
.sf-toolbar-block.sf-toolbar-status-red {
    background-color: {{ colors.error|raw }};
    color: #FFF;
}
.sf-toolbar-block.sf-toolbar-status-yellow {
    background-color: {{ colors.warning|raw }};
    color: #FFF;
}

.sf-toolbar-block-request .sf-toolbar-status {
    color: #FFF;
    display: inline-block;
    font-size: 14px;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a {
    text-decoration: none;
}
.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {
    text-decoration: underline;
}

.sf-toolbar-status-green .sf-toolbar-label,
.sf-toolbar-status-yellow .sf-toolbar-label,
.sf-toolbar-status-red .sf-toolbar-label {
    color: #FFF;
}
.sf-toolbar-status-green svg path,
.sf-toolbar-status-red svg path,
.sf-toolbar-status-yellow svg path {
    fill: #FFF;
}
.sf-toolbar-block-config svg path {
    fill: #FFF;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
    height: 36px;
    padding: 0 7px;
}
.sf-toolbar-block-request .sf-toolbar-icon {
    padding-left: 0;
    padding-right: 0;
}

.sf-toolbar-block .sf-toolbar-icon img,
.sf-toolbar-block .sf-toolbar-icon svg {
    border-width: 0;
    position: relative;
    top: 8px;
}

.sf-toolbar-block .sf-toolbar-icon img + span,
.sf-toolbar-block .sf-toolbar-icon svg + span {
    margin-left: 4px;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {
    margin-left: 4px;
}

.sf-toolbar-block:hover {
    position: relative;
}
.sf-toolbar-block:hover .sf-toolbar-icon {
    background-color: #444;
    position: relative;
    z-index: 10002;
}
.sf-toolbar-block:hover .sf-toolbar-info {
    display: block;
    padding: 10px;
    max-width: 480px;
    max-height: 480px;
    word-wrap: break-word;
    overflow: hidden;
    overflow-y: auto;
}
.sf-toolbar-info-piece b.sf-toolbar-ajax-info {
    color: #F5F5F5;
}
.sf-toolbar-ajax-requests {
    table-layout: auto;
    width: 100%;
}
.sf-toolbar-ajax-requests td {
    background-color: #444;
    border-bottom: 1px solid #777;
    color: #F5F5F5;
    font-size: 12px;
    padding: 4px;
}
.sf-toolbar-ajax-requests tr:last-child td {
    border-bottom: 0;
}
.sf-toolbar-ajax-requests th {
    background-color: #222;
    border-bottom: 0;
    color: #AAA;
    font-size: 11px;
    padding: 4px;
}
.sf-ajax-request-url {
    max-width: 300px;
    line-height: 9px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a {
    text-decoration: none;
}
.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {
    text-decoration: underline;
}
.sf-ajax-request-duration {
    text-align: right;
}
.sf-ajax-request-loading {
    -webkit-animation: sf-blink .5s ease-in-out infinite;
    -o-animation: sf-blink .5s ease-in-out infinite;
    -moz-animation: sf-blink .5s ease-in-out infinite;
    animation: sf-blink .5s ease-in-out infinite;
}
@-webkit-keyframes sf-blink {
    0% { background: #222; }
    50% { background: #444; }
    100% { background: #222; }
}
@-moz-keyframes sf-blink {
    0% { background: #222; }
    50% { background: #444; }
    100% { background: #222; }
}
@keyframes sf-blink {
    0% { background: #222; }
    50% { background: #444; }
    100% { background: #222; }
}

.sf-toolbar-block-dump pre.sf-dump {
    background-color: #222;
    border-color: #777;
    border-radius: 0;
    margin: 6px 0 12px 0;
}
.sf-toolbar-block-dump pre.sf-dump:last-child {
    margin-bottom: 0;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece {
    display: block;
}
.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {
    color: #AAA;
    margin-left: 4px;
}
.sf-toolbar-block-dump .sf-toolbar-info img {
    display: none;
}

/* Override the setting when the toolbar is on the top */
{% if position == 'top' %}
    .sf-minitoolbar {
        border-bottom-left-radius: 4px;
        border-top-left-radius: 0;
        bottom: auto;
        right: 0;
        top: 0;
    }

    .sf-toolbarreset {
        bottom: auto;
        box-shadow: 0 1px 0px rgba(0, 0, 0, 0.2);
        top: 0;
    }

    .sf-toolbar-block .sf-toolbar-info {
        bottom: auto;
        top: 36px;
    }
{% endif %}

{% if not floatable %}
    .sf-toolbarreset {
        position: static;
    }
{% endif %}

/* Responsive Design */
.sf-toolbar-icon .sf-toolbar-label,
.sf-toolbar-icon .sf-toolbar-value {
    display: none;
}
.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {
    display: inline-block;
}

/* Legacy Design - these styles are maintained to make old panels look
   a bit better on the new toolbar */
.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
    color: #AAA;
    font-size: 12px;
}
.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,
.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {
    color: #FFF;
}

@media (min-width: 768px) {

    .sf-toolbar-icon .sf-toolbar-label,
    .sf-toolbar-icon .sf-toolbar-value {
        display: inline;
    }

    .sf-toolbar-block .sf-toolbar-icon img,
    .sf-toolbar-block .sf-toolbar-icon svg {
        top: 6px;
    }
    .sf-toolbar-block-time .sf-toolbar-icon svg,
    .sf-toolbar-block-memory .sf-toolbar-icon svg {
        display: none;
    }
    .sf-toolbar-block-time .sf-toolbar-icon svg + span,
    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {
        margin-left: 0;
    }

    .sf-toolbar-block .sf-toolbar-icon {
        padding: 0 10px;
    }
    .sf-toolbar-block-time .sf-toolbar-icon {
        padding-right: 5px;
    }
    .sf-toolbar-block-memory .sf-toolbar-icon {
        padding-left: 5px;
    }
    .sf-toolbar-block-request .sf-toolbar-icon {
        padding-left: 0;
        padding-right: 0;
    }
    .sf-toolbar-block-request .sf-toolbar-status + .sf-toolbar-label {
        margin-left: 4px;
    }
    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {
        margin-right: 10px;
    }

    .sf-toolbar-block-request:hover .sf-toolbar-info {
        max-width: none;
    }

    .sf-toolbar-block .sf-toolbar-info-piece b {
        font-size: 12px;
    }
    .sf-toolbar-block .sf-toolbar-info-piece span {
        font-size: 13px;
    }

    .sf-toolbar-block-right {
        float: right;
        margin-left: 0;
        margin-right: 0;
    }
}

@media (min-width: 1024px) {
    .sf-toolbar-block .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {
        display: inline-block;
    }

    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,
    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {
        display: none;
    }
}
", "@WebProfiler/Profiler/toolbar.css.twig", "/home/alliedtr/domains/alliedladders.com/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar.css.twig");
    }
}
