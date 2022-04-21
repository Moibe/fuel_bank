<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_fb1fe0bf9ab59c0accc6428e89237213f9bc0c8e3af7424e040316ab0f2973f6 extends Twig_Template
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
        $__internal_50ea0e7229e7fbe30d07cbedb8aaab83c4cd3dcf01d12ca42799e59975ad33ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ea0e7229e7fbe30d07cbedb8aaab83c4cd3dcf01d12ca42799e59975ad33ff->enter($__internal_50ea0e7229e7fbe30d07cbedb8aaab83c4cd3dcf01d12ca42799e59975ad33ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_75b6f4d7a82eca2622049c4222c2a611f0e30dbac0a9e031f4bb9ba31926a09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b6f4d7a82eca2622049c4222c2a611f0e30dbac0a9e031f4bb9ba31926a09f->enter($__internal_75b6f4d7a82eca2622049c4222c2a611f0e30dbac0a9e031f4bb9ba31926a09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_50ea0e7229e7fbe30d07cbedb8aaab83c4cd3dcf01d12ca42799e59975ad33ff->leave($__internal_50ea0e7229e7fbe30d07cbedb8aaab83c4cd3dcf01d12ca42799e59975ad33ff_prof);

        
        $__internal_75b6f4d7a82eca2622049c4222c2a611f0e30dbac0a9e031f4bb9ba31926a09f->leave($__internal_75b6f4d7a82eca2622049c4222c2a611f0e30dbac0a9e031f4bb9ba31926a09f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a72e8f6dec77897f4da9e5d4cbf687e583abdc909087c71420b4025c1d5bcb9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72e8f6dec77897f4da9e5d4cbf687e583abdc909087c71420b4025c1d5bcb9e->enter($__internal_a72e8f6dec77897f4da9e5d4cbf687e583abdc909087c71420b4025c1d5bcb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67cab49023a6029ca533fea247d935e97525927811c2ad00fa4069b5342e87cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cab49023a6029ca533fea247d935e97525927811c2ad00fa4069b5342e87cd->enter($__internal_67cab49023a6029ca533fea247d935e97525927811c2ad00fa4069b5342e87cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_67cab49023a6029ca533fea247d935e97525927811c2ad00fa4069b5342e87cd->leave($__internal_67cab49023a6029ca533fea247d935e97525927811c2ad00fa4069b5342e87cd_prof);

        
        $__internal_a72e8f6dec77897f4da9e5d4cbf687e583abdc909087c71420b4025c1d5bcb9e->leave($__internal_a72e8f6dec77897f4da9e5d4cbf687e583abdc909087c71420b4025c1d5bcb9e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5194118372e62c4c2df9ef06df9820a244051cf3c5a25c5457a42d90ebd80310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5194118372e62c4c2df9ef06df9820a244051cf3c5a25c5457a42d90ebd80310->enter($__internal_5194118372e62c4c2df9ef06df9820a244051cf3c5a25c5457a42d90ebd80310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_60c135bfbcbf66fd693bffcdceae84b8797fc8b4c4ff4bb604451e897141ae93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c135bfbcbf66fd693bffcdceae84b8797fc8b4c4ff4bb604451e897141ae93->enter($__internal_60c135bfbcbf66fd693bffcdceae84b8797fc8b4c4ff4bb604451e897141ae93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_60c135bfbcbf66fd693bffcdceae84b8797fc8b4c4ff4bb604451e897141ae93->leave($__internal_60c135bfbcbf66fd693bffcdceae84b8797fc8b4c4ff4bb604451e897141ae93_prof);

        
        $__internal_5194118372e62c4c2df9ef06df9820a244051cf3c5a25c5457a42d90ebd80310->leave($__internal_5194118372e62c4c2df9ef06df9820a244051cf3c5a25c5457a42d90ebd80310_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c1b2846ac13f2788ca9de538ced6bf78e7ced47e2d690539e0ff9bb3d431063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1b2846ac13f2788ca9de538ced6bf78e7ced47e2d690539e0ff9bb3d431063->enter($__internal_9c1b2846ac13f2788ca9de538ced6bf78e7ced47e2d690539e0ff9bb3d431063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3baab8b35416a0c490862378fe5f1e64a20607718f531dd123edc3f97fbcd0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3baab8b35416a0c490862378fe5f1e64a20607718f531dd123edc3f97fbcd0d->enter($__internal_c3baab8b35416a0c490862378fe5f1e64a20607718f531dd123edc3f97fbcd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c3baab8b35416a0c490862378fe5f1e64a20607718f531dd123edc3f97fbcd0d->leave($__internal_c3baab8b35416a0c490862378fe5f1e64a20607718f531dd123edc3f97fbcd0d_prof);

        
        $__internal_9c1b2846ac13f2788ca9de538ced6bf78e7ced47e2d690539e0ff9bb3d431063->leave($__internal_9c1b2846ac13f2788ca9de538ced6bf78e7ced47e2d690539e0ff9bb3d431063_prof);

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
", "@Twig/layout.html.twig", "/home/moibe/webapps/fuel_bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
