<?php

/* kilbas/kilbas.html.twig */
class __TwigTemplate_161ca09495bbf8b57dd88933ff3c66ad0f1b3e1c0c4c4091340b28c16ee3caa3 extends Twig_Template
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
        $__internal_8c58af26e1a610d6dd5a3f344e9092ede3d6b7332d5cb9843d7fdab0a0815051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c58af26e1a610d6dd5a3f344e9092ede3d6b7332d5cb9843d7fdab0a0815051->enter($__internal_8c58af26e1a610d6dd5a3f344e9092ede3d6b7332d5cb9843d7fdab0a0815051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "kilbas/kilbas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c58af26e1a610d6dd5a3f344e9092ede3d6b7332d5cb9843d7fdab0a0815051->leave($__internal_8c58af26e1a610d6dd5a3f344e9092ede3d6b7332d5cb9843d7fdab0a0815051_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_581196769bf0a538b2de67b7aba1bf1bc3cb0f7769dd1b7649a9d384ad64bd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581196769bf0a538b2de67b7aba1bf1bc3cb0f7769dd1b7649a9d384ad64bd9c->enter($__internal_581196769bf0a538b2de67b7aba1bf1bc3cb0f7769dd1b7649a9d384ad64bd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
        <h1>случайное число ";
        // line 5
        echo twig_escape_filter($this->env, ($context["luckynumb"] ?? $this->getContext($context, "luckynumb")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["wea_ther"] ?? $this->getContext($context, "wea_ther")), "html", null, true);
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
        
        $__internal_581196769bf0a538b2de67b7aba1bf1bc3cb0f7769dd1b7649a9d384ad64bd9c->leave($__internal_581196769bf0a538b2de67b7aba1bf1bc3cb0f7769dd1b7649a9d384ad64bd9c_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3203a6b017753f082fdd5040bf5b6e959dd902b579a63daffc5dc39aad0f8cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3203a6b017753f082fdd5040bf5b6e959dd902b579a63daffc5dc39aad0f8cc3->enter($__internal_3203a6b017753f082fdd5040bf5b6e959dd902b579a63daffc5dc39aad0f8cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_3203a6b017753f082fdd5040bf5b6e959dd902b579a63daffc5dc39aad0f8cc3->leave($__internal_3203a6b017753f082fdd5040bf5b6e959dd902b579a63daffc5dc39aad0f8cc3_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
