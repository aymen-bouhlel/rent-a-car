<?php

/* search/car.html.twig */
class __TwigTemplate_85638da0097356b1467d3010ede455dfb9bd5f873f1edc57cc890040a753983d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/car.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/car.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/car.html.twig"));

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
        echo "<div class=\"container\">
    <div class=\"section\">
        <div class=\"row\">
            <div class=\"col m6 offset-m3\">
                <h1>Recherche avancée</h1>

                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new Twig_Error_Runtime('Variable "search_form" does not exist.', 10, $this->source); })()), 'form');
        echo "
            </div>
        </div>
        ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->source); })()), "request", array()), "method", array()) == "POST")) {
            // line 14
            echo "        <div class=\"row\">
            <div class=\"col m6 offset-m3\">
                 ";
            // line 16
            if ((twig_length_filter($this->env, (isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new Twig_Error_Runtime('Variable "cars" does not exist.', 16, $this->source); })())) == 0)) {
                // line 17
                echo "                <h1>Aucun résultat pour votre recherche</h1>
                ";
            } else {
                // line 19
                echo "                <h1>Resultats de la recherche</h1>
                ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new Twig_Error_Runtime('Variable "cars" does not exist.', 20, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
                    // line 21
                    echo "                    <div>
                        <h2>Modele : ";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "model", array()), "html", null, true);
                    echo "</h2>
                        <h2>Prix : ";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "price", array()), "html", null, true);
                    echo "</h2>
                        ";
                    // line 24
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "image", array(), "any", false, true), "name", array(), "any", true, true)) {
                        // line 25
                        echo "                            <img src=\"";
                        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["car"], "image", array()), "name", array())), "html", null, true);
                        echo "\">
                        ";
                    } else {
                        // line 27
                        echo "                            <p>Pas d'image</p>
                        ";
                    }
                    // line 29
                    echo "
                        ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["car"], "keywords", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                        // line 31
                        echo "                            <p>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["keyword"], "name", array()), "html", null, true);
                        echo " ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                            echo ", ";
                        }
                        echo "</p>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "
                        ";
                    // line 34
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "cities", array())) > 0)) {
                        // line 35
                        echo "                            <p>  Voiture disponibles à
                                ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["car"], "cities", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                            echo "<a class=\"btn waves-effect waves-light\" >";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["city"], "name", array()), "html", null, true);
                            echo "</a>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</p>
                        ";
                    }
                    // line 38
                    echo "
                        <a href=\"";
                    // line 39
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                    echo "\">Accueil</a>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "
                ";
            }
            // line 44
            echo "
            </div>
        </div>
        ";
        }
        // line 48
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 53
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

<script>

    \$(document).ready(function() {
        \$('select').formSelect();

    });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search/car.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 53,  207 => 52,  195 => 48,  189 => 44,  185 => 42,  176 => 39,  173 => 38,  159 => 36,  156 => 35,  154 => 34,  151 => 33,  130 => 31,  113 => 30,  110 => 29,  106 => 27,  100 => 25,  98 => 24,  94 => 23,  90 => 22,  87 => 21,  83 => 20,  80 => 19,  76 => 17,  74 => 16,  70 => 14,  68 => 13,  62 => 10,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"section\">
        <div class=\"row\">
            <div class=\"col m6 offset-m3\">
                <h1>Recherche avancée</h1>

                {{ form(search_form) }}
            </div>
        </div>
        {% if app.request.method == 'POST' %}
        <div class=\"row\">
            <div class=\"col m6 offset-m3\">
                 {% if cars |length == 0 %}
                <h1>Aucun résultat pour votre recherche</h1>
                {% else %}
                <h1>Resultats de la recherche</h1>
                {% for car in cars %}
                    <div>
                        <h2>Modele : {{ car.model }}</h2>
                        <h2>Prix : {{ car.price }}</h2>
                        {% if car.image.name is defined %}
                            <img src=\"{{ asset('images/')~car.image.name }}\">
                        {% else %}
                            <p>Pas d'image</p>
                        {% endif %}

                        {% for keyword in car.keywords %}
                            <p>{{ keyword.name }} {% if not loop.last %}, {% endif %}</p>
                        {% endfor %}

                        {% if car.cities |length > 0 %}
                            <p>  Voiture disponibles à
                                {% for city in car.cities %}<a class=\"btn waves-effect waves-light\" >{{ city.name }}</a>{% endfor %}</p>
                        {% endif %}

                        <a href=\"{{ path(\"home\") }}\">Accueil</a>
                    </div>
                {% endfor %}

                {% endif %}

            </div>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascript %}
{{ parent() }}

<script>

    \$(document).ready(function() {
        \$('select').formSelect();

    });
    </script>
{% endblock %}
", "search/car.html.twig", "D:\\Bouhlel\\Programmierung\\Formation Symfony 4 + php\\Formations\\rent-a-car\\templates\\search\\car.html.twig");
    }
}
