<?php

/* noticias/noticia.html.twig */
class __TwigTemplate_b0644d871942a210111d508d37f43c3f91da0a2c8fffd267021abab11772083f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "noticias/noticia.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "noticias/noticia.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "noticias/noticia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Noticia: ";
        echo twig_escape_filter($this->env, ($context["titulo"] ?? null), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"show-article-container p-3 mt-4\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <!-- Imagen de la noticia. Cargarla desde el nuevo atributo asset -->
                        <img class=\"show-article-img\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, ($context["noticias"] ?? null), "imagen", [])), "html", null, true);
        echo "\">
                        <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                            <span class=\"show-article-title \">";
        // line 13
        echo twig_escape_filter($this->env, ($context["titulo"] ?? null), "html", null, true);
        echo "</span>
                            <br>
                            <!-- Asignamos la imagen relacionada con la sección y insertamos el nombre de la sección -->
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, ($context["noticias"] ?? null), "seccion", [])) . ".png"), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["noticias"] ?? null), "seccion", []), "html", null, true);
        echo " </span>
                            <!-- Mostrar la fecha de la noticia -->
                            <span class=\"pl-2 article-details\"> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["noticias"] ?? null), "fecha", []), "html", null, true);
        echo "</span>
                            <span class=\"pl-2 article-details\">
                               <span class=\"js-like-article-count\">5</span>
                               <a href=\"\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                           </span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"article-text\">
                            ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["noticias"] ?? null), "textoNoticia", []), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <p class=\"share-icons mb-5\"><span class=\"pr-1\">Compartir:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/article_show.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "noticias/noticia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 46,  149 => 45,  140 => 44,  115 => 29,  101 => 18,  94 => 16,  88 => 13,  83 => 11,  74 => 4,  65 => 3,  46 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Noticia: {{ titulo }}{% endblock %}
{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"show-article-container p-3 mt-4\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <!-- Imagen de la noticia. Cargarla desde el nuevo atributo asset -->
                        <img class=\"show-article-img\" src=\"{{asset('images/') ~ noticias.imagen }}\">
                        <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                            <span class=\"show-article-title \">{{ titulo }}</span>
                            <br>
                            <!-- Asignamos la imagen relacionada con la sección y insertamos el nombre de la sección -->
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/') ~ noticias.seccion ~ '.png' }}\"> {{ noticias.seccion }} </span>
                            <!-- Mostrar la fecha de la noticia -->
                            <span class=\"pl-2 article-details\"> {{ noticias.fecha }}</span>
                            <span class=\"pl-2 article-details\">
                               <span class=\"js-like-article-count\">5</span>
                               <a href=\"\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                           </span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"article-text\">
                            {{ noticias.textoNoticia }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <p class=\"share-icons mb-5\"><span class=\"pr-1\">Compartir:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/article_show.js') }}\"></script>
{% endblock %}", "noticias/noticia.html.twig", "C:\\xampp\\htdocs\\Deportes_Symfony\\templates\\noticias\\noticia.html.twig");
    }
}
