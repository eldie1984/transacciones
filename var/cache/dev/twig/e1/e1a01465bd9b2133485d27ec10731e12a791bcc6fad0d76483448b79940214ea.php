<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b9d1b17705ac9e4847598e11da598c5bc6bfce97b7e4a4d98c2cf4c2d18c8b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_204a198ee50d38cf9a1a2c87b0f51790e55c3af30590404f11b118030cecc469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204a198ee50d38cf9a1a2c87b0f51790e55c3af30590404f11b118030cecc469->enter($__internal_204a198ee50d38cf9a1a2c87b0f51790e55c3af30590404f11b118030cecc469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6d5a7b038a2a2cb8a6b93dfaefe4613bbbdeda3d82fe9300907b8012a87ac304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5a7b038a2a2cb8a6b93dfaefe4613bbbdeda3d82fe9300907b8012a87ac304->enter($__internal_6d5a7b038a2a2cb8a6b93dfaefe4613bbbdeda3d82fe9300907b8012a87ac304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_204a198ee50d38cf9a1a2c87b0f51790e55c3af30590404f11b118030cecc469->leave($__internal_204a198ee50d38cf9a1a2c87b0f51790e55c3af30590404f11b118030cecc469_prof);

        
        $__internal_6d5a7b038a2a2cb8a6b93dfaefe4613bbbdeda3d82fe9300907b8012a87ac304->leave($__internal_6d5a7b038a2a2cb8a6b93dfaefe4613bbbdeda3d82fe9300907b8012a87ac304_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3120d3467d5c3ffe39e1c7505fc2b7444f8de4f5d1fc5b60f5c3c91ca2f95e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3120d3467d5c3ffe39e1c7505fc2b7444f8de4f5d1fc5b60f5c3c91ca2f95e14->enter($__internal_3120d3467d5c3ffe39e1c7505fc2b7444f8de4f5d1fc5b60f5c3c91ca2f95e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e505d9249021bfb43b0acde5017129748da899afd5671ce6d26ecaa3de24cf3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e505d9249021bfb43b0acde5017129748da899afd5671ce6d26ecaa3de24cf3e->enter($__internal_e505d9249021bfb43b0acde5017129748da899afd5671ce6d26ecaa3de24cf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e505d9249021bfb43b0acde5017129748da899afd5671ce6d26ecaa3de24cf3e->leave($__internal_e505d9249021bfb43b0acde5017129748da899afd5671ce6d26ecaa3de24cf3e_prof);

        
        $__internal_3120d3467d5c3ffe39e1c7505fc2b7444f8de4f5d1fc5b60f5c3c91ca2f95e14->leave($__internal_3120d3467d5c3ffe39e1c7505fc2b7444f8de4f5d1fc5b60f5c3c91ca2f95e14_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5c440f634494973b8af2cdfe4e311b98c5fedbaaa6d3a9134a87a9664b7ddfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c440f634494973b8af2cdfe4e311b98c5fedbaaa6d3a9134a87a9664b7ddfd->enter($__internal_c5c440f634494973b8af2cdfe4e311b98c5fedbaaa6d3a9134a87a9664b7ddfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e808936d1f54091fb57bde8dd21c92983cc06a33b22b7b90d0ec52b0ce1e5b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e808936d1f54091fb57bde8dd21c92983cc06a33b22b7b90d0ec52b0ce1e5b75->enter($__internal_e808936d1f54091fb57bde8dd21c92983cc06a33b22b7b90d0ec52b0ce1e5b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e808936d1f54091fb57bde8dd21c92983cc06a33b22b7b90d0ec52b0ce1e5b75->leave($__internal_e808936d1f54091fb57bde8dd21c92983cc06a33b22b7b90d0ec52b0ce1e5b75_prof);

        
        $__internal_c5c440f634494973b8af2cdfe4e311b98c5fedbaaa6d3a9134a87a9664b7ddfd->leave($__internal_c5c440f634494973b8af2cdfe4e311b98c5fedbaaa6d3a9134a87a9664b7ddfd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d16bd2e73d1f89bbceffedd97e6c752b029de1a0165984bf4f5f7c890642807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d16bd2e73d1f89bbceffedd97e6c752b029de1a0165984bf4f5f7c890642807->enter($__internal_6d16bd2e73d1f89bbceffedd97e6c752b029de1a0165984bf4f5f7c890642807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab217e5cc111864abed8fb6d693f4da1b9243c402de1b97d5a905dcb54a6d2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab217e5cc111864abed8fb6d693f4da1b9243c402de1b97d5a905dcb54a6d2de->enter($__internal_ab217e5cc111864abed8fb6d693f4da1b9243c402de1b97d5a905dcb54a6d2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ab217e5cc111864abed8fb6d693f4da1b9243c402de1b97d5a905dcb54a6d2de->leave($__internal_ab217e5cc111864abed8fb6d693f4da1b9243c402de1b97d5a905dcb54a6d2de_prof);

        
        $__internal_6d16bd2e73d1f89bbceffedd97e6c752b029de1a0165984bf4f5f7c890642807->leave($__internal_6d16bd2e73d1f89bbceffedd97e6c752b029de1a0165984bf4f5f7c890642807_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/dgasch/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
