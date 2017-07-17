<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0b38740d75f9dae3cef02cd4041db998d23ef6015e649b64f348d98b0c38c175 extends Twig_Template
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
        $__internal_c1b1f60ea6cdf63d23064e9206d656f70332726e23af1419c058af3507b41bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b1f60ea6cdf63d23064e9206d656f70332726e23af1419c058af3507b41bd4->enter($__internal_c1b1f60ea6cdf63d23064e9206d656f70332726e23af1419c058af3507b41bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8a530891b2aa138ff720c4417f58bf8880ef293197eb2f07985c59e1165e69e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a530891b2aa138ff720c4417f58bf8880ef293197eb2f07985c59e1165e69e3->enter($__internal_8a530891b2aa138ff720c4417f58bf8880ef293197eb2f07985c59e1165e69e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1b1f60ea6cdf63d23064e9206d656f70332726e23af1419c058af3507b41bd4->leave($__internal_c1b1f60ea6cdf63d23064e9206d656f70332726e23af1419c058af3507b41bd4_prof);

        
        $__internal_8a530891b2aa138ff720c4417f58bf8880ef293197eb2f07985c59e1165e69e3->leave($__internal_8a530891b2aa138ff720c4417f58bf8880ef293197eb2f07985c59e1165e69e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ac35ae9580fc9626f0e8f022ae25a226729adfe6f8b611d419d306c8665ac0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac35ae9580fc9626f0e8f022ae25a226729adfe6f8b611d419d306c8665ac0d->enter($__internal_5ac35ae9580fc9626f0e8f022ae25a226729adfe6f8b611d419d306c8665ac0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_369018e213a56979e402d9719144cade08109641f5096dc8d490cecdb7b465ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369018e213a56979e402d9719144cade08109641f5096dc8d490cecdb7b465ef->enter($__internal_369018e213a56979e402d9719144cade08109641f5096dc8d490cecdb7b465ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_369018e213a56979e402d9719144cade08109641f5096dc8d490cecdb7b465ef->leave($__internal_369018e213a56979e402d9719144cade08109641f5096dc8d490cecdb7b465ef_prof);

        
        $__internal_5ac35ae9580fc9626f0e8f022ae25a226729adfe6f8b611d419d306c8665ac0d->leave($__internal_5ac35ae9580fc9626f0e8f022ae25a226729adfe6f8b611d419d306c8665ac0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4003b98ebb0e3b7a1d3ed0f49e04c1e36786036b2da38421ff7dc3e100abdc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4003b98ebb0e3b7a1d3ed0f49e04c1e36786036b2da38421ff7dc3e100abdc66->enter($__internal_4003b98ebb0e3b7a1d3ed0f49e04c1e36786036b2da38421ff7dc3e100abdc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_de5985117d9396ec2b61e97bb4b335521ce248e568e3510b77b4a9acddf18717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5985117d9396ec2b61e97bb4b335521ce248e568e3510b77b4a9acddf18717->enter($__internal_de5985117d9396ec2b61e97bb4b335521ce248e568e3510b77b4a9acddf18717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_de5985117d9396ec2b61e97bb4b335521ce248e568e3510b77b4a9acddf18717->leave($__internal_de5985117d9396ec2b61e97bb4b335521ce248e568e3510b77b4a9acddf18717_prof);

        
        $__internal_4003b98ebb0e3b7a1d3ed0f49e04c1e36786036b2da38421ff7dc3e100abdc66->leave($__internal_4003b98ebb0e3b7a1d3ed0f49e04c1e36786036b2da38421ff7dc3e100abdc66_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9341a8a4b466bd280b7535bcc07e01a541defae557f77513b5c83aa9f410d254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9341a8a4b466bd280b7535bcc07e01a541defae557f77513b5c83aa9f410d254->enter($__internal_9341a8a4b466bd280b7535bcc07e01a541defae557f77513b5c83aa9f410d254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a90e5388d2b5c43eacc458c3f01248dfc8f2f6c29e68afb569edb58e552d4a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90e5388d2b5c43eacc458c3f01248dfc8f2f6c29e68afb569edb58e552d4a9e->enter($__internal_a90e5388d2b5c43eacc458c3f01248dfc8f2f6c29e68afb569edb58e552d4a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a90e5388d2b5c43eacc458c3f01248dfc8f2f6c29e68afb569edb58e552d4a9e->leave($__internal_a90e5388d2b5c43eacc458c3f01248dfc8f2f6c29e68afb569edb58e552d4a9e_prof);

        
        $__internal_9341a8a4b466bd280b7535bcc07e01a541defae557f77513b5c83aa9f410d254->leave($__internal_9341a8a4b466bd280b7535bcc07e01a541defae557f77513b5c83aa9f410d254_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/home/dgasch/repo/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
