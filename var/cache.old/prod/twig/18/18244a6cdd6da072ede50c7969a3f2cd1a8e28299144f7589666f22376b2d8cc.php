<?php

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_0638878e90aa6c4f84e01ca78078cfafe6609449ad656214420adfe834ee6f88 extends Twig_Template
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
        $__internal_1cfa5e1f11438fcd668ea1b4abe12bc732ce472947d14a5a269ee68ffe012290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cfa5e1f11438fcd668ea1b4abe12bc732ce472947d14a5a269ee68ffe012290->enter($__internal_1cfa5e1f11438fcd668ea1b4abe12bc732ce472947d14a5a269ee68ffe012290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        // line 1
        echo "<div class=\"exception-summary";
        echo ((twig_test_empty($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()))) ? ("exception-without-message") : (""));
        echo "\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "allPrevious", array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["previousException"]) {
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($context["previousException"], "class", array()));
            echo "
                    <span class=\"icon\">";
            // line 7
            echo twig_include($this->env, $context, "@Twig/images/chevron-right.svg");
            echo "</span>";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousException'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()));
        echo "
            </h2>
            <h2 class=\"exception-http\">
                HTTP";
        // line 12
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message";
        // line 19
        echo (((twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array())) > 180)) ? ("long") : (""));
        echo "\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true)));
        // line 21
        echo "</h1>

            <div class=\"exception-illustration hidden-xs-down\">";
        // line 24
        echo twig_include($this->env, $context, "@Twig/images/symfony-ghost.svg");
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">";
        // line 33
        $context["exception_as_array"] = $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array());
        // line 34
        $context["_exceptions_with_user_code"] = array();
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array")));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["e"], "trace", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 37
                if (((( !twig_test_empty($this->getAttribute($context["trace"], "file", array())) && !twig_in_filter("/vendor/", $this->getAttribute($context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", $this->getAttribute($context["trace"], "file", array()))) &&  !$this->getAttribute($context["loop"], "last", array()))) {
                    // line 38
                    $context["_exceptions_with_user_code"] = twig_array_merge(($context["_exceptions_with_user_code"] ?? $this->getContext($context, "_exceptions_with_user_code")), array(0 => $context["i"]));
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <h3 class=\"tab-title\">";
        // line 43
        if ((twig_length_filter($this->env, ($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array"))) > 1)) {
            // line 44
            echo "                    Exceptions <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array"))), "html", null, true);
            echo "</span>";
        } else {
            // line 46
            echo "                    Exception";
        }
        // line 48
        echo "            </h3>

            <div class=\"tab-content\">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array")));
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
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 52
            echo twig_include($this->env, $context, "@Twig/Exception/traces.html.twig", array("exception" => $context["e"], "index" => $this->getAttribute($context["loop"], "index", array()), "expand" => (twig_in_filter($context["i"], ($context["_exceptions_with_user_code"] ?? $this->getContext($context, "_exceptions_with_user_code"))) || (twig_test_empty(($context["_exceptions_with_user_code"] ?? $this->getContext($context, "_exceptions_with_user_code"))) && $this->getAttribute($context["loop"], "first", array())))), false);
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>";
        // line 57
        if (($context["logger"] ?? $this->getContext($context, "logger"))) {
            // line 58
            echo "        <div class=\"tab";
            echo ((twig_test_empty($this->getAttribute(($context["logger"] ?? $this->getContext($context, "logger")), "logs", array()))) ? ("disabled") : (""));
            echo "\">
            <h3 class=\"tab-title\">
                Logs";
            // line 61
            if (((($this->getAttribute(($context["logger"] ?? null), "counterrors", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["logger"] ?? null), "counterrors", array())))) ? ($this->getAttribute(($context["logger"] ?? null), "counterrors", array())) : (false))) {
                echo "<span class=\"badge status-error\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["logger"] ?? $this->getContext($context, "logger")), "counterrors", array()), "html", null, true);
                echo "</span>";
            }
            // line 62
            echo "            </h3>

            <div class=\"tab-content\">";
            // line 65
            if ($this->getAttribute(($context["logger"] ?? $this->getContext($context, "logger")), "logs", array())) {
                // line 66
                echo twig_include($this->env, $context, "@Twig/Exception/logs.html.twig", array("logs" => $this->getAttribute(($context["logger"] ?? $this->getContext($context, "logger")), "logs", array())), false);
            } else {
                // line 68
                echo "                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>";
            }
            // line 72
            echo "            </div>
        </div>";
        }
        // line 75
        echo "
        <div class=\"tab\">
            <h3 class=\"tab-title\">";
        // line 78
        if ((twig_length_filter($this->env, ($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array"))) > 1)) {
            // line 79
            echo "                    Stack Traces <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array"))), "html", null, true);
            echo "</span>";
        } else {
            // line 81
            echo "                    Stack Trace";
        }
        // line 83
        echo "            </h3>

            <div class=\"tab-content\">";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exception_as_array"] ?? $this->getContext($context, "exception_as_array")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 87
            echo twig_include($this->env, $context, "@Twig/Exception/traces_text.html.twig", array("exception" => $context["e"], "index" => $this->getAttribute($context["loop"], "index", array()), "num_exceptions" => $this->getAttribute($context["loop"], "length", array())), false);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </div>
        </div>";
        // line 92
        if ( !twig_test_empty(($context["currentContent"] ?? $this->getContext($context, "currentContent")))) {
            // line 93
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">";
            // line 97
            echo twig_escape_filter($this->env, ($context["currentContent"] ?? $this->getContext($context, "currentContent")), "html", null, true);
            echo "
            </div>
        </div>";
        }
        // line 101
        echo "    </div>
</div>
";
        
        $__internal_1cfa5e1f11438fcd668ea1b4abe12bc732ce472947d14a5a269ee68ffe012290->leave($__internal_1cfa5e1f11438fcd668ea1b4abe12bc732ce472947d14a5a269ee68ffe012290_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 101,  290 => 97,  285 => 93,  283 => 92,  280 => 89,  266 => 87,  249 => 86,  245 => 83,  242 => 81,  237 => 79,  235 => 78,  231 => 75,  227 => 72,  222 => 68,  219 => 66,  217 => 65,  213 => 62,  207 => 61,  201 => 58,  199 => 57,  196 => 54,  182 => 52,  165 => 51,  161 => 48,  158 => 46,  153 => 44,  151 => 43,  149 => 42,  130 => 38,  128 => 37,  111 => 36,  107 => 35,  105 => 34,  103 => 33,  92 => 24,  88 => 21,  86 => 20,  83 => 19,  71 => 12,  65 => 9,  50 => 7,  46 => 6,  29 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"exception-summary {{ exception.message is empty ? 'exception-without-message' }}\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                {% for previousException in exception.allPrevious|reverse %}
                    {{ previousException.class|abbr_class }}
                    <span class=\"icon\">{{ include('@Twig/images/chevron-right.svg') }}</span>
                {% endfor %}
                {{ exception.class|abbr_class }}
            </h2>
            <h2 class=\"exception-http\">
                HTTP {{ status_code }} <small>{{ status_text }}</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message {{ exception.message|length > 180 ? 'long' }}\">
                {{- exception.message|nl2br|format_file_from_text -}}
            </h1>

            <div class=\"exception-illustration hidden-xs-down\">
                {{ include('@Twig/images/symfony-ghost.svg') }}
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            {% set exception_as_array = exception.toarray %}
            {% set _exceptions_with_user_code = [] %}
            {% for i, e in exception_as_array %}
                {% for trace in e.trace %}
                    {% if (trace.file is not empty) and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and not loop.last %}
                        {% set _exceptions_with_user_code = _exceptions_with_user_code|merge([i]) %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Exceptions <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Exception
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for i, e in exception_as_array %}
                    {{ include('@Twig/Exception/traces.html.twig', { exception: e, index: loop.index, expand: i in _exceptions_with_user_code or (_exceptions_with_user_code is empty and loop.first) }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if logger %}
        <div class=\"tab {{ logger.logs is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">
                Logs
                {% if logger.counterrors ?? false %}<span class=\"badge status-error\">{{ logger.counterrors }}</span>{% endif %}
            </h3>

            <div class=\"tab-content\">
                {% if logger.logs %}
                    {{ include('@Twig/Exception/logs.html.twig', { logs: logger.logs }, with_context = false)  }}
                {% else %}
                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                {% endif %}
            </div>
        </div>
        {% endif %}

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Stack Traces <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Stack Trace
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for e in exception_as_array %}
                    {{ include('@Twig/Exception/traces_text.html.twig', { exception: e, index: loop.index, num_exceptions: loop.length }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if currentContent is not empty %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                {{ currentContent }}
            </div>
        </div>
        {% endif %}
    </div>
</div>
", "@Twig/Exception/exception.html.twig", "/home/moibe/apps/fuel_bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.html.twig");
    }
}
