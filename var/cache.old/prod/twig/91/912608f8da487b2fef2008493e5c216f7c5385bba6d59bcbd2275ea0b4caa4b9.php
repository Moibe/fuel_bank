<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ba4b90d5fcf090ae39578db3ee3d118a06d69c29e2b588f2514ab1cd5b5b21dc extends Twig_Template
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
        $__internal_0f1fd81f615031fc19c282afc1cf1465ea593d63d67ce68bdb3af7e9fc9181fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1fd81f615031fc19c282afc1cf1465ea593d63d67ce68bdb3af7e9fc9181fb->enter($__internal_0f1fd81f615031fc19c282afc1cf1465ea593d63d67ce68bdb3af7e9fc9181fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        echo "</style>";
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
        </header>";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0f1fd81f615031fc19c282afc1cf1465ea593d63d67ce68bdb3af7e9fc9181fb->leave($__internal_0f1fd81f615031fc19c282afc1cf1465ea593d63d67ce68bdb3af7e9fc9181fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_810599d5a95b5b09c3f8e56db9a1ee562176a77c73f11146c30f8647439fe02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810599d5a95b5b09c3f8e56db9a1ee562176a77c73f11146c30f8647439fe02b->enter($__internal_810599d5a95b5b09c3f8e56db9a1ee562176a77c73f11146c30f8647439fe02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_810599d5a95b5b09c3f8e56db9a1ee562176a77c73f11146c30f8647439fe02b->leave($__internal_810599d5a95b5b09c3f8e56db9a1ee562176a77c73f11146c30f8647439fe02b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5543c5eed129f52ed1524e69196b918c826d146c30f5b0784a3a73cf1203ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5543c5eed129f52ed1524e69196b918c826d146c30f5b0784a3a73cf1203ff1->enter($__internal_e5543c5eed129f52ed1524e69196b918c826d146c30f5b0784a3a73cf1203ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e5543c5eed129f52ed1524e69196b918c826d146c30f5b0784a3a73cf1203ff1->leave($__internal_e5543c5eed129f52ed1524e69196b918c826d146c30f5b0784a3a73cf1203ff1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fe56aaa24ee9ff3e2a98425d60a0a35f9b666c5512ab575af5e1dbe4488c72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe56aaa24ee9ff3e2a98425d60a0a35f9b666c5512ab575af5e1dbe4488c72c->enter($__internal_0fe56aaa24ee9ff3e2a98425d60a0a35f9b666c5512ab575af5e1dbe4488c72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0fe56aaa24ee9ff3e2a98425d60a0a35f9b666c5512ab575af5e1dbe4488c72c->leave($__internal_0fe56aaa24ee9ff3e2a98425d60a0a35f9b666c5512ab575af5e1dbe4488c72c_prof);

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
        return array (  115 => 33,  104 => 10,  93 => 7,  82 => 34,  80 => 33,  72 => 26,  62 => 19,  55 => 15,  49 => 11,  47 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
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
", "@Twig/layout.html.twig", "/home/moibe/apps/fuel_bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
