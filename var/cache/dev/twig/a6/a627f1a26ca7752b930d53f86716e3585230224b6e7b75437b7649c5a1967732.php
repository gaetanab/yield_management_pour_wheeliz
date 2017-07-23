<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_491d5853a96629e58d52ecc633bb16e5a88480f3bee41d89b781a0d49240981a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_995485618b5bf4ecade604c90974dc0ee47b0241bb9b73f8df27cc0ea68e0600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995485618b5bf4ecade604c90974dc0ee47b0241bb9b73f8df27cc0ea68e0600->enter($__internal_995485618b5bf4ecade604c90974dc0ee47b0241bb9b73f8df27cc0ea68e0600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_399bed7ff07ba62a681f74552111f96e75367920d0b300eae7999406403a29fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399bed7ff07ba62a681f74552111f96e75367920d0b300eae7999406403a29fd->enter($__internal_399bed7ff07ba62a681f74552111f96e75367920d0b300eae7999406403a29fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995485618b5bf4ecade604c90974dc0ee47b0241bb9b73f8df27cc0ea68e0600->leave($__internal_995485618b5bf4ecade604c90974dc0ee47b0241bb9b73f8df27cc0ea68e0600_prof);

        
        $__internal_399bed7ff07ba62a681f74552111f96e75367920d0b300eae7999406403a29fd->leave($__internal_399bed7ff07ba62a681f74552111f96e75367920d0b300eae7999406403a29fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42d46793c39607d7a5ad4537bade825275f7eda6bb4045f68cf74fd2a754a040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d46793c39607d7a5ad4537bade825275f7eda6bb4045f68cf74fd2a754a040->enter($__internal_42d46793c39607d7a5ad4537bade825275f7eda6bb4045f68cf74fd2a754a040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0637f51bf29324fc3cf9f8b8d546bc7ccbd0871cc7a212d59f8f32c2cbe33163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0637f51bf29324fc3cf9f8b8d546bc7ccbd0871cc7a212d59f8f32c2cbe33163->enter($__internal_0637f51bf29324fc3cf9f8b8d546bc7ccbd0871cc7a212d59f8f32c2cbe33163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0637f51bf29324fc3cf9f8b8d546bc7ccbd0871cc7a212d59f8f32c2cbe33163->leave($__internal_0637f51bf29324fc3cf9f8b8d546bc7ccbd0871cc7a212d59f8f32c2cbe33163_prof);

        
        $__internal_42d46793c39607d7a5ad4537bade825275f7eda6bb4045f68cf74fd2a754a040->leave($__internal_42d46793c39607d7a5ad4537bade825275f7eda6bb4045f68cf74fd2a754a040_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/yield_management/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
