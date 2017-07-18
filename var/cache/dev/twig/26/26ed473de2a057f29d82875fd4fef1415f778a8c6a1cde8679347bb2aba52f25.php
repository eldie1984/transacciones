<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_31ff3c1b2e2edcaf99b2a303b9b612911cca62687dbefadf32b382450409afd7 extends Twig_Template
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
        $__internal_111f656a3f9bf562cb4d0f513f374d259663e42b7bea098e6527ab5764356bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111f656a3f9bf562cb4d0f513f374d259663e42b7bea098e6527ab5764356bd7->enter($__internal_111f656a3f9bf562cb4d0f513f374d259663e42b7bea098e6527ab5764356bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6dcbf2df120e41a15dfabb44ab213408e7fd7f42a80339b9e543a2bebb81e81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dcbf2df120e41a15dfabb44ab213408e7fd7f42a80339b9e543a2bebb81e81a->enter($__internal_6dcbf2df120e41a15dfabb44ab213408e7fd7f42a80339b9e543a2bebb81e81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_111f656a3f9bf562cb4d0f513f374d259663e42b7bea098e6527ab5764356bd7->leave($__internal_111f656a3f9bf562cb4d0f513f374d259663e42b7bea098e6527ab5764356bd7_prof);

        
        $__internal_6dcbf2df120e41a15dfabb44ab213408e7fd7f42a80339b9e543a2bebb81e81a->leave($__internal_6dcbf2df120e41a15dfabb44ab213408e7fd7f42a80339b9e543a2bebb81e81a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16c9a9a86bc41f8b340eca5e470e524dca4462fc9c0566b27e176315f894073b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c9a9a86bc41f8b340eca5e470e524dca4462fc9c0566b27e176315f894073b->enter($__internal_16c9a9a86bc41f8b340eca5e470e524dca4462fc9c0566b27e176315f894073b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d53908f91164a36ec864e10d309fcd718a9b743b4b09d3d1ce1077658b7de7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53908f91164a36ec864e10d309fcd718a9b743b4b09d3d1ce1077658b7de7d6->enter($__internal_d53908f91164a36ec864e10d309fcd718a9b743b4b09d3d1ce1077658b7de7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d53908f91164a36ec864e10d309fcd718a9b743b4b09d3d1ce1077658b7de7d6->leave($__internal_d53908f91164a36ec864e10d309fcd718a9b743b4b09d3d1ce1077658b7de7d6_prof);

        
        $__internal_16c9a9a86bc41f8b340eca5e470e524dca4462fc9c0566b27e176315f894073b->leave($__internal_16c9a9a86bc41f8b340eca5e470e524dca4462fc9c0566b27e176315f894073b_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/dgasch/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
