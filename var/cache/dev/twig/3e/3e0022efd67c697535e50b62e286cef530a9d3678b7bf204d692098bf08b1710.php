<?php

/* AdresseBundle:Contact:ajout.html.twig */
class __TwigTemplate_3b3f8b598d67d8aa38dbdb65ab30d5c613273da2c6b891fd5a17e700196d86aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdresseBundle::layout.html.twig", "AdresseBundle:Contact:ajout.html.twig", 1);
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
        $__internal_f0157f2cf3a6670d34bc2a16d10435793f310be64d79483400ecd233bb48b614 = $this->env->getExtension("native_profiler");
        $__internal_f0157f2cf3a6670d34bc2a16d10435793f310be64d79483400ecd233bb48b614->enter($__internal_f0157f2cf3a6670d34bc2a16d10435793f310be64d79483400ecd233bb48b614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle:Contact:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0157f2cf3a6670d34bc2a16d10435793f310be64d79483400ecd233bb48b614->leave($__internal_f0157f2cf3a6670d34bc2a16d10435793f310be64d79483400ecd233bb48b614_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56341a96c405d87d692158b9148a632929c78c6ea722d796ed69d07866457661 = $this->env->getExtension("native_profiler");
        $__internal_56341a96c405d87d692158b9148a632929c78c6ea722d796ed69d07866457661->enter($__internal_56341a96c405d87d692158b9148a632929c78c6ea722d796ed69d07866457661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout de personne";
        
        $__internal_56341a96c405d87d692158b9148a632929c78c6ea722d796ed69d07866457661->leave($__internal_56341a96c405d87d692158b9148a632929c78c6ea722d796ed69d07866457661_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e605233a963fe569b2b85ee931ad7bea7ac2bb964ddf76345734623cce479025 = $this->env->getExtension("native_profiler");
        $__internal_e605233a963fe569b2b85ee931ad7bea7ac2bb964ddf76345734623cce479025->enter($__internal_e605233a963fe569b2b85ee931ad7bea7ac2bb964ddf76345734623cce479025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Ajout d'une personne dans votre canet</h1>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>nom</th>
\t\t\t<th>prénom</th>
\t\t\t<th>email</th>
\t\t\t<th>Gestion</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_ajout", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Ajouter</a></td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo " 
\t</tbody>
</table>
";
        
        $__internal_e605233a963fe569b2b85ee931ad7bea7ac2bb964ddf76345734623cce479025->leave($__internal_e605233a963fe569b2b85ee931ad7bea7ac2bb964ddf76345734623cce479025_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle:Contact:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  71 => 19,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AdresseBundle::layout.html.twig" %}*/
/* */
/* {% block title %}Ajout de personne{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Ajout d'une personne dans votre canet</h1>*/
/* <table class="table table-striped">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th>nom</th>*/
/* 			<th>prénom</th>*/
/* 			<th>email</th>*/
/* 			<th>Gestion</th>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	*/
/* 		{% for item in personnes %}*/
/* 			<tr>*/
/* 				<td>{{ item.nom }}</td>*/
/* 				<td>{{ item.prenom }}</td>*/
/* 				<td>{{ item.email }}</td>*/
/* 				<td><a href="{{ path('_ajout', {'id': item.id}) }}" class="btn btn-info">Ajouter</a></td>*/
/* 			</tr>*/
/* 		{% endfor %} */
/* 	</tbody>*/
/* </table>*/
/* {% endblock %}*/
/* */
