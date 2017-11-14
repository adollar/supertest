<?php

/* kilbas/monik.html.twig */
class __TwigTemplate_8431da93995a874e59e78db7d935548a5b47f8abc41bb4edbe0b721945f2c487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "kilbas/monik.html.twig", 1);
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
        $__internal_0db445fbfa3f04c1b57659cfccd62649e751de01c3487312272674cd2df20936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db445fbfa3f04c1b57659cfccd62649e751de01c3487312272674cd2df20936->enter($__internal_0db445fbfa3f04c1b57659cfccd62649e751de01c3487312272674cd2df20936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "kilbas/monik.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db445fbfa3f04c1b57659cfccd62649e751de01c3487312272674cd2df20936->leave($__internal_0db445fbfa3f04c1b57659cfccd62649e751de01c3487312272674cd2df20936_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_443729e9995d7d975b9429f20e68b7b459fcc5c591967ef4ff60a6c3a3ae6ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443729e9995d7d975b9429f20e68b7b459fcc5c591967ef4ff60a6c3a3ae6ee9->enter($__internal_443729e9995d7d975b9429f20e68b7b459fcc5c591967ef4ff60a6c3a3ae6ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
      <table class=\"table\">
      <tr><th>id</th><th>модель</th><th>діагональ</th></tr>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["moniks"] ?? $this->getContext($context, "moniks")));
        foreach ($context['_seq'] as $context["_key"] => $context["monik"]) {
            // line 8
            echo "
<tr><td>";
            // line 9
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
        // line 12
        echo "</table>
</div>
";
        
        $__internal_443729e9995d7d975b9429f20e68b7b459fcc5c591967ef4ff60a6c3a3ae6ee9->leave($__internal_443729e9995d7d975b9429f20e68b7b459fcc5c591967ef4ff60a6c3a3ae6ee9_prof);

    }

    public function getTemplateName()
    {
        return "kilbas/monik.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  53 => 9,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
      <table class=\"table\">
      <tr><th>id</th><th>модель</th><th>діагональ</th></tr>
{% for monik in moniks %}

<tr><td>{{ monik.id }}</td><td>{{ monik.model }}</td><td>{{ monik.diagonal }}</td></tr>

{% endfor %}
</table>
</div>
{% endblock %}", "kilbas/monik.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\app\\Resources\\views\\kilbas\\monik.html.twig");
    }
}
