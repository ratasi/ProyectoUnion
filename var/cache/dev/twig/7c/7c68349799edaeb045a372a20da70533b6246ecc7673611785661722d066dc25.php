<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5529fe179081a7e359347dd53e32b736ff5bd28f3a1b55c10dd5ba460c309105 extends Twig_Template
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
        $__internal_e0ab47ca445ec76d188cfe2f1b88eba74bff84f458035d913cd2cff9dbabfb68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ab47ca445ec76d188cfe2f1b88eba74bff84f458035d913cd2cff9dbabfb68->enter($__internal_e0ab47ca445ec76d188cfe2f1b88eba74bff84f458035d913cd2cff9dbabfb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0493f134ea95bcc6d13774d7f3ffcf52ca358b47240091f1a13cfcab11931f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0493f134ea95bcc6d13774d7f3ffcf52ca358b47240091f1a13cfcab11931f76->enter($__internal_0493f134ea95bcc6d13774d7f3ffcf52ca358b47240091f1a13cfcab11931f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0ab47ca445ec76d188cfe2f1b88eba74bff84f458035d913cd2cff9dbabfb68->leave($__internal_e0ab47ca445ec76d188cfe2f1b88eba74bff84f458035d913cd2cff9dbabfb68_prof);

        
        $__internal_0493f134ea95bcc6d13774d7f3ffcf52ca358b47240091f1a13cfcab11931f76->leave($__internal_0493f134ea95bcc6d13774d7f3ffcf52ca358b47240091f1a13cfcab11931f76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa9099ef63fe7f8fb46be00b79e1ecdc76ff6f8d6c766f96f7de0b1dbd8f8ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9099ef63fe7f8fb46be00b79e1ecdc76ff6f8d6c766f96f7de0b1dbd8f8ab5->enter($__internal_fa9099ef63fe7f8fb46be00b79e1ecdc76ff6f8d6c766f96f7de0b1dbd8f8ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d53756cc6444e73a01a71d4e0f8006494317363148b3dae15125c295a5ff5980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53756cc6444e73a01a71d4e0f8006494317363148b3dae15125c295a5ff5980->enter($__internal_d53756cc6444e73a01a71d4e0f8006494317363148b3dae15125c295a5ff5980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
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
        
        $__internal_d53756cc6444e73a01a71d4e0f8006494317363148b3dae15125c295a5ff5980->leave($__internal_d53756cc6444e73a01a71d4e0f8006494317363148b3dae15125c295a5ff5980_prof);

        
        $__internal_fa9099ef63fe7f8fb46be00b79e1ecdc76ff6f8d6c766f96f7de0b1dbd8f8ab5->leave($__internal_fa9099ef63fe7f8fb46be00b79e1ecdc76ff6f8d6c766f96f7de0b1dbd8f8ab5_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\symfony\\ProyectoUnion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
