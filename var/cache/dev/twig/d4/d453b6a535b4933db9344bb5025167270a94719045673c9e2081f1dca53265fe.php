<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5e3bd3b99983c469726057e075d9a9613e2ed2bb9c359815a26d515ca5a3684b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3fb9b088d78e165bb41ce9e320230ba6c224bc24892fb5ae77564237c4732f4 = $this->env->getExtension("native_profiler");
        $__internal_e3fb9b088d78e165bb41ce9e320230ba6c224bc24892fb5ae77564237c4732f4->enter($__internal_e3fb9b088d78e165bb41ce9e320230ba6c224bc24892fb5ae77564237c4732f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3fb9b088d78e165bb41ce9e320230ba6c224bc24892fb5ae77564237c4732f4->leave($__internal_e3fb9b088d78e165bb41ce9e320230ba6c224bc24892fb5ae77564237c4732f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b356dcaa73cf30c4b3ca5c57ea50b760900390dd397a4e3bf819ebbfc682790 = $this->env->getExtension("native_profiler");
        $__internal_3b356dcaa73cf30c4b3ca5c57ea50b760900390dd397a4e3bf819ebbfc682790->enter($__internal_3b356dcaa73cf30c4b3ca5c57ea50b760900390dd397a4e3bf819ebbfc682790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3b356dcaa73cf30c4b3ca5c57ea50b760900390dd397a4e3bf819ebbfc682790->leave($__internal_3b356dcaa73cf30c4b3ca5c57ea50b760900390dd397a4e3bf819ebbfc682790_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
