<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Monitor;
use AppBundle\Entity\Polzovatel;
use AppBundle\Repository\PolzovatelRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;




class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $numberl= mt_rand(1, 100);
        $url = 'http://api.openweathermap.org/data/2.5/weather?id=698740&units=metric&APPID=c4d64189685c30187df7546364d23e5b';
        $obj = json_decode(file_get_contents($url), true);
        return $this->render('kilbas/kilbas.html.twig', [
            'wind_speed' => $obj['wind']['speed'], 'wea_ther'=> $obj['main']['temp'], 'luckynumb' => $numberl,'colorr'=>null]);

        
    }

    
         /**
         *
         *@Route("/monitors" , name="monitors")
         */
         public function monitorsAction()
         {
            $em=$this->getDoctrine()->getManager();
            $moniks=$this->getDoctrine()->getRepository('AppBundle:Monitor')->findAll();
            $em->flush();
            //dump($moniks);

            return $this->render('kilbas/monik.html.twig', ['moniks'=>$moniks, 'wind_speed' =>null, 'wea_ther'=>null]);
         }

         /**
         *
         *@Route("/users", name="users")
         */
         public function userstAction( $polzovatelId='2')
         {

            
            
            $polzovat=$this->getDoctrine()
            ->getRepository(Polzovatel::class)
            ->findOneByIdJoinedToMonitor($polzovatelId);

            $monitor=$polzovat->getIdmonitor();
            dump($polzovatelId);


            $em->flush();
            dump($polzovat);
            return $this->render('kilbas/polzovat.html.twig',['polzovat'=>$polzovat,'wind_speed' =>null, 'wea_ther'=>null]);
         }

}


