<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_877fb3b784db3d6fb926b7f7a022c3d80fb518bd8ea9c7e0ec231c4d0cbafc9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_877fb3b784db3d6fb926b7f7a022c3d80fb518bd8ea9c7e0ec231c4d0cbafc9a->enter($__internal_877fb3b784db3d6fb926b7f7a022c3d80fb518bd8ea9c7e0ec231c4d0cbafc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_885ffd86e6db03fd0d918905cea027e363d9b22699125a5d84857abde9f0a9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885ffd86e6db03fd0d918905cea027e363d9b22699125a5d84857abde9f0a9cd->enter($__internal_885ffd86e6db03fd0d918905cea027e363d9b22699125a5d84857abde9f0a9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_877fb3b784db3d6fb926b7f7a022c3d80fb518bd8ea9c7e0ec231c4d0cbafc9a->leave($__internal_877fb3b784db3d6fb926b7f7a022c3d80fb518bd8ea9c7e0ec231c4d0cbafc9a_prof);

        
        $__internal_885ffd86e6db03fd0d918905cea027e363d9b22699125a5d84857abde9f0a9cd->leave($__internal_885ffd86e6db03fd0d918905cea027e363d9b22699125a5d84857abde9f0a9cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b953d56305e1b27398ba66e014ef84d3121dee72ee970d0a3bf2fdb40fb74d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b953d56305e1b27398ba66e014ef84d3121dee72ee970d0a3bf2fdb40fb74d8e->enter($__internal_b953d56305e1b27398ba66e014ef84d3121dee72ee970d0a3bf2fdb40fb74d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3201304c91f0cab5bfb4ab4161167c9681ec4fe834f40a136aa7393131745d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3201304c91f0cab5bfb4ab4161167c9681ec4fe834f40a136aa7393131745d11->enter($__internal_3201304c91f0cab5bfb4ab4161167c9681ec4fe834f40a136aa7393131745d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3201304c91f0cab5bfb4ab4161167c9681ec4fe834f40a136aa7393131745d11->leave($__internal_3201304c91f0cab5bfb4ab4161167c9681ec4fe834f40a136aa7393131745d11_prof);

        
        $__internal_b953d56305e1b27398ba66e014ef84d3121dee72ee970d0a3bf2fdb40fb74d8e->leave($__internal_b953d56305e1b27398ba66e014ef84d3121dee72ee970d0a3bf2fdb40fb74d8e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47e324d92364b613798295d44202536f2ec5275d3cfbf2dbc80807c64ac8bca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e324d92364b613798295d44202536f2ec5275d3cfbf2dbc80807c64ac8bca1->enter($__internal_47e324d92364b613798295d44202536f2ec5275d3cfbf2dbc80807c64ac8bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dd6b53a3c7d91c55d018c58194b1ae1f4ecef3d1341d5550985b17aca5127c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6b53a3c7d91c55d018c58194b1ae1f4ecef3d1341d5550985b17aca5127c6d->enter($__internal_dd6b53a3c7d91c55d018c58194b1ae1f4ecef3d1341d5550985b17aca5127c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd6b53a3c7d91c55d018c58194b1ae1f4ecef3d1341d5550985b17aca5127c6d->leave($__internal_dd6b53a3c7d91c55d018c58194b1ae1f4ecef3d1341d5550985b17aca5127c6d_prof);

        
        $__internal_47e324d92364b613798295d44202536f2ec5275d3cfbf2dbc80807c64ac8bca1->leave($__internal_47e324d92364b613798295d44202536f2ec5275d3cfbf2dbc80807c64ac8bca1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ba9a91284062454ed3fbcd5e56f4c54277668aad4a88126962a0f0ec92e9fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba9a91284062454ed3fbcd5e56f4c54277668aad4a88126962a0f0ec92e9fb6->enter($__internal_0ba9a91284062454ed3fbcd5e56f4c54277668aad4a88126962a0f0ec92e9fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_490b27e85990f676d220fab8b8cb8adb7793b5f8e230fe7a2f7993f7434d865c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490b27e85990f676d220fab8b8cb8adb7793b5f8e230fe7a2f7993f7434d865c->enter($__internal_490b27e85990f676d220fab8b8cb8adb7793b5f8e230fe7a2f7993f7434d865c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_490b27e85990f676d220fab8b8cb8adb7793b5f8e230fe7a2f7993f7434d865c->leave($__internal_490b27e85990f676d220fab8b8cb8adb7793b5f8e230fe7a2f7993f7434d865c_prof);

        
        $__internal_0ba9a91284062454ed3fbcd5e56f4c54277668aad4a88126962a0f0ec92e9fb6->leave($__internal_0ba9a91284062454ed3fbcd5e56f4c54277668aad4a88126962a0f0ec92e9fb6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/dgasch/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
