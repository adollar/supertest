<?php

/* base.html.twig */
class __TwigTemplate_30f05dad553f0ab9d287d7b2959c26d8a4a8cd696ec9cb1c064bf6e49f79e206 extends Twig_Template
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
        $__internal_38a4bded4a60f33f146ade35427a569b8478cee4b57bb551b6521f1091313086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a4bded4a60f33f146ade35427a569b8478cee4b57bb551b6521f1091313086->enter($__internal_38a4bded4a60f33f146ade35427a569b8478cee4b57bb551b6521f1091313086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, ($context["wea_ther"] ?? $this->getContext($context, "wea_ther")), "html", null, true);
        echo "°</span> швидкість вітру: <span class=\"badge\">";
        echo twig_escape_filter($this->env, ($context["wind_speed"] ?? $this->getContext($context, "wind_speed")), "html", null, true);
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
        
        $__internal_38a4bded4a60f33f146ade35427a569b8478cee4b57bb551b6521f1091313086->leave($__internal_38a4bded4a60f33f146ade35427a569b8478cee4b57bb551b6521f1091313086_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d97cb83060672b63bb9d47bdfb42d637615adbd6e8463e8a0175203d354c1a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97cb83060672b63bb9d47bdfb42d637615adbd6e8463e8a0175203d354c1a0c->enter($__internal_d97cb83060672b63bb9d47bdfb42d637615adbd6e8463e8a0175203d354c1a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d97cb83060672b63bb9d47bdfb42d637615adbd6e8463e8a0175203d354c1a0c->leave($__internal_d97cb83060672b63bb9d47bdfb42d637615adbd6e8463e8a0175203d354c1a0c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bbbd3716e08940f5fe90e3cd74a502d7de10098273f3c7c372521890cebef208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbd3716e08940f5fe90e3cd74a502d7de10098273f3c7c372521890cebef208->enter($__internal_bbbd3716e08940f5fe90e3cd74a502d7de10098273f3c7c372521890cebef208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bbbd3716e08940f5fe90e3cd74a502d7de10098273f3c7c372521890cebef208->leave($__internal_bbbd3716e08940f5fe90e3cd74a502d7de10098273f3c7c372521890cebef208_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f969fd44a26a85b55e5c804f8cd24903ab89b6b22bbd58f39178c560b9fec42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f969fd44a26a85b55e5c804f8cd24903ab89b6b22bbd58f39178c560b9fec42->enter($__internal_6f969fd44a26a85b55e5c804f8cd24903ab89b6b22bbd58f39178c560b9fec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f969fd44a26a85b55e5c804f8cd24903ab89b6b22bbd58f39178c560b9fec42->leave($__internal_6f969fd44a26a85b55e5c804f8cd24903ab89b6b22bbd58f39178c560b9fec42_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
