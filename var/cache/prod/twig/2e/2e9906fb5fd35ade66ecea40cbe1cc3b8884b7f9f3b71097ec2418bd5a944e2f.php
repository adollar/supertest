<?php

/* kilbas/monik.html.twig */
class __TwigTemplate_e080deba49893a10a65401adae5fa280539e0af564e8c50d437964ba652b949e extends Twig_Template
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
        $__internal_0be1882fcf1113e66b806802f001e978db43fad86ea3c62100b3672471e9f4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be1882fcf1113e66b806802f001e978db43fad86ea3c62100b3672471e9f4cf->enter($__internal_0be1882fcf1113e66b806802f001e978db43fad86ea3c62100b3672471e9f4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "kilbas/monik.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be1882fcf1113e66b806802f001e978db43fad86ea3c62100b3672471e9f4cf->leave($__internal_0be1882fcf1113e66b806802f001e978db43fad86ea3c62100b3672471e9f4cf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ade3765c2aed252cd832d650135d6c0dab8c241ddf10a394c3d54959132521ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade3765c2aed252cd832d650135d6c0dab8c241ddf10a394c3d54959132521ee->enter($__internal_ade3765c2aed252cd832d650135d6c0dab8c241ddf10a394c3d54959132521ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
      <table class=\"table\">
      <tr><th>id</th><th>модель</th><th>діагональ</th></tr>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moniks"]) || array_key_exists("moniks", $context) ? $context["moniks"] : (function () { throw new Twig_Error_Runtime('Variable "moniks" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["monik"]) {
            // line 8
            echo "
<tr><td>";
            // line 9
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
        // line 12
        echo "</table>
</div>
";
        
        $__internal_ade3765c2aed252cd832d650135d6c0dab8c241ddf10a394c3d54959132521ee->leave($__internal_ade3765c2aed252cd832d650135d6c0dab8c241ddf10a394c3d54959132521ee_prof);

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
