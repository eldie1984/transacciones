<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_89466643a2a6d5dc1935b4f292c2f17d152f33a5c0910912ca8215d7b5f89432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89466643a2a6d5dc1935b4f292c2f17d152f33a5c0910912ca8215d7b5f89432->enter($__internal_89466643a2a6d5dc1935b4f292c2f17d152f33a5c0910912ca8215d7b5f89432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e1d1dde2b633f489dc869b8a4fecb0fa7b08c6a27885e3c02d6717da85d767de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d1dde2b633f489dc869b8a4fecb0fa7b08c6a27885e3c02d6717da85d767de->enter($__internal_e1d1dde2b633f489dc869b8a4fecb0fa7b08c6a27885e3c02d6717da85d767de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89466643a2a6d5dc1935b4f292c2f17d152f33a5c0910912ca8215d7b5f89432->leave($__internal_89466643a2a6d5dc1935b4f292c2f17d152f33a5c0910912ca8215d7b5f89432_prof);

        
        $__internal_e1d1dde2b633f489dc869b8a4fecb0fa7b08c6a27885e3c02d6717da85d767de->leave($__internal_e1d1dde2b633f489dc869b8a4fecb0fa7b08c6a27885e3c02d6717da85d767de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1b64cf2803239d600c966ce315d87fca5128b6c464fce71dfe7ea42533d9eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b64cf2803239d600c966ce315d87fca5128b6c464fce71dfe7ea42533d9eb7->enter($__internal_e1b64cf2803239d600c966ce315d87fca5128b6c464fce71dfe7ea42533d9eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_10602f6ccdf46308432c1132995b76c4d89be5a66744501ca73ee16ac6a7675d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10602f6ccdf46308432c1132995b76c4d89be5a66744501ca73ee16ac6a7675d->enter($__internal_10602f6ccdf46308432c1132995b76c4d89be5a66744501ca73ee16ac6a7675d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_10602f6ccdf46308432c1132995b76c4d89be5a66744501ca73ee16ac6a7675d->leave($__internal_10602f6ccdf46308432c1132995b76c4d89be5a66744501ca73ee16ac6a7675d_prof);

        
        $__internal_e1b64cf2803239d600c966ce315d87fca5128b6c464fce71dfe7ea42533d9eb7->leave($__internal_e1b64cf2803239d600c966ce315d87fca5128b6c464fce71dfe7ea42533d9eb7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_169a45e157193d7e245fbe6542f166de5c54ce39f7c1e4001a8d826dc95501cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169a45e157193d7e245fbe6542f166de5c54ce39f7c1e4001a8d826dc95501cc->enter($__internal_169a45e157193d7e245fbe6542f166de5c54ce39f7c1e4001a8d826dc95501cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08be8697f3ec38fc147d7915092093c8c883b2a174cf2b00a158e00bc8d07433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08be8697f3ec38fc147d7915092093c8c883b2a174cf2b00a158e00bc8d07433->enter($__internal_08be8697f3ec38fc147d7915092093c8c883b2a174cf2b00a158e00bc8d07433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_08be8697f3ec38fc147d7915092093c8c883b2a174cf2b00a158e00bc8d07433->leave($__internal_08be8697f3ec38fc147d7915092093c8c883b2a174cf2b00a158e00bc8d07433_prof);

        
        $__internal_169a45e157193d7e245fbe6542f166de5c54ce39f7c1e4001a8d826dc95501cc->leave($__internal_169a45e157193d7e245fbe6542f166de5c54ce39f7c1e4001a8d826dc95501cc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87cd7e3166e4cfa1d992e6dc3fa25d1bd49868298330558fe5af6a02616d716a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87cd7e3166e4cfa1d992e6dc3fa25d1bd49868298330558fe5af6a02616d716a->enter($__internal_87cd7e3166e4cfa1d992e6dc3fa25d1bd49868298330558fe5af6a02616d716a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0bd942bc704abd255115e8b0ab7bde2614f165553128fbc37a54e4ac6a5e73f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd942bc704abd255115e8b0ab7bde2614f165553128fbc37a54e4ac6a5e73f3->enter($__internal_0bd942bc704abd255115e8b0ab7bde2614f165553128fbc37a54e4ac6a5e73f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0bd942bc704abd255115e8b0ab7bde2614f165553128fbc37a54e4ac6a5e73f3->leave($__internal_0bd942bc704abd255115e8b0ab7bde2614f165553128fbc37a54e4ac6a5e73f3_prof);

        
        $__internal_87cd7e3166e4cfa1d992e6dc3fa25d1bd49868298330558fe5af6a02616d716a->leave($__internal_87cd7e3166e4cfa1d992e6dc3fa25d1bd49868298330558fe5af6a02616d716a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/dgasch/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
