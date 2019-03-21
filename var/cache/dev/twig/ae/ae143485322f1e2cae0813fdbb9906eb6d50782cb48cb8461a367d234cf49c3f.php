<?php

/* noticias/listar.html.twig */
class __TwigTemplate_4259c2a116c6d830c3af33de7a58194b107dc36ec51931e3f6af36b595fe539b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "noticias/listar.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "noticias/listar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "noticias/listar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-8\">
            <!-- Listar articulos -->
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["noticias"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
            // line 8
            echo "            <div class=\"article-container my-1\">
                <!-- General la url de la noticia con la función path a partir de los datos que tenemos para ir a la página de la noticia -->
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verNoticia", ["seccion" => twig_get_attribute($this->env, $this->source, $context["noticia"], "seccion", []), "titular" => twig_get_attribute($this->env, $this->source, $context["noticia"], "textoTitular", [])]), "html", null, true);
            echo "\">
                    <!-- Icono noticia -->
                    <img class=\"article-img\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tenis.png"), "html", null, true);
            echo "\">
                    <div class=\"article-title d-inline-block pl-3 align-middle\">
                        <!-- Sección de la noticia -->
                        <span>";
            // line 15
            echo twig_escape_filter($this->env, ($context["titulo"] ?? null), "html", null, true);
            echo "</span>
                        <br>
                        <!-- Fecha de la noticia -->
                        <span class=\"pl-5 article-details float-right\"> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["noticia"], "fecha", []), "html", null, true);
            echo "</span>
                    </div>
                </a>
            </div>
                <!-- H1 Artículo -->
                <!-- General la url de la noticia con la función path a partir de los datos que tenemos para ir a la página de la noticia -->
                <a class=\"main-article-link\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verNoticia", ["seccion" => twig_get_attribute($this->env, $this->source, $context["noticia"], "seccion", []), "titular" => twig_get_attribute($this->env, $this->source, $context["noticia"], "textoTitular", [])]), "html", null, true);
            echo "\">
                    <div class=\"main-article mb-5 pb-3\">
                        <!-- Imagen de la noticia -->
                        <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/noticias.jpg"), "html", null, true);
            echo "\" alt=\"meteor shower\">
                        <!-- Titular de la noticia -->
                        <h1 class=\"text-center mt-2\">";
            // line 29
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["noticia"], "textoTitular", []), ["-" => " "]), "html", null, true);
            echo "</h1>
                    </div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                No se han encontrado noticias!
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "noticias/listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 35,  114 => 33,  105 => 29,  100 => 27,  94 => 24,  85 => 18,  79 => 15,  73 => 12,  68 => 10,  64 => 8,  59 => 7,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-8\">
            <!-- Listar articulos -->
            {% for noticia in noticias%}
            <div class=\"article-container my-1\">
                <!-- General la url de la noticia con la función path a partir de los datos que tenemos para ir a la página de la noticia -->
                <a href=\"{{ path('verNoticia', {'seccion':noticia.seccion, 'titular':noticia.textoTitular}) }}\">
                    <!-- Icono noticia -->
                    <img class=\"article-img\" src=\"{{ asset('images/tenis.png') }}\">
                    <div class=\"article-title d-inline-block pl-3 align-middle\">
                        <!-- Sección de la noticia -->
                        <span>{{ titulo }}</span>
                        <br>
                        <!-- Fecha de la noticia -->
                        <span class=\"pl-5 article-details float-right\"> {{ noticia.fecha }}</span>
                    </div>
                </a>
            </div>
                <!-- H1 Artículo -->
                <!-- General la url de la noticia con la función path a partir de los datos que tenemos para ir a la página de la noticia -->
                <a class=\"main-article-link\" href=\"{{ path('verNoticia', {'seccion':noticia.seccion, 'titular':noticia.textoTitular}) }}\">
                    <div class=\"main-article mb-5 pb-3\">
                        <!-- Imagen de la noticia -->
                        <img src=\"{{ asset('images/noticias.jpg') }}\" alt=\"meteor shower\">
                        <!-- Titular de la noticia -->
                        <h1 class=\"text-center mt-2\">{{ noticia.textoTitular|replace({'-': \" \"})}}</h1>
                    </div>
                </a>
            {% else %}
                No se han encontrado noticias!
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "noticias/listar.html.twig", "C:\\xampp\\htdocs\\Deportes_Symfony\\templates\\noticias\\listar.html.twig");
    }
}
