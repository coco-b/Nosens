<?php

    namespace Nosens\WcsBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class ExoController extends Controller
    {
        public function ExoAction()
        {

            return $this->render('NosensWcsBundle::Exo.html.twig');
        }

    }