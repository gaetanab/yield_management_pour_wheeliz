<?php

/* base.html.twig */
class __TwigTemplate_12a9784906875215e0dff72fbea6a70a80828e4aa3365ff25286dac4ee04c2cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b9450835d6199eec470c6002ed822e7d67d02584aa6f121ca498a03e7a129ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9450835d6199eec470c6002ed822e7d67d02584aa6f121ca498a03e7a129ef->enter($__internal_7b9450835d6199eec470c6002ed822e7d67d02584aa6f121ca498a03e7a129ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e0ef1780260ba096eb7eb8af62109089b15b4503bc107241b83198caf13e1db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ef1780260ba096eb7eb8af62109089b15b4503bc107241b83198caf13e1db5->enter($__internal_e0ef1780260ba096eb7eb8af62109089b15b4503bc107241b83198caf13e1db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    </head>
    <body>
        <div>        
    <nav class=\"teal lighten-4\" role=\"navigation\">
        <div class=\"nav-wrapper \">
            <div class=\"nav-wrapper container\">
                <div class=\"\">
\t\t\t\t\t<a id=\"logo-container\" href=\"#\" class=\"brand-logo\">
\t\t\t\t\t\t <img class=\"logo\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
\t\t\t\t\t</a>
                </div>                 
                 <div class=\"\" style=\"padding-left: 20%\">
                    <a href=\"#\" id=\"\">
                         Calculer le yield management
                     </a>
                </div>                
            </div>
        </div>

    </nav>
</div>

";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "                    
<footer class=\"page-footer teal lighten-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s10 \">
            </div>
            <div class=\"col s4 right\">
                <ul>
                    <li><a class=\"\" href=\"#\">CGU </a></li>
                    <li><a class=\"\" href=\"#\">POLITIQUE DE CONFIDENTIALITE</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2017 Copyright Text
        </div>
    </div>
</footer>

        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
        
        $__internal_7b9450835d6199eec470c6002ed822e7d67d02584aa6f121ca498a03e7a129ef->leave($__internal_7b9450835d6199eec470c6002ed822e7d67d02584aa6f121ca498a03e7a129ef_prof);

        
        $__internal_e0ef1780260ba096eb7eb8af62109089b15b4503bc107241b83198caf13e1db5->leave($__internal_e0ef1780260ba096eb7eb8af62109089b15b4503bc107241b83198caf13e1db5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03a413a1db745473962fc70c667ab7041bf7b1ab6a15f116e18bb89534412c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a413a1db745473962fc70c667ab7041bf7b1ab6a15f116e18bb89534412c9b->enter($__internal_03a413a1db745473962fc70c667ab7041bf7b1ab6a15f116e18bb89534412c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23baf66c3a5e35e9cc575d836e1e17f21edd0f3e18e684698d1d87e910b31143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23baf66c3a5e35e9cc575d836e1e17f21edd0f3e18e684698d1d87e910b31143->enter($__internal_23baf66c3a5e35e9cc575d836e1e17f21edd0f3e18e684698d1d87e910b31143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club des critiques";
        
        $__internal_23baf66c3a5e35e9cc575d836e1e17f21edd0f3e18e684698d1d87e910b31143->leave($__internal_23baf66c3a5e35e9cc575d836e1e17f21edd0f3e18e684698d1d87e910b31143_prof);

        
        $__internal_03a413a1db745473962fc70c667ab7041bf7b1ab6a15f116e18bb89534412c9b->leave($__internal_03a413a1db745473962fc70c667ab7041bf7b1ab6a15f116e18bb89534412c9b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18ba310cb762731c61e6d455333d2476e5fcc1c961d8f2837375f8d67e3e14df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ba310cb762731c61e6d455333d2476e5fcc1c961d8f2837375f8d67e3e14df->enter($__internal_18ba310cb762731c61e6d455333d2476e5fcc1c961d8f2837375f8d67e3e14df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f728b4a34fd875006f3bfde426152e3029ddb8e87e786676e9da818afe53cf0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f728b4a34fd875006f3bfde426152e3029ddb8e87e786676e9da818afe53cf0c->enter($__internal_f728b4a34fd875006f3bfde426152e3029ddb8e87e786676e9da818afe53cf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_f728b4a34fd875006f3bfde426152e3029ddb8e87e786676e9da818afe53cf0c->leave($__internal_f728b4a34fd875006f3bfde426152e3029ddb8e87e786676e9da818afe53cf0c_prof);

        
        $__internal_18ba310cb762731c61e6d455333d2476e5fcc1c961d8f2837375f8d67e3e14df->leave($__internal_18ba310cb762731c61e6d455333d2476e5fcc1c961d8f2837375f8d67e3e14df_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_1103a6e0eca35538e8cc1c4f65adbcdc62bb44f92628fa4f6050f5a0d14e305f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1103a6e0eca35538e8cc1c4f65adbcdc62bb44f92628fa4f6050f5a0d14e305f->enter($__internal_1103a6e0eca35538e8cc1c4f65adbcdc62bb44f92628fa4f6050f5a0d14e305f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33a5baaa57e34e6a417df9c895fe75a2ab20ed7f562727484b150499bb6ce1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a5baaa57e34e6a417df9c895fe75a2ab20ed7f562727484b150499bb6ce1c9->enter($__internal_33a5baaa57e34e6a417df9c895fe75a2ab20ed7f562727484b150499bb6ce1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "
";
        
        $__internal_33a5baaa57e34e6a417df9c895fe75a2ab20ed7f562727484b150499bb6ce1c9->leave($__internal_33a5baaa57e34e6a417df9c895fe75a2ab20ed7f562727484b150499bb6ce1c9_prof);

        
        $__internal_1103a6e0eca35538e8cc1c4f65adbcdc62bb44f92628fa4f6050f5a0d14e305f->leave($__internal_1103a6e0eca35538e8cc1c4f65adbcdc62bb44f92628fa4f6050f5a0d14e305f_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_712d091e61e0cb7771f9a325652b1e4d43d07883a2753acc0bde264334b0ef1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712d091e61e0cb7771f9a325652b1e4d43d07883a2753acc0bde264334b0ef1f->enter($__internal_712d091e61e0cb7771f9a325652b1e4d43d07883a2753acc0bde264334b0ef1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4627d7d0c293498345c5a847f9aa0ec2f6c7addc93363478cf80e5e1925f645f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4627d7d0c293498345c5a847f9aa0ec2f6c7addc93363478cf80e5e1925f645f->enter($__internal_4627d7d0c293498345c5a847f9aa0ec2f6c7addc93363478cf80e5e1925f645f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/init.js"), "html", null, true);
        echo "\"></script>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.15/css/jquery.dataTables.css\">
\t\t\t<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.15/js/jquery.dataTables.js\"></script>
        ";
        
        $__internal_4627d7d0c293498345c5a847f9aa0ec2f6c7addc93363478cf80e5e1925f645f->leave($__internal_4627d7d0c293498345c5a847f9aa0ec2f6c7addc93363478cf80e5e1925f645f_prof);

        
        $__internal_712d091e61e0cb7771f9a325652b1e4d43d07883a2753acc0bde264334b0ef1f->leave($__internal_712d091e61e0cb7771f9a325652b1e4d43d07883a2753acc0bde264334b0ef1f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 62,  190 => 61,  185 => 60,  176 => 59,  165 => 37,  156 => 36,  144 => 9,  140 => 8,  137 => 7,  128 => 6,  110 => 5,  98 => 66,  96 => 59,  73 => 38,  71 => 36,  54 => 22,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{% block title %}Club des critiques{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        {% endblock %}
        
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    </head>
    <body>
        <div>        
    <nav class=\"teal lighten-4\" role=\"navigation\">
        <div class=\"nav-wrapper \">
            <div class=\"nav-wrapper container\">
                <div class=\"\">
\t\t\t\t\t<a id=\"logo-container\" href=\"#\" class=\"brand-logo\">
\t\t\t\t\t\t <img class=\"logo\" src=\"{{ asset('images/logo.png') }}\">
\t\t\t\t\t</a>
                </div>                 
                 <div class=\"\" style=\"padding-left: 20%\">
                    <a href=\"#\" id=\"\">
                         Calculer le yield management
                     </a>
                </div>                
            </div>
        </div>

    </nav>
</div>

{% block body %}

{% endblock %}                    
<footer class=\"page-footer teal lighten-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s10 \">
            </div>
            <div class=\"col s4 right\">
                <ul>
                    <li><a class=\"\" href=\"#\">CGU </a></li>
                    <li><a class=\"\" href=\"#\">POLITIQUE DE CONFIDENTIALITE</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2017 Copyright Text
        </div>
    </div>
</footer>

        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
            <script src=\"{{ asset('js/materialize.min.js') }}\"></script>
            <script src=\"{{ asset('js/init.js') }}\"></script>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.15/css/jquery.dataTables.css\">
\t\t\t<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.15/js/jquery.dataTables.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/yield_management/app/Resources/views/base.html.twig");
    }
}
