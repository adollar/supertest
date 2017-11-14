<?php

/* kilbas/polzovat.html.twig */
class __TwigTemplate_8eb6d3d0299b7ab8ce72824f5fc32e974e5da3e3c02f5d92f4c6982571b78805 extends Twig_Template
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
        $__internal_c7c3facc7a480ae7789bb11bf5317c33334cfedc3fcac48c8dc5de91f7c67865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c3facc7a480ae7789bb11bf5317c33334cfedc3fcac48c8dc5de91f7c67865->enter($__internal_c7c3facc7a480ae7789bb11bf5317c33334cfedc3fcac48c8dc5de91f7c67865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "kilbas/polzovat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c3facc7a480ae7789bb11bf5317c33334cfedc3fcac48c8dc5de91f7c67865->leave($__internal_c7c3facc7a480ae7789bb11bf5317c33334cfedc3fcac48c8dc5de91f7c67865_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b29e1eccd972cd4a3da295a6dd2ceac337f5a83dcb1833a6a89445296cb645b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29e1eccd972cd4a3da295a6dd2ceac337f5a83dcb1833a6a89445296cb645b9->enter($__internal_b29e1eccd972cd4a3da295a6dd2ceac337f5a83dcb1833a6a89445296cb645b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
      <div class=\"jumbotron\">
      <table class=\"table\">
      <tr><th>id</th><th>Ім'я</th><th>кабінет</th><th>монітор</th></tr>
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["polzovat"] ?? $this->getContext($context, "polzovat")));
        foreach ($context['_seq'] as $context["_key"] => $context["polzova"]) {
            // line 8
            echo "
<tr><td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["polzova"], "id", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["polzova"], "name", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["polzova"], "cabinet", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["polzova"], "idmonitor", array()), "model", array()), "html", null, true);
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
        
        $__internal_b29e1eccd972cd4a3da295a6dd2ceac337f5a83dcb1833a6a89445296cb645b9->leave($__internal_b29e1eccd972cd4a3da295a6dd2ceac337f5a83dcb1833a6a89445296cb645b9_prof);

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
      <tr><th>id</th><th>Ім'я</th><th>кабінет</th><th>монітор</th></tr>
{% for polzova in polzovat %}

<tr><td>{{ polzova.id }}</td><td>{{ polzova.name }}</td><td>{{ polzova.cabinet }}</td><td>{{ polzova.idmonitor.model }}</td></tr>

{% endfor %}
</table>
</div>
{% endblock %}", "kilbas/polzovat.html.twig", "C:\\xampp\\htdocs\\kilbas_project\\app\\Resources\\views\\kilbas\\polzovat.html.twig");
    }
}
