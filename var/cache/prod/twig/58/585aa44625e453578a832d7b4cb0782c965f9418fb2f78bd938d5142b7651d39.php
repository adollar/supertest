<?php

/* admin/addmonik.html.twig */
class __TwigTemplate_137194b1eb7b49acc3e7fc3e94a5167f36772e48cfa27917402f3839446261e5 extends Twig_Template
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
        $__internal_16c23a4ab7eef5affc11ee0c5fe2977f1d06da775ea18a1bfbeb39cfd1258a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c23a4ab7eef5affc11ee0c5fe2977f1d06da775ea18a1bfbeb39cfd1258a60->enter($__internal_16c23a4ab7eef5affc11ee0c5fe2977f1d06da775ea18a1bfbeb39cfd1258a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/addmonik.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c23a4ab7eef5affc11ee0c5fe2977f1d06da775ea18a1bfbeb39cfd1258a60->leave($__internal_16c23a4ab7eef5affc11ee0c5fe2977f1d06da775ea18a1bfbeb39cfd1258a60_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f70b598fc7aea1f0a467f0883fb7aca00414bc5709b327510e026234e7546ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70b598fc7aea1f0a467f0883fb7aca00414bc5709b327510e026234e7546ab4->enter($__internal_f70b598fc7aea1f0a467f0883fb7aca00414bc5709b327510e026234e7546ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
      
<form class=\"form-inline\">

  ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
 <div class=\"form-group\">
<label  for=\"name2\">Модель</label>

";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "model", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name2")));
        echo "
</div>
<div class=\"form-group\">
<label for=\"Name3\">Діагональ</label>
 
";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "diagonal", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name3")));
        echo "

";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
</div>

";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</form>

<table class=\"table\">
<tr><th>id</th><th>модель</th><th>діагональ</th></tr>
";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["moniks"] ?? $this->getContext($context, "moniks")));
        foreach ($context['_seq'] as $context["_key"] => $context["monik"]) {
            // line 28
            echo "
<tr><td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["monik"], "id", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["monik"], "model", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["monik"], "diagonal", array()), "html", null, true);
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
        
        $__internal_f70b598fc7aea1f0a467f0883fb7aca00414bc5709b327510e026234e7546ab4->leave($__internal_f70b598fc7aea1f0a467f0883fb7aca00414bc5709b327510e026234e7546ab4_prof);

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
