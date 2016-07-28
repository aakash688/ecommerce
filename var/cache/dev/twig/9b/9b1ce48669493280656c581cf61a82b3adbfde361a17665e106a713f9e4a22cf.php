<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0eb631cf290073086bbdce86d97bae64887434575976218a0daeb9dff296c0b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ddad95f4390d818f0f504801058a4e72c3cbfab6f813bd32f41748b4dc0386f = $this->env->getExtension("native_profiler");
        $__internal_8ddad95f4390d818f0f504801058a4e72c3cbfab6f813bd32f41748b4dc0386f->enter($__internal_8ddad95f4390d818f0f504801058a4e72c3cbfab6f813bd32f41748b4dc0386f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ddad95f4390d818f0f504801058a4e72c3cbfab6f813bd32f41748b4dc0386f->leave($__internal_8ddad95f4390d818f0f504801058a4e72c3cbfab6f813bd32f41748b4dc0386f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f4d9feacb4334e73448365639b5d6d8aefeab036c4f435e1a4b45a8a6187d69 = $this->env->getExtension("native_profiler");
        $__internal_8f4d9feacb4334e73448365639b5d6d8aefeab036c4f435e1a4b45a8a6187d69->enter($__internal_8f4d9feacb4334e73448365639b5d6d8aefeab036c4f435e1a4b45a8a6187d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f4d9feacb4334e73448365639b5d6d8aefeab036c4f435e1a4b45a8a6187d69->leave($__internal_8f4d9feacb4334e73448365639b5d6d8aefeab036c4f435e1a4b45a8a6187d69_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab232a4a6243486dac277fc7b22f3055f0c0e0892a4667737dbcfdb1abbc2060 = $this->env->getExtension("native_profiler");
        $__internal_ab232a4a6243486dac277fc7b22f3055f0c0e0892a4667737dbcfdb1abbc2060->enter($__internal_ab232a4a6243486dac277fc7b22f3055f0c0e0892a4667737dbcfdb1abbc2060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ab232a4a6243486dac277fc7b22f3055f0c0e0892a4667737dbcfdb1abbc2060->leave($__internal_ab232a4a6243486dac277fc7b22f3055f0c0e0892a4667737dbcfdb1abbc2060_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a32bc4c3d5f0a2b47103622fc5d6fc991ba69b6908398d6b024b6988d692b67e = $this->env->getExtension("native_profiler");
        $__internal_a32bc4c3d5f0a2b47103622fc5d6fc991ba69b6908398d6b024b6988d692b67e->enter($__internal_a32bc4c3d5f0a2b47103622fc5d6fc991ba69b6908398d6b024b6988d692b67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a32bc4c3d5f0a2b47103622fc5d6fc991ba69b6908398d6b024b6988d692b67e->leave($__internal_a32bc4c3d5f0a2b47103622fc5d6fc991ba69b6908398d6b024b6988d692b67e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
