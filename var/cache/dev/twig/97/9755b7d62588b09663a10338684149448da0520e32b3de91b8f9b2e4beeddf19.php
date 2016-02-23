<?php

/* AdresseBundle:Login:connexion.html.twig */
class __TwigTemplate_e4439c61b10402c3e6765973fad7695b267d5a6792efb01c376102c76bc50d66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdresseBundle::layout.html.twig", "AdresseBundle:Login:connexion.html.twig", 1);
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
        $__internal_152642f5b7736f2e280d6ddce288e93d7428ea1056e33088902f7bc3324b0840 = $this->env->getExtension("native_profiler");
        $__internal_152642f5b7736f2e280d6ddce288e93d7428ea1056e33088902f7bc3324b0840->enter($__internal_152642f5b7736f2e280d6ddce288e93d7428ea1056e33088902f7bc3324b0840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle:Login:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_152642f5b7736f2e280d6ddce288e93d7428ea1056e33088902f7bc3324b0840->leave($__internal_152642f5b7736f2e280d6ddce288e93d7428ea1056e33088902f7bc3324b0840_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_73a9b4a186950b71a6cb2d745a18ae7b0bd9a03eadbf9119e5e93bb194b77097 = $this->env->getExtension("native_profiler");
        $__internal_73a9b4a186950b71a6cb2d745a18ae7b0bd9a03eadbf9119e5e93bb194b77097->enter($__internal_73a9b4a186950b71a6cb2d745a18ae7b0bd9a03eadbf9119e5e93bb194b77097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_73a9b4a186950b71a6cb2d745a18ae7b0bd9a03eadbf9119e5e93bb194b77097->leave($__internal_73a9b4a186950b71a6cb2d745a18ae7b0bd9a03eadbf9119e5e93bb194b77097_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4874e2b1f69130d2e0d7b1ec870dad341be50928c5ed9ba014b52cebe48c8b4 = $this->env->getExtension("native_profiler");
        $__internal_e4874e2b1f69130d2e0d7b1ec870dad341be50928c5ed9ba014b52cebe48c8b4->enter($__internal_e4874e2b1f69130d2e0d7b1ec870dad341be50928c5ed9ba014b52cebe48c8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Connectez-vous!</h1>
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
        
        $__internal_e4874e2b1f69130d2e0d7b1ec870dad341be50928c5ed9ba014b52cebe48c8b4->leave($__internal_e4874e2b1f69130d2e0d7b1ec870dad341be50928c5ed9ba014b52cebe48c8b4_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle:Login:connexion.html.twig";
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
/* <h1>Connectez-vous!</h1>*/
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
