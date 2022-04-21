<?php

/* default/index.html.twig */
class __TwigTemplate_b5a3361a5c3f27e41d41b348b04cb861ce5979d61270b665c13d1ccc836e8378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_07f0e328dffbb5c2bc0eb54ebdcc8a07d1c28ae382204fe18ce799edb87e6bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f0e328dffbb5c2bc0eb54ebdcc8a07d1c28ae382204fe18ce799edb87e6bb1->enter($__internal_07f0e328dffbb5c2bc0eb54ebdcc8a07d1c28ae382204fe18ce799edb87e6bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_1995a3d5c19eb9b50901ad11a9ecf44b40180e164adbac6be5fa8eccb8ee961b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1995a3d5c19eb9b50901ad11a9ecf44b40180e164adbac6be5fa8eccb8ee961b->enter($__internal_1995a3d5c19eb9b50901ad11a9ecf44b40180e164adbac6be5fa8eccb8ee961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07f0e328dffbb5c2bc0eb54ebdcc8a07d1c28ae382204fe18ce799edb87e6bb1->leave($__internal_07f0e328dffbb5c2bc0eb54ebdcc8a07d1c28ae382204fe18ce799edb87e6bb1_prof);

        
        $__internal_1995a3d5c19eb9b50901ad11a9ecf44b40180e164adbac6be5fa8eccb8ee961b->leave($__internal_1995a3d5c19eb9b50901ad11a9ecf44b40180e164adbac6be5fa8eccb8ee961b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6747942656bb799c855795be52d1741f1c0d3dee1d8be573e840fc9f661c287c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6747942656bb799c855795be52d1741f1c0d3dee1d8be573e840fc9f661c287c->enter($__internal_6747942656bb799c855795be52d1741f1c0d3dee1d8be573e840fc9f661c287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b1ab629d24f104c9426fd8137b411b918558778babbf8451130bfee68c9b8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1ab629d24f104c9426fd8137b411b918558778babbf8451130bfee68c9b8a4->enter($__internal_2b1ab629d24f104c9426fd8137b411b918558778babbf8451130bfee68c9b8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d07b8bb_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/d07b8bb_logo_1.png");
            // line 24
            echo "                                                                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Fuel Bank\" />
                                                                            ";
        } else {
            // asset "d07b8bb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_d07b8bb") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/d07b8bb.png");
            echo "                                                                            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Fuel Bank\" />
                                                                            ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "                                                                        </div>
                                                                        <div class=\"elementor-widget-container\">
                                                                            <p class=\"m-b-2\">
                                                                                Exchange your Utility Tokens for Ether at market price. A Utility Token is a Ethereum ERC20 standard token used for an application or system within the Ethereum Blockchain. We receive the tokens you do not use anymore to be used by those who need them for existing dApps.
                                                                            </p>
                                                                            <p>
                                                                                Exchanging in FuelBank offers you high security and reliability. All transactions are made through Smart Contracts: fast, safe, private, always verifiable and automatic. No account needed, everything is done on-chain. Try FuelBank today.
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
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : $this->getContext($context, "currencies")));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 48
            echo "                                                                                    <div data-id=\"c1p8342\" class=\"elementor-element elementor-element-c1p8342 elementor-column elementor-col-25 elementor-inner-column\" data-element_type=\"column\">
                                                                                        <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                                            <div class=\"elementor-widget-wrap\">
                                                                                                <div data-id=\"6hearvn\" class=\"elementor-element elementor-element-6hearvn elementor-view-framed elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box\" data-element_type=\"icon-box.default\">
                                                                                                    <div class=\"elementor-widget-container\">
                                                                                                        <div class=\"elementor-icon-box-wrapper\">
                                                                                                            <div class=\"elementor-icon-box-icon\">
                                                                                                                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "currencyLink", array()), "html", null, true);
            echo "\" target=\"_blank\">
                                                                                                                    <span class=\"elementor-icon elementor-animation-\">
                                                                                                                        <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["currency"], "imageFile"), "html", null, true);
            echo "\" style='width:40px' />
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class=\"elementor-icon-box-content\">
                                                                                                                <h4 class=\"elementor-icon-box-title\">
                                                                                                                    <span><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "currencyLink", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "name", array()), "html", null, true);
            echo "</a></span>
                                                                                                                </h4>
                                                                                                                <h4 class=\"elementor-icon-box-title\">
                                                                                                                    <span>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "price", array()), "html", null, true);
            echo " ETH</span>
                                                                                                                </h4>
                                                                                                                <h4>
                                                                                                                    ";
            // line 69
            if ($this->getAttribute($context["currency"], "available", array())) {
                // line 70
                echo "                                                                                                                        <a href=\"#\" data-target=\"txt-wrap\" class=\"btn-toggle\"><strong>Buy now!</strong></a>
                                                                                                                    ";
            } else {
                // line 72
                echo "                                                                                                                        We are full right now.
                                                                                                                    ";
            }
            // line 74
            echo "                                                                                                                </h4>
                                                                                                                <div class=\"txt-wrap\">
                                                                                                                    <h3>
                                                                                                                        <a>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "linkText", array()), "html", null, true);
            echo "</a>
                                                                                                                    </h3>
                                                                                                                    <p class=\"elementor-icon-box-description\">
                                                                                                                        Deposit your tokens in this address to receive ether.
                                                                                                                    </p>
                                                                                                                    <p class=\"elementor-icon-box-description\">
                                                                                                                        You can always verify the contract and your transaction <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["currency"], "link", array()), "html", null, true);
            echo "\" target=\"_blank\">here</a>
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
        // line 94
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
        
        $__internal_2b1ab629d24f104c9426fd8137b411b918558778babbf8451130bfee68c9b8a4->leave($__internal_2b1ab629d24f104c9426fd8137b411b918558778babbf8451130bfee68c9b8a4_prof);

        
        $__internal_6747942656bb799c855795be52d1741f1c0d3dee1d8be573e840fc9f661c287c->leave($__internal_6747942656bb799c855795be52d1741f1c0d3dee1d8be573e840fc9f661c287c_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 94,  177 => 83,  168 => 77,  163 => 74,  159 => 72,  155 => 70,  153 => 69,  147 => 66,  139 => 63,  130 => 57,  125 => 55,  116 => 48,  112 => 47,  89 => 26,  75 => 24,  71 => 23,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div id=\"page\" class=\"site\">
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
                                                                            {% image '@AppBundle/Resources/public/images/logo.png' %}
                                                                            <img src=\"{{ asset_url }}\" alt=\"Fuel Bank\" />
                                                                            {% endimage %}
                                                                        </div>
                                                                        <div class=\"elementor-widget-container\">
                                                                            <p class=\"m-b-2\">
                                                                                Exchange your Utility Tokens for Ether at market price. A Utility Token is a Ethereum ERC20 standard token used for an application or system within the Ethereum Blockchain. We receive the tokens you do not use anymore to be used by those who need them for existing dApps.
                                                                            </p>
                                                                            <p>
                                                                                Exchanging in FuelBank offers you high security and reliability. All transactions are made through Smart Contracts: fast, safe, private, always verifiable and automatic. No account needed, everything is done on-chain. Try FuelBank today.
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

                                                                                {% for currency in currencies %}
                                                                                    <div data-id=\"c1p8342\" class=\"elementor-element elementor-element-c1p8342 elementor-column elementor-col-25 elementor-inner-column\" data-element_type=\"column\">
                                                                                        <div class=\"elementor-column-wrap elementor-element-populated\">
                                                                                            <div class=\"elementor-widget-wrap\">
                                                                                                <div data-id=\"6hearvn\" class=\"elementor-element elementor-element-6hearvn elementor-view-framed elementor-shape-circle elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box\" data-element_type=\"icon-box.default\">
                                                                                                    <div class=\"elementor-widget-container\">
                                                                                                        <div class=\"elementor-icon-box-wrapper\">
                                                                                                            <div class=\"elementor-icon-box-icon\">
                                                                                                                <a href=\"{{ currency.currencyLink }}\" target=\"_blank\">
                                                                                                                    <span class=\"elementor-icon elementor-animation-\">
                                                                                                                        <img src=\"{{ vich_uploader_asset(currency, 'imageFile') }}\" style='width:40px' />
                                                                                                                    </span>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class=\"elementor-icon-box-content\">
                                                                                                                <h4 class=\"elementor-icon-box-title\">
                                                                                                                    <span><a href=\"{{ currency.currencyLink }}\" target=\"_blank\">{{currency.name}}</a></span>
                                                                                                                </h4>
                                                                                                                <h4 class=\"elementor-icon-box-title\">
                                                                                                                    <span>{{currency.price}} ETH</span>
                                                                                                                </h4>
                                                                                                                <h4>
                                                                                                                    {% if currency.available %}
                                                                                                                        <a href=\"#\" data-target=\"txt-wrap\" class=\"btn-toggle\"><strong>Buy now!</strong></a>
                                                                                                                    {% else %}
                                                                                                                        We are full right now.
                                                                                                                    {% endif %}
                                                                                                                </h4>
                                                                                                                <div class=\"txt-wrap\">
                                                                                                                    <h3>
                                                                                                                        <a>{{currency.linkText}}</a>
                                                                                                                    </h3>
                                                                                                                    <p class=\"elementor-icon-box-description\">
                                                                                                                        Deposit your tokens in this address to receive ether.
                                                                                                                    </p>
                                                                                                                    <p class=\"elementor-icon-box-description\">
                                                                                                                        You can always verify the contract and your transaction <a href=\"{{ currency.link }}\" target=\"_blank\">here</a>
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                {% endfor %}
                                                                            </div>
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
{% endblock %}", "default/index.html.twig", "/home/moibe/webapps/fuel_bank/app/Resources/views/default/index.html.twig");
    }
}
