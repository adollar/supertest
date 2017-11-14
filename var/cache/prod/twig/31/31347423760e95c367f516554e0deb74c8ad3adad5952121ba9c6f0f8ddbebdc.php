<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c392ad70f52e180db8d3187f6f91998a0b7b681f3d68a2f4f4ad3c519a88ae1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_157edb7980c77193fbd07ca21bdd36e20c1ec2564581b21801e379bcc5218583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157edb7980c77193fbd07ca21bdd36e20c1ec2564581b21801e379bcc5218583->enter($__internal_157edb7980c77193fbd07ca21bdd36e20c1ec2564581b21801e379bcc5218583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_157edb7980c77193fbd07ca21bdd36e20c1ec2564581b21801e379bcc5218583->leave($__internal_157edb7980c77193fbd07ca21bdd36e20c1ec2564581b21801e379bcc5218583_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fb21095c87b86877945e115cce56041ea526237ccf7b80726d03f8f0e1d271a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb21095c87b86877945e115cce56041ea526237ccf7b80726d03f8f0e1d271a->enter($__internal_0fb21095c87b86877945e115cce56041ea526237ccf7b80726d03f8f0e1d271a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0fb21095c87b86877945e115cce56041ea526237ccf7b80726d03f8f0e1d271a->leave($__internal_0fb21095c87b86877945e115cce56041ea526237ccf7b80726d03f8f0e1d271a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_49ff8a145f0bb28e5833ca3b2ee6f3ed88f31926df011daf6d7913d188e26337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ff8a145f0bb28e5833ca3b2ee6f3ed88f31926df011daf6d7913d188e26337->enter($__internal_49ff8a145f0bb28e5833ca3b2ee6f3ed88f31926df011daf6d7913d188e26337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_49ff8a145f0bb28e5833ca3b2ee6f3ed88f31926df011daf6d7913d188e26337->leave($__internal_49ff8a145f0bb28e5833ca3b2ee6f3ed88f31926df011daf6d7913d188e26337_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_24d287cd938fec4013a668e98c6d4fdbc20bbc0f107b9231844a3266295f4a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d287cd938fec4013a668e98c6d4fdbc20bbc0f107b9231844a3266295f4a36->enter($__internal_24d287cd938fec4013a668e98c6d4fdbc20bbc0f107b9231844a3266295f4a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_24d287cd938fec4013a668e98c6d4fdbc20bbc0f107b9231844a3266295f4a36->leave($__internal_24d287cd938fec4013a668e98c6d4fdbc20bbc0f107b9231844a3266295f4a36_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
