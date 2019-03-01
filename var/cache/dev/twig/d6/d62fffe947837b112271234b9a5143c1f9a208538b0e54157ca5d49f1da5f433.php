<?php

/* @WebProfiler/Collector/messenger.html.twig */
class __TwigTemplate_74115884abb514c0c4e8116c75954d13124d83fd09b6fc952658e31d372401f1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/messenger.html.twig", 1);
        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'head' => [$this, 'block_head'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/messenger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [])) > 0)) {
            // line 7
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [])) ? ("red") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/messenger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [])), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "buses", []));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 15
                echo "                ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [0 => $context["bus"]], "method");
                // line 16
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 17
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "</b>
                    <span
                        title=\"";
                // line 19
                echo twig_escape_filter($this->env, ($context["exceptionsCount"] ?? null), "html", null, true);
                echo " message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-";
                // line 20
                echo ((($context["exceptionsCount"] ?? null)) ? ("red") : (""));
                echo "\"
                    >
                        ";
                // line 22
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [0 => $context["bus"]], "method")), "html", null, true);
                echo "
                    </span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 27
            echo "
        ";
            // line 28
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => "messenger", "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 33
        echo "<span class=\"label";
        echo ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [])) ? (" label-status-error") : (""));
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", []))) ? (" disabled") : (""));
        echo "\">
    <span class=\"icon\">";
        // line 34
        echo twig_include($this->env, $context, "@WebProfiler/Icon/messenger.svg");
        echo "</span>
    <strong>Messages</strong>
    ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", []) > 0)) {
            // line 37
            echo "        <span class=\"count\">
            <span>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", []), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 41
        echo "</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 45
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 115px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
        td.message-bus-dispatch-caller { background: #f1f2f3; }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 65
        echo "    ";
        $context["helper"] = $this;
        // line 66
        echo "
    <h2>Messages</h2>

    ";
        // line 69
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", []))) {
            // line 70
            echo "        <div class=\"empty\">
            <p>No messages have been collected.</p>
        </div>
    ";
        } else {
            // line 74
            echo "
    <div class=\"sf-tabs message-bus\">
        <div class=\"tab\">
            ";
            // line 77
            $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", []);
            // line 78
            echo "            ";
            $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", []);
            // line 79
            echo "            <h3 class=\"tab-title\">All<span class=\"badge ";
            echo ((($context["exceptionsCount"] ?? null)) ? ((((($context["exceptionsCount"] ?? null) == twig_length_filter($this->env, ($context["messages"] ?? null)))) ? ("status-error") : ("status-some-errors"))) : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages"] ?? null)), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                ";
            // line 83
            echo $context["helper"]->macro_render_bus_messages(($context["messages"] ?? null), true);
            echo "
            </div>
        </div>

        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "buses", []));
            foreach ($context['_seq'] as $context["_key"] => $context["bus"]) {
                // line 88
                echo "        <div class=\"tab message-bus\">
            ";
                // line 89
                $context["messages"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "messages", [0 => $context["bus"]], "method");
                // line 90
                echo "            ";
                $context["exceptionsCount"] = twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "exceptionsCount", [0 => $context["bus"]], "method");
                // line 91
                echo "            <h3 class=\"tab-title\">";
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "<span class=\"badge ";
                echo ((($context["exceptionsCount"] ?? null)) ? ((((($context["exceptionsCount"] ?? null) == twig_length_filter($this->env, ($context["messages"] ?? null)))) ? ("status-error") : ("status-some-errors"))) : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["messages"] ?? null)), "html", null, true);
                echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"text-muted\">Ordered list of messages dispatched on the <code>";
                // line 94
                echo twig_escape_filter($this->env, $context["bus"], "html", null, true);
                echo "</code> bus</p>
                ";
                // line 95
                echo $context["helper"]->macro_render_bus_messages(($context["messages"] ?? null));
                echo "
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bus'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "    ";
        }
        // line 100
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function macro_render_bus_messages($__messages__ = null, $__showBus__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "messages" => $__messages__,
            "showBus" => $__showBus__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_bus_messages"));

            // line 104
            echo "    ";
            $context["discr"] = twig_random($this->env);
            // line 105
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dispatchCall"]) {
                // line 106
                echo "    <table class=\"message-item\">
        <thead>
        <tr>
            <th colspan=\"2\" class=\"sf-toggle\"
                data-toggle-selector=\"#message-item-";
                // line 110
                echo twig_escape_filter($this->env, ($context["discr"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), "html", null, true);
                echo "-details\"
                data-toggle-initial=\"";
                // line 111
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) ? ("display") : (""));
                echo "\"
            >
                <span class=\"dump-inline\">";
                // line 113
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", []), "type", []));
                echo "</span>
                ";
                // line 114
                if (($context["showBus"] ?? null)) {
                    // line 115
                    echo "                    <span class=\"label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "bus", []), "html", null, true);
                    echo "</span>
                ";
                }
                // line 117
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true)) {
                    // line 118
                    echo "                    <span class=\"label status-error\">exception</span>
                ";
                }
                // line 120
                echo "                <a class=\"toggle-button\">
                    <span class=\"icon icon-close\">";
                // line 121
                echo twig_include($this->env, $context, "@Twig/images/icon-minus-square.svg");
                echo "</span>
                    <span class=\"icon icon-open\">";
                // line 122
                echo twig_include($this->env, $context, "@Twig/images/icon-plus-square.svg");
                echo "</span>
                </a>
            </th>
        </tr>
        </thead>
        <tbody id=\"message-item-";
                // line 127
                echo twig_escape_filter($this->env, ($context["discr"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), "html", null, true);
                echo "-details\" class=\"sf-toggle-content\">
            <tr>
                <td colspan=\"2\" class=\"message-bus-dispatch-caller\">
                    <span class=\"metadata\">In
                        ";
                // line 131
                $context["caller"] = twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "caller", []);
                // line 132
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", [])) {
                    // line 133
                    echo "                            ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", []), twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", []));
                    // line 134
                    echo "                            ";
                    if (($context["link"] ?? null)) {
                        // line 135
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", []), "html", null, true);
                        echo "</a>
                                ";
                    } else {
                        // line 137
                        echo "                                <abbr title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", []), "html", null, true);
                        echo "</abbr>
                            ";
                    }
                    // line 139
                    echo "                        ";
                } else {
                    // line 140
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "name", []), "html", null, true);
                    echo "
                        ";
                }
                // line 142
                echo "                        line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                echo twig_escape_filter($this->env, ($context["discr"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", []), "html", null, true);
                echo "</a>
                    </span>

                    <div class=\"hidden\" id=\"sf-trace-";
                // line 145
                echo twig_escape_filter($this->env, ($context["discr"] ?? null), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), "html", null, true);
                echo "\">
                        <div class=\"trace\">
                            ";
                // line 147
                echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "file", []), twig_get_attribute($this->env, $this->source, ($context["caller"] ?? null), "line", []));
                echo "
                        </div>
                    </div>
                </td>
            </tr>
            ";
                // line 152
                if (($context["showBus"] ?? null)) {
                    // line 153
                    echo "            <tr>
                <td class=\"text-bold\">Bus</td>
                <td>";
                    // line 155
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "bus", []), "html", null, true);
                    echo "</td>
            </tr>
            ";
                }
                // line 158
                echo "            <tr>
                <td class=\"text-bold\">Message</td>
                <td>";
                // line 160
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "message", []), "value", []), 2);
                echo "</td>
            </tr>
            <tr>
                <td class=\"text-bold\">Envelope stamps</td>
                <td>
                    ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "stamps", []));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 166
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["item"]);
                    echo "
                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 168
                    echo "                        <span class=\"text-muted\">No items</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "                </td>
            </tr>
            ";
                // line 172
                if (twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", [], "any", true, true)) {
                    // line 173
                    echo "            <tr>
                <td class=\"text-bold\">Exception</td>
                <td>
                    ";
                    // line 176
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dispatchCall"], "exception", []), "value", []), 1);
                    echo "
                </td>
            </tr>
            ";
                }
                // line 180
                echo "        </tbody>
    </table>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dispatchCall'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/messenger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 180,  539 => 176,  534 => 173,  532 => 172,  528 => 170,  521 => 168,  513 => 166,  508 => 165,  500 => 160,  496 => 158,  490 => 155,  486 => 153,  484 => 152,  476 => 147,  469 => 145,  458 => 142,  452 => 140,  449 => 139,  441 => 137,  431 => 135,  428 => 134,  425 => 133,  422 => 132,  420 => 131,  411 => 127,  403 => 122,  399 => 121,  396 => 120,  392 => 118,  389 => 117,  383 => 115,  381 => 114,  377 => 113,  372 => 111,  366 => 110,  360 => 106,  342 => 105,  339 => 104,  320 => 103,  309 => 100,  306 => 99,  296 => 95,  292 => 94,  281 => 91,  278 => 90,  276 => 89,  273 => 88,  269 => 87,  262 => 83,  252 => 79,  249 => 78,  247 => 77,  242 => 74,  236 => 70,  234 => 69,  229 => 66,  226 => 65,  217 => 64,  188 => 45,  179 => 44,  168 => 41,  162 => 38,  159 => 37,  157 => 36,  152 => 34,  146 => 33,  137 => 32,  124 => 28,  121 => 27,  118 => 26,  108 => 22,  103 => 20,  99 => 19,  94 => 17,  91 => 16,  88 => 15,  83 => 14,  81 => 13,  78 => 12,  73 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  50 => 5,  40 => 1,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length > 0 %}
        {% set status_color = collector.exceptionsCount ? 'red' %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/messenger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.messages|length }}</span>
        {% endset %}

        {% set text %}
            {% for bus in collector.buses %}
                {% set exceptionsCount = collector.exceptionsCount(bus) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ bus }}</b>
                    <span
                        title=\"{{ exceptionsCount }} message(s) with exceptions\"
                        class=\"sf-toolbar-status sf-toolbar-status-{{ exceptionsCount ? 'red' }}\"
                    >
                        {{ collector.messages(bus)|length }}
                    </span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: 'messenger', status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label{{ collector.exceptionsCount ? ' label-status-error' }}{{ collector.messages is empty ? ' disabled' }}\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/messenger.svg') }}</span>
    <strong>Messages</strong>
    {% if collector.exceptionsCount > 0 %}
        <span class=\"count\">
            <span>{{ collector.exceptionsCount }}</span>
        </span>
    {% endif %}
</span>
{% endblock %}

{% block head %}
    {{ parent() }}
    <style>
        .message-item thead th { position: relative; cursor: pointer; user-select: none; padding-right: 35px; }
        .message-item tbody tr td:first-child { width: 115px; }

        .message-item .label { float: right; padding: 1px 5px; opacity: .75; margin-left: 5px; }
        .message-item .toggle-button { position: absolute; right: 6px; top: 6px; opacity: .5; pointer-events: none }
        .message-item .icon svg { height: 24px; width: 24px; }

        .message-item .sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
        .message-item .sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

        .message-bus .badge.status-some-errors { line-height: 16px; border-bottom: 2px solid #B0413E; }

        .message-item tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
        td.message-bus-dispatch-caller { background: #f1f2f3; }
    </style>
{% endblock %}

{% block panel %}
    {% import _self as helper %}

    <h2>Messages</h2>

    {% if collector.messages is empty %}
        <div class=\"empty\">
            <p>No messages have been collected.</p>
        </div>
    {% else %}

    <div class=\"sf-tabs message-bus\">
        <div class=\"tab\">
            {% set messages = collector.messages %}
            {% set exceptionsCount = collector.exceptionsCount %}
            <h3 class=\"tab-title\">All<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? 'status-error' : 'status-some-errors' }}\">{{ messages|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"text-muted\">Ordered list of dispatched messages across all your buses</p>
                {{ helper.render_bus_messages(messages, true) }}
            </div>
        </div>

        {% for bus in collector.buses %}
        <div class=\"tab message-bus\">
            {% set messages = collector.messages(bus) %}
            {% set exceptionsCount = collector.exceptionsCount(bus) %}
            <h3 class=\"tab-title\">{{ bus }}<span class=\"badge {{ exceptionsCount ? exceptionsCount == messages|length ? 'status-error' : 'status-some-errors' }}\">{{ messages|length }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"text-muted\">Ordered list of messages dispatched on the <code>{{ bus }}</code> bus</p>
                {{ helper.render_bus_messages(messages) }}
            </div>
        </div>
        {% endfor %}
    {% endif %}

{% endblock %}

{% macro render_bus_messages(messages, showBus = false) %}
    {% set discr = random() %}
    {% for dispatchCall in messages %}
    <table class=\"message-item\">
        <thead>
        <tr>
            <th colspan=\"2\" class=\"sf-toggle\"
                data-toggle-selector=\"#message-item-{{ discr }}-{{ loop.index0 }}-details\"
                data-toggle-initial=\"{{ loop.first ? 'display' }}\"
            >
                <span class=\"dump-inline\">{{ profiler_dump(dispatchCall.message.type) }}</span>
                {% if showBus %}
                    <span class=\"label\">{{ dispatchCall.bus }}</span>
                {% endif %}
                {% if dispatchCall.exception is defined %}
                    <span class=\"label status-error\">exception</span>
                {% endif %}
                <a class=\"toggle-button\">
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square.svg') }}</span>
                </a>
            </th>
        </tr>
        </thead>
        <tbody id=\"message-item-{{ discr }}-{{ loop.index0 }}-details\" class=\"sf-toggle-content\">
            <tr>
                <td colspan=\"2\" class=\"message-bus-dispatch-caller\">
                    <span class=\"metadata\">In
                        {% set caller = dispatchCall.caller %}
                        {% if caller.line %}
                            {% set link = caller.file|file_link(caller.line) %}
                            {% if link %}
                                <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                                {% else %}
                                <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                            {% endif %}
                        {% else %}
                            {{ caller.name }}
                        {% endif %}
                        line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ discr }}-{{ loop.index0 }}\">{{ caller.line }}</a>
                    </span>

                    <div class=\"hidden\" id=\"sf-trace-{{ discr }}-{{ loop.index0 }}\">
                        <div class=\"trace\">
                            {{ caller.file|file_excerpt(caller.line) }}
                        </div>
                    </div>
                </td>
            </tr>
            {% if showBus %}
            <tr>
                <td class=\"text-bold\">Bus</td>
                <td>{{ dispatchCall.bus }}</td>
            </tr>
            {% endif %}
            <tr>
                <td class=\"text-bold\">Message</td>
                <td>{{ profiler_dump(dispatchCall.message.value, maxDepth=2) }}</td>
            </tr>
            <tr>
                <td class=\"text-bold\">Envelope stamps</td>
                <td>
                    {% for item in dispatchCall.stamps %}
                        {{ profiler_dump(item) }}
                    {% else %}
                        <span class=\"text-muted\">No items</span>
                    {% endfor %}
                </td>
            </tr>
            {% if dispatchCall.exception is defined %}
            <tr>
                <td class=\"text-bold\">Exception</td>
                <td>
                    {{ profiler_dump(dispatchCall.exception.value, maxDepth=1) }}
                </td>
            </tr>
            {% endif %}
        </tbody>
    </table>
    {% endfor %}
{% endmacro %}
", "@WebProfiler/Collector/messenger.html.twig", "C:\\xampp\\htdocs\\Deportes_Symfony\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\messenger.html.twig");
    }
}
