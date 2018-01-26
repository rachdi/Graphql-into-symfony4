<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c7cdc201b06c88097bc9642c4cad0cb04419c3f1ef12c55ad11057bd7a99de72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4f33e35d39c9f72b2318ca0e02e6095047c35feff1034f4c79143febd836e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f33e35d39c9f72b2318ca0e02e6095047c35feff1034f4c79143febd836e14->enter($__internal_a4f33e35d39c9f72b2318ca0e02e6095047c35feff1034f4c79143febd836e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_76fa381cbd5d4f6c55db8c8e34d2274b4d18e15449931e25747cfab982340317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76fa381cbd5d4f6c55db8c8e34d2274b4d18e15449931e25747cfab982340317->enter($__internal_76fa381cbd5d4f6c55db8c8e34d2274b4d18e15449931e25747cfab982340317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a4f33e35d39c9f72b2318ca0e02e6095047c35feff1034f4c79143febd836e14->leave($__internal_a4f33e35d39c9f72b2318ca0e02e6095047c35feff1034f4c79143febd836e14_prof);

        
        $__internal_76fa381cbd5d4f6c55db8c8e34d2274b4d18e15449931e25747cfab982340317->leave($__internal_76fa381cbd5d4f6c55db8c8e34d2274b4d18e15449931e25747cfab982340317_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95fb4e0297eaf9a7fa19003e8ce2ea86b0a80001f283a59806cadbcea3386b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95fb4e0297eaf9a7fa19003e8ce2ea86b0a80001f283a59806cadbcea3386b9c->enter($__internal_95fb4e0297eaf9a7fa19003e8ce2ea86b0a80001f283a59806cadbcea3386b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81c7d378f0ef1aa9b073a4ebdeb3d0bb46fa65b0e2fb2587abaf8046b1f48293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c7d378f0ef1aa9b073a4ebdeb3d0bb46fa65b0e2fb2587abaf8046b1f48293->enter($__internal_81c7d378f0ef1aa9b073a4ebdeb3d0bb46fa65b0e2fb2587abaf8046b1f48293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_81c7d378f0ef1aa9b073a4ebdeb3d0bb46fa65b0e2fb2587abaf8046b1f48293->leave($__internal_81c7d378f0ef1aa9b073a4ebdeb3d0bb46fa65b0e2fb2587abaf8046b1f48293_prof);

        
        $__internal_95fb4e0297eaf9a7fa19003e8ce2ea86b0a80001f283a59806cadbcea3386b9c->leave($__internal_95fb4e0297eaf9a7fa19003e8ce2ea86b0a80001f283a59806cadbcea3386b9c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_153da2ade446ce7691f74baef3e859f9d251c1a81301a2c38df5ecd81eb8e4b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153da2ade446ce7691f74baef3e859f9d251c1a81301a2c38df5ecd81eb8e4b5->enter($__internal_153da2ade446ce7691f74baef3e859f9d251c1a81301a2c38df5ecd81eb8e4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f234d98c661b12bc2564400e9689ddefc7edc67e42126db5c43c2488be976d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f234d98c661b12bc2564400e9689ddefc7edc67e42126db5c43c2488be976d2f->enter($__internal_f234d98c661b12bc2564400e9689ddefc7edc67e42126db5c43c2488be976d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f234d98c661b12bc2564400e9689ddefc7edc67e42126db5c43c2488be976d2f->leave($__internal_f234d98c661b12bc2564400e9689ddefc7edc67e42126db5c43c2488be976d2f_prof);

        
        $__internal_153da2ade446ce7691f74baef3e859f9d251c1a81301a2c38df5ecd81eb8e4b5->leave($__internal_153da2ade446ce7691f74baef3e859f9d251c1a81301a2c38df5ecd81eb8e4b5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8c704625297ba5bf852ddb0ce629d8bbb7ec9d8f415435d1a5137572ca8b99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8c704625297ba5bf852ddb0ce629d8bbb7ec9d8f415435d1a5137572ca8b99f->enter($__internal_e8c704625297ba5bf852ddb0ce629d8bbb7ec9d8f415435d1a5137572ca8b99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f3c463497b54a17059e1c92d8f1ccfc50adb39f4c2888ef08d20a51aaaa860f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3c463497b54a17059e1c92d8f1ccfc50adb39f4c2888ef08d20a51aaaa860f->enter($__internal_3f3c463497b54a17059e1c92d8f1ccfc50adb39f4c2888ef08d20a51aaaa860f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3f3c463497b54a17059e1c92d8f1ccfc50adb39f4c2888ef08d20a51aaaa860f->leave($__internal_3f3c463497b54a17059e1c92d8f1ccfc50adb39f4c2888ef08d20a51aaaa860f_prof);

        
        $__internal_e8c704625297ba5bf852ddb0ce629d8bbb7ec9d8f415435d1a5137572ca8b99f->leave($__internal_e8c704625297ba5bf852ddb0ce629d8bbb7ec9d8f415435d1a5137572ca8b99f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
