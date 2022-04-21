<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_d9b284c34c4b326d586790e1f7d19a76958e63077b302bc821b2a71080270cbd extends Twig_Template
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
    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter((isset($context["_easyadmin_form_type"]) ? $context["_easyadmin_form_type"] : null), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
(isset($context["value"]) ? $context["value"] : null), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()))) {
            // line 24
            echo "        <input type=\"hidden\" name=\"referer\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
            echo "\"/>
    ";
        }
    }

    // line 30
    public function block_form_widget($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
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
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : null);
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
    }

    // line 58
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 59
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : null), array(0 => "file", 1 => "hidden")))) {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 62
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 65
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 66
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 67
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 70
    public function block_button_widget($context, array $blocks = array())
    {
        // line 71
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 72
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 75
    public function block_money_widget($context, array $blocks = array())
    {
        // line 76
        echo "<div class=\"input-group\">
        ";
        // line 77
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : null), 0, 2));
        // line 78
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : null)) {
            // line 79
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 81
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 82
        if ((isset($context["prepend"]) ? $context["prepend"] : null)) {
            // line 83
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 85
        echo "    </div>";
    }

    // line 88
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 89
        echo "<div class=\"input-group\">";
        // line 90
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 91
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'errors');
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget', array("datetime" => true));
            // line 104
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time", array()), 'widget', array("datetime" => true));
            // line 105
            echo "</div>";
        }
    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : null))) {
                // line 115
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 117
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 118
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year", array()), 'widget'), "{{ month }}" =>             // line 119
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month", array()), 'widget'), "{{ day }}" =>             // line 120
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day", array()), 'widget')));
            // line 122
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : null))) {
                // line 123
                echo "</div>";
            }
        }
    }

    // line 128
    public function block_time_widget($context, array $blocks = array())
    {
        // line 129
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 130
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 132
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 133
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : null)))) {
                // line 134
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 136
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second", array()), 'widget');
            }
            // line 137
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : null)))) {
                // line 138
                echo "</div>";
            }
        }
    }

    // line 143
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 144
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
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
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
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
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : null);
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
    }

    // line 171
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 172
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 173
            echo "<div class=\"control-group\">";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 175
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 176
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 177
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 184
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 185
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 186
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "</div>";
        }
    }

    // line 193
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 194
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 195
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 198
            echo "<div class=\"checkbox\">";
            // line 199
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 200
            echo "</div>";
        }
    }

    // line 204
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 205
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : null), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 206
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null))) {
            // line 207
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 209
            echo "<div class=\"radio\">";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 211
            echo "</div>";
        }
    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        // line 218
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 219
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 222
    public function block_choice_label($context, array $blocks = array())
    {
        // line 224
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 225
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 228
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 229
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 232
    public function block_radio_label($context, array $blocks = array())
    {
        // line 233
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 236
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 237
        echo "    ";
        // line 238
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 239
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 240
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 241
                echo "        ";
            }
            // line 242
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 243
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : null)))));
                // line 244
                echo "        ";
            }
            // line 245
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : null) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : null)))) {
                // line 246
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : null));
                // line 247
                echo "        ";
            }
            // line 248
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
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
            echo (isset($context["widget"]) ? $context["widget"] : null);
            // line 250
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : null) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : null), array(), (((isset($context["translation_domain"]) ? $context["translation_domain"] : null)) ? ((isset($context["translation_domain"]) ? $context["translation_domain"] : null)) : ($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 251
            echo "</label>
    ";
        }
    }

    // line 257
    public function block_form_row($context, array $blocks = array())
    {
        // line 258
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 259
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">";
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        // line 261
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 263
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : null), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 264
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 266
            if ((null === (isset($context["data"]) ? $context["data"] : null))) {
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 274
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 275
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 277
        echo "    </div>";
    }

    // line 280
    public function block_collection_row($context, array $blocks = array())
    {
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 283
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : null), false)) : (false))) {
            // line 284
            echo "        ";
            ob_start();
            // line 285
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 288
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 296
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 297
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
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
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : null);
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 310
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : null)) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 316
    public function block_button_row($context, array $blocks = array())
    {
        // line 317
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 318
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 319
        echo "</div>";
    }

    // line 322
    public function block_choice_row($context, array $blocks = array())
    {
        // line 323
        $context["force_error"] = true;
        // line 324
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 327
    public function block_date_row($context, array $blocks = array())
    {
        // line 328
        $context["force_error"] = true;
        // line 329
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 332
    public function block_time_row($context, array $blocks = array())
    {
        // line 333
        $context["force_error"] = true;
        // line 334
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 337
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 338
        $context["force_error"] = true;
        // line 339
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 342
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 343
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">";
        // line 344
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 345
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 346
        echo "</div>";
    }

    // line 349
    public function block_radio_row($context, array $blocks = array())
    {
        // line 350
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null),  -2)), "html", null, true);
        echo "\">";
        // line 351
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 352
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 353
        echo "</div>";
    }

    // line 357
    public function block_form_errors($context, array $blocks = array())
    {
        // line 358
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null));
        // line 359
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : null) >= 1)) {
            // line 360
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 361
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : null), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 362
            if (((isset($context["error_count"]) ? $context["error_count"] : null) == 1)) {
                // line 363
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : null)), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 365
                echo "                <ul>
                    ";
                // line 366
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
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
    }

    // line 375
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 378
        echo "    ";
        if ((twig_test_iterable((isset($context["value"]) ? $context["value"] : null)) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            // line 379
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 381
        echo "    ";
        if (((twig_test_iterable((isset($context["value"]) ? $context["value"] : null)) && twig_test_empty((isset($context["value"]) ? $context["value"] : null))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 382
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 383
            echo "    ";
        }
        // line 384
        echo "
    ";
        // line 385
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
    }

    // line 388
    public function block_empty_collection($context, array $blocks = array())
    {
        // line 389
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 390
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
    }

    // line 394
    public function block_vich_file_row($context, array $blocks = array())
    {
        // line 395
        echo "    ";
        $context["force_error"] = true;
        // line 396
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 399
    public function block_vich_file_widget($context, array $blocks = array())
    {
        // line 400
        ob_start();
        // line 401
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 402
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : null), "")) : ("")))) {
            // line 403
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : null), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 404
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : null), "html", null, true);
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array()), 'row', array("label" => "action.delete"));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 421
    public function block_vich_image_row($context, array $blocks = array())
    {
        // line 422
        echo "    ";
        $context["force_error"] = true;
        // line 423
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 426
    public function block_vich_image_widget($context, array $blocks = array())
    {
        // line 427
        ob_start();
        // line 428
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 429
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file", array()), 'widget');
        echo "
        ";
        // line 430
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 431
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 433
        echo "
        ";
        // line 434
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : null), "")) : ("")))) {
            // line 435
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : null));
            // line 436
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 437
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : null), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 438
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : null)), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 441
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : null), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 442
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["download_uri"]) ? $context["download_uri"] : null)), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 445
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 449
    public function block_form_rest($context, array $blocks = array())
    {
        // line 450
        $this->displayParentBlock("form_rest", $context, $blocks);
        // line 451
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()))) {
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
    }

    // line 464
    public function block_item_actions($context, array $blocks = array())
    {
        // line 465
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "translation_domain", array());
        // line 466
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "label", array())));
        // line 467
        echo "
    ";
        // line 469
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null)), "html", null, true);
        echo "
    </button>

    ";
        // line 473
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 474
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 475
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 479
(isset($context["easyadmin"]) ? $context["easyadmin"] : null), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "primary_key_field_name", array()))));
        // line 480
        echo "
    ";
        // line 481
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 482
        echo "
    ";
        // line 483
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 484
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : null), "request_parameters" =>         // line 485
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : null), "translation_domain" =>         // line 486
(isset($context["_translation_domain"]) ? $context["_translation_domain"] : null), "trans_parameters" =>         // line 487
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : null), "item_id" =>         // line 488
(isset($context["_entity_id"]) ? $context["_entity_id"] : null)), false);
        // line 489
        echo "
";
    }

    // line 493
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        // line 494
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "translation_domain", array());
        // line 495
        echo "    <div class=\"row\">
        ";
        // line 496
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["easyadmin_form_groups"]) ? $context["easyadmin_form_groups"] : null));
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
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null));
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
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null)), "html", null, true));
                echo "</p>
                        ";
            }
            // line 514
            echo "
                        <div class=\"row\">
                            ";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
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
    }

    // line 536
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        // line 537
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 538
(isset($context["attr"]) ? $context["attr"] : null), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 541
(isset($context["autocomplete_entity_name"]) ? $context["autocomplete_entity_name"] : null)))))));
        // line 544
        echo "
";
    }

    // line 547
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        // line 548
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "vars", array()), "name", array());
        // line 549
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 553
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        // line 554
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
    }

    // line 560
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        // line 561
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "entity", array()), "translation_domain", array());
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
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 566
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null));
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
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array()), "help", array()), array(), (isset($context["_translation_domain"]) ? $context["_translation_domain"] : null)), "html", null, true));
            echo "</p>
        ";
        }
        // line 573
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1457 => 573,  1451 => 571,  1449 => 570,  1446 => 569,  1439 => 566,  1433 => 565,  1430 => 564,  1428 => 563,  1423 => 562,  1420 => 561,  1417 => 560,  1410 => 554,  1407 => 553,  1403 => 549,  1400 => 548,  1397 => 547,  1392 => 544,  1390 => 541,  1389 => 538,  1387 => 537,  1384 => 536,  1379 => 532,  1373 => 531,  1363 => 528,  1358 => 527,  1352 => 526,  1343 => 521,  1333 => 518,  1328 => 517,  1323 => 516,  1319 => 514,  1313 => 512,  1311 => 511,  1307 => 509,  1299 => 505,  1293 => 503,  1291 => 502,  1287 => 500,  1285 => 499,  1279 => 497,  1274 => 496,  1271 => 495,  1268 => 494,  1265 => 493,  1260 => 489,  1258 => 488,  1257 => 487,  1256 => 486,  1255 => 485,  1254 => 484,  1253 => 483,  1250 => 482,  1248 => 481,  1245 => 480,  1243 => 479,  1242 => 477,  1239 => 476,  1237 => 475,  1236 => 474,  1235 => 473,  1229 => 470,  1226 => 469,  1223 => 467,  1220 => 466,  1217 => 465,  1214 => 464,  1205 => 457,  1203 => 456,  1198 => 452,  1196 => 451,  1194 => 450,  1191 => 449,  1185 => 445,  1179 => 442,  1175 => 441,  1169 => 438,  1165 => 437,  1162 => 436,  1159 => 435,  1157 => 434,  1154 => 433,  1148 => 431,  1146 => 430,  1142 => 429,  1139 => 428,  1137 => 427,  1134 => 426,  1127 => 423,  1124 => 422,  1121 => 421,  1111 => 414,  1106 => 413,  1100 => 410,  1097 => 409,  1095 => 408,  1091 => 406,  1083 => 404,  1080 => 403,  1078 => 402,  1075 => 401,  1073 => 400,  1070 => 399,  1063 => 396,  1060 => 395,  1057 => 394,  1050 => 390,  1047 => 389,  1044 => 388,  1040 => 385,  1037 => 384,  1034 => 383,  1031 => 382,  1028 => 381,  1022 => 379,  1019 => 378,  1016 => 375,  1010 => 371,  1006 => 369,  997 => 367,  993 => 366,  990 => 365,  984 => 363,  982 => 362,  978 => 361,  975 => 360,  972 => 359,  969 => 358,  966 => 357,  962 => 353,  960 => 352,  958 => 351,  950 => 350,  947 => 349,  943 => 346,  941 => 345,  939 => 344,  931 => 343,  928 => 342,  924 => 339,  922 => 338,  919 => 337,  915 => 334,  913 => 333,  910 => 332,  906 => 329,  904 => 328,  901 => 327,  897 => 324,  895 => 323,  892 => 322,  888 => 319,  886 => 318,  880 => 317,  877 => 316,  868 => 310,  863 => 308,  859 => 306,  845 => 297,  839 => 296,  828 => 288,  823 => 285,  820 => 284,  818 => 283,  812 => 281,  809 => 280,  805 => 277,  799 => 275,  797 => 274,  795 => 272,  788 => 267,  782 => 266,  778 => 264,  776 => 263,  774 => 261,  772 => 260,  764 => 259,  762 => 258,  759 => 257,  753 => 251,  751 => 250,  749 => 249,  734 => 248,  731 => 247,  728 => 246,  725 => 245,  722 => 244,  719 => 243,  716 => 242,  713 => 241,  710 => 240,  707 => 239,  704 => 238,  702 => 237,  699 => 236,  695 => 233,  692 => 232,  688 => 229,  685 => 228,  681 => 225,  679 => 224,  676 => 222,  672 => 219,  670 => 218,  667 => 217,  662 => 211,  660 => 210,  658 => 209,  655 => 207,  653 => 206,  651 => 205,  648 => 204,  643 => 200,  641 => 199,  639 => 198,  636 => 196,  634 => 195,  632 => 194,  629 => 193,  624 => 189,  618 => 186,  617 => 185,  616 => 184,  612 => 183,  608 => 182,  605 => 180,  599 => 177,  598 => 176,  597 => 175,  593 => 174,  591 => 173,  589 => 172,  586 => 171,  577 => 165,  572 => 163,  568 => 161,  555 => 151,  550 => 148,  547 => 147,  545 => 146,  543 => 145,  541 => 144,  538 => 143,  532 => 138,  529 => 137,  521 => 136,  516 => 134,  514 => 133,  512 => 132,  509 => 130,  507 => 129,  504 => 128,  498 => 123,  496 => 122,  494 => 120,  493 => 119,  492 => 118,  491 => 117,  486 => 115,  484 => 114,  482 => 113,  479 => 111,  477 => 110,  474 => 109,  469 => 105,  467 => 104,  465 => 103,  463 => 102,  461 => 101,  457 => 100,  455 => 99,  452 => 97,  450 => 96,  447 => 95,  442 => 91,  440 => 90,  438 => 89,  435 => 88,  431 => 85,  425 => 83,  423 => 82,  421 => 81,  415 => 79,  412 => 78,  410 => 77,  407 => 76,  404 => 75,  400 => 72,  398 => 71,  395 => 70,  391 => 67,  389 => 66,  386 => 65,  382 => 62,  379 => 60,  377 => 59,  374 => 58,  365 => 52,  360 => 50,  356 => 48,  343 => 38,  338 => 35,  335 => 34,  333 => 33,  331 => 31,  328 => 30,  320 => 24,  318 => 23,  316 => 21,  310 => 18,  308 => 17,  305 => 16,  302 => 15,  300 => 13,  299 => 12,  298 => 11,  297 => 9,  296 => 8,  295 => 7,  293 => 5,  291 => 4,  288 => 3,  284 => 560,  281 => 558,  279 => 553,  276 => 551,  274 => 547,  271 => 546,  269 => 536,  266 => 534,  264 => 493,  261 => 491,  259 => 464,  256 => 463,  254 => 449,  251 => 448,  249 => 426,  246 => 425,  244 => 421,  241 => 420,  239 => 399,  236 => 398,  234 => 394,  231 => 393,  229 => 388,  227 => 375,  225 => 357,  222 => 355,  220 => 349,  217 => 348,  215 => 342,  212 => 341,  210 => 337,  207 => 336,  205 => 332,  202 => 331,  200 => 327,  197 => 326,  195 => 322,  192 => 321,  190 => 316,  187 => 315,  185 => 280,  182 => 279,  180 => 257,  177 => 256,  174 => 254,  172 => 236,  169 => 235,  167 => 232,  164 => 231,  162 => 228,  159 => 227,  157 => 222,  154 => 221,  152 => 217,  149 => 216,  146 => 214,  144 => 204,  141 => 203,  139 => 193,  136 => 192,  134 => 171,  131 => 170,  129 => 143,  126 => 142,  124 => 128,  121 => 127,  119 => 109,  116 => 108,  114 => 95,  111 => 94,  109 => 88,  106 => 87,  104 => 75,  101 => 74,  99 => 70,  96 => 69,  94 => 65,  91 => 64,  89 => 58,  86 => 57,  84 => 30,  81 => 29,  78 => 27,  76 => 3,  73 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/home/moibe/webapps/fuel_bank/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
