<?php

/* kilbas/kilbas.html.twig */
class __TwigTemplate_aba5670c75fd18d306b7f6ddbb11dcdc2b2e25f642601a91a263a0dfc09c2712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "kilbas/kilbas.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b19908204582b382fa1b89327ec34fa01a371f1acd226f4bb727a8622bc0f777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19908204582b382fa1b89327ec34fa01a371f1acd226f4bb727a8622bc0f777->enter($__internal_b19908204582b382fa1b89327ec34fa01a371f1acd226f4bb727a8622bc0f777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "kilbas/kilbas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b19908204582b382fa1b89327ec34fa01a371f1acd226f4bb727a8622bc0f777->leave($__internal_b19908204582b382fa1b89327ec34fa01a371f1acd226f4bb727a8622bc0f777_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b86ac289042d3195b0e6efac6c1a14dd75bb4f6b34da4259d0319e34b577ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b86ac289042d3195b0e6efac6c1a14dd75bb4f6b34da4259d0319e34b577ff5->enter($__internal_4b86ac289042d3195b0e6efac6c1a14dd75bb4f6b34da4259d0319e34b577ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
        <h1>случайное число ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["luckynumb"]) || array_key_exists("luckynumb", $context) ? $context["luckynumb"] : (function () { throw new Twig_Error_Runtime('Variable "luckynumb" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>
        <p><a class=\"btn btn-lg btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" role=\"button\">получить случайное число</a></p>
      </div>

      <div class=\"row marketing\">
        <div class=\"col-lg-6\">
          
      </div>
        </div>

        <div class=\"col-lg-6\">
        <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        echo "<script>var ctx = document.getElementById(\"myChart\");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [\"Вересень\", \"Жовтень\",\"Листопад\",\"Грудень\"],
        datasets: [{
            label: '°C',
          
            data: [12, ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["wea_ther"]) || array_key_exists("wea_ther", $context) ? $context["wea_ther"] : (function () { throw new Twig_Error_Runtime('Variable "wea_ther" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo ",3,0.5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',

            ],
            
            borderWidth: 1
        }]
    },

    
});</script> 
          
        </div>
      </div>

      <footer class=\"footer\">
        <p>&copy; kilbas project</p>
      </footer>

    </div> <!-- /container -->

";
        
        $__internal_4b86ac289042d3195b0e6efac6c1a14dd75bb4f6b34da4259d0319e34b577ff5->leave($__internal_4b86ac289042d3195b0e6efac6c1a14dd75bb4f6b34da4259d0319e34b577ff5_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_093ab8ce1cc91f72a68eeea8bde982260515da48aacae98e695eec0849c5dc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093ab8ce1cc91f72a68eeea8bde982260515da48aacae98e695eec0849c5dc24->enter($__internal_093ab8ce1cc91f72a68eeea8bde982260515da48aacae98e695eec0849c5dc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_093ab8ce1cc91f72a68eeea8bde982260515da48aacae98e695eec0849c5dc24->leave($__internal_093ab8ce1cc91f72a68eeea8bde982260515da48aacae98e695eec0849c5dc24_prof);

    }

    public function getTemplateName()
    {
        return "kilbas/kilbas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 18,  78 => 26,  67 => 18,  63 => 17,  49 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

      <div class=\"jumbotron\">
        <h1>случайное число {{ luckynumb }}</h1>
        <p><a class=\"btn btn-lg btn-success\" href=\"{{ path('homepage') }}\" role=\"button\">получить случайное число</a></p>
      </div>

      <div class=\"row marketing\">
        <div class=\"col-lg-6\">
          
      </div>
        </div>

        <div class=\"col-lg-6\">
        <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
        <script type=\"text/javascript\" src=\"{{ asset('build/chart.bundle.min.js')}}\"></script>
        {% block javascripts %} {% endblock %}<script>var ctx = document.getElementById(\"myChart\");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [\"Вересень\", \"Жовтень\",\"Листопад\",\"Грудень\"],
        datasets: [{
            label: '°C',
          
            data: [12, {{ wea_ther }},3,0.5],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 99, 132, 0.2)',

            ],
            
            borderWidth: 1
        }]
    },

    
});</script> 
          
        </div>
      </div>

      <footer class=\"footer\">
        <p>&copy; kilbas project</p>
      </footer>

    </div> <!-- /container -->

{% endblock %}

    
 ", "kilbas/kilbas.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\app\\Resources\\views\\kilbas\\kilbas.html.twig");
    }
}
