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

/* home/_partial/navbar.html.twig */
class __TwigTemplate_0746d1896fcfdc25430a92af66dc9a76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/_partial/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/_partial/navbar.html.twig"));

        // line 10
        echo "
<nav class=\"navbar navbar-horizontal fixed-start navbar-expand-md navbar-light p-3\" id=\"sidebar\">
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
        <!-- Mobile -->
        <div class=\"navbar-user d-md-none\">
            <div class=\"dropdown\">
                <a href=\"#\" id=\"sidebarIcon\" class=\"dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "getFullName", [], "method", false, false, false, 23), "html", null, true);
        echo "
                </a>

                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"sidebarIcon\">
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\" class=\"dropdown-item\">Edit Profile</a>
                    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_logout");
        echo "\" class=\"dropdown-item\">Logout</a>
                </div>
            </div>
        </div>
        <!-- Web -->
        <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
            <ul class=\"navbar-nav\">

                ";
        // line 36
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Best Albums", "", "t"], 36, $context, $this->getSourceContext());
        echo "
                ";
        // line 37
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Discover", "", "t"], 37, $context, $this->getSourceContext());
        echo "
                ";
        // line 38
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["New Releases", "", "t"], 38, $context, $this->getSourceContext());
        echo "
                ";
        // line 39
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Lists", "", "t"], 39, $context, $this->getSourceContext());
        echo "
                ";
        // line 40
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Genres", "", "t"], 40, $context, $this->getSourceContext());
        echo "
                ";
        // line 41
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["News", "", "t"], 41, $context, $this->getSourceContext());
        echo "
                ";
        // line 42
        echo twig_call_macro($macros["_self"], "macro_nav_link", ["Community", "", "t"], 42, $context, $this->getSourceContext());
        echo "

            </ul>

            <div class=\"mt-auto\"></div>

            <div class=\"navbar-user d-none d-md-flex\" id=\"sidebarUser\">
                <div class=\"dropdown\">
                    <a href=\"#\" id=\"sidebarIconCopy\" class=\"dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "getFullName", [], "method", false, false, false, 51), "html", null, true);
        echo "
                    </a>

                    <div class=\"dropdown-menu\" aria-labelledby=\"sidebarIconCopy\">
                    ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "isAdmin", [], "any", false, false, false, 55)) {
            echo "<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"dropdown-item\">Admin</a>";
        }
        // line 56
        echo "
                        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\" class=\"dropdown-item\">Edit Profile</a>
                        <a href=\"";
        // line 58
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
        return "home/_partial/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 6,  191 => 5,  187 => 3,  184 => 2,  162 => 1,  143 => 58,  139 => 57,  136 => 56,  130 => 55,  123 => 51,  111 => 42,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  76 => 28,  72 => 27,  65 => 23,  56 => 17,  52 => 16,  44 => 10,);
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

<nav class=\"navbar navbar-horizontal fixed-start navbar-expand-md navbar-light p-3\" id=\"sidebar\">
    <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#sidebarCollapse\" aria-controls=\"sidebarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{ path(\"home\") }}\">
            <img src=\"{{ asset('assets/img/logo.svg') }}\" class=\"navbar-brand-img mx-auto\" alt=\"Logo\">
        </a>
        <!-- Mobile -->
        <div class=\"navbar-user d-md-none\">
            <div class=\"dropdown\">
                <a href=\"#\" id=\"sidebarIcon\" class=\"dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {{ app.user.getFullName() }}
                </a>

                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"sidebarIcon\">
                    <a href=\"{{ path(\"users_edit\", {'id': app.user.id }) }}\" class=\"dropdown-item\">Edit Profile</a>
                    <a href=\"{{ path(\"auth_logout\") }}\" class=\"dropdown-item\">Logout</a>
                </div>
            </div>
        </div>
        <!-- Web -->
        <div class=\"collapse navbar-collapse\" id=\"sidebarCollapse\">
            <ul class=\"navbar-nav\">

                {{ _self.nav_link('Best Albums', '', 't') }}
                {{ _self.nav_link('Discover', '', 't') }}
                {{ _self.nav_link('New Releases', '', 't') }}
                {{ _self.nav_link('Lists', '', 't') }}
                {{ _self.nav_link('Genres', '', 't') }}
                {{ _self.nav_link('News', '', 't') }}
                {{ _self.nav_link('Community', '', 't') }}

            </ul>

            <div class=\"mt-auto\"></div>

            <div class=\"navbar-user d-none d-md-flex\" id=\"sidebarUser\">
                <div class=\"dropdown\">
                    <a href=\"#\" id=\"sidebarIconCopy\" class=\"dropdown-toggle\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {{ app.user.getFullName() }}
                    </a>

                    <div class=\"dropdown-menu\" aria-labelledby=\"sidebarIconCopy\">
                    {% if app.user.isAdmin %}<a href=\"{{ path(\"admin\") }}\" class=\"dropdown-item\">Admin</a>{% endif %}

                        <a href=\"{{ path(\"users_edit\", {'id': app.user.id }) }}\" class=\"dropdown-item\">Edit Profile</a>
                        <a href=\"{{ path(\"auth_logout\") }}\" class=\"dropdown-item\">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

", "home/_partial/navbar.html.twig", "/var/www/LeakofTheYear/templates/home/_partial/navbar.html.twig");
    }
}
