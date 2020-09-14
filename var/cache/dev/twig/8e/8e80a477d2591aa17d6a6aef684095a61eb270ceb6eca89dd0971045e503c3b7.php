<?php

/* dashboard.html.twig */
class __TwigTemplate_111a206f168943d7dc05a3cc924f6bdb3d2dd3619fc7b1963c7b5a4bb5ca088e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"section\">
        <!--   Icon Section   -->
        <div class=\"row\">
            <div class=\"col m6 offset-m3\">
                ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new Twig_Error_Runtime('Variable "cars" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            echo "                <ul>
                    <h1>";
            // line 12
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new Twig_Error_Runtime('Variable "cars" does not exist.', 12, $this->source); })())), "html", null, true);
            echo " annonces </h1>
                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new Twig_Error_Runtime('Variable "cars" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                // line 14
                echo "                        <li><h3 class=\"center-align\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", array("id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "model", array()), "html", null, true);
                echo "</a>
                                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", array("id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", array()))), "html", null, true);
                echo "\" class=\"blue lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">create</i>Editer</a>
                                <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("id" => twig_get_attribute($this->env, $this->source, $context["car"], "id", array()))), "html", null, true);
                echo "\" class=\"red lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">delete</i>Supprimer</a>
                            </h3>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                </ul>
                ";
        } else {
            // line 22
            echo "                <h1>Aucune annonce</h1>
                ";
        }
        // line 24
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col m6 offset-m3\">
                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">add</i>Ajout</a>

            </div>
        </div>
        <br><br>

        <div class=\"section\">

        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  102 => 24,  98 => 22,  94 => 20,  84 => 16,  80 => 15,  73 => 14,  69 => 13,  65 => 12,  62 => 11,  60 => 10,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
<div class=\"container\">
    <div class=\"section\">
        <!--   Icon Section   -->
        <div class=\"row\">
            <div class=\"col m6 offset-m3\">
                {% if cars|length > 0 %}
                <ul>
                    <h1>{{ cars|length }} annonces </h1>
                    {% for car in cars %}
                        <li><h3 class=\"center-align\"><a href=\"{{ path('show', {'id': car.id}) }}\"> {{ car.model }}</a>
                                <a href=\"{{ path(\"edit\", {id : car.id}) }}\" class=\"blue lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">create</i>Editer</a>
                                <a href=\"{{ path(\"delete\", {id : car.id}) }}\" class=\"red lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">delete</i>Supprimer</a>
                            </h3>
                        </li>
                    {% endfor %}
                </ul>
                {% else %}
                <h1>Aucune annonce</h1>
                {% endif %}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col m6 offset-m3\">
                <a href=\"{{ path('add') }}\" class=\"btn-large waves-effect waves-light orange darken-3\"><i class=\"material-icons left\">add</i>Ajout</a>

            </div>
        </div>
        <br><br>

        <div class=\"section\">

        </div>
    </div>
</div>
{% endblock %}
", "dashboard.html.twig", "D:\\Bouhlel\\Programmierung\\Formation Symfony 4 + php\\Formations\\rent-a-car\\templates\\dashboard.html.twig");
    }
}
