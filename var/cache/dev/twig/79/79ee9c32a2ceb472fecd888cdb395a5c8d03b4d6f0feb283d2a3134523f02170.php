<?php

/* @WebProfiler/Profiler/search.html.twig */
class __TwigTemplate_7c5627e9f7d3471990c3b87c4a8f423c4bdd2a0cf0ea805333af77f21db443a3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/search.html.twig"));

        // line 1
        echo "<div id=\"sidebar-search\" class=\"hidden\">
    <form action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
            <label for=\"ip\">IP</label>
            <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["ip"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"method\">Method</label>
            <select name=\"method\" id=\"method\">
                <option value=\"\">Any</option>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "DELETE", 1 => "GET", 2 => "HEAD", 3 => "PATCH", 4 => "POST", 5 => "PUT"]);
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                    <option ";
            echo ((($context["m"] == ($context["method"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <label for=\"status_code\">Status</label>
            <input type=\"number\" name=\"status_code\" id=\"status_code\" min=\"100\" max=\"599\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"url\">URL</label>
            <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"token\">Token</label>
            <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"start\">From</label>
            <input type=\"date\" name=\"start\" id=\"start\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["start"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"end\">Until</label>
            <input type=\"date\" name=\"end\" id=\"end\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["end"] ?? null), "html", null, true);
        echo "\">
        </div>

        <div class=\"form-group\">
            <label for=\"limit\">Results</label>
            <select name=\"limit\" id=\"limit\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => 10, 1 => 50, 2 => 100]);
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 47
            echo "                    <option ";
            echo ((($context["l"] == ($context["limit"] ?? null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["l"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </select>
        </div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-sm\">Search</button>
        </div>
    </form>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 49,  115 => 47,  111 => 46,  102 => 40,  94 => 35,  86 => 30,  78 => 25,  70 => 20,  63 => 15,  52 => 13,  48 => 12,  38 => 5,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar-search\" class=\"hidden\">
    <form action=\"{{ path('_profiler_search') }}\" method=\"get\">
        <div class=\"form-group\">
            <label for=\"ip\">IP</label>
            <input type=\"text\" name=\"ip\" id=\"ip\" value=\"{{ ip }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"method\">Method</label>
            <select name=\"method\" id=\"method\">
                <option value=\"\">Any</option>
                {% for m in ['DELETE', 'GET', 'HEAD', 'PATCH', 'POST', 'PUT'] %}
                    <option {{ m == method ? 'selected=\"selected\"' }}>{{ m }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\"form-group\">
            <label for=\"status_code\">Status</label>
            <input type=\"number\" name=\"status_code\" id=\"status_code\" min=\"100\" max=\"599\" value=\"{{ status_code }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"url\">URL</label>
            <input type=\"text\" name=\"url\" id=\"url\" value=\"{{ url }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"token\">Token</label>
            <input type=\"text\" name=\"token\" id=\"token\" value=\"{{ token }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"start\">From</label>
            <input type=\"date\" name=\"start\" id=\"start\" value=\"{{ start }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"end\">Until</label>
            <input type=\"date\" name=\"end\" id=\"end\" value=\"{{ end }}\">
        </div>

        <div class=\"form-group\">
            <label for=\"limit\">Results</label>
            <select name=\"limit\" id=\"limit\">
                {% for l in [10, 50, 100] %}
                    <option {{ l == limit ? 'selected=\"selected\"' }}>{{ l }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-sm\">Search</button>
        </div>
    </form>
</div>
", "@WebProfiler/Profiler/search.html.twig", "C:\\xampp\\htdocs\\Deportes_Symfony\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\search.html.twig");
    }
}
