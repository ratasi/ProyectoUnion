<?php

/* ::base.html.twig */
class __TwigTemplate_4ff9041615b9f5760717bb26b9cc1c34d83ffee4a63893654e34dfced6c42d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10239347d67c1f4890b4859a6d5902bd91397b58ef3ed4e399ed0e9b7821d515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10239347d67c1f4890b4859a6d5902bd91397b58ef3ed4e399ed0e9b7821d515->enter($__internal_10239347d67c1f4890b4859a6d5902bd91397b58ef3ed4e399ed0e9b7821d515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_829e3abc811273c83db7ff3be41b3fb339010b8ae9d67a306ea3a8e1998cd961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829e3abc811273c83db7ff3be41b3fb339010b8ae9d67a306ea3a8e1998cd961->enter($__internal_829e3abc811273c83db7ff3be41b3fb339010b8ae9d67a306ea3a8e1998cd961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <html>
<head>
<title>AUC</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Trail Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
<link href=\"css/bootstrap.css\" rel='stylesheet' type='text/css' />

<!-- Link para footer, redes sociales -->
<link rel=\"stylesheet\" href=\"http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css\">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"js/jquery-1.11.1.min.js\"></script>
<!-- Custom Theme files -->
<link href=\"css/style.css\" rel='stylesheet' type='text/css' />
<!--font-Awesome -->

<!--font-Awesome->
</head>
<body>
  <div class=\"bottom-header\">
    <div class=\"container\">
       <div class=\"header_top-responsive\">
         <div class=\"logo_responsive\"><a href=\"index.html\"><img src=\"images/logo1.png\" alt=\"\"/> </a></div>
       <div class=\"search_responsive\">
        <input type=\"text\" value=\"Enter a keyword\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter a keyword...';}\">
        <input type=\"submit\" value=\"\">
      </div>
       <div class=\"clearfix\"></div>
     </div>
       <div class=\"h_menu4\"><!- start h_menu4 -->
        <a class=\"toggleMenu\" href=\"#\">Menu</a>
        <ul class=\"nav\">
          <li><a href=\"services.html\">Equipos</a>
            <ul>
              <li><a href=\"futbol_convencional\">Futbol Convencional</a></li>
              <li><a href=\"services.html\">Futbol Adaptado</a></li>
              <li><a href=\"services.html\">Futbol en Silla de Ruedas</a></li>
            </ul>
          </li>
          <li><a href=\"about.html\">Actividades Extra</a></li>
          <li class=\"logo\"><a href=\"/\"><img src=\"images/logo.png\" alt=\"\"/></a></li>
          <li><a href=\"index.html\">Quienes Somos</a></li>
          <li><a href=\"contacto\">Contacto</a></li>
        </ul>
        <script type=\"text/javascript\" src=\"js/nav.js\"></script>
      </div><!-- end h_menu4 -->
      <div class=\"clearfix\"></div>
      </div>
    </div>
      ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "    <div class=\"clearfix\"> </div>

</div>
<div class=\"footer_bottom\">
  <div class=\"container\">


    <div class=\"copy\">
      <div class=\"caja-redes\">
         <a href=\"#\" class=\"icon-button twitter\"><i class=\"icon-twitter\"></i><span></span></a>
         <a href=\"#\" class=\"icon-button facebook\"><i class=\"icon-facebook\"></i><span></span></a>
         <a href=\"#\" class=\"icon-button google-plus\"><i class=\"icon-google-plus\"></i><span></span></a>
      </div>
       <p>© 2017 Proyecto Unión | <a href=\"http:floridauniversitaria.es\">Florida Universitaria</a> </p>
    </div>
  </div>
</div>
<link href=\"css/flexslider.css\" rel='stylesheet' type='text/css' />
                <script defer src=\"js/jquery.flexslider.js\"></script>
                <script type=\"text/javascript\">
                \$(function(){
                  SyntaxHighlighter.all();
                });
                \$(window).load(function(){
                  \$('.flexslider').flexslider({
                  animation: \"slide\",
                  start: function(slider){
                    \$('body').removeClass('loading');
                  }
                  });
                });
                </script>

    </body>
</html>
";
        
        $__internal_10239347d67c1f4890b4859a6d5902bd91397b58ef3ed4e399ed0e9b7821d515->leave($__internal_10239347d67c1f4890b4859a6d5902bd91397b58ef3ed4e399ed0e9b7821d515_prof);

        
        $__internal_829e3abc811273c83db7ff3be41b3fb339010b8ae9d67a306ea3a8e1998cd961->leave($__internal_829e3abc811273c83db7ff3be41b3fb339010b8ae9d67a306ea3a8e1998cd961_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6526e2286c7705a3476d97f4c5fb1c6657ff16b5b0437df7d8d1251bc7055a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6526e2286c7705a3476d97f4c5fb1c6657ff16b5b0437df7d8d1251bc7055a35->enter($__internal_6526e2286c7705a3476d97f4c5fb1c6657ff16b5b0437df7d8d1251bc7055a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd875cdb2ac6345039d2351b63f4fe282d65b6aedaf91d8516df81879aced51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd875cdb2ac6345039d2351b63f4fe282d65b6aedaf91d8516df81879aced51f->enter($__internal_bd875cdb2ac6345039d2351b63f4fe282d65b6aedaf91d8516df81879aced51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AUC";
        
        $__internal_bd875cdb2ac6345039d2351b63f4fe282d65b6aedaf91d8516df81879aced51f->leave($__internal_bd875cdb2ac6345039d2351b63f4fe282d65b6aedaf91d8516df81879aced51f_prof);

        
        $__internal_6526e2286c7705a3476d97f4c5fb1c6657ff16b5b0437df7d8d1251bc7055a35->leave($__internal_6526e2286c7705a3476d97f4c5fb1c6657ff16b5b0437df7d8d1251bc7055a35_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ca3e17043db70a1d9f0e5f5c3015b82fe40dc4e368fc2e140b0ec423bfb4663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca3e17043db70a1d9f0e5f5c3015b82fe40dc4e368fc2e140b0ec423bfb4663->enter($__internal_7ca3e17043db70a1d9f0e5f5c3015b82fe40dc4e368fc2e140b0ec423bfb4663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_177e287c83dcc80f57e922bd7d80df51e2913b9a0594634f4e87971db0dcfba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177e287c83dcc80f57e922bd7d80df51e2913b9a0594634f4e87971db0dcfba1->enter($__internal_177e287c83dcc80f57e922bd7d80df51e2913b9a0594634f4e87971db0dcfba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_177e287c83dcc80f57e922bd7d80df51e2913b9a0594634f4e87971db0dcfba1->leave($__internal_177e287c83dcc80f57e922bd7d80df51e2913b9a0594634f4e87971db0dcfba1_prof);

        
        $__internal_7ca3e17043db70a1d9f0e5f5c3015b82fe40dc4e368fc2e140b0ec423bfb4663->leave($__internal_7ca3e17043db70a1d9f0e5f5c3015b82fe40dc4e368fc2e140b0ec423bfb4663_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2055eb6b3e948079ffc519f2630f187c287929957954791fcad1bfcc5e287ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2055eb6b3e948079ffc519f2630f187c287929957954791fcad1bfcc5e287ea->enter($__internal_e2055eb6b3e948079ffc519f2630f187c287929957954791fcad1bfcc5e287ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28a74d0cba8153a90c9d92d76a69953fab2caa83f2421743ebd75af735aea48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a74d0cba8153a90c9d92d76a69953fab2caa83f2421743ebd75af735aea48b->enter($__internal_28a74d0cba8153a90c9d92d76a69953fab2caa83f2421743ebd75af735aea48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_28a74d0cba8153a90c9d92d76a69953fab2caa83f2421743ebd75af735aea48b->leave($__internal_28a74d0cba8153a90c9d92d76a69953fab2caa83f2421743ebd75af735aea48b_prof);

        
        $__internal_e2055eb6b3e948079ffc519f2630f187c287929957954791fcad1bfcc5e287ea->leave($__internal_e2055eb6b3e948079ffc519f2630f187c287929957954791fcad1bfcc5e287ea_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 62,  164 => 6,  146 => 5,  101 => 63,  99 => 62,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}AUC{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <html>
<head>
<title>AUC</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Trail Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=\"https://fonts.googleapis.com/css?family=Raleway\" rel=\"stylesheet\">
<link href=\"css/bootstrap.css\" rel='stylesheet' type='text/css' />

<!-- Link para footer, redes sociales -->
<link rel=\"stylesheet\" href=\"http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css\">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"js/jquery-1.11.1.min.js\"></script>
<!-- Custom Theme files -->
<link href=\"css/style.css\" rel='stylesheet' type='text/css' />
<!--font-Awesome -->

<!--font-Awesome->
</head>
<body>
  <div class=\"bottom-header\">
    <div class=\"container\">
       <div class=\"header_top-responsive\">
         <div class=\"logo_responsive\"><a href=\"index.html\"><img src=\"images/logo1.png\" alt=\"\"/> </a></div>
       <div class=\"search_responsive\">
        <input type=\"text\" value=\"Enter a keyword\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter a keyword...';}\">
        <input type=\"submit\" value=\"\">
      </div>
       <div class=\"clearfix\"></div>
     </div>
       <div class=\"h_menu4\"><!- start h_menu4 -->
        <a class=\"toggleMenu\" href=\"#\">Menu</a>
        <ul class=\"nav\">
          <li><a href=\"services.html\">Equipos</a>
            <ul>
              <li><a href=\"futbol_convencional\">Futbol Convencional</a></li>
              <li><a href=\"services.html\">Futbol Adaptado</a></li>
              <li><a href=\"services.html\">Futbol en Silla de Ruedas</a></li>
            </ul>
          </li>
          <li><a href=\"about.html\">Actividades Extra</a></li>
          <li class=\"logo\"><a href=\"/\"><img src=\"images/logo.png\" alt=\"\"/></a></li>
          <li><a href=\"index.html\">Quienes Somos</a></li>
          <li><a href=\"contacto\">Contacto</a></li>
        </ul>
        <script type=\"text/javascript\" src=\"js/nav.js\"></script>
      </div><!-- end h_menu4 -->
      <div class=\"clearfix\"></div>
      </div>
    </div>
      {% block body %}{% endblock %}
    <div class=\"clearfix\"> </div>

</div>
<div class=\"footer_bottom\">
  <div class=\"container\">


    <div class=\"copy\">
      <div class=\"caja-redes\">
         <a href=\"#\" class=\"icon-button twitter\"><i class=\"icon-twitter\"></i><span></span></a>
         <a href=\"#\" class=\"icon-button facebook\"><i class=\"icon-facebook\"></i><span></span></a>
         <a href=\"#\" class=\"icon-button google-plus\"><i class=\"icon-google-plus\"></i><span></span></a>
      </div>
       <p>© 2017 Proyecto Unión | <a href=\"http:floridauniversitaria.es\">Florida Universitaria</a> </p>
    </div>
  </div>
</div>
<link href=\"css/flexslider.css\" rel='stylesheet' type='text/css' />
                <script defer src=\"js/jquery.flexslider.js\"></script>
                <script type=\"text/javascript\">
                \$(function(){
                  SyntaxHighlighter.all();
                });
                \$(window).load(function(){
                  \$('.flexslider').flexslider({
                  animation: \"slide\",
                  start: function(slider){
                    \$('body').removeClass('loading');
                  }
                  });
                });
                </script>

    </body>
</html>
", "::base.html.twig", "C:\\xampp\\symfony\\ProyectoUnion\\app/Resources\\views/base.html.twig");
    }
}
