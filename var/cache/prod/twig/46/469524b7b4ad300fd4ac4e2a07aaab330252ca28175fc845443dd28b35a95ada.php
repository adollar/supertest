<?php

/* admin/addcomputer.html.twig */
class __TwigTemplate_5b9e8c5fada1fe759561c9fe0e425ccc757b97b0583bbb720fe76d27897fc777 extends Twig_Template
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
        $__internal_45264658dd0a6dd97263948a2b641dba2ada136e79e8a3f090a6c211ff71bc82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45264658dd0a6dd97263948a2b641dba2ada136e79e8a3f090a6c211ff71bc82->enter($__internal_45264658dd0a6dd97263948a2b641dba2ada136e79e8a3f090a6c211ff71bc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/addcomputer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45264658dd0a6dd97263948a2b641dba2ada136e79e8a3f090a6c211ff71bc82->leave($__internal_45264658dd0a6dd97263948a2b641dba2ada136e79e8a3f090a6c211ff71bc82_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_de8029180209540a38662423ddf789d5d2eb64283e414cad61c95d1ee8f5d436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8029180209540a38662423ddf789d5d2eb64283e414cad61c95d1ee8f5d436->enter($__internal_de8029180209540a38662423ddf789d5d2eb64283e414cad61c95d1ee8f5d436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
      
<form class=\"form-inline\">

  ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
 <div class=\"form-group\">
<label  for=\"name1\">cpu</label>
";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cpu", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name1")));
        echo "
</div>

<div class=\"form-group\">
<label for=\"name2\">ram</label>
 ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ram", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name2")));
        echo "
</div>

<div class=\"form-group\">
<label  for=\"name3\">hdd</label>
";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hdd", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name3")));
        echo "
</div>
<div>
";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
</div>

";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</form>

<table class=\"table\">
<tr><th>id</th><th>модель</th><th>діагональ</th></tr>
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["compalls"] ?? $this->getContext($context, "compalls")));
        foreach ($context['_seq'] as $context["_key"] => $context["compall"]) {
            // line 33
            echo "
<tr><td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["compall"], "id", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compall"], "cpu", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compall"], "ram", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["compall"], "hdd", array()), "html", null, true);
            echo "</td></tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compall'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</table>

</div>
";
        
        $__internal_de8029180209540a38662423ddf789d5d2eb64283e414cad61c95d1ee8f5d436->leave($__internal_de8029180209540a38662423ddf789d5d2eb64283e414cad61c95d1ee8f5d436_prof);

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
        return array (  111 => 37,  96 => 34,  93 => 33,  89 => 32,  81 => 27,  75 => 24,  69 => 21,  61 => 16,  53 => 11,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
<label  for=\"name1\">cpu</label>
{{ form_widget(form.cpu,  {'attr': {'class': 'form-control','id':'name1'}}) }}
</div>

<div class=\"form-group\">
<label for=\"name2\">ram</label>
 {{ form_widget(form.ram, {'attr': {'class': 'form-control','id':'name2'}}) }}
</div>

<div class=\"form-group\">
<label  for=\"name3\">hdd</label>
{{ form_widget(form.hdd,  {'attr': {'class': 'form-control','id':'name3'}}) }}
</div>
<div>
{{ form_widget(form.save, {'attr':{'class':'btn btn-default'}}) }}
</div>

{{ form_end(form) }}
</form>

<table class=\"table\">
<tr><th>id</th><th>модель</th><th>діагональ</th></tr>
{% for compall in compalls %}

<tr><td>{{ compall.id }}</td><td>{{ compall.cpu }}</td><td>{{ compall.ram }}</td><td>{{ compall.hdd }}</td></tr>

{% endfor %}
</table>

</div>
{% endblock %}", "admin/addcomputer.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\app\\Resources\\views\\admin\\addcomputer.html.twig");
    }
}
