<?php

/* base.html.twig */
class __TwigTemplate_dcbea8fed6ada303a8c0d3a0eb6469c0d7cce1bcd07b46b6602bc0198cd03314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6541964bf8c674fe50f0cf11ff5018197b622bf11fdf710a4b1c176d3a1aae7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6541964bf8c674fe50f0cf11ff5018197b622bf11fdf710a4b1c176d3a1aae7a->enter($__internal_6541964bf8c674fe50f0cf11ff5018197b622bf11fdf710a4b1c176d3a1aae7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c06e131779fd8e04a2e524c066d04e70e04ff25e64cc41bb7e3efa189759a527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06e131779fd8e04a2e524c066d04e70e04ff25e64cc41bb7e3efa189759a527->enter($__internal_c06e131779fd8e04a2e524c066d04e70e04ff25e64cc41bb7e3efa189759a527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_6541964bf8c674fe50f0cf11ff5018197b622bf11fdf710a4b1c176d3a1aae7a->leave($__internal_6541964bf8c674fe50f0cf11ff5018197b622bf11fdf710a4b1c176d3a1aae7a_prof);

        
        $__internal_c06e131779fd8e04a2e524c066d04e70e04ff25e64cc41bb7e3efa189759a527->leave($__internal_c06e131779fd8e04a2e524c066d04e70e04ff25e64cc41bb7e3efa189759a527_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7161079a211ced84bf69456e72d08c690e72789c7090e58efe73693320fca784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7161079a211ced84bf69456e72d08c690e72789c7090e58efe73693320fca784->enter($__internal_7161079a211ced84bf69456e72d08c690e72789c7090e58efe73693320fca784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_388a8f93c147b936efc54e284b812a03bb2c47caff002a930ec09aaa384de6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388a8f93c147b936efc54e284b812a03bb2c47caff002a930ec09aaa384de6aa->enter($__internal_388a8f93c147b936efc54e284b812a03bb2c47caff002a930ec09aaa384de6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_388a8f93c147b936efc54e284b812a03bb2c47caff002a930ec09aaa384de6aa->leave($__internal_388a8f93c147b936efc54e284b812a03bb2c47caff002a930ec09aaa384de6aa_prof);

        
        $__internal_7161079a211ced84bf69456e72d08c690e72789c7090e58efe73693320fca784->leave($__internal_7161079a211ced84bf69456e72d08c690e72789c7090e58efe73693320fca784_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e43b7fee69c3d98021c2391522603a7a61b00d77607c9fdc1ab7bdd8ce92c16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e43b7fee69c3d98021c2391522603a7a61b00d77607c9fdc1ab7bdd8ce92c16->enter($__internal_5e43b7fee69c3d98021c2391522603a7a61b00d77607c9fdc1ab7bdd8ce92c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0fd6280bc46f7a07d06b3aee35244327f33ace0aa1420a16f86844704a54a537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd6280bc46f7a07d06b3aee35244327f33ace0aa1420a16f86844704a54a537->enter($__internal_0fd6280bc46f7a07d06b3aee35244327f33ace0aa1420a16f86844704a54a537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />";
        
        $__internal_0fd6280bc46f7a07d06b3aee35244327f33ace0aa1420a16f86844704a54a537->leave($__internal_0fd6280bc46f7a07d06b3aee35244327f33ace0aa1420a16f86844704a54a537_prof);

        
        $__internal_5e43b7fee69c3d98021c2391522603a7a61b00d77607c9fdc1ab7bdd8ce92c16->leave($__internal_5e43b7fee69c3d98021c2391522603a7a61b00d77607c9fdc1ab7bdd8ce92c16_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0db10bc7e1bd238c596d8ddc6385655560b04f1fbd9f7dfce62f3a125f73261f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db10bc7e1bd238c596d8ddc6385655560b04f1fbd9f7dfce62f3a125f73261f->enter($__internal_0db10bc7e1bd238c596d8ddc6385655560b04f1fbd9f7dfce62f3a125f73261f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d98649cd37aaf8b9e24595ff86ff75bdc99cb627a00a4de0b1faadedf0ae94ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98649cd37aaf8b9e24595ff86ff75bdc99cb627a00a4de0b1faadedf0ae94ea->enter($__internal_d98649cd37aaf8b9e24595ff86ff75bdc99cb627a00a4de0b1faadedf0ae94ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d98649cd37aaf8b9e24595ff86ff75bdc99cb627a00a4de0b1faadedf0ae94ea->leave($__internal_d98649cd37aaf8b9e24595ff86ff75bdc99cb627a00a4de0b1faadedf0ae94ea_prof);

        
        $__internal_0db10bc7e1bd238c596d8ddc6385655560b04f1fbd9f7dfce62f3a125f73261f->leave($__internal_0db10bc7e1bd238c596d8ddc6385655560b04f1fbd9f7dfce62f3a125f73261f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c2f5c9856172e552de6d4de0888602d58f265b11071704fa0881ccee79705e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2f5c9856172e552de6d4de0888602d58f265b11071704fa0881ccee79705e9->enter($__internal_1c2f5c9856172e552de6d4de0888602d58f265b11071704fa0881ccee79705e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ad1942c2039968ea306ad9af22428953195bb75da973b5a634e51a767801c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad1942c2039968ea306ad9af22428953195bb75da973b5a634e51a767801c41->enter($__internal_6ad1942c2039968ea306ad9af22428953195bb75da973b5a634e51a767801c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6ad1942c2039968ea306ad9af22428953195bb75da973b5a634e51a767801c41->leave($__internal_6ad1942c2039968ea306ad9af22428953195bb75da973b5a634e51a767801c41_prof);

        
        $__internal_1c2f5c9856172e552de6d4de0888602d58f265b11071704fa0881ccee79705e9->leave($__internal_1c2f5c9856172e552de6d4de0888602d58f265b11071704fa0881ccee79705e9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 15,  134 => 14,  125 => 13,  108 => 12,  97 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 16,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
        <link href=\"{{asset('css/bootstrap/bootstrap.min.css')}}\" rel=\"stylesheet\" />
                <link href=\"{{asset('css/bootstrap/bootstrap-theme.min.css')}}\" rel=\"stylesheet\" />{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
        <script src=\"{{asset('js/jquery/jquery-1.9.1.min.js')}}\"></script>
            <script src=\"{{asset('js/bootstrap/bootstrap.min.js')}}\"></script>{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/dgasch/repo/transacciones/app/Resources/views/base.html.twig");
    }
}
