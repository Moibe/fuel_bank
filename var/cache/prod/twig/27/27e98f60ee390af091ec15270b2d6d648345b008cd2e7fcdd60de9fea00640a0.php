<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2f1f50e86aeca3ad64693e4b7d93cad0804b70ed0f21e19d8de10b95fd8136d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a29402310b2cdd7458eb36c51e3a7f06cc8d1e826f0aa9199a87befcd28e11d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29402310b2cdd7458eb36c51e3a7f06cc8d1e826f0aa9199a87befcd28e11d1->enter($__internal_a29402310b2cdd7458eb36c51e3a7f06cc8d1e826f0aa9199a87befcd28e11d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>

        ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 12
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 13
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 14
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        ";
        }
        // line 19
        echo "
        <div>
            ";
        // line 21
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "        </div>
    </body>
</html>";
        
        $__internal_a29402310b2cdd7458eb36c51e3a7f06cc8d1e826f0aa9199a87befcd28e11d1->leave($__internal_a29402310b2cdd7458eb36c51e3a7f06cc8d1e826f0aa9199a87befcd28e11d1_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a1ebe72476b604c14a028be6a60384613670b56b11b65387fc87b9844d9d288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1ebe72476b604c14a028be6a60384613670b56b11b65387fc87b9844d9d288->enter($__internal_5a1ebe72476b604c14a028be6a60384613670b56b11b65387fc87b9844d9d288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        ";
        
        $__internal_5a1ebe72476b604c14a028be6a60384613670b56b11b65387fc87b9844d9d288->leave($__internal_5a1ebe72476b604c14a028be6a60384613670b56b11b65387fc87b9844d9d288_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25e124a32b1337bab74697d5b07230606fa303da9951e01bb72a9465606409fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e124a32b1337bab74697d5b07230606fa303da9951e01bb72a9465606409fa->enter($__internal_25e124a32b1337bab74697d5b07230606fa303da9951e01bb72a9465606409fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "            ";
        
        $__internal_25e124a32b1337bab74697d5b07230606fa303da9951e01bb72a9465606409fa->leave($__internal_25e124a32b1337bab74697d5b07230606fa303da9951e01bb72a9465606409fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  100 => 21,  93 => 6,  87 => 5,  78 => 23,  76 => 21,  72 => 19,  69 => 18,  63 => 17,  54 => 14,  49 => 13,  44 => 12,  39 => 11,  37 => 10,  32 => 7,  30 => 5,  24 => 1,);
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
        {% block stylesheets %}
        {% endblock %}
    </head>
    <body>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>", "FOSUserBundle::layout.html.twig", "/home/moibe/apps/fuel_bank/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
