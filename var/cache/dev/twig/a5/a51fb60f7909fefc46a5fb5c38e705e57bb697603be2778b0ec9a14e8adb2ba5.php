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
class __TwigTemplate_14129a3c1e6f1ca20e8b9fb73975bdfda00154ca5f997380ac64f0022ddbf8bc extends Template
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
                    <button id=\"send\" class=\"btn btn-success\">Ok</button>
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
                                ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 29
            echo "                                <a class=\"btn btn-primary rounded text-light\">Choisir</a>
                                ";
        } else {
            // line 31
            echo "                                <a class=\"btn btn-primary rounded\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Choisir</a>
                                ";
        }
        // line 33
        echo "                            </th>
                            <th scope=\"col\">
                                Formule 2
                                <br>
                                <button class=\"btn btn-primary rounded\">Choisir</button>
                            </th>
                            <th scope=\"col\">
                                Formule 3
                                <br>
                                <button class=\"btn btn-primary rounded\">Choisir</button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope=\"row\">Montant emprunté</th>
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 50
            echo "                                    <td class=\"montantEmprunte\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "montantEmprunte", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </tr>
                        <tr>
                            <th scope=\"row\">Mensualité</th>
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 56
            echo "                                <td class=\"mensualites\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "mensualites", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        </tr>
                        <tr>
                            <th scope=\"row\">Nombres Mensualité</th>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 62
            echo "                                <td class=\"nbrMensualites\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "nombresMensualites", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </tr>
                        <tr>
                            <th scope=\"row\">Taux Fixe</th>
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 68
            echo "                                <td class=\"taux\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "tauxFixe", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                        </tr>
                        <tr>
                            <th scope=\"row\">Montant Total</th>
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 74
            echo "                                <td class=\"montantTotal\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "montantTotal", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    <script>
        function arrondir(nombre) {
            let arrondi = nombre*100;          
            arrondi = Math.round(arrondi); 
            arrondi = arrondi/100;
            return arrondi;
        }

        \$('#send').click(()=> {
            for (let i = 0; i < \$('.montantTotal').length; i++) {
                const montant = parseInt(\$('#montant').val())
                const taux = parseFloat(\$('.taux')[i].innerHTML);
                const nbrMensualites = parseInt(\$('.nbrMensualites')[i].innerHTML);
                const total = (montant * taux) + montant;
                const mensualites = total / nbrMensualites;

                \$('.mensualites')[i].innerHTML = arrondir(mensualites);
                \$('.montantTotal')[i].innerHTML = total;
                \$('.montantEmprunte')[i].innerHTML = montant;
            }
        })
        console.log(\"coucou\");
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
        return array (  263 => 86,  253 => 85,  235 => 76,  226 => 74,  222 => 73,  217 => 70,  208 => 68,  204 => 67,  199 => 64,  190 => 62,  186 => 61,  181 => 58,  172 => 56,  168 => 55,  163 => 52,  154 => 50,  150 => 49,  132 => 33,  126 => 31,  122 => 29,  120 => 28,  104 => 15,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
                    <button id=\"send\" class=\"btn btn-success\">Ok</button>
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
                                {% if is_granted('ROLE_USER') %}
                                <a class=\"btn btn-primary rounded text-light\">Choisir</a>
                                {% else %}
                                <a class=\"btn btn-primary rounded\" href=\"{{ path('app_login') }}\">Choisir</a>
                                {% endif %}
                            </th>
                            <th scope=\"col\">
                                Formule 2
                                <br>
                                <button class=\"btn btn-primary rounded\">Choisir</button>
                            </th>
                            <th scope=\"col\">
                                Formule 3
                                <br>
                                <button class=\"btn btn-primary rounded\">Choisir</button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope=\"row\">Montant emprunté</th>
                                {% for credit in credits %}
                                    <td class=\"montantEmprunte\">{{ credit.montantEmprunte }}</td>
                                {% endfor %}
                            </tr>
                        <tr>
                            <th scope=\"row\">Mensualité</th>
                            {% for credit in credits %}
                                <td class=\"mensualites\">{{ credit.mensualites }}</td>
                            {% endfor %}
                        </tr>
                        <tr>
                            <th scope=\"row\">Nombres Mensualité</th>
                            {% for credit in credits %}
                                <td class=\"nbrMensualites\">{{ credit.nombresMensualites }}</td>
                            {% endfor %}
                        </tr>
                        <tr>
                            <th scope=\"row\">Taux Fixe</th>
                            {% for credit in credits %}
                                <td class=\"taux\">{{ credit.tauxFixe }}</td>
                            {% endfor %}
                        </tr>
                        <tr>
                            <th scope=\"row\">Montant Total</th>
                            {% for credit in credits %}
                                <td class=\"montantTotal\">{{ credit.montantTotal }}</td>
                            {% endfor %}
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
        function arrondir(nombre) {
            let arrondi = nombre*100;          
            arrondi = Math.round(arrondi); 
            arrondi = arrondi/100;
            return arrondi;
        }

        \$('#send').click(()=> {
            for (let i = 0; i < \$('.montantTotal').length; i++) {
                const montant = parseInt(\$('#montant').val())
                const taux = parseFloat(\$('.taux')[i].innerHTML);
                const nbrMensualites = parseInt(\$('.nbrMensualites')[i].innerHTML);
                const total = (montant * taux) + montant;
                const mensualites = total / nbrMensualites;

                \$('.mensualites')[i].innerHTML = arrondir(mensualites);
                \$('.montantTotal')[i].innerHTML = total;
                \$('.montantEmprunte')[i].innerHTML = montant;
            }
        })
        console.log(\"coucou\");
    </script>
{% endblock %}", "home/credit.html.twig", "C:\\Users\\julie\\Documents\\GitHub\\projet_kibozumi\\templates\\home\\credit.html.twig");
    }
}
