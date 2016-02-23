<?php

/* AdresseBundle:LoginTest:connexion.html.twig */
class __TwigTemplate_0fcd9b7805d53bc1557b55c6535673ec60c68469b6b661d3e8d9ea1b26f08958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdresseBundle::layout.html.twig", "AdresseBundle:LoginTest:connexion.html.twig", 1);
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
        $__internal_d9d8279fa0988ce7c7fcf7e07a1aecece6b675cb885b705bffb66cfa15dae195 = $this->env->getExtension("native_profiler");
        $__internal_d9d8279fa0988ce7c7fcf7e07a1aecece6b675cb885b705bffb66cfa15dae195->enter($__internal_d9d8279fa0988ce7c7fcf7e07a1aecece6b675cb885b705bffb66cfa15dae195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle:LoginTest:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9d8279fa0988ce7c7fcf7e07a1aecece6b675cb885b705bffb66cfa15dae195->leave($__internal_d9d8279fa0988ce7c7fcf7e07a1aecece6b675cb885b705bffb66cfa15dae195_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_879f864a61394cce3971ae67777efd46e12194a4ff2ad1a079a51bda066aff9d = $this->env->getExtension("native_profiler");
        $__internal_879f864a61394cce3971ae67777efd46e12194a4ff2ad1a079a51bda066aff9d->enter($__internal_879f864a61394cce3971ae67777efd46e12194a4ff2ad1a079a51bda066aff9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_879f864a61394cce3971ae67777efd46e12194a4ff2ad1a079a51bda066aff9d->leave($__internal_879f864a61394cce3971ae67777efd46e12194a4ff2ad1a079a51bda066aff9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1faf8dd7e3023405d67bc9f19ba4f6f9c0ecdd053fd7d867d28b11d1a8f2e08 = $this->env->getExtension("native_profiler");
        $__internal_b1faf8dd7e3023405d67bc9f19ba4f6f9c0ecdd053fd7d867d28b11d1a8f2e08->enter($__internal_b1faf8dd7e3023405d67bc9f19ba4f6f9c0ecdd053fd7d867d28b11d1a8f2e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Connecter vous!</h1>
";
        // line 7
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) != "")) {
            // line 8
            echo "\t<h3 class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</h3>
";
        }
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t<input type=\"submit\" value=\"connexion\" class=\"btn btn-success\">
\t</div>
";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "

";
        
        $__internal_b1faf8dd7e3023405d67bc9f19ba4f6f9c0ecdd053fd7d867d28b11d1a8f2e08->leave($__internal_b1faf8dd7e3023405d67bc9f19ba4f6f9c0ecdd053fd7d867d28b11d1a8f2e08_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle:LoginTest:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  79 => 16,  73 => 13,  68 => 11,  64 => 10,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AdresseBundle::layout.html.twig" %}*/
/* */
/* {% block title %}Connexion{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Connecter vous!</h1>*/
/* {% if error != '' %}*/
/* 	<h3 class="alert alert-danger">{{ error }}</h3>*/
/* {% endif %}*/
/* {{ form_start(form) }}*/
/* 	{{ form_widget(form._token) }}*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.login) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.password) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<input type="submit" value="connexion" class="btn btn-success">*/
/* 	</div>*/
/* {{ form_end(form, {'render_rest': false}) }}*/
/* */
/* {% endblock %}*/
/* */
