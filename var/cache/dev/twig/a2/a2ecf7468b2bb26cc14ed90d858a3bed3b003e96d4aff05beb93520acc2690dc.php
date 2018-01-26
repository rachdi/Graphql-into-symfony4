<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_46c7cd731e39ddfba0fa480e1510af760de9b4c4f37b2b6f168a9bdae20370db extends Twig_Template
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
        $__internal_b66108a26438c9e7aca56e4c5e06439cd6da6c1e640ef63d78be36903c9e7caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66108a26438c9e7aca56e4c5e06439cd6da6c1e640ef63d78be36903c9e7caa->enter($__internal_b66108a26438c9e7aca56e4c5e06439cd6da6c1e640ef63d78be36903c9e7caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_dd75857eaf4a4687c891be720435da87372d4d2f66dae23018df65d895bad3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd75857eaf4a4687c891be720435da87372d4d2f66dae23018df65d895bad3f0->enter($__internal_dd75857eaf4a4687c891be720435da87372d4d2f66dae23018df65d895bad3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_b66108a26438c9e7aca56e4c5e06439cd6da6c1e640ef63d78be36903c9e7caa->leave($__internal_b66108a26438c9e7aca56e4c5e06439cd6da6c1e640ef63d78be36903c9e7caa_prof);

        
        $__internal_dd75857eaf4a4687c891be720435da87372d4d2f66dae23018df65d895bad3f0->leave($__internal_dd75857eaf4a4687c891be720435da87372d4d2f66dae23018df65d895bad3f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/html/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
