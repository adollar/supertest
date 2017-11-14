<?php

/* admin/addcomputer.html.twig */
class __TwigTemplate_39787362ebd52b0313fc22a61dc0132b1188d400e48a84f6f8194f20aebb8573 extends Twig_Template
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
        $__internal_1585dc2ba4f69c8227120feeda9ffafdc9411de7a87d6b24627b36d7ae0b53ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1585dc2ba4f69c8227120feeda9ffafdc9411de7a87d6b24627b36d7ae0b53ed->enter($__internal_1585dc2ba4f69c8227120feeda9ffafdc9411de7a87d6b24627b36d7ae0b53ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/addcomputer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1585dc2ba4f69c8227120feeda9ffafdc9411de7a87d6b24627b36d7ae0b53ed->leave($__internal_1585dc2ba4f69c8227120feeda9ffafdc9411de7a87d6b24627b36d7ae0b53ed_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_81c850d4a752625605396c5df4ba37e122bbc04d823b85cf0b43947a014f85aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c850d4a752625605396c5df4ba37e122bbc04d823b85cf0b43947a014f85aa->enter($__internal_81c850d4a752625605396c5df4ba37e122bbc04d823b85cf0b43947a014f85aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_81c850d4a752625605396c5df4ba37e122bbc04d823b85cf0b43947a014f85aa->leave($__internal_81c850d4a752625605396c5df4ba37e122bbc04d823b85cf0b43947a014f85aa_prof);

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
        return array (  85 => 20,  70 => 17,  67 => 16,  63 => 15,  55 => 10,  51 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
