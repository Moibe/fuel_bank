<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_46015cc23900f98aa55cb2ec5d19fa54253d12283e53619918edbe01771b6fff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d40a9ddca549dea0b16aa39dbfad5ae6229d8fe26f9b8fd7040e118b9d212c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40a9ddca549dea0b16aa39dbfad5ae6229d8fe26f9b8fd7040e118b9d212c1c->enter($__internal_d40a9ddca549dea0b16aa39dbfad5ae6229d8fe26f9b8fd7040e118b9d212c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d40a9ddca549dea0b16aa39dbfad5ae6229d8fe26f9b8fd7040e118b9d212c1c->leave($__internal_d40a9ddca549dea0b16aa39dbfad5ae6229d8fe26f9b8fd7040e118b9d212c1c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/home/moibe/apps/fuel_bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
