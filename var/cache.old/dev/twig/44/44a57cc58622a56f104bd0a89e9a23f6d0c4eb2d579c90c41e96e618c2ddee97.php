<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c3707e8bd3dfdf09a879afb92be1b44d03204b270b194a9ffb83d250144d03e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dc0e96e30f32c48b99a124b564f16699b62d9f506eb62913653725a41b72045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc0e96e30f32c48b99a124b564f16699b62d9f506eb62913653725a41b72045->enter($__internal_0dc0e96e30f32c48b99a124b564f16699b62d9f506eb62913653725a41b72045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1d4bdf342d8a13c4dcbad89581f111a4210c0eddb8c71631e88fcd2f70ed9534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4bdf342d8a13c4dcbad89581f111a4210c0eddb8c71631e88fcd2f70ed9534->enter($__internal_1d4bdf342d8a13c4dcbad89581f111a4210c0eddb8c71631e88fcd2f70ed9534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dc0e96e30f32c48b99a124b564f16699b62d9f506eb62913653725a41b72045->leave($__internal_0dc0e96e30f32c48b99a124b564f16699b62d9f506eb62913653725a41b72045_prof);

        
        $__internal_1d4bdf342d8a13c4dcbad89581f111a4210c0eddb8c71631e88fcd2f70ed9534->leave($__internal_1d4bdf342d8a13c4dcbad89581f111a4210c0eddb8c71631e88fcd2f70ed9534_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2daf5928e008f9b63c113634b89bf7c4c222c8dda7d35cdb8ebd4fe891b57b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2daf5928e008f9b63c113634b89bf7c4c222c8dda7d35cdb8ebd4fe891b57b46->enter($__internal_2daf5928e008f9b63c113634b89bf7c4c222c8dda7d35cdb8ebd4fe891b57b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0e90f2e78986a9da3d8e726be952584b56c4dfdfe53fa3369fb0b70ba12b0dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e90f2e78986a9da3d8e726be952584b56c4dfdfe53fa3369fb0b70ba12b0dbd->enter($__internal_0e90f2e78986a9da3d8e726be952584b56c4dfdfe53fa3369fb0b70ba12b0dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e90f2e78986a9da3d8e726be952584b56c4dfdfe53fa3369fb0b70ba12b0dbd->leave($__internal_0e90f2e78986a9da3d8e726be952584b56c4dfdfe53fa3369fb0b70ba12b0dbd_prof);

        
        $__internal_2daf5928e008f9b63c113634b89bf7c4c222c8dda7d35cdb8ebd4fe891b57b46->leave($__internal_2daf5928e008f9b63c113634b89bf7c4c222c8dda7d35cdb8ebd4fe891b57b46_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ecacce4245360e386491cd8b00cc9949b3fc13248b75e383a8f8a37a8f2fe24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ecacce4245360e386491cd8b00cc9949b3fc13248b75e383a8f8a37a8f2fe24->enter($__internal_3ecacce4245360e386491cd8b00cc9949b3fc13248b75e383a8f8a37a8f2fe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2ca2e5b68a33fa9f702d9fca507b5cf84c19497493e7529b10e95c20b6babefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca2e5b68a33fa9f702d9fca507b5cf84c19497493e7529b10e95c20b6babefa->enter($__internal_2ca2e5b68a33fa9f702d9fca507b5cf84c19497493e7529b10e95c20b6babefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ca2e5b68a33fa9f702d9fca507b5cf84c19497493e7529b10e95c20b6babefa->leave($__internal_2ca2e5b68a33fa9f702d9fca507b5cf84c19497493e7529b10e95c20b6babefa_prof);

        
        $__internal_3ecacce4245360e386491cd8b00cc9949b3fc13248b75e383a8f8a37a8f2fe24->leave($__internal_3ecacce4245360e386491cd8b00cc9949b3fc13248b75e383a8f8a37a8f2fe24_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7eb27fd9cfa7501d5b4d8f9f235948ff4d9d81b0faf79eb8acedcc848a97a1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb27fd9cfa7501d5b4d8f9f235948ff4d9d81b0faf79eb8acedcc848a97a1e3->enter($__internal_7eb27fd9cfa7501d5b4d8f9f235948ff4d9d81b0faf79eb8acedcc848a97a1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7f7438f4a25fdb9138855fda51795ac0b7f93c69757fcf0d5d14f4397483050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f7438f4a25fdb9138855fda51795ac0b7f93c69757fcf0d5d14f4397483050->enter($__internal_f7f7438f4a25fdb9138855fda51795ac0b7f93c69757fcf0d5d14f4397483050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f7f7438f4a25fdb9138855fda51795ac0b7f93c69757fcf0d5d14f4397483050->leave($__internal_f7f7438f4a25fdb9138855fda51795ac0b7f93c69757fcf0d5d14f4397483050_prof);

        
        $__internal_7eb27fd9cfa7501d5b4d8f9f235948ff4d9d81b0faf79eb8acedcc848a97a1e3->leave($__internal_7eb27fd9cfa7501d5b4d8f9f235948ff4d9d81b0faf79eb8acedcc848a97a1e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/moibe/webapps/fuel_bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
