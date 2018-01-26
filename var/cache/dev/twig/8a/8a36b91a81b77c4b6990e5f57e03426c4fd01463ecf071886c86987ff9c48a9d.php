<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0e8ed91b2a71a4eb8f4c3f2a77068e6ab1e2e7bc255ec7802958b92f3d6dfbe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d5494e0d7d81b0ce7585672b8a598f3591010a03892f8ad85d080c8e9a33e315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5494e0d7d81b0ce7585672b8a598f3591010a03892f8ad85d080c8e9a33e315->enter($__internal_d5494e0d7d81b0ce7585672b8a598f3591010a03892f8ad85d080c8e9a33e315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_928f697bf4db39ac68e7b817b6793272afde7f151b4a1dfe24a4c6b326cbb180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928f697bf4db39ac68e7b817b6793272afde7f151b4a1dfe24a4c6b326cbb180->enter($__internal_928f697bf4db39ac68e7b817b6793272afde7f151b4a1dfe24a4c6b326cbb180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5494e0d7d81b0ce7585672b8a598f3591010a03892f8ad85d080c8e9a33e315->leave($__internal_d5494e0d7d81b0ce7585672b8a598f3591010a03892f8ad85d080c8e9a33e315_prof);

        
        $__internal_928f697bf4db39ac68e7b817b6793272afde7f151b4a1dfe24a4c6b326cbb180->leave($__internal_928f697bf4db39ac68e7b817b6793272afde7f151b4a1dfe24a4c6b326cbb180_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_217bf8fa20c8c4e2d4a2e03be3707fd9e0acc7ed11688861875391e34835681a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217bf8fa20c8c4e2d4a2e03be3707fd9e0acc7ed11688861875391e34835681a->enter($__internal_217bf8fa20c8c4e2d4a2e03be3707fd9e0acc7ed11688861875391e34835681a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4ed95ad5114e9c8997e7cce28d612cd1995847b79c6fd1a3cdfc97c11b4a2f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed95ad5114e9c8997e7cce28d612cd1995847b79c6fd1a3cdfc97c11b4a2f55->enter($__internal_4ed95ad5114e9c8997e7cce28d612cd1995847b79c6fd1a3cdfc97c11b4a2f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4ed95ad5114e9c8997e7cce28d612cd1995847b79c6fd1a3cdfc97c11b4a2f55->leave($__internal_4ed95ad5114e9c8997e7cce28d612cd1995847b79c6fd1a3cdfc97c11b4a2f55_prof);

        
        $__internal_217bf8fa20c8c4e2d4a2e03be3707fd9e0acc7ed11688861875391e34835681a->leave($__internal_217bf8fa20c8c4e2d4a2e03be3707fd9e0acc7ed11688861875391e34835681a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_317222554eee149dcb9b8f44eaeda74ee1e1847b03ed635401bb487d72324d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317222554eee149dcb9b8f44eaeda74ee1e1847b03ed635401bb487d72324d8c->enter($__internal_317222554eee149dcb9b8f44eaeda74ee1e1847b03ed635401bb487d72324d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1c8b23cf592d3c1186df978d2069eb0e44ed37dd43807d5e518c7fd090b831e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8b23cf592d3c1186df978d2069eb0e44ed37dd43807d5e518c7fd090b831e2->enter($__internal_1c8b23cf592d3c1186df978d2069eb0e44ed37dd43807d5e518c7fd090b831e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1c8b23cf592d3c1186df978d2069eb0e44ed37dd43807d5e518c7fd090b831e2->leave($__internal_1c8b23cf592d3c1186df978d2069eb0e44ed37dd43807d5e518c7fd090b831e2_prof);

        
        $__internal_317222554eee149dcb9b8f44eaeda74ee1e1847b03ed635401bb487d72324d8c->leave($__internal_317222554eee149dcb9b8f44eaeda74ee1e1847b03ed635401bb487d72324d8c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2882eed9519f4e60bf56a6a31f69fd9b97b5fcd2f0ce5c2eac37fbd68b9cfbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2882eed9519f4e60bf56a6a31f69fd9b97b5fcd2f0ce5c2eac37fbd68b9cfbdc->enter($__internal_2882eed9519f4e60bf56a6a31f69fd9b97b5fcd2f0ce5c2eac37fbd68b9cfbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dcc4bf26bf72fe625f63bd625e8a8a8636fd580fa64ec5e0ff14877f34fac6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc4bf26bf72fe625f63bd625e8a8a8636fd580fa64ec5e0ff14877f34fac6ee->enter($__internal_dcc4bf26bf72fe625f63bd625e8a8a8636fd580fa64ec5e0ff14877f34fac6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_dcc4bf26bf72fe625f63bd625e8a8a8636fd580fa64ec5e0ff14877f34fac6ee->leave($__internal_dcc4bf26bf72fe625f63bd625e8a8a8636fd580fa64ec5e0ff14877f34fac6ee_prof);

        
        $__internal_2882eed9519f4e60bf56a6a31f69fd9b97b5fcd2f0ce5c2eac37fbd68b9cfbdc->leave($__internal_2882eed9519f4e60bf56a6a31f69fd9b97b5fcd2f0ce5c2eac37fbd68b9cfbdc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
