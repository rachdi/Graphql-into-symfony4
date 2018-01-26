<?php

/* article.html.twig */
class __TwigTemplate_7ae69b4c7534e770b5d601962a024d60f4963bb9a9cef7088db36b02b83f17df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e71be4f13c085055e1e92e7480e6acc900d34c0c760c154b94bf48d8e3e5dc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71be4f13c085055e1e92e7480e6acc900d34c0c760c154b94bf48d8e3e5dc06->enter($__internal_e71be4f13c085055e1e92e7480e6acc900d34c0c760c154b94bf48d8e3e5dc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article.html.twig"));

        $__internal_d3fbdd0eca9a3e648a729d6dcce856fdaca59cb325647f1ef8f15c9626a92e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fbdd0eca9a3e648a729d6dcce856fdaca59cb325647f1ef8f15c9626a92e78->enter($__internal_d3fbdd0eca9a3e648a729d6dcce856fdaca59cb325647f1ef8f15c9626a92e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e71be4f13c085055e1e92e7480e6acc900d34c0c760c154b94bf48d8e3e5dc06->leave($__internal_e71be4f13c085055e1e92e7480e6acc900d34c0c760c154b94bf48d8e3e5dc06_prof);

        
        $__internal_d3fbdd0eca9a3e648a729d6dcce856fdaca59cb325647f1ef8f15c9626a92e78->leave($__internal_d3fbdd0eca9a3e648a729d6dcce856fdaca59cb325647f1ef8f15c9626a92e78_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d299cfd9f7d3705299becc5c5aed0d51936f312dd31c74e7ff2f554d800c8a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d299cfd9f7d3705299becc5c5aed0d51936f312dd31c74e7ff2f554d800c8a16->enter($__internal_d299cfd9f7d3705299becc5c5aed0d51936f312dd31c74e7ff2f554d800c8a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_353a544f627888ba9c9b0891e10c2a07a0582630fc142e5f70949ba5eb88d8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353a544f627888ba9c9b0891e10c2a07a0582630fc142e5f70949ba5eb88d8ba->enter($__internal_353a544f627888ba9c9b0891e10c2a07a0582630fc142e5f70949ba5eb88d8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<table>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Autheur</td>
        <td>Text</td>
    </tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "    <tr>
    <td>";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["Id"]) || array_key_exists("Id", $context) ? $context["Id"] : (function () { throw new Twig_Error_Runtime('Variable "Id" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>
    <td>";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>
    <td>";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>
    <td>";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new Twig_Error_Runtime('Variable "text" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "</td>

    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
 ";
        
        $__internal_353a544f627888ba9c9b0891e10c2a07a0582630fc142e5f70949ba5eb88d8ba->leave($__internal_353a544f627888ba9c9b0891e10c2a07a0582630fc142e5f70949ba5eb88d8ba_prof);

        
        $__internal_d299cfd9f7d3705299becc5c5aed0d51936f312dd31c74e7ff2f554d800c8a16->leave($__internal_d299cfd9f7d3705299becc5c5aed0d51936f312dd31c74e7ff2f554d800c8a16_prof);

    }

    public function getTemplateName()
    {
        return "article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  62 => 11,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
 {% block body %}
<table>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Autheur</td>
        <td>Text</td>
    </tr>
    {% for i in 0..10 %}
    <tr>
    <td>{{ Id }}</td>
    <td>{{ title }}</td>
    <td>{{ name }}</td>
    <td>{{ text }}</td>

    </tr>
    {% endfor %}
</table>
 {% endblock %}
", "article.html.twig", "/var/www/html/templates/article.html.twig");
    }
}
