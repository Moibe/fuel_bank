<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4bfd066e975fda9cbe8a0bfb09fac68ff119898790a3c686b6413dc21e3381a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b8b34fdae0b0b903bb8858021ae90fb7ad5206f8bb896c7a4a2238063e7bf51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8b34fdae0b0b903bb8858021ae90fb7ad5206f8bb896c7a4a2238063e7bf51->enter($__internal_0b8b34fdae0b0b903bb8858021ae90fb7ad5206f8bb896c7a4a2238063e7bf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5ad042a96a59921adb17d544f129a16470447f297bd0eefa5b7f36cef745368b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad042a96a59921adb17d544f129a16470447f297bd0eefa5b7f36cef745368b->enter($__internal_5ad042a96a59921adb17d544f129a16470447f297bd0eefa5b7f36cef745368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b8b34fdae0b0b903bb8858021ae90fb7ad5206f8bb896c7a4a2238063e7bf51->leave($__internal_0b8b34fdae0b0b903bb8858021ae90fb7ad5206f8bb896c7a4a2238063e7bf51_prof);

        
        $__internal_5ad042a96a59921adb17d544f129a16470447f297bd0eefa5b7f36cef745368b->leave($__internal_5ad042a96a59921adb17d544f129a16470447f297bd0eefa5b7f36cef745368b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7fdf84cd6a35fc24179dbe4f1581b2147f820a66e323865fb6fc7c0ea3c80f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fdf84cd6a35fc24179dbe4f1581b2147f820a66e323865fb6fc7c0ea3c80f2->enter($__internal_e7fdf84cd6a35fc24179dbe4f1581b2147f820a66e323865fb6fc7c0ea3c80f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18d26d1cfdfddda2302609ffa3e285b3fc6ca7b6ee76036b149a946c2169503c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d26d1cfdfddda2302609ffa3e285b3fc6ca7b6ee76036b149a946c2169503c->enter($__internal_18d26d1cfdfddda2302609ffa3e285b3fc6ca7b6ee76036b149a946c2169503c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_18d26d1cfdfddda2302609ffa3e285b3fc6ca7b6ee76036b149a946c2169503c->leave($__internal_18d26d1cfdfddda2302609ffa3e285b3fc6ca7b6ee76036b149a946c2169503c_prof);

        
        $__internal_e7fdf84cd6a35fc24179dbe4f1581b2147f820a66e323865fb6fc7c0ea3c80f2->leave($__internal_e7fdf84cd6a35fc24179dbe4f1581b2147f820a66e323865fb6fc7c0ea3c80f2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_86619c330c82ab451df39fdcb570db2ea3da8b17b651fd7b2f8afff64f3aabcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86619c330c82ab451df39fdcb570db2ea3da8b17b651fd7b2f8afff64f3aabcb->enter($__internal_86619c330c82ab451df39fdcb570db2ea3da8b17b651fd7b2f8afff64f3aabcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_682f1c9394d098b8541fda2407606288cc2907066afa78dff14e144b2dcbea02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682f1c9394d098b8541fda2407606288cc2907066afa78dff14e144b2dcbea02->enter($__internal_682f1c9394d098b8541fda2407606288cc2907066afa78dff14e144b2dcbea02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_682f1c9394d098b8541fda2407606288cc2907066afa78dff14e144b2dcbea02->leave($__internal_682f1c9394d098b8541fda2407606288cc2907066afa78dff14e144b2dcbea02_prof);

        
        $__internal_86619c330c82ab451df39fdcb570db2ea3da8b17b651fd7b2f8afff64f3aabcb->leave($__internal_86619c330c82ab451df39fdcb570db2ea3da8b17b651fd7b2f8afff64f3aabcb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_79c35348c05cae0e6a039ff249a7593c6a345b746bf905b79fdb74c548d74aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c35348c05cae0e6a039ff249a7593c6a345b746bf905b79fdb74c548d74aa2->enter($__internal_79c35348c05cae0e6a039ff249a7593c6a345b746bf905b79fdb74c548d74aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c74b3d7b5d535d1af8e380f0d3f4a892af9f5fef0ee65eaa6b290c97538255c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c74b3d7b5d535d1af8e380f0d3f4a892af9f5fef0ee65eaa6b290c97538255c->enter($__internal_3c74b3d7b5d535d1af8e380f0d3f4a892af9f5fef0ee65eaa6b290c97538255c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3c74b3d7b5d535d1af8e380f0d3f4a892af9f5fef0ee65eaa6b290c97538255c->leave($__internal_3c74b3d7b5d535d1af8e380f0d3f4a892af9f5fef0ee65eaa6b290c97538255c_prof);

        
        $__internal_79c35348c05cae0e6a039ff249a7593c6a345b746bf905b79fdb74c548d74aa2->leave($__internal_79c35348c05cae0e6a039ff249a7593c6a345b746bf905b79fdb74c548d74aa2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/moibe/webapps/fuel_bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
