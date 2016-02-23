<?php

/* base.html.twig */
class __TwigTemplate_08256bbdb91494291b14c93e09bcd221e6dbab24c6a53821a06f2518f01b6c43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b384950bfb02c1ec5f21942302ae1187658f59034e6c751bd9b35bbd57c1601e = $this->env->getExtension("native_profiler");
        $__internal_b384950bfb02c1ec5f21942302ae1187658f59034e6c751bd9b35bbd57c1601e->enter($__internal_b384950bfb02c1ec5f21942302ae1187658f59034e6c751bd9b35bbd57c1601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b384950bfb02c1ec5f21942302ae1187658f59034e6c751bd9b35bbd57c1601e->leave($__internal_b384950bfb02c1ec5f21942302ae1187658f59034e6c751bd9b35bbd57c1601e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_311e333d385033868b86644e25e0a0f7b9a720f9356ba4c95fc89bec78f23c17 = $this->env->getExtension("native_profiler");
        $__internal_311e333d385033868b86644e25e0a0f7b9a720f9356ba4c95fc89bec78f23c17->enter($__internal_311e333d385033868b86644e25e0a0f7b9a720f9356ba4c95fc89bec78f23c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_311e333d385033868b86644e25e0a0f7b9a720f9356ba4c95fc89bec78f23c17->leave($__internal_311e333d385033868b86644e25e0a0f7b9a720f9356ba4c95fc89bec78f23c17_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1d5d655fdfccf85ec1b833e53e3e8a4512412dec1ea5b660d7ce7918f6beb50 = $this->env->getExtension("native_profiler");
        $__internal_d1d5d655fdfccf85ec1b833e53e3e8a4512412dec1ea5b660d7ce7918f6beb50->enter($__internal_d1d5d655fdfccf85ec1b833e53e3e8a4512412dec1ea5b660d7ce7918f6beb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d1d5d655fdfccf85ec1b833e53e3e8a4512412dec1ea5b660d7ce7918f6beb50->leave($__internal_d1d5d655fdfccf85ec1b833e53e3e8a4512412dec1ea5b660d7ce7918f6beb50_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f58e71d476d82219aa76250145ef1f47440be26af1e3548df4a1ef7e6e4c99ce = $this->env->getExtension("native_profiler");
        $__internal_f58e71d476d82219aa76250145ef1f47440be26af1e3548df4a1ef7e6e4c99ce->enter($__internal_f58e71d476d82219aa76250145ef1f47440be26af1e3548df4a1ef7e6e4c99ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f58e71d476d82219aa76250145ef1f47440be26af1e3548df4a1ef7e6e4c99ce->leave($__internal_f58e71d476d82219aa76250145ef1f47440be26af1e3548df4a1ef7e6e4c99ce_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d75742c6c9f76e3741fd87c16c1331d848a7e89f149e17a111cf58963d7874c = $this->env->getExtension("native_profiler");
        $__internal_2d75742c6c9f76e3741fd87c16c1331d848a7e89f149e17a111cf58963d7874c->enter($__internal_2d75742c6c9f76e3741fd87c16c1331d848a7e89f149e17a111cf58963d7874c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2d75742c6c9f76e3741fd87c16c1331d848a7e89f149e17a111cf58963d7874c->leave($__internal_2d75742c6c9f76e3741fd87c16c1331d848a7e89f149e17a111cf58963d7874c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
