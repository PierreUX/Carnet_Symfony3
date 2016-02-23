<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c6fa43a4ae3dd63ad2ffcc3c8ab681f5bc3c227ffccb4e3b268d7cc3d2bb00d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ffd37d81694a4a8d9dd93e38db10808d65028a98b41cfab5f04468ea5c1a1d4 = $this->env->getExtension("native_profiler");
        $__internal_6ffd37d81694a4a8d9dd93e38db10808d65028a98b41cfab5f04468ea5c1a1d4->enter($__internal_6ffd37d81694a4a8d9dd93e38db10808d65028a98b41cfab5f04468ea5c1a1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6ffd37d81694a4a8d9dd93e38db10808d65028a98b41cfab5f04468ea5c1a1d4->leave($__internal_6ffd37d81694a4a8d9dd93e38db10808d65028a98b41cfab5f04468ea5c1a1d4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
