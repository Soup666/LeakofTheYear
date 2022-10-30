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

/* _partial/navbar.html.twig */
class __TwigTemplate_2c1857f3da997d476f815dfa80c834f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partial/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partial/navbar.html.twig"));

        // line 10
        echo "
<nav class=\"navbar navbar-vertical fixed-start navbar-expand-md navbar-light\" id=\"sidebar\">
    <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#sidebarCollapse\" aria-controls=\"sidebarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.svg"), "html", null, true);
        echo "\" class=\"navbar-brand-img mx-auto\" alt=\"Logo\">
        </a>
        <div class=\"navbar-user d-md-none\">
            <div class=\"dropdown\">
                <a href=\"#\" id=\"sidebarIcon\" class=\"dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "getFullName", [], "method", false, false, false, 22), "html", null, true);
        echo "
                </a>

                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"sidebarIcon\">
                    ";
        // line 27
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\" class=\"dropdown-item\">Edit Profile</a>
                    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_logout");
        echo "\" class=\"dropdown-item\">Logout</a>
                </div>
            </div>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
            <ul class=\"navbar-nav\">

                ";
        // line 35
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Home", "fe-home", "admin"], 35, $context, $this->getSourceContext());
        echo "
                ";
        // line 36
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Users", "fe-user", "users"], 36, $context, $this->getSourceContext());
        echo "
                ";
        // line 37
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Tapes", "fe-disc", "tapes"], 37, $context, $this->getSourceContext());
        echo "
                ";
        // line 38
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Artists", "fe-headphones", "artists"], 38, $context, $this->getSourceContext());
        echo "

            </ul>

            <div class=\"mt-auto\"></div>

            <div class=\"navbar-user d-none d-md-flex\" id=\"sidebarUser\">
                <div class=\"dropup\">
                    <a href=\"#\" id=\"sidebarIconCopy\" class=\"dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "getFullName", [], "method", false, false, false, 47), "html", null, true);
        echo "
                    </a>

                    <div class=\"dropdown-menu\" aria-labelledby=\"sidebarIconCopy\">
                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\" class=\"dropdown-item\">Edit Profile</a>
                        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_logout");
        echo "\" class=\"dropdown-item\">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_nav_link($__name__ = null, $__icon__ = null, $__route__ = null, $__additionalRoutes__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "icon" => $__icon__,
            "route" => $__route__,
            "additionalRoutes" => $__additionalRoutes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nav_link"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "nav_link"));

            // line 2
            echo "    ";
            $context["currentRoute"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "get", [0 => "_route"], "method", false, false, false, 2);
            // line 3
            echo "
    <li class=\"nav-item\">
        <a class=\"nav-link ";
            // line 5
            if ((((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 5, $this->source); })()) == (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 5, $this->source); })())) || twig_in_filter((isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 5, $this->source); })()), (isset($context["additionalRoutes"]) || array_key_exists("additionalRoutes", $context) ? $context["additionalRoutes"] : (function () { throw new RuntimeError('Variable "additionalRoutes" does not exist.', 5, $this->source); })())))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 5, $this->source); })()));
            echo "\">
            <i class=\"fe ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "
        </a>
    </li>
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
        return "_partial/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 6,  169 => 5,  165 => 3,  162 => 2,  140 => 1,  121 => 52,  117 => 51,  110 => 47,  98 => 38,  94 => 37,  90 => 36,  86 => 35,  76 => 28,  71 => 27,  64 => 22,  56 => 17,  52 => 16,  44 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro nav_link(name, icon, route, additionalRoutes = []) %}
    {% set currentRoute = app.request.get(\"_route\") %}

    <li class=\"nav-item\">
        <a class=\"nav-link {% if currentRoute == route or currentRoute in additionalRoutes %}active{% endif %}\" href=\"{{ path(route) }}\">
            <i class=\"fe {{ icon }}\"></i> {{ name }}
        </a>
    </li>
{% endmacro %}

<nav class=\"navbar navbar-vertical fixed-start navbar-expand-md navbar-light\" id=\"sidebar\">
    <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#sidebarCollapse\" aria-controls=\"sidebarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{ path(\"home\") }}\">
            <img src=\"{{ asset('assets/img/logo.svg') }}\" class=\"navbar-brand-img mx-auto\" alt=\"Logo\">
        </a>
        <div class=\"navbar-user d-md-none\">
            <div class=\"dropdown\">
                <a href=\"#\" id=\"sidebarIcon\" class=\"dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {{ app.user.getFullName() }}
                </a>

                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"sidebarIcon\">
                    {# TODO: Add a link to change password #}
                    <a href=\"{{ path(\"users_edit\", {'id': app.user.id }) }}\" class=\"dropdown-item\">Edit Profile</a>
                    <a href=\"{{ path(\"auth_logout\") }}\" class=\"dropdown-item\">Logout</a>
                </div>
            </div>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
            <ul class=\"navbar-nav\">

                {{ _self.nav_link('Home', 'fe-home', 'admin') }}
                {{ _self.nav_link('Users', 'fe-user', 'users') }}
                {{ _self.nav_link('Tapes', 'fe-disc', 'tapes') }}
                {{ _self.nav_link('Artists', 'fe-headphones', 'artists') }}

            </ul>

            <div class=\"mt-auto\"></div>

            <div class=\"navbar-user d-none d-md-flex\" id=\"sidebarUser\">
                <div class=\"dropup\">
                    <a href=\"#\" id=\"sidebarIconCopy\" class=\"dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {{ app.user.getFullName() }}
                    </a>

                    <div class=\"dropdown-menu\" aria-labelledby=\"sidebarIconCopy\">
                        <a href=\"{{ path(\"users_edit\", {'id': app.user.id }) }}\" class=\"dropdown-item\">Edit Profile</a>
                        <a href=\"{{ path(\"auth_logout\") }}\" class=\"dropdown-item\">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

", "_partial/navbar.html.twig", "/var/www/LeakofTheYear/templates/_partial/navbar.html.twig");
    }
}
