<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $numberl= mt_rand(1, 100);
        return $this->render('kilbas/kilbas.html.twig', array('luckynumb' => $numberl,'colorr'=>null));
    }

    /**
    *
    *@Route("/1", name="onepage")
    */
    public function pageAction()
    {
        $num=mt_rand(50,55);
        return $this->render('kilbas/kilbas.html.twig', array('luckynumb'=>$num, 'colorr'=>null));
    }

    /**
    *
    *@Route("/zveropolis", name="zveropolis")
    */
    public function zveropolisAction()
    {
        $colori=mt_rand(100,900);
        return $this->render('kilbas/kilbas.html.twig', array('colorr'=>$colori, 'luckynumb'=>'нет'));
    }

}


