<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7ca9b0090b62a3e8c3195672f34f1ffe6ac68f1068cbd481cf3e4a312a7f5171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c5ec8f06823d01c61a1f717abcb672289c8cf99fe43f5d2eca5f93bbb28c02e = $this->env->getExtension("native_profiler");
        $__internal_5c5ec8f06823d01c61a1f717abcb672289c8cf99fe43f5d2eca5f93bbb28c02e->enter($__internal_5c5ec8f06823d01c61a1f717abcb672289c8cf99fe43f5d2eca5f93bbb28c02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c5ec8f06823d01c61a1f717abcb672289c8cf99fe43f5d2eca5f93bbb28c02e->leave($__internal_5c5ec8f06823d01c61a1f717abcb672289c8cf99fe43f5d2eca5f93bbb28c02e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc50f678c9f7d777b57c6106a7240c79f239bfaa41c05e8355b856298647c10b = $this->env->getExtension("native_profiler");
        $__internal_cc50f678c9f7d777b57c6106a7240c79f239bfaa41c05e8355b856298647c10b->enter($__internal_cc50f678c9f7d777b57c6106a7240c79f239bfaa41c05e8355b856298647c10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc50f678c9f7d777b57c6106a7240c79f239bfaa41c05e8355b856298647c10b->leave($__internal_cc50f678c9f7d777b57c6106a7240c79f239bfaa41c05e8355b856298647c10b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ceec00608d0ecb0733f0079698255f2ffdb90048e86c1bb6b11762202e888bc7 = $this->env->getExtension("native_profiler");
        $__internal_ceec00608d0ecb0733f0079698255f2ffdb90048e86c1bb6b11762202e888bc7->enter($__internal_ceec00608d0ecb0733f0079698255f2ffdb90048e86c1bb6b11762202e888bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ceec00608d0ecb0733f0079698255f2ffdb90048e86c1bb6b11762202e888bc7->leave($__internal_ceec00608d0ecb0733f0079698255f2ffdb90048e86c1bb6b11762202e888bc7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aaa51319d525cdbd9ac33f5f49694f6e109e371c754d86264f74c3b9c8afc10f = $this->env->getExtension("native_profiler");
        $__internal_aaa51319d525cdbd9ac33f5f49694f6e109e371c754d86264f74c3b9c8afc10f->enter($__internal_aaa51319d525cdbd9ac33f5f49694f6e109e371c754d86264f74c3b9c8afc10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aaa51319d525cdbd9ac33f5f49694f6e109e371c754d86264f74c3b9c8afc10f->leave($__internal_aaa51319d525cdbd9ac33f5f49694f6e109e371c754d86264f74c3b9c8afc10f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
