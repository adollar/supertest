<?php

/* admin/addmonik.html.twig */
class __TwigTemplate_44a4e2c41b476ba6bcbe3b4d04a7b0ca6b43c4a4d52f5227290e71cfb3962d38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/addmonik.html.twig", 1);
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
        $__internal_6bd24913dbeeeef2067b8eac40196f472110a3bbe2f5ab7f130734fe62b190ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd24913dbeeeef2067b8eac40196f472110a3bbe2f5ab7f130734fe62b190ef->enter($__internal_6bd24913dbeeeef2067b8eac40196f472110a3bbe2f5ab7f130734fe62b190ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/addmonik.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd24913dbeeeef2067b8eac40196f472110a3bbe2f5ab7f130734fe62b190ef->leave($__internal_6bd24913dbeeeef2067b8eac40196f472110a3bbe2f5ab7f130734fe62b190ef_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c1b684b0ca0dfe42fe2069e0e320c5b6b1d31bc8ed9c01ff1e61a2e52f6dbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1b684b0ca0dfe42fe2069e0e320c5b6b1d31bc8ed9c01ff1e61a2e52f6dbf4->enter($__internal_2c1b684b0ca0dfe42fe2069e0e320c5b6b1d31bc8ed9c01ff1e61a2e52f6dbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
      
<form class=\"form-inline\">

  ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
 <div class=\"form-group\">
<label  for=\"name2\">Модель</label>

";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "model", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name2")));
        echo "
</div>
<div class=\"form-group\">
<label for=\"Name3\">Діагональ</label>
 
";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "diagonal", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name3")));
        echo "

";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
</div>

";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end');
        echo "
</form>

<table class=\"table\">
<tr><th>id</th><th>модель</th><th>діагональ</th></tr>
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moniks"]) || array_key_exists("moniks", $context) ? $context["moniks"] : (function () { throw new Twig_Error_Runtime('Variable "moniks" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["monik"]) {
            // line 28
            echo "
<tr><td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["monik"], "id", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["monik"], "model", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["monik"], "diagonal", array()), "html", null, true);
            echo "</td></tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monik'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>
</div>
";
        
        $__internal_2c1b684b0ca0dfe42fe2069e0e320c5b6b1d31bc8ed9c01ff1e61a2e52f6dbf4->leave($__internal_2c1b684b0ca0dfe42fe2069e0e320c5b6b1d31bc8ed9c01ff1e61a2e52f6dbf4_prof);

    }

    public function getTemplateName()
    {
        return "admin/addmonik.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  88 => 29,  85 => 28,  81 => 27,  73 => 22,  67 => 19,  62 => 17,  54 => 12,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

      <div class=\"jumbotron\">
      
<form class=\"form-inline\">

  {{ form_start(form) }}
 <div class=\"form-group\">
<label  for=\"name2\">Модель</label>

{{ form_widget(form.model,  {'attr': {'class': 'form-control','id':'name2'}}) }}
</div>
<div class=\"form-group\">
<label for=\"Name3\">Діагональ</label>
 
{{ form_widget(form.diagonal, {'attr': {'class': 'form-control','id':'name3'}}) }}

{{ form_widget(form.save, {'attr':{'class':'btn btn-default'}}) }}
</div>

{{ form_end(form) }}
</form>

<table class=\"table\">
<tr><th>id</th><th>модель</th><th>діагональ</th></tr>
{% for monik in moniks %}

<tr><td>{{ monik.id }}</td><td>{{ monik.model }}</td><td>{{ monik.diagonal }}</td></tr>

{% endfor %}
</table>
</div>
{% endblock %}", "admin/addmonik.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\app\\Resources\\views\\admin\\addmonik.html.twig");
    }
}
