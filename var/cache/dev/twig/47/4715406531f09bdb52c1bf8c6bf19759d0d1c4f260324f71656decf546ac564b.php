<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_488680e8950bbeb31636ecb4d8154516253cbd90c8b3dce75c7c74053984ffa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c0ae445d4aaf9b360cc9cb5a8ab0dc5bbf2d0c8b1aabb1c61ba55a2007e54ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ae445d4aaf9b360cc9cb5a8ab0dc5bbf2d0c8b1aabb1c61ba55a2007e54ef2->enter($__internal_c0ae445d4aaf9b360cc9cb5a8ab0dc5bbf2d0c8b1aabb1c61ba55a2007e54ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_927f71e2dfee1c1ca0bc3bc334fafcd531c9ae6ac2263b5bd35c224fcc6b01f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927f71e2dfee1c1ca0bc3bc334fafcd531c9ae6ac2263b5bd35c224fcc6b01f6->enter($__internal_927f71e2dfee1c1ca0bc3bc334fafcd531c9ae6ac2263b5bd35c224fcc6b01f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ae445d4aaf9b360cc9cb5a8ab0dc5bbf2d0c8b1aabb1c61ba55a2007e54ef2->leave($__internal_c0ae445d4aaf9b360cc9cb5a8ab0dc5bbf2d0c8b1aabb1c61ba55a2007e54ef2_prof);

        
        $__internal_927f71e2dfee1c1ca0bc3bc334fafcd531c9ae6ac2263b5bd35c224fcc6b01f6->leave($__internal_927f71e2dfee1c1ca0bc3bc334fafcd531c9ae6ac2263b5bd35c224fcc6b01f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a271f277a0f07f184145e5aad7a888be69f1699fc6fdf8fff71794873fcbcea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a271f277a0f07f184145e5aad7a888be69f1699fc6fdf8fff71794873fcbcea->enter($__internal_7a271f277a0f07f184145e5aad7a888be69f1699fc6fdf8fff71794873fcbcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e975c840ba84444a62d010a2e7b2663c1bb7ca13236d451200a3c8cbf6ccd57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e975c840ba84444a62d010a2e7b2663c1bb7ca13236d451200a3c8cbf6ccd57d->enter($__internal_e975c840ba84444a62d010a2e7b2663c1bb7ca13236d451200a3c8cbf6ccd57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e975c840ba84444a62d010a2e7b2663c1bb7ca13236d451200a3c8cbf6ccd57d->leave($__internal_e975c840ba84444a62d010a2e7b2663c1bb7ca13236d451200a3c8cbf6ccd57d_prof);

        
        $__internal_7a271f277a0f07f184145e5aad7a888be69f1699fc6fdf8fff71794873fcbcea->leave($__internal_7a271f277a0f07f184145e5aad7a888be69f1699fc6fdf8fff71794873fcbcea_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b275839a71b57e244074f05dc49bf9902458c19d2de8c0f8dc3f3e225e80f14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b275839a71b57e244074f05dc49bf9902458c19d2de8c0f8dc3f3e225e80f14c->enter($__internal_b275839a71b57e244074f05dc49bf9902458c19d2de8c0f8dc3f3e225e80f14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_078750f12beae7b07282b56310ab9ec8c170c109eb3121d902b547212761e3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078750f12beae7b07282b56310ab9ec8c170c109eb3121d902b547212761e3fc->enter($__internal_078750f12beae7b07282b56310ab9ec8c170c109eb3121d902b547212761e3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_078750f12beae7b07282b56310ab9ec8c170c109eb3121d902b547212761e3fc->leave($__internal_078750f12beae7b07282b56310ab9ec8c170c109eb3121d902b547212761e3fc_prof);

        
        $__internal_b275839a71b57e244074f05dc49bf9902458c19d2de8c0f8dc3f3e225e80f14c->leave($__internal_b275839a71b57e244074f05dc49bf9902458c19d2de8c0f8dc3f3e225e80f14c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86b8e0d2e414ea417f024f1f4252984cfee80f916becc00429db6447b9087a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b8e0d2e414ea417f024f1f4252984cfee80f916becc00429db6447b9087a8b->enter($__internal_86b8e0d2e414ea417f024f1f4252984cfee80f916becc00429db6447b9087a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_990939d32cd342b171d870883476f696c7323b463021f52b81c9bbdcdc389597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990939d32cd342b171d870883476f696c7323b463021f52b81c9bbdcdc389597->enter($__internal_990939d32cd342b171d870883476f696c7323b463021f52b81c9bbdcdc389597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_990939d32cd342b171d870883476f696c7323b463021f52b81c9bbdcdc389597->leave($__internal_990939d32cd342b171d870883476f696c7323b463021f52b81c9bbdcdc389597_prof);

        
        $__internal_86b8e0d2e414ea417f024f1f4252984cfee80f916becc00429db6447b9087a8b->leave($__internal_86b8e0d2e414ea417f024f1f4252984cfee80f916becc00429db6447b9087a8b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
