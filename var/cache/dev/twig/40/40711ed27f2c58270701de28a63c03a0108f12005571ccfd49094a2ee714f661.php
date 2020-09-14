<?php

/* home/index.html.twig */
class __TwigTemplate_1a64ac1c10b57aded99ba6a7a31567e17f96ca2655796eda50661f24f23e102a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"section no-pad-bot orange lighten-5\" id=\"index-banner\">
        <div class=\"container\">
            <br><br>
            <h1 class=\"header center orange-text text-darken-3\">Rent Car</h1>
            <div class=\"row center\">
                <h5 class=\"header col s12 light\">Location de Véhicule</h5>
                <h2><i class=\"header center orange-text text-darken-3 material-icons\">directions_car</i></h2>

            </div>
            <div class=\"row center\">
                ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 16
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
            echo "\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">add</i>Ajout</a>
                ";
        }
        // line 18
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_car");
        echo "\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">search</i>Recherche avancée</a>
                ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">supervisor_account</i>Admin</a>
                ";
        }
        // line 22
        echo "                ";
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->source); })()), "user", array()))) {
            // line 23
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">supervisor_account</i>Inscription</a>
                <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">navigate_next</i>Connexion</a>
                ";
        }
        // line 26
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 27
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">exit_to_app</i>Deconnexion</a>
                ";
        }
        // line 29
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 30
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">dvr</i>Dashboard</a>
                ";
        }
        // line 32
        echo "            </div>
            <br><br>

        </div>
    </div>
    <div class=\"container\">
        <div class=\"section\">
   <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col m6 offset-m3\">
                    <ul>
                        <h1>Voitures disponibles :</h1>
                        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new Twig_Error_Runtime('Variable "cars" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 45
            echo "                            <li>
                                <h3><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", array("id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "model", array()), "html", null, true);
            echo "</a></h3>
                                        ";
            // line 47
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", $context["car"])) {
                // line 48
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", array("id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", array()))), "html", null, true);
                echo "\" class=\"blue lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">create</i>Editer</a>
                                        ";
            }
            // line 50
            echo "                                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", $context["car"])) {
                // line 51
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", array()))), "html", null, true);
                echo "\" class=\"red lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">delete</i>Supprimer</a>
                                        ";
            }
            // line 53
            echo "                                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </ul>
                </div>
        </div>
        <br><br>

        <div class=\"section\">

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  162 => 53,  156 => 51,  153 => 50,  147 => 48,  145 => 47,  139 => 46,  136 => 45,  132 => 44,  118 => 32,  112 => 30,  109 => 29,  103 => 27,  100 => 26,  95 => 24,  90 => 23,  87 => 22,  81 => 20,  79 => 19,  74 => 18,  68 => 16,  66 => 15,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

    <div class=\"section no-pad-bot orange lighten-5\" id=\"index-banner\">
        <div class=\"container\">
            <br><br>
            <h1 class=\"header center orange-text text-darken-3\">Rent Car</h1>
            <div class=\"row center\">
                <h5 class=\"header col s12 light\">Location de Véhicule</h5>
                <h2><i class=\"header center orange-text text-darken-3 material-icons\">directions_car</i></h2>

            </div>
            <div class=\"row center\">
                {% if is_granted('ROLE_USER') %}
                <a href=\"{{ path('add') }}\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">add</i>Ajout</a>
                {% endif %}
                <a href=\"{{ path('search_car') }}\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">search</i>Recherche avancée</a>
                {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('admin') }}\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">supervisor_account</i>Admin</a>
                {% endif %}
                {% if app.user is null %}
                <a href=\"{{ path('registration') }}\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">supervisor_account</i>Inscription</a>
                <a href=\"{{ path('app_login') }}\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">navigate_next</i>Connexion</a>
                {% endif %}
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ path('logout') }}\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">exit_to_app</i>Deconnexion</a>
                {% endif %}
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ path('dashboard') }}\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">dvr</i>Dashboard</a>
                {% endif %}
            </div>
            <br><br>

        </div>
    </div>
    <div class=\"container\">
        <div class=\"section\">
   <!--   Icon Section   -->
            <div class=\"row\">
                <div class=\"col m6 offset-m3\">
                    <ul>
                        <h1>Voitures disponibles :</h1>
                        {% for car in cars %}
                            <li>
                                <h3><a href=\"{{ path('show', {'id': car.id}) }}\"> {{ car.model }}</a></h3>
                                        {% if is_granted('EDIT', car) %}
                                            <a href=\"{{ path(\"edit\", {id : car.id}) }}\" class=\"blue lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">create</i>Editer</a>
                                        {% endif %}
                                        {% if is_granted('DELETE', car) %}
                                            <a href=\"{{ path(\"delete\", {id : car.id}) }}\" class=\"red lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">delete</i>Supprimer</a>
                                        {% endif %}
                                        </li>
                        {% endfor %}
                    </ul>
                </div>
        </div>
        <br><br>

        <div class=\"section\">

        </div>
    </div>
{% endblock %}
", "home/index.html.twig", "D:\\Bouhlel\\Programmierung\\Formation Symfony 4 + php\\Formations\\rent-a-car\\templates\\home\\index.html.twig");
    }
}
