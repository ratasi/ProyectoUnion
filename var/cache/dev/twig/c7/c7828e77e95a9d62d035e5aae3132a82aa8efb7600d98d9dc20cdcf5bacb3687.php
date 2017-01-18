<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ad80a97ffd276816cac6a9f691429d5130d7196011812d932c554fa0e1b3ba31 extends Twig_Template
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
        $__internal_cad44e4076fe45b8373c95e3104d84dacbc38bf996f20b9e3941b7dfc778c781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad44e4076fe45b8373c95e3104d84dacbc38bf996f20b9e3941b7dfc778c781->enter($__internal_cad44e4076fe45b8373c95e3104d84dacbc38bf996f20b9e3941b7dfc778c781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f0e2786fe917e89aea439450ac292262d2bdb7a3dadbe9c76c81c7edd616498d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e2786fe917e89aea439450ac292262d2bdb7a3dadbe9c76c81c7edd616498d->enter($__internal_f0e2786fe917e89aea439450ac292262d2bdb7a3dadbe9c76c81c7edd616498d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cad44e4076fe45b8373c95e3104d84dacbc38bf996f20b9e3941b7dfc778c781->leave($__internal_cad44e4076fe45b8373c95e3104d84dacbc38bf996f20b9e3941b7dfc778c781_prof);

        
        $__internal_f0e2786fe917e89aea439450ac292262d2bdb7a3dadbe9c76c81c7edd616498d->leave($__internal_f0e2786fe917e89aea439450ac292262d2bdb7a3dadbe9c76c81c7edd616498d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a6487f4bd6acc177e6ed47ed9eaa5776b8829f0895030d040e7b0f6e8c9889d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6487f4bd6acc177e6ed47ed9eaa5776b8829f0895030d040e7b0f6e8c9889d->enter($__internal_2a6487f4bd6acc177e6ed47ed9eaa5776b8829f0895030d040e7b0f6e8c9889d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa406706168a2395b034153ad5d7cc2ce1ebdff10a2dbe9bf48ae1d3674217f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa406706168a2395b034153ad5d7cc2ce1ebdff10a2dbe9bf48ae1d3674217f2->enter($__internal_aa406706168a2395b034153ad5d7cc2ce1ebdff10a2dbe9bf48ae1d3674217f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa406706168a2395b034153ad5d7cc2ce1ebdff10a2dbe9bf48ae1d3674217f2->leave($__internal_aa406706168a2395b034153ad5d7cc2ce1ebdff10a2dbe9bf48ae1d3674217f2_prof);

        
        $__internal_2a6487f4bd6acc177e6ed47ed9eaa5776b8829f0895030d040e7b0f6e8c9889d->leave($__internal_2a6487f4bd6acc177e6ed47ed9eaa5776b8829f0895030d040e7b0f6e8c9889d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_31f557b5c3c56fd39ebae1c4f2998945cbb627354d2c1c6391ab4a108648bdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f557b5c3c56fd39ebae1c4f2998945cbb627354d2c1c6391ab4a108648bdad->enter($__internal_31f557b5c3c56fd39ebae1c4f2998945cbb627354d2c1c6391ab4a108648bdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1796528be32cb30bb23db0ee0f49038519b5981d20c13589d2dd2e3ef18e7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1796528be32cb30bb23db0ee0f49038519b5981d20c13589d2dd2e3ef18e7dc->enter($__internal_b1796528be32cb30bb23db0ee0f49038519b5981d20c13589d2dd2e3ef18e7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1796528be32cb30bb23db0ee0f49038519b5981d20c13589d2dd2e3ef18e7dc->leave($__internal_b1796528be32cb30bb23db0ee0f49038519b5981d20c13589d2dd2e3ef18e7dc_prof);

        
        $__internal_31f557b5c3c56fd39ebae1c4f2998945cbb627354d2c1c6391ab4a108648bdad->leave($__internal_31f557b5c3c56fd39ebae1c4f2998945cbb627354d2c1c6391ab4a108648bdad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd1ace822e20e17bdb40e8c23acc5afd0521c9493f76d40fabcf24af2d9a82e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1ace822e20e17bdb40e8c23acc5afd0521c9493f76d40fabcf24af2d9a82e2->enter($__internal_bd1ace822e20e17bdb40e8c23acc5afd0521c9493f76d40fabcf24af2d9a82e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b1de766c3737d3a9543b1b7a02b2b87bcbf7a54e2f4610f8601adc7648ec90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1de766c3737d3a9543b1b7a02b2b87bcbf7a54e2f4610f8601adc7648ec90b->enter($__internal_4b1de766c3737d3a9543b1b7a02b2b87bcbf7a54e2f4610f8601adc7648ec90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4b1de766c3737d3a9543b1b7a02b2b87bcbf7a54e2f4610f8601adc7648ec90b->leave($__internal_4b1de766c3737d3a9543b1b7a02b2b87bcbf7a54e2f4610f8601adc7648ec90b_prof);

        
        $__internal_bd1ace822e20e17bdb40e8c23acc5afd0521c9493f76d40fabcf24af2d9a82e2->leave($__internal_bd1ace822e20e17bdb40e8c23acc5afd0521c9493f76d40fabcf24af2d9a82e2_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\symfony\\ProyectoUnion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
