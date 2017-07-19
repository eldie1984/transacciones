<?php

/* TwigBundle::layout.html.twig */
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
        $__internal_ae589b8efcb0b3fe0d688fd090cef4773d2eea657e1184780b761317e8506da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae589b8efcb0b3fe0d688fd090cef4773d2eea657e1184780b761317e8506da2->enter($__internal_ae589b8efcb0b3fe0d688fd090cef4773d2eea657e1184780b761317e8506da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_88c4de7fb90379fd17a98b49248d8e2824880fc3356ace15da1ea665536d61e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c4de7fb90379fd17a98b49248d8e2824880fc3356ace15da1ea665536d61e1->enter($__internal_88c4de7fb90379fd17a98b49248d8e2824880fc3356ace15da1ea665536d61e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_ae589b8efcb0b3fe0d688fd090cef4773d2eea657e1184780b761317e8506da2->leave($__internal_ae589b8efcb0b3fe0d688fd090cef4773d2eea657e1184780b761317e8506da2_prof);

        
        $__internal_88c4de7fb90379fd17a98b49248d8e2824880fc3356ace15da1ea665536d61e1->leave($__internal_88c4de7fb90379fd17a98b49248d8e2824880fc3356ace15da1ea665536d61e1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_67988f17aaef1c7cc3230203358e3ef26edf8159bf7e1c3c5aafe4d7b75f3405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67988f17aaef1c7cc3230203358e3ef26edf8159bf7e1c3c5aafe4d7b75f3405->enter($__internal_67988f17aaef1c7cc3230203358e3ef26edf8159bf7e1c3c5aafe4d7b75f3405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d321ca2f24fd87e9bbd45621a2e140927caa3cb260c113bf2345ee0ebb67972e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d321ca2f24fd87e9bbd45621a2e140927caa3cb260c113bf2345ee0ebb67972e->enter($__internal_d321ca2f24fd87e9bbd45621a2e140927caa3cb260c113bf2345ee0ebb67972e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d321ca2f24fd87e9bbd45621a2e140927caa3cb260c113bf2345ee0ebb67972e->leave($__internal_d321ca2f24fd87e9bbd45621a2e140927caa3cb260c113bf2345ee0ebb67972e_prof);

        
        $__internal_67988f17aaef1c7cc3230203358e3ef26edf8159bf7e1c3c5aafe4d7b75f3405->leave($__internal_67988f17aaef1c7cc3230203358e3ef26edf8159bf7e1c3c5aafe4d7b75f3405_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_141046adae17e0883c92c7bcb0c4e26b873fc54aad0ab606677a170c4471a241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141046adae17e0883c92c7bcb0c4e26b873fc54aad0ab606677a170c4471a241->enter($__internal_141046adae17e0883c92c7bcb0c4e26b873fc54aad0ab606677a170c4471a241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4c1188c80ae69cb4adb5859b1dafd8b2d35e6b8958d9373dab9ca8f2195adc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1188c80ae69cb4adb5859b1dafd8b2d35e6b8958d9373dab9ca8f2195adc49->enter($__internal_4c1188c80ae69cb4adb5859b1dafd8b2d35e6b8958d9373dab9ca8f2195adc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4c1188c80ae69cb4adb5859b1dafd8b2d35e6b8958d9373dab9ca8f2195adc49->leave($__internal_4c1188c80ae69cb4adb5859b1dafd8b2d35e6b8958d9373dab9ca8f2195adc49_prof);

        
        $__internal_141046adae17e0883c92c7bcb0c4e26b873fc54aad0ab606677a170c4471a241->leave($__internal_141046adae17e0883c92c7bcb0c4e26b873fc54aad0ab606677a170c4471a241_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e9d38050404661f7ca4d83f34e84fe43a9a6cf5b1450c83d7e28814b117230b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9d38050404661f7ca4d83f34e84fe43a9a6cf5b1450c83d7e28814b117230b->enter($__internal_6e9d38050404661f7ca4d83f34e84fe43a9a6cf5b1450c83d7e28814b117230b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78a684acc8d03fb7ee264dbef61cd20b7f8cc9b66a3c17f948c47360c3d1cb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a684acc8d03fb7ee264dbef61cd20b7f8cc9b66a3c17f948c47360c3d1cb04->enter($__internal_78a684acc8d03fb7ee264dbef61cd20b7f8cc9b66a3c17f948c47360c3d1cb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78a684acc8d03fb7ee264dbef61cd20b7f8cc9b66a3c17f948c47360c3d1cb04->leave($__internal_78a684acc8d03fb7ee264dbef61cd20b7f8cc9b66a3c17f948c47360c3d1cb04_prof);

        
        $__internal_6e9d38050404661f7ca4d83f34e84fe43a9a6cf5b1450c83d7e28814b117230b->leave($__internal_6e9d38050404661f7ca4d83f34e84fe43a9a6cf5b1450c83d7e28814b117230b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "/home/dgasch/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
