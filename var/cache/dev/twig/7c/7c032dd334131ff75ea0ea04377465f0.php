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

/* security/login.html.twig */
class __TwigTemplate_b3ac2478a2c51bf5521b0509625241df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 7
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("login");
        echo "

    ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "
    <title>Sign in</title>
</head>

<body class=\"d-flex align-items-center bg-auth border-top border-top-2 border-primary\">
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5 align-self-center\">

            ";
        // line 19
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageKey", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 21, $this->source); })()), "messageData", [], "any", false, false, false, 21), "security"), "html", null, true);
            echo "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        // line 25
        echo "
            <h1 class=\"display-4 text-center mb-3\">
                Sign in
            </h1>

            <form action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auth_login");
        echo "\" method=\"post\">

                <div class=\"form-group\">

                    <label class=\"form-label\" for=\"username\">
                        Username or Email Address
                    </label>

                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\">
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\" for=\"password\">
                        Password
                    </label>

                    <div class=\"input-group input-group-merge\">
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Enter your password\">
                        <span class=\"input-group-text\" id=\"showPass\">
                            <i class=\"fe fe-eye\"></i>
                        </span>
                    </div>
                </div>


                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                <button type=\"submit\" class=\"btn btn-lg w-100 btn-primary mb-3\">
                    Sign in
                </button>

                <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_forgot_password_request");
        echo "\" class=\"form-text small text-muted text-center\">
                    Forgot password?
                </a>
            </form>
        </div>

        ";
        // line 68
        echo "        <div class=\"col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block\">
            <div class=\"bg-cover h-100 min-vh-100 mt-n1 me-n3\" style=\"background-image: url('";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/auth_bg.jpeg"), "html", null, true);
        echo "')\"></div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    let passwordInput = document.getElementById('password');
    let showToggle = document.querySelector('#showPass i');

    showToggle.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showToggle.classList.add('fe-eye-off');
            showToggle.classList.remove('fe-eye');
        } else {
            passwordInput.type = 'password';
            showToggle.classList.add('fe-eye');
            showToggle.classList.remove('fe-eye-off');
        }
    });
</script>

";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("login");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 93,  196 => 92,  178 => 9,  166 => 95,  164 => 92,  139 => 69,  136 => 68,  127 => 61,  118 => 55,  90 => 30,  83 => 25,  76 => 21,  73 => 20,  71 => 19,  60 => 10,  58 => 9,  52 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {# Stylesheets #}
    {{ encore_entry_link_tags('login') }}

    {% block head %}{% endblock %}

    <title>Sign in</title>
</head>

<body class=\"d-flex align-items-center bg-auth border-top border-top-2 border-primary\">
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5 align-self-center\">

            {% if error %}
                <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endif %}

            <h1 class=\"display-4 text-center mb-3\">
                Sign in
            </h1>

            <form action=\"{{ path('auth_login') }}\" method=\"post\">

                <div class=\"form-group\">

                    <label class=\"form-label\" for=\"username\">
                        Username or Email Address
                    </label>

                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\">
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\" for=\"password\">
                        Password
                    </label>

                    <div class=\"input-group input-group-merge\">
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Enter your password\">
                        <span class=\"input-group-text\" id=\"showPass\">
                            <i class=\"fe fe-eye\"></i>
                        </span>
                    </div>
                </div>


                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <button type=\"submit\" class=\"btn btn-lg w-100 btn-primary mb-3\">
                    Sign in
                </button>

                <a href=\"{{ url('app_forgot_password_request') }}\" class=\"form-text small text-muted text-center\">
                    Forgot password?
                </a>
            </form>
        </div>

        {# Cover Image #}
        <div class=\"col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block\">
            <div class=\"bg-cover h-100 min-vh-100 mt-n1 me-n3\" style=\"background-image: url('{{ asset('assets/img/auth_bg.jpeg') }}')\"></div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    let passwordInput = document.getElementById('password');
    let showToggle = document.querySelector('#showPass i');

    showToggle.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showToggle.classList.add('fe-eye-off');
            showToggle.classList.remove('fe-eye');
        } else {
            passwordInput.type = 'password';
            showToggle.classList.add('fe-eye');
            showToggle.classList.remove('fe-eye-off');
        }
    });
</script>

{# JavaScript #}
{% block javascripts %}
    {{ encore_entry_script_tags('login') }}
{% endblock %}

</body>
</html>", "security/login.html.twig", "/var/www/LeakofTheYear/templates/security/login.html.twig");
    }
}
