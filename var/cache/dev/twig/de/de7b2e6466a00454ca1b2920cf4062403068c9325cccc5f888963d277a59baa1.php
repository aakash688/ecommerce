<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6292996fb89f39cdf3834e39078f273783328246d42a03d5f10d057d5bcefda8 extends Twig_Template
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
        $__internal_c561c4ea18be02235c5db64e3d5fd97ddda5be4ac81a5e173d54f7c4d9b77ae4 = $this->env->getExtension("native_profiler");
        $__internal_c561c4ea18be02235c5db64e3d5fd97ddda5be4ac81a5e173d54f7c4d9b77ae4->enter($__internal_c561c4ea18be02235c5db64e3d5fd97ddda5be4ac81a5e173d54f7c4d9b77ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c561c4ea18be02235c5db64e3d5fd97ddda5be4ac81a5e173d54f7c4d9b77ae4->leave($__internal_c561c4ea18be02235c5db64e3d5fd97ddda5be4ac81a5e173d54f7c4d9b77ae4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
