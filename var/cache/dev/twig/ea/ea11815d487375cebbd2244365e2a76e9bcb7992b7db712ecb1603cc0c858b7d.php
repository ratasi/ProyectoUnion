<?php

/* UnionBundle:Contacto:contacto.html.twig */
class __TwigTemplate_9c0bbe765a4d1fc1a31f255c5403e9525c613fd19eeb0647524f26a6e214658c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UnionBundle:Contacto:contacto.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dbf0f340076c1a72931a78eb89dce1e0df16800f5423e45caee90517282527c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbf0f340076c1a72931a78eb89dce1e0df16800f5423e45caee90517282527c->enter($__internal_5dbf0f340076c1a72931a78eb89dce1e0df16800f5423e45caee90517282527c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UnionBundle:Contacto:contacto.html.twig"));

        $__internal_644ecb5e0ad64d25d565e5c1bbec3a84817a16bdd566d528d3c8d36097f8534c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644ecb5e0ad64d25d565e5c1bbec3a84817a16bdd566d528d3c8d36097f8534c->enter($__internal_644ecb5e0ad64d25d565e5c1bbec3a84817a16bdd566d528d3c8d36097f8534c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UnionBundle:Contacto:contacto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dbf0f340076c1a72931a78eb89dce1e0df16800f5423e45caee90517282527c->leave($__internal_5dbf0f340076c1a72931a78eb89dce1e0df16800f5423e45caee90517282527c_prof);

        
        $__internal_644ecb5e0ad64d25d565e5c1bbec3a84817a16bdd566d528d3c8d36097f8534c->leave($__internal_644ecb5e0ad64d25d565e5c1bbec3a84817a16bdd566d528d3c8d36097f8534c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bab72b1cac29ba94b7a8961f0b2afc94e301a7179ea8e9b592733491cebbc065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab72b1cac29ba94b7a8961f0b2afc94e301a7179ea8e9b592733491cebbc065->enter($__internal_bab72b1cac29ba94b7a8961f0b2afc94e301a7179ea8e9b592733491cebbc065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_debc26a51b86d1386527a4f106e22cfc9c6a3f14cebe57708919057f8ab3553e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debc26a51b86d1386527a4f106e22cfc9c6a3f14cebe57708919057f8ab3553e->enter($__internal_debc26a51b86d1386527a4f106e22cfc9c6a3f14cebe57708919057f8ab3553e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<div class=\"wrap-box\"></div>
<div class=\"about\">
\t<div class=\"content_top\">
\t<div class=\"container\">
\t\t\t<h1 class=\"contact_head\">Nuestra localización</h1>
\t\t    <div class=\"map\">
\t\t\t  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2496.01204584165!2d-0.41317848728989676!3d39.40258339279103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc355cedae3fbb4f!2sCampo+de+F%C3%BAtbol+FBCD+Catarroja!5e0!3m2!1ses!2ses!4v1482404137296\"> </iframe>
\t\t\t</div>
\t\t\t<div class=\"contact\">
\t\t\t\t<div class=\"col-md-4 contact_left\">
\t\t\t\t\t<h2>Información</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum adipiscing vestibulum sapien, in ultricies tellus dignissim eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
\t\t\t\t    <p> Praesent mollis dolor eros, vel facilisis nisi auctor ut. Cras id convallis ipsum. Mauris posuere, ligula ac sodales sollicitudin, risus sapien iaculis libero, ac molestie orci arcu non ante. Fusce est leo, ornare ut porta quis, dictum et mi. Aliquam vel pretium sem</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 contact_right\">
\t\t\t\t\t<h2>Formulario de contacto</h2>
\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-fild\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"Nombre\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Nombre';}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-fild\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-fild\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"Asunto\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Asunto';}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"message-fild\">

\t\t\t\t\t\t\t\t\t\t\t<textarea value=\"Mensaje:\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Mensaje';}\">Mensaje</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Enviar\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t </div>
\t\t </div>
</div>
";
        
        $__internal_debc26a51b86d1386527a4f106e22cfc9c6a3f14cebe57708919057f8ab3553e->leave($__internal_debc26a51b86d1386527a4f106e22cfc9c6a3f14cebe57708919057f8ab3553e_prof);

        
        $__internal_bab72b1cac29ba94b7a8961f0b2afc94e301a7179ea8e9b592733491cebbc065->leave($__internal_bab72b1cac29ba94b7a8961f0b2afc94e301a7179ea8e9b592733491cebbc065_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_41d74d71d1b0299bd8d9a83b750c8fb286053a60c77d2c9286551ff7370a6c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41d74d71d1b0299bd8d9a83b750c8fb286053a60c77d2c9286551ff7370a6c53->enter($__internal_41d74d71d1b0299bd8d9a83b750c8fb286053a60c77d2c9286551ff7370a6c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b49644742b5a36d37e14713a79e7c284d2440c8534fd1ac25d0581b2bf76def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b49644742b5a36d37e14713a79e7c284d2440c8534fd1ac25d0581b2bf76def->enter($__internal_7b49644742b5a36d37e14713a79e7c284d2440c8534fd1ac25d0581b2bf76def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_7b49644742b5a36d37e14713a79e7c284d2440c8534fd1ac25d0581b2bf76def->leave($__internal_7b49644742b5a36d37e14713a79e7c284d2440c8534fd1ac25d0581b2bf76def_prof);

        
        $__internal_41d74d71d1b0299bd8d9a83b750c8fb286053a60c77d2c9286551ff7370a6c53->leave($__internal_41d74d71d1b0299bd8d9a83b750c8fb286053a60c77d2c9286551ff7370a6c53_prof);

    }

    public function getTemplateName()
    {
        return "UnionBundle:Contacto:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
<title>{% block title %}Contacto{% endblock %}</title>
<div class=\"wrap-box\"></div>
<div class=\"about\">
\t<div class=\"content_top\">
\t<div class=\"container\">
\t\t\t<h1 class=\"contact_head\">Nuestra localización</h1>
\t\t    <div class=\"map\">
\t\t\t  <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2496.01204584165!2d-0.41317848728989676!3d39.40258339279103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc355cedae3fbb4f!2sCampo+de+F%C3%BAtbol+FBCD+Catarroja!5e0!3m2!1ses!2ses!4v1482404137296\"> </iframe>
\t\t\t</div>
\t\t\t<div class=\"contact\">
\t\t\t\t<div class=\"col-md-4 contact_left\">
\t\t\t\t\t<h2>Información</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum adipiscing vestibulum sapien, in ultricies tellus dignissim eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
\t\t\t\t    <p> Praesent mollis dolor eros, vel facilisis nisi auctor ut. Cras id convallis ipsum. Mauris posuere, ligula ac sodales sollicitudin, risus sapien iaculis libero, ac molestie orci arcu non ante. Fusce est leo, ornare ut porta quis, dictum et mi. Aliquam vel pretium sem</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 contact_right\">
\t\t\t\t\t<h2>Formulario de contacto</h2>
\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-fild\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"Nombre\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Nombre';}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-fild\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email';}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-fild\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"text\" value=\"Asunto\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Asunto';}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"message-fild\">

\t\t\t\t\t\t\t\t\t\t\t<textarea value=\"Mensaje:\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Mensaje';}\">Mensaje</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Enviar\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t </div>
\t\t </div>
</div>
{% endblock %}
", "UnionBundle:Contacto:contacto.html.twig", "C:\\xampp\\symfony\\ProyectoUnion\\src\\UnionBundle/Resources/views/Contacto/contacto.html.twig");
    }
}
