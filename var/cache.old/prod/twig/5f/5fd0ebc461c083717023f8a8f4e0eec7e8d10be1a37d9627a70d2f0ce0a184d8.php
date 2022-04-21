<?php

/* :default:alt.html.twig */
class __TwigTemplate_854c34e7f4355f17a8357fbf027665ff2c079eb091ab40ab81eac6011720cb88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:alt.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"page\" class=\"site\">
        <div id=\"content\" class=\"site-content\">
            <div class=\"row\">
                <div id=\"primary\" class=\"col-xs-12 col-md-12\">
                    <div id=\"before-loop-area\" class=\"before-loop-area widget-area\"></div>
                    <main id=\"main\" class=\"site-main\" role=\"main\">
                        <article id=\"post-4059\" class=\"post-4059 page type-page status-publish hentry no-thumb\">
                            <div class=\"entry-content\">
                                <div class=\"elementor elementor-4059\">
                                    <div class=\"elementor-inner\">
                                        <div class=\"elementor-section-wrap\">
                                            <section class=\"elementor-element elementor-element-81q2nd7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\">
                                                <div class=\"elementor-container elementor-column-gap-default\">
                                                    <div class=\"elementor-row\">
                                                        <div class=\"elementor-element elementor-element-17ph00j elementor-column elementor-col-50 elementor-top-column\">
                                                            <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                <div class=\"elementor-widget-wrap\">
                                                                    <div class=\"elementor-element elementor-element-3cju76i invert elementor-widget elementor-widget-heading\">
                                                                        <div class=\"elementor-widget-container\">
                                                                            <h1 class=\"elementor-heading-title elementor-size-default\">Whant to Know More About Bitcoin?</h1>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"elementor-element elementor-element-nfvw2ir elementor-column elementor-col-50 elementor-top-column\">
                                                            <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                <div class=\"elementor-widget-wrap\">
                                                                    <div class=\"elementor-element elementor-element-io433bo elementor-align-right elementor-mobile-align-left elementor-widget elementor-widget-button\">
                                                                        <div class=\"elementor-widget-container\">
                                                                            <div class=\"elementor-button-wrapper\">
                                                                                <a href=\"https://ld-wp.template-help.com/wordpress_64787_v1/about-us/\" class=\"elementor-button-link elementor-button elementor-size-md\">
                                                                                    <span class=\"elementor-button-content-wrapper\">
                                                                                        <span class=\"elementor-button-text\">more info</span>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 49
            echo "                                                ";
            if ((($this->getAttribute($context["loop"], "index0", array()) % 2) == 0)) {
                // line 50
                echo "                                                    <section class=\"elementor-element elementor-element-xg0v32k elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section\"  style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["currency"], "backgroundFile"), "html", null, true);
                echo ")\" >
                                                        <div class=\"elementor-container elementor-column-gap-default\">
                                                            <div class=\"elementor-row\">
                                                                <div class=\"elementor-element elementor-element-zjxabkw elementor-column elementor-col-50 elementor-top-column\">
                                                                    <div class=\"elementor-column-wrap\">
                                                                        <div class=\"elementor-widget-wrap\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"elementor-element elementor-element-bd5d7ic elementor-column elementor-col-50 elementor-top-column\">
                                                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                        <div class=\"elementor-widget-wrap\">
                                                                            <div class=\"elementor-element elementor-element-huonkt1 elementor-widget elementor-widget-heading\">
                                                                                <div class=\"elementor-widget-container\">
                                                                                    <h2 class=\"elementor-heading-title elementor-size-default\">";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "name", array()), "html", null, true);
                echo "</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"elementor-element elementor-element-0wzlps6 elementor-widget elementor-widget-heading\">
                                                                                <div class=\"elementor-widget-container\">
                                                                                    <h3 class=\"elementor-heading-title elementor-size-default\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "price", array()), "html", null, true);
                echo " ETH</h3>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"elementor-element elementor-element-divn51d elementor-widget elementor-widget-divider\">
                                                                                <div class=\"elementor-widget-container\">
                                                                                    <div class=\"elementor-divider\">
                                                                                        <span class=\"elementor-divider-separator\"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"elementor-element elementor-element-ikbbuqt elementor-widget elementor-widget-text-editor\">
                                                                                <div class=\"elementor-widget-container\">
                                                                                    <div class=\"elementor-text-editor elementor-clearfix\">
                                                                                        ";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "description", array()), "html", null, true);
                echo "
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"elementor-element elementor-element-08pe1vj elementor-widget elementor-widget-button\">
                                                                                <div class=\"elementor-widget-container\">
                                                                                    <div class=\"elementor-button-wrapper\">
                                                                                        ";
                // line 89
                if ($this->getAttribute($context["currency"], "available", array())) {
                    // line 90
                    echo "                                                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "currencyLink", array()), "html", null, true);
                    echo "\" class=\"elementor-button-link elementor-button elementor-size-md\">
                                                                                                <span class=\"elementor-button-content-wrapper\">
                                                                                                    <span class=\"elementor-button-text\">";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "linkText", array()), "html", null, true);
                    echo "</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        ";
                }
                // line 96
                echo "                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                ";
            } else {
                // line 106
                echo "                                                    <section class=\"elementor-element elementor-element-0ll08sh elementor-section-boxed elementor-section-height-default elementor-section-height-default invert elementor-section elementor-top-section\"  style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["currency"], "backgroundFile"), "html", null, true);
                echo ")\" >
                                                        <div class=\"elementor-container elementor-column-gap-default\">
                                                            <div class=\"elementor-row\">
                                                                <div class=\"elementor-element elementor-element-h9n5fbm elementor-column elementor-col-50 elementor-top-column\">
                                                                    <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                        <div class=\"elementor-widget-wrap\">
                                                                            <div class=\"elementor-element elementor-element-zw0i4t7 elementor-widget elementor-widget-heading\">
                                                                                <div class=\"elementor-widget-container\">
                                                                                    <h2 class=\"elementor-heading-title elementor-size-default\">";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "name", array()), "html", null, true);
                echo "</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"elementor-element elementor-element-brtcxtp elementor-widget elementor-widget-heading\">
                                                                                <div class=\"elementor-widget-container\">
                                                                                    <h3 class=\"elementor-heading-title elementor-size-default\">";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "price", array()), "html", null, true);
                echo " ETH</h3>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"elementor-element elementor-element-527a3bj elementor-widget elementor-widget-divider\">
                                                                                <div class=\"elementor-widget-container\">
                                                                                    <div class=\"elementor-divider\">
                                                                                        <span class=\"elementor-divider-separator\"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"elementor-element elementor-element-3gi05m4 elementor-widget elementor-widget-text-editor\">
                                                                                <div class=\"elementor-widget-container\">
                                                                                    <div class=\"elementor-text-editor elementor-clearfix\">
                                                                                        ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "description", array()), "html", null, true);
                echo "
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"elementor-element elementor-element-pm2ttsr cherry-popups-signup-link elementor-widget elementor-widget-button\">
                                                                                <div class=\"elementor-widget-container\">
                                                                                    <div class=\"elementor-button-wrapper\">
                                                                                        ";
                // line 139
                if ($this->getAttribute($context["currency"], "available", array())) {
                    // line 140
                    echo "                                                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "currencyLink", array()), "html", null, true);
                    echo "\" class=\"elementor-button-link elementor-button elementor-size-md\">
                                                                                                <span class=\"elementor-button-content-wrapper\">
                                                                                                    <span class=\"elementor-button-text\">";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "linkText", array()), "html", null, true);
                    echo "</span>
                                                                                                </span>
                                                                                            </a>
                                                                                        ";
                }
                // line 146
                echo "                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=\"elementor-element elementor-element-xzsruu2 elementor-column elementor-col-50 elementor-top-column\">
                                                                    <div class=\"elementor-column-wrap\">
                                                                        <div class=\"elementor-widget-wrap\">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                ";
            }
            // line 162
            echo "                                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                                        </div>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- .row -->
        </div><!-- #content -->


        <footer id=\"colophon\" class=\"site-footer invert centered\" role=\"contentinfo\">
            <div class=\"footer-area-wrap invert\">
                <div class=\"container\">
                    <section id=\"footer-area\" class=\"footer-area widget-area row one-column\">
                        <aside id=\"bitunit_widget_about-3\" class=\"col-xs-12 col-sm-12 col-md-12 footer-area--centered widget widget-about\">
                            <div class=\"widget-about__logo\">
                                <a class=\"widget-about__logo-link\" href=\"#\">
                                    ";
        // line 181
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b0d69ed_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b0d69ed_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/b0d69ed_logo-xs_1.png");
            // line 182
            echo "                                    <img class=\"widget-about__logo-img\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\">
                                    ";
        } else {
            // asset "b0d69ed"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b0d69ed") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/b0d69ed.png");
            echo "                                    <img class=\"widget-about__logo-img\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"\">
                                    ";
        }
        unset($context["asset_url"]);
        // line 184
        echo "                                </a>
                            </div>
                            <div class=\"widget-about__tagline\"></div>
                            <div class=\"widget-about__content\"></div>
                        </aside>
                        <aside id=\"text-8\" class=\"col-xs-12 col-sm-12 col-md-12 footer-area--centered widget widget_text\">
                            <div class=\"textwidget\"><p>mail@mail.com</p>
                            </div>
                        </aside>
                    </section>
                </div>
            </div>

            <div class=\"footer-container\">
                <div class=\"site-info\">
                    <div class=\"footer-copyright\">";
        // line 199
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " © All Rights Reserved | <a href=\"#\">Privacy Policy</a></div>
                    <nav id=\"footer-navigation\" class=\"footer-menu\" role=\"navigation\">
                    </nav><!-- #footer-navigation -->
                </div><!-- .site-info -->
            </div><!-- .container -->
        </footer>
    </div><!-- #page -->
";
    }

    public function getTemplateName()
    {
        return ":default:alt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 199,  308 => 184,  294 => 182,  290 => 181,  270 => 163,  256 => 162,  238 => 146,  231 => 142,  225 => 140,  223 => 139,  213 => 132,  197 => 119,  189 => 114,  177 => 106,  165 => 96,  158 => 92,  152 => 90,  150 => 89,  140 => 82,  124 => 69,  116 => 64,  98 => 50,  95 => 49,  78 => 48,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:alt.html.twig", "/home/moibe/webapps/fuel_bank/app/Resources/views/default/alt.html.twig");
    }
}
