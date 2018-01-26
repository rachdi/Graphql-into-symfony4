<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_590fd3e8e572be369137d01ab583edea1da2d194ec2b74a01770649974f85e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_8a3fe70dcd45646b298fda19400da8d395951aa21e7e72812c1018f30da3b118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3fe70dcd45646b298fda19400da8d395951aa21e7e72812c1018f30da3b118->enter($__internal_8a3fe70dcd45646b298fda19400da8d395951aa21e7e72812c1018f30da3b118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7b543f79bb112f84e8f545216ef61860f16f7cd8bc112bdaf3d026410845198f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b543f79bb112f84e8f545216ef61860f16f7cd8bc112bdaf3d026410845198f->enter($__internal_7b543f79bb112f84e8f545216ef61860f16f7cd8bc112bdaf3d026410845198f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a3fe70dcd45646b298fda19400da8d395951aa21e7e72812c1018f30da3b118->leave($__internal_8a3fe70dcd45646b298fda19400da8d395951aa21e7e72812c1018f30da3b118_prof);

        
        $__internal_7b543f79bb112f84e8f545216ef61860f16f7cd8bc112bdaf3d026410845198f->leave($__internal_7b543f79bb112f84e8f545216ef61860f16f7cd8bc112bdaf3d026410845198f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e82e9b5538a71be701432840f83fde8adbf4516e3b509c778d858f98e3a3ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e82e9b5538a71be701432840f83fde8adbf4516e3b509c778d858f98e3a3ca0->enter($__internal_4e82e9b5538a71be701432840f83fde8adbf4516e3b509c778d858f98e3a3ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_921f8c53c048eee034150885684db8e4ca27ec07f79f88c3a3da5d1298769acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921f8c53c048eee034150885684db8e4ca27ec07f79f88c3a3da5d1298769acc->enter($__internal_921f8c53c048eee034150885684db8e4ca27ec07f79f88c3a3da5d1298769acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_921f8c53c048eee034150885684db8e4ca27ec07f79f88c3a3da5d1298769acc->leave($__internal_921f8c53c048eee034150885684db8e4ca27ec07f79f88c3a3da5d1298769acc_prof);

        
        $__internal_4e82e9b5538a71be701432840f83fde8adbf4516e3b509c778d858f98e3a3ca0->leave($__internal_4e82e9b5538a71be701432840f83fde8adbf4516e3b509c778d858f98e3a3ca0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_25d723a50aed60b2b6cde355fdb9963551c72cd74f10ebea0306e15f1f7b2a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d723a50aed60b2b6cde355fdb9963551c72cd74f10ebea0306e15f1f7b2a4f->enter($__internal_25d723a50aed60b2b6cde355fdb9963551c72cd74f10ebea0306e15f1f7b2a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19f1d151a256fcca1bab7fc2b848fb9052183cb485d776971be92b168a8a4c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f1d151a256fcca1bab7fc2b848fb9052183cb485d776971be92b168a8a4c3f->enter($__internal_19f1d151a256fcca1bab7fc2b848fb9052183cb485d776971be92b168a8a4c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_19f1d151a256fcca1bab7fc2b848fb9052183cb485d776971be92b168a8a4c3f->leave($__internal_19f1d151a256fcca1bab7fc2b848fb9052183cb485d776971be92b168a8a4c3f_prof);

        
        $__internal_25d723a50aed60b2b6cde355fdb9963551c72cd74f10ebea0306e15f1f7b2a4f->leave($__internal_25d723a50aed60b2b6cde355fdb9963551c72cd74f10ebea0306e15f1f7b2a4f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1da2ebf5c541a8c119f827826aa4111b013c54429b6f20296c813a78333e8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1da2ebf5c541a8c119f827826aa4111b013c54429b6f20296c813a78333e8e8->enter($__internal_f1da2ebf5c541a8c119f827826aa4111b013c54429b6f20296c813a78333e8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05f4fba44289d11ef98af607a668d7bfadf7052d1e64febd6889860c1e58f5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f4fba44289d11ef98af607a668d7bfadf7052d1e64febd6889860c1e58f5e2->enter($__internal_05f4fba44289d11ef98af607a668d7bfadf7052d1e64febd6889860c1e58f5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_05f4fba44289d11ef98af607a668d7bfadf7052d1e64febd6889860c1e58f5e2->leave($__internal_05f4fba44289d11ef98af607a668d7bfadf7052d1e64febd6889860c1e58f5e2_prof);

        
        $__internal_f1da2ebf5c541a8c119f827826aa4111b013c54429b6f20296c813a78333e8e8->leave($__internal_f1da2ebf5c541a8c119f827826aa4111b013c54429b6f20296c813a78333e8e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
