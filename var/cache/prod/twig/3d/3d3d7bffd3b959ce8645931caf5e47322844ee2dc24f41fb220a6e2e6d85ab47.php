<?php

/* base.html.twig */
class __TwigTemplate_efbd8129db65200f227852f664783a165321729dadc3b12b5958634282418225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffb390a49bf5e160dd166d6f36a88ec48579619fe90b9c81b276a6e77f951e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb390a49bf5e160dd166d6f36a88ec48579619fe90b9c81b276a6e77f951e6a->enter($__internal_ffb390a49bf5e160dd166d6f36a88ec48579619fe90b9c81b276a6e77f951e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/bootstrap-3.3.7-dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/bootstrap-3.3.7-dist/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/jumbotron-narrow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/bootstrap-3.3.7-dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        

    </head>
    <body>
<div class=\"container\">
      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-tabs\">
            <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">головна</a></li>
             
            <li role=\"presentation\" class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\">монітори
                <span class=\"caret\"></span>
            </a>

                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("monitors");
        echo "\">монітори</a></li>
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addmonitor");
        echo "\">додати монітор</a></li>
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("adduser");
        echo "\">додати користувача</a></li>
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addcomputer");
        echo "\">додати комп</a></li>
                </ul></li>
            <li role=\"presentation\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users");
        echo "\">користувачі</a></li>
          </ul>
        </nav>
        <h3 class=\"text-muted\">Project kilbas</h3>
        <span><strong>погода в місті Одеса:</strong> температура повітря:<span class=\"badge\"> ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["wea_ther"]) || array_key_exists("wea_ther", $context) ? $context["wea_ther"] : (function () { throw new Twig_Error_Runtime('Variable "wea_ther" does not exist.', 37, $this->getSourceContext()); })()), "html", null, true);
        echo "°</span> швидкість вітру: <span class=\"badge\">";
        echo twig_escape_filter($this->env, (isset($context["wind_speed"]) || array_key_exists("wind_speed", $context) ? $context["wind_speed"] : (function () { throw new Twig_Error_Runtime('Variable "wind_speed" does not exist.', 37, $this->getSourceContext()); })()), "html", null, true);
        echo " м/с</span>
        </span>
      </div>
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        

        
    </body>
</html>
";
        
        $__internal_ffb390a49bf5e160dd166d6f36a88ec48579619fe90b9c81b276a6e77f951e6a->leave($__internal_ffb390a49bf5e160dd166d6f36a88ec48579619fe90b9c81b276a6e77f951e6a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87e7aa8e8e00d86f152b42e3a955140e5cd0f5aa010b3d086e5454fcaa89a0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e7aa8e8e00d86f152b42e3a955140e5cd0f5aa010b3d086e5454fcaa89a0fa->enter($__internal_87e7aa8e8e00d86f152b42e3a955140e5cd0f5aa010b3d086e5454fcaa89a0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87e7aa8e8e00d86f152b42e3a955140e5cd0f5aa010b3d086e5454fcaa89a0fa->leave($__internal_87e7aa8e8e00d86f152b42e3a955140e5cd0f5aa010b3d086e5454fcaa89a0fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85a86c601dacb5f9bac4e65dfc64eb53f55d89339b114b338a3f606bc55d1c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a86c601dacb5f9bac4e65dfc64eb53f55d89339b114b338a3f606bc55d1c2c->enter($__internal_85a86c601dacb5f9bac4e65dfc64eb53f55d89339b114b338a3f606bc55d1c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85a86c601dacb5f9bac4e65dfc64eb53f55d89339b114b338a3f606bc55d1c2c->leave($__internal_85a86c601dacb5f9bac4e65dfc64eb53f55d89339b114b338a3f606bc55d1c2c_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1a56734a4b35669050947f84b447e0428c208d26ce1576e06ab37a63693b33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a56734a4b35669050947f84b447e0428c208d26ce1576e06ab37a63693b33b->enter($__internal_e1a56734a4b35669050947f84b447e0428c208d26ce1576e06ab37a63693b33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e1a56734a4b35669050947f84b447e0428c208d26ce1576e06ab37a63693b33b->leave($__internal_e1a56734a4b35669050947f84b447e0428c208d26ce1576e06ab37a63693b33b_prof);

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
        return array (  146 => 40,  135 => 6,  123 => 5,  111 => 41,  109 => 40,  101 => 37,  94 => 33,  89 => 31,  85 => 30,  81 => 29,  77 => 28,  66 => 20,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link href=\"{{ asset('build/bootstrap-3.3.7-dist/css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"{{ asset('build/bootstrap-3.3.7-dist/jquery-3.2.1.min.js') }}\"></script>
        <link href=\"{{ asset('build/jumbotron-narrow.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"{{ asset('build/bootstrap-3.3.7-dist/js/bootstrap.js') }}\"></script>
        

    </head>
    <body>
<div class=\"container\">
      <div class=\"header clearfix\">
        <nav>
          <ul class=\"nav nav-tabs\">
            <li role=\"presentation\" class=\"active\"><a href=\"{{ path('homepage') }}\">головна</a></li>
             
            <li role=\"presentation\" class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\">монітори
                <span class=\"caret\"></span>
            </a>

                <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('monitors') }}\">монітори</a></li>
                    <li><a href=\"{{ path('addmonitor') }}\">додати монітор</a></li>
                    <li><a href=\"{{ path('adduser') }}\">додати користувача</a></li>
                    <li><a href=\"{{ path('addcomputer') }}\">додати комп</a></li>
                </ul></li>
            <li role=\"presentation\"><a href=\"{{ path('users') }}\">користувачі</a></li>
          </ul>
        </nav>
        <h3 class=\"text-muted\">Project kilbas</h3>
        <span><strong>погода в місті Одеса:</strong> температура повітря:<span class=\"badge\"> {{wea_ther}}°</span> швидкість вітру: <span class=\"badge\">{{wind_speed}} м/с</span>
        </span>
      </div>
        {% block body %}{% endblock %}
        

        
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\app\\Resources\\views\\base.html.twig");
    }
}
