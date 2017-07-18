<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_088e3193ef70bb6bafbdb5b67faf1b58e27d448c89ca0ff9004d8adcb50a3518 extends Twig_Template
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
        $__internal_dfcd4d25fd2866609761f513234916748ed0e9be820ef5d33bc77440d2e26b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfcd4d25fd2866609761f513234916748ed0e9be820ef5d33bc77440d2e26b10->enter($__internal_dfcd4d25fd2866609761f513234916748ed0e9be820ef5d33bc77440d2e26b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5b87034ab763ed66c3f80f7699057585fa4b57a74433c236f031806141eb77b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b87034ab763ed66c3f80f7699057585fa4b57a74433c236f031806141eb77b4->enter($__internal_5b87034ab763ed66c3f80f7699057585fa4b57a74433c236f031806141eb77b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_dfcd4d25fd2866609761f513234916748ed0e9be820ef5d33bc77440d2e26b10->leave($__internal_dfcd4d25fd2866609761f513234916748ed0e9be820ef5d33bc77440d2e26b10_prof);

        
        $__internal_5b87034ab763ed66c3f80f7699057585fa4b57a74433c236f031806141eb77b4->leave($__internal_5b87034ab763ed66c3f80f7699057585fa4b57a74433c236f031806141eb77b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eded4dc5a1bef14b2c4a72d6846524e21e5b1e86bd77f27a3260d78299f8e51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eded4dc5a1bef14b2c4a72d6846524e21e5b1e86bd77f27a3260d78299f8e51a->enter($__internal_eded4dc5a1bef14b2c4a72d6846524e21e5b1e86bd77f27a3260d78299f8e51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08c51402564378222cb1579e4435366eb0e36632f87f8cc1bd7ff9a98c9bb552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c51402564378222cb1579e4435366eb0e36632f87f8cc1bd7ff9a98c9bb552->enter($__internal_08c51402564378222cb1579e4435366eb0e36632f87f8cc1bd7ff9a98c9bb552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_08c51402564378222cb1579e4435366eb0e36632f87f8cc1bd7ff9a98c9bb552->leave($__internal_08c51402564378222cb1579e4435366eb0e36632f87f8cc1bd7ff9a98c9bb552_prof);

        
        $__internal_eded4dc5a1bef14b2c4a72d6846524e21e5b1e86bd77f27a3260d78299f8e51a->leave($__internal_eded4dc5a1bef14b2c4a72d6846524e21e5b1e86bd77f27a3260d78299f8e51a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_12191fe16cd4e3fcf706d084e704239062b67a08fe53b4bf9b5116774d2ee6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12191fe16cd4e3fcf706d084e704239062b67a08fe53b4bf9b5116774d2ee6da->enter($__internal_12191fe16cd4e3fcf706d084e704239062b67a08fe53b4bf9b5116774d2ee6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dadc52f01e1a6741a8c39d71e71796a7db2bf257765ad5388b386d3caa2f028d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadc52f01e1a6741a8c39d71e71796a7db2bf257765ad5388b386d3caa2f028d->enter($__internal_dadc52f01e1a6741a8c39d71e71796a7db2bf257765ad5388b386d3caa2f028d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dadc52f01e1a6741a8c39d71e71796a7db2bf257765ad5388b386d3caa2f028d->leave($__internal_dadc52f01e1a6741a8c39d71e71796a7db2bf257765ad5388b386d3caa2f028d_prof);

        
        $__internal_12191fe16cd4e3fcf706d084e704239062b67a08fe53b4bf9b5116774d2ee6da->leave($__internal_12191fe16cd4e3fcf706d084e704239062b67a08fe53b4bf9b5116774d2ee6da_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1829238b869293e6aa032368de3345df5ba53a04de53a518eb7c78c857459e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1829238b869293e6aa032368de3345df5ba53a04de53a518eb7c78c857459e2->enter($__internal_b1829238b869293e6aa032368de3345df5ba53a04de53a518eb7c78c857459e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9a0c21fc77bcbf334b46b4a093d2b3e6d49e5dd1cbdea75f0fea75e98434b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a0c21fc77bcbf334b46b4a093d2b3e6d49e5dd1cbdea75f0fea75e98434b07->enter($__internal_a9a0c21fc77bcbf334b46b4a093d2b3e6d49e5dd1cbdea75f0fea75e98434b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9a0c21fc77bcbf334b46b4a093d2b3e6d49e5dd1cbdea75f0fea75e98434b07->leave($__internal_a9a0c21fc77bcbf334b46b4a093d2b3e6d49e5dd1cbdea75f0fea75e98434b07_prof);

        
        $__internal_b1829238b869293e6aa032368de3345df5ba53a04de53a518eb7c78c857459e2->leave($__internal_b1829238b869293e6aa032368de3345df5ba53a04de53a518eb7c78c857459e2_prof);

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
", "@Twig/layout.html.twig", "/home/dgasch/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
