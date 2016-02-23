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
        $__internal_e4c54817b3999189de5285ba76ba02cd25e3876c5fc547921414f683ea2ecb0b = $this->env->getExtension("native_profiler");
        $__internal_e4c54817b3999189de5285ba76ba02cd25e3876c5fc547921414f683ea2ecb0b->enter($__internal_e4c54817b3999189de5285ba76ba02cd25e3876c5fc547921414f683ea2ecb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdresseBundle::layout.html.twig"));

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
\t          \t<a class=\"navbar-brand\" href=\"#\">Carnet</a>
\t\t        </div>
\t\t        <div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t        \t<ul class=\"nav navbar-nav\">
\t\t        \t";
        // line 22
        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "_connexion") && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != "inscription"))) {
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
            echo $this->env->getExtension('routing')->getPath("affichage");
            echo "\">Mon compte</a>
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
            echo $this->env->getExtension('routing')->getPath("_connexion");
            echo "\">Connexion</a>
\t\t          \t\t</li>
\t\t          \t\t<li>
\t\t          \t\t\t<a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("inscription");
            echo "\">Inscription</a>
\t\t          \t\t</li>
\t\t        \t";
        }
        // line 43
        echo "\t\t          \t</ul>
\t\t        </div>
\t\t    </div>
\t    </nav>
\t    <div class=\"container\">
\t\t\t";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "\t    </div>
\t    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/js/jquery-1.12.0.min.js"), "html", null, true);
        echo "\"></script>
\t    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>";
        
        $__internal_e4c54817b3999189de5285ba76ba02cd25e3876c5fc547921414f683ea2ecb0b->leave($__internal_e4c54817b3999189de5285ba76ba02cd25e3876c5fc547921414f683ea2ecb0b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ce5c4712951ef93a99441f15eb688acc585422afe2003b844bb9560e32d013c = $this->env->getExtension("native_profiler");
        $__internal_9ce5c4712951ef93a99441f15eb688acc585422afe2003b844bb9560e32d013c->enter($__internal_9ce5c4712951ef93a99441f15eb688acc585422afe2003b844bb9560e32d013c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carnet";
        
        $__internal_9ce5c4712951ef93a99441f15eb688acc585422afe2003b844bb9560e32d013c->leave($__internal_9ce5c4712951ef93a99441f15eb688acc585422afe2003b844bb9560e32d013c_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_e635c8f98509026d7803777c48101d88465bc2552f14281363ec9bad775c63b0 = $this->env->getExtension("native_profiler");
        $__internal_e635c8f98509026d7803777c48101d88465bc2552f14281363ec9bad775c63b0->enter($__internal_e635c8f98509026d7803777c48101d88465bc2552f14281363ec9bad775c63b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e635c8f98509026d7803777c48101d88465bc2552f14281363ec9bad775c63b0->leave($__internal_e635c8f98509026d7803777c48101d88465bc2552f14281363ec9bad775c63b0_prof);

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
        return array (  135 => 48,  123 => 5,  113 => 51,  109 => 50,  106 => 49,  104 => 48,  97 => 43,  91 => 40,  85 => 37,  82 => 36,  76 => 33,  70 => 30,  64 => 27,  58 => 24,  55 => 23,  53 => 22,  34 => 6,  30 => 5,  24 => 1,);
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
/* 	          	<a class="navbar-brand" href="#">Carnet</a>*/
/* 		        </div>*/
/* 		        <div id="navbar" class="collapse navbar-collapse">*/
/* 		        	<ul class="nav navbar-nav">*/
/* 		        	{% if (app.request.get('_route') != '_connexion') and (app.request.get('_route') != 'inscription') %}*/
/* 		            	<li>*/
/* 		            		<a href="{{path('adresse_homepage')}}">Accueil</a>*/
/* 		            	</li>*/
/* 		            	<li>*/
/* 		            		<a href="{{path('affichage')}}">Mon compte</a>*/
/* 		            	</li>*/
/* 		            	<li>*/
/* 		            		<a href="{{path('_ajout')}}">Ajouter une personne</a>*/
/* 		            	</li>*/
/*                         <li>*/
/*                             <a href="{{path('deconnection')}}">Déconnexion</a>*/
/*                         </li>*/
/* 		          	{% else %}*/
/* 		          		<li>*/
/* 		          			<a href="{{path('_connexion')}}">Connexion</a>*/
/* 		          		</li>*/
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
