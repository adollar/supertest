<?php

/* admin/addpolzov.html.twig */
class __TwigTemplate_120cd8cdaeca6cd433857aa30551b51ad98db6f1fc20517750f2740484f1470b extends Twig_Template
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
        $__internal_d827e9ea7a06e16c9124cf0746b07ff18a7b030b7ec272a8b84fca8590b2ecac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d827e9ea7a06e16c9124cf0746b07ff18a7b030b7ec272a8b84fca8590b2ecac->enter($__internal_d827e9ea7a06e16c9124cf0746b07ff18a7b030b7ec272a8b84fca8590b2ecac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/addpolzov.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d827e9ea7a06e16c9124cf0746b07ff18a7b030b7ec272a8b84fca8590b2ecac->leave($__internal_d827e9ea7a06e16c9124cf0746b07ff18a7b030b7ec272a8b84fca8590b2ecac_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_db5a182a3387af5524ea2e0777db29796939a05e6abb208979c0741326723fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5a182a3387af5524ea2e0777db29796939a05e6abb208979c0741326723fe1->enter($__internal_db5a182a3387af5524ea2e0777db29796939a05e6abb208979c0741326723fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
    
 
<form class=\"form-inline\">

  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
        echo "
 <div class=\"form-group\">
<label  for=\"name2\">Ім'я</label>

";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name2")));
        echo "
</div>
<div class=\"form-group\">
<label for=\"Name3\">Кабінет</label>
 
";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "cabinet", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name3")));
        echo "
<label for=\"Name3\">monitor</label>
 
";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "idmonitor", array()), 'widget', array("attr" => array("class" => "form-control", "id" => "name3")));
        echo "

";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
</div>

";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'form_end');
        echo "
</form>


";
        
        $__internal_db5a182a3387af5524ea2e0777db29796939a05e6abb208979c0741326723fe1->leave($__internal_db5a182a3387af5524ea2e0777db29796939a05e6abb208979c0741326723fe1_prof);

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
