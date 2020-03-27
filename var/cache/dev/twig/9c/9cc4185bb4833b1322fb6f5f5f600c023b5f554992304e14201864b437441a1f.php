<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/credit.html.twig */
class __TwigTemplate_2e8a8a4baf8a5bfe8c215fe8cf3490cd292a2fbb73cd8c8b94232523a5109fec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/credit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/credit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/credit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " sur nos Crédit";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"jumbotron col-md-4 m-auto shadow\">
                <h4 class=\"text-center\">Votre simulation de ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["credit"]) || array_key_exists("credit", $context) ? $context["credit"] : (function () { throw new RuntimeError('Variable "credit" does not exist.', 11, $this->source); })()), "titre", [], "any", false, false, false, 11), "html", null, true);
        echo " :</h2>
                <div class=\"card flex-row justify-content-around p-4\">
                    <div class=\"form-group\">
                        <label for=\"\">Montant du prêt :</label>
                        <input type=\"number\" name=\"montant\" id=\"montant\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["credit"]) || array_key_exists("credit", $context) ? $context["credit"] : (function () { throw new RuntimeError('Variable "credit" does not exist.', 15, $this->source); })()), "montantEmprunte", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
                    </div>
                    <button type=\"button\" id=\"send\">Ok</button>
                </div>
            </div>
            <div class=\"col-md-8\">
                <table class=\"table table-striped\">
                    <thead class=\"bg-success\">
                        <tr>
                            <th scope=\"col\"></th>
                            <th scope=\"col\">
                                Formule 1
                                <br>
                                <button class=\"btn btn-primary rounded\">Choisir</button>
                            </th>
                            ";
        // line 40
        echo "                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope=\"row\">Montant ermprunté</th>
                                <td id=\"montantEmprunte\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["credit"]) || array_key_exists("credit", $context) ? $context["credit"] : (function () { throw new RuntimeError('Variable "credit" does not exist.', 45, $this->source); })()), "montantEmprunte", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
                                ";
        // line 48
        echo "                            </tr>
                        <tr>
                            <th scope=\"row\">Mensualité</th>
                            <td id=\"mensualites\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["credit"]) || array_key_exists("credit", $context) ? $context["credit"] : (function () { throw new RuntimeError('Variable "credit" does not exist.', 51, $this->source); })()), "mensualites", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
                            ";
        // line 54
        echo "                        </tr>
                        <tr>
                            <th scope=\"row\">Nombres Mensualité</th>
                            <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["credit"]) || array_key_exists("credit", $context) ? $context["credit"] : (function () { throw new RuntimeError('Variable "credit" does not exist.', 57, $this->source); })()), "nombresMensualites", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                            ";
        // line 60
        echo "                        </tr>
                        <tr>
                            <th scope=\"row\">Taux Fixe</th>
                            <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["credit"]) || array_key_exists("credit", $context) ? $context["credit"] : (function () { throw new RuntimeError('Variable "credit" does not exist.', 63, $this->source); })()), "tauxFixe", [], "any", false, false, false, 63), "html", null, true);
        echo "</td>
                            ";
        // line 66
        echo "                        </tr>
                        <tr>
                            <th scope=\"row\">Montant Total</th>
                            <td>";
        // line 69
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["credit"]) || array_key_exists("credit", $context) ? $context["credit"] : (function () { throw new RuntimeError('Variable "credit" does not exist.', 69, $this->source); })()), "nombresMensualites", [], "any", false, false, false, 69) * twig_get_attribute($this->env, $this->source, (isset($context["credit"]) || array_key_exists("credit", $context) ? $context["credit"] : (function () { throw new RuntimeError('Variable "credit" does not exist.', 69, $this->source); })()), "mensualites", [], "any", false, false, false, 69)), "html", null, true);
        echo "</td>
                            ";
        // line 72
        echo "                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    <script>
        \$('#send').click(function() {
            \$(this).prop('disabled', true);
            \$(this).after('<div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div>');
            \$.ajax({
                data: {
                    montant: \$('#montant').val()
                },
                url: '";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["credit"]) || array_key_exists("credit", $context) ? $context["credit"] : (function () { throw new RuntimeError('Variable "credit" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
        echo "',
                dataType: 'json',
                complete: function() {
                    \$('#send').prop('disabled', false);
                    \$('#send').next().remove(); 
                },
                error: function () {
                    alert('Desole erreur');
                },
                success: function (data) {
                    console.log(data);
                    \$('#montantEmprunte').html(data.montantEmprunte);
                    \$('#mensualites').html(data.mensualites);
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/credit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 90,  197 => 82,  187 => 81,  169 => 72,  165 => 69,  160 => 66,  156 => 63,  151 => 60,  147 => 57,  142 => 54,  138 => 51,  133 => 48,  129 => 45,  122 => 40,  104 => 15,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} sur nos Crédit{% endblock %}

{% block body %}

<div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"jumbotron col-md-4 m-auto shadow\">
                <h4 class=\"text-center\">Votre simulation de {{ credit.titre }} :</h2>
                <div class=\"card flex-row justify-content-around p-4\">
                    <div class=\"form-group\">
                        <label for=\"\">Montant du prêt :</label>
                        <input type=\"number\" name=\"montant\" id=\"montant\" class=\"form-control\" value=\"{{ credit.montantEmprunte }}\">
                    </div>
                    <button type=\"button\" id=\"send\">Ok</button>
                </div>
            </div>
            <div class=\"col-md-8\">
                <table class=\"table table-striped\">
                    <thead class=\"bg-success\">
                        <tr>
                            <th scope=\"col\"></th>
                            <th scope=\"col\">
                                Formule 1
                                <br>
                                <button class=\"btn btn-primary rounded\">Choisir</button>
                            </th>
                            {# <th scope=\"col\">
                                Formule 2
                                <br>
                                <button class=\"btn btn-primary rounded\">Choisir</button>
                            </th>
                            <th scope=\"col\">
                                Formule 3
                                <br>
                                <button class=\"btn btn-primary rounded\">Choisir</button>
                            </th> #}
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope=\"row\">Montant ermprunté</th>
                                <td id=\"montantEmprunte\">{{ credit.montantEmprunte }}</td>
                                {# <td>{{ credit.montantEmprunte }}</td>
                                <td>{{ credit.montantEmprunte }}</td> #}
                            </tr>
                        <tr>
                            <th scope=\"row\">Mensualité</th>
                            <td id=\"mensualites\">{{ credit.mensualites }}</td>
                            {# <td>{{ credit.mensualites }}</td>
                            <td>{{ credit.mensualites }}</td> #}
                        </tr>
                        <tr>
                            <th scope=\"row\">Nombres Mensualité</th>
                            <td>{{ credit.nombresMensualites }}</td>
                            {# <td>{{ credit.nombresMensualites }}</td>
                            <td>{{ credit.nombresMensualites }}</td> #}
                        </tr>
                        <tr>
                            <th scope=\"row\">Taux Fixe</th>
                            <td>{{ credit.tauxFixe }}</td>
                            {# <td>{{ credit.tauxFixe }}</td>
                            <td>{{ credit.tauxFixe }}</td> #}
                        </tr>
                        <tr>
                            <th scope=\"row\">Montant Total</th>
                            <td>{{ credit.nombresMensualites * credit.mensualites }}</td>
                            {# <td>{{ credit.montantTotal }}</td>
                            <td>{{ credit.montantTotal }}</td> #}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
{% endblock %}
{% block javascripts %}
    <script>
        \$('#send').click(function() {
            \$(this).prop('disabled', true);
            \$(this).after('<div class=\"spinner-border\" role=\"status\"><span class=\"sr-only\">Loading...</span></div>');
            \$.ajax({
                data: {
                    montant: \$('#montant').val()
                },
                url: '{{path(\"ajax\", {id: credit.id})}}',
                dataType: 'json',
                complete: function() {
                    \$('#send').prop('disabled', false);
                    \$('#send').next().remove(); 
                },
                error: function () {
                    alert('Desole erreur');
                },
                success: function (data) {
                    console.log(data);
                    \$('#montantEmprunte').html(data.montantEmprunte);
                    \$('#mensualites').html(data.mensualites);
                }
            });
        });
    </script>
{% endblock %}", "home/credit.html.twig", "C:\\Users\\julie\\Documents\\GitHub\\projet_kibozumi\\templates\\home\\credit.html.twig");
    }
}
