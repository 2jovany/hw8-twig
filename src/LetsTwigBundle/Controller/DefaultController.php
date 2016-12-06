<?php

namespace LetsTwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LetsTwigBundle:Default:index.html.twig');
    }
}
