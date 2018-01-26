<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a777dfabd0482f7cce1074b303d5a183e811248fe835467cebdcfbeabf8b9661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7f34cab3e1b871f42a3ecd9fa450a23ae3fcfbfa2acbeca21c9a82143679884e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f34cab3e1b871f42a3ecd9fa450a23ae3fcfbfa2acbeca21c9a82143679884e->enter($__internal_7f34cab3e1b871f42a3ecd9fa450a23ae3fcfbfa2acbeca21c9a82143679884e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_31f8baf5354a5f71fbe6228f57fbc43572bd7a58593faf6c6e1e79538617cae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f8baf5354a5f71fbe6228f57fbc43572bd7a58593faf6c6e1e79538617cae7->enter($__internal_31f8baf5354a5f71fbe6228f57fbc43572bd7a58593faf6c6e1e79538617cae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f34cab3e1b871f42a3ecd9fa450a23ae3fcfbfa2acbeca21c9a82143679884e->leave($__internal_7f34cab3e1b871f42a3ecd9fa450a23ae3fcfbfa2acbeca21c9a82143679884e_prof);

        
        $__internal_31f8baf5354a5f71fbe6228f57fbc43572bd7a58593faf6c6e1e79538617cae7->leave($__internal_31f8baf5354a5f71fbe6228f57fbc43572bd7a58593faf6c6e1e79538617cae7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7da7bf7627ee5e3528ceaa82b066ae52bf5510435b8a7fa0d84f74e557456d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da7bf7627ee5e3528ceaa82b066ae52bf5510435b8a7fa0d84f74e557456d6d->enter($__internal_7da7bf7627ee5e3528ceaa82b066ae52bf5510435b8a7fa0d84f74e557456d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72fffedfd271a029cae82eceee205c8bf7f86bb815fb2463bf96966f5c613d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fffedfd271a029cae82eceee205c8bf7f86bb815fb2463bf96966f5c613d31->enter($__internal_72fffedfd271a029cae82eceee205c8bf7f86bb815fb2463bf96966f5c613d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72fffedfd271a029cae82eceee205c8bf7f86bb815fb2463bf96966f5c613d31->leave($__internal_72fffedfd271a029cae82eceee205c8bf7f86bb815fb2463bf96966f5c613d31_prof);

        
        $__internal_7da7bf7627ee5e3528ceaa82b066ae52bf5510435b8a7fa0d84f74e557456d6d->leave($__internal_7da7bf7627ee5e3528ceaa82b066ae52bf5510435b8a7fa0d84f74e557456d6d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3180f97d7d484428a0354ef0eb675fd2c952c4eac75614129762e553dcea2af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3180f97d7d484428a0354ef0eb675fd2c952c4eac75614129762e553dcea2af3->enter($__internal_3180f97d7d484428a0354ef0eb675fd2c952c4eac75614129762e553dcea2af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08ad94d4df4f0ae242054d50aae970b72ba3b5e15efe7d12fb229771171875bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ad94d4df4f0ae242054d50aae970b72ba3b5e15efe7d12fb229771171875bf->enter($__internal_08ad94d4df4f0ae242054d50aae970b72ba3b5e15efe7d12fb229771171875bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08ad94d4df4f0ae242054d50aae970b72ba3b5e15efe7d12fb229771171875bf->leave($__internal_08ad94d4df4f0ae242054d50aae970b72ba3b5e15efe7d12fb229771171875bf_prof);

        
        $__internal_3180f97d7d484428a0354ef0eb675fd2c952c4eac75614129762e553dcea2af3->leave($__internal_3180f97d7d484428a0354ef0eb675fd2c952c4eac75614129762e553dcea2af3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b93fd8a8495e3b2ad224374328cf37d1660db11cf4485ff43c5d08b25920c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b93fd8a8495e3b2ad224374328cf37d1660db11cf4485ff43c5d08b25920c59->enter($__internal_8b93fd8a8495e3b2ad224374328cf37d1660db11cf4485ff43c5d08b25920c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e84f3ab8579f401d75b30dfd9f601f952966072e9a2ed382c3d8cdf3c1f3bc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84f3ab8579f401d75b30dfd9f601f952966072e9a2ed382c3d8cdf3c1f3bc05->enter($__internal_e84f3ab8579f401d75b30dfd9f601f952966072e9a2ed382c3d8cdf3c1f3bc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e84f3ab8579f401d75b30dfd9f601f952966072e9a2ed382c3d8cdf3c1f3bc05->leave($__internal_e84f3ab8579f401d75b30dfd9f601f952966072e9a2ed382c3d8cdf3c1f3bc05_prof);

        
        $__internal_8b93fd8a8495e3b2ad224374328cf37d1660db11cf4485ff43c5d08b25920c59->leave($__internal_8b93fd8a8495e3b2ad224374328cf37d1660db11cf4485ff43c5d08b25920c59_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
