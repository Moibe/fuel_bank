<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_2db5a5802c28512a336d3bba4b88839a60fccefeebddf8ba5a801dd67d9d70b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'form_rest' => array($this, 'block_form_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_565ddece5a31dca932421a9c4832a198741eb67f7d3a5bd7055518fa1e08dd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565ddece5a31dca932421a9c4832a198741eb67f7d3a5bd7055518fa1e08dd4c->enter($__internal_565ddece5a31dca932421a9c4832a198741eb67f7d3a5bd7055518fa1e08dd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('button_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('money_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('time_widget', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 214
        echo "
";
        // line 216
        echo "
";
        // line 217
        $this->displayBlock('form_label', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('choice_label', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('radio_label', $context, $blocks);
        // line 235
        echo "
";
        // line 236
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 254
        echo "
";
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('form_row', $context, $blocks);
        // line 279
        echo "
";
        // line 280
        $this->displayBlock('collection_row', $context, $blocks);
        // line 315
        echo "
";
        // line 316
        $this->displayBlock('button_row', $context, $blocks);
        // line 321
        echo "
";
        // line 322
        $this->displayBlock('choice_row', $context, $blocks);
        // line 326
        echo "
";
        // line 327
        $this->displayBlock('date_row', $context, $blocks);
        // line 331
        echo "
";
        // line 332
        $this->displayBlock('time_row', $context, $blocks);
        // line 336
        echo "
";
        // line 337
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 341
        echo "
";
        // line 342
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 348
        echo "
";
        // line 349
        $this->displayBlock('radio_row', $context, $blocks);
        // line 355
        echo "
";
        // line 357
        $this->displayBlock('form_errors', $context, $blocks);
        // line 375
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 388
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 393
        echo "
";
        // line 394
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 398
        echo "
";
        // line 399
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 420
        echo "
";
        // line 421
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 425
        echo "
";
        // line 426
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 448
        echo "
";
        // line 449
        $this->displayBlock('form_rest', $context, $blocks);
        // line 463
        echo "
";
        // line 464
        $this->displayBlock('item_actions', $context, $blocks);
        // line 491
        echo "
";
        // line 493
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 536
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 546
        echo "
";
        // line 547
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 551
        echo "
";
        // line 553
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 558
        echo "
";
        // line 560
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_565ddece5a31dca932421a9c4832a198741eb67f7d3a5bd7055518fa1e08dd4c->leave($__internal_565ddece5a31dca932421a9c4832a198741eb67f7d3a5bd7055518fa1e08dd4c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_3ef4a12c4027e44722e1dc11860caeea6c45c1e8e83507a987e0f4d222f50ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef4a12c4027e44722e1dc11860caeea6c45c1e8e83507a987e0f4d222f50ef9->enter($__internal_3ef4a12c4027e44722e1dc11860caeea6c45c1e8e83507a987e0f4d222f50ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 24
            echo "        <input type=\"hidden\" name=\"referer\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
            echo "\"/>
    ";
        }
        
        $__internal_3ef4a12c4027e44722e1dc11860caeea6c45c1e8e83507a987e0f4d222f50ef9->leave($__internal_3ef4a12c4027e44722e1dc11860caeea6c45c1e8e83507a987e0f4d222f50ef9_prof);

    }

    // line 30
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_4b3b50ba298c9828c96d300ece2a96523bbdac4944d6a8a2e11430033a0a6c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3b50ba298c9828c96d300ece2a96523bbdac4944d6a8a2e11430033a0a6c0a->enter($__internal_4b3b50ba298c9828c96d300ece2a96523bbdac4944d6a8a2e11430033a0a6c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 31
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 33
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 34
            echo "        ";
            ob_start();
            // line 35
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 48
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 50
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_4b3b50ba298c9828c96d300ece2a96523bbdac4944d6a8a2e11430033a0a6c0a->leave($__internal_4b3b50ba298c9828c96d300ece2a96523bbdac4944d6a8a2e11430033a0a6c0a_prof);

    }

    // line 58
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_799450c8f2a366b0d6791f1001f4724c7294186ecd95f956a65bc0497731e634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799450c8f2a366b0d6791f1001f4724c7294186ecd95f956a65bc0497731e634->enter($__internal_799450c8f2a366b0d6791f1001f4724c7294186ecd95f956a65bc0497731e634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 59
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 62
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_799450c8f2a366b0d6791f1001f4724c7294186ecd95f956a65bc0497731e634->leave($__internal_799450c8f2a366b0d6791f1001f4724c7294186ecd95f956a65bc0497731e634_prof);

    }

    // line 65
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7ee60e109260d870501d604979ee69418e71c82dcf648ca746b62557fc3477c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee60e109260d870501d604979ee69418e71c82dcf648ca746b62557fc3477c9->enter($__internal_7ee60e109260d870501d604979ee69418e71c82dcf648ca746b62557fc3477c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 66
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 67
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_7ee60e109260d870501d604979ee69418e71c82dcf648ca746b62557fc3477c9->leave($__internal_7ee60e109260d870501d604979ee69418e71c82dcf648ca746b62557fc3477c9_prof);

    }

    // line 70
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a844229fade8fc77d6cc227759b58b69c93d68fceb4a7d5c5b3c001f7609401c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a844229fade8fc77d6cc227759b58b69c93d68fceb4a7d5c5b3c001f7609401c->enter($__internal_a844229fade8fc77d6cc227759b58b69c93d68fceb4a7d5c5b3c001f7609401c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 71
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 72
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a844229fade8fc77d6cc227759b58b69c93d68fceb4a7d5c5b3c001f7609401c->leave($__internal_a844229fade8fc77d6cc227759b58b69c93d68fceb4a7d5c5b3c001f7609401c_prof);

    }

    // line 75
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_607bfb1205e77d0cfeecbb2fd5d79f965e89e8602699a483d50ebe0e8709b243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607bfb1205e77d0cfeecbb2fd5d79f965e89e8602699a483d50ebe0e8709b243->enter($__internal_607bfb1205e77d0cfeecbb2fd5d79f965e89e8602699a483d50ebe0e8709b243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 76
        echo "<div class=\"input-group\">
        ";
        // line 77
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 78
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 79
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 81
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 82
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 83
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 85
        echo "    </div>";
        
        $__internal_607bfb1205e77d0cfeecbb2fd5d79f965e89e8602699a483d50ebe0e8709b243->leave($__internal_607bfb1205e77d0cfeecbb2fd5d79f965e89e8602699a483d50ebe0e8709b243_prof);

    }

    // line 88
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c742a1fce1a5a531b28bdc09c4d2a6d89e07c58937322b6727a5f1b3b285d0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c742a1fce1a5a531b28bdc09c4d2a6d89e07c58937322b6727a5f1b3b285d0fd->enter($__internal_c742a1fce1a5a531b28bdc09c4d2a6d89e07c58937322b6727a5f1b3b285d0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 89
        echo "<div class=\"input-group\">";
        // line 90
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 91
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_c742a1fce1a5a531b28bdc09c4d2a6d89e07c58937322b6727a5f1b3b285d0fd->leave($__internal_c742a1fce1a5a531b28bdc09c4d2a6d89e07c58937322b6727a5f1b3b285d0fd_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_8f2420b6e698825d7de6fb84c3060b5f800741a78355bf5682b9ce178d806e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2420b6e698825d7de6fb84c3060b5f800741a78355bf5682b9ce178d806e69->enter($__internal_8f2420b6e698825d7de6fb84c3060b5f800741a78355bf5682b9ce178d806e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 104
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 105
            echo "</div>";
        }
        
        $__internal_8f2420b6e698825d7de6fb84c3060b5f800741a78355bf5682b9ce178d806e69->leave($__internal_8f2420b6e698825d7de6fb84c3060b5f800741a78355bf5682b9ce178d806e69_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_19854a0fd69c90acf84f3ed7c97f13e207bda68857117fdba815e2a58b0e6fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19854a0fd69c90acf84f3ed7c97f13e207bda68857117fdba815e2a58b0e6fe8->enter($__internal_19854a0fd69c90acf84f3ed7c97f13e207bda68857117fdba815e2a58b0e6fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 115
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 117
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 118
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 119
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 120
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 122
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 123
                echo "</div>";
            }
        }
        
        $__internal_19854a0fd69c90acf84f3ed7c97f13e207bda68857117fdba815e2a58b0e6fe8->leave($__internal_19854a0fd69c90acf84f3ed7c97f13e207bda68857117fdba815e2a58b0e6fe8_prof);

    }

    // line 128
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2906193f05081cf2184f65c9c95e951b6a10f668d239df70cf7288a95888f31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2906193f05081cf2184f65c9c95e951b6a10f668d239df70cf7288a95888f31d->enter($__internal_2906193f05081cf2184f65c9c95e951b6a10f668d239df70cf7288a95888f31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 129
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 130
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 132
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 133
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 134
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 136
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 137
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 138
                echo "</div>";
            }
        }
        
        $__internal_2906193f05081cf2184f65c9c95e951b6a10f668d239df70cf7288a95888f31d->leave($__internal_2906193f05081cf2184f65c9c95e951b6a10f668d239df70cf7288a95888f31d_prof);

    }

    // line 143
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_eb597d2604379ee1f59a68d8c4fbe9c53a84ff7be138042bc32582aab83f2208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb597d2604379ee1f59a68d8c4fbe9c53a84ff7be138042bc32582aab83f2208->enter($__internal_eb597d2604379ee1f59a68d8c4fbe9c53a84ff7be138042bc32582aab83f2208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 144
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 145
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 146
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 147
            echo "        ";
            ob_start();
            // line 148
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 161
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 163
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_eb597d2604379ee1f59a68d8c4fbe9c53a84ff7be138042bc32582aab83f2208->leave($__internal_eb597d2604379ee1f59a68d8c4fbe9c53a84ff7be138042bc32582aab83f2208_prof);

    }

    // line 171
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f2ade0c857d7d3e9eb79801be489b06b6adc9a6baec0427145f28e73afe1e93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ade0c857d7d3e9eb79801be489b06b6adc9a6baec0427145f28e73afe1e93c->enter($__internal_f2ade0c857d7d3e9eb79801be489b06b6adc9a6baec0427145f28e73afe1e93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 172
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 173
            echo "<div class=\"control-group\">";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 175
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 176
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 177
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "</div>";
        } else {
            // line 182
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 184
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 185
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 186
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "</div>";
        }
        
        $__internal_f2ade0c857d7d3e9eb79801be489b06b6adc9a6baec0427145f28e73afe1e93c->leave($__internal_f2ade0c857d7d3e9eb79801be489b06b6adc9a6baec0427145f28e73afe1e93c_prof);

    }

    // line 193
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1a40e3ff430f9085dfe63b51dec8bfad96122b3e389ec1d7c3aa6b907a74fb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a40e3ff430f9085dfe63b51dec8bfad96122b3e389ec1d7c3aa6b907a74fb32->enter($__internal_1a40e3ff430f9085dfe63b51dec8bfad96122b3e389ec1d7c3aa6b907a74fb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 194
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 195
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 198
            echo "<div class=\"checkbox\">";
            // line 199
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 200
            echo "</div>";
        }
        
        $__internal_1a40e3ff430f9085dfe63b51dec8bfad96122b3e389ec1d7c3aa6b907a74fb32->leave($__internal_1a40e3ff430f9085dfe63b51dec8bfad96122b3e389ec1d7c3aa6b907a74fb32_prof);

    }

    // line 204
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_888884fdf353624c4c1cf28f280363ddc48ce849f987306358186065d9e7ff15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888884fdf353624c4c1cf28f280363ddc48ce849f987306358186065d9e7ff15->enter($__internal_888884fdf353624c4c1cf28f280363ddc48ce849f987306358186065d9e7ff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 205
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 206
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 207
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 209
            echo "<div class=\"radio\">";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 211
            echo "</div>";
        }
        
        $__internal_888884fdf353624c4c1cf28f280363ddc48ce849f987306358186065d9e7ff15->leave($__internal_888884fdf353624c4c1cf28f280363ddc48ce849f987306358186065d9e7ff15_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5eb695fe4afe0cfce3a05b84f3a1bb72bbc05dd8a16a0e4d67a34e10d9d318a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb695fe4afe0cfce3a05b84f3a1bb72bbc05dd8a16a0e4d67a34e10d9d318a8->enter($__internal_5eb695fe4afe0cfce3a05b84f3a1bb72bbc05dd8a16a0e4d67a34e10d9d318a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 219
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_5eb695fe4afe0cfce3a05b84f3a1bb72bbc05dd8a16a0e4d67a34e10d9d318a8->leave($__internal_5eb695fe4afe0cfce3a05b84f3a1bb72bbc05dd8a16a0e4d67a34e10d9d318a8_prof);

    }

    // line 222
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7ece622d7e6abaae97132e27ecf27699396bceab3160b8780a08a58e51bafc47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ece622d7e6abaae97132e27ecf27699396bceab3160b8780a08a58e51bafc47->enter($__internal_7ece622d7e6abaae97132e27ecf27699396bceab3160b8780a08a58e51bafc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 224
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 225
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_7ece622d7e6abaae97132e27ecf27699396bceab3160b8780a08a58e51bafc47->leave($__internal_7ece622d7e6abaae97132e27ecf27699396bceab3160b8780a08a58e51bafc47_prof);

    }

    // line 228
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_58856b7e83097d22a78afeec79725b1b998a6e4851b4d707e4ee0ffed701bcb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58856b7e83097d22a78afeec79725b1b998a6e4851b4d707e4ee0ffed701bcb4->enter($__internal_58856b7e83097d22a78afeec79725b1b998a6e4851b4d707e4ee0ffed701bcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 229
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_58856b7e83097d22a78afeec79725b1b998a6e4851b4d707e4ee0ffed701bcb4->leave($__internal_58856b7e83097d22a78afeec79725b1b998a6e4851b4d707e4ee0ffed701bcb4_prof);

    }

    // line 232
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_bfa38df0b060df8e3e8cbffcba88f15cb41262a3d33d7c8aeb37dcffa5532630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa38df0b060df8e3e8cbffcba88f15cb41262a3d33d7c8aeb37dcffa5532630->enter($__internal_bfa38df0b060df8e3e8cbffcba88f15cb41262a3d33d7c8aeb37dcffa5532630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 233
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bfa38df0b060df8e3e8cbffcba88f15cb41262a3d33d7c8aeb37dcffa5532630->leave($__internal_bfa38df0b060df8e3e8cbffcba88f15cb41262a3d33d7c8aeb37dcffa5532630_prof);

    }

    // line 236
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_bd31486d941aabb05de83f4abadfdb49a0a7d71c3b3c864838b99a01d2a83b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd31486d941aabb05de83f4abadfdb49a0a7d71c3b3c864838b99a01d2a83b40->enter($__internal_bd31486d941aabb05de83f4abadfdb49a0a7d71c3b3c864838b99a01d2a83b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 237
        echo "    ";
        // line 238
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 239
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 240
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 241
                echo "        ";
            }
            // line 242
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 243
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 244
                echo "        ";
            }
            // line 245
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 246
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 247
                echo "        ";
            }
            // line 248
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 249
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 250
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))) ? ((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))) : ($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 251
            echo "</label>
    ";
        }
        
        $__internal_bd31486d941aabb05de83f4abadfdb49a0a7d71c3b3c864838b99a01d2a83b40->leave($__internal_bd31486d941aabb05de83f4abadfdb49a0a7d71c3b3c864838b99a01d2a83b40_prof);

    }

    // line 257
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dbb5299bba71d286ea977a84750e216da30563092da0f9564f083db02704099d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb5299bba71d286ea977a84750e216da30563092da0f9564f083db02704099d->enter($__internal_dbb5299bba71d286ea977a84750e216da30563092da0f9564f083db02704099d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 258
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 259
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 261
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 263
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 264
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 266
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 267
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 274
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 275
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 277
        echo "    </div>";
        
        $__internal_dbb5299bba71d286ea977a84750e216da30563092da0f9564f083db02704099d->leave($__internal_dbb5299bba71d286ea977a84750e216da30563092da0f9564f083db02704099d_prof);

    }

    // line 280
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_9b590ff4ede5425b20c002bd1faac8b16ebfa6bf6885bbaf7df6092c474af6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b590ff4ede5425b20c002bd1faac8b16ebfa6bf6885bbaf7df6092c474af6ec->enter($__internal_9b590ff4ede5425b20c002bd1faac8b16ebfa6bf6885bbaf7df6092c474af6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 283
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 284
            echo "        ";
            ob_start();
            // line 285
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 288
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 296
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 297
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 306
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 308
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 310
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_9b590ff4ede5425b20c002bd1faac8b16ebfa6bf6885bbaf7df6092c474af6ec->leave($__internal_9b590ff4ede5425b20c002bd1faac8b16ebfa6bf6885bbaf7df6092c474af6ec_prof);

    }

    // line 316
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3f79b879df869ef2b51642df0fe5663e535d5f4715994d218296dab003a00cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f79b879df869ef2b51642df0fe5663e535d5f4715994d218296dab003a00cb8->enter($__internal_3f79b879df869ef2b51642df0fe5663e535d5f4715994d218296dab003a00cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 317
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 318
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 319
        echo "</div>";
        
        $__internal_3f79b879df869ef2b51642df0fe5663e535d5f4715994d218296dab003a00cb8->leave($__internal_3f79b879df869ef2b51642df0fe5663e535d5f4715994d218296dab003a00cb8_prof);

    }

    // line 322
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_566bd9457252bc2c1eb10be2753952120ed63fb485ad57347e878a6480de678f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566bd9457252bc2c1eb10be2753952120ed63fb485ad57347e878a6480de678f->enter($__internal_566bd9457252bc2c1eb10be2753952120ed63fb485ad57347e878a6480de678f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 323
        $context["force_error"] = true;
        // line 324
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_566bd9457252bc2c1eb10be2753952120ed63fb485ad57347e878a6480de678f->leave($__internal_566bd9457252bc2c1eb10be2753952120ed63fb485ad57347e878a6480de678f_prof);

    }

    // line 327
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_964568c3b00675b1d7979278232c30b8b7cff33009d95fbc9c125c774eaef2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964568c3b00675b1d7979278232c30b8b7cff33009d95fbc9c125c774eaef2c5->enter($__internal_964568c3b00675b1d7979278232c30b8b7cff33009d95fbc9c125c774eaef2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 328
        $context["force_error"] = true;
        // line 329
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_964568c3b00675b1d7979278232c30b8b7cff33009d95fbc9c125c774eaef2c5->leave($__internal_964568c3b00675b1d7979278232c30b8b7cff33009d95fbc9c125c774eaef2c5_prof);

    }

    // line 332
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a78157fbc529e5e269142af43468fdd5320d27b4e8f65c4be13ed70ec354edad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78157fbc529e5e269142af43468fdd5320d27b4e8f65c4be13ed70ec354edad->enter($__internal_a78157fbc529e5e269142af43468fdd5320d27b4e8f65c4be13ed70ec354edad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 333
        $context["force_error"] = true;
        // line 334
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a78157fbc529e5e269142af43468fdd5320d27b4e8f65c4be13ed70ec354edad->leave($__internal_a78157fbc529e5e269142af43468fdd5320d27b4e8f65c4be13ed70ec354edad_prof);

    }

    // line 337
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2c9e722b522fde1dbe49e0e01cc5ad65da487d04b2b3c31ef6bf1ff3570fa106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9e722b522fde1dbe49e0e01cc5ad65da487d04b2b3c31ef6bf1ff3570fa106->enter($__internal_2c9e722b522fde1dbe49e0e01cc5ad65da487d04b2b3c31ef6bf1ff3570fa106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 338
        $context["force_error"] = true;
        // line 339
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2c9e722b522fde1dbe49e0e01cc5ad65da487d04b2b3c31ef6bf1ff3570fa106->leave($__internal_2c9e722b522fde1dbe49e0e01cc5ad65da487d04b2b3c31ef6bf1ff3570fa106_prof);

    }

    // line 342
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4cccc08f34d0826e9400d6ac0d0e4a27f712e4660147f7eab464b23b34999ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cccc08f34d0826e9400d6ac0d0e4a27f712e4660147f7eab464b23b34999ca0->enter($__internal_4cccc08f34d0826e9400d6ac0d0e4a27f712e4660147f7eab464b23b34999ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 343
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 344
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 345
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 346
        echo "</div>";
        
        $__internal_4cccc08f34d0826e9400d6ac0d0e4a27f712e4660147f7eab464b23b34999ca0->leave($__internal_4cccc08f34d0826e9400d6ac0d0e4a27f712e4660147f7eab464b23b34999ca0_prof);

    }

    // line 349
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_bd2171b66141131437783387bbe2659e2a7443de664d50be54697082ddd00180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2171b66141131437783387bbe2659e2a7443de664d50be54697082ddd00180->enter($__internal_bd2171b66141131437783387bbe2659e2a7443de664d50be54697082ddd00180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 350
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 351
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 352
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 353
        echo "</div>";
        
        $__internal_bd2171b66141131437783387bbe2659e2a7443de664d50be54697082ddd00180->leave($__internal_bd2171b66141131437783387bbe2659e2a7443de664d50be54697082ddd00180_prof);

    }

    // line 357
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_73aa47ee012f3c50120afe12fd8b913bddc32e578d42382e34dd7db14aac5f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73aa47ee012f3c50120afe12fd8b913bddc32e578d42382e34dd7db14aac5f4a->enter($__internal_73aa47ee012f3c50120afe12fd8b913bddc32e578d42382e34dd7db14aac5f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 358
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 359
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 360
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 361
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 362
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 363
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 365
                echo "                <ul>
                    ";
                // line 366
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 367
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 369
                echo "                </ul>
            ";
            }
            // line 371
            echo "        </div>
    ";
        }
        
        $__internal_73aa47ee012f3c50120afe12fd8b913bddc32e578d42382e34dd7db14aac5f4a->leave($__internal_73aa47ee012f3c50120afe12fd8b913bddc32e578d42382e34dd7db14aac5f4a_prof);

    }

    // line 375
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_a7b0cb87baaacf2c0b09f9d6d17b683b1a916586026de701991332532b088c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b0cb87baaacf2c0b09f9d6d17b683b1a916586026de701991332532b088c26->enter($__internal_a7b0cb87baaacf2c0b09f9d6d17b683b1a916586026de701991332532b088c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 378
        echo "    ";
        if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            // line 379
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 381
        echo "    ";
        if (((twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 382
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 383
            echo "    ";
        }
        // line 384
        echo "
    ";
        // line 385
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_a7b0cb87baaacf2c0b09f9d6d17b683b1a916586026de701991332532b088c26->leave($__internal_a7b0cb87baaacf2c0b09f9d6d17b683b1a916586026de701991332532b088c26_prof);

    }

    // line 388
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_39dbc962d522a90ff0f96f48daaca8d3bba694b60341b10b0c9149b120e8fd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dbc962d522a90ff0f96f48daaca8d3bba694b60341b10b0c9149b120e8fd48->enter($__internal_39dbc962d522a90ff0f96f48daaca8d3bba694b60341b10b0c9149b120e8fd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 389
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 390
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_39dbc962d522a90ff0f96f48daaca8d3bba694b60341b10b0c9149b120e8fd48->leave($__internal_39dbc962d522a90ff0f96f48daaca8d3bba694b60341b10b0c9149b120e8fd48_prof);

    }

    // line 394
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_f197f5b38a06b1e816c430b15f743395a335fa149ee47e8809e64fa4631c2440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f197f5b38a06b1e816c430b15f743395a335fa149ee47e8809e64fa4631c2440->enter($__internal_f197f5b38a06b1e816c430b15f743395a335fa149ee47e8809e64fa4631c2440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 395
        echo "    ";
        $context["force_error"] = true;
        // line 396
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_f197f5b38a06b1e816c430b15f743395a335fa149ee47e8809e64fa4631c2440->leave($__internal_f197f5b38a06b1e816c430b15f743395a335fa149ee47e8809e64fa4631c2440_prof);

    }

    // line 399
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_43a62884370207e78e51555caf5d926827a90359c2ee33462dc24d86dcd80c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a62884370207e78e51555caf5d926827a90359c2ee33462dc24d86dcd80c90->enter($__internal_43a62884370207e78e51555caf5d926827a90359c2ee33462dc24d86dcd80c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 400
        ob_start();
        // line 401
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 402
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 403
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 404
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 406
        echo "
        <div class=\"row\">
            ";
        // line 408
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 409
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 410
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 413
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 414
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_43a62884370207e78e51555caf5d926827a90359c2ee33462dc24d86dcd80c90->leave($__internal_43a62884370207e78e51555caf5d926827a90359c2ee33462dc24d86dcd80c90_prof);

    }

    // line 421
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_3136c6c086571713f74e19868374d0ad3e6d70e6f3c2671e8a787953bf73dd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3136c6c086571713f74e19868374d0ad3e6d70e6f3c2671e8a787953bf73dd4d->enter($__internal_3136c6c086571713f74e19868374d0ad3e6d70e6f3c2671e8a787953bf73dd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 422
        echo "    ";
        $context["force_error"] = true;
        // line 423
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_3136c6c086571713f74e19868374d0ad3e6d70e6f3c2671e8a787953bf73dd4d->leave($__internal_3136c6c086571713f74e19868374d0ad3e6d70e6f3c2671e8a787953bf73dd4d_prof);

    }

    // line 426
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_03db9d445a242a0c7d66be13e4ddecc330d87f98e2fc7edf4d91f786e8bd2b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03db9d445a242a0c7d66be13e4ddecc330d87f98e2fc7edf4d91f786e8bd2b81->enter($__internal_03db9d445a242a0c7d66be13e4ddecc330d87f98e2fc7edf4d91f786e8bd2b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 427
        ob_start();
        // line 428
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 429
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 430
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 431
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 433
        echo "
        ";
        // line 434
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 435
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 436
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 437
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 438
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 441
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 442
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 445
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_03db9d445a242a0c7d66be13e4ddecc330d87f98e2fc7edf4d91f786e8bd2b81->leave($__internal_03db9d445a242a0c7d66be13e4ddecc330d87f98e2fc7edf4d91f786e8bd2b81_prof);

    }

    // line 449
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_77f0c2a87c86db19d8435c7ed23db6137e2f21e398d4975905e5604d32dc0eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f0c2a87c86db19d8435c7ed23db6137e2f21e398d4975905e5604d32dc0eef->enter($__internal_77f0c2a87c86db19d8435c7ed23db6137e2f21e398d4975905e5604d32dc0eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 450
        $this->displayParentBlock("form_rest", $context, $blocks);
        // line 451
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 452
            echo "        <div class=\"row\">
            <div class=\"col-xs-12 form-actions\">
                <div class=\"form-group\">
                    <div id=\"form-actions-row\">";
            // line 456
            $this->displayBlock("item_actions", $context, $blocks);
            // line 457
            echo "</div>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_77f0c2a87c86db19d8435c7ed23db6137e2f21e398d4975905e5604d32dc0eef->leave($__internal_77f0c2a87c86db19d8435c7ed23db6137e2f21e398d4975905e5604d32dc0eef_prof);

    }

    // line 464
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_b87de3a5288c571ab92044c721cb8867b68b4743cb06e917c3d7a9d11e7fd585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87de3a5288c571ab92044c721cb8867b68b4743cb06e917c3d7a9d11e7fd585->enter($__internal_b87de3a5288c571ab92044c721cb8867b68b4743cb06e917c3d7a9d11e7fd585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 465
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 466
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 467
        echo "
    ";
        // line 469
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
    </button>

    ";
        // line 473
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 474
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 475
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 479
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 480
        echo "
    ";
        // line 481
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 482
        echo "
    ";
        // line 483
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 484
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 485
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 486
(isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 487
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 488
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 489
        echo "
";
        
        $__internal_b87de3a5288c571ab92044c721cb8867b68b4743cb06e917c3d7a9d11e7fd585->leave($__internal_b87de3a5288c571ab92044c721cb8867b68b4743cb06e917c3d7a9d11e7fd585_prof);

    }

    // line 493
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_503234eed95f12568e0af2408fc281046ffe71178b40f76a23b949c5bddc7738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503234eed95f12568e0af2408fc281046ffe71178b40f76a23b949c5bddc7738->enter($__internal_503234eed95f12568e0af2408fc281046ffe71178b40f76a23b949c5bddc7738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 494
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 495
        echo "    <div class=\"row\">
        ";
        // line 496
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 497
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 499
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 500
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 502
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 503
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 505
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 509
            echo "
                    <div class=\"box-body\">
                        ";
            // line 511
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 512
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
                echo "</p>
                        ";
            }
            // line 514
            echo "
                        <div class=\"row\">
                            ";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 517
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 518
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 521
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 526
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 527
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 528
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 531
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 532
        echo "    </div>
";
        
        $__internal_503234eed95f12568e0af2408fc281046ffe71178b40f76a23b949c5bddc7738->leave($__internal_503234eed95f12568e0af2408fc281046ffe71178b40f76a23b949c5bddc7738_prof);

    }

    // line 536
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_8b9d9992b3d8e94c981fadf6035046d8aeec4561d66b1c4a5772f91f21bc1c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9d9992b3d8e94c981fadf6035046d8aeec4561d66b1c4a5772f91f21bc1c82->enter($__internal_8b9d9992b3d8e94c981fadf6035046d8aeec4561d66b1c4a5772f91f21bc1c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 537
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 538
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 541
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 544
        echo "
";
        
        $__internal_8b9d9992b3d8e94c981fadf6035046d8aeec4561d66b1c4a5772f91f21bc1c82->leave($__internal_8b9d9992b3d8e94c981fadf6035046d8aeec4561d66b1c4a5772f91f21bc1c82_prof);

    }

    // line 547
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_124f5088af931258890e86e7a010168a82a82a1edd875fc838e6af07b04ad932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124f5088af931258890e86e7a010168a82a82a1edd875fc838e6af07b04ad932->enter($__internal_124f5088af931258890e86e7a010168a82a82a1edd875fc838e6af07b04ad932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 548
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 549
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_124f5088af931258890e86e7a010168a82a82a1edd875fc838e6af07b04ad932->leave($__internal_124f5088af931258890e86e7a010168a82a82a1edd875fc838e6af07b04ad932_prof);

    }

    // line 553
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_37c18d97ec6e14189c3a5d485a43678c2a87606a486a53c5cb6f468cd1708b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c18d97ec6e14189c3a5d485a43678c2a87606a486a53c5cb6f468cd1708b91->enter($__internal_37c18d97ec6e14189c3a5d485a43678c2a87606a486a53c5cb6f468cd1708b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 554
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_37c18d97ec6e14189c3a5d485a43678c2a87606a486a53c5cb6f468cd1708b91->leave($__internal_37c18d97ec6e14189c3a5d485a43678c2a87606a486a53c5cb6f468cd1708b91_prof);

    }

    // line 560
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_6fd6aa40e8bbdd3e9369f7ae8ee2177eb8bc20e584bf7a869c061b60675bc78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd6aa40e8bbdd3e9369f7ae8ee2177eb8bc20e584bf7a869c061b60675bc78f->enter($__internal_6fd6aa40e8bbdd3e9369f7ae8ee2177eb8bc20e584bf7a869c061b60675bc78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 561
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 562
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 563
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 564
            echo "            <h2>
                ";
            // line 565
            if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 566
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 569
        echo "
        ";
        // line 570
        if ((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 571
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 573
        echo "    </div>
";
        
        $__internal_6fd6aa40e8bbdd3e9369f7ae8ee2177eb8bc20e584bf7a869c061b60675bc78f->leave($__internal_6fd6aa40e8bbdd3e9369f7ae8ee2177eb8bc20e584bf7a869c061b60675bc78f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1712 => 573,  1706 => 571,  1704 => 570,  1701 => 569,  1694 => 566,  1688 => 565,  1685 => 564,  1683 => 563,  1678 => 562,  1675 => 561,  1669 => 560,  1659 => 554,  1653 => 553,  1646 => 549,  1643 => 548,  1637 => 547,  1629 => 544,  1627 => 541,  1626 => 538,  1624 => 537,  1618 => 536,  1610 => 532,  1604 => 531,  1594 => 528,  1589 => 527,  1583 => 526,  1574 => 521,  1564 => 518,  1559 => 517,  1554 => 516,  1550 => 514,  1544 => 512,  1542 => 511,  1538 => 509,  1530 => 505,  1524 => 503,  1522 => 502,  1518 => 500,  1516 => 499,  1510 => 497,  1505 => 496,  1502 => 495,  1499 => 494,  1493 => 493,  1485 => 489,  1483 => 488,  1482 => 487,  1481 => 486,  1480 => 485,  1479 => 484,  1478 => 483,  1475 => 482,  1473 => 481,  1470 => 480,  1468 => 479,  1467 => 477,  1464 => 476,  1462 => 475,  1461 => 474,  1460 => 473,  1454 => 470,  1451 => 469,  1448 => 467,  1445 => 466,  1442 => 465,  1436 => 464,  1424 => 457,  1422 => 456,  1417 => 452,  1415 => 451,  1413 => 450,  1407 => 449,  1398 => 445,  1392 => 442,  1388 => 441,  1382 => 438,  1378 => 437,  1375 => 436,  1372 => 435,  1370 => 434,  1367 => 433,  1361 => 431,  1359 => 430,  1355 => 429,  1352 => 428,  1350 => 427,  1344 => 426,  1334 => 423,  1331 => 422,  1325 => 421,  1312 => 414,  1307 => 413,  1301 => 410,  1298 => 409,  1296 => 408,  1292 => 406,  1284 => 404,  1281 => 403,  1279 => 402,  1276 => 401,  1274 => 400,  1268 => 399,  1258 => 396,  1255 => 395,  1249 => 394,  1239 => 390,  1236 => 389,  1230 => 388,  1223 => 385,  1220 => 384,  1217 => 383,  1214 => 382,  1211 => 381,  1205 => 379,  1202 => 378,  1196 => 375,  1187 => 371,  1183 => 369,  1174 => 367,  1170 => 366,  1167 => 365,  1161 => 363,  1159 => 362,  1155 => 361,  1152 => 360,  1149 => 359,  1146 => 358,  1140 => 357,  1133 => 353,  1131 => 352,  1129 => 351,  1121 => 350,  1115 => 349,  1108 => 346,  1106 => 345,  1104 => 344,  1096 => 343,  1090 => 342,  1083 => 339,  1081 => 338,  1075 => 337,  1068 => 334,  1066 => 333,  1060 => 332,  1053 => 329,  1051 => 328,  1045 => 327,  1038 => 324,  1036 => 323,  1030 => 322,  1023 => 319,  1021 => 318,  1015 => 317,  1009 => 316,  997 => 310,  992 => 308,  988 => 306,  974 => 297,  968 => 296,  957 => 288,  952 => 285,  949 => 284,  947 => 283,  941 => 281,  935 => 280,  928 => 277,  922 => 275,  920 => 274,  918 => 272,  911 => 267,  905 => 266,  901 => 264,  899 => 263,  897 => 261,  895 => 260,  887 => 259,  885 => 258,  879 => 257,  870 => 251,  868 => 250,  866 => 249,  851 => 248,  848 => 247,  845 => 246,  842 => 245,  839 => 244,  836 => 243,  833 => 242,  830 => 241,  827 => 240,  824 => 239,  821 => 238,  819 => 237,  813 => 236,  806 => 233,  800 => 232,  793 => 229,  787 => 228,  780 => 225,  778 => 224,  772 => 222,  765 => 219,  763 => 218,  757 => 217,  749 => 211,  747 => 210,  745 => 209,  742 => 207,  740 => 206,  738 => 205,  732 => 204,  724 => 200,  722 => 199,  720 => 198,  717 => 196,  715 => 195,  713 => 194,  707 => 193,  699 => 189,  693 => 186,  692 => 185,  691 => 184,  687 => 183,  683 => 182,  680 => 180,  674 => 177,  673 => 176,  672 => 175,  668 => 174,  666 => 173,  664 => 172,  658 => 171,  646 => 165,  641 => 163,  637 => 161,  624 => 151,  619 => 148,  616 => 147,  614 => 146,  612 => 145,  610 => 144,  604 => 143,  595 => 138,  592 => 137,  584 => 136,  579 => 134,  577 => 133,  575 => 132,  572 => 130,  570 => 129,  564 => 128,  555 => 123,  553 => 122,  551 => 120,  550 => 119,  549 => 118,  548 => 117,  543 => 115,  541 => 114,  539 => 113,  536 => 111,  534 => 110,  528 => 109,  520 => 105,  518 => 104,  516 => 103,  514 => 102,  512 => 101,  508 => 100,  506 => 99,  503 => 97,  501 => 96,  495 => 95,  487 => 91,  485 => 90,  483 => 89,  477 => 88,  470 => 85,  464 => 83,  462 => 82,  460 => 81,  454 => 79,  451 => 78,  449 => 77,  446 => 76,  440 => 75,  433 => 72,  431 => 71,  425 => 70,  418 => 67,  416 => 66,  410 => 65,  403 => 62,  400 => 60,  398 => 59,  392 => 58,  380 => 52,  375 => 50,  371 => 48,  358 => 38,  353 => 35,  350 => 34,  348 => 33,  346 => 31,  340 => 30,  329 => 24,  327 => 23,  325 => 21,  319 => 18,  317 => 17,  314 => 16,  311 => 15,  309 => 13,  308 => 12,  307 => 11,  306 => 9,  305 => 8,  304 => 7,  302 => 5,  300 => 4,  294 => 3,  287 => 560,  284 => 558,  282 => 553,  279 => 551,  277 => 547,  274 => 546,  272 => 536,  269 => 534,  267 => 493,  264 => 491,  262 => 464,  259 => 463,  257 => 449,  254 => 448,  252 => 426,  249 => 425,  247 => 421,  244 => 420,  242 => 399,  239 => 398,  237 => 394,  234 => 393,  232 => 388,  230 => 375,  228 => 357,  225 => 355,  223 => 349,  220 => 348,  218 => 342,  215 => 341,  213 => 337,  210 => 336,  208 => 332,  205 => 331,  203 => 327,  200 => 326,  198 => 322,  195 => 321,  193 => 316,  190 => 315,  188 => 280,  185 => 279,  183 => 257,  180 => 256,  177 => 254,  175 => 236,  172 => 235,  170 => 232,  167 => 231,  165 => 228,  162 => 227,  160 => 222,  157 => 221,  155 => 217,  152 => 216,  149 => 214,  147 => 204,  144 => 203,  142 => 193,  139 => 192,  137 => 171,  134 => 170,  132 => 143,  129 => 142,  127 => 128,  124 => 127,  122 => 109,  119 => 108,  117 => 95,  114 => 94,  112 => 88,  109 => 87,  107 => 75,  104 => 74,  102 => 70,  99 => 69,  97 => 65,  94 => 64,  92 => 58,  89 => 57,  87 => 30,  84 => 29,  81 => 27,  79 => 3,  76 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    {% if form.parent is empty %}
        <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
    {% endif %}
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
       returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% if value is iterable and value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is iterable and value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block form_rest %}
    {{- parent() -}}
    {% if form.parent is empty %}
        <div class=\"row\">
            <div class=\"col-xs-12 form-actions\">
                <div class=\"form-group\">
                    <div id=\"form-actions-row\">
                        {{- block('item_actions') -}}
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock form_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% for group_name, group_config in easyadmin_form_groups %}
            <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
                <div class=\"box box-default\">
                    {% if group_config.label|default(false) or group_config.icon|default(false) %}
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                {% if group_config.icon|default(false) %}
                                    <i class=\"fa fa-{{ group_config.icon }}\"></i>
                                {% endif %}
                                {{ group_config.label|trans(domain = _translation_domain)|raw }}
                            </h3>
                        </div>
                    {% endif %}

                    <div class=\"box-body\">
                        {% if group_config.help|default(false) %}
                            <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                        {% endif %}

                        <div class=\"row\">
                            {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}
                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                    {{ form_row(field) }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>
{% endblock easyadmin_widget %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/home/moibe/apps/fuel_bank/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
