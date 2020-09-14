<?php

/* home/show.html.twig */
class __TwigTemplate_b58d4f5c587d09b406bfd26ea090e484b534fd06222ad46e7b3ddbceb868c222 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/show.html.twig"));

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
            <div class=\"col s12 m12\">

                <h1>Votre voiture avec l'id : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 10, $this->source); })()), "id", array()), "html", null, true);
        echo "</h1>

                    <h2>Modele : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 12, $this->source); })()), "model", array()), "html", null, true);
        echo "</h2>
                    <h2>Prix : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 13, $this->source); })()), "price", array()), "html", null, true);
        echo "</h2>
                    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["car"] ?? null), "image", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 15, $this->source); })()), "image", array()), "name", array())), "html", null, true);
            echo "\">
                        ";
        } else {
            // line 17
            echo "                        <p>Pas d'image</p>
                    ";
        }
        // line 19
        echo "
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 20, $this->source); })()), "keywords", array()));
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
            // line 21
            echo "                <p>";
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
        // line 23
        echo "
                ";
        // line 24
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 24, $this->source); })()), "cities", array())) > 0)) {
            // line 25
            echo "                    <p>  Voiture disponibles à
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 26, $this->source); })()), "cities", array()));
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
        // line 28
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"blue lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">home</i>Accueil</a>
                ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EDIT", (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 30, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"blue lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">create</i>Editer</a>
                ";
        }
        // line 32
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("DELETE", (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new Twig_Error_Runtime('Variable "car" does not exist.', 33, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" class=\"red lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">delete</i>Supprimer</a>
                ";
        }
        // line 35
        echo "            </div>
    </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 35,  165 => 33,  162 => 32,  156 => 30,  154 => 29,  149 => 28,  135 => 26,  132 => 25,  130 => 24,  127 => 23,  106 => 21,  89 => 20,  86 => 19,  82 => 17,  76 => 15,  74 => 14,  70 => 13,  66 => 12,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"container\">
    <div class=\"section\">

        <div class=\"row\">
            <div class=\"col s12 m12\">

                <h1>Votre voiture avec l'id : {{ car.id }}</h1>

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
                <a href=\"{{ path(\"home\") }}\" class=\"blue lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">home</i>Accueil</a>
                {% if is_granted('EDIT', car) %}
                <a href=\"{{ path(\"edit\", {id : car.id}) }}\" class=\"blue lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">create</i>Editer</a>
                {% endif %}
                {% if is_granted('DELETE', car) %}
                <a href=\"{{ path(\"delete\", {id : car.id}) }}\" class=\"red lighten-1 waves-effect waves-light btn\"><i class=\"material-icons left\">delete</i>Supprimer</a>
                {% endif %}
            </div>
    </div>
    </div>
</div>
{% endblock %}
", "home/show.html.twig", "D:\\Bouhlel\\Programmierung\\Formation Symfony 4 + php\\Formations\\rent-a-car\\templates\\home\\show.html.twig");
    }
}
