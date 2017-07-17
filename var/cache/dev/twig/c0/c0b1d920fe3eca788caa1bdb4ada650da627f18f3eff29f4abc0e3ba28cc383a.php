<?php

/* archivos/index.html.twig */
class __TwigTemplate_edc1e6c8a28b73db83a9d9980f3b142a644888287905d523361ab987f3d12aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "archivos/index.html.twig", 1);
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
        $__internal_dece695b883a339eee6ae30fb15474e12f105be9389e0b54ccabbc9500edbaaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dece695b883a339eee6ae30fb15474e12f105be9389e0b54ccabbc9500edbaaf->enter($__internal_dece695b883a339eee6ae30fb15474e12f105be9389e0b54ccabbc9500edbaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "archivos/index.html.twig"));

        $__internal_c879a5831128fa87a78918f03e50bc6eab98388933978968329e9a1eb30fc729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c879a5831128fa87a78918f03e50bc6eab98388933978968329e9a1eb30fc729->enter($__internal_c879a5831128fa87a78918f03e50bc6eab98388933978968329e9a1eb30fc729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "archivos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dece695b883a339eee6ae30fb15474e12f105be9389e0b54ccabbc9500edbaaf->leave($__internal_dece695b883a339eee6ae30fb15474e12f105be9389e0b54ccabbc9500edbaaf_prof);

        
        $__internal_c879a5831128fa87a78918f03e50bc6eab98388933978968329e9a1eb30fc729->leave($__internal_c879a5831128fa87a78918f03e50bc6eab98388933978968329e9a1eb30fc729_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f3abd8c608575b437d193340c5e3719a90ec720737a7655464e52796882214a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3abd8c608575b437d193340c5e3719a90ec720737a7655464e52796882214a->enter($__internal_6f3abd8c608575b437d193340c5e3719a90ec720737a7655464e52796882214a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a799f86da30ffbae9b655a4a288f3a95ef0eacbda46830e1a9d0dfe480bee484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a799f86da30ffbae9b655a4a288f3a95ef0eacbda46830e1a9d0dfe480bee484->enter($__internal_a799f86da30ffbae9b655a4a288f3a95ef0eacbda46830e1a9d0dfe480bee484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Archivos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Direccion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["archivos"]) ? $context["archivos"] : $this->getContext($context, "archivos")));
        foreach ($context['_seq'] as $context["_key"] => $context["archivo"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archivos_show", array("id" => $this->getAttribute($context["archivo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["archivo"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["archivo"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["archivo"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["archivo"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archivos_show", array("id" => $this->getAttribute($context["archivo"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archivos_edit", array("id" => $this->getAttribute($context["archivo"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("archivos_new");
        echo "\">Create a new archivo</a>
        </li>
    </ul>
";
        
        $__internal_a799f86da30ffbae9b655a4a288f3a95ef0eacbda46830e1a9d0dfe480bee484->leave($__internal_a799f86da30ffbae9b655a4a288f3a95ef0eacbda46830e1a9d0dfe480bee484_prof);

        
        $__internal_6f3abd8c608575b437d193340c5e3719a90ec720737a7655464e52796882214a->leave($__internal_6f3abd8c608575b437d193340c5e3719a90ec720737a7655464e52796882214a_prof);

    }

    public function getTemplateName()
    {
        return "archivos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  82 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Archivos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Direccion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for archivo in archivos %}
            <tr>
                <td><a href=\"{{ path('archivos_show', { 'id': archivo.id }) }}\">{{ archivo.id }}</a></td>
                <td>{% if archivo.fecha %}{{ archivo.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ archivo.direccion }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('archivos_show', { 'id': archivo.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('archivos_edit', { 'id': archivo.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('archivos_new') }}\">Create a new archivo</a>
        </li>
    </ul>
{% endblock %}
", "archivos/index.html.twig", "/home/dgasch/repo/transacciones/app/Resources/views/archivos/index.html.twig");
    }
}
