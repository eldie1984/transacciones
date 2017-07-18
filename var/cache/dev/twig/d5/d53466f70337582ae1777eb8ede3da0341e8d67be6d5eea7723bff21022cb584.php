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
        $__internal_88b163905e49d0ae0ee005fc2ba4e28d1debf53ef3a9e01b8773cc1a135159f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b163905e49d0ae0ee005fc2ba4e28d1debf53ef3a9e01b8773cc1a135159f3->enter($__internal_88b163905e49d0ae0ee005fc2ba4e28d1debf53ef3a9e01b8773cc1a135159f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_80878cd8510b352c760195c6f3fc198e2894f39823b679195ce60ddf41df07a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80878cd8510b352c760195c6f3fc198e2894f39823b679195ce60ddf41df07a2->enter($__internal_80878cd8510b352c760195c6f3fc198e2894f39823b679195ce60ddf41df07a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_88b163905e49d0ae0ee005fc2ba4e28d1debf53ef3a9e01b8773cc1a135159f3->leave($__internal_88b163905e49d0ae0ee005fc2ba4e28d1debf53ef3a9e01b8773cc1a135159f3_prof);

        
        $__internal_80878cd8510b352c760195c6f3fc198e2894f39823b679195ce60ddf41df07a2->leave($__internal_80878cd8510b352c760195c6f3fc198e2894f39823b679195ce60ddf41df07a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e716d344af27933356f49ee9d2de16bf6849ab9c07d3b4f2b6f3edd36cd3377f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e716d344af27933356f49ee9d2de16bf6849ab9c07d3b4f2b6f3edd36cd3377f->enter($__internal_e716d344af27933356f49ee9d2de16bf6849ab9c07d3b4f2b6f3edd36cd3377f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee343ffb277004e91afcc49b9a38bbdf5544a0d2ffdef5f868c44914ff2ef73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee343ffb277004e91afcc49b9a38bbdf5544a0d2ffdef5f868c44914ff2ef73d->enter($__internal_ee343ffb277004e91afcc49b9a38bbdf5544a0d2ffdef5f868c44914ff2ef73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ee343ffb277004e91afcc49b9a38bbdf5544a0d2ffdef5f868c44914ff2ef73d->leave($__internal_ee343ffb277004e91afcc49b9a38bbdf5544a0d2ffdef5f868c44914ff2ef73d_prof);

        
        $__internal_e716d344af27933356f49ee9d2de16bf6849ab9c07d3b4f2b6f3edd36cd3377f->leave($__internal_e716d344af27933356f49ee9d2de16bf6849ab9c07d3b4f2b6f3edd36cd3377f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca31fe9e2a0c3f285e79ac82249c3f733b03694cd42bff474ff22c98dc2ae8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca31fe9e2a0c3f285e79ac82249c3f733b03694cd42bff474ff22c98dc2ae8d9->enter($__internal_ca31fe9e2a0c3f285e79ac82249c3f733b03694cd42bff474ff22c98dc2ae8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_63321c5a2c25ef8c5ff16a811e4aeb501deacee9de690b97ccee509734b3c628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63321c5a2c25ef8c5ff16a811e4aeb501deacee9de690b97ccee509734b3c628->enter($__internal_63321c5a2c25ef8c5ff16a811e4aeb501deacee9de690b97ccee509734b3c628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_63321c5a2c25ef8c5ff16a811e4aeb501deacee9de690b97ccee509734b3c628->leave($__internal_63321c5a2c25ef8c5ff16a811e4aeb501deacee9de690b97ccee509734b3c628_prof);

        
        $__internal_ca31fe9e2a0c3f285e79ac82249c3f733b03694cd42bff474ff22c98dc2ae8d9->leave($__internal_ca31fe9e2a0c3f285e79ac82249c3f733b03694cd42bff474ff22c98dc2ae8d9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8045a151290f0ebfb78ca1165d5908820f0f06cde8c14b1e77a3899398162924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8045a151290f0ebfb78ca1165d5908820f0f06cde8c14b1e77a3899398162924->enter($__internal_8045a151290f0ebfb78ca1165d5908820f0f06cde8c14b1e77a3899398162924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0060f2efc664b61de97e9d240c6514d80ab5ae91d2033142879376a7187a29d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0060f2efc664b61de97e9d240c6514d80ab5ae91d2033142879376a7187a29d->enter($__internal_a0060f2efc664b61de97e9d240c6514d80ab5ae91d2033142879376a7187a29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a0060f2efc664b61de97e9d240c6514d80ab5ae91d2033142879376a7187a29d->leave($__internal_a0060f2efc664b61de97e9d240c6514d80ab5ae91d2033142879376a7187a29d_prof);

        
        $__internal_8045a151290f0ebfb78ca1165d5908820f0f06cde8c14b1e77a3899398162924->leave($__internal_8045a151290f0ebfb78ca1165d5908820f0f06cde8c14b1e77a3899398162924_prof);

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
