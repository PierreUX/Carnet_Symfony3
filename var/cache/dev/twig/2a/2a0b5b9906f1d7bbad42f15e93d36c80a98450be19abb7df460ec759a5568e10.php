<?php

/* AdresseBundle:Contact:modification.html.twig */
class __TwigTemplate_43466b78a6aa0198134d0696348681364861b9d0c32e9bac9cf2fb65015d3412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdresseBundle::layout.html.twig", "AdresseBundle:Contact:modification.html.twig", 1);
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
        $__internal_009d4e561c12a75c67b132957aa16c1a57b0889695bbf82683be881e62810179 = $this->env->getExtension("native_profiler");
        $__internal_009d4e561c12a75c67b132957aa16c1a57b0889695bbf82683be881e62810179->enter($__internal_009d4e561c12a75c67b132957aa16c1a57b0889695bbf82683be881e62810179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle:Contact:modification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_009d4e561c12a75c67b132957aa16c1a57b0889695bbf82683be881e62810179->leave($__internal_009d4e561c12a75c67b132957aa16c1a57b0889695bbf82683be881e62810179_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_64fb1479067781c5c96c539fdb6c2d04be99e699cc3ed1e9e2b4ad7ce4ac10f1 = $this->env->getExtension("native_profiler");
        $__internal_64fb1479067781c5c96c539fdb6c2d04be99e699cc3ed1e9e2b4ad7ce4ac10f1->enter($__internal_64fb1479067781c5c96c539fdb6c2d04be99e699cc3ed1e9e2b4ad7ce4ac10f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modification ";
        
        $__internal_64fb1479067781c5c96c539fdb6c2d04be99e699cc3ed1e9e2b4ad7ce4ac10f1->leave($__internal_64fb1479067781c5c96c539fdb6c2d04be99e699cc3ed1e9e2b4ad7ce4ac10f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f5a811212ccf2d7b058f6c71c7dea480805f9955ec446b9e5e0182d06ae8524 = $this->env->getExtension("native_profiler");
        $__internal_8f5a811212ccf2d7b058f6c71c7dea480805f9955ec446b9e5e0182d06ae8524->enter($__internal_8f5a811212ccf2d7b058f6c71c7dea480805f9955ec446b9e5e0182d06ae8524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Modification d'une personne</h1>
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"form-group\">
\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
\t</div>
\t<div class=\"form-group\">
\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauvegarder", array()), 'row');
        echo "
\t</div>
";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8f5a811212ccf2d7b058f6c71c7dea480805f9955ec446b9e5e0182d06ae8524->leave($__internal_8f5a811212ccf2d7b058f6c71c7dea480805f9955ec446b9e5e0182d06ae8524_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle:Contact:modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  91 => 24,  85 => 21,  79 => 18,  73 => 15,  67 => 12,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AdresseBundle::layout.html.twig" %}*/
/* */
/* {% block title %}Modification {% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Modification d'une personne</h1>*/
/* {{ form_start(form) }}*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.nom) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.prenom) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.login) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.password) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.email) }}*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		{{ form_row(form.sauvegarder) }}*/
/* 	</div>*/
/* {{ form_end(form) }}*/
/* {% endblock %}*/
