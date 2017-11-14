<?php

/* admin/addcomputer.html.twig */
class __TwigTemplate_1ce52d284ed71de741c08a017a6ed198a1c69c8a7c99698456b0a893a74bb2c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/addcomputer.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fc97374097c5d36399f24438cc9b21f4441c3165b72b5e6855161b45aa004a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc97374097c5d36399f24438cc9b21f4441c3165b72b5e6855161b45aa004a2->enter($__internal_1fc97374097c5d36399f24438cc9b21f4441c3165b72b5e6855161b45aa004a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/addcomputer.html.twig"));

        $__internal_e66ef4459b73125e191fbf9776429eab1ff915ce95960d8ef1c857181f48978f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66ef4459b73125e191fbf9776429eab1ff915ce95960d8ef1c857181f48978f->enter($__internal_e66ef4459b73125e191fbf9776429eab1ff915ce95960d8ef1c857181f48978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/addcomputer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fc97374097c5d36399f24438cc9b21f4441c3165b72b5e6855161b45aa004a2->leave($__internal_1fc97374097c5d36399f24438cc9b21f4441c3165b72b5e6855161b45aa004a2_prof);

        
        $__internal_e66ef4459b73125e191fbf9776429eab1ff915ce95960d8ef1c857181f48978f->leave($__internal_e66ef4459b73125e191fbf9776429eab1ff915ce95960d8ef1c857181f48978f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c72cea5da95c01bf076fd6fc168fb1b9c5fdcce9b77a5ec147eec5b1c1ccab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c72cea5da95c01bf076fd6fc168fb1b9c5fdcce9b77a5ec147eec5b1c1ccab7->enter($__internal_6c72cea5da95c01bf076fd6fc168fb1b9c5fdcce9b77a5ec147eec5b1c1ccab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36bf7eb66a8bdc3cf11ea3adf58ec6da4958ca7c3d7c79e36597685f41c30c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36bf7eb66a8bdc3cf11ea3adf58ec6da4958ca7c3d7c79e36597685f41c30c65->enter($__internal_36bf7eb66a8bdc3cf11ea3adf58ec6da4958ca7c3d7c79e36597685f41c30c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
      
<form class=\"form-inline\">

";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'widget');
        echo "
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_end');
        echo "
</form>

<table class=\"table\">
<tr><th>id</th><th>cpu</th><th>ram</th><th>hdd</th></tr>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["compalls"]) || array_key_exists("compalls", $context) ? $context["compalls"] : (function () { throw new Twig_Error_Runtime('Variable "compalls" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["compall"]) {
            // line 16
            echo "
<tr><td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["compall"], "id", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["compall"], "cpu", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["compall"], "ram", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["compall"], "hdd", array()), "html", null, true);
            echo "</td></tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compall'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>

</div>
";
        
        $__internal_36bf7eb66a8bdc3cf11ea3adf58ec6da4958ca7c3d7c79e36597685f41c30c65->leave($__internal_36bf7eb66a8bdc3cf11ea3adf58ec6da4958ca7c3d7c79e36597685f41c30c65_prof);

        
        $__internal_6c72cea5da95c01bf076fd6fc168fb1b9c5fdcce9b77a5ec147eec5b1c1ccab7->leave($__internal_6c72cea5da95c01bf076fd6fc168fb1b9c5fdcce9b77a5ec147eec5b1c1ccab7_prof);

    }

    public function getTemplateName()
    {
        return "admin/addcomputer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  79 => 17,  76 => 16,  72 => 15,  64 => 10,  60 => 9,  56 => 8,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

      <div class=\"jumbotron\">
      
<form class=\"form-inline\">

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
</form>

<table class=\"table\">
<tr><th>id</th><th>cpu</th><th>ram</th><th>hdd</th></tr>
{% for compall in compalls %}

<tr><td>{{ compall.id }}</td><td>{{ compall.cpu }}</td><td>{{ compall.ram }}</td><td>{{ compall.hdd }}</td></tr>

{% endfor %}
</table>

</div>
{% endblock %}", "admin/addcomputer.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\app\\Resources\\views\\admin\\addcomputer.html.twig");
    }
}
