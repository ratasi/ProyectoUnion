<?php

/* UnionBundle:Default:index.html.twig */
class __TwigTemplate_b4946f83b5a003662fdbb4679f3b438eea53f6d7437e43f68c22a66958ad8779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UnionBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b790183ff05e4be11954276e168b12e09b155e911db578430e9853b04a3b446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b790183ff05e4be11954276e168b12e09b155e911db578430e9853b04a3b446->enter($__internal_2b790183ff05e4be11954276e168b12e09b155e911db578430e9853b04a3b446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UnionBundle:Default:index.html.twig"));

        $__internal_fda321ae750c587f9b4bdbeb9f02b39553014da9dd102fa6904d406a0a705ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda321ae750c587f9b4bdbeb9f02b39553014da9dd102fa6904d406a0a705ea2->enter($__internal_fda321ae750c587f9b4bdbeb9f02b39553014da9dd102fa6904d406a0a705ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UnionBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b790183ff05e4be11954276e168b12e09b155e911db578430e9853b04a3b446->leave($__internal_2b790183ff05e4be11954276e168b12e09b155e911db578430e9853b04a3b446_prof);

        
        $__internal_fda321ae750c587f9b4bdbeb9f02b39553014da9dd102fa6904d406a0a705ea2->leave($__internal_fda321ae750c587f9b4bdbeb9f02b39553014da9dd102fa6904d406a0a705ea2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e82023cdf9b173b4cdc7c7368978280564f1e3c72b5e329a03f07d5987030e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e82023cdf9b173b4cdc7c7368978280564f1e3c72b5e329a03f07d5987030e9->enter($__internal_6e82023cdf9b173b4cdc7c7368978280564f1e3c72b5e329a03f07d5987030e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52abd8f93b0cffeeff06759529dea9d6a9580206f3e9d3621e205b1670af25ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52abd8f93b0cffeeff06759529dea9d6a9580206f3e9d3621e205b1670af25ac->enter($__internal_52abd8f93b0cffeeff06759529dea9d6a9580206f3e9d3621e205b1670af25ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    max-height: 600px;

      width: 100%;
      margin: auto;
      object-fit: cover;
  }
  </style>

  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/banner2.jpg"), "html", null, true);
        echo "\" alt=\"Chania\" width=\"460\" height=\"345\">
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/banner3.jpg"), "html", null, true);
        echo "\" alt=\"Chania\" width=\"460\" height=\"345\">
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img1.jpg"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img2.jpg"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</div>

<div class=\"content_top\">
  <div class=\"content_bottom\">
  <div class=\"container\">
    <h2 class=\"heading\" style=\"visibility: visible;\">Noticias y Eventos<span class=\"subheading text\">Dignissimos ducimus qui blanditiis praesentium </span></h2>
     <div class=\"box_1\">
       <a href=\"#\" class=\"img_desc\">
               <div class=\"col-md-6\"> <div class=\"block-3\">
                <div class=\"block-2 text-2\"><span class=\"caption\"><span class=\"text-3\">05/15</span>March</span></div>
                <div class=\"subtitle text-2\">Duis autem vel eum iriure</div>
                <p>Soluta nobis eleifend opti on congue nihil imper diet doming id quod mazim placerat </p>
              </div></div>
               <div class=\"col-md-6 img-box\"><img src=\"images/pic1.jpg\" class=\"img-responsive\" alt=\"\"/></div>
               <div class=\"clearfix\"> </div>
           </a>
          </div>
          <div class=\"box_1\">
            <a href=\"#\" class=\"img_desc\">
               <div class=\"col-md-6\"> <div class=\"block-3\">
                <div class=\"block-2 text-2\"><span class=\"caption\"><span class=\"text-3\">06/15</span>March</span></div>
                <div class=\"subtitle text-2\">Duis autem vel eum iriure</div>
                <p>Soluta nobis eleifend opti on congue nihil imper diet doming id quod mazim placerat </p>
              </div></div>
               <div class=\"col-md-6 img-box\"><img src=\"images/pic2.jpg\" class=\"img-responsive\" alt=\"\"/></div>
               <div class=\"clearfix\"> </div>
           </a>
          </div>
            <a href=\"#\" class=\"img_desc\">
               <div class=\"col-md-6\"> <div class=\"block-3\">
                <div class=\"block-2 text-2\"><span class=\"caption\"><span class=\"text-3\">04/15</span>March</span></div>
                <div class=\"subtitle text-2\">Duis autem vel eum iriure</div>
                <p>Soluta nobis eleifend opti on congue nihil imper diet doming id quod mazim placerat </p>
              </div></div>
               <div class=\"col-md-6 img-box\"><img src=\"images/pic3.jpg\" class=\"img-responsive\" alt=\"\"/></div>
               <div class=\"clearfix\"> </div>
           </a>
  </div>
</div>
</div>
";
        
        $__internal_52abd8f93b0cffeeff06759529dea9d6a9580206f3e9d3621e205b1670af25ac->leave($__internal_52abd8f93b0cffeeff06759529dea9d6a9580206f3e9d3621e205b1670af25ac_prof);

        
        $__internal_6e82023cdf9b173b4cdc7c7368978280564f1e3c72b5e329a03f07d5987030e9->leave($__internal_6e82023cdf9b173b4cdc7c7368978280564f1e3c72b5e329a03f07d5987030e9_prof);

    }

    public function getTemplateName()
    {
        return "UnionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  89 => 35,  82 => 31,  75 => 27,  49 => 3,  40 => 2,  11 => 1,);
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

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    max-height: 600px;

      width: 100%;
      margin: auto;
      object-fit: cover;
  }
  </style>

  <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"{{ asset('images/banner2.jpg') }}\" alt=\"Chania\" width=\"460\" height=\"345\">
      </div>

      <div class=\"item\">
        <img src=\"{{ asset('images/banner3.jpg') }}\" alt=\"Chania\" width=\"460\" height=\"345\">
      </div>

      <div class=\"item\">
        <img src=\"{{ asset('images/img1.jpg') }}\" alt=\"Flower\" width=\"460\" height=\"345\">
      </div>

      <div class=\"item\">
        <img src=\"{{ asset('images/img2.jpg') }}\" alt=\"Flower\" width=\"460\" height=\"345\">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>
</div>

<div class=\"content_top\">
  <div class=\"content_bottom\">
  <div class=\"container\">
    <h2 class=\"heading\" style=\"visibility: visible;\">Noticias y Eventos<span class=\"subheading text\">Dignissimos ducimus qui blanditiis praesentium </span></h2>
     <div class=\"box_1\">
       <a href=\"#\" class=\"img_desc\">
               <div class=\"col-md-6\"> <div class=\"block-3\">
                <div class=\"block-2 text-2\"><span class=\"caption\"><span class=\"text-3\">05/15</span>March</span></div>
                <div class=\"subtitle text-2\">Duis autem vel eum iriure</div>
                <p>Soluta nobis eleifend opti on congue nihil imper diet doming id quod mazim placerat </p>
              </div></div>
               <div class=\"col-md-6 img-box\"><img src=\"images/pic1.jpg\" class=\"img-responsive\" alt=\"\"/></div>
               <div class=\"clearfix\"> </div>
           </a>
          </div>
          <div class=\"box_1\">
            <a href=\"#\" class=\"img_desc\">
               <div class=\"col-md-6\"> <div class=\"block-3\">
                <div class=\"block-2 text-2\"><span class=\"caption\"><span class=\"text-3\">06/15</span>March</span></div>
                <div class=\"subtitle text-2\">Duis autem vel eum iriure</div>
                <p>Soluta nobis eleifend opti on congue nihil imper diet doming id quod mazim placerat </p>
              </div></div>
               <div class=\"col-md-6 img-box\"><img src=\"images/pic2.jpg\" class=\"img-responsive\" alt=\"\"/></div>
               <div class=\"clearfix\"> </div>
           </a>
          </div>
            <a href=\"#\" class=\"img_desc\">
               <div class=\"col-md-6\"> <div class=\"block-3\">
                <div class=\"block-2 text-2\"><span class=\"caption\"><span class=\"text-3\">04/15</span>March</span></div>
                <div class=\"subtitle text-2\">Duis autem vel eum iriure</div>
                <p>Soluta nobis eleifend opti on congue nihil imper diet doming id quod mazim placerat </p>
              </div></div>
               <div class=\"col-md-6 img-box\"><img src=\"images/pic3.jpg\" class=\"img-responsive\" alt=\"\"/></div>
               <div class=\"clearfix\"> </div>
           </a>
  </div>
</div>
</div>
{% endblock %}
", "UnionBundle:Default:index.html.twig", "C:\\xampp\\symfony\\ProyectoUnion\\src\\UnionBundle/Resources/views/Default/index.html.twig");
    }
}
