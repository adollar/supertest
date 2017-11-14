<?php

/* kilbas/addata.html.twig */
class __TwigTemplate_cfe509714865403394e35c6dcc78885c0048a70bb1637b1fdaaf5967d3d3431d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "kilbas/addata.html.twig", 1);
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
        $__internal_005329ada465588db6c483fe2eaa944bd8d9fbefe3c162cb2d210bf09ca3082f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005329ada465588db6c483fe2eaa944bd8d9fbefe3c162cb2d210bf09ca3082f->enter($__internal_005329ada465588db6c483fe2eaa944bd8d9fbefe3c162cb2d210bf09ca3082f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "kilbas/addata.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_005329ada465588db6c483fe2eaa944bd8d9fbefe3c162cb2d210bf09ca3082f->leave($__internal_005329ada465588db6c483fe2eaa944bd8d9fbefe3c162cb2d210bf09ca3082f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_38e79cec5ffcefc2ebce4e0da0b691986bb25a30b9451bb611898c43d738927c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e79cec5ffcefc2ebce4e0da0b691986bb25a30b9451bb611898c43d738927c->enter($__internal_38e79cec5ffcefc2ebce4e0da0b691986bb25a30b9451bb611898c43d738927c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
      <table class=\"table\">
      <tr><th>id</th><th>name</th><th>price</th><th>description</th></tr>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "<tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "price", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
<tr><td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneid"] ?? $this->getContext($context, "oneid")), "id", array()), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneid"] ?? $this->getContext($context, "oneid")), "name", array()), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneid"] ?? $this->getContext($context, "oneid")), "price", array()), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["oneid"] ?? $this->getContext($context, "oneid")), "description", array()), "html", null, true);
        echo "</td></tr>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sort"] ?? $this->getContext($context, "sort")));
        foreach ($context['_seq'] as $context["_key"] => $context["sor"]) {
            // line 13
            echo "<tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sor"], "id", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sor"], "name", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sor"], "price", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sor"], "description", array()), "html", null, true);
            echo "</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</table>

      </div>

      <div class=\"row marketing\">
        <div class=\"col-lg-6\">
          <div id=\"grid\">
      <div class=\"grid-item\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">случайное от 1 до 100</a></div>
      <div class=\"grid-item\"><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("onepage");
        echo "\">случайное от 50 до 55</a></div>
      <div class=\"grid-item\" style=\"background-color:#";
        // line 24
        echo twig_escape_filter($this->env, ($context["colorr"] ?? $this->getContext($context, "colorr")), "html", null, true);
        echo ";\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zveropolis");
        echo "\"> случайный цвет </a></div>
      </div>
        </div>

        <div class=\"col-lg-6\">
        <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        echo "<script>var ctx = document.getElementById(\"myChart\");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [\"Вересень\", \"Жовтень\",\"Листопад\",\"Грудень\"],
        datasets: [{
            label: '°C',
          
            data: [12, ";
        // line 39
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
        
        $__internal_38e79cec5ffcefc2ebce4e0da0b691986bb25a30b9451bb611898c43d738927c->leave($__internal_38e79cec5ffcefc2ebce4e0da0b691986bb25a30b9451bb611898c43d738927c_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dfb1ce4c9e299e33b76019a0de57bc4e83b5f5d79d3401c7b3e5ecef388030f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfb1ce4c9e299e33b76019a0de57bc4e83b5f5d79d3401c7b3e5ecef388030f->enter($__internal_4dfb1ce4c9e299e33b76019a0de57bc4e83b5f5d79d3401c7b3e5ecef388030f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_4dfb1ce4c9e299e33b76019a0de57bc4e83b5f5d79d3401c7b3e5ecef388030f->leave($__internal_4dfb1ce4c9e299e33b76019a0de57bc4e83b5f5d79d3401c7b3e5ecef388030f_prof);

    }

    public function getTemplateName()
    {
        return "kilbas/addata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 31,  141 => 39,  130 => 31,  126 => 30,  115 => 24,  111 => 23,  107 => 22,  98 => 15,  83 => 13,  79 => 12,  69 => 11,  66 => 10,  51 => 8,  47 => 7,  41 => 3,  35 => 2,  11 => 1,);
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
      <table class=\"table\">
      <tr><th>id</th><th>name</th><th>price</th><th>description</th></tr>
{% for post in posts %}
<tr><td>{{ post.id}}</td><td>{{ post.name}}</td><td>{{ post.price}}</td><td>{{ post.description }}</td></tr>
{% endfor %}

<tr><td>{{ oneid.id}}</td><td>{{ oneid.name}}</td><td>{{ oneid.price}}</td><td>{{ oneid.description }}</td></tr>
{% for sor in sort  %}
<tr><td>{{ sor.id}}</td><td>{{ sor.name}}</td><td>{{ sor.price}}</td><td>{{ sor.description }}</td></tr>
{% endfor %}
</table>

      </div>

      <div class=\"row marketing\">
        <div class=\"col-lg-6\">
          <div id=\"grid\">
      <div class=\"grid-item\"><a href=\"{{ path('homepage') }}\">случайное от 1 до 100</a></div>
      <div class=\"grid-item\"><a href=\"{{ path('onepage') }}\">случайное от 50 до 55</a></div>
      <div class=\"grid-item\" style=\"background-color:#{{ colorr }};\"><a href=\"{{ path('zveropolis') }}\"> случайный цвет </a></div>
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


", "kilbas/addata.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\app\\Resources\\views\\kilbas\\addata.html.twig");
    }
}
