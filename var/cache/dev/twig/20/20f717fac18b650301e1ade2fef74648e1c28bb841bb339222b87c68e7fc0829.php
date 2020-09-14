<?php

/* home/form.html.twig */
class __TwigTemplate_d279a272cfa16d77c01666310e3c5cd6836feec5d0da623459c41bc80d25d0b8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
<div class=\"input-field col s12\">
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), "model", array()), 'label', array("label_attr" => array("class" => "form_model"), "label" => "Modèle :"));
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), "model", array()), 'widget');
        echo "
<span style=\"color: red\"><strong>";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), "model", array()), 'errors');
        echo "</strong></span>
</div>
<div class=\"input-field col s12\">
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "price", array()), 'label');
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "price", array()), 'widget');
        echo "
<span style=\"color: red\"><strong>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "price", array()), 'errors');
        echo "</strong></span>
</div>
<div class=\"file-field input-field col s12\">
    ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "vars", array()), "value", array()), "id", array())))) {
            // line 14
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "image", array()), "vars", array()), "value", array()), "name", array())), "html", null, true);
            echo "\" class=\"responsive-img\">
        <a
           href=\"#\" class=\"delete-image btn waves-effect waves-light red\">Supprimer</a>
    ";
        }
        // line 18
        echo "    <div class=\"btn\">
        <span>";
        // line 19
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "name", array(), "any", true, true)) ? ("Modifier l'") : ("Ajouter une "));
        echo " image</span>
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "image", array()), 'row');
        echo "
    </div>
    <div class=\"file-path-wrapper\">
        <input class=\"file-path validate\" type=\"text\">
    </div>
</div>
<div class=\"input-field col s12\">
<button class=\"addKeyword btn waves-effect waves-light\">Ajouter un mot clé ?</button>
    <div class=\"error-delete-keyword\" style=\"display: none\">
        <div class=\"card-panel\">
            <span class=\"red-text text-darken-2\">Erreur lors de la suppréssion du mot clé</span>
        </div>
    </div>

";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "keywords", array()), 'widget');
        echo "
</div>
<div class=\"input-field col s12\">
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "cities", array()), 'label');
        echo "
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "cities", array()), 'widget');
        echo "
    <span style=\"color: red\"><strong>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "cities", array()), 'errors');
        echo "</strong></span>
</div>
<div class=\"input-field col s12\">
    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "color", array()), 'label');
        echo "
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "color", array()), 'widget');
        echo "
    <span style=\"color: red\"><strong>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "color", array()), 'errors');
        echo "</strong></span>
</div>
<div class=\"input-field col s12\">
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "carburant", array()), 'label');
        echo "
    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "carburant", array()), 'widget');
        echo "
    <span style=\"color: red\"><strong>";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), "carburant", array()), 'errors');
        echo "</strong></span>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 49,  134 => 48,  130 => 47,  124 => 44,  120 => 43,  116 => 42,  110 => 39,  106 => 38,  102 => 37,  96 => 34,  79 => 20,  75 => 19,  72 => 18,  64 => 14,  62 => 13,  56 => 10,  52 => 9,  48 => 8,  42 => 5,  38 => 4,  34 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr' : {'novalidate' : 'novalidate'}}) }}
<div class=\"input-field col s12\">
{{ form_label(form.model, 'Modèle :', {label_attr : {'class': 'form_model'}}) }}
{{ form_widget(form.model) }}
<span style=\"color: red\"><strong>{{ form_errors(form.model) }}</strong></span>
</div>
<div class=\"input-field col s12\">
{{ form_label(form.price) }}
{{ form_widget(form.price) }}
<span style=\"color: red\"><strong>{{ form_errors(form.price) }}</strong></span>
</div>
<div class=\"file-field input-field col s12\">
    {% if form.image.vars.value.id is defined and form.vars.value.id is not empty %}
    <img src=\"{{ asset('images/')~form.image.vars.value.name }}\" class=\"responsive-img\">
        <a
           href=\"#\" class=\"delete-image btn waves-effect waves-light red\">Supprimer</a>
    {% endif %}
    <div class=\"btn\">
        <span>{{ (form.image.vars.value.name is defined) ? \"Modifier l'\" : \"Ajouter une \"}} image</span>
        {{ form_row(form.image) }}
    </div>
    <div class=\"file-path-wrapper\">
        <input class=\"file-path validate\" type=\"text\">
    </div>
</div>
<div class=\"input-field col s12\">
<button class=\"addKeyword btn waves-effect waves-light\">Ajouter un mot clé ?</button>
    <div class=\"error-delete-keyword\" style=\"display: none\">
        <div class=\"card-panel\">
            <span class=\"red-text text-darken-2\">Erreur lors de la suppréssion du mot clé</span>
        </div>
    </div>

{{ form_widget(form.keywords) }}
</div>
<div class=\"input-field col s12\">
    {{ form_label(form.cities) }}
    {{ form_widget(form.cities) }}
    <span style=\"color: red\"><strong>{{ form_errors(form.cities) }}</strong></span>
</div>
<div class=\"input-field col s12\">
    {{ form_label(form.color) }}
    {{ form_widget(form.color) }}
    <span style=\"color: red\"><strong>{{ form_errors(form.color) }}</strong></span>
</div>
<div class=\"input-field col s12\">
    {{ form_label(form.carburant) }}
    {{ form_widget(form.carburant) }}
    <span style=\"color: red\"><strong>{{ form_errors(form.carburant) }}</strong></span>
</div>
", "home/form.html.twig", "D:\\Bouhlel\\Programmierung\\Formation Symfony 4 + php\\Formations\\rent-a-car\\templates\\home\\form.html.twig");
    }
}
