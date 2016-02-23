<?php

/* AdresseBundle::layout.html.twig */
class __TwigTemplate_35ada91d8ab24c009e4ec8a1c68eb91a5f99db9ee09743e570e659744396daa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a53fbd17fd2444dd1bd2089956c49d0fda3d86c9a7fa5913d815353d231b658e = $this->env->getExtension("native_profiler");
        $__internal_a53fbd17fd2444dd1bd2089956c49d0fda3d86c9a7fa5913d815353d231b658e->enter($__internal_a53fbd17fd2444dd1bd2089956c49d0fda3d86c9a7fa5913d815353d231b658e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t    <meta charset=\"UTF-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t</head>
\t<body>
\t\t<nav class=\"navbar navbar-inverse\">
\t    \t<div class=\"container\">
\t        \t<div class=\"navbar-header\">
\t          \t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t            \t<span class=\"sr-only\">Toggle navigation</span>
\t            \t<span class=\"icon-bar\"></span>
\t            \t<span class=\"icon-bar\"></span>
\t            \t<span class=\"icon-bar\"></span>
\t          \t</button>
\t          \t<a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("adresse_homepage");
        echo "\">Carnet</a>
\t\t        </div>
\t\t        <div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t        \t<ul class=\"nav navbar-nav\">
\t\t        \t";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "_connexion")) {
            // line 23
            echo "\t\t            \t<li>
\t\t            \t\t<a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("adresse_homepage");
            echo "\">Accueil</a>
\t\t            \t</li>
\t\t            \t<li>
\t\t            \t\t<a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("_modification");
            echo "\">Modification de mon compte</a>
\t\t            \t</li>
\t\t            \t<li>
\t\t            \t\t<a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("_ajout");
            echo "\">Ajouter une personne</a>
\t\t            \t</li>
                        <li>
                            <a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("deconnection");
            echo "\">Déconnexion</a>
                        </li>
\t\t          \t";
        } else {
            // line 36
            echo "\t\t          \t\t<li>
\t\t          \t\t\t<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\">Inscription</a>
\t\t          \t\t</li>
\t\t        \t";
        }
        // line 40
        echo "\t\t          \t</ul>
\t\t        </div>
\t\t    </div>
\t    </nav>
\t    <div class=\"container\">
\t\t\t";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "\t    </div>
\t    <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
\t    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>";
        
        $__internal_a53fbd17fd2444dd1bd2089956c49d0fda3d86c9a7fa5913d815353d231b658e->leave($__internal_a53fbd17fd2444dd1bd2089956c49d0fda3d86c9a7fa5913d815353d231b658e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ffde5b658e10f67cd98203dd42efc8599a46b523622056abf254718f93df0e1 = $this->env->getExtension("native_profiler");
        $__internal_9ffde5b658e10f67cd98203dd42efc8599a46b523622056abf254718f93df0e1->enter($__internal_9ffde5b658e10f67cd98203dd42efc8599a46b523622056abf254718f93df0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carnet";
        
        $__internal_9ffde5b658e10f67cd98203dd42efc8599a46b523622056abf254718f93df0e1->leave($__internal_9ffde5b658e10f67cd98203dd42efc8599a46b523622056abf254718f93df0e1_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdfe3d282d47211f9c9bb0d227eabd09c8817a54fd67c5bb0c285d0738b5e093 = $this->env->getExtension("native_profiler");
        $__internal_fdfe3d282d47211f9c9bb0d227eabd09c8817a54fd67c5bb0c285d0738b5e093->enter($__internal_fdfe3d282d47211f9c9bb0d227eabd09c8817a54fd67c5bb0c285d0738b5e093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fdfe3d282d47211f9c9bb0d227eabd09c8817a54fd67c5bb0c285d0738b5e093->leave($__internal_fdfe3d282d47211f9c9bb0d227eabd09c8817a54fd67c5bb0c285d0738b5e093_prof);

    }

    public function getTemplateName()
    {
        return "AdresseBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  120 => 5,  110 => 48,  106 => 47,  103 => 46,  101 => 45,  94 => 40,  88 => 37,  85 => 36,  79 => 33,  73 => 30,  67 => 27,  61 => 24,  58 => 23,  56 => 22,  49 => 18,  34 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 	    <meta charset="UTF-8">*/
/* 		<title>{% block title %}Carnet{% endblock %}</title>*/
/* 		<link rel="stylesheet" type="text/css" href="{{asset('bundles/bootstrap/css/bootstrap.min.css')}}">*/
/* 	</head>*/
/* 	<body>*/
/* 		<nav class="navbar navbar-inverse">*/
/* 	    	<div class="container">*/
/* 	        	<div class="navbar-header">*/
/* 	          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/* 	            	<span class="sr-only">Toggle navigation</span>*/
/* 	            	<span class="icon-bar"></span>*/
/* 	            	<span class="icon-bar"></span>*/
/* 	            	<span class="icon-bar"></span>*/
/* 	          	</button>*/
/* 	          	<a class="navbar-brand" href="{{path('adresse_homepage')}}">Carnet</a>*/
/* 		        </div>*/
/* 		        <div id="navbar" class="collapse navbar-collapse">*/
/* 		        	<ul class="nav navbar-nav">*/
/* 		        	{% if app.request.get('_route') != '_connexion' %}*/
/* 		            	<li>*/
/* 		            		<a href="{{path('adresse_homepage')}}">Accueil</a>*/
/* 		            	</li>*/
/* 		            	<li>*/
/* 		            		<a href="{{path('_modification')}}">Modification de mon compte</a>*/
/* 		            	</li>*/
/* 		            	<li>*/
/* 		            		<a href="{{path('_ajout')}}">Ajouter une personne</a>*/
/* 		            	</li>*/
/*                         <li>*/
/*                             <a href="{{path('deconnection')}}">Déconnexion</a>*/
/*                         </li>*/
/* 		          	{% else %}*/
/* 		          		<li>*/
/* 		          			<a href="{{path('inscription')}}">Inscription</a>*/
/* 		          		</li>*/
/* 		        	{% endif %}*/
/* 		          	</ul>*/
/* 		        </div>*/
/* 		    </div>*/
/* 	    </nav>*/
/* 	    <div class="container">*/
/* 			{% block body %}{% endblock %}*/
/* 	    </div>*/
/* 	    <script type="text/javascript" src="{{asset('bundles/bootstrap/js/jquery-1.12.0.min.js')}}"></script>*/
/* 	    <script type="text/javascript" src="{{asset('bundles/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* 	</body>*/
/* </html>*/
