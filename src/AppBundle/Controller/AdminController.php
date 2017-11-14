<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Polzovatel;
use AppBundle\Entity\Monitor;
use AppBundle\Entity\computer;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class AdminController extends Controller
{

/**
     * @Route("/adduser", name="adduser")
     */
    public function adduserAction(Request $request)
    {
        $monitor = new Monitor();
        
    	$polzov = new Polzovatel();
        
    	$form=$this->createFormBuilder($polzov)
        ->setMethod('GET')
    	->add('name',TextType::class)
    	->add('cabinet',IntegerType::class)
    	->add('idmonitor',IntegerType::class)
    	->add('save',SubmitType::class, array('label' =>'Create Polzovatel'))
    	->getForm();


    	 $form->handleRequest($request);


    if ($form->isSubmitted() && $form->isValid()) {
        
        $polzov = $form->getData();
        $em = $this->getDoctrine()->getManager();
        $em->persist($polzov);
        $em->persist($monitor);
        $em->flush();

        return $this->render('admin/addpolzov.html.twig', array(
            'form' => $form->createView(),'wind_speed' =>null, 'wea_ther'=>null
        ));
   }





    	return $this->render('admin/addpolzov.html.twig', array('form' => $form->createView(),
            'wind_speed' =>null, 'wea_ther'=>null
        ));
    }




    /**
     * @Route("/addmonitor", name="addmonitor")
     */
    public function addmonitorAction(Request $request)
    {

    	$monitor= new Monitor();
    	
    	


    	$form=$this->createFormBuilder($monitor)
        ->setMethod('GET')
    	->add('model',TextType::class)
    	->add('diagonal',IntegerType::class)
    	->add('save',SubmitType::class, array('label' =>'додати монітор'))
    	->getForm();


    	 $form->handleRequest($request);

    	 $em = $this->getDoctrine()->getManager();
    	 $moniks = $this->getDoctrine()->getRepository('AppBundle:Monitor')->findAll();
         $em->flush();
            //dump($moniks);


    if ($form->isSubmitted() && $form->isValid()) {
        $monitor = $form->getData();
        $em->persist($monitor);
        $em->flush();
        

        return $this->redirectToRoute('addmonitor');
    }





    	return $this->render('admin/addmonik.html.twig', array('moniks'=>$moniks,
            'form' => $form->createView(),'wind_speed' =>null, 'wea_ther'=>null
        ));
    }


    }