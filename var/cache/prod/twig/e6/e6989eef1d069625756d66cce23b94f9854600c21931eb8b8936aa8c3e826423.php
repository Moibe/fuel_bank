<?php

/* EasyAdminBundle:data_collector:icon.svg.twig */
class __TwigTemplate_311e4afb64bb8d5ac8bdff8dedb1736222c04f9ead8e28de5ebcc1a4cf7a3540 extends Twig_Template
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
        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("height", $context)) ? (_twig_default_filter(($context["height"] ?? null), "24")) : ("24")), "html", null, true);
        echo "\" viewBox=\"0 0 24 24\" version=\"1.1\">
  <path
     d=\"m 15.367133,9.67868 2.86378,-2.8637733 -1.04582,-1.04582 -2.863773,2.86378 z M 19.7361,6.8149067 q 0,0.2638933 -0.175927,0.4398266 L 6.99084,19.824067 Q 6.8149067,20 6.5510067,20 6.2871133,20 6.11118,19.824067 L 4.1759333,17.88882 Q 4,17.712887 4,17.448993 4,17.185093 4.1759333,17.00916 L 16.745267,4.4398267 Q 16.9212,4.2639 17.185093,4.2639 q 0.2639,0 0.439834,0.1759267 l 1.935246,1.9352466 Q 19.7361,6.5510067 19.7361,6.8149067 z M 6.53146,4.9578467 7.4893067,5.2510667 6.53146,5.5442867 6.23824,6.50214 5.94502,5.5442867 4.9871733,5.2510667 5.94502,4.9578467 6.23824,4 z m 3.4208933,1.5833866 1.9156997,0.58644 -1.9156997,0.58644 -0.58644,1.9157 -0.58644,-1.9157 -1.9157,-0.58644 1.9157,-0.58644 0.58644,-1.9157 z M 19.042153,11.213193 20,11.506413 l -0.957847,0.29322 -0.29322,0.957847 -0.29322,-0.957847 -0.957853,-0.29322 0.957853,-0.29322 0.29322,-0.957846 z m -6.255346,-6.2553463 0.957846,0.29322 -0.957846,0.29322 -0.29322,0.9578533 -0.29322,-0.9578533 -0.957847,-0.29322 0.957847,-0.29322 L 12.493587,4 z\"
     fill=\"";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("fill_color", $context)) ? (_twig_default_filter(($context["fill_color"] ?? null), "#222")) : ("#222")), "html", null, true);
        echo "\" />
</svg>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:data_collector:icon.svg.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:data_collector:icon.svg.twig", "/home/moibe/apps/fuel_bank/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/data_collector/icon.svg.twig");
    }
}
