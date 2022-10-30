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

/* tapes/backend/home.html.twig */
class __TwigTemplate_e9e8022c939947c0049b1c40277404bd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header_title' => [$this, 'block_header_title'],
            'header_actions' => [$this, 'block_header_actions'],
            'main' => [$this, 'block_main'],
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tapes/backend/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tapes/backend/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tapes/backend/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tapes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_header_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_title"));

        echo "Tapes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_header_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_actions"));

        // line 8
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tape_create");
        echo "\" class=\"btn btn-primary lift\"><i class=\"fe fe-user-plus\"></i>&nbsp;&nbsp;Create</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "    <div class=\"card\">
        <div class=\"card-header\">
            <div class=\"row align-items-center\">
                ";
        // line 16
        echo "                <div class=\"col\">
                    <div class=\"input-group input-group-flush input-group-merge input-group-reverse\">
                        <input class=\"form-control list-search\" type=\"search\" placeholder=\"Search\" name=\"search\" id=\"list_search\" value=\"\">

                        <span class=\"input-group-text\">
                            <i class=\"fe fe-search\"></i>
                        </span>
                    </div>
                </div>

                ";
        // line 27
        echo "                <div class=\"col-auto me-n3 flow-perpage\">
                    <select class=\"form-select form-select-sm form-control-flush\" data-choices='{\"searchEnabled\": false}'>
                        <option value=\"10\">10 per page</option>
                        <option value=\"20\">20 per page</option>
                        <option value=\"50\">50 per page</option>
                        ";
        // line 33
        echo "                    </select>
                </div>

                ";
        // line 37
        echo "                <div class=\"col-auto\">
                    <input type=\"checkbox\" class=\"btn-check\" id=\"showArchived\" autocomplete=\"off\">

                    <label class=\"btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center gap-1\" for=\"showArchived\">
                        <i class=\"fe fe-square\" id=\"showArchivedIcon\"></i>
                        Show Archived
                    </label>
                </div>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover table-wrap card-table\" ";
        // line 49
        echo ">
                <thead>
                <tr>
                    <th>
                        <a class=\"list-sort text-muted\" data-sort=\"item-name\" href=\"#\">Name</a>
                    </th>

                    <th>
                        <a class=\"list-sort text-muted\" data-sort=\"item-artist\" href=\"#\">Artist(s)</a>
                    </th>

                    <th></th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tapes"]) || array_key_exists("tapes", $context) ? $context["tapes"] : (function () { throw new RuntimeError('Variable "tapes" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 66
            echo "                    <tr ";
            if (twig_get_attribute($this->env, $this->source, $context["u"], "archived", [], "any", false, false, false, 66)) {
                echo "class=\"archived\" style=\"display: none\"";
            }
            echo ">
                        <td class=\"item-name text-reset\">
                            ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "name", [], "method", false, false, false, 68), "html", null, true);
            echo "
                        </td>

                        <td class=\"item-artist\">
                            <span class=\"text-reset\">
                                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["u"], "artist", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 74
                echo "                                    <span class=\"badge bg-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "name", [], "any", false, false, false, 74), "html", null, true);
                echo "</span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            </span>
                        </td>

                        <td class=\"text-end\">
                            <div class=\"btn-group\">
                                <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tape_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Edit user\">
                                    <i class=\"fe fe-edit\"></i>
                                </a>

                                ";
            // line 85
            if (((twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 85) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85)) && ( !twig_get_attribute($this->env, $this->source, $context["u"], "hasRole", [0 => "ROLE_ADMIN"], "method", false, false, false, 85) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")))) {
                // line 86
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["u"], "suspended", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tape_unsuspend", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Unsuspend user\">
                                            <i class=\"fe fe-play-circle\"></i>
                                        </a>
                                    ";
                } else {
                    // line 91
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tape_suspend", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Suspend user\">
                                            <i class=\"fe fe-pause-circle\"></i>
                                        </a>
                                    ";
                }
                // line 95
                echo "
                                    ";
                // line 96
                if (twig_get_attribute($this->env, $this->source, $context["u"], "archived", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tape_restore", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Restore user\">
                                            <i class=\"fe fe-arrow-left-circle\"></i>
                                        </a>
                                    ";
                } else {
                    // line 101
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tape_archive", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Archive user\">
                                            <i class=\"fe fe-archive\"></i>
                                        </a>
                                    ";
                }
                // line 105
                echo "                                ";
            }
            // line 106
            echo "                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                </tbody>
            </table>
        </div>

        <div class=\"card-footer d-flex justify-content-between\">

            ";
        // line 117
        echo "            <ul class=\"list-pagination-prev pagination pagination-tabs card-pagination\">
                <li class=\"page-item\">
                    <a class=\"page-link ps-0 pe-4 border-end\" href=\"#\">
                        <i class=\"fe fe-arrow-left me-1\"></i> Prev
                    </a>
                </li>
            </ul>

            ";
        // line 126
        echo "            <ul class=\"list-pagination pagination pagination-tabs card-pagination\"></ul>

            ";
        // line 129
        echo "            <ul class=\"list-pagination-next pagination pagination-tabs card-pagination\">
                <li class=\"page-item\">
                    <a class=\"page-link ps-4 pe-0 border-start\" href=\"#\">
                        Next <i class=\"fe fe-arrow-right ms-1\"></i>
                    </a>
                </li>
            </ul>

            ";
        // line 138
        echo "            <div class=\"list-alert alert alert-dark alert-dismissible border fade\" role=\"alert\">
                <div class=\"row align-items-center\">
                    <div class=\"col\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" id=\"listAlertCheckbox\" type=\"checkbox\" checked disabled>

                            <label class=\"form-check-label text-white\" for=\"listAlertCheckbox\">
                                <span class=\"list-alert-count\">0</span> user(s)
                            </label>
                        </div>
                    </div>

                    <div class=\"col-auto me-n3\">
                        <button class=\"btn btn-sm btn-white-20\">
                            Edit
                        </button>

                        <button class=\"btn btn-sm btn-white-20\">
                            Delete
                        </button>
                    </div>
                </div>

                ";
        // line 162
        echo "                <button type=\"button\" class=\"list-alert-close btn-close\" aria-label=\"Close\"></button>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 168
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 169
        echo "    <script type=\"text/javascript\">
        jQuery(function (\$) {
            \$(\"#showArchived\").on(\"change\", function () {
                if (!\$(this).is(\":checked\")) {
                    \$(\"tr.archived\").hide();
                }else {
                    \$(\"tr.archived\").show();
                }

                \$(\"#showArchivedIcon\").toggleClass(\"fe-square fe-check-square\");
            });
        });

        // Write in pure JS
        /*let showArchived = document.getElementById(\"showArchived\");
        let archivedIcon = document.getElementById(\"showArchivedIcon\");

        showArchived.addEventListener(\"click\", function () {
            let display = this.checked ? \"initial\" : \"none\";

            document.querySelectorAll(\"tr.archived\").forEach(function (tr) {
                tr.style.display = display;
            });

            // Toggle icon
            archivedIcon.classList.toggle(\"fe-square\", \"fe-check-square\");
        });*/

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tapes/backend/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 169,  366 => 168,  352 => 162,  327 => 138,  317 => 129,  313 => 126,  303 => 117,  295 => 110,  286 => 106,  283 => 105,  275 => 101,  267 => 97,  265 => 96,  262 => 95,  254 => 91,  246 => 87,  243 => 86,  241 => 85,  234 => 81,  227 => 76,  218 => 74,  214 => 73,  206 => 68,  198 => 66,  194 => 65,  176 => 49,  162 => 37,  157 => 33,  150 => 27,  138 => 16,  133 => 12,  123 => 11,  110 => 8,  100 => 7,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tapes{% endblock %}

{% block header_title %}Tapes{% endblock %}

{% block header_actions %}
    <a href=\"{{ path('tape_create') }}\" class=\"btn btn-primary lift\"><i class=\"fe fe-user-plus\"></i>&nbsp;&nbsp;Create</a>
{% endblock %}

{% block main %}
    <div class=\"card\">
        <div class=\"card-header\">
            <div class=\"row align-items-center\">
                {# Search #}
                <div class=\"col\">
                    <div class=\"input-group input-group-flush input-group-merge input-group-reverse\">
                        <input class=\"form-control list-search\" type=\"search\" placeholder=\"Search\" name=\"search\" id=\"list_search\" value=\"\">

                        <span class=\"input-group-text\">
                            <i class=\"fe fe-search\"></i>
                        </span>
                    </div>
                </div>

                {# Per page #}
                <div class=\"col-auto me-n3 flow-perpage\">
                    <select class=\"form-select form-select-sm form-control-flush\" data-choices='{\"searchEnabled\": false}'>
                        <option value=\"10\">10 per page</option>
                        <option value=\"20\">20 per page</option>
                        <option value=\"50\">50 per page</option>
                        {#<option>All</option>#}
                    </select>
                </div>

                {# Show archived users #}
                <div class=\"col-auto\">
                    <input type=\"checkbox\" class=\"btn-check\" id=\"showArchived\" autocomplete=\"off\">

                    <label class=\"btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center gap-1\" for=\"showArchived\">
                        <i class=\"fe fe-square\" id=\"showArchivedIcon\"></i>
                        Show Archived
                    </label>
                </div>
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover table-wrap card-table\" {#data-list='{\"valueNames\": [\"item-fullname\", \"item-username\", \"item-email\"]}'#}>
                <thead>
                <tr>
                    <th>
                        <a class=\"list-sort text-muted\" data-sort=\"item-name\" href=\"#\">Name</a>
                    </th>

                    <th>
                        <a class=\"list-sort text-muted\" data-sort=\"item-artist\" href=\"#\">Artist(s)</a>
                    </th>

                    <th></th>
                </tr>
                </thead>

                <tbody>
                {% for u in tapes %}
                    <tr {% if u.archived %}class=\"archived\" style=\"display: none\"{% endif %}>
                        <td class=\"item-name text-reset\">
                            {{ u.name() }}
                        </td>

                        <td class=\"item-artist\">
                            <span class=\"text-reset\">
                                {% for r in u.artist %}
                                    <span class=\"badge bg-secondary\">{{ r.name }}</span>
                                {% endfor %}
                            </span>
                        </td>

                        <td class=\"text-end\">
                            <div class=\"btn-group\">
                                <a href=\"{{ path('tape_edit', {'id' : u.id}) }}\" class=\"btn btn-sm btn-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Edit user\">
                                    <i class=\"fe fe-edit\"></i>
                                </a>

                                {% if u.id != app.user.id and (not u.hasRole(\"ROLE_ADMIN\") or is_granted(\"ROLE_ADMIN\")) %}
                                    {% if u.suspended %}
                                        <a href=\"{{ path('tape_unsuspend', {'id' : u.id}) }}\" class=\"btn btn-sm btn-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Unsuspend user\">
                                            <i class=\"fe fe-play-circle\"></i>
                                        </a>
                                    {% else %}
                                        <a href=\"{{ path('tape_suspend', {'id' : u.id}) }}\" class=\"btn btn-sm btn-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Suspend user\">
                                            <i class=\"fe fe-pause-circle\"></i>
                                        </a>
                                    {% endif %}

                                    {% if u.archived %}
                                        <a href=\"{{ path('tape_restore', {'id' : u.id}) }}\" class=\"btn btn-sm btn-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Restore user\">
                                            <i class=\"fe fe-arrow-left-circle\"></i>
                                        </a>
                                    {% else %}
                                        <a href=\"{{ path('tape_archive', {'id' : u.id}) }}\" class=\"btn btn-sm btn-white\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Archive user\">
                                            <i class=\"fe fe-archive\"></i>
                                        </a>
                                    {% endif %}
                                {% endif %}
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"card-footer d-flex justify-content-between\">

            {# Pagination (prev) #}
            <ul class=\"list-pagination-prev pagination pagination-tabs card-pagination\">
                <li class=\"page-item\">
                    <a class=\"page-link ps-0 pe-4 border-end\" href=\"#\">
                        <i class=\"fe fe-arrow-left me-1\"></i> Prev
                    </a>
                </li>
            </ul>

            {# Pagination #}
            <ul class=\"list-pagination pagination pagination-tabs card-pagination\"></ul>

            {# Pagination (next) #}
            <ul class=\"list-pagination-next pagination pagination-tabs card-pagination\">
                <li class=\"page-item\">
                    <a class=\"page-link ps-4 pe-0 border-start\" href=\"#\">
                        Next <i class=\"fe fe-arrow-right ms-1\"></i>
                    </a>
                </li>
            </ul>

            {# Alert #}
            <div class=\"list-alert alert alert-dark alert-dismissible border fade\" role=\"alert\">
                <div class=\"row align-items-center\">
                    <div class=\"col\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" id=\"listAlertCheckbox\" type=\"checkbox\" checked disabled>

                            <label class=\"form-check-label text-white\" for=\"listAlertCheckbox\">
                                <span class=\"list-alert-count\">0</span> user(s)
                            </label>
                        </div>
                    </div>

                    <div class=\"col-auto me-n3\">
                        <button class=\"btn btn-sm btn-white-20\">
                            Edit
                        </button>

                        <button class=\"btn btn-sm btn-white-20\">
                            Delete
                        </button>
                    </div>
                </div>

                {# Close #}
                <button type=\"button\" class=\"list-alert-close btn-close\" aria-label=\"Close\"></button>
            </div>
        </div>
    </div>
{% endblock %}

{% block scripts %}
    <script type=\"text/javascript\">
        jQuery(function (\$) {
            \$(\"#showArchived\").on(\"change\", function () {
                if (!\$(this).is(\":checked\")) {
                    \$(\"tr.archived\").hide();
                }else {
                    \$(\"tr.archived\").show();
                }

                \$(\"#showArchivedIcon\").toggleClass(\"fe-square fe-check-square\");
            });
        });

        // Write in pure JS
        /*let showArchived = document.getElementById(\"showArchived\");
        let archivedIcon = document.getElementById(\"showArchivedIcon\");

        showArchived.addEventListener(\"click\", function () {
            let display = this.checked ? \"initial\" : \"none\";

            document.querySelectorAll(\"tr.archived\").forEach(function (tr) {
                tr.style.display = display;
            });

            // Toggle icon
            archivedIcon.classList.toggle(\"fe-square\", \"fe-check-square\");
        });*/

    </script>
{% endblock %}
", "tapes/backend/home.html.twig", "/var/www/LeakofTheYear/templates/tapes/backend/home.html.twig");
    }
}
