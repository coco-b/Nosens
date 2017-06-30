<?php

namespace Nosens\WcsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NosensWcsBundle:Default:index.html.twig');
    }
}
