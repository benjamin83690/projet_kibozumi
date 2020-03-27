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

/* category/show.html.twig */
class __TwigTemplate_2f80d89d5b963736a2f6aa07e0d6251fe90f1ab7b6f8fa6dbb548bcfd63d5bbb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/show.html.twig", 1);
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
        echo "    <h1>Category</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <section>
        <div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"jumbotron col-md-4 m-auto shadow\">
                        <h4 class=\"text-center\">Votre simulation de : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), "html", null, true);
        echo "</h4>
                        <div class=\"card flex-row justify-content-around p-4\">
                            <div class=\"form-group\">
                                <label for=\"\">Montant du prêt :</label>
                                <input type=\"number\" name=\"montant\" id=\"montant\" class=\"form-control\" value=\"10000\">
                            </div>
                            <button id=\"send\" class=\"btn btn-success\">Ok</button>
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <table class=\"table table-striped\">
                            <thead class=\"bg-success\">
                                <tr>
                                    <th scope=\"col\"></th>
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 40, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 41
            echo "                                    <th scope=\"col\">
                                        Formule ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42), "html", null, true);
            echo "
                                        <br>
                                        ";
            // line 44
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 45
                echo "                                            <a class=\"btn btn-primary rounded data\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\">Choisir</a>
                                            <pre>
                                                ";
                // line 47
                echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["credit"]);
                echo "
                                            </pre>
                                        ";
            } else {
                // line 50
                echo "                                            <a class=\"btn btn-primary rounded\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\">Choisir</a>
                                        ";
            }
            // line 52
            echo "                                    </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <th scope=\"row\">Montant emprunté</th>
                                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 60
            echo "                                            <td class=\"montantEmprunte\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "montantEmprunte", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                                    </tr>
                                <tr>
                                    <th scope=\"row\">Mensualité</th>
                                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 66
            echo "                                        <td class=\"mensualites\" id=\"mensualites";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "mensualites", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                </tr>
                                <tr>
                                    <th scope=\"row\">Nombres Mensualité</th>
                                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 72
            echo "                                        <td class=\"nbrMensualites\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "nombresMensualites", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                </tr>
                                <tr>
                                    <th scope=\"row\">Taux Fixe</th>
                                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 78
            echo "                                        <td class=\"taux\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "tauxFixe", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                                </tr>
                                <tr>
                                    <th scope=\"row\">Montant Total</th>
                                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
            // line 84
            echo "                                        <td class=\"montantTotal\" id=\"montantTotal";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["credit"], "montantTotal", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 99
        echo twig_include($this->env, $context, "category/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "    
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
        ";
        // line 125
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 126
            echo "            \$('.data').click((e) => { 
                    
                \$.ajax({
                    data: {
                        montant: \$('#montant').val(),
                        mensualites : \$('#mensualites' + e.target.getAttribute('id'))[0].innerHTML,
                        montantTotal: \$('#montantTotal'+ e.target.getAttribute('id'))[0].innerHTML,
                        creditId: e.target.getAttribute('id')
                    },
                    ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) || array_key_exists("credits", $context) ? $context["credits"] : (function () { throw new RuntimeError('Variable "credits" does not exist.', 135, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
                // line 136
                echo "                    url: \"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136), "id" => twig_get_attribute($this->env, $this->source, $context["credit"], "id", [], "any", false, false, false, 136)]), "html", null, true);
                echo "\",
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                    dataType: 'json',
                    complete: function() {
                        // \$('#send').prop('disabled', false);
                        // \$('#send').next().remove();
                    },
                    error: function () {
                        alert('Desole erreur');
                    },
                    success: function (data) {
                   
                    }
                });
                
            });
        ";
        }
        // line 153
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 153,  386 => 138,  377 => 136,  373 => 135,  362 => 126,  360 => 125,  336 => 103,  326 => 102,  314 => 99,  309 => 97,  304 => 95,  293 => 86,  282 => 84,  278 => 83,  273 => 80,  264 => 78,  260 => 77,  255 => 74,  246 => 72,  242 => 71,  237 => 68,  226 => 66,  222 => 65,  217 => 62,  208 => 60,  204 => 59,  197 => 54,  182 => 52,  176 => 50,  170 => 47,  162 => 45,  160 => 44,  155 => 42,  152 => 41,  135 => 40,  118 => 26,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} sur nos Crédit{% endblock %}

{% block body %}
    <h1>Category</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ category.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ category.titre }}</td>
            </tr>
        </tbody>
    </table>

    <section>
        <div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"jumbotron col-md-4 m-auto shadow\">
                        <h4 class=\"text-center\">Votre simulation de : {{ category.titre }}</h4>
                        <div class=\"card flex-row justify-content-around p-4\">
                            <div class=\"form-group\">
                                <label for=\"\">Montant du prêt :</label>
                                <input type=\"number\" name=\"montant\" id=\"montant\" class=\"form-control\" value=\"10000\">
                            </div>
                            <button id=\"send\" class=\"btn btn-success\">Ok</button>
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <table class=\"table table-striped\">
                            <thead class=\"bg-success\">
                                <tr>
                                    <th scope=\"col\"></th>
                                    {% for credit in credits %}
                                    <th scope=\"col\">
                                        Formule {{ loop.index }}
                                        <br>
                                        {% if is_granted('ROLE_USER') %}
                                            <a class=\"btn btn-primary rounded data\" id=\"{{credit.id}}\" href=\"{{ path('user_show',{id: app.user.id}) }}\">Choisir</a>
                                            <pre>
                                                {{ dump(credit) }}
                                            </pre>
                                        {% else %}
                                            <a class=\"btn btn-primary rounded\" href=\"{{ path('app_login') }}\">Choisir</a>
                                        {% endif %}
                                    </th>
                                    {% endfor %}
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
                                        <td class=\"mensualites\" id=\"mensualites{{credit.id}}\">{{ credit.mensualites }}</td>
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
                                        <td class=\"montantTotal\" id=\"montantTotal{{credit.id}}\">{{ credit.montantTotal }}</td>
                                    {% endfor %}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href=\"{{ path('category_index') }}\">back to list</a>

    <a href=\"{{ path('category_edit', {'id': category.id}) }}\">edit</a>

    {{ include('category/_delete_form.html.twig') }}
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
        {% if is_granted('ROLE_USER') %}
            \$('.data').click((e) => { 
                    
                \$.ajax({
                    data: {
                        montant: \$('#montant').val(),
                        mensualites : \$('#mensualites' + e.target.getAttribute('id'))[0].innerHTML,
                        montantTotal: \$('#montantTotal'+ e.target.getAttribute('id'))[0].innerHTML,
                        creditId: e.target.getAttribute('id')
                    },
                    {% for credit in credits %}
                    url: \"{{path('ajax', {user: app.user.id, id: credit.id})}}\",
                    {% endfor %}
                    dataType: 'json',
                    complete: function() {
                        // \$('#send').prop('disabled', false);
                        // \$('#send').next().remove();
                    },
                    error: function () {
                        alert('Desole erreur');
                    },
                    success: function (data) {
                   
                    }
                });
                
            });
        {% endif %}
    </script>
{% endblock %}
", "category/show.html.twig", "C:\\Users\\julie\\Documents\\GitHub\\projet_kibozumi\\templates\\category\\show.html.twig");
    }
}
