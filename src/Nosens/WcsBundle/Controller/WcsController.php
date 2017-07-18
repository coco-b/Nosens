<?php

namespace Nosens\WcsBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WcsController extends Controller
{
    public function HomeAction()
    {
        return $this->render('@NosensWcs/Homepage.html.twig');
    }
}


