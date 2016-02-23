<?php

/* AdresseBundle:Login:inscri.html.twig */
class __TwigTemplate_3054860756f692434ed8d22525a78c4754f48012a4961ab2b9973be48cb99b7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdresseBundle::layout.html.twig", "AdresseBundle:Login:inscri.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdresseBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ca48e19560991057405a9752bcbf4d0c79d92d11c8b223f4e84a35296703a54 = $this->env->getExtension("native_profiler");
        $__internal_3ca48e19560991057405a9752bcbf4d0c79d92d11c8b223f4e84a35296703a54->enter($__internal_3ca48e19560991057405a9752bcbf4d0c79d92d11c8b223f4e84a35296703a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle:Login:inscri.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ca48e19560991057405a9752bcbf4d0c79d92d11c8b223f4e84a35296703a54->leave($__internal_3ca48e19560991057405a9752bcbf4d0c79d92d11c8b223f4e84a35296703a54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbc45bd98f8f7ff0dc4e866b44a5587b6044a2edae5c093e6e6acfb63f61c430 = $this->env->getExtension("native_profiler");
        $__internal_cbc45bd98f8f7ff0dc4e866b44a5587b6044a2edae5c093e6e6acfb63f61c430->enter($__internal_cbc45bd98f8f7ff0dc4e866b44a5587b6044a2edae5c093e6e6acfb63f61c430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_cbc45bd98f8f7ff0dc4e866b44a5587b6044a2edae5c093e6e6acfb63f61c430->leave($__internal_cbc45bd98f8f7ff0dc4e866b44a5587b6044a2edae5c093e6e6acfb63f61c430_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_191037e16df21d864d396b4d4565d28ac233f2168ba0d9c19f6f954ff5acf0d9 = $this->env->getExtension("native_profiler");
        $__internal_191037e16df21d864d396b4d4565d28ac233f2168ba0d9c19f6f954ff5acf0d9->enter($__internal_191037e16df21d864d396b4d4565d28ac233f2168ba0d9c19f6f954ff5acf0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Inscription</h1>
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 8
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) != "")) {
            // line 9
            echo "\t<h3 class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</h3>
\t";
        }
        // line 11
        echo "\t<div class=\"form-group\">
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'label');
        echo "
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "
\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauvegarder", array()), 'row');
        echo "
\t</div>
";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_191037e16df21d864d396b4d4565d28ac233f2168ba0d9c19f6f954ff5acf0d9->leave($__internal_191037e16df21d864d396b4d4565d28ac233f2168ba0d9c19f6f954ff5acf0d9_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle:Login:inscri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  113 => 30,  107 => 27,  101 => 24,  95 => 21,  91 => 20,  85 => 17,  81 => 16,  75 => 13,  71 => 12,  68 => 11,  62 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AdresseBundle::layout.html.twig" %}*/
/* */
/* {% block title %}Inscription{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Inscription</h1>*/
/* {{ form_start(form) }}*/
/* 	{% if(error != '') %}*/
/* 	<h3 class="alert alert-danger">{{ error }}</h3>*/
/* 	{% endif %}*/
/* 	<div class="form-group">*/
/* 		{{ form_label(form.login) }}*/
/* 		{{ form_widget(form.login) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_label(form.password) }}*/
/* 		{{ form_widget(form.password) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_label(form.nom) }}*/
/* 		{{ form_widget(form.nom) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.prenom) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.email) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.sauvegarder) }}*/
/* 	</div>*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
