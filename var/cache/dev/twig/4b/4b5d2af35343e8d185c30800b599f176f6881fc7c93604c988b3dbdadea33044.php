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
        $__internal_26aad0f0aff418eb17ebb9ced8524b97eb8bfbec98ce186e95bdf486df734698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26aad0f0aff418eb17ebb9ced8524b97eb8bfbec98ce186e95bdf486df734698->enter($__internal_26aad0f0aff418eb17ebb9ced8524b97eb8bfbec98ce186e95bdf486df734698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_20cd101ab4071d7102acae2243dc4c04a7653b0e23ace1b09021f73e89a5f954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cd101ab4071d7102acae2243dc4c04a7653b0e23ace1b09021f73e89a5f954->enter($__internal_20cd101ab4071d7102acae2243dc4c04a7653b0e23ace1b09021f73e89a5f954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26aad0f0aff418eb17ebb9ced8524b97eb8bfbec98ce186e95bdf486df734698->leave($__internal_26aad0f0aff418eb17ebb9ced8524b97eb8bfbec98ce186e95bdf486df734698_prof);

        
        $__internal_20cd101ab4071d7102acae2243dc4c04a7653b0e23ace1b09021f73e89a5f954->leave($__internal_20cd101ab4071d7102acae2243dc4c04a7653b0e23ace1b09021f73e89a5f954_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7867f528b41aac9fc3136c462f3b090f8cd17abd8137299aa0dd2701bd412b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7867f528b41aac9fc3136c462f3b090f8cd17abd8137299aa0dd2701bd412b6a->enter($__internal_7867f528b41aac9fc3136c462f3b090f8cd17abd8137299aa0dd2701bd412b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_23c6fc7f62a9932c962b79032f28e2dff41ea286f973db75c36e3edb0df7da53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c6fc7f62a9932c962b79032f28e2dff41ea286f973db75c36e3edb0df7da53->enter($__internal_23c6fc7f62a9932c962b79032f28e2dff41ea286f973db75c36e3edb0df7da53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_23c6fc7f62a9932c962b79032f28e2dff41ea286f973db75c36e3edb0df7da53->leave($__internal_23c6fc7f62a9932c962b79032f28e2dff41ea286f973db75c36e3edb0df7da53_prof);

        
        $__internal_7867f528b41aac9fc3136c462f3b090f8cd17abd8137299aa0dd2701bd412b6a->leave($__internal_7867f528b41aac9fc3136c462f3b090f8cd17abd8137299aa0dd2701bd412b6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_28697d6c4dcbbcc5a84da47e49bb41023313991a802d0721dcd288f86601b3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28697d6c4dcbbcc5a84da47e49bb41023313991a802d0721dcd288f86601b3e7->enter($__internal_28697d6c4dcbbcc5a84da47e49bb41023313991a802d0721dcd288f86601b3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18e98e40f7e8dae810224329245994e1763de3b57ce029f3e9ab6998a416d2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e98e40f7e8dae810224329245994e1763de3b57ce029f3e9ab6998a416d2bc->enter($__internal_18e98e40f7e8dae810224329245994e1763de3b57ce029f3e9ab6998a416d2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18e98e40f7e8dae810224329245994e1763de3b57ce029f3e9ab6998a416d2bc->leave($__internal_18e98e40f7e8dae810224329245994e1763de3b57ce029f3e9ab6998a416d2bc_prof);

        
        $__internal_28697d6c4dcbbcc5a84da47e49bb41023313991a802d0721dcd288f86601b3e7->leave($__internal_28697d6c4dcbbcc5a84da47e49bb41023313991a802d0721dcd288f86601b3e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b2511a7e14d9df6a7436c94ef598c1dd23110e37d5eca3c0434d9fd6ac8c2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2511a7e14d9df6a7436c94ef598c1dd23110e37d5eca3c0434d9fd6ac8c2f8->enter($__internal_5b2511a7e14d9df6a7436c94ef598c1dd23110e37d5eca3c0434d9fd6ac8c2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9a1af5e1ddb9b48ebc5c9c7ac7845bc67d447570976f3be295ddf526bdc10267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1af5e1ddb9b48ebc5c9c7ac7845bc67d447570976f3be295ddf526bdc10267->enter($__internal_9a1af5e1ddb9b48ebc5c9c7ac7845bc67d447570976f3be295ddf526bdc10267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9a1af5e1ddb9b48ebc5c9c7ac7845bc67d447570976f3be295ddf526bdc10267->leave($__internal_9a1af5e1ddb9b48ebc5c9c7ac7845bc67d447570976f3be295ddf526bdc10267_prof);

        
        $__internal_5b2511a7e14d9df6a7436c94ef598c1dd23110e37d5eca3c0434d9fd6ac8c2f8->leave($__internal_5b2511a7e14d9df6a7436c94ef598c1dd23110e37d5eca3c0434d9fd6ac8c2f8_prof);

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
