<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_8c08a7ba8e21150a8c52376f0f155cc71abf3e0d633aa57e9dec5e66967f19c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d39198b90ea293e0787b39ed1b2b0c5a9f436b4bc12a009903b616532130fca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39198b90ea293e0787b39ed1b2b0c5a9f436b4bc12a009903b616532130fca8->enter($__internal_d39198b90ea293e0787b39ed1b2b0c5a9f436b4bc12a009903b616532130fca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_ae426c0dc229039a15ee769fe7397a72615bf375d21a6dd33be0c38a7428ca98"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
(isset($context["__internal_ae426c0dc229039a15ee769fe7397a72615bf375d21a6dd33be0c38a7428ca98"]) ? $context["__internal_ae426c0dc229039a15ee769fe7397a72615bf375d21a6dd33be0c38a7428ca98"] : $this->getContext($context, "__internal_ae426c0dc229039a15ee769fe7397a72615bf375d21a6dd33be0c38a7428ca98"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
(isset($context["__internal_ae426c0dc229039a15ee769fe7397a72615bf375d21a6dd33be0c38a7428ca98"]) ? $context["__internal_ae426c0dc229039a15ee769fe7397a72615bf375d21a6dd33be0c38a7428ca98"] : $this->getContext($context, "__internal_ae426c0dc229039a15ee769fe7397a72615bf375d21a6dd33be0c38a7428ca98"))), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d39198b90ea293e0787b39ed1b2b0c5a9f436b4bc12a009903b616532130fca8->leave($__internal_d39198b90ea293e0787b39ed1b2b0c5a9f436b4bc12a009903b616532130fca8_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1f35456826fe5286fe21b57f819ae932651c15dc43da7712bdd765c0620d6cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f35456826fe5286fe21b57f819ae932651c15dc43da7712bdd765c0620d6cb2->enter($__internal_1f35456826fe5286fe21b57f819ae932651c15dc43da7712bdd765c0620d6cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_1f35456826fe5286fe21b57f819ae932651c15dc43da7712bdd765c0620d6cb2->leave($__internal_1f35456826fe5286fe21b57f819ae932651c15dc43da7712bdd765c0620d6cb2_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_322ac680b4caf374bf1f9641ab1adb35d6d65eff474aabd9f7dec1e02c1f2722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322ac680b4caf374bf1f9641ab1adb35d6d65eff474aabd9f7dec1e02c1f2722->enter($__internal_322ac680b4caf374bf1f9641ab1adb35d6d65eff474aabd9f7dec1e02c1f2722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_322ac680b4caf374bf1f9641ab1adb35d6d65eff474aabd9f7dec1e02c1f2722->leave($__internal_322ac680b4caf374bf1f9641ab1adb35d6d65eff474aabd9f7dec1e02c1f2722_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ee4dd31c8e8633f0722b63d63c3fbaf658634481decbeb3d0fbe2a5bba680278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4dd31c8e8633f0722b63d63c3fbaf658634481decbeb3d0fbe2a5bba680278->enter($__internal_ee4dd31c8e8633f0722b63d63c3fbaf658634481decbeb3d0fbe2a5bba680278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")),         // line 5
(isset($context["__internal_ae426c0dc229039a15ee769fe7397a72615bf375d21a6dd33be0c38a7428ca98"]) ? $context["__internal_ae426c0dc229039a15ee769fe7397a72615bf375d21a6dd33be0c38a7428ca98"] : $this->getContext($context, "__internal_ae426c0dc229039a15ee769fe7397a72615bf375d21a6dd33be0c38a7428ca98")))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ee4dd31c8e8633f0722b63d63c3fbaf658634481decbeb3d0fbe2a5bba680278->leave($__internal_ee4dd31c8e8633f0722b63d63c3fbaf658634481decbeb3d0fbe2a5bba680278_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_9029b60ca9e1d1ad7b43805dce31d4db8925a9530020d083160d47e4b757bfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9029b60ca9e1d1ad7b43805dce31d4db8925a9530020d083160d47e4b757bfb4->enter($__internal_9029b60ca9e1d1ad7b43805dce31d4db8925a9530020d083160d47e4b757bfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_9029b60ca9e1d1ad7b43805dce31d4db8925a9530020d083160d47e4b757bfb4->leave($__internal_9029b60ca9e1d1ad7b43805dce31d4db8925a9530020d083160d47e4b757bfb4_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_ece151379c13d8e1e7ef2d2cabff033758607e9546af9dac70e4cf7f9baefec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece151379c13d8e1e7ef2d2cabff033758607e9546af9dac70e4cf7f9baefec5->enter($__internal_ece151379c13d8e1e7ef2d2cabff033758607e9546af9dac70e4cf7f9baefec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_ece151379c13d8e1e7ef2d2cabff033758607e9546af9dac70e4cf7f9baefec5->leave($__internal_ece151379c13d8e1e7ef2d2cabff033758607e9546af9dac70e4cf7f9baefec5_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_ec4d2ccef7f18e6b66ac4c9f3787d60e631e82089e430cac676bb3f352ac8292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4d2ccef7f18e6b66ac4c9f3787d60e631e82089e430cac676bb3f352ac8292->enter($__internal_ec4d2ccef7f18e6b66ac4c9f3787d60e631e82089e430cac676bb3f352ac8292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_ec4d2ccef7f18e6b66ac4c9f3787d60e631e82089e430cac676bb3f352ac8292->leave($__internal_ec4d2ccef7f18e6b66ac4c9f3787d60e631e82089e430cac676bb3f352ac8292_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_d19893514de320f5d87844e09c74199184d1eecbf30755e4350357320526de37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19893514de320f5d87844e09c74199184d1eecbf30755e4350357320526de37->enter($__internal_d19893514de320f5d87844e09c74199184d1eecbf30755e4350357320526de37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_d19893514de320f5d87844e09c74199184d1eecbf30755e4350357320526de37->leave($__internal_d19893514de320f5d87844e09c74199184d1eecbf30755e4350357320526de37_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  173 => 42,  165 => 38,  159 => 37,  151 => 33,  149 => 32,  148 => 31,  147 => 30,  146 => 29,  145 => 28,  143 => 26,  137 => 25,  127 => 22,  121 => 21,  114 => 25,  111 => 24,  108 => 21,  102 => 20,  92 => 16,  91 => 5,  89 => 16,  86 => 15,  84 => 14,  78 => 13,  66 => 11,  54 => 10,  47 => 8,  45 => 6,  44 => 5,  43 => 6,  42 => 5,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "/home/moibe/apps/fuel_bank/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
