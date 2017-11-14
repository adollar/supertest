<?php

/* kilbas/polzovat.html.twig */
class __TwigTemplate_f0200b69193553b3fc541f98efc04364c9f958b722ec4b4a0cb4f3d33dc6d7a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "kilbas/polzovat.html.twig", 1);
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
        $__internal_4b57ad19d0a7d8da04da04b8ef0fd1bf914750f1ac54441445aee585939e7662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b57ad19d0a7d8da04da04b8ef0fd1bf914750f1ac54441445aee585939e7662->enter($__internal_4b57ad19d0a7d8da04da04b8ef0fd1bf914750f1ac54441445aee585939e7662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "kilbas/polzovat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b57ad19d0a7d8da04da04b8ef0fd1bf914750f1ac54441445aee585939e7662->leave($__internal_4b57ad19d0a7d8da04da04b8ef0fd1bf914750f1ac54441445aee585939e7662_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_488331ca7e2790821a27ec4219ba17a8c39e27b2806773bd9a681476053f31ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488331ca7e2790821a27ec4219ba17a8c39e27b2806773bd9a681476053f31ff->enter($__internal_488331ca7e2790821a27ec4219ba17a8c39e27b2806773bd9a681476053f31ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
      <table class=\"table\">
      <tr><th>id</th><th>Ім'я</th><th>кабінет</th><th>монітор</th></tr>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["polzovat"]) || array_key_exists("polzovat", $context) ? $context["polzovat"] : (function () { throw new Twig_Error_Runtime('Variable "polzovat" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["polzova"]) {
            // line 8
            echo "
<tr><td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["polzova"], "id", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["polzova"], "name", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["polzova"], "cabinet", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["polzova"], "idmonitor", array()), "model", array()), "html", null, true);
            echo "</td></tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['polzova'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</table>
</div>
";
        
        $__internal_488331ca7e2790821a27ec4219ba17a8c39e27b2806773bd9a681476053f31ff->leave($__internal_488331ca7e2790821a27ec4219ba17a8c39e27b2806773bd9a681476053f31ff_prof);

    }

    public function getTemplateName()
    {
        return "kilbas/polzovat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  53 => 9,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

      <div class=\"jumbotron\">
      <table class=\"table\">
      <tr><th>id</th><th>Ім'я</th><th>кабінет</th><th>монітор</th></tr>
{% for polzova in polzovat %}

<tr><td>{{ polzova.id }}</td><td>{{ polzova.name }}</td><td>{{ polzova.cabinet }}</td><td>{{ polzova.idmonitor.model }}</td></tr>

{% endfor %}
</table>
</div>
{% endblock %}", "kilbas/polzovat.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\app\\Resources\\views\\kilbas\\polzovat.html.twig");
    }
}
