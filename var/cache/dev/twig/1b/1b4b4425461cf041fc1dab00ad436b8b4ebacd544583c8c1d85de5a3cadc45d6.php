<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_56afc24bcdbcd7b8504157bb29f7a16d5fc4835086b5aa8840fcff3c4896519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69663ed3354c229ce90440f7a0d36ca61fcc4a45775a2d5e916b817d2bc0b889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69663ed3354c229ce90440f7a0d36ca61fcc4a45775a2d5e916b817d2bc0b889->enter($__internal_69663ed3354c229ce90440f7a0d36ca61fcc4a45775a2d5e916b817d2bc0b889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ddd75ffdf497f99f12c1e5867524beea5b8531c389768a0450ed1b8905a1d7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd75ffdf497f99f12c1e5867524beea5b8531c389768a0450ed1b8905a1d7c2->enter($__internal_ddd75ffdf497f99f12c1e5867524beea5b8531c389768a0450ed1b8905a1d7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69663ed3354c229ce90440f7a0d36ca61fcc4a45775a2d5e916b817d2bc0b889->leave($__internal_69663ed3354c229ce90440f7a0d36ca61fcc4a45775a2d5e916b817d2bc0b889_prof);

        
        $__internal_ddd75ffdf497f99f12c1e5867524beea5b8531c389768a0450ed1b8905a1d7c2->leave($__internal_ddd75ffdf497f99f12c1e5867524beea5b8531c389768a0450ed1b8905a1d7c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_098312591cc3699cf5d69359e42ad342af791d5df2688f7d1a5819ded3135478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098312591cc3699cf5d69359e42ad342af791d5df2688f7d1a5819ded3135478->enter($__internal_098312591cc3699cf5d69359e42ad342af791d5df2688f7d1a5819ded3135478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e1730e8632b6023a086cead4ef8af24da8b27ebc6307a8f620a285bc6aa3114f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1730e8632b6023a086cead4ef8af24da8b27ebc6307a8f620a285bc6aa3114f->enter($__internal_e1730e8632b6023a086cead4ef8af24da8b27ebc6307a8f620a285bc6aa3114f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e1730e8632b6023a086cead4ef8af24da8b27ebc6307a8f620a285bc6aa3114f->leave($__internal_e1730e8632b6023a086cead4ef8af24da8b27ebc6307a8f620a285bc6aa3114f_prof);

        
        $__internal_098312591cc3699cf5d69359e42ad342af791d5df2688f7d1a5819ded3135478->leave($__internal_098312591cc3699cf5d69359e42ad342af791d5df2688f7d1a5819ded3135478_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6de647957bc0618153d83939265d6a1ff1485d52e01162b3539ce9ce13ebf859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de647957bc0618153d83939265d6a1ff1485d52e01162b3539ce9ce13ebf859->enter($__internal_6de647957bc0618153d83939265d6a1ff1485d52e01162b3539ce9ce13ebf859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_19c8bc7c3f4217f5c15f01a4b77338c6e0d2ba1ff3f223e74817e720dd2f7784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c8bc7c3f4217f5c15f01a4b77338c6e0d2ba1ff3f223e74817e720dd2f7784->enter($__internal_19c8bc7c3f4217f5c15f01a4b77338c6e0d2ba1ff3f223e74817e720dd2f7784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_19c8bc7c3f4217f5c15f01a4b77338c6e0d2ba1ff3f223e74817e720dd2f7784->leave($__internal_19c8bc7c3f4217f5c15f01a4b77338c6e0d2ba1ff3f223e74817e720dd2f7784_prof);

        
        $__internal_6de647957bc0618153d83939265d6a1ff1485d52e01162b3539ce9ce13ebf859->leave($__internal_6de647957bc0618153d83939265d6a1ff1485d52e01162b3539ce9ce13ebf859_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ebd0853650daa36c65c8e0532312ef7a6f740f7f85699d6be05b06b777ed358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ebd0853650daa36c65c8e0532312ef7a6f740f7f85699d6be05b06b777ed358->enter($__internal_6ebd0853650daa36c65c8e0532312ef7a6f740f7f85699d6be05b06b777ed358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1acca9d7e9a943bf44acfce9ac3c1ae2b14016c2b535986464cef864a57068b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acca9d7e9a943bf44acfce9ac3c1ae2b14016c2b535986464cef864a57068b3->enter($__internal_1acca9d7e9a943bf44acfce9ac3c1ae2b14016c2b535986464cef864a57068b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1acca9d7e9a943bf44acfce9ac3c1ae2b14016c2b535986464cef864a57068b3->leave($__internal_1acca9d7e9a943bf44acfce9ac3c1ae2b14016c2b535986464cef864a57068b3_prof);

        
        $__internal_6ebd0853650daa36c65c8e0532312ef7a6f740f7f85699d6be05b06b777ed358->leave($__internal_6ebd0853650daa36c65c8e0532312ef7a6f740f7f85699d6be05b06b777ed358_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
