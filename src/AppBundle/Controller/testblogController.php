<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class testblogController extends Controller
{


    /**
    * Matches /testblog exactly
     *
     * @Route("/testblog/{page}", name="testblog_number", requirements={"page": "\d+"})
     */
    public function numberAction($page= 1 )
    {
        $number = mt_rand(90, 100);

        return $this->render('kilbas/kilbas.html.twig',array('vitalka' => $number,)
            
        );
    }

 /**
     * Matches /testblog/*
     *
     * @Route("/testblog/{slug}", name="testblog_show")
     */
public function showAction($slug)
{
$number = mt_rand(0, 5);

        return $this->render('kilbas/kilbas.html.twig',array('vitalka' => $number,)
            
        );
}

}

