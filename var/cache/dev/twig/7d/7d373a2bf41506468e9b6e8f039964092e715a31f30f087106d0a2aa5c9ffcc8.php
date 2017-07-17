<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_db680de66e96e5ac0dc4d5d40c686a94aace465bd72fbf68da5edc00209b9f95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf20d270484018abc1e80255b44278a2a4cd83ce3e2d4dc146548509837adaac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf20d270484018abc1e80255b44278a2a4cd83ce3e2d4dc146548509837adaac->enter($__internal_bf20d270484018abc1e80255b44278a2a4cd83ce3e2d4dc146548509837adaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b78e6a345f40220f20919d705ea740954f77ec5ca8dec136c853848389a2ae75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78e6a345f40220f20919d705ea740954f77ec5ca8dec136c853848389a2ae75->enter($__internal_b78e6a345f40220f20919d705ea740954f77ec5ca8dec136c853848389a2ae75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_bf20d270484018abc1e80255b44278a2a4cd83ce3e2d4dc146548509837adaac->leave($__internal_bf20d270484018abc1e80255b44278a2a4cd83ce3e2d4dc146548509837adaac_prof);

        
        $__internal_b78e6a345f40220f20919d705ea740954f77ec5ca8dec136c853848389a2ae75->leave($__internal_b78e6a345f40220f20919d705ea740954f77ec5ca8dec136c853848389a2ae75_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_619fdc5579a54bd69ba1df9ef619cab0a5c8d2405081c37d732384eec286e9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619fdc5579a54bd69ba1df9ef619cab0a5c8d2405081c37d732384eec286e9d2->enter($__internal_619fdc5579a54bd69ba1df9ef619cab0a5c8d2405081c37d732384eec286e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f4e6970b88822ae0b1a23a8ada3dd55afef89ec229eae17a54a2ed17dd71253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4e6970b88822ae0b1a23a8ada3dd55afef89ec229eae17a54a2ed17dd71253->enter($__internal_1f4e6970b88822ae0b1a23a8ada3dd55afef89ec229eae17a54a2ed17dd71253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1f4e6970b88822ae0b1a23a8ada3dd55afef89ec229eae17a54a2ed17dd71253->leave($__internal_1f4e6970b88822ae0b1a23a8ada3dd55afef89ec229eae17a54a2ed17dd71253_prof);

        
        $__internal_619fdc5579a54bd69ba1df9ef619cab0a5c8d2405081c37d732384eec286e9d2->leave($__internal_619fdc5579a54bd69ba1df9ef619cab0a5c8d2405081c37d732384eec286e9d2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc025c54490b4c8aef4971542c092d7cc1dfa169ba083882549bac6a72e2b9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc025c54490b4c8aef4971542c092d7cc1dfa169ba083882549bac6a72e2b9d4->enter($__internal_dc025c54490b4c8aef4971542c092d7cc1dfa169ba083882549bac6a72e2b9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_79dd9d90fcf32e29990af0b17d1c2b7253e1600147edb2be819f0de4a572f912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79dd9d90fcf32e29990af0b17d1c2b7253e1600147edb2be819f0de4a572f912->enter($__internal_79dd9d90fcf32e29990af0b17d1c2b7253e1600147edb2be819f0de4a572f912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_79dd9d90fcf32e29990af0b17d1c2b7253e1600147edb2be819f0de4a572f912->leave($__internal_79dd9d90fcf32e29990af0b17d1c2b7253e1600147edb2be819f0de4a572f912_prof);

        
        $__internal_dc025c54490b4c8aef4971542c092d7cc1dfa169ba083882549bac6a72e2b9d4->leave($__internal_dc025c54490b4c8aef4971542c092d7cc1dfa169ba083882549bac6a72e2b9d4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a01427baa94783791abab364173868f87ed3185e4238b8212a863beb3dd02831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01427baa94783791abab364173868f87ed3185e4238b8212a863beb3dd02831->enter($__internal_a01427baa94783791abab364173868f87ed3185e4238b8212a863beb3dd02831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a95e5b3c989d710b64da3735e74b616f70720d3b801873cc469198ff9feed04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95e5b3c989d710b64da3735e74b616f70720d3b801873cc469198ff9feed04f->enter($__internal_a95e5b3c989d710b64da3735e74b616f70720d3b801873cc469198ff9feed04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a95e5b3c989d710b64da3735e74b616f70720d3b801873cc469198ff9feed04f->leave($__internal_a95e5b3c989d710b64da3735e74b616f70720d3b801873cc469198ff9feed04f_prof);

        
        $__internal_a01427baa94783791abab364173868f87ed3185e4238b8212a863beb3dd02831->leave($__internal_a01427baa94783791abab364173868f87ed3185e4238b8212a863beb3dd02831_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/dgasch/repo/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
