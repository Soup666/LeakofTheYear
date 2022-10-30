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

/* tapes/frontend/view.html.twig */
class __TwigTemplate_9484840d083d92ed1a33f1cfa426354b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/frontend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tapes/frontend/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tapes/frontend/view.html.twig"));

        $this->parent = $this->loadTemplate("home/frontend/base.html.twig", "tapes/frontend/view.html.twig", 1);
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

        echo "Homepage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "<div class=\"row\">
    <div class=\"col-3\"></div>
    <div class=\"col-6\">
        <nav class=\"navbar navbar-horizontal navbar-expand-md\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Overview</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">User Reviews</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Comments (0)</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\">Discography</a>
            </li>
          </ul>
        </nav>


        <div class=\"row mt-3\">
            <h2 class=\"text-muted\"><strong>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 30, $this->source); })()), "getMainArtist", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</strong></h2>
        </div>

        <div class=\"row\">
            <h1>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"row\">

            <div class=\"col-4\">
                <img src=\"/uploads/covers/";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 40, $this->source); })()), "cover", [], "any", false, false, false, 40), "html", null, true);
        echo "\" width=\"100%\" alt=\"cover\">
            </div>

            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Average Score</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <span class=\"h1 badge bg-success\"><strong>100</strong></span>
                            </div>
                            <div class=\"col-auto\">
                                Based on 1 Review(s)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Details</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 68, $this->source); })()), "ReleaseYear", [], "any", false, false, false, 68), "html", null, true);
        echo " / Release Date
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-auto\">
                            <div class=\"rounded-circle bg-secondary p-3 d-flex justify-content-center align-items-center\" style=\"width: 50px; height: 50px\"><span class=\"text-white\"><strong>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "getInitials", [], "any", false, false, false, 83), "html", null, true);
        echo "</strong></span></div>
                        </div>
                        <div class=\"col-2\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "getFullName", [], "any", false, false, false, 88), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <input type=\"text\" class=\"form-control form-control-sm\" placeholder=\"0-100\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row mt-2\">
                        <textarea name=\"rev_desc\" id=\"rev_desc1\" cols=\"30\" rows=\"5\" class=\"form-control\" placeholder=\"Add a review...\"></textarea>
                    </div>

                    <div class=\"row mt-2\">
                        <div class=\"col\"></div>
                        <div class=\"col-auto\">
                            <button class=\"btn btn-primary btn-sm\">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=\"col-3\"></div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tapes/frontend/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 88,  196 => 83,  178 => 68,  147 => 40,  138 => 34,  131 => 30,  107 => 8,  97 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/frontend/base.html.twig' %}

{% block title %}Homepage{% endblock %}

{% block header %}{% endblock %}

{% block main %}
<div class=\"row\">
    <div class=\"col-3\"></div>
    <div class=\"col-6\">
        <nav class=\"navbar navbar-horizontal navbar-expand-md\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Overview</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">User Reviews</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Comments (0)</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\">Discography</a>
            </li>
          </ul>
        </nav>


        <div class=\"row mt-3\">
            <h2 class=\"text-muted\"><strong>{{tape.getMainArtist.name}}</strong></h2>
        </div>

        <div class=\"row\">
            <h1>{{ tape.name }}</h1>
        </div>

        <div class=\"row\">

            <div class=\"col-4\">
                <img src=\"/uploads/covers/{{ tape.cover }}\" width=\"100%\" alt=\"cover\">
            </div>

            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Average Score</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <span class=\"h1 badge bg-success\"><strong>100</strong></span>
                            </div>
                            <div class=\"col-auto\">
                                Based on 1 Review(s)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Details</h4>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                {{ tape.ReleaseYear }} / Release Date
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-auto\">
                            <div class=\"rounded-circle bg-secondary p-3 d-flex justify-content-center align-items-center\" style=\"width: 50px; height: 50px\"><span class=\"text-white\"><strong>{{ app.user.getInitials }}</strong></span></div>
                        </div>
                        <div class=\"col-2\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    {{ app.user.getFullName }}
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    <input type=\"text\" class=\"form-control form-control-sm\" placeholder=\"0-100\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row mt-2\">
                        <textarea name=\"rev_desc\" id=\"rev_desc1\" cols=\"30\" rows=\"5\" class=\"form-control\" placeholder=\"Add a review...\"></textarea>
                    </div>

                    <div class=\"row mt-2\">
                        <div class=\"col\"></div>
                        <div class=\"col-auto\">
                            <button class=\"btn btn-primary btn-sm\">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=\"col-3\"></div>
</div>
{% endblock %}
", "tapes/frontend/view.html.twig", "/var/www/LeakofTheYear/templates/tapes/frontend/view.html.twig");
    }
}
