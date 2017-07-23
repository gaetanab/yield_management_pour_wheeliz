<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8edf4c7bd80c75d96468d429edbb8cc73d961580ddd9ee269f332f79ca9191c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28a0cb52160a9a3b64174e2a61e7480fcf282fa023d8e4fc8b450e3fc58cb457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a0cb52160a9a3b64174e2a61e7480fcf282fa023d8e4fc8b450e3fc58cb457->enter($__internal_28a0cb52160a9a3b64174e2a61e7480fcf282fa023d8e4fc8b450e3fc58cb457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f765d0436bb88477a2d3bab86f88b276ba9ad4dae4507091d8755a088798a6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f765d0436bb88477a2d3bab86f88b276ba9ad4dae4507091d8755a088798a6a8->enter($__internal_f765d0436bb88477a2d3bab86f88b276ba9ad4dae4507091d8755a088798a6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28a0cb52160a9a3b64174e2a61e7480fcf282fa023d8e4fc8b450e3fc58cb457->leave($__internal_28a0cb52160a9a3b64174e2a61e7480fcf282fa023d8e4fc8b450e3fc58cb457_prof);

        
        $__internal_f765d0436bb88477a2d3bab86f88b276ba9ad4dae4507091d8755a088798a6a8->leave($__internal_f765d0436bb88477a2d3bab86f88b276ba9ad4dae4507091d8755a088798a6a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52da84a95dc85979cce051b98716f3cd837c5ac633fa560eba1031b5ac90bb96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52da84a95dc85979cce051b98716f3cd837c5ac633fa560eba1031b5ac90bb96->enter($__internal_52da84a95dc85979cce051b98716f3cd837c5ac633fa560eba1031b5ac90bb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2ef1fd234a4291fa8ee819f01f8a7d7c931569c631e046330a7e30dab689c07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef1fd234a4291fa8ee819f01f8a7d7c931569c631e046330a7e30dab689c07b->enter($__internal_2ef1fd234a4291fa8ee819f01f8a7d7c931569c631e046330a7e30dab689c07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2ef1fd234a4291fa8ee819f01f8a7d7c931569c631e046330a7e30dab689c07b->leave($__internal_2ef1fd234a4291fa8ee819f01f8a7d7c931569c631e046330a7e30dab689c07b_prof);

        
        $__internal_52da84a95dc85979cce051b98716f3cd837c5ac633fa560eba1031b5ac90bb96->leave($__internal_52da84a95dc85979cce051b98716f3cd837c5ac633fa560eba1031b5ac90bb96_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8666f1948116f1c327e3e339a6b603bcd06732d63292c8af0f8f75cc9791067e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8666f1948116f1c327e3e339a6b603bcd06732d63292c8af0f8f75cc9791067e->enter($__internal_8666f1948116f1c327e3e339a6b603bcd06732d63292c8af0f8f75cc9791067e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5147b23664534e8f563f96399a7e954ae669537460abdd94fb88e792ce3c2763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5147b23664534e8f563f96399a7e954ae669537460abdd94fb88e792ce3c2763->enter($__internal_5147b23664534e8f563f96399a7e954ae669537460abdd94fb88e792ce3c2763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5147b23664534e8f563f96399a7e954ae669537460abdd94fb88e792ce3c2763->leave($__internal_5147b23664534e8f563f96399a7e954ae669537460abdd94fb88e792ce3c2763_prof);

        
        $__internal_8666f1948116f1c327e3e339a6b603bcd06732d63292c8af0f8f75cc9791067e->leave($__internal_8666f1948116f1c327e3e339a6b603bcd06732d63292c8af0f8f75cc9791067e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_209d8defa5a72088f226b84d7081ed2f61557d097c524380568bcc4da4b9a78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209d8defa5a72088f226b84d7081ed2f61557d097c524380568bcc4da4b9a78b->enter($__internal_209d8defa5a72088f226b84d7081ed2f61557d097c524380568bcc4da4b9a78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad3c57bf0dba244c87026fc0339304f8ec78ddd202e377b7db12ed45af255061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3c57bf0dba244c87026fc0339304f8ec78ddd202e377b7db12ed45af255061->enter($__internal_ad3c57bf0dba244c87026fc0339304f8ec78ddd202e377b7db12ed45af255061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ad3c57bf0dba244c87026fc0339304f8ec78ddd202e377b7db12ed45af255061->leave($__internal_ad3c57bf0dba244c87026fc0339304f8ec78ddd202e377b7db12ed45af255061_prof);

        
        $__internal_209d8defa5a72088f226b84d7081ed2f61557d097c524380568bcc4da4b9a78b->leave($__internal_209d8defa5a72088f226b84d7081ed2f61557d097c524380568bcc4da4b9a78b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/club_des_critiques/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
