<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2fb77542c6772bb2529a5ead5e73eec3e4ab666fa172210c3434beea8d68eccb extends Twig_Template
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
        $__internal_84cfdd4e69cb93983d28ca04233669e4e305c44e045a5be66b318ec598ed77c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cfdd4e69cb93983d28ca04233669e4e305c44e045a5be66b318ec598ed77c6->enter($__internal_84cfdd4e69cb93983d28ca04233669e4e305c44e045a5be66b318ec598ed77c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_adefa6ae3bd808e9a1c5fabb3fa41a65338865244a44d87d02cb87785cfca694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adefa6ae3bd808e9a1c5fabb3fa41a65338865244a44d87d02cb87785cfca694->enter($__internal_adefa6ae3bd808e9a1c5fabb3fa41a65338865244a44d87d02cb87785cfca694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_84cfdd4e69cb93983d28ca04233669e4e305c44e045a5be66b318ec598ed77c6->leave($__internal_84cfdd4e69cb93983d28ca04233669e4e305c44e045a5be66b318ec598ed77c6_prof);

        
        $__internal_adefa6ae3bd808e9a1c5fabb3fa41a65338865244a44d87d02cb87785cfca694->leave($__internal_adefa6ae3bd808e9a1c5fabb3fa41a65338865244a44d87d02cb87785cfca694_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/club_des_critiques/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
