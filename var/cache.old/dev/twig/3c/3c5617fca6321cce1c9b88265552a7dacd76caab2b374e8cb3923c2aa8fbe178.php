<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_982940a4de4f603f479a14c72dcea7a14db987adba57d79b32e55f55a27eee42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f91aa1af44a3d5944b8096b0b2ba8cfce009624d5a74fd96ee18ae925c8ff965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91aa1af44a3d5944b8096b0b2ba8cfce009624d5a74fd96ee18ae925c8ff965->enter($__internal_f91aa1af44a3d5944b8096b0b2ba8cfce009624d5a74fd96ee18ae925c8ff965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6513d0cf85a4b78acadd507b723a6f49d502fde87dfc2de5924b061d93af1127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6513d0cf85a4b78acadd507b723a6f49d502fde87dfc2de5924b061d93af1127->enter($__internal_6513d0cf85a4b78acadd507b723a6f49d502fde87dfc2de5924b061d93af1127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f91aa1af44a3d5944b8096b0b2ba8cfce009624d5a74fd96ee18ae925c8ff965->leave($__internal_f91aa1af44a3d5944b8096b0b2ba8cfce009624d5a74fd96ee18ae925c8ff965_prof);

        
        $__internal_6513d0cf85a4b78acadd507b723a6f49d502fde87dfc2de5924b061d93af1127->leave($__internal_6513d0cf85a4b78acadd507b723a6f49d502fde87dfc2de5924b061d93af1127_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1416b41ef78961d3f0ee988b886d0b68025ddaa93be5a0ccd5fd461d04cb11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1416b41ef78961d3f0ee988b886d0b68025ddaa93be5a0ccd5fd461d04cb11b->enter($__internal_b1416b41ef78961d3f0ee988b886d0b68025ddaa93be5a0ccd5fd461d04cb11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d8159e7bdab17ef80c75e8ea72a8de45307f8df0796f8424e12d64535816f906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8159e7bdab17ef80c75e8ea72a8de45307f8df0796f8424e12d64535816f906->enter($__internal_d8159e7bdab17ef80c75e8ea72a8de45307f8df0796f8424e12d64535816f906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d8159e7bdab17ef80c75e8ea72a8de45307f8df0796f8424e12d64535816f906->leave($__internal_d8159e7bdab17ef80c75e8ea72a8de45307f8df0796f8424e12d64535816f906_prof);

        
        $__internal_b1416b41ef78961d3f0ee988b886d0b68025ddaa93be5a0ccd5fd461d04cb11b->leave($__internal_b1416b41ef78961d3f0ee988b886d0b68025ddaa93be5a0ccd5fd461d04cb11b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/moibe/webapps/fuel_bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
