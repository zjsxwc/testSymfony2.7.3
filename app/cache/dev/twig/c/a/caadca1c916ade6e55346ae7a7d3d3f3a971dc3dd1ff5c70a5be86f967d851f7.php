<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_caadca1c916ade6e55346ae7a7d3d3f3a971dc3dd1ff5c70a5be86f967d851f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_893e20813ebe71e9aa265561c993c500f6a314b3856f08b04e3ba8a03c74f523 = $this->env->getExtension("native_profiler");
        $__internal_893e20813ebe71e9aa265561c993c500f6a314b3856f08b04e3ba8a03c74f523->enter($__internal_893e20813ebe71e9aa265561c993c500f6a314b3856f08b04e3ba8a03c74f523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_893e20813ebe71e9aa265561c993c500f6a314b3856f08b04e3ba8a03c74f523->leave($__internal_893e20813ebe71e9aa265561c993c500f6a314b3856f08b04e3ba8a03c74f523_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_168c445ea134c5d06d9fefaa09e093cea7831611baf1fd917797a911e6799f28 = $this->env->getExtension("native_profiler");
        $__internal_168c445ea134c5d06d9fefaa09e093cea7831611baf1fd917797a911e6799f28->enter($__internal_168c445ea134c5d06d9fefaa09e093cea7831611baf1fd917797a911e6799f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_168c445ea134c5d06d9fefaa09e093cea7831611baf1fd917797a911e6799f28->leave($__internal_168c445ea134c5d06d9fefaa09e093cea7831611baf1fd917797a911e6799f28_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c26f0aa4d78c70c65b573d2f3bc2c890af95b4b53b4e855356b0e6e00b9b366 = $this->env->getExtension("native_profiler");
        $__internal_2c26f0aa4d78c70c65b573d2f3bc2c890af95b4b53b4e855356b0e6e00b9b366->enter($__internal_2c26f0aa4d78c70c65b573d2f3bc2c890af95b4b53b4e855356b0e6e00b9b366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2c26f0aa4d78c70c65b573d2f3bc2c890af95b4b53b4e855356b0e6e00b9b366->leave($__internal_2c26f0aa4d78c70c65b573d2f3bc2c890af95b4b53b4e855356b0e6e00b9b366_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebb6e295d5821724c449a011c3337471b5b727e021ebc538ffd1c27d5fc68d14 = $this->env->getExtension("native_profiler");
        $__internal_ebb6e295d5821724c449a011c3337471b5b727e021ebc538ffd1c27d5fc68d14->enter($__internal_ebb6e295d5821724c449a011c3337471b5b727e021ebc538ffd1c27d5fc68d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ebb6e295d5821724c449a011c3337471b5b727e021ebc538ffd1c27d5fc68d14->leave($__internal_ebb6e295d5821724c449a011c3337471b5b727e021ebc538ffd1c27d5fc68d14_prof);

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
