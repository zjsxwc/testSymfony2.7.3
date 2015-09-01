<?php

/* @WebProfiler/Router/panel.html.twig */
class __TwigTemplate_6464daf25f769c00273d7994f1e4b8fd016651118d2e17c37f68f20fb6c5abaf extends Twig_Template
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
        $__internal_111dabb9903671662e9a8560c322968dec9e1fb962defd3ac9a9035dc2746f2e = $this->env->getExtension("native_profiler");
        $__internal_111dabb9903671662e9a8560c322968dec9e1fb962defd3ac9a9035dc2746f2e->enter($__internal_111dabb9903671662e9a8560c322968dec9e1fb962defd3ac9a9035dc2746f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Router/panel.html.twig"));

        // line 1
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "pathinfo", array()), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route", array())) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "route", array()), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams", array()))) {
            // line 15
            echo "            ";
            $this->loadTemplate("@WebProfiler/Profiler/table.html.twig", "@WebProfiler/Router/panel.html.twig", 15)->display(array("data" => $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "routeParams", array()), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "redirect", array())) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetUrl", array()), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute", array())) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["router"]) ? $context["router"] : $this->getContext($context, "router")), "targetRoute", array()), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["traces"]) ? $context["traces"] : $this->getContext($context, "traces")));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute($context["trace"], "level", array()))) ? ("almost") : ((((2 == $this->getAttribute($context["trace"], "level", array()))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "path", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "log", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
        
        $__internal_111dabb9903671662e9a8560c322968dec9e1fb962defd3ac9a9035dc2746f2e->leave($__internal_111dabb9903671662e9a8560c322968dec9e1fb962defd3ac9a9035dc2746f2e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Router/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  107 => 37,  103 => 36,  99 => 35,  94 => 34,  90 => 33,  80 => 25,  76 => 23,  68 => 22,  65 => 21,  63 => 20,  60 => 19,  56 => 17,  53 => 16,  50 => 15,  48 => 14,  43 => 11,  39 => 9,  33 => 7,  31 => 6,  22 => 1,);
    }
}
