<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_30b9db78edbf78d01e01dbf82b49a1f85430960cd8bbc547a792116102889f8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e463a181cefe6518029674ebaf530ab638379d26a3b6e262b0d5121c805047a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e463a181cefe6518029674ebaf530ab638379d26a3b6e262b0d5121c805047a->enter($__internal_0e463a181cefe6518029674ebaf530ab638379d26a3b6e262b0d5121c805047a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_30d1e10973ad29076658d87b08757e75c760f1bc6539f08a4d3ad1d1ec6cd7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d1e10973ad29076658d87b08757e75c760f1bc6539f08a4d3ad1d1ec6cd7f6->enter($__internal_30d1e10973ad29076658d87b08757e75c760f1bc6539f08a4d3ad1d1ec6cd7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e463a181cefe6518029674ebaf530ab638379d26a3b6e262b0d5121c805047a->leave($__internal_0e463a181cefe6518029674ebaf530ab638379d26a3b6e262b0d5121c805047a_prof);

        
        $__internal_30d1e10973ad29076658d87b08757e75c760f1bc6539f08a4d3ad1d1ec6cd7f6->leave($__internal_30d1e10973ad29076658d87b08757e75c760f1bc6539f08a4d3ad1d1ec6cd7f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35be4df82807ee51c920ca21d6624b41c3eb7f5b37825391bc962e5d943396ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35be4df82807ee51c920ca21d6624b41c3eb7f5b37825391bc962e5d943396ab->enter($__internal_35be4df82807ee51c920ca21d6624b41c3eb7f5b37825391bc962e5d943396ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_039bf123f6b60008e7a8fd2661e0083a8a12f163be52cf78fb6b46be35fed29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039bf123f6b60008e7a8fd2661e0083a8a12f163be52cf78fb6b46be35fed29f->enter($__internal_039bf123f6b60008e7a8fd2661e0083a8a12f163be52cf78fb6b46be35fed29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_039bf123f6b60008e7a8fd2661e0083a8a12f163be52cf78fb6b46be35fed29f->leave($__internal_039bf123f6b60008e7a8fd2661e0083a8a12f163be52cf78fb6b46be35fed29f_prof);

        
        $__internal_35be4df82807ee51c920ca21d6624b41c3eb7f5b37825391bc962e5d943396ab->leave($__internal_35be4df82807ee51c920ca21d6624b41c3eb7f5b37825391bc962e5d943396ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
