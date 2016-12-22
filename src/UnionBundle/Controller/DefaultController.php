<?php

namespace UnionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UnionBundle:Default:index.html.twig');
    }

    public function contactoAction()
    {
        return $this->render('UnionBundle:Contacto:contacto.html.twig');
    }

    public function convencionalAction()
    {
        return $this->render('UnionBundle:Futbol:futbol_convencional.html.twig');
    }
}
