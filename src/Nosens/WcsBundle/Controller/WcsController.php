<?php

namespace Nosens\WcsBundle\Controller;



use Nosens\WcsBundle\Entity\Card;
use Nosens\WcsBundle\Form\CardType;
use Nosens\WcsBundle\NosensWcsBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class WcsController extends Controller
{




    public function HomeAction()
    {
        return $this->render('@NosensWcs/Homepage.html.twig');
    }


    /**
     * Creates a new Card entity.
     *
     */
    public function WcsaddAction(Request $request)
    {
        $i = 0;

        $em = $this->getDoctrine()->getManager();
        $cards = $em ->getRepository(Card::class)->findAll();


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
                'i' => $i,
                'card' => $card,
                'cards' => $cards,
                'form' => $form->createView(),
            ));
    }

    /**
     * Delete a Card entity.
     *
     */

    public function WcsdeleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('NosensWcsBundle:Card')->findOneById($id);
        $em->remove($card);
        $em->flush();

        return $this->redirectToRoute('wcs_card_add');
    }


}


