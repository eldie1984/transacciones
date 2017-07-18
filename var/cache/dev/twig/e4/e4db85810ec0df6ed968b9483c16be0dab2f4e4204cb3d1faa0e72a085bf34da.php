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
        $__internal_a463ef7ee7d664787f7222fb0b7fb2e98ac0814177fa820f72e90d70ca21ae70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a463ef7ee7d664787f7222fb0b7fb2e98ac0814177fa820f72e90d70ca21ae70->enter($__internal_a463ef7ee7d664787f7222fb0b7fb2e98ac0814177fa820f72e90d70ca21ae70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8caba1124996a4a3acc128ceb329e80102ccb3606901d24f1af95b86a703a099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caba1124996a4a3acc128ceb329e80102ccb3606901d24f1af95b86a703a099->enter($__internal_8caba1124996a4a3acc128ceb329e80102ccb3606901d24f1af95b86a703a099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a463ef7ee7d664787f7222fb0b7fb2e98ac0814177fa820f72e90d70ca21ae70->leave($__internal_a463ef7ee7d664787f7222fb0b7fb2e98ac0814177fa820f72e90d70ca21ae70_prof);

        
        $__internal_8caba1124996a4a3acc128ceb329e80102ccb3606901d24f1af95b86a703a099->leave($__internal_8caba1124996a4a3acc128ceb329e80102ccb3606901d24f1af95b86a703a099_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11c1d168d2da6d4f4c4fb6307b5207825694bc3b8cbbf6fa9734f38c7a239d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c1d168d2da6d4f4c4fb6307b5207825694bc3b8cbbf6fa9734f38c7a239d5d->enter($__internal_11c1d168d2da6d4f4c4fb6307b5207825694bc3b8cbbf6fa9734f38c7a239d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e886c7df7d80d535a3e8a18de3ee1be45224416b2a4ab636cc227365c70d5a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e886c7df7d80d535a3e8a18de3ee1be45224416b2a4ab636cc227365c70d5a9e->enter($__internal_e886c7df7d80d535a3e8a18de3ee1be45224416b2a4ab636cc227365c70d5a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e886c7df7d80d535a3e8a18de3ee1be45224416b2a4ab636cc227365c70d5a9e->leave($__internal_e886c7df7d80d535a3e8a18de3ee1be45224416b2a4ab636cc227365c70d5a9e_prof);

        
        $__internal_11c1d168d2da6d4f4c4fb6307b5207825694bc3b8cbbf6fa9734f38c7a239d5d->leave($__internal_11c1d168d2da6d4f4c4fb6307b5207825694bc3b8cbbf6fa9734f38c7a239d5d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_266e441e4cc81e2db52318c3d8c18ac448f1a8029cb6d64822af4871667b542a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266e441e4cc81e2db52318c3d8c18ac448f1a8029cb6d64822af4871667b542a->enter($__internal_266e441e4cc81e2db52318c3d8c18ac448f1a8029cb6d64822af4871667b542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_613aeea1e1de8b237d915841e96233fc7fbb81686844dd528bbec9efe36105ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613aeea1e1de8b237d915841e96233fc7fbb81686844dd528bbec9efe36105ea->enter($__internal_613aeea1e1de8b237d915841e96233fc7fbb81686844dd528bbec9efe36105ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_613aeea1e1de8b237d915841e96233fc7fbb81686844dd528bbec9efe36105ea->leave($__internal_613aeea1e1de8b237d915841e96233fc7fbb81686844dd528bbec9efe36105ea_prof);

        
        $__internal_266e441e4cc81e2db52318c3d8c18ac448f1a8029cb6d64822af4871667b542a->leave($__internal_266e441e4cc81e2db52318c3d8c18ac448f1a8029cb6d64822af4871667b542a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd2c69cb40f25bc27d1541d9c699a460a5604d71247c055610938982ca5b6889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2c69cb40f25bc27d1541d9c699a460a5604d71247c055610938982ca5b6889->enter($__internal_dd2c69cb40f25bc27d1541d9c699a460a5604d71247c055610938982ca5b6889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77a004110763fd605b6f3a056d2f2afdf7bc9bdff9c943168d86e03a70afe6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a004110763fd605b6f3a056d2f2afdf7bc9bdff9c943168d86e03a70afe6b4->enter($__internal_77a004110763fd605b6f3a056d2f2afdf7bc9bdff9c943168d86e03a70afe6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_77a004110763fd605b6f3a056d2f2afdf7bc9bdff9c943168d86e03a70afe6b4->leave($__internal_77a004110763fd605b6f3a056d2f2afdf7bc9bdff9c943168d86e03a70afe6b4_prof);

        
        $__internal_dd2c69cb40f25bc27d1541d9c699a460a5604d71247c055610938982ca5b6889->leave($__internal_dd2c69cb40f25bc27d1541d9c699a460a5604d71247c055610938982ca5b6889_prof);

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
