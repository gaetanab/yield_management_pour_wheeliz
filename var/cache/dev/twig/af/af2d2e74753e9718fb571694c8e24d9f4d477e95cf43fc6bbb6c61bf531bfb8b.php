<?php

/* calculate\index.html.twig */
class __TwigTemplate_9da6c60f3095114e6fce40748fc22d6b52194f5339365a6cd16f5336f85a07bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "calculate\\index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a63b2cb6910973f79c68bc3b64837b6aeac6ac8710df74a2ba7055d6300ed115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63b2cb6910973f79c68bc3b64837b6aeac6ac8710df74a2ba7055d6300ed115->enter($__internal_a63b2cb6910973f79c68bc3b64837b6aeac6ac8710df74a2ba7055d6300ed115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calculate\\index.html.twig"));

        $__internal_c6d4aa794a42f1228e2637375edf4fdc6aa5377d7cf8cc8a535f9cafc423f749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d4aa794a42f1228e2637375edf4fdc6aa5377d7cf8cc8a535f9cafc423f749->enter($__internal_c6d4aa794a42f1228e2637375edf4fdc6aa5377d7cf8cc8a535f9cafc423f749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calculate\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a63b2cb6910973f79c68bc3b64837b6aeac6ac8710df74a2ba7055d6300ed115->leave($__internal_a63b2cb6910973f79c68bc3b64837b6aeac6ac8710df74a2ba7055d6300ed115_prof);

        
        $__internal_c6d4aa794a42f1228e2637375edf4fdc6aa5377d7cf8cc8a535f9cafc423f749->leave($__internal_c6d4aa794a42f1228e2637375edf4fdc6aa5377d7cf8cc8a535f9cafc423f749_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f4d003f2cf705008158fd01d3dd67c1685d2e7734dafe8a416f45c93b447275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4d003f2cf705008158fd01d3dd67c1685d2e7734dafe8a416f45c93b447275->enter($__internal_7f4d003f2cf705008158fd01d3dd67c1685d2e7734dafe8a416f45c93b447275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31e01369147ff1cdd08df5e30ddeaa2bcc1b3919683d48f3c903d48f021fe00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e01369147ff1cdd08df5e30ddeaa2bcc1b3919683d48f3c903d48f021fe00a->enter($__internal_31e01369147ff1cdd08df5e30ddeaa2bcc1b3919683d48f3c903d48f021fe00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Calculer le yield management
";
        
        $__internal_31e01369147ff1cdd08df5e30ddeaa2bcc1b3919683d48f3c903d48f021fe00a->leave($__internal_31e01369147ff1cdd08df5e30ddeaa2bcc1b3919683d48f3c903d48f021fe00a_prof);

        
        $__internal_7f4d003f2cf705008158fd01d3dd67c1685d2e7734dafe8a416f45c93b447275->leave($__internal_7f4d003f2cf705008158fd01d3dd67c1685d2e7734dafe8a416f45c93b447275_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_821bbdd38f086ac55ebd888e953746f8a2fd1405c174a75b855c50649f079dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821bbdd38f086ac55ebd888e953746f8a2fd1405c174a75b855c50649f079dbb->enter($__internal_821bbdd38f086ac55ebd888e953746f8a2fd1405c174a75b855c50649f079dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_844fc970aa99a798828aa28d2aad64072f82a8068900e51c345b38144375e7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844fc970aa99a798828aa28d2aad64072f82a8068900e51c345b38144375e7ad->enter($__internal_844fc970aa99a798828aa28d2aad64072f82a8068900e51c345b38144375e7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container\">\t\t\t\t\t
\t\t<div class=\"row top\">
\t\t\t<div class=\"col s4 center\">
\t\t\t</div>
\t\t\t<div  class=\"col s4 center\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t   <p>Calculer le yield management</p>
\t\t\t\t\t\t   <hr>
\t\t\t\t\t\t  ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form');
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div  class=\"col s4 center\">
\t\t\t</div> 
\t\t</div>
\t\t
\t\t";
        // line 25
        if (((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 25, $this->getSourceContext()); })()) != null)) {
            // line 26
            echo "\t\t\t<div class=\"row top center\">\t\t\t
\t\t\t\tLe résultat est ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
            echo "€\t\t\t
\t\t\t</div>
\t\t";
        }
        // line 30
        echo "    </div>
";
        
        $__internal_844fc970aa99a798828aa28d2aad64072f82a8068900e51c345b38144375e7ad->leave($__internal_844fc970aa99a798828aa28d2aad64072f82a8068900e51c345b38144375e7ad_prof);

        
        $__internal_821bbdd38f086ac55ebd888e953746f8a2fd1405c174a75b855c50649f079dbb->leave($__internal_821bbdd38f086ac55ebd888e953746f8a2fd1405c174a75b855c50649f079dbb_prof);

    }

    public function getTemplateName()
    {
        return "calculate\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  97 => 27,  94 => 26,  92 => 25,  81 => 17,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    Calculer le yield management
{% endblock %}

{% block body %}
\t<div class=\"container\">\t\t\t\t\t
\t\t<div class=\"row top\">
\t\t\t<div class=\"col s4 center\">
\t\t\t</div>
\t\t\t<div  class=\"col s4 center\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t   <p>Calculer le yield management</p>
\t\t\t\t\t\t   <hr>
\t\t\t\t\t\t  {{ form(form) }}\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div  class=\"col s4 center\">
\t\t\t</div> 
\t\t</div>
\t\t
\t\t{% if result != null %}
\t\t\t<div class=\"row top center\">\t\t\t
\t\t\t\tLe résultat est {{ result }}€\t\t\t
\t\t\t</div>
\t\t{% endif %}
    </div>
{% endblock %}
", "calculate\\index.html.twig", "/var/www/html/yield_management/app/Resources/views/calculate/index.html.twig");
    }
}
