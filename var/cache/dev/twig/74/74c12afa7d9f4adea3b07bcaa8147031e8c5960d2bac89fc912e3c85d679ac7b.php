<?php

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_ab83509e8fd4e3ed81934784c9654faf9740f99a7105adbd7194029e1b021be1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'summary' => [$this, 'block_summary'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

    <div id=\"summary\">
        ";
        // line 7
        $this->displayBlock('summary', $context, $blocks);
        // line 93
        echo "    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">";
        // line 101
        echo twig_include($this->env, $context, "@WebProfiler/Icon/menu.svg");
        echo "</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search", ["limit" => 10]);
        echo "\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", twig_array_merge(["token" => "latest"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", []), "all", []))), "html", null, true);
        echo "\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" ";
        // line 107
        if (((isset($context["tokens"]) || array_key_exists("tokens", $context)) || (isset($context["about"]) || array_key_exists("about", $context)))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                            ";
        // line 108
        echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                        </a>

                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_bar", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", []), "all", [])));
        echo "
                    </div>
                </div>

                ";
        // line 115
        if ((isset($context["templates"]) || array_key_exists("templates", $context))) {
            // line 116
            echo "                    <ul id=\"menu-profiler\">
                        ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
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
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 118
                echo "                            ";
                ob_start();
                // line 119
                if (                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 119)->hasBlock("menu", $context)) {
                    // line 120
                    $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ["collector" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [0 => $context["name"]], "method"), "profiler_markup_version" => ($context["profiler_markup_version"] ?? null)];
                    if (!is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.', 120, $this->source);
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5);
                    // line 121
                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 121)->displayBlock("menu", $context);
                    $context = $context['_parent'];
                }
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 125
                echo "                            ";
                if ( !twig_test_empty(($context["menu"] ?? null))) {
                    // line 126
                    echo "                                <li class=\"";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " ";
                    echo ((($context["name"] == ($context["panel"] ?? null))) ? ("selected") : (""));
                    echo "\">
                                    <a href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => ($context["token"] ?? null), "panel" => $context["name"]]), "html", null, true);
                    echo "\">";
                    echo ($context["menu"] ?? null);
                    echo "</a>
                                </li>
                            ";
                }
                // line 130
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                    </ul>
                ";
        }
        // line 133
        echo "
                ";
        // line 134
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/settings.html.twig");
        echo "
            </div>

            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    ";
        // line 139
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                    ";
        // line 140
        $this->displayBlock('panel', $context, $blocks);
        // line 141
        echo "                </div>
            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }());
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_summary($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 8
        echo "            ";
        if ((isset($context["profile"]) || array_key_exists("profile", $context))) {
            // line 9
            echo "                ";
            $context["request_collector"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true), "request", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true), "request", []), false)) : (false));
            // line 10
            echo "                ";
            $context["status_code"] = ((($context["request_collector"] ?? null)) ? (((twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", []), 0)) : (0))) : (0));
            // line 11
            echo "                ";
            $context["css_class"] = (((($context["status_code"] ?? null) > 399)) ? ("status-error") : ((((($context["status_code"] ?? null) > 299)) ? ("status-warning") : ("status-success"))));
            // line 12
            echo "
                <div class=\"status ";
            // line 13
            echo twig_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
            echo "\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            ";
            // line 16
            if (twig_in_filter(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [])), [0 => "GET", 1 => "HEAD"])) {
                // line 17
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", []), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 19
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "url", []), "html", null, true);
                echo "
                                ";
                // line 20
                $context["referer"] = ((($context["request_collector"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestheaders", []), "get", [0 => "referer"], "method")) : (null));
                // line 21
                echo "                                ";
                if (($context["referer"] ?? null)) {
                    // line 22
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, ($context["referer"] ?? null), "html", null, true);
                    echo "\" class=\"referer\">Return to referer URL</a>
                                ";
                }
                // line 24
                echo "                            ";
            }
            // line 25
            echo "                        </h2>

                        ";
            // line 27
            if ((($context["request_collector"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", []))) {
                // line 28
                $context["redirect"] = twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", []);
                // line 29
                $context["controller"] = twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", []);
                // line 30
                $context["redirect_route"] = ("@" . twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "route", []));
                // line 31
                echo "                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "status_code", []), "html", null, true);
                echo "</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    ";
                // line 37
                echo twig_escape_filter($this->env, ((("GET" != twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "method", []))) ? (twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "method", [])) : ("")), "html", null, true);
                echo "
                                    ";
                // line 38
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, true), "class", [], "any", true, true)) {
                    // line 39
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", []), twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", []));
                    // line 40
                    if (($context["link"] ?? null)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", []), "html", null, true);
                        echo "\">";
                    }
                    // line 41
                    echo twig_escape_filter($this->env, ($context["redirect_route"] ?? null), "html", null, true);
                    // line 42
                    if (($context["link"] ?? null)) {
                        echo "</a>";
                    }
                } else {
                    // line 44
                    echo twig_escape_filter($this->env, ($context["redirect_route"] ?? null), "html", null, true);
                }
                // line 46
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "token", []), "panel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "query", []), "get", [0 => "panel", 1 => "request"], "method")]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "token", []), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 50
            echo "
                        ";
            // line 51
            if ((($context["request_collector"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", []))) {
                // line 52
                $context["forward_profile"] = twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [0 => twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [])], "method");
                // line 53
                echo "                            ";
                $context["controller"] = ((($context["forward_profile"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", [0 => "request"], "method"), "controller", [])) : ("n/a"));
                // line 54
                echo "                            <dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    ";
                // line 57
                $context["link"] = ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", []), twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", []))) : (null));
                // line 58
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", []), "html", null, true);
                    echo "\">";
                }
                // line 59
                if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true)) {
                    // line 60
                    echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", []))), "html", null, true);
                    // line 61
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [])) ? ((" :: " . twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", []))) : ("")), "html", null, true);
                } else {
                    // line 63
                    echo twig_escape_filter($this->env, ($context["controller"] ?? null), "html", null, true);
                }
                // line 65
                if (($context["link"] ?? null)) {
                    echo "</a>";
                }
                // line 66
                echo "                                    (<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", []), "html", null, true);
                echo "</a>)
                                </dd>
                            </dl>";
            }
            // line 70
            echo "
                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>";
            // line 73
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "method", [])), "html", null, true);
            echo "</dd>

                            <dt>HTTP Status</dt>
                            <dd>";
            // line 76
            echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
            echo "</dd>

                            <dt>IP</dt>
                            <dd>
                                <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => ($context["token"] ?? null), "limit" => 10, "ip" => twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "ip", []), "html", null, true);
            echo "</a>
                            </dd>

                            <dt>Profiled on</dt>
                            <dd><time datetime=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", []), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "time", []), "r"), "html", null, true);
            echo "</time></dd>

                            <dt>Token</dt>
                            <dd>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "token", []), "html", null, true);
            echo "</dd>
                        </dl>
                    </div>
                </div>
            ";
        }
        // line 92
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 140,  430 => 92,  422 => 87,  414 => 84,  405 => 80,  398 => 76,  392 => 73,  387 => 70,  378 => 66,  374 => 65,  371 => 63,  368 => 61,  366 => 60,  364 => 59,  356 => 58,  354 => 57,  349 => 54,  346 => 53,  344 => 52,  342 => 51,  339 => 50,  330 => 46,  327 => 44,  322 => 42,  320 => 41,  312 => 40,  310 => 39,  308 => 38,  304 => 37,  297 => 33,  293 => 31,  291 => 30,  289 => 29,  287 => 28,  285 => 27,  281 => 25,  278 => 24,  272 => 22,  269 => 21,  267 => 20,  262 => 19,  254 => 17,  252 => 16,  246 => 13,  243 => 12,  240 => 11,  237 => 10,  234 => 9,  231 => 8,  222 => 7,  200 => 141,  198 => 140,  194 => 139,  186 => 134,  183 => 133,  179 => 131,  165 => 130,  157 => 127,  150 => 126,  147 => 125,  142 => 121,  135 => 120,  133 => 119,  130 => 118,  113 => 117,  110 => 116,  108 => 115,  101 => 111,  95 => 108,  89 => 107,  84 => 105,  80 => 104,  74 => 101,  64 => 93,  62 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

    <div id=\"summary\">
        {% block summary %}
            {% if profile is defined %}
                {% set request_collector = profile.collectors.request|default(false) %}
                {% set status_code = request_collector ? request_collector.statuscode|default(0) : 0 %}
                {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}

                <div class=\"status {{ css_class }}\">
                    <div class=\"container\">
                        <h2 class=\"break-long-words\">
                            {% if profile.method|upper in ['GET', 'HEAD'] %}
                                <a href=\"{{ profile.url }}\">{{ profile.url }}</a>
                            {% else %}
                                {{ profile.url }}
                                {% set referer = request_collector ? request_collector.requestheaders.get('referer') : null %}
                                {% if referer %}
                                    <a href=\"{{ referer }}\" class=\"referer\">Return to referer URL</a>
                                {% endif %}
                            {% endif %}
                        </h2>

                        {% if request_collector and request_collector.redirect -%}
                            {%- set redirect = request_collector.redirect -%}
                            {%- set controller = redirect.controller -%}
                            {%- set redirect_route = '@' ~ redirect.route %}
                            <dl class=\"metadata\">
                                <dt>
                                    <span class=\"label\">{{ redirect.status_code }}</span>
                                    Redirect from
                                </dt>
                                <dd>
                                    {{ 'GET' != redirect.method ? redirect.method }}
                                    {% if redirect.controller.class is defined -%}
                                        {%- set link = controller.file|file_link(controller.line) -%}
                                        {% if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                            {{ redirect_route }}
                                        {%- if link %}</a>{% endif -%}
                                    {%- else -%}
                                            {{ redirect_route }}
                                    {%- endif %}
                                    (<a href=\"{{ path('_profiler', { token: redirect.token, panel: request.query.get('panel', 'request') }) }}\">{{ redirect.token }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        {% if request_collector and request_collector.forwardtoken -%}
                            {% set forward_profile = profile.childByToken(request_collector.forwardtoken) %}
                            {% set controller = forward_profile ? forward_profile.collector('request').controller : 'n/a' %}
                            <dl class=\"metadata\">
                                <dt>Forwarded to</dt>
                                <dd>
                                    {% set link = controller.file is defined ? controller.file|file_link(controller.line) : null -%}
                                    {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                        {% if controller.class is defined %}
                                            {{- controller.class|abbr_class|striptags -}}
                                            {{- controller.method ? ' :: ' ~ controller.method -}}
                                        {% else %}
                                            {{- controller -}}
                                        {% endif %}
                                    {%- if link %}</a>{% endif %}
                                    (<a href=\"{{ path('_profiler', { token: request_collector.forwardtoken }) }}\">{{ request_collector.forwardtoken }}</a>)
                                </dd>
                            </dl>
                        {%- endif %}

                        <dl class=\"metadata\">
                            <dt>Method</dt>
                            <dd>{{ profile.method|upper }}</dd>

                            <dt>HTTP Status</dt>
                            <dd>{{ status_code }}</dd>

                            <dt>IP</dt>
                            <dd>
                                <a href=\"{{ path('_profiler_search_results', { token: token, limit: 10, ip: profile.ip }) }}\">{{ profile.ip }}</a>
                            </dd>

                            <dt>Profiled on</dt>
                            <dd><time datetime=\"{{ profile.time|date('c') }}\">{{ profile.time|date('r') }}</time></dd>

                            <dt>Token</dt>
                            <dd>{{ profile.token }}</dd>
                        </dl>
                    </div>
                </div>
            {% endif %}
        {% endblock %}
    </div>

    <div id=\"content\" class=\"container\">
        <div id=\"main\">
            <div id=\"sidebar\">
                <div id=\"sidebar-shortcuts\">
                    <div class=\"shortcuts\">
                        <a href=\"#\" id=\"sidebarShortcutsMenu\" class=\"visible-small\">
                            <span class=\"icon\">{{ include('@WebProfiler/Icon/menu.svg') }}</span>
                        </a>

                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler_search', { limit: 10 }) }}\">Last 10</a>
                        <a class=\"btn btn-sm\" href=\"{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}\">Latest</a>

                        <a class=\"sf-toggle btn btn-sm\" data-toggle-selector=\"#sidebar-search\" {% if tokens is defined or about is defined %}data-toggle-initial=\"display\"{% endif %}>
                            {{ include('@WebProfiler/Icon/search.svg') }} <span class=\"hidden-small\">Search</span>
                        </a>

                        {{ render(path('_profiler_search_bar', request.query.all)) }}
                    </div>
                </div>

                {% if templates is defined %}
                    <ul id=\"menu-profiler\">
                        {% for name, template in templates %}
                            {% set menu -%}
                                {%- if block('menu', template) is defined -%}
                                    {% with { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version } %}
                                        {{- block('menu', template) -}}
                                    {% endwith %}
                                {%- endif -%}
                            {%- endset %}
                            {% if menu is not empty %}
                                <li class=\"{{ name }} {{ name == panel ? 'selected' : '' }}\">
                                    <a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{{ menu|raw }}</a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                {% endif %}

                {{ include('@WebProfiler/Profiler/settings.html.twig') }}
            </div>

            <div id=\"collector-wrapper\">
                <div id=\"collector-content\">
                    {{ include('@WebProfiler/Profiler/base_js.html.twig') }}
                    {% block panel '' %}
                </div>
            </div>
        </div>
    </div>
    <script>
        (function () {
            Sfjs.addEventListener(document.getElementById('sidebarShortcutsMenu'), 'click', function (event) {
                event.preventDefault();
                Sfjs.toggleClass(document.getElementById('sidebar'), 'expanded');
            })
        }());
    </script>
{% endblock %}
", "@WebProfiler/Profiler/layout.html.twig", "C:\\xampp\\htdocs\\Deportes_Symfony\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\layout.html.twig");
    }
}
