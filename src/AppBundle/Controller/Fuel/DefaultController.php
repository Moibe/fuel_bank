<?php

namespace AppBundle\Controller\Fuel;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="fuel_homepage")
     */
    public function indexAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $currencies = $em->getRepository('AppBundle:Currency')->findAll();
        return $this->render('default/index.html.twig', [
                    'currencies' => $currencies
        ]);
    }

}
