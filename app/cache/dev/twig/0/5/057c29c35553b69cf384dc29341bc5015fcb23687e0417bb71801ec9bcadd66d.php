<?php

/* base.html.twig */
class __TwigTemplate_057c29c35553b69cf384dc29341bc5015fcb23687e0417bb71801ec9bcadd66d extends Twig_Template
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
        $__internal_dd4df33f32b5e9e9de6cac797500cb25b99b336c26282ca6e5274cdc2266bd12 = $this->env->getExtension("native_profiler");
        $__internal_dd4df33f32b5e9e9de6cac797500cb25b99b336c26282ca6e5274cdc2266bd12->enter($__internal_dd4df33f32b5e9e9de6cac797500cb25b99b336c26282ca6e5274cdc2266bd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_dd4df33f32b5e9e9de6cac797500cb25b99b336c26282ca6e5274cdc2266bd12->leave($__internal_dd4df33f32b5e9e9de6cac797500cb25b99b336c26282ca6e5274cdc2266bd12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c44c34e6d516fa419786ff260a4f22c365895293fc60b118054a5137acc1c19 = $this->env->getExtension("native_profiler");
        $__internal_8c44c34e6d516fa419786ff260a4f22c365895293fc60b118054a5137acc1c19->enter($__internal_8c44c34e6d516fa419786ff260a4f22c365895293fc60b118054a5137acc1c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8c44c34e6d516fa419786ff260a4f22c365895293fc60b118054a5137acc1c19->leave($__internal_8c44c34e6d516fa419786ff260a4f22c365895293fc60b118054a5137acc1c19_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c408b033b08380713f05bd18ce75ce3b2b2f4ead607b85300da11d202777815c = $this->env->getExtension("native_profiler");
        $__internal_c408b033b08380713f05bd18ce75ce3b2b2f4ead607b85300da11d202777815c->enter($__internal_c408b033b08380713f05bd18ce75ce3b2b2f4ead607b85300da11d202777815c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c408b033b08380713f05bd18ce75ce3b2b2f4ead607b85300da11d202777815c->leave($__internal_c408b033b08380713f05bd18ce75ce3b2b2f4ead607b85300da11d202777815c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c73b3e3d5465755544cbbfc0605dc391ad8c3969a479b48d1a8c97f8f704676 = $this->env->getExtension("native_profiler");
        $__internal_0c73b3e3d5465755544cbbfc0605dc391ad8c3969a479b48d1a8c97f8f704676->enter($__internal_0c73b3e3d5465755544cbbfc0605dc391ad8c3969a479b48d1a8c97f8f704676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0c73b3e3d5465755544cbbfc0605dc391ad8c3969a479b48d1a8c97f8f704676->leave($__internal_0c73b3e3d5465755544cbbfc0605dc391ad8c3969a479b48d1a8c97f8f704676_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a500914398dd9ff8cf08fdcaa3d25edcfce286706f332f427f9a155795dcc097 = $this->env->getExtension("native_profiler");
        $__internal_a500914398dd9ff8cf08fdcaa3d25edcfce286706f332f427f9a155795dcc097->enter($__internal_a500914398dd9ff8cf08fdcaa3d25edcfce286706f332f427f9a155795dcc097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a500914398dd9ff8cf08fdcaa3d25edcfce286706f332f427f9a155795dcc097->leave($__internal_a500914398dd9ff8cf08fdcaa3d25edcfce286706f332f427f9a155795dcc097_prof);

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
