<?php

/* AdresseBundle:Contact:index.html.twig */
class __TwigTemplate_3d50a977e3baf60c01178e54e1c83dfe5c944521d537218df09378e4ebea8a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdresseBundle::layout.html.twig", "AdresseBundle:Contact:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdresseBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca4733bfdf46776a3c24c9e22844490d7fac777e957e5cec38ec2ee1062284b1 = $this->env->getExtension("native_profiler");
        $__internal_ca4733bfdf46776a3c24c9e22844490d7fac777e957e5cec38ec2ee1062284b1->enter($__internal_ca4733bfdf46776a3c24c9e22844490d7fac777e957e5cec38ec2ee1062284b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca4733bfdf46776a3c24c9e22844490d7fac777e957e5cec38ec2ee1062284b1->leave($__internal_ca4733bfdf46776a3c24c9e22844490d7fac777e957e5cec38ec2ee1062284b1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_359ff5059b515a1596a1681105667795a2b98248f04bcb302f83d16e7cb8c9f7 = $this->env->getExtension("native_profiler");
        $__internal_359ff5059b515a1596a1681105667795a2b98248f04bcb302f83d16e7cb8c9f7->enter($__internal_359ff5059b515a1596a1681105667795a2b98248f04bcb302f83d16e7cb8c9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Bienvenue sur votre carnet</h1>
";
        // line 4
        if (((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")) == "")) {
            // line 5
            echo "<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>nom</th>
\t\t\t<th>prénom</th>
\t\t\t<th>email</th>
\t\t\t<th>gestion</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t
\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) ? $context["personnes"] : $this->getContext($context, "personnes")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "\t\t\t<tr>
\t\t\t\t<td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prenom", array()), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "email", array()), "html", null, true);
                echo "</td>
\t\t\t\t<td><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_suppression", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">supprimer</a></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo " 
\t</tbody>
</table>
";
        } else {
            // line 27
            echo "\t<p class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, (isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "html", null, true);
            echo "</p>
";
        }
        
        $__internal_359ff5059b515a1596a1681105667795a2b98248f04bcb302f83d16e7cb8c9f7->leave($__internal_359ff5059b515a1596a1681105667795a2b98248f04bcb302f83d16e7cb8c9f7_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  86 => 23,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  62 => 17,  58 => 16,  45 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "AdresseBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* <h1>Bienvenue sur votre carnet</h1>*/
/* {% if contact == '' %}*/
/* <table class="table table-striped">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th>nom</th>*/
/* 			<th>prénom</th>*/
/* 			<th>email</th>*/
/* 			<th>gestion</th>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	*/
/* 		{% for item in personnes %}*/
/* 			<tr>*/
/* 				<td>{{ item.nom }}</td>*/
/* 				<td>{{ item.prenom }}</td>*/
/* 				<td>{{ item.email }}</td>*/
/* 				<td><a href="{{ path('_suppression', {'id': item.id}) }}" class="btn btn-danger">supprimer</a></td>*/
/* 			</tr>*/
/* 		{% endfor %} */
/* 	</tbody>*/
/* </table>*/
/* {% else %}*/
/* 	<p class="alert alert-info">{{contact}}</p>*/
/* {% endif %}*/
/* {% endblock %}*/
