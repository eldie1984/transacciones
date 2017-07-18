<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_484f3379db88d39d3596b1a1e7466e2f0dee126a429c29e64bddd35d911c5eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_484f3379db88d39d3596b1a1e7466e2f0dee126a429c29e64bddd35d911c5eea->enter($__internal_484f3379db88d39d3596b1a1e7466e2f0dee126a429c29e64bddd35d911c5eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_abe0cb0dbbac1e10f698bb269a3bb660fc91a5c5876fd1564ec7a1eb5ec49f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe0cb0dbbac1e10f698bb269a3bb660fc91a5c5876fd1564ec7a1eb5ec49f01->enter($__internal_abe0cb0dbbac1e10f698bb269a3bb660fc91a5c5876fd1564ec7a1eb5ec49f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_484f3379db88d39d3596b1a1e7466e2f0dee126a429c29e64bddd35d911c5eea->leave($__internal_484f3379db88d39d3596b1a1e7466e2f0dee126a429c29e64bddd35d911c5eea_prof);

        
        $__internal_abe0cb0dbbac1e10f698bb269a3bb660fc91a5c5876fd1564ec7a1eb5ec49f01->leave($__internal_abe0cb0dbbac1e10f698bb269a3bb660fc91a5c5876fd1564ec7a1eb5ec49f01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_124dc7a6b1d1f177b2031817c509c2edd389af87b2ac78f1dbc41df7368f6543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124dc7a6b1d1f177b2031817c509c2edd389af87b2ac78f1dbc41df7368f6543->enter($__internal_124dc7a6b1d1f177b2031817c509c2edd389af87b2ac78f1dbc41df7368f6543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1b5eab0095cf28fb540717ba04d0a4dee40e4b58ea47cc0501ab39b1467f51f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5eab0095cf28fb540717ba04d0a4dee40e4b58ea47cc0501ab39b1467f51f3->enter($__internal_1b5eab0095cf28fb540717ba04d0a4dee40e4b58ea47cc0501ab39b1467f51f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1b5eab0095cf28fb540717ba04d0a4dee40e4b58ea47cc0501ab39b1467f51f3->leave($__internal_1b5eab0095cf28fb540717ba04d0a4dee40e4b58ea47cc0501ab39b1467f51f3_prof);

        
        $__internal_124dc7a6b1d1f177b2031817c509c2edd389af87b2ac78f1dbc41df7368f6543->leave($__internal_124dc7a6b1d1f177b2031817c509c2edd389af87b2ac78f1dbc41df7368f6543_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2e33a71ac6ae002c2751da80566ce63e1e1adc71c6c4de14915a744e8bc912a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e33a71ac6ae002c2751da80566ce63e1e1adc71c6c4de14915a744e8bc912a->enter($__internal_f2e33a71ac6ae002c2751da80566ce63e1e1adc71c6c4de14915a744e8bc912a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66c31d0c0f99135385afad225261859e761998ce5acdd785fb5a3ac3815dea0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c31d0c0f99135385afad225261859e761998ce5acdd785fb5a3ac3815dea0c->enter($__internal_66c31d0c0f99135385afad225261859e761998ce5acdd785fb5a3ac3815dea0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_66c31d0c0f99135385afad225261859e761998ce5acdd785fb5a3ac3815dea0c->leave($__internal_66c31d0c0f99135385afad225261859e761998ce5acdd785fb5a3ac3815dea0c_prof);

        
        $__internal_f2e33a71ac6ae002c2751da80566ce63e1e1adc71c6c4de14915a744e8bc912a->leave($__internal_f2e33a71ac6ae002c2751da80566ce63e1e1adc71c6c4de14915a744e8bc912a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cde37330058ceb937be18deeabee4e5f510c415a38ea19004200ce38acecbb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cde37330058ceb937be18deeabee4e5f510c415a38ea19004200ce38acecbb7->enter($__internal_4cde37330058ceb937be18deeabee4e5f510c415a38ea19004200ce38acecbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a00854e865cc533f224a994a56f0a52b41b59522ae431f06c2d52252f393e172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00854e865cc533f224a994a56f0a52b41b59522ae431f06c2d52252f393e172->enter($__internal_a00854e865cc533f224a994a56f0a52b41b59522ae431f06c2d52252f393e172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_a00854e865cc533f224a994a56f0a52b41b59522ae431f06c2d52252f393e172->leave($__internal_a00854e865cc533f224a994a56f0a52b41b59522ae431f06c2d52252f393e172_prof);

        
        $__internal_4cde37330058ceb937be18deeabee4e5f510c415a38ea19004200ce38acecbb7->leave($__internal_4cde37330058ceb937be18deeabee4e5f510c415a38ea19004200ce38acecbb7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/dgasch/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
