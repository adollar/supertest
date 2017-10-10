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
        $url = 'http://api.openweathermap.org/data/2.5/weather?id=698740&units=metric&APPID=c4d64189685c30187df7546364d23e5b';
        $obj = json_decode(file_get_contents($url), true);
        return $this->render('kilbas/kilbas.html.twig', [
            'wind_speed' => $obj['wind']['speed'], 'wea_ther'=> $obj['main']['temp'], 'luckynumb' => $numberl,'colorr'=>null]);

        
    }

    /**
    *
    *@Route("/1", name="onepage")
    */
    public function pageAction()
    {
        $url = 'http://api.openweathermap.org/data/2.5/weather?q=Odessa&APPID=c4d64189685c30187df7546364d23e5b';
        $obj = json_decode(file_get_contents($url), true);
        $num=mt_rand(50,55);
        return $this->render('kilbas/kilbas.html.twig', array('wind_speed' => $obj['wind']['speed'], 'luckynumb'=>$num, 'colorr'=>null));
    }

    /**
    *
    *@Route("/zveropolis", name="zveropolis")
    */
    public function zveropolisAction()
    {
        $url = 'http://api.openweathermap.org/data/2.5/weather?q=Odessa&APPID=c4d64189685c30187df7546364d23e5b';
        $obj = json_decode(file_get_contents($url), true);
        $colori=mt_rand(100,900);
        return $this->render('kilbas/kilbas.html.twig', array('wind_speed' => $obj['wind']['speed'], 'colorr'=>$colori, 'luckynumb'=>'нет'));
    }

  

}


