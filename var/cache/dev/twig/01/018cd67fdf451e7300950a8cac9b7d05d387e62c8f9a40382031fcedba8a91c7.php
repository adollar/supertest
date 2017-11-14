<?php

/* base.html.twig */
class __TwigTemplate_7a336d6f07f7cdfede1cac18bf5cf5d8437940e5d16e2ab7f7822c2f5d01c73d extends Twig_Template
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
        $__internal_381ca96e751a8dd7dcb0219797f7d33ea7a331a0010fac3620948272d5329c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381ca96e751a8dd7dcb0219797f7d33ea7a331a0010fac3620948272d5329c8c->enter($__internal_381ca96e751a8dd7dcb0219797f7d33ea7a331a0010fac3620948272d5329c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c082c564205211d562ca5ea1b794ca467783948d38b77ab4e0917dbc9d62ef3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c082c564205211d562ca5ea1b794ca467783948d38b77ab4e0917dbc9d62ef3d->enter($__internal_c082c564205211d562ca5ea1b794ca467783948d38b77ab4e0917dbc9d62ef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_381ca96e751a8dd7dcb0219797f7d33ea7a331a0010fac3620948272d5329c8c->leave($__internal_381ca96e751a8dd7dcb0219797f7d33ea7a331a0010fac3620948272d5329c8c_prof);

        
        $__internal_c082c564205211d562ca5ea1b794ca467783948d38b77ab4e0917dbc9d62ef3d->leave($__internal_c082c564205211d562ca5ea1b794ca467783948d38b77ab4e0917dbc9d62ef3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_de3155a7accad7384e735ec61c68f2fe4488d1deabc33d93a8407a8e459fff32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3155a7accad7384e735ec61c68f2fe4488d1deabc33d93a8407a8e459fff32->enter($__internal_de3155a7accad7384e735ec61c68f2fe4488d1deabc33d93a8407a8e459fff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58be65edd46180ca1d03b40e58724bf46e9832e81f848b97441d1ce876f3ff17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58be65edd46180ca1d03b40e58724bf46e9832e81f848b97441d1ce876f3ff17->enter($__internal_58be65edd46180ca1d03b40e58724bf46e9832e81f848b97441d1ce876f3ff17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_58be65edd46180ca1d03b40e58724bf46e9832e81f848b97441d1ce876f3ff17->leave($__internal_58be65edd46180ca1d03b40e58724bf46e9832e81f848b97441d1ce876f3ff17_prof);

        
        $__internal_de3155a7accad7384e735ec61c68f2fe4488d1deabc33d93a8407a8e459fff32->leave($__internal_de3155a7accad7384e735ec61c68f2fe4488d1deabc33d93a8407a8e459fff32_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a38ad0ba4962824f9026f0748db210d4b8ac949ca888e784a1d9cdc4b1c75772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38ad0ba4962824f9026f0748db210d4b8ac949ca888e784a1d9cdc4b1c75772->enter($__internal_a38ad0ba4962824f9026f0748db210d4b8ac949ca888e784a1d9cdc4b1c75772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b8424b51540ed86af32f5e5f8dfc655838443b0860bff4194f839d47ec79235d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8424b51540ed86af32f5e5f8dfc655838443b0860bff4194f839d47ec79235d->enter($__internal_b8424b51540ed86af32f5e5f8dfc655838443b0860bff4194f839d47ec79235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b8424b51540ed86af32f5e5f8dfc655838443b0860bff4194f839d47ec79235d->leave($__internal_b8424b51540ed86af32f5e5f8dfc655838443b0860bff4194f839d47ec79235d_prof);

        
        $__internal_a38ad0ba4962824f9026f0748db210d4b8ac949ca888e784a1d9cdc4b1c75772->leave($__internal_a38ad0ba4962824f9026f0748db210d4b8ac949ca888e784a1d9cdc4b1c75772_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_12cc9e3880381174c7bbe01c57bb8dadfd43d8c6ea7e156d6d03d8821db4d860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cc9e3880381174c7bbe01c57bb8dadfd43d8c6ea7e156d6d03d8821db4d860->enter($__internal_12cc9e3880381174c7bbe01c57bb8dadfd43d8c6ea7e156d6d03d8821db4d860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b335a9e45946468689d2ee830f5705b663fadb1256528808daf2482f5b3f7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b335a9e45946468689d2ee830f5705b663fadb1256528808daf2482f5b3f7e4->enter($__internal_9b335a9e45946468689d2ee830f5705b663fadb1256528808daf2482f5b3f7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b335a9e45946468689d2ee830f5705b663fadb1256528808daf2482f5b3f7e4->leave($__internal_9b335a9e45946468689d2ee830f5705b663fadb1256528808daf2482f5b3f7e4_prof);

        
        $__internal_12cc9e3880381174c7bbe01c57bb8dadfd43d8c6ea7e156d6d03d8821db4d860->leave($__internal_12cc9e3880381174c7bbe01c57bb8dadfd43d8c6ea7e156d6d03d8821db4d860_prof);

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
        return array (  164 => 40,  147 => 6,  129 => 5,  114 => 41,  112 => 40,  104 => 37,  97 => 33,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  69 => 20,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
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
