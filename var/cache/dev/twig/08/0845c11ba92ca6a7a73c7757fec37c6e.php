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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return "home/frontend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tapes/frontend/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tapes/frontend/view.html.twig"));

        $this->parent = $this->loadTemplate("home/frontend/base.html.twig", "tapes/frontend/view.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
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

    // line 19
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

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 22
        echo "<div class=\"row\">
    <div class=\"col-2\"></div>
    <div class=\"col-8\">
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
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 44, $this->source); })()), "getMainArtist", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "</strong></h2>
        </div>

        <div class=\"row\">
            <h1>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"row\">

            <div class=\"col-4\">
                <img src=\"/uploads/covers/";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 54, $this->source); })()), "cover", [], "any", false, false, false, 54), "html", null, true);
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
                        ";
        // line 80
        echo twig_call_macro($macros["_self"], "macro_details_line", [twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 80, $this->source); })()), "ReleaseDate", [], "any", false, false, false, 80), "d/m/Y"), "Release Date"], 80, $context, $this->getSourceContext());
        echo "
                        ";
        // line 81
        echo twig_call_macro($macros["_self"], "macro_details_line", [twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 81, $this->source); })()), "format", [], "any", false, false, false, 81), "Format"], 81, $context, $this->getSourceContext());
        echo "
                        ";
        // line 82
        echo twig_call_macro($macros["_self"], "macro_details_line", [twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 82, $this->source); })()), "labelName", [], "any", false, false, false, 82), "Label"], 82, $context, $this->getSourceContext());
        echo "
                        ";
        // line 83
        echo twig_call_macro($macros["_self"], "macro_details_line", [twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 83, $this->source); })()), "genreNames", [], "any", false, false, false, 83), "Genres"], 83, $context, $this->getSourceContext());
        echo "
                        ";
        // line 84
        echo twig_call_macro($macros["_self"], "macro_details_line", [twig_get_attribute($this->env, $this->source, (isset($context["tape"]) || array_key_exists("tape", $context) ? $context["tape"] : (function () { throw new RuntimeError('Variable "tape" does not exist.', 84, $this->source); })()), "tagNames", [], "any", false, false, false, 84), "Genres"], 84, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
            </div>
        </div>

        <hr>

        ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-auto\">
                            <div class=\"rounded-circle bg-secondary p-3 d-flex justify-content-center align-items-center\" style=\"width: 50px; height: 50px\"><span class=\"text-white\"><strong>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "getInitials", [], "any", false, false, false, 98), "html", null, true);
        echo "</strong></span></div>
                        </div>
                        <div class=\"col-2\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "getFullName", [], "any", false, false, false, 103), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col\">
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "score", [], "any", false, false, false, 108), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row mt-2\">
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "description", [], "any", false, false, false, 115), 'widget');
        echo "
                    </div>

                    <div class=\"row mt-2\">
                        <div class=\"col\"></div>
                        <div class=\"col-auto\">
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "post", [], "any", false, false, false, 121), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 127
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'form_end');
        echo "


        ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 130, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 131
            echo "        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <div class=\"card-title\">
                        <div class=\"row\">
                            <div class=\"col-auto\">
                                <div class=\"rounded-circle bg-secondary p-3 d-flex justify-content-center align-items-center\" style=\"width: 50px; height: 50px\"><span class=\"text-white\"><strong>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "author", [], "any", false, false, false, 137), "getInitials", [], "any", false, false, false, 137), "html", null, true);
            echo "</strong></span></div>
                            </div>
                            <div class=\"col-2\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "author", [], "any", false, false, false, 142), "getFullName", [], "any", false, false, false, 142), "html", null, true);
            echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <span class=\"badge bg-success\"><strong>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "score", [], "any", false, false, false, 147), "html", null, true);
            echo "</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "description", [], "any", false, false, false, 155), "html", null, true);
            echo "
                </div>
            </div>
            
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
    </div>
    <div class=\"col-2\"></div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1
    public function macro_details_line($__detail__ = null, $__caption__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "detail" => $__detail__,
            "caption" => $__caption__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "details_line"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "details_line"));

            // line 2
            echo "
    <div class=\"row\">
        <div class=\"col\">
            ";
            // line 5
            if ((array_key_exists("detail", $context) &&  !twig_test_empty((isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 5, $this->source); })())))) {
                // line 6
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 6, $this->source); })()), "html", null, true);
                echo "
            ";
            } else {
                // line 8
                echo "                <span class=\"text-muted\">N/A</span>
            ";
            }
            // line 10
            echo "            <span class=\"text-muted\"> / ";
            echo twig_escape_filter($this->env, (isset($context["caption"]) || array_key_exists("caption", $context) ? $context["caption"] : (function () { throw new RuntimeError('Variable "caption" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</span>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
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
        return array (  365 => 10,  361 => 8,  355 => 6,  353 => 5,  348 => 2,  328 => 1,  314 => 161,  302 => 155,  291 => 147,  283 => 142,  275 => 137,  267 => 131,  263 => 130,  257 => 127,  248 => 121,  239 => 115,  229 => 108,  221 => 103,  213 => 98,  204 => 92,  193 => 84,  189 => 83,  185 => 82,  181 => 81,  177 => 80,  148 => 54,  139 => 48,  132 => 44,  108 => 22,  98 => 21,  80 => 19,  61 => 17,  38 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro details_line(detail, caption) %}

    <div class=\"row\">
        <div class=\"col\">
            {% if detail is defined and detail is not empty  %}
                {{ detail }}
            {% else %}
                <span class=\"text-muted\">N/A</span>
            {% endif %}
            <span class=\"text-muted\"> / {{ caption }}</span>
        </div>
    </div>
{% endmacro %}

{% extends 'home/frontend/base.html.twig' %}

{% block title %}Homepage{% endblock %}

{% block header %}{% endblock %}

{% block main %}
<div class=\"row\">
    <div class=\"col-2\"></div>
    <div class=\"col-8\">
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
                        {{_self.details_line( tape.ReleaseDate|date('d/m/Y') , 'Release Date')}}
                        {{_self.details_line(tape.format, 'Format')}}
                        {{_self.details_line(tape.labelName, 'Label')}}
                        {{_self.details_line(tape.genreNames, 'Genres')}}
                        {{_self.details_line(tape.tagNames, 'Genres')}}
                    </div>
                </div>
            </div>
        </div>

        <hr>

        {{ form_start(form) }}
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
                                    {{ form_widget(form.score) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row mt-2\">
                        {{ form_widget(form.description) }}
                    </div>

                    <div class=\"row mt-2\">
                        <div class=\"col\"></div>
                        <div class=\"col-auto\">
                            {{ form_widget(form.post) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ form_end(form) }}


        {% for r in reviews %}
        <div class=\"row\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <div class=\"card-title\">
                        <div class=\"row\">
                            <div class=\"col-auto\">
                                <div class=\"rounded-circle bg-secondary p-3 d-flex justify-content-center align-items-center\" style=\"width: 50px; height: 50px\"><span class=\"text-white\"><strong>{{ r.author.getInitials }}</strong></span></div>
                            </div>
                            <div class=\"col-2\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        {{ r.author.getFullName }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <span class=\"badge bg-success\"><strong>{{ r.score }}</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    {{ r.description }}
                </div>
            </div>
            
        </div>
        {% endfor %}

    </div>
    <div class=\"col-2\"></div>
</div>
{% endblock %}
", "tapes/frontend/view.html.twig", "/var/www/LeakofTheYear/templates/tapes/frontend/view.html.twig");
    }
}
