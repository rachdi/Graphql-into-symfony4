<?php

/* base.html.twig */
class __TwigTemplate_0635cd47a509ecc1a19d76ee6a62019ccdd14192a28ccd11c26f33ef6fad3f18 extends Twig_Template
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
        $__internal_4dd39b29fd2cc55721eef54f0536d0d6c337af5c66fa2c86a481b8d65c050717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd39b29fd2cc55721eef54f0536d0d6c337af5c66fa2c86a481b8d65c050717->enter($__internal_4dd39b29fd2cc55721eef54f0536d0d6c337af5c66fa2c86a481b8d65c050717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7f9c6809f652bf7b88ae0f1a4ff2e8294ee86e3d85a08e5e7770764e720ec46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9c6809f652bf7b88ae0f1a4ff2e8294ee86e3d85a08e5e7770764e720ec46e->enter($__internal_7f9c6809f652bf7b88ae0f1a4ff2e8294ee86e3d85a08e5e7770764e720ec46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_4dd39b29fd2cc55721eef54f0536d0d6c337af5c66fa2c86a481b8d65c050717->leave($__internal_4dd39b29fd2cc55721eef54f0536d0d6c337af5c66fa2c86a481b8d65c050717_prof);

        
        $__internal_7f9c6809f652bf7b88ae0f1a4ff2e8294ee86e3d85a08e5e7770764e720ec46e->leave($__internal_7f9c6809f652bf7b88ae0f1a4ff2e8294ee86e3d85a08e5e7770764e720ec46e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da4e5db91059fe64edefc11684c8f92369840b10215b289bf67ef41768b1ac49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4e5db91059fe64edefc11684c8f92369840b10215b289bf67ef41768b1ac49->enter($__internal_da4e5db91059fe64edefc11684c8f92369840b10215b289bf67ef41768b1ac49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b68dd622c94677e82e4a01fa18b728b2c3bc8b3faadd3b3412bfa808aed27a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b68dd622c94677e82e4a01fa18b728b2c3bc8b3faadd3b3412bfa808aed27a5->enter($__internal_0b68dd622c94677e82e4a01fa18b728b2c3bc8b3faadd3b3412bfa808aed27a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0b68dd622c94677e82e4a01fa18b728b2c3bc8b3faadd3b3412bfa808aed27a5->leave($__internal_0b68dd622c94677e82e4a01fa18b728b2c3bc8b3faadd3b3412bfa808aed27a5_prof);

        
        $__internal_da4e5db91059fe64edefc11684c8f92369840b10215b289bf67ef41768b1ac49->leave($__internal_da4e5db91059fe64edefc11684c8f92369840b10215b289bf67ef41768b1ac49_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5bb4cfc26e17b1e8453cd51ee95ea23845e3cd654460e39c7a5e715ad6bbae28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb4cfc26e17b1e8453cd51ee95ea23845e3cd654460e39c7a5e715ad6bbae28->enter($__internal_5bb4cfc26e17b1e8453cd51ee95ea23845e3cd654460e39c7a5e715ad6bbae28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2e63db82b2670720d284b64831d02a71c503b63cd18a94ac214bd91cdb0df5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e63db82b2670720d284b64831d02a71c503b63cd18a94ac214bd91cdb0df5a4->enter($__internal_2e63db82b2670720d284b64831d02a71c503b63cd18a94ac214bd91cdb0df5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2e63db82b2670720d284b64831d02a71c503b63cd18a94ac214bd91cdb0df5a4->leave($__internal_2e63db82b2670720d284b64831d02a71c503b63cd18a94ac214bd91cdb0df5a4_prof);

        
        $__internal_5bb4cfc26e17b1e8453cd51ee95ea23845e3cd654460e39c7a5e715ad6bbae28->leave($__internal_5bb4cfc26e17b1e8453cd51ee95ea23845e3cd654460e39c7a5e715ad6bbae28_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_32842f3344a7c6705946683ad4e973ec31708ad67b9be71a8f15cfdf630eebd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32842f3344a7c6705946683ad4e973ec31708ad67b9be71a8f15cfdf630eebd9->enter($__internal_32842f3344a7c6705946683ad4e973ec31708ad67b9be71a8f15cfdf630eebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7c50c71880889cf85fa438b702165b77d74b95068569c8216799e1413e7182c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c50c71880889cf85fa438b702165b77d74b95068569c8216799e1413e7182c->enter($__internal_d7c50c71880889cf85fa438b702165b77d74b95068569c8216799e1413e7182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7c50c71880889cf85fa438b702165b77d74b95068569c8216799e1413e7182c->leave($__internal_d7c50c71880889cf85fa438b702165b77d74b95068569c8216799e1413e7182c_prof);

        
        $__internal_32842f3344a7c6705946683ad4e973ec31708ad67b9be71a8f15cfdf630eebd9->leave($__internal_32842f3344a7c6705946683ad4e973ec31708ad67b9be71a8f15cfdf630eebd9_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8a5523f537f7fbb286cb4f0718ecf9007d46f78abe4eb01a7f690e338dde40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a5523f537f7fbb286cb4f0718ecf9007d46f78abe4eb01a7f690e338dde40e->enter($__internal_b8a5523f537f7fbb286cb4f0718ecf9007d46f78abe4eb01a7f690e338dde40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3806f635d052934710cf4b0a9099db5034dc34fd9f0a7b35289aecff94642738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3806f635d052934710cf4b0a9099db5034dc34fd9f0a7b35289aecff94642738->enter($__internal_3806f635d052934710cf4b0a9099db5034dc34fd9f0a7b35289aecff94642738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3806f635d052934710cf4b0a9099db5034dc34fd9f0a7b35289aecff94642738->leave($__internal_3806f635d052934710cf4b0a9099db5034dc34fd9f0a7b35289aecff94642738_prof);

        
        $__internal_b8a5523f537f7fbb286cb4f0718ecf9007d46f78abe4eb01a7f690e338dde40e->leave($__internal_b8a5523f537f7fbb286cb4f0718ecf9007d46f78abe4eb01a7f690e338dde40e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
