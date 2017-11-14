<?php

namespace AppBundle\Controller;


use AppBundle\Entity\computer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class ComputerController extends Controller
{

     /**
     * @Route("/addcomputer", name="addcomputer")
     */
public function AddcomputerAction(Request $request)
    {
        $doctrine = $this->getDoctrine();
    	$computer = new computer();
        $computer->setCpu('2');
        $computer->setRam('3');
        $computer->setHdd('4');

    	$form=$this->createFormBuilder($computer)
        ->setMethod('GET')
        ->add('cpu')
        ->add('ram')
        ->add('hdd')
        ->add('save',SubmitType::class, array('label' => 'додати computer'))->getForm();

         $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        
        $computer = $form->getData();

        $em = $doctrine->getManager();
        $em->persist($computer);
        $em->flush();

        return $this->redirectToRoute('addcomputer');
    }


    $em = $doctrine->getManager();
    $compall = $this->getDoctrine()->getRepository('AppBundle:computer')->findAll();
            $em->flush();

    	return $this->render('admin/addcomputer.html.twig', array('compalls'=>$compall,
            'form' => $form->createView(),'wind_speed' =>null, 'wea_ther'=>null
        ));
    }

}