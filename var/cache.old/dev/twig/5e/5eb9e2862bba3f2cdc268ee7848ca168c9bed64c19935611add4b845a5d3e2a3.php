<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_91fe5bbc256e21642a800e47db9b2e2fe3a8c2b98d8e4f285b9e1ceeb537fd14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0a27a2c99a73b21867c03d958a6f9f3a74431f85e6d3b66d523b3c76c5aca2b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a27a2c99a73b21867c03d958a6f9f3a74431f85e6d3b66d523b3c76c5aca2b4->enter($__internal_0a27a2c99a73b21867c03d958a6f9f3a74431f85e6d3b66d523b3c76c5aca2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2b7e928f8ab5f86fdfce659ce78467ac9ea5fff1c7acbf87535f049591b6f2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7e928f8ab5f86fdfce659ce78467ac9ea5fff1c7acbf87535f049591b6f2ec->enter($__internal_2b7e928f8ab5f86fdfce659ce78467ac9ea5fff1c7acbf87535f049591b6f2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a27a2c99a73b21867c03d958a6f9f3a74431f85e6d3b66d523b3c76c5aca2b4->leave($__internal_0a27a2c99a73b21867c03d958a6f9f3a74431f85e6d3b66d523b3c76c5aca2b4_prof);

        
        $__internal_2b7e928f8ab5f86fdfce659ce78467ac9ea5fff1c7acbf87535f049591b6f2ec->leave($__internal_2b7e928f8ab5f86fdfce659ce78467ac9ea5fff1c7acbf87535f049591b6f2ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56e727c46ece1795cb931a40264aa6bc5bf199f9929c8b88f43b82b925505393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e727c46ece1795cb931a40264aa6bc5bf199f9929c8b88f43b82b925505393->enter($__internal_56e727c46ece1795cb931a40264aa6bc5bf199f9929c8b88f43b82b925505393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfde66cec7644168340fb1349b424fbf7e0886dfcdeb4768f0cd612a526af170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfde66cec7644168340fb1349b424fbf7e0886dfcdeb4768f0cd612a526af170->enter($__internal_bfde66cec7644168340fb1349b424fbf7e0886dfcdeb4768f0cd612a526af170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bfde66cec7644168340fb1349b424fbf7e0886dfcdeb4768f0cd612a526af170->leave($__internal_bfde66cec7644168340fb1349b424fbf7e0886dfcdeb4768f0cd612a526af170_prof);

        
        $__internal_56e727c46ece1795cb931a40264aa6bc5bf199f9929c8b88f43b82b925505393->leave($__internal_56e727c46ece1795cb931a40264aa6bc5bf199f9929c8b88f43b82b925505393_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_943002c295fbdd14d3c6486d2adc30c26769e21bd1980989da089e2cc0d831c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943002c295fbdd14d3c6486d2adc30c26769e21bd1980989da089e2cc0d831c3->enter($__internal_943002c295fbdd14d3c6486d2adc30c26769e21bd1980989da089e2cc0d831c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1017a1e1b0c2da2abbe643dae6545036db58fd9b7ed2fd025c520c22865c7a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1017a1e1b0c2da2abbe643dae6545036db58fd9b7ed2fd025c520c22865c7a49->enter($__internal_1017a1e1b0c2da2abbe643dae6545036db58fd9b7ed2fd025c520c22865c7a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1017a1e1b0c2da2abbe643dae6545036db58fd9b7ed2fd025c520c22865c7a49->leave($__internal_1017a1e1b0c2da2abbe643dae6545036db58fd9b7ed2fd025c520c22865c7a49_prof);

        
        $__internal_943002c295fbdd14d3c6486d2adc30c26769e21bd1980989da089e2cc0d831c3->leave($__internal_943002c295fbdd14d3c6486d2adc30c26769e21bd1980989da089e2cc0d831c3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56f55366228bc9090e693dbd8379779099257af7108c405569616a1a4d6f442a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f55366228bc9090e693dbd8379779099257af7108c405569616a1a4d6f442a->enter($__internal_56f55366228bc9090e693dbd8379779099257af7108c405569616a1a4d6f442a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_be758edb8e21e0c365f50d086877c874ec1c6b5fa3be5837281726f8c2258f81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be758edb8e21e0c365f50d086877c874ec1c6b5fa3be5837281726f8c2258f81->enter($__internal_be758edb8e21e0c365f50d086877c874ec1c6b5fa3be5837281726f8c2258f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_be758edb8e21e0c365f50d086877c874ec1c6b5fa3be5837281726f8c2258f81->leave($__internal_be758edb8e21e0c365f50d086877c874ec1c6b5fa3be5837281726f8c2258f81_prof);

        
        $__internal_56f55366228bc9090e693dbd8379779099257af7108c405569616a1a4d6f442a->leave($__internal_56f55366228bc9090e693dbd8379779099257af7108c405569616a1a4d6f442a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/moibe/webapps/fuel_bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
