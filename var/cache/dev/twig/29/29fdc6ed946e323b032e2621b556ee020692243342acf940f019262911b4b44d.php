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
        $__internal_e96d2e559bfb93c69c4db173b9c7f9368acc37a0912f7d31f9b9860c8aa52d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96d2e559bfb93c69c4db173b9c7f9368acc37a0912f7d31f9b9860c8aa52d00->enter($__internal_e96d2e559bfb93c69c4db173b9c7f9368acc37a0912f7d31f9b9860c8aa52d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b935f815247c01efdb060d2a615359ed930233285304da02d27ddef0e6667ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b935f815247c01efdb060d2a615359ed930233285304da02d27ddef0e6667ebf->enter($__internal_b935f815247c01efdb060d2a615359ed930233285304da02d27ddef0e6667ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

<!-- Link para footer, redes sociales -->
<link rel=\"stylesheet\" href=\"http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css\">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
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
         <li class=\"logo\"><a href=\"/\"><img src=\"images/logo.png\" alt=\"\"/></a></li>
         <li><a href=\"index\">Quienes Somos</a></li>
         <li><a href=\"contacto\">Contacto</a></li>
       </ul>
       <script type=\"text/javascript\" src=\"js/nav.js\"></script>
     </div><!-- end h_menu4 -->
     <div class=\"clearfix\"></div>
     </div>
   </div>
      ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
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
        
        $__internal_e96d2e559bfb93c69c4db173b9c7f9368acc37a0912f7d31f9b9860c8aa52d00->leave($__internal_e96d2e559bfb93c69c4db173b9c7f9368acc37a0912f7d31f9b9860c8aa52d00_prof);

        
        $__internal_b935f815247c01efdb060d2a615359ed930233285304da02d27ddef0e6667ebf->leave($__internal_b935f815247c01efdb060d2a615359ed930233285304da02d27ddef0e6667ebf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_90d5c43c11f6d5116091cf5111c856c1b57ac70651cd8c5950665407ab8c168b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d5c43c11f6d5116091cf5111c856c1b57ac70651cd8c5950665407ab8c168b->enter($__internal_90d5c43c11f6d5116091cf5111c856c1b57ac70651cd8c5950665407ab8c168b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f611b3ccd3be89ddcbd0ac5e8b5ed0915fc94e6bbb55e251c19ff4075738f754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f611b3ccd3be89ddcbd0ac5e8b5ed0915fc94e6bbb55e251c19ff4075738f754->enter($__internal_f611b3ccd3be89ddcbd0ac5e8b5ed0915fc94e6bbb55e251c19ff4075738f754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AUC";
        
        $__internal_f611b3ccd3be89ddcbd0ac5e8b5ed0915fc94e6bbb55e251c19ff4075738f754->leave($__internal_f611b3ccd3be89ddcbd0ac5e8b5ed0915fc94e6bbb55e251c19ff4075738f754_prof);

        
        $__internal_90d5c43c11f6d5116091cf5111c856c1b57ac70651cd8c5950665407ab8c168b->leave($__internal_90d5c43c11f6d5116091cf5111c856c1b57ac70651cd8c5950665407ab8c168b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d9b5711b80b81ec135d39f009f955cc36a8e81a53e3b13609f33d12299777d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b5711b80b81ec135d39f009f955cc36a8e81a53e3b13609f33d12299777d2d->enter($__internal_d9b5711b80b81ec135d39f009f955cc36a8e81a53e3b13609f33d12299777d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b22e9a7e1834e99a981a71dcf9f50fa2f1eff705dc7a9c50c0a783aacf92f231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22e9a7e1834e99a981a71dcf9f50fa2f1eff705dc7a9c50c0a783aacf92f231->enter($__internal_b22e9a7e1834e99a981a71dcf9f50fa2f1eff705dc7a9c50c0a783aacf92f231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b22e9a7e1834e99a981a71dcf9f50fa2f1eff705dc7a9c50c0a783aacf92f231->leave($__internal_b22e9a7e1834e99a981a71dcf9f50fa2f1eff705dc7a9c50c0a783aacf92f231_prof);

        
        $__internal_d9b5711b80b81ec135d39f009f955cc36a8e81a53e3b13609f33d12299777d2d->leave($__internal_d9b5711b80b81ec135d39f009f955cc36a8e81a53e3b13609f33d12299777d2d_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1e03be9f62940c66b2177726bdbcf270f22a8e5334e2ccac2d1214f9ad98116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e03be9f62940c66b2177726bdbcf270f22a8e5334e2ccac2d1214f9ad98116->enter($__internal_a1e03be9f62940c66b2177726bdbcf270f22a8e5334e2ccac2d1214f9ad98116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa711778be86aaae8060c49cafbf7299f270954be75f80be338071d1583451b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa711778be86aaae8060c49cafbf7299f270954be75f80be338071d1583451b6->enter($__internal_aa711778be86aaae8060c49cafbf7299f270954be75f80be338071d1583451b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aa711778be86aaae8060c49cafbf7299f270954be75f80be338071d1583451b6->leave($__internal_aa711778be86aaae8060c49cafbf7299f270954be75f80be338071d1583451b6_prof);

        
        $__internal_a1e03be9f62940c66b2177726bdbcf270f22a8e5334e2ccac2d1214f9ad98116->leave($__internal_a1e03be9f62940c66b2177726bdbcf270f22a8e5334e2ccac2d1214f9ad98116_prof);

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
        return array (  185 => 63,  168 => 6,  150 => 5,  105 => 64,  103 => 63,  64 => 27,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
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
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

<!-- Link para footer, redes sociales -->
<link rel=\"stylesheet\" href=\"http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css\">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
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
         <li class=\"logo\"><a href=\"/\"><img src=\"images/logo.png\" alt=\"\"/></a></li>
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
