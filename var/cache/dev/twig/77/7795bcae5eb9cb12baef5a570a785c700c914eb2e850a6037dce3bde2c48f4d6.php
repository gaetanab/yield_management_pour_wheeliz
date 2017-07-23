<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea1eba626b721d5f2f2b54b1e4a553c84fdc8f20c6305b61e40a9951a6d8df25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00aee077d1122237d8581d66db669e2d823c06ca7783d1e611cee8e67e00d5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00aee077d1122237d8581d66db669e2d823c06ca7783d1e611cee8e67e00d5da->enter($__internal_00aee077d1122237d8581d66db669e2d823c06ca7783d1e611cee8e67e00d5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aebf78622d85721be6f7c9b3ddbb60f8d7a770264baf56cf148d2d96b6bb7da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebf78622d85721be6f7c9b3ddbb60f8d7a770264baf56cf148d2d96b6bb7da1->enter($__internal_aebf78622d85721be6f7c9b3ddbb60f8d7a770264baf56cf148d2d96b6bb7da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00aee077d1122237d8581d66db669e2d823c06ca7783d1e611cee8e67e00d5da->leave($__internal_00aee077d1122237d8581d66db669e2d823c06ca7783d1e611cee8e67e00d5da_prof);

        
        $__internal_aebf78622d85721be6f7c9b3ddbb60f8d7a770264baf56cf148d2d96b6bb7da1->leave($__internal_aebf78622d85721be6f7c9b3ddbb60f8d7a770264baf56cf148d2d96b6bb7da1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_daf2f60c12ebf5d5decc00a4779e60f8ac24b76913c324f261537687df9a00b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf2f60c12ebf5d5decc00a4779e60f8ac24b76913c324f261537687df9a00b5->enter($__internal_daf2f60c12ebf5d5decc00a4779e60f8ac24b76913c324f261537687df9a00b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_606c803c52d1b5c8253829dd30fee11a9dbcfb6d04ffe2c1b0c81d948fea44f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606c803c52d1b5c8253829dd30fee11a9dbcfb6d04ffe2c1b0c81d948fea44f1->enter($__internal_606c803c52d1b5c8253829dd30fee11a9dbcfb6d04ffe2c1b0c81d948fea44f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_606c803c52d1b5c8253829dd30fee11a9dbcfb6d04ffe2c1b0c81d948fea44f1->leave($__internal_606c803c52d1b5c8253829dd30fee11a9dbcfb6d04ffe2c1b0c81d948fea44f1_prof);

        
        $__internal_daf2f60c12ebf5d5decc00a4779e60f8ac24b76913c324f261537687df9a00b5->leave($__internal_daf2f60c12ebf5d5decc00a4779e60f8ac24b76913c324f261537687df9a00b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c912821f42345402af108d434680f8e31befe51f0cd340ab8634e4019e52cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c912821f42345402af108d434680f8e31befe51f0cd340ab8634e4019e52cc1->enter($__internal_8c912821f42345402af108d434680f8e31befe51f0cd340ab8634e4019e52cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97091d1946f643d5f30709b2184053df1d9bdb965755fc5c45afc2c5832d18b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97091d1946f643d5f30709b2184053df1d9bdb965755fc5c45afc2c5832d18b4->enter($__internal_97091d1946f643d5f30709b2184053df1d9bdb965755fc5c45afc2c5832d18b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_97091d1946f643d5f30709b2184053df1d9bdb965755fc5c45afc2c5832d18b4->leave($__internal_97091d1946f643d5f30709b2184053df1d9bdb965755fc5c45afc2c5832d18b4_prof);

        
        $__internal_8c912821f42345402af108d434680f8e31befe51f0cd340ab8634e4019e52cc1->leave($__internal_8c912821f42345402af108d434680f8e31befe51f0cd340ab8634e4019e52cc1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb7ad201080ea05d53da935c348eb658ce64447f80e78f7228afb7dbd4b85d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7ad201080ea05d53da935c348eb658ce64447f80e78f7228afb7dbd4b85d50->enter($__internal_fb7ad201080ea05d53da935c348eb658ce64447f80e78f7228afb7dbd4b85d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_238f43a6541ad10d453e1389aef2e32f14b584235271c4b030b410c8de4222b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238f43a6541ad10d453e1389aef2e32f14b584235271c4b030b410c8de4222b9->enter($__internal_238f43a6541ad10d453e1389aef2e32f14b584235271c4b030b410c8de4222b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_238f43a6541ad10d453e1389aef2e32f14b584235271c4b030b410c8de4222b9->leave($__internal_238f43a6541ad10d453e1389aef2e32f14b584235271c4b030b410c8de4222b9_prof);

        
        $__internal_fb7ad201080ea05d53da935c348eb658ce64447f80e78f7228afb7dbd4b85d50->leave($__internal_fb7ad201080ea05d53da935c348eb658ce64447f80e78f7228afb7dbd4b85d50_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/yield_management/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
