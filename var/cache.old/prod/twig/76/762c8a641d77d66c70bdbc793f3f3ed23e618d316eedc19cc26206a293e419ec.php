<?php

/* :default:index.html.twig */
class __TwigTemplate_a2e0c4fa014190e63997e9da15b81edd0e7443f3a1e2dc668bfe629ecca61181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
                                            <section data-id=\"jxhfrug\" class=\"full-screen elementor-element elementor-element-jxhfrug elementor-section-boxed elementor-section-height-default elementor-section-height-default invert elementor-section elementor-top-section\" data-settings=\"{&quot;background_background&quot;:&quot;classic&quot;}\" data-element_type=\"section\">
                                                <div class=\"elementor-background-overlay\"></div>
                                                <div class=\"elementor-container elementor-column-gap-default\">
                                                    <div class=\"elementor-row\">
                                                        <div data-id=\"bpe232v\" class=\"elementor-element elementor-element-bpe232v elementor-column elementor-col-100 elementor-top-column\" data-element_type=\"column\">
                                                            <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                <div class=\"elementor-widget-wrap\">
                                                                    <div data-id=\"j0hc5x6\" class=\"elementor-element elementor-element-j0hc5x6 elementor-widget elementor-widget-heading\" data-element_type=\"heading.default\">
                                                                        <div class=\"elementor-widget-container\">
                                                                            ";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d07b8bb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d07b8bb_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/d07b8bb_logo_1.png");
            // line 24
            echo "                                                                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Fuel Bank\" />
                                                                            ";
        } else {
            // asset "d07b8bb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d07b8bb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/d07b8bb.png");
            echo "                                                                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" alt=\"Fuel Bank\" />
                                                                            ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "                                                                        </div>
                                                                        <div class=\"elementor-widget-container\">
                                                                            <p class=\"m-b-2\">
                                                                                Fuelbank offers short-term staking on the most reliable proof-of-stake networks available. We complete full staking nodes for Defi and dApps to release staking for small or new users, allowing everybody to stake for low quantities and short-periods of time. 
                                                                            </p>
                                                                            <p class=\"m-b-2\">
                                                                                There is no minimum stake, and the staking period of time is as short as one month. After 30 days you will receive your stake plus staking listed. IMPORTANT: Coins are going to be deposited in exactly the same wallet from which coins were received, this process is done automatically, so be sure to use your wallet and if you are using an exchange wallet make sure it has a fixed address where you can receive back coins. 
                                                                            </p>

                                                                             <p class=\"m-b-2\">
                                                                                Staking in FuelBank offers you high security and reliability. All transactions are made fast, safe, private, always verifiable and automatic. No account needed, everything is done on-chain. Try FuelBank today.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div data-id=\"91przpf\" class=\"elementor-element elementor-element-91przpf elementor-widget elementor-widget-divider\" data-element_type=\"divider.default\">
                                                                        <div class=\"elementor-widget-container\">
                                                                            <div class=\"elementor-divider\">
                                                                                <span class=\"elementor-divider-separator\"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <section data-id=\"44gcpep\" class=\"elementor-element elementor-element-44gcpep elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section\" data-element_type=\"section\">
                                                                        <div class=\"elementor-container elementor-column-gap-default\">
                                                                            <div class=\"elementor-row\">

                                                                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 52
            echo "                                                                                    <div data-id=\"c1p8342\" class=\"elementor-element elementor-element-c1p8342 elementor-column elementor-col-25 elementor-inner-column\" data-element_type=\"column\">
                                                                                        <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                                            <div class=\"elementor-widget-wrap\">
                                                                                                <div data-id=\"6hearvn\" class=\"elementor-element elementor-element-6hearvn elementor-view-framed elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box\" data-element_type=\"icon-box.default\">
                                                                                                    <div class=\"elementor-widget-container\">
                                                                                                        <div class=\"elementor-icon-box-wrapper\">
                                                                                                            <div class=\"elementor-icon-box-icon\">
                                                                                                                <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "currencyLink", array()), "html", null, true);
            echo "\" target=\"_blank\">
                                                                                                                    <span class=\"elementor-icon elementor-animation-\">
                                                                                                                        <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["currency"], "imageFile"), "html", null, true);
            echo "\" style='width:40px' />
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class=\"elementor-icon-box-content\">
                                                                                                                <h4 class=\"elementor-icon-box-title\">
                                                                                                                    <span><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "currencyLink", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "name", array()), "html", null, true);
            echo "</a></span>
                                                                                                                </h4>
                                                                                                                <h4 class=\"elementor-icon-box-title\">
                                                                                                                    <span>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "price", array()), "html", null, true);
            echo "</span>
                                                                                                                </h4>
                                                                                                                <span STYLE=\"font-size:17px\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "linkText", array()), "html", null, true);
            echo "</span>
                                                                                                                <h4>
                                                                                                                    ";
            // line 74
            if ($this->getAttribute($context["currency"], "available", array())) {
                // line 75
                echo "                                                                                                                        <a href=\"#\" data-target=\"txt-wrap\" class=\"btn-toggle\"><strong>Stake Now</strong></a>
                                                                                                                    ";
            } else {
                // line 77
                echo "                                                                                                                        Nodes are complete now.
                                                                                                                    ";
            }
            // line 79
            echo "                                                                                                                </h4>
                                                                                                                <div class=\"txt-wrap\">
                                                                                                                   <p class=\"elementor-icon-box-description\">
                                                                                                                        Deposit the amount you want to stake in this address:
                                                                                                                    </p>
                                                                                                                     <p style=\"font-size:14px;\">
                                                                                                                        <a>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "Description", array()), "html", null, true);
            echo "</a>
                                                                                                                    </p>
                                                                                                                    <p class=\"elementor-icon-box-description\">
                                                                                                                        You can always verify the contract and your transaction <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "link", array()), "html", null, true);
            echo "\" target=\"_blank\">here</a>
                                                                                                                    </p>
                                                                                                                     <p class=\"elementor-icon-box-description\">
                                                                                                                        You will receive the amount deposited + stake within 30 days from deposit.</a>
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- .row -->
        </div><!-- #content -->
    </div><!-- #page -->
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 102,  167 => 88,  161 => 85,  153 => 79,  149 => 77,  145 => 75,  143 => 74,  138 => 72,  133 => 70,  125 => 67,  116 => 61,  111 => 59,  102 => 52,  98 => 51,  71 => 26,  57 => 24,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/home/moibe/webapps/fuel_bank/app/Resources/views/default/index.html.twig");
    }
}
