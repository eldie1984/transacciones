<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b9d1b17705ac9e4847598e11da598c5bc6bfce97b7e4a4d98c2cf4c2d18c8b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_1de714d3d63f0b1bfa414821b7f528ed7321311bbc1878492790c3bf3fdd5851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de714d3d63f0b1bfa414821b7f528ed7321311bbc1878492790c3bf3fdd5851->enter($__internal_1de714d3d63f0b1bfa414821b7f528ed7321311bbc1878492790c3bf3fdd5851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_46fa853b8cdbcf41386cccef1e786562404ddac4bafbdb429e7c01f21736f121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fa853b8cdbcf41386cccef1e786562404ddac4bafbdb429e7c01f21736f121->enter($__internal_46fa853b8cdbcf41386cccef1e786562404ddac4bafbdb429e7c01f21736f121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1de714d3d63f0b1bfa414821b7f528ed7321311bbc1878492790c3bf3fdd5851->leave($__internal_1de714d3d63f0b1bfa414821b7f528ed7321311bbc1878492790c3bf3fdd5851_prof);

        
        $__internal_46fa853b8cdbcf41386cccef1e786562404ddac4bafbdb429e7c01f21736f121->leave($__internal_46fa853b8cdbcf41386cccef1e786562404ddac4bafbdb429e7c01f21736f121_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac086469b8d9c048538c968b325830fcf5034b862acd7f47b678e485fd2f1271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac086469b8d9c048538c968b325830fcf5034b862acd7f47b678e485fd2f1271->enter($__internal_ac086469b8d9c048538c968b325830fcf5034b862acd7f47b678e485fd2f1271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b414a34451c51ff8aad715519a4563eb5bb26b69f1eed009a2e3af8b45d31d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b414a34451c51ff8aad715519a4563eb5bb26b69f1eed009a2e3af8b45d31d48->enter($__internal_b414a34451c51ff8aad715519a4563eb5bb26b69f1eed009a2e3af8b45d31d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b414a34451c51ff8aad715519a4563eb5bb26b69f1eed009a2e3af8b45d31d48->leave($__internal_b414a34451c51ff8aad715519a4563eb5bb26b69f1eed009a2e3af8b45d31d48_prof);

        
        $__internal_ac086469b8d9c048538c968b325830fcf5034b862acd7f47b678e485fd2f1271->leave($__internal_ac086469b8d9c048538c968b325830fcf5034b862acd7f47b678e485fd2f1271_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_40978f016644ce2919a5451b657e8c28fda7a4acf95585852d0b009e0cc28e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40978f016644ce2919a5451b657e8c28fda7a4acf95585852d0b009e0cc28e45->enter($__internal_40978f016644ce2919a5451b657e8c28fda7a4acf95585852d0b009e0cc28e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b983387acd5105cb7b0846b27aab1676d8697dc707e1979999a6fdff0554a945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b983387acd5105cb7b0846b27aab1676d8697dc707e1979999a6fdff0554a945->enter($__internal_b983387acd5105cb7b0846b27aab1676d8697dc707e1979999a6fdff0554a945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b983387acd5105cb7b0846b27aab1676d8697dc707e1979999a6fdff0554a945->leave($__internal_b983387acd5105cb7b0846b27aab1676d8697dc707e1979999a6fdff0554a945_prof);

        
        $__internal_40978f016644ce2919a5451b657e8c28fda7a4acf95585852d0b009e0cc28e45->leave($__internal_40978f016644ce2919a5451b657e8c28fda7a4acf95585852d0b009e0cc28e45_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf44d7588a53b5f28ba26b0bf6e36e655d523e6c77450abdc2f28e1d362d8594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf44d7588a53b5f28ba26b0bf6e36e655d523e6c77450abdc2f28e1d362d8594->enter($__internal_bf44d7588a53b5f28ba26b0bf6e36e655d523e6c77450abdc2f28e1d362d8594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5865cb3553917bb4b14deabdf85a0d409aeb99cb3e1ed620764afe1eba522ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5865cb3553917bb4b14deabdf85a0d409aeb99cb3e1ed620764afe1eba522ce2->enter($__internal_5865cb3553917bb4b14deabdf85a0d409aeb99cb3e1ed620764afe1eba522ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_5865cb3553917bb4b14deabdf85a0d409aeb99cb3e1ed620764afe1eba522ce2->leave($__internal_5865cb3553917bb4b14deabdf85a0d409aeb99cb3e1ed620764afe1eba522ce2_prof);

        
        $__internal_bf44d7588a53b5f28ba26b0bf6e36e655d523e6c77450abdc2f28e1d362d8594->leave($__internal_bf44d7588a53b5f28ba26b0bf6e36e655d523e6c77450abdc2f28e1d362d8594_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/dgasch/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
