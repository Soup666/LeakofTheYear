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

/* security/reset-password/request.html.twig */
class __TwigTemplate_fdd584cf14f5fea102755f7c627a2e0d extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset-password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset-password/request.html.twig"));

        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme.bundle.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/libs.bundle.css"), "html", null, true);
        echo "\" />

    <style>body { display: none; }</style>

    <!-- Title -->
    <title>Reset your password</title>
</head>

<body class=\"d-flex align-items-center bg-auth border-top border-top-2 border-primary\" style=\"display: block;\" >

<!-- CONTENT
================================================== -->
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5 align-self-center\">

            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [0 => "reset_password_error"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 26
            echo "                <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
            <!-- Heading -->
            <h1 class=\"display-4 text-center mb-3\">
                Reset your password
            </h1>

            <p class=\"text-muted\">Enter your email address and we will send you a link to reset your password.</p>

            <!-- Form -->

            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter your email address..."]]);
        echo "

            <button class=\"btn btn-lg w-100 btn-primary mb-3 mt-3\">Send password reset email</button>
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 42, $this->source); })()), 'form_end');
        echo "

        </div>
        <div class=\"col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block\">

            <!-- Image -->
            <div class=\"bg-cover h-100 min-vh-100 mt-n1 me-n3\" style=\"background-image: url('";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/auth_bg.jpeg"), "html", null, true);
        echo "')\"></div>

        </div>
    </div> <!-- / .row -->
</div>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "security/reset-password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  110 => 42,  104 => 39,  100 => 38,  88 => 28,  79 => 26,  75 => 25,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/theme.bundle.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/libs.bundle.css') }}\" />

    <style>body { display: none; }</style>

    <!-- Title -->
    <title>Reset your password</title>
</head>

<body class=\"d-flex align-items-center bg-auth border-top border-top-2 border-primary\" style=\"display: block;\" >

<!-- CONTENT
================================================== -->
<div class=\"container-fluid\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5 align-self-center\">

            {% for flashError in app.flashes('reset_password_error') %}
                <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
            {% endfor %}

            <!-- Heading -->
            <h1 class=\"display-4 text-center mb-3\">
                Reset your password
            </h1>

            <p class=\"text-muted\">Enter your email address and we will send you a link to reset your password.</p>

            <!-- Form -->

            {{ form_start(requestForm) }}
            {{ form_widget(requestForm.email, {'attr' : {'class' : 'form-control', 'placeholder' : 'Enter your email address...'}}) }}

            <button class=\"btn btn-lg w-100 btn-primary mb-3 mt-3\">Send password reset email</button>
            {{ form_end(requestForm) }}

        </div>
        <div class=\"col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block\">

            <!-- Image -->
            <div class=\"bg-cover h-100 min-vh-100 mt-n1 me-n3\" style=\"background-image: url('{{ asset('assets/images/auth_bg.jpeg') }}')\"></div>

        </div>
    </div> <!-- / .row -->
</div>

</body>

</html>", "security/reset-password/request.html.twig", "/var/www/LeakofTheYear/templates/security/reset-password/request.html.twig");
    }
}
