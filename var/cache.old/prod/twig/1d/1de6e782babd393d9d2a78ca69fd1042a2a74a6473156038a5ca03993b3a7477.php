<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_c00e37faa9f57440271549d71dca0080f2d1dad0f41c6e34b99f97e271ebf9bc extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : null), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "primary_key_field_name", array()));
        // line 5
        $context["__internal_e2c3724b85170a9417d50c6eb09b928d8248c37f539f186f6ecf8c713cab8a9d"] = $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", array()), array(),         // line 5
(isset($context["__internal_e2c3724b85170a9417d50c6eb09b928d8248c37f539f186f6ecf8c713cab8a9d"]) ? $context["__internal_e2c3724b85170a9417d50c6eb09b928d8248c37f539f186f6ecf8c713cab8a9d"] : null)), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "label", array()), array(),         // line 5
(isset($context["__internal_e2c3724b85170a9417d50c6eb09b928d8248c37f539f186f6ecf8c713cab8a9d"]) ? $context["__internal_e2c3724b85170a9417d50c6eb09b928d8248c37f539f186f6ecf8c713cab8a9d"] : null)), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) ? $context["_entity_id"] : null));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : null)), "html", null, true);
    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "name", array()))), "html", null, true);
    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null),         // line 5
(isset($context["__internal_e2c3724b85170a9417d50c6eb09b928d8248c37f539f186f6ecf8c713cab8a9d"]) ? $context["__internal_e2c3724b85170a9417d50c6eb09b928d8248c37f539f186f6ecf8c713cab8a9d"] : null))) : (        // line 16
(isset($context["_default_title"]) ? $context["_default_title"] : null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "
    ";
    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) ? $context["delete_form"] : null), "_translation_domain" => $this->getAttribute(        // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : null), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) ? $context["_entity_config"] : null)), false);
        // line 33
        echo "
    ";
    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 58,  128 => 42,  120 => 38,  117 => 37,  112 => 33,  110 => 32,  109 => 31,  108 => 30,  107 => 29,  106 => 28,  104 => 26,  101 => 25,  94 => 22,  91 => 21,  87 => 25,  84 => 24,  81 => 21,  78 => 20,  71 => 16,  70 => 5,  68 => 16,  65 => 15,  63 => 14,  60 => 13,  54 => 11,  48 => 10,  44 => 8,  42 => 6,  41 => 5,  40 => 6,  39 => 5,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 1,  24 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:edit.html.twig", "/home/moibe/webapps/fuel_bank/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
