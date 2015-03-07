<?php

namespace Xm\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('XmMainBundle:Default:index.html.twig');
    }
}
