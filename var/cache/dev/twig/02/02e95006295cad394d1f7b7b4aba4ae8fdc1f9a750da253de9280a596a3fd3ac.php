<?php

/* AdresseBundle:Contact:afficher.html.twig */
class __TwigTemplate_e50c9c899cf9f1eb79b6b1d5f85784a488ec447fb9054fcc01f8c2c276cd4054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdresseBundle::layout.html.twig", "AdresseBundle:Contact:afficher.html.twig", 1);
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
        $__internal_d9ccc679b8871de536cee633c355a6f8d58eb55155b4525ea0a854277676df85 = $this->env->getExtension("native_profiler");
        $__internal_d9ccc679b8871de536cee633c355a6f8d58eb55155b4525ea0a854277676df85->enter($__internal_d9ccc679b8871de536cee633c355a6f8d58eb55155b4525ea0a854277676df85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle:Contact:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9ccc679b8871de536cee633c355a6f8d58eb55155b4525ea0a854277676df85->leave($__internal_d9ccc679b8871de536cee633c355a6f8d58eb55155b4525ea0a854277676df85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca18ba3a31838c654c1f0e3809c43a5e35c2563c97f6508475e933c72d84d8ba = $this->env->getExtension("native_profiler");
        $__internal_ca18ba3a31838c654c1f0e3809c43a5e35c2563c97f6508475e933c72d84d8ba->enter($__internal_ca18ba3a31838c654c1f0e3809c43a5e35c2563c97f6508475e933c72d84d8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Affichage";
        
        $__internal_ca18ba3a31838c654c1f0e3809c43a5e35c2563c97f6508475e933c72d84d8ba->leave($__internal_ca18ba3a31838c654c1f0e3809c43a5e35c2563c97f6508475e933c72d84d8ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_98e99fa246425938306839deaed3380b81d9fd95a4c04c21f09a61832788a19d = $this->env->getExtension("native_profiler");
        $__internal_98e99fa246425938306839deaed3380b81d9fd95a4c04c21f09a61832788a19d->enter($__internal_98e99fa246425938306839deaed3380b81d9fd95a4c04c21f09a61832788a19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"jumbotron\">
\t<p>nom : 
\t";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")), "nom", array()), "html", null, true);
        echo "
\t</p>
\t<p>prénom : 
\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")), "prenom", array()), "html", null, true);
        echo "
\t</p>
\t<p>email : 
\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")), "email", array()), "html", null, true);
        echo "
\t</p>
\t";
        // line 16
        if (($this->getAttribute((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")), "id", array()) == (isset($context["idSession"]) ? $context["idSession"] : $this->getContext($context, "idSession")))) {
            // line 17
            echo "\t<p>login :
\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")), "login", array()), "html", null, true);
            echo "
\t</p>
\t<p>password :
\t";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")), "password", array()), "html", null, true);
            echo "
\t</p>
\t<p>date d'inscription :
\t";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")), "dateInscription", array()), "d/m/Y"), "html", null, true);
            echo "
\t</p>
\t";
        }
        // line 27
        echo "\t<a class=\"btn btn-success\" href=\"";
        echo $this->env->getExtension('routing')->getPath("adresse_homepage");
        echo "\" ><i class=\"glyphicon glyphicon-arrow-left\"></i> Retour</a>
\t";
        // line 28
        if (($this->getAttribute((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")), "id", array()) == (isset($context["idSession"]) ? $context["idSession"] : $this->getContext($context, "idSession")))) {
            // line 29
            echo "\t<a class=\"btn btn-info\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_modification", array("id" => $this->getAttribute((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")), "id", array()))), "html", null, true);
            echo "\">Modification</a>
\t";
        }
        // line 31
        echo "</div>
";
        
        $__internal_98e99fa246425938306839deaed3380b81d9fd95a4c04c21f09a61832788a19d->leave($__internal_98e99fa246425938306839deaed3380b81d9fd95a4c04c21f09a61832788a19d_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle:Contact:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 31,  104 => 29,  102 => 28,  97 => 27,  91 => 24,  85 => 21,  79 => 18,  76 => 17,  74 => 16,  69 => 14,  63 => 11,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AdresseBundle::layout.html.twig" %}*/
/* */
/* {% block title %}Affichage{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="jumbotron">*/
/* 	<p>nom : */
/* 	{{ personnes.nom }}*/
/* 	</p>*/
/* 	<p>prénom : */
/* 	{{ personnes.prenom }}*/
/* 	</p>*/
/* 	<p>email : */
/* 	{{ personnes.email }}*/
/* 	</p>*/
/* 	{% if personnes.id == idSession %}*/
/* 	<p>login :*/
/* 	{{ personnes.login }}*/
/* 	</p>*/
/* 	<p>password :*/
/* 	{{ personnes.password }}*/
/* 	</p>*/
/* 	<p>date d'inscription :*/
/* 	{{ personnes.dateInscription|date('d/m/Y') }}*/
/* 	</p>*/
/* 	{% endif %}*/
/* 	<a class="btn btn-success" href="{{ path('adresse_homepage') }}" ><i class="glyphicon glyphicon-arrow-left"></i> Retour</a>*/
/* 	{% if personnes.id == idSession %}*/
/* 	<a class="btn btn-info" href="{{ path('_modification', {'id': personnes.id}) }}">Modification</a>*/
/* 	{% endif %}*/
/* </div>*/
/* {% endblock %}*/
