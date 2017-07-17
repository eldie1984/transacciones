<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1eac6d90ee66b4a75c858cab6c5a2a2ac1eded63800259782b8e16d9c4c1b6ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5badbce0d5acf1acef144167eed014c63989179cf54c04af00bdf2bafa0a0fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5badbce0d5acf1acef144167eed014c63989179cf54c04af00bdf2bafa0a0fbd->enter($__internal_5badbce0d5acf1acef144167eed014c63989179cf54c04af00bdf2bafa0a0fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3a4c9bb1173b4aca31f281112ef7ccdef8ea444fc90c5bfd76d6d479c204a394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4c9bb1173b4aca31f281112ef7ccdef8ea444fc90c5bfd76d6d479c204a394->enter($__internal_3a4c9bb1173b4aca31f281112ef7ccdef8ea444fc90c5bfd76d6d479c204a394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5badbce0d5acf1acef144167eed014c63989179cf54c04af00bdf2bafa0a0fbd->leave($__internal_5badbce0d5acf1acef144167eed014c63989179cf54c04af00bdf2bafa0a0fbd_prof);

        
        $__internal_3a4c9bb1173b4aca31f281112ef7ccdef8ea444fc90c5bfd76d6d479c204a394->leave($__internal_3a4c9bb1173b4aca31f281112ef7ccdef8ea444fc90c5bfd76d6d479c204a394_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e4110158a7af28fb9f002a41663f38354b2174a90620ed2409d7c74a7a24105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4110158a7af28fb9f002a41663f38354b2174a90620ed2409d7c74a7a24105->enter($__internal_3e4110158a7af28fb9f002a41663f38354b2174a90620ed2409d7c74a7a24105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c68956ba2fb280a10536488b7512cbc2b699d876f4fdbaf622c25dbf9972cc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68956ba2fb280a10536488b7512cbc2b699d876f4fdbaf622c25dbf9972cc1a->enter($__internal_c68956ba2fb280a10536488b7512cbc2b699d876f4fdbaf622c25dbf9972cc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c68956ba2fb280a10536488b7512cbc2b699d876f4fdbaf622c25dbf9972cc1a->leave($__internal_c68956ba2fb280a10536488b7512cbc2b699d876f4fdbaf622c25dbf9972cc1a_prof);

        
        $__internal_3e4110158a7af28fb9f002a41663f38354b2174a90620ed2409d7c74a7a24105->leave($__internal_3e4110158a7af28fb9f002a41663f38354b2174a90620ed2409d7c74a7a24105_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/dgasch/repo/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
