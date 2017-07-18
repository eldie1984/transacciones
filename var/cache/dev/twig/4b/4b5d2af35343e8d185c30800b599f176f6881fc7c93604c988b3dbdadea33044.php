<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7dccd3a77f4ea9dbd38e7fc3383761682f8269913e1c58c1741bbbdb362665e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dccd3a77f4ea9dbd38e7fc3383761682f8269913e1c58c1741bbbdb362665e1->enter($__internal_7dccd3a77f4ea9dbd38e7fc3383761682f8269913e1c58c1741bbbdb362665e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b959b1fb7a4dab1e2438cb09a558b41fcd9a513afd159ef611b903a11fc19c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b959b1fb7a4dab1e2438cb09a558b41fcd9a513afd159ef611b903a11fc19c6f->enter($__internal_b959b1fb7a4dab1e2438cb09a558b41fcd9a513afd159ef611b903a11fc19c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dccd3a77f4ea9dbd38e7fc3383761682f8269913e1c58c1741bbbdb362665e1->leave($__internal_7dccd3a77f4ea9dbd38e7fc3383761682f8269913e1c58c1741bbbdb362665e1_prof);

        
        $__internal_b959b1fb7a4dab1e2438cb09a558b41fcd9a513afd159ef611b903a11fc19c6f->leave($__internal_b959b1fb7a4dab1e2438cb09a558b41fcd9a513afd159ef611b903a11fc19c6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e294b1c52f1432d9ad8985ebdabf67ac89af8f37114ab86158ea5cf2dff84077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e294b1c52f1432d9ad8985ebdabf67ac89af8f37114ab86158ea5cf2dff84077->enter($__internal_e294b1c52f1432d9ad8985ebdabf67ac89af8f37114ab86158ea5cf2dff84077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_735b2a8c2b82caaa73a5e1ec1633963ab8659350f84da920072ad13355a5a69f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735b2a8c2b82caaa73a5e1ec1633963ab8659350f84da920072ad13355a5a69f->enter($__internal_735b2a8c2b82caaa73a5e1ec1633963ab8659350f84da920072ad13355a5a69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_735b2a8c2b82caaa73a5e1ec1633963ab8659350f84da920072ad13355a5a69f->leave($__internal_735b2a8c2b82caaa73a5e1ec1633963ab8659350f84da920072ad13355a5a69f_prof);

        
        $__internal_e294b1c52f1432d9ad8985ebdabf67ac89af8f37114ab86158ea5cf2dff84077->leave($__internal_e294b1c52f1432d9ad8985ebdabf67ac89af8f37114ab86158ea5cf2dff84077_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7ac51ae0591993d3b594d9dfa9cda5273b5e6e3eef47e9cc80cebc4f2760d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ac51ae0591993d3b594d9dfa9cda5273b5e6e3eef47e9cc80cebc4f2760d3e->enter($__internal_a7ac51ae0591993d3b594d9dfa9cda5273b5e6e3eef47e9cc80cebc4f2760d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d074fdea515ac0364121216d51a9e400fd62fac98549d2569b3d942528eda3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d074fdea515ac0364121216d51a9e400fd62fac98549d2569b3d942528eda3c->enter($__internal_3d074fdea515ac0364121216d51a9e400fd62fac98549d2569b3d942528eda3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d074fdea515ac0364121216d51a9e400fd62fac98549d2569b3d942528eda3c->leave($__internal_3d074fdea515ac0364121216d51a9e400fd62fac98549d2569b3d942528eda3c_prof);

        
        $__internal_a7ac51ae0591993d3b594d9dfa9cda5273b5e6e3eef47e9cc80cebc4f2760d3e->leave($__internal_a7ac51ae0591993d3b594d9dfa9cda5273b5e6e3eef47e9cc80cebc4f2760d3e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68c56e18e1e1d38e4f62fffef3d467bd5ce7bfe92b11cedfcef39537e7b7e68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c56e18e1e1d38e4f62fffef3d467bd5ce7bfe92b11cedfcef39537e7b7e68b->enter($__internal_68c56e18e1e1d38e4f62fffef3d467bd5ce7bfe92b11cedfcef39537e7b7e68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cbb2aa029e39c554856e352061dc85276959383933a75cf4fa4622851795c860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb2aa029e39c554856e352061dc85276959383933a75cf4fa4622851795c860->enter($__internal_cbb2aa029e39c554856e352061dc85276959383933a75cf4fa4622851795c860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cbb2aa029e39c554856e352061dc85276959383933a75cf4fa4622851795c860->leave($__internal_cbb2aa029e39c554856e352061dc85276959383933a75cf4fa4622851795c860_prof);

        
        $__internal_68c56e18e1e1d38e4f62fffef3d467bd5ce7bfe92b11cedfcef39537e7b7e68b->leave($__internal_68c56e18e1e1d38e4f62fffef3d467bd5ce7bfe92b11cedfcef39537e7b7e68b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/dgasch/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
