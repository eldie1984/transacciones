<?php

/* AppBundle:Default:getDir.html.twig */
class __TwigTemplate_429c90792457c2c7d255c485468cca8ea5ab1b1902f24f1114484cad734d981c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:getDir.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73b0e32a4829204af7c7291351d5f4d776362860120748c6286891e50d7b9dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b0e32a4829204af7c7291351d5f4d776362860120748c6286891e50d7b9dea->enter($__internal_73b0e32a4829204af7c7291351d5f4d776362860120748c6286891e50d7b9dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:getDir.html.twig"));

        $__internal_58cbea6411ea1f4e8344f6177be979cd1702ad7f937fe1d5b26f73f18a851d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58cbea6411ea1f4e8344f6177be979cd1702ad7f937fe1d5b26f73f18a851d7f->enter($__internal_58cbea6411ea1f4e8344f6177be979cd1702ad7f937fe1d5b26f73f18a851d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:getDir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73b0e32a4829204af7c7291351d5f4d776362860120748c6286891e50d7b9dea->leave($__internal_73b0e32a4829204af7c7291351d5f4d776362860120748c6286891e50d7b9dea_prof);

        
        $__internal_58cbea6411ea1f4e8344f6177be979cd1702ad7f937fe1d5b26f73f18a851d7f->leave($__internal_58cbea6411ea1f4e8344f6177be979cd1702ad7f937fe1d5b26f73f18a851d7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5490037311884b757514d05f06769fdaa831d2399c5107c1e000dd5a079aed3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5490037311884b757514d05f06769fdaa831d2399c5107c1e000dd5a079aed3d->enter($__internal_5490037311884b757514d05f06769fdaa831d2399c5107c1e000dd5a079aed3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7ddb4e2751f87c900edb4e80a98061cefaadefbc1eb25ab31e6c07c9f0a923a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ddb4e2751f87c900edb4e80a98061cefaadefbc1eb25ab31e6c07c9f0a923a->enter($__internal_a7ddb4e2751f87c900edb4e80a98061cefaadefbc1eb25ab31e6c07c9f0a923a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Informes list</h1>
    <table id=\"tableD\" data-toggle=\"table\" 
           data-search=\"true\"
           data-toolbar=\"#toolbar\"
                                   data-show-export=\"true\"
                                   data-minimum-count-columns=\"2\"
                                   data-page-list=\"[5, 10, 20, 50, 100, ALL]\"
                                   data-show-columns=\"true\"
                                   data-pagination=\"true\"
                                   data-show-footer=\"true\">
        <thead>
            <tr>
              ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["encabezados"]) ? $context["encabezados"] : $this->getContext($context, "encabezados")));
        foreach ($context['_seq'] as $context["_key"] => $context["encabezado"]) {
            // line 17
            echo "                <th data-field=\"";
            echo twig_escape_filter($this->env, $context["encabezado"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["encabezado"], "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encabezado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </tr>
        </thead>
    </table>
";
        
        $__internal_a7ddb4e2751f87c900edb4e80a98061cefaadefbc1eb25ab31e6c07c9f0a923a->leave($__internal_a7ddb4e2751f87c900edb4e80a98061cefaadefbc1eb25ab31e6c07c9f0a923a_prof);

        
        $__internal_5490037311884b757514d05f06769fdaa831d2399c5107c1e000dd5a079aed3d->leave($__internal_5490037311884b757514d05f06769fdaa831d2399c5107c1e000dd5a079aed3d_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85861b0021ea2f005c069a0cc07e1a21add57172e00d954247dfdd1264782429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85861b0021ea2f005c069a0cc07e1a21add57172e00d954247dfdd1264782429->enter($__internal_85861b0021ea2f005c069a0cc07e1a21add57172e00d954247dfdd1264782429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1b2d592e9a8aeafb256d11710cab6e5effa61fe32633b01b31bdd276ed3a6914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2d592e9a8aeafb256d11710cab6e5effa61fe32633b01b31bdd276ed3a6914->enter($__internal_1b2d592e9a8aeafb256d11710cab6e5effa61fe32633b01b31bdd276ed3a6914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-table/bootstrap-table.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_1b2d592e9a8aeafb256d11710cab6e5effa61fe32633b01b31bdd276ed3a6914->leave($__internal_1b2d592e9a8aeafb256d11710cab6e5effa61fe32633b01b31bdd276ed3a6914_prof);

        
        $__internal_85861b0021ea2f005c069a0cc07e1a21add57172e00d954247dfdd1264782429->leave($__internal_85861b0021ea2f005c069a0cc07e1a21add57172e00d954247dfdd1264782429_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8fce9805cc8bc98b012f54799ff793670c3b68641d90a935174eef1fba0fae3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fce9805cc8bc98b012f54799ff793670c3b68641d90a935174eef1fba0fae3c->enter($__internal_8fce9805cc8bc98b012f54799ff793670c3b68641d90a935174eef1fba0fae3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66b47903af0a0521b49352000d003ee8f1bcf213952ed3d9f576ee3bdd7b3146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b47903af0a0521b49352000d003ee8f1bcf213952ed3d9f576ee3bdd7b3146->enter($__internal_66b47903af0a0521b49352000d003ee8f1bcf213952ed3d9f576ee3bdd7b3146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-table/bootstrap-table.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-table/locale/bootstrap-table-es-AR.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-table/extensions/export/bootstrap-table-export.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        datos=";
        // line 34
        echo twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        echo ";
        \$.ajax({
            url: 'http://192.168.65.44:3000/buscar_direccion_bulk',
            crossDomain: true,
            data: JSON.stringify(datos),
            dataType: 'json',
            contentType: \"application/json\",
            type: 'POST'
        }).done(function (rawData) {
            \$('#tableD').bootstrapTable({data: rawData});
        });
        </script>
";
        
        $__internal_66b47903af0a0521b49352000d003ee8f1bcf213952ed3d9f576ee3bdd7b3146->leave($__internal_66b47903af0a0521b49352000d003ee8f1bcf213952ed3d9f576ee3bdd7b3146_prof);

        
        $__internal_8fce9805cc8bc98b012f54799ff793670c3b68641d90a935174eef1fba0fae3c->leave($__internal_8fce9805cc8bc98b012f54799ff793670c3b68641d90a935174eef1fba0fae3c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:getDir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 34,  141 => 31,  137 => 30,  133 => 29,  128 => 28,  119 => 27,  107 => 25,  102 => 24,  93 => 23,  80 => 19,  69 => 17,  65 => 16,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Informes list</h1>
    <table id=\"tableD\" data-toggle=\"table\" 
           data-search=\"true\"
           data-toolbar=\"#toolbar\"
                                   data-show-export=\"true\"
                                   data-minimum-count-columns=\"2\"
                                   data-page-list=\"[5, 10, 20, 50, 100, ALL]\"
                                   data-show-columns=\"true\"
                                   data-pagination=\"true\"
                                   data-show-footer=\"true\">
        <thead>
            <tr>
              {% for encabezado in encabezados %}
                <th data-field=\"{{encabezado}}\">{{encabezado}}</th>
                {%endfor%}
            </tr>
        </thead>
    </table>
{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-table/bootstrap-table.css')}}\">
    {% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap-table/bootstrap-table.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap-table/locale/bootstrap-table-es-AR.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{asset('js/bootstrap-table/extensions/export/bootstrap-table-export.js')}}\"></script>

    <script type=\"text/javascript\">
        datos={{ data | json_encode | raw }};
        \$.ajax({
            url: 'http://192.168.65.44:3000/buscar_direccion_bulk',
            crossDomain: true,
            data: JSON.stringify(datos),
            dataType: 'json',
            contentType: \"application/json\",
            type: 'POST'
        }).done(function (rawData) {
            \$('#tableD').bootstrapTable({data: rawData});
        });
        </script>
{% endblock %}", "AppBundle:Default:getDir.html.twig", "/home/dgasch/repo/transacciones/src/AppBundle/Resources/views/Default/getDir.html.twig");
    }
}
