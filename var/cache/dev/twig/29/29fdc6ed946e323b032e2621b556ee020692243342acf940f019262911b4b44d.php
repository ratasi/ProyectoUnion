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
        $__internal_0ae6e5da52eea002ab80827013f98bbd4332e96683dffadd4f4bce52ddec7c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae6e5da52eea002ab80827013f98bbd4332e96683dffadd4f4bce52ddec7c2c->enter($__internal_0ae6e5da52eea002ab80827013f98bbd4332e96683dffadd4f4bce52ddec7c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_df4a935216932af58fb631e1dfc133087fc6b2b0e8ebbc20e221a1b13bd872dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4a935216932af58fb631e1dfc133087fc6b2b0e8ebbc20e221a1b13bd872dc->enter($__internal_df4a935216932af58fb631e1dfc133087fc6b2b0e8ebbc20e221a1b13bd872dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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


</head>
<body>
  <div class=\"bottom-header\">

       <div class=\"header_top-responsive\">
         <div class=\"logo_responsive\"><a href=\"index.html\"><img src=\"images/logo1.png\" alt=\"\"/> </a></div>
       <div class=\"search_responsive\">
        <input type=\"text\" value=\"Enter a keyword\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter a keyword...';}\">
        <input type=\"submit\" value=\"\">
      </div>
       <div class=\"clearfix\"></div>
     </div>
       <div class=\"h_menu4\">
       <a class=\"toggleMenu\" href=\"#\">Menu</a>
       <ul class=\"nav\">
         <li><a href=\"services.html\">Futbol</a>
           <ul>
             <li><a href=\"services.html\">Futbol Convencional</a></li>
             <li><a href=\"services.html\">Futbol Adaptado</a></li>
             <li><a href=\"services.html\">Futbol en Silla de Ruedas</a></li>
           </ul>
         </li>
         <li><a href=\"about.html\">Actividades Extra</a></li>
         <li class=\"logo\"><a href=\"index\"><img src=\"images/logo.png\" alt=\"\"/></a></li>
         <li><a href=\"index\">Quienes Somos</a></li>
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
        
        $__internal_0ae6e5da52eea002ab80827013f98bbd4332e96683dffadd4f4bce52ddec7c2c->leave($__internal_0ae6e5da52eea002ab80827013f98bbd4332e96683dffadd4f4bce52ddec7c2c_prof);

        
        $__internal_df4a935216932af58fb631e1dfc133087fc6b2b0e8ebbc20e221a1b13bd872dc->leave($__internal_df4a935216932af58fb631e1dfc133087fc6b2b0e8ebbc20e221a1b13bd872dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2a092105fc1cebb1a3aef802d513d45b9043bf08965e58f83738fc1d99ebe02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a092105fc1cebb1a3aef802d513d45b9043bf08965e58f83738fc1d99ebe02->enter($__internal_f2a092105fc1cebb1a3aef802d513d45b9043bf08965e58f83738fc1d99ebe02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c3cb3cb36ce7239f147fc5a118fb2c7db2b67b790e495db2586bbb98972d053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3cb3cb36ce7239f147fc5a118fb2c7db2b67b790e495db2586bbb98972d053->enter($__internal_6c3cb3cb36ce7239f147fc5a118fb2c7db2b67b790e495db2586bbb98972d053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AUC";
        
        $__internal_6c3cb3cb36ce7239f147fc5a118fb2c7db2b67b790e495db2586bbb98972d053->leave($__internal_6c3cb3cb36ce7239f147fc5a118fb2c7db2b67b790e495db2586bbb98972d053_prof);

        
        $__internal_f2a092105fc1cebb1a3aef802d513d45b9043bf08965e58f83738fc1d99ebe02->leave($__internal_f2a092105fc1cebb1a3aef802d513d45b9043bf08965e58f83738fc1d99ebe02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb24fde0f93f26d469bdb18f32b91500bbdca237bd71398d35f441e31c573148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb24fde0f93f26d469bdb18f32b91500bbdca237bd71398d35f441e31c573148->enter($__internal_bb24fde0f93f26d469bdb18f32b91500bbdca237bd71398d35f441e31c573148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f734438b29bde1e5ec771a9fe034f71c13cf2ad64482ab16b65e0b5818355ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f734438b29bde1e5ec771a9fe034f71c13cf2ad64482ab16b65e0b5818355ec->enter($__internal_2f734438b29bde1e5ec771a9fe034f71c13cf2ad64482ab16b65e0b5818355ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2f734438b29bde1e5ec771a9fe034f71c13cf2ad64482ab16b65e0b5818355ec->leave($__internal_2f734438b29bde1e5ec771a9fe034f71c13cf2ad64482ab16b65e0b5818355ec_prof);

        
        $__internal_bb24fde0f93f26d469bdb18f32b91500bbdca237bd71398d35f441e31c573148->leave($__internal_bb24fde0f93f26d469bdb18f32b91500bbdca237bd71398d35f441e31c573148_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b85dc7759de66f525076c90364aea01a28fdf85e9b14a607da92da2ab93baaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b85dc7759de66f525076c90364aea01a28fdf85e9b14a607da92da2ab93baaa->enter($__internal_9b85dc7759de66f525076c90364aea01a28fdf85e9b14a607da92da2ab93baaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d68151845246ae69845efa40aa9a598361e8f192e32e6996a33a047fa556283b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68151845246ae69845efa40aa9a598361e8f192e32e6996a33a047fa556283b->enter($__internal_d68151845246ae69845efa40aa9a598361e8f192e32e6996a33a047fa556283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d68151845246ae69845efa40aa9a598361e8f192e32e6996a33a047fa556283b->leave($__internal_d68151845246ae69845efa40aa9a598361e8f192e32e6996a33a047fa556283b_prof);

        
        $__internal_9b85dc7759de66f525076c90364aea01a28fdf85e9b14a607da92da2ab93baaa->leave($__internal_9b85dc7759de66f525076c90364aea01a28fdf85e9b14a607da92da2ab93baaa_prof);

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


</head>
<body>
  <div class=\"bottom-header\">

       <div class=\"header_top-responsive\">
         <div class=\"logo_responsive\"><a href=\"index.html\"><img src=\"images/logo1.png\" alt=\"\"/> </a></div>
       <div class=\"search_responsive\">
        <input type=\"text\" value=\"Enter a keyword\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter a keyword...';}\">
        <input type=\"submit\" value=\"\">
      </div>
       <div class=\"clearfix\"></div>
     </div>
       <div class=\"h_menu4\">
       <a class=\"toggleMenu\" href=\"#\">Menu</a>
       <ul class=\"nav\">
         <li><a href=\"services.html\">Futbol</a>
           <ul>
             <li><a href=\"services.html\">Futbol Convencional</a></li>
             <li><a href=\"services.html\">Futbol Adaptado</a></li>
             <li><a href=\"services.html\">Futbol en Silla de Ruedas</a></li>
           </ul>
         </li>
         <li><a href=\"about.html\">Actividades Extra</a></li>
         <li class=\"logo\"><a href=\"index\"><img src=\"images/logo.png\" alt=\"\"/></a></li>
         <li><a href=\"index\">Quienes Somos</a></li>
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
