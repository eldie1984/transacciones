<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_420b333e0b4eeb830f22e15a28d31361db5f05d2c8b518b9979b365adc085f12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_663b26a601358dd1fc28a53b0d3be3a1e16e3c512826afcef3124090479ebc8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663b26a601358dd1fc28a53b0d3be3a1e16e3c512826afcef3124090479ebc8e->enter($__internal_663b26a601358dd1fc28a53b0d3be3a1e16e3c512826afcef3124090479ebc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_d395aa835ae34cb09d37450f50ed54f0b3f6efed1abccdb6f2b786956f6b1b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d395aa835ae34cb09d37450f50ed54f0b3f6efed1abccdb6f2b786956f6b1b0f->enter($__internal_d395aa835ae34cb09d37450f50ed54f0b3f6efed1abccdb6f2b786956f6b1b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_663b26a601358dd1fc28a53b0d3be3a1e16e3c512826afcef3124090479ebc8e->leave($__internal_663b26a601358dd1fc28a53b0d3be3a1e16e3c512826afcef3124090479ebc8e_prof);

        
        $__internal_d395aa835ae34cb09d37450f50ed54f0b3f6efed1abccdb6f2b786956f6b1b0f->leave($__internal_d395aa835ae34cb09d37450f50ed54f0b3f6efed1abccdb6f2b786956f6b1b0f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/dgasch/repo/transacciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
