<?php

namespace Wcs\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WcsBundle:Default:index.html.twig');
    }
}
