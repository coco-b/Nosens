<?php

namespace Nosens\WcsBundle\Controller;



use Nosens\WcsBundle\Entity\Card;
use Nosens\WcsBundle\Form\CardType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class WcsController extends Controller
{
    public function HomeAction()
    {
        return $this->render('@NosensWcs/Homepage.html.twig');
    }

    public function WcsaddAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $card = new Card();
        $form = $this->createForm(CardType::class, $card);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($card);
            $em->flush();

            return $this->redirectToRoute('wcs_card_add');
        }

        return $this->render('@NosensWcs/Wcs.html.twig', array(
                'card' => $card,
                'form' => $form->createView(),
            ));


    }
}


