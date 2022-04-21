<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d13b8a814cf2a308c9f0b4bec4d079e889cb183a9b3a6ab1059907d3f8085e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49590f494ee426068a4f726733e6e0dbcf1a8545418496d63145e1c7a01d76b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49590f494ee426068a4f726733e6e0dbcf1a8545418496d63145e1c7a01d76b7->enter($__internal_49590f494ee426068a4f726733e6e0dbcf1a8545418496d63145e1c7a01d76b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49590f494ee426068a4f726733e6e0dbcf1a8545418496d63145e1c7a01d76b7->leave($__internal_49590f494ee426068a4f726733e6e0dbcf1a8545418496d63145e1c7a01d76b7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e722da88ce3225b059d93eff02739849d279c29dff3e93dddb9b05219b79ddc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e722da88ce3225b059d93eff02739849d279c29dff3e93dddb9b05219b79ddc3->enter($__internal_e722da88ce3225b059d93eff02739849d279c29dff3e93dddb9b05219b79ddc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9eb932a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9eb932a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/9eb932a_bootstrap.min_1.css");
            // line 6
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "9eb932a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9eb932a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/9eb932a.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_e722da88ce3225b059d93eff02739849d279c29dff3e93dddb9b05219b79ddc3->leave($__internal_e722da88ce3225b059d93eff02739849d279c29dff3e93dddb9b05219b79ddc3_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0575ccc10318eb779e7fcaea6d5e39352e7f6d5aeb0ba451231645c50c57817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0575ccc10318eb779e7fcaea6d5e39352e7f6d5aeb0ba451231645c50c57817->enter($__internal_b0575ccc10318eb779e7fcaea6d5e39352e7f6d5aeb0ba451231645c50c57817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_b0575ccc10318eb779e7fcaea6d5e39352e7f6d5aeb0ba451231645c50c57817->leave($__internal_b0575ccc10318eb779e7fcaea6d5e39352e7f6d5aeb0ba451231645c50c57817_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ef77635433342fa0bf95201fd4486afaf0be8dc27206d0fa2f8164c398f9ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef77635433342fa0bf95201fd4486afaf0be8dc27206d0fa2f8164c398f9ea6->enter($__internal_3ef77635433342fa0bf95201fd4486afaf0be8dc27206d0fa2f8164c398f9ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    ";
        // line 13
        echo "    <div class=\"container\">
        <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3\">
            <div class=\"panel panel-info\" >
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Login", array(), "FOSUserBundle");
        echo "</div>
                </div>

                <div style=\"padding-top:30px\" class=\"panel-body\" >

                    ";
        // line 22
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 23
            echo "                        <div id=\"login-alert\" class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 25
        echo "                    <div>
                        <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                            </div>

                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                <input class=\"form-control\"  id=\"login-password\" type=\"password\" placeholder=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" name=\"_password\" required=\"required\" />
                            </div>



                            <div class=\"input-group\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input id=\"login-remember\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    </label>
                                </div>
                            </div>


                            <div style=\"margin-top:10px\" class=\"form-group\">
                                <!-- Button -->

                                <div class=\"controls\">
                                    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_3ef77635433342fa0bf95201fd4486afaf0be8dc27206d0fa2f8164c398f9ea6->leave($__internal_3ef77635433342fa0bf95201fd4486afaf0be8dc27206d0fa2f8164c398f9ea6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 53,  141 => 43,  130 => 35,  120 => 30,  114 => 27,  110 => 26,  107 => 25,  101 => 23,  99 => 22,  91 => 17,  85 => 13,  83 => 12,  77 => 11,  66 => 9,  47 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}
{% block stylesheets %}
    {% stylesheets
        'bundles/app/bootstrap/css/bootstrap.min.css'
 filter='cssrewrite' %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
    {% endstylesheets %}
{% endblock %}
{% block menu %}{% endblock %}
{% trans_default_domain 'FOSUserBundle' %}
{% block fos_user_content %}
    {% trans_default_domain 'FOSUserBundle' %}
    <div class=\"container\">
        <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3\">
            <div class=\"panel panel-info\" >
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">{% trans %}Login{% endtrans %}</div>
                </div>

                <div style=\"padding-top:30px\" class=\"panel-body\" >

                    {% if error %}
                        <div id=\"login-alert\" class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                    <div>
                        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"{{ 'security.login.username'|trans }}\">
                            </div>

                            <div style=\"margin-bottom: 25px\" class=\"input-group\">
                                <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                <input class=\"form-control\"  id=\"login-password\" type=\"password\" placeholder=\"{{ 'security.login.password'|trans }}\" name=\"_password\" required=\"required\" />
                            </div>



                            <div class=\"input-group\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input id=\"login-remember\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> {{ 'security.login.remember_me'|trans }}
                                    </label>
                                </div>
                            </div>


                            <div style=\"margin-top:10px\" class=\"form-group\">
                                <!-- Button -->

                                <div class=\"controls\">
                                    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/moibe/apps/fuel_bank/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
