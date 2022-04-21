<?php

/* base.html.twig */
class __TwigTemplate_0cda85b059a2978112e80ea9959b5bcb9e76d9903670d4c34cd6ab6fb4964924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57f6eeec89cf7d8f2bd5c00ede3c5d3e36969c3094d4448fe8a1dc78c1fdeed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f6eeec89cf7d8f2bd5c00ede3c5d3e36969c3094d4448fe8a1dc78c1fdeed1->enter($__internal_57f6eeec89cf7d8f2bd5c00ede3c5d3e36969c3094d4448fe8a1dc78c1fdeed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_74b1704653bdb33d4c27bd666500aed57757b675c191038ff7591cb9344fc92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b1704653bdb33d4c27bd666500aed57757b675c191038ff7591cb9344fc92d->enter($__internal_74b1704653bdb33d4c27bd666500aed57757b675c191038ff7591cb9344fc92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "</body>
</html>
";
        
        $__internal_57f6eeec89cf7d8f2bd5c00ede3c5d3e36969c3094d4448fe8a1dc78c1fdeed1->leave($__internal_57f6eeec89cf7d8f2bd5c00ede3c5d3e36969c3094d4448fe8a1dc78c1fdeed1_prof);

        
        $__internal_74b1704653bdb33d4c27bd666500aed57757b675c191038ff7591cb9344fc92d->leave($__internal_74b1704653bdb33d4c27bd666500aed57757b675c191038ff7591cb9344fc92d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9349984a1a7b6c4eee042736efe7a20b84234c052cba2abfbfc6cfdd208517b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9349984a1a7b6c4eee042736efe7a20b84234c052cba2abfbfc6cfdd208517b8->enter($__internal_9349984a1a7b6c4eee042736efe7a20b84234c052cba2abfbfc6cfdd208517b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9db09cd07361ead2937179cd72510bf37ccf98eecae04abd096ce075a85c2d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db09cd07361ead2937179cd72510bf37ccf98eecae04abd096ce075a85c2d04->enter($__internal_9db09cd07361ead2937179cd72510bf37ccf98eecae04abd096ce075a85c2d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fuel Bank";
        
        $__internal_9db09cd07361ead2937179cd72510bf37ccf98eecae04abd096ce075a85c2d04->leave($__internal_9db09cd07361ead2937179cd72510bf37ccf98eecae04abd096ce075a85c2d04_prof);

        
        $__internal_9349984a1a7b6c4eee042736efe7a20b84234c052cba2abfbfc6cfdd208517b8->leave($__internal_9349984a1a7b6c4eee042736efe7a20b84234c052cba2abfbfc6cfdd208517b8_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3508579d9bc13739cc4ab51e3d64482258215fbf67f9d2ecc7158b0c7dc58a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3508579d9bc13739cc4ab51e3d64482258215fbf67f9d2ecc7158b0c7dc58a5c->enter($__internal_3508579d9bc13739cc4ab51e3d64482258215fbf67f9d2ecc7158b0c7dc58a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0909c41ed5acddc9907560152def837d59c334b30b2f79dd1cdf21cc0ab3632e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0909c41ed5acddc9907560152def837d59c334b30b2f79dd1cdf21cc0ab3632e->enter($__internal_0909c41ed5acddc9907560152def837d59c334b30b2f79dd1cdf21cc0ab3632e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "25cde44_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_style_003_1.css");
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_font-awesome_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_styles_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_material-icons_4.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_flaticon_5.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_style_002_6.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_css_7.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_elementor-icons_8.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_animations_9.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_frontend_10.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_post-4059_11.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_typography_12.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25cde44_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44_style_13.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "25cde44"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_25cde44") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/25cde44.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "        ";
        
        $__internal_0909c41ed5acddc9907560152def837d59c334b30b2f79dd1cdf21cc0ab3632e->leave($__internal_0909c41ed5acddc9907560152def837d59c334b30b2f79dd1cdf21cc0ab3632e_prof);

        
        $__internal_3508579d9bc13739cc4ab51e3d64482258215fbf67f9d2ecc7158b0c7dc58a5c->leave($__internal_3508579d9bc13739cc4ab51e3d64482258215fbf67f9d2ecc7158b0c7dc58a5c_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfe41b163cd6be946393352c2dbadf8913e6e36780a4f518b65f2fdd0e2fb19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe41b163cd6be946393352c2dbadf8913e6e36780a4f518b65f2fdd0e2fb19d->enter($__internal_dfe41b163cd6be946393352c2dbadf8913e6e36780a4f518b65f2fdd0e2fb19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f9dee770c731b27c588f5238dbe5f55eb1d52a900316db1e79a77c46b819838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9dee770c731b27c588f5238dbe5f55eb1d52a900316db1e79a77c46b819838->enter($__internal_7f9dee770c731b27c588f5238dbe5f55eb1d52a900316db1e79a77c46b819838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f9dee770c731b27c588f5238dbe5f55eb1d52a900316db1e79a77c46b819838->leave($__internal_7f9dee770c731b27c588f5238dbe5f55eb1d52a900316db1e79a77c46b819838_prof);

        
        $__internal_dfe41b163cd6be946393352c2dbadf8913e6e36780a4f518b65f2fdd0e2fb19d->leave($__internal_dfe41b163cd6be946393352c2dbadf8913e6e36780a4f518b65f2fdd0e2fb19d_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d1447cd2559843fa8473cf330926e8042e2e9fdc2b54213e0f869cca1d54a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1447cd2559843fa8473cf330926e8042e2e9fdc2b54213e0f869cca1d54a4b->enter($__internal_0d1447cd2559843fa8473cf330926e8042e2e9fdc2b54213e0f869cca1d54a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5a8034b4961489ac1734301f097e49504740183e8da7cf5496b2060d06aed1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8034b4961489ac1734301f097e49504740183e8da7cf5496b2060d06aed1be->enter($__internal_5a8034b4961489ac1734301f097e49504740183e8da7cf5496b2060d06aed1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9daec9b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9daec9b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/9daec9b_jquery-3.2.1.min_1.js");
            // line 35
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "9daec9b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9daec9b_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/9daec9b_main_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "9daec9b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_9daec9b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/9daec9b.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 37
        echo "    ";
        
        $__internal_5a8034b4961489ac1734301f097e49504740183e8da7cf5496b2060d06aed1be->leave($__internal_5a8034b4961489ac1734301f097e49504740183e8da7cf5496b2060d06aed1be_prof);

        
        $__internal_0d1447cd2559843fa8473cf330926e8042e2e9fdc2b54213e0f869cca1d54a4b->leave($__internal_0d1447cd2559843fa8473cf330926e8042e2e9fdc2b54213e0f869cca1d54a4b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 37,  225 => 35,  220 => 31,  211 => 30,  194 => 29,  184 => 25,  98 => 23,  93 => 8,  84 => 7,  66 => 5,  54 => 38,  51 => 30,  49 => 29,  42 => 26,  40 => 7,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Fuel Bank{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% block stylesheets %}
            {% stylesheets
        'bundles/app/css/style_003.css'
        'bundles/app/css/font-awesome.css'
        'bundles/app/css/styles.css'
        'bundles/app/css/material-icons.css'
        'bundles/app/css/flaticon.css'
        'bundles/app/css/style_002.css'
        'bundles/app/css/css.css'
        'bundles/app/css/elementor-icons.css'
        'bundles/app/css/animations.css'
        'bundles/app/css/frontend.css'
        'bundles/app/css/post-4059.css'
        'bundles/app/css/typography.css'
        'bundles/app/css/style.css'
 filter='cssrewrite' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
            {% endstylesheets %}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% block body %}{% endblock %}
    {% block javascripts %}
        {% javascripts
        '@AppBundle/Resources/public/js/jquery-3.2.1.min.js'
        '@AppBundle/Resources/public/js/main.js'
        %}
        <script src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    {% endblock %}
</body>
</html>
", "base.html.twig", "/home/moibe/webapps/fuel_bank/app/Resources/views/base.html.twig");
    }
}
