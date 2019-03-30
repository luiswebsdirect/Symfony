<?php

/* base.html.twig */
class __TwigTemplate_17a6e818b5a758950e95bbeb2d72f70c35ebd5d8640f2f0712993ec280940027 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark navbar-bg mb-5\">
    <a style=\"margin-left: 75px;\" class=\"navbar-brand space-brand\" href=\"#\">Mi página de deportes</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Inicio</a>
            </li>
            <!-- AÑADIR LINKS A LAS SECCIONES CON LA RUTA, PARA VER LISTADO DE  NOTICIAS DE UNA SECCIÓN -->
            <li class=\"nav-item\">
                <a style=\"color: #fff;\" class=\"nav-link\"href=\"http://localhost:8000/deportes/futbol\"> Futbol</a>
            </li>
            <li class=\"nav-item\">
                <a style=\"color: #fff;\" class=\"nav-link\" href=\"http://localhost:8000/deportes/tenis\"> Tenis</a>
            </li>
            <li class=\"nav-item\">
                <a style=\"color: #fff;\" class=\"nav-link\" href=\"http://localhost:8000/deportes/rugby\">Rugby</a>
            </li>
        </ul>

        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Buscar\">
            <button class=\"btn btn-info my-2 my-sm-0\" type=\"submit\">Buscar</button>
        </form>

        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item dropdown\" style=\"margin-right: 75px;\">
                <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img class=\"nav-profile-img rounded-circle\" src=\"/images/runner.png\">
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"#\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Perfil"), "html", null, true);
        echo "</a>
                    <a class=\"dropdown-item\" href=\"#\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Crear Noticia"), "html", null, true);
        echo "</a>
                    ";
        // line 50
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 51
            echo "                        <a class=\"dropdown-item\" href=\"/deportes/logout\">
                            ";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LogOut"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 55
            echo "                        <a class=\"dropdown-item\" href=\"/deportes/login\">
                            ";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("LogIn"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 59
        echo "                </div>
            </li>
        </ul>
    </div>
</nav>
";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "<footer class=\"footer\">
    <div class=\"container text-center\">
        <span class=\"text-muted\">Mi página de deportes <i class=\"fa fa-heart\" style=\"color: red;\"></i> realizada con Symfony4 <a href=\"#\">Imagina Formación</a></span>
    </div>
</footer>
";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inicio";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
        <!-- AÑADIR CSS DEL PROYECTO -->
        <link rel=\"stylesheet\" href=\"/css/font-awesome.css\">
        <link rel=\"stylesheet\" href=\"/css/styles.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 65
        echo "    <!-- AÑADIR TEXTO EN EL CUERPO DE NUESTRA PÁGINA -->
    <div class=\"container text-center\">
        <h1 class=\"text-muted\"> ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["texto"] ?? null)), "html", null, true);
        echo "
            ";
        // line 68
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 69
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bienvenido"), "html", null, true);
            echo "
                ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", []), "username", []), "html", null, true);
            echo "
            ";
        }
        // line 72
        echo "        </h1>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    <script>
        \$('.dropdown-toggle').dropdown();
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  232 => 81,  223 => 80,  211 => 72,  206 => 70,  201 => 69,  199 => 68,  195 => 67,  191 => 65,  182 => 64,  168 => 8,  159 => 7,  141 => 4,  129 => 88,  127 => 80,  120 => 75,  118 => 64,  111 => 59,  105 => 56,  102 => 55,  96 => 52,  93 => 51,  91 => 50,  87 => 49,  83 => 48,  46 => 13,  44 => 7,  38 => 4,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <title>{% block title %}Inicio{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
        <!-- AÑADIR CSS DEL PROYECTO -->
        <link rel=\"stylesheet\" href=\"/css/font-awesome.css\">
        <link rel=\"stylesheet\" href=\"/css/styles.css\">
    {% endblock %}
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-dark navbar-bg mb-5\">
    <a style=\"margin-left: 75px;\" class=\"navbar-brand space-brand\" href=\"#\">Mi página de deportes</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item\">
                <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Inicio</a>
            </li>
            <!-- AÑADIR LINKS A LAS SECCIONES CON LA RUTA, PARA VER LISTADO DE  NOTICIAS DE UNA SECCIÓN -->
            <li class=\"nav-item\">
                <a style=\"color: #fff;\" class=\"nav-link\"href=\"http://localhost:8000/deportes/futbol\"> Futbol</a>
            </li>
            <li class=\"nav-item\">
                <a style=\"color: #fff;\" class=\"nav-link\" href=\"http://localhost:8000/deportes/tenis\"> Tenis</a>
            </li>
            <li class=\"nav-item\">
                <a style=\"color: #fff;\" class=\"nav-link\" href=\"http://localhost:8000/deportes/rugby\">Rugby</a>
            </li>
        </ul>

        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Buscar\" aria-label=\"Buscar\">
            <button class=\"btn btn-info my-2 my-sm-0\" type=\"submit\">Buscar</button>
        </form>

        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item dropdown\" style=\"margin-right: 75px;\">
                <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img class=\"nav-profile-img rounded-circle\" src=\"/images/runner.png\">
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"#\">{{ 'Perfil'| trans }}</a>
                    <a class=\"dropdown-item\" href=\"#\">{{ 'Crear Noticia'| trans }}</a>
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <a class=\"dropdown-item\" href=\"/deportes/logout\">
                            {{ 'LogOut'| trans }}
                        </a>
                    {% else %}
                        <a class=\"dropdown-item\" href=\"/deportes/login\">
                            {{ 'LogIn'| trans }}
                        </a>
                    {% endif %}
                </div>
            </li>
        </ul>
    </div>
</nav>
{% block body %}
    <!-- AÑADIR TEXTO EN EL CUERPO DE NUESTRA PÁGINA -->
    <div class=\"container text-center\">
        <h1 class=\"text-muted\"> {{ texto | trans }}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {{'Bienvenido' | trans}}
                {{ app.user.username}}
            {% endif %}
        </h1>
    </div>
{% endblock %}
<footer class=\"footer\">
    <div class=\"container text-center\">
        <span class=\"text-muted\">Mi página de deportes <i class=\"fa fa-heart\" style=\"color: red;\"></i> realizada con Symfony4 <a href=\"#\">Imagina Formación</a></span>
    </div>
</footer>
{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    <script>
        \$('.dropdown-toggle').dropdown();
    </script>
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Deportes_Symfony\\templates\\base.html.twig");
    }
}
