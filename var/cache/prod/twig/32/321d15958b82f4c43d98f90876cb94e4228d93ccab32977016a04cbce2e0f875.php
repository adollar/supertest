<?php

/* admin/addpolzov.html.twig */
class __TwigTemplate_1bdc818a7983cdff07a6b5f0b106fcf2ec3afc012d18c5f90252b9ebea33e969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/addpolzov.html.twig", 1);
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
        $__internal_9b87d0269d18e578302a372c70bc7b19a1f4fc49cc56524eb64147a909d9f1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b87d0269d18e578302a372c70bc7b19a1f4fc49cc56524eb64147a909d9f1c1->enter($__internal_9b87d0269d18e578302a372c70bc7b19a1f4fc49cc56524eb64147a909d9f1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/addpolzov.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b87d0269d18e578302a372c70bc7b19a1f4fc49cc56524eb64147a909d9f1c1->leave($__internal_9b87d0269d18e578302a372c70bc7b19a1f4fc49cc56524eb64147a909d9f1c1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb59bcdbf0fa3bfaf3e297d87afb60adda16e9f6a1e31dfdab95ae289ecd2851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb59bcdbf0fa3bfaf3e297d87afb60adda16e9f6a1e31dfdab95ae289ecd2851->enter($__internal_cb59bcdbf0fa3bfaf3e297d87afb60adda16e9f6a1e31dfdab95ae289ecd2851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
    
 
<form class=\"form-inline\">

  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
 <div class=\"form-group\">
<label  for=\"name2\">Ім'я</label>

";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name2")));
        echo "
</div>
<div class=\"form-group\">
<label for=\"Name3\">Кабінет</label>
 
";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cabinet", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name3")));
        echo "
<label for=\"Name3\">monitor</label>
 
";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "idmonitor", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name3")));
        echo "

";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
</div>

";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</form>


";
        
        $__internal_cb59bcdbf0fa3bfaf3e297d87afb60adda16e9f6a1e31dfdab95ae289ecd2851->leave($__internal_cb59bcdbf0fa3bfaf3e297d87afb60adda16e9f6a1e31dfdab95ae289ecd2851_prof);

    }

    public function getTemplateName()
    {
        return "admin/addpolzov.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  74 => 23,  69 => 21,  63 => 18,  55 => 13,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
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
<label  for=\"name2\">Ім'я</label>

{{ form_widget(form.name,  {'attr': {'class': 'form-control','id':'name2'}}) }}
</div>
<div class=\"form-group\">
<label for=\"Name3\">Кабінет</label>
 
{{ form_widget(form.cabinet, {'attr': {'class': 'form-control','id':'name3'}}) }}
<label for=\"Name3\">monitor</label>
 
{{ form_widget(form.idmonitor, {'attr': {'class': 'form-control','id':'name3'}}) }}

{{ form_widget(form.save, {'attr':{'class':'btn btn-default'}}) }}
</div>

{{ form_end(form) }}
</form>


{% endblock %}", "admin/addpolzov.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\app\\Resources\\views\\admin\\addpolzov.html.twig");
    }
}
